<?php


class StaticClassExample{
    public $PublicDm = "Public Dm Water"; // accessible within class and out side of class too
    protected $ProtectedDm = "Protected Dm Juice"; // not accessible out side of class too exept inherited class
    private $PrivateDm = "Private Dm costly wine"; // just accesseible inside class
    public static $staticDM = "static DM Out side without class object"; // just accesseible inside class
    public static function AccessDataMemberParent(){
        echo "<br>AccessDataMemberParent<br>";
        echo self::$staticDM."<br>";
        // echo $this->ProtectedDm."<br>";
        // echo $this->PrivateDm."<br>";
    }
}

class ChildClass extends StaticClassExample{
    public static $staticDM="something";
    public static function FunctionName(){
        echo "<br>called Child Static<br>";
        echo self::$staticDM."<br>";
        echo parent::$staticDM."<br>";
    }
}

// $anything = new StaticClassExample;
// echo StaticClassExample::$PublicDm; //Uncaught Error: Access to undeclared static property StaticClassExample::$PublicDm in
echo StaticClassExample::$staticDM; 
echo "<br>";
echo StaticClassExample::AccessDataMemberParent();
echo "<br>";
echo ChildClass::FunctionName();
// echo $anything->ProtectedDm;
// echo $anything->PrivateDm;


?>