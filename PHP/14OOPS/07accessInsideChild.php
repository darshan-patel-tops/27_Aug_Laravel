<?php


class AccessDataMember{
    public $PublicDm = "Public Dm Water"; // accessible within class and out side of class too
    protected $ProtectedDm = "Protected Dm Juice"; // not accessible out side of class too exept inherited class
    private $PrivateDm = "Private Dm costly wine"; // just accesseible inside class
    function AccessDataMemberParent(){
        echo $this->PublicDm."<br>";
        echo $this->ProtectedDm."<br>";
        echo $this->PrivateDm."<br>";
    }
}

class ChildClass extends AccessDataMember{
    function AccessDataMemberChild(){
        echo $this->PublicDm."<br>";
        echo $this->ProtectedDm."<br>";
        echo $this->PrivateDm."<br>";
    }
}
$anything = new ChildClass;
echo $anything->AccessDataMemberChild();
echo $anything->AccessDataMemberParent();
// echo $anything->ProtectedDm;
// echo $anything->PrivateDm;


?>