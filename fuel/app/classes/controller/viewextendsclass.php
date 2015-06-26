<?php
//namespace Blog;

class Controller_ViewExtendsClass extends Controller {
    public function action_index() {
         Package::load('mymath');
         $result = \Mymath\View::myFunc();
         echo $result;
    }
}
?>