<?php
class Controller_ViewSection extends Controller {
    public function action_index() {
/* Cach 1:
        //create the layout view
        $view = View::forge('trainingFuel/layout');
        
        //assign global variables
        $view->set_global('header_content','<b>day la page title tu controller</b>',false);
        $view->set_global('content','day la phan noi dung chua trong content.php',false);
        $view->set_global('footer_content','<b>day la page footer tu controller</b>',false);
        
        //assign views as variable, lazy rendering
        $view->header = View::forge('trainingFuel/header');
        $view->content = View::forge('trainingFuel/content');
        $view->footer = View::forge('trainingFuel/footer');
        
        // return the view object to request
        return $view;
*/
/* Cach 2:
         //create the layout view
         $view = View::forge('trainingFuel/layout');
         
         //assign views variables, lazy rendering
         $view->header = View::forge('trainingFuel/header',array('header_content'=>'<b>day la page title tu controller</b>'),false);
         $view->content = View::forge('trainingFuel/content',array('content'=>'day la phan noi dung chua trong content.php'),false);
         $view->footer = View::forge('trainingFuel/footer',array('footer_content'=>'<b>day la page footer tu controller</b>'),false);
         
         // return the view object to request
         return $view;
*/
// Cach 3:
        //assign variables
         $data = array();
         $data['header_content'] = '<b>day la page title tu controller</b>';
         $data['content'] = 'day la phan noi dung chua trong content.php';
         $data['footer_content'] = '<b>day la page footer tu controller</b>';
         
         //assign views as variables, forced redering
         //set 'auto_filter_output'  => false, trong app/config de khong bi escape
         $views = array();
         $views['header'] = View::forge('trainingFuel/header',$data)->render();
         $views['content'] = View::forge('trainingFuel/content',$data,false)->render();
         $views['footer'] = View::forge('trainingFuel/footer',$data,false)->render();
         
         //return the rendering HTML to the request
         return View::forge('trainingFuel/layout',$views,false)->render();
    }
}
?>