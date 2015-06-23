<?php
class Controller_ExampleRest extends Controller_Rest {
    public function action_convert_to_upper() {
        $str = $_GET['str'];
        $arr = array("str"=> strtoupper($str));
        return $this->response($arr);
    }
}
?>