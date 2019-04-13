<?php
class Pemberitahuan
{
  const ig = "Instagram" ;
  public static function pass()
  {
    echo "<strong>Congratulation! Your Registration Success!</strong><br/>" ;
  }
  public static function fail()
  {
    echo "<strong>Sorry, Your Registration Failed!</strong><br/>" ;
  }
}
 Pemberitahuan::pass();
 Pemberitahuan::fail();
?>