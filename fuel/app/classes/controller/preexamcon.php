<?php
class Controller_PreExamCon extends Controller {
    public function action_viewpresenter() {
        return Response::forge(Presenter::forge('preexam'));
    }
}
?>