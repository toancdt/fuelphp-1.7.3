<?php

namespace Presenter;

use \model\PageInfo;

class PreExam extends \Presenter {
    public function view() {
        $this->content = PageInfo::getPageTitle();
    }
}
?>