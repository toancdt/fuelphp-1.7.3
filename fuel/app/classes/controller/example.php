<?php
class Controller_Example extends Controller_Template {
    public $template = "template";
    public function action_index() {
        $this->template->content = "đây là nội dung được controller sinh ra";
        echo DOCROOT.'<br>';
        echo APPPATH.'<br>';
        echo PKGPATH.'<br>';
        echo COREPATH.'<br>';
    }
}
?>