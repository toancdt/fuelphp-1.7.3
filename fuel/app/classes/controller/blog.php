<?php
class Controller_Blog extends \Controller_Template {
    public $template = "blogtemplate";
    function action_index() {
        
    }
    function action_add() {
        $fieldset = Fieldset::forge()->add_model('Model_Blog');
        $form = $fieldset->form();
        $form->add('submit', '', array('type' => 'submit', 'value' => 'Add', 'class' => 'btn medium primary'));
        $this->template->set('content', $form->build(),false);
    }
    function action_edit($id) {
        
    }
}