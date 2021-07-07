<?php
class Animal{
    const MAMMAL =0;
    const FISH =1;
    const BIRD =2;
    public $name;
    public $legs;
    public $type;

    public function __construct($name, $legs, $type){
        $this->name =$name;
        $this->legs =$legs;
        $this->type =$type;
            echo "My name is ".$name." and I am ".$this->getType()."!\n";
        }
    public function getName(){
        return $this->name;
    }
    public function getLegs(){
        return $this->legs;
    }
    public function getType(){
        if($this->type == Animal::MAMMAL){
            return "mammal";
        }
        if($this->type == Animal::FISH){
            return "fish";
        }
        if ($this->type == Animal::BIRD){
            return "bird";
        return "";
        }
    }
}
?>