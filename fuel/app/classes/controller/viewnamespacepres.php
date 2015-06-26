<?php
class Controller_ViewNameSpacePres extends Controller {
    public function action_Index() {
        return Response::forge(Presenter::forge('presenter\testnamespace\namespacepres'));
    }
}
?>