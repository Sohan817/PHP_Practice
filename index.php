<?php
//Global scope var
$test = "Sohan";

function myFunction()
{
  //local scope var
  $localVar = "Nadim";
  //use of local vaer inside the function
  return $localVar;
}
echo myFunction();

function myFunction1()
{
  //global var used in local scope
  global $test;
  //use of local var inside the function
  return $test;
}
echo myFunction1();

//using global var by super global variable
$test1 = "Suborna";
function myFunction2()
{
  //use of local var inside the function
  return $GLOBALS["test1"];
}
echo myFunction2();

//Static scope variable
function staticScope()
{
  static $staticVar = 0;

  $staticVar++;

  return $staticVar;
}
echo staticScope();
echo staticScope();

//class scope 
class Mycllass
{
  //define a class var
  public $myVar = "Hello class";
  //define a class function
  public function myFunc()
  {
    return $this->myVar;
  }
}
