<?php


class Books{
    public $Author = "ChetanBhai Bhagat"; // 
    public function towState(){
        return "tow States Story".$this->Author;
    }
    public function threeIdiots(){
        echo "three Idiots Story".$this->Author;
    }
}
$Bks = new Books;
echo $Bks->towState();
echo $Bks->threeIdiots();

?>
<p>$this is a peusudo varaible provided by PHP for access class own properties like DM and MF within class</p>
<p>$this referes it selfs object</p>