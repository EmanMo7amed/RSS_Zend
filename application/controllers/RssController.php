<?php

class RssController extends Zend_Controller_Action
{

    private $model = null;

    public function init()
    {
        $this->model = new Application_Model_DbTable_Rss();
    }

    public function indexAction()
    {
        $rss = $this->model->listRss();

        $channels_arr = [];
        foreach ($rss as $key => $value) {
            $channel = new Zend_Feed_Rss($value['rss_link']);
            array_push($channels_arr, $channel);
        }
        $this->view->Channels=$channels_arr;
    }

    public function addAction()
    {
        $form = new Application_Form_AddRss();

        //if request is post......
        if ($this->getRequest()->isPost()) {
            if ($form->isValid($this->getRequest()->getParams())) {
                $data = $form->getValues();
            }
            if($this->model->addRss($data)){
                $this->redirect('rss/index'); 
            }
        }
        else{
            $this->view->form = $form;
        }
    }


}







