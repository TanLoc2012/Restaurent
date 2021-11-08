<?php
require_once "mvc/utility/utility.php";
class FeedbackModel extends DB{
    
    public function getAllFeedback(){
        $sql = "select * from feedback order by status asc, updated_at desc";
	    $data = $this->executeResult($sql);
        return $data;
    }

    public function updateStatus($id){
        $updated_at = date("Y-m-d H:i:s");
	    $sql = "update feedback set status = 1, updated_at = '$updated_at' where id = $id";
	    $this->execute($sql);
    }
}


