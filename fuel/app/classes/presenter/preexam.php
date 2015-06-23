<?php
use \model\PageInfo;

class Presenter_PreExam extends Presenter {
    public function view() {
        $this->content = PageInfo::getPageTitle();
    }
}
?>