<?php
namespace Blog;

class Controller_Entry extends \Controller {
    public function action_list() {
         return \View::forge("entry/list");
    }
    public function action_listblog() {
        return \View::forge("listblog");
    }
    public function action_makenewblog() {
        return \View::forge("makenewblog");
    }
    public function action_editblog() {
        return \View::forge("editblog");
    }
}
?>