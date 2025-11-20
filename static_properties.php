<?php
class S_Properties{
    public static $prop='jahid';
}


class S_P_child extends S_Properties{
    public function printt(){
       return  parent::$prop;
        
    }
}


echo S_Properties::$prop;

$prop=new S_P_child();
echo $prop->printt();
?>