<?php
class Controller_ExtendsCoreClass extends Controller {
    public function action_index(){
        $result = View::myFunc();
        echo $result;
    }
}
?>
