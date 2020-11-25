<?php
class SinhVien extends Db{
    public function getSV(){
        return 'nguyên van du';
    }

    public function book(){
        $sql = "select * from books";
        $stmt = $this->con->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
?>