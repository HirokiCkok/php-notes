<?php
class MyMailV2 {
  public string $to;
  public string $subject;
  public string $message;

  private array $headers = [];

  // 未定義のプロパティをisset関数で判定すると、$headersのキーをチェック
  public function __isset(string $name) : bool {
    return isset($this->headers[$name]);
  }

  // 未定義のプロパティをunset関数で判定すると、$headersのキーを削除
  public function __unset(string $name) : void {
    unset($this->headers[$name]);
  }

  public function __set(string $name, mixed $value) : void {
    $this->headers[$name] = $value;
  }

  public function __get(string $name) : mixed {
    return $this->headers[$name];
  }

  public function send() : void {
    $envFrom = getenv('MAIL_FROM');
    if ($envFrom !== false) {
      $this->headers['From'] = $envFrom;
    }

    $others = '';
    foreach ($this->headers as $key => $value) {
      $key = str_replace('_', '-', $key);
      $others .= "{$key}: {$value}\n";
    }
    mb_send_mail($this->to, $this->subject, $this->message, $others);
  }
}