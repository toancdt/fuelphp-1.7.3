<?php
namespace Feature;

class Controller_Index extends \Controller {
    public function action_index() {
        \Module::load('blog');
         return \View::forge("blog::entry/list");
    }
}
?>