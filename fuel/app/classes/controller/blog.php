<?php
class Controller_Blog extends \Controller_Template {
    
    public $template = "blogtemplate";
    
    function action_index() {
        $blog = \Model_Blog::find('all');
        $view = \View::forge('listBlog');
        $view->set('blogs', $blog, false);
        $this->template->content = $view;
    }
    
    function action_add() {
        $fieldset = Fieldset::forge()->add_model('Model_Blog');
        $form = $fieldset->form();
        $form->add('submit', '', array('type' => 'submit', 'value' => 'Add', 'class' => 'btn medium primary'));
        $this->template->set('content', $form->build(),false);
        
        if($fieldset->validation()->run() == true) {
            $fields = $fieldset->validated();
            
            $blog = new Model_Blog();
            $blog->title = $fields['title'];
            $blog->body = $fields['body'];
            $blog->note = $fields['note'];
            
            if($blog->save()) {
                \Response::redirect('blog/edit/' . $blog->id);
            }
        } else {
            $fieldset = Fieldset::forge()->add_model('Model_Blog')->repopulate();
            $this->template->message = $fieldset = $fieldset->validation()->error();
        }
        
        $this->template->set('content', $form->build(),false);
    }
    
    function action_edit($id) {
        $blog = \Model_Blog::find($id);
        $fieldset = Fieldset::forge()->add_model('Model_Blog')->populate($blog);
        $form = $fieldset->form();
        $form->add('submit', '', array('type' => 'submit', 'value' => 'Add', 'class' => 'btn medium primary'));
        
        if($fieldset->validation()->run() == true) {
            $fields = $fieldset->validated();
            $blog->title = $fields['title'];
            $blog->body = $fields['body'];
            $blog->note = $fields['note'];
            
            if($blog->save()) {
                \Response::redirect('blog/edit/' . $id);
            }
        } else {
            $fieldset = Fieldset::forge()->add_model('Model_Blog')->repopulate();
            $this->template->messages = $fieldset->validation()->error();
        }
        
        $this->template->set('content', $form->build(), false);
    }
}
