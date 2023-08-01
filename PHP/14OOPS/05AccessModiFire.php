<?php


class AccessDataMember{
    public $PublicDm = "Public Dm Water"; // accessible within class and out side of class too
    protected $ProtectedDm = "Protected Dm Juice"; // not accessible out side of class too exept inherited class
    private $PrivateDm = "Private Dm costly wine"; // just accesseible inside class
}
$anything = new AccessDataMember;
echo $anything->PublicDm;
// echo $anything->ProtectedDm;
echo $anything->PrivateDm;


?>