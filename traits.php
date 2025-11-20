<?php
trait message1{
    public function msg_1(){
          echo 'this is message 1';
}

    }
trait message2{
    public function msg_2(){
          echo 'this is message 2';
}
}

class Welcome{
    use message1;
}
class Welcome_1{
    use message1,message2;
}

$obj_1=new Welcome();
$obj_1->msg_1();
echo "<br>";
$obj_1=new Welcome_1();
$obj_1->msg_1();
$obj_1->msg_2();

    
  
?>