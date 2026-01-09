<?php
class MyMailV3 {
  public string $to;
  public string $subject;
  public string $message;

  private array $headers = [];

  // 未定義のメソッドが呼び出された場合に実行
  public function __call(string $name, array $args) : mixed {
    // 引数が渡されなかった場合は、メソッド名に対応するキーの値を取得
    if (count($args) === 0) {
      return $this->headers[$name];
    // 引数が渡された場合、メソッド名に対するキーに引数の値を設定（戻り値は設定した値）
    }
    return $this->headers[$name] = $args[0];
  }

  public function __isset(string $name) : bool {
    return isset($this->headers[$name]);
  }

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