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
        $client = new Zend_Http_Client();
        $post = array('titel' => 'titel', 'omschrijving' => 'omschrijving');
        $client->setUri('http://local.myapi/api/Page/');
        $client->setParameterPost($post);
        $response = $client->request('POST');
        var_dump($response);exit;
    }
}

