<?php
class Home extends Controller{
    function Hi(){
        $Teo = $this->model('SinhVien');
        echo $Teo->getSV();   
    }
    function Show($a=0, $b=0){
        $A = $this->model('SinhVien');
        $this->view('aodep', [
            'Tong'=>$a+$b,
            'books'=> $A->book()
        ]);
    }
}
?>