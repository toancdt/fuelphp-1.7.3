<?php

class Controller_ViewExam extends Controller {
    public function action_index() {
        $data = array();
        $data["title"] = 'day la test view';
        $data['content'] = 'day la noi dung phan test view';
        $view = View::forge('trainingFuel/layoutexam',$data);
        //var_dump($view->render());
        return $view;
    }
}