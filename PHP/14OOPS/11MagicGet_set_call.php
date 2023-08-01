<?php
class ClassExample{
    public function FunctionName($a){
        echo "called";
    }
    public function __get($name){
        echo $name;
    }
    public function __set($name,$val)
    {
        echo "<br> __set <br> Name : ".$name." Value : ".$val;
    }
    public function __call($funcname,$params){
        echo $funcname;
        print_r($params);
    }   
}
$ClassExample = new ClassExample;
$ClassExample->Something;
$ClassExample->anything;
$ClassExample->username;
$ClassExample->username="Testing";
$ClassExample->insert("Testing","data");
$ClassExample->insert("Testing","data");
$ClassExample->insert("Testing","data","diff");
?>