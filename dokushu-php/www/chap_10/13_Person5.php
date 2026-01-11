<?php
class Person5 {
  public string $firstName;
  public string $lastName;

  public function __construct(string $firstName, string $lastName) {
    $this->firstName = $firstName;
    $this->lastName = $lastName;
  }

  public function __destruct() {
    echo '<p>'.__CLASS__. 'オブジェクトが破棄されました。</p>';
  }

  public function show() : void {
    echo "<p>ボクの名前は{$this->lastName}{$this->firstName}です。</p>";
  }
}