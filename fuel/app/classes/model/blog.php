<?php
class Model_Blog extends \Orm\Model {
    protected static $_table_name = 'blog';
    protected static $_properties = array(
        'id',
        'title' => array(
            'data_type' => 'string',
            'lable' => 'Tieu De',
            'validation' => array('required', 'max_length' => array(100)),
        ),
        'body' => array(
            'data_type' => 'string',
            'label' => 'Noi Dung',
            'validation' => array('required'),
            'form' => array('type' => 'textarea'),
        ),
        'note' => array(
            'data_type' => 'string',
            'lable' => 'Ghi Chu',
            'form' => array('type' => 'textarea'),
        ),
    );
}
