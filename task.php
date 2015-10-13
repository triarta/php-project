<?php
$test= new task();
$test->changeNumber();
class task{
   
   public function __construct(){        

    }
   
    public function changeNumber()
    {
        $data1 = $_POST['a'];
        $data2 = $_POST['b'];
       
        $result1 = (($data1 + $data2) - ($data1));
        $result2 = (($data1 + $data2)- ($data2));
        echo json_encode(array($result1=>$result2));
    }
}

?>