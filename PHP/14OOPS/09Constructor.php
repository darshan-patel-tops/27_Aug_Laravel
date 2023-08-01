<?php


class ConstructExample{
    // public function ConstructExample(){ //same name as class name other lang
    //     echo "called";
    // }

    public $dbConnection = "";
    public function __construct() {
        echo "__construct is a method which is invoked by default when objects are created <br> constructor nerver return <br> for initiate something for class whenever objects are created like database connection in model";
        $this->dbConnection = "my db connection";
    }    
    public function insert(){ echo "<br>Insert<br>";echo $this->dbConnection; }
    public function update(){ echo "<br>update<br>";echo $this->dbConnection; }
    public function delete(){ echo "<br>delete<br>";echo $this->dbConnection; }
}

$ConstructExample = new ConstructExample;
$ConstructExample->update();

?>