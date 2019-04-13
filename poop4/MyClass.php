<?php
/**
* Define MyClass
*/
class MyClass
{
public function __construct() { }
public function MyPublic() { }
protected function MyProtected() { }
private function MyPrivate() { }
function Foo()
{
$this->MyPublic();
$this->MyProtected();
$this->MyPrivate();
}
}
$myclass = new MyClass;
$myclass->MyPublic();
// $myclass->MyProtected();
// $myclass->MyPrivate();
$myclass->Foo();
/**
* Define MyClass2
*/
class MyClass2 extends MyClass
{
function Foo2()
{
$this->MyPublic();
$this->MyProtected();
$this->MyPrivate();
}
}
$myclass2 = new MyClass2;
$myclass2->MyPublic();
$myclass2->Foo2();
class Bar
{
public function test() {
$this->testPrivate();
$this->testPublic();
}
public function testPublic() {
echo "Bar::testPublic\n";
}
private function testPrivate() {
echo "Bar::testPrivate\n";
}
}
class Foo extends Bar
{
public function testPublic() {
echo "Foo::testPublic\n";
}
private function testPrivate() {
echo "Foo::testPrivate\n";
}
}
$myFoo = new foo();
$myFoo->test();
?>