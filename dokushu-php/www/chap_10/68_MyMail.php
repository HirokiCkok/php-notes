<?php
class MyMail {
  // to（宛先）、subject（件名）、message（本文）、プロパティを定義
  public string $to;
  public string $subject;
  public string $message;
  // その他のヘッダー情報を格納するためのプライベート変数（連想配列）
  private array $headers = [];

  // 未定義のプロパティを設定すると、$headersにその値をセット
  public function __set(string $name, mixed $value) : void {
    $this->headers[$name] = $value;
  }

  // 未定義のプロパティを取得しようとすると、$headersから該当する値を取得
  public function __get(string $name) : mixed {
    return $this->headers[$name];
  }

  // プロパティの情報を基にメールを送信
  public function send() : void {
    // ★ 追加 From は .env があれば必ずそちらを優先
    $envFrom = getenv('MAIL_FROM');
    if ($envFrom !== false) {
      $this->headers['From'] = $envFrom;
    }

    $others = '';
    // $headersの内容を基にヘッダー情報（改行区切り）を生成
    foreach ($this->headers as $key => $value) {
      // プロパティ名に含まれる「_」は「-」に変換
      $key = str_replace('_', '-', $key);
      $others .= "{$key}: {$value}\n";
    }
    // メールを送信
    mb_send_mail($this->to, $this->subject, $this->message, $others);
  }
}