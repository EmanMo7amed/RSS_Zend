<?php

class Application_Form_AddRss extends Zend_Form
{

    public function init()
    {
        $this->setMethod('post');

        $this->addElement('text', 'rss', array('required' => true,
            'filters' => array('stringTrim'),
            'attribs' => array('class' => 'form-control')
            ));

        $this->addElement('submit', 'submit', array('label' => 'Save',
            'ignore' => true,
            'attribs' => array('style' => 'margin-left:430px', 'class' => 'btn btn-primary'),
            
            ));
    }


}

