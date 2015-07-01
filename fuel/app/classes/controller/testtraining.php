<?php

class Controller_Testtraining extends Controller {
    public function action_index() {

        $article_form = Fieldset::forge('article');
        $validation = $article_form->validation();
        $form = $article_form->form();
        
       // $title_field = $article_form->add('article_title', 'Title', array('class' => 'pretty_input'));
        
        // Example Radio
        $ops = array('male', 'female');
        $form->add(
            'gender', '',
            array('options' => $ops, 'type' => 'radio', 'value' => 'true')
        );
        

        $article_form->build();
    }
            
}