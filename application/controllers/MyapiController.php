<?php

class myapiController extends Zend_Controller_Action
{

    public function init()
    {
        /* Initialize action controller here */
    }

    public function indexAction()
    {
        // action body
    }
    
    public function clientAction() 
    {
        $form = new Application_Form_Myapi();
        $this->view->form = $form;
        
        if ($this->getRequest()->isPost()) {
            $formData = $this->getRequest()->getPost();
            $client = new Zend_Http_Client();
            $post = array('titel' => $formData['titel'], 'omschrijving' => $formData['omschrijving']);
            $client->setUri('http://local.myapi/api/Page/');
            $client->setParameterPost($post);
            $response = $client->request('POST');
            //var_dump($response);exit;
            $status = $response->getStatus();
            var_dump($status);
            $this->form->returnBody =  $response->getBody();
        }
    }
}

