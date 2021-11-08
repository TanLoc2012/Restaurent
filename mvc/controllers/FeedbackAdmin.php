<?php
require_once "mvc/utility/utility.php";
class FeedbackAdmin extends Controller{

    public $feedbackModel;

    public function __construct() {
        $this->feedbackModel = $this->model("FeedbackModel");
    }

    public function SayHi(){
        $allFeedback = $this->feedbackModel->getAllFeedback();
        $this->view("feedback/feedbackAdmin",[
            "allFeedback"=>$allFeedback
        ]);
    }

    public function updateStatusFeedback($id) {
        $this->feedbackModel->updateStatus($id);
        header('Location: http://localhost/Laptrinhweb/FeedbackAdmin');

    }

}

?>