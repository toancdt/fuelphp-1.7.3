<?php
//namespace Blog;

class Controller_PackMyMath extends Controller {
    public function action_index() {
         Package::load('mymath');
         $bo = new BasicOperator();
         $result = $bo->cong(2,3);
         echo $result."<br>";
    }
}
?>