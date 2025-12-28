<?php
class Person {
  public string $firstName;
  public string $lastName;

  public function show() : void {
    echo "<p>ボクの名前は{$this->lastName}{$this->firstName}です。</p>";
  }
}