<?php
class Person {
  public string $firstName;
  public string $lastName;
  // 追加のメソッド群を格納する配列
  private array $methods = [];

  // 指定のメソッドを登録
  public function __set(string $name, \Closure $method) : void {
    $this->methods[$name] = $method->bindTo($this, self::class);
  }

  // 動的に登録されたメソッドを実行
  public function __call(string $name, array $args) : mixed {
    // methodsプロパティに未登録のメソッドはエラー
    if (!array_key_exists($name, $this->methods)) {
      throw new \Exception("{$name} method is not existed.");
    }
    return $this->methods[$name](...$args);
  }
}

$p = new Person();
$p->lastName = '井上';
$p->firstName = '尚弥';
$p->bye = function(): void {
  echo "{$this->lastName}{$this->firstName}さん、さようなら！";
};
$p->bye();