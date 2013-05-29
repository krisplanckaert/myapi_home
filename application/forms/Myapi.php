<?php

class Application_Form_Myapi extends Zend_Form
{
    public function __construct($options = null)
    {
    	parent::__construct($options);

        $titel = new Zend_Form_Element_Text('titel');
        $titel->addFilter('StringTrim')
              ->setLabel('Titel');

        $omschrijving = new Zend_Form_Element_Text('omschrijving');
        $omschrijving->addFilter('StringTrim')
                        ->setLabel('Omschrijving');

    	$submit=new Zend_Form_Element_Submit('submit');
    	$submit->setRequired(false)
               ->setIgnore(true);

        $this->addElements(array(
                            $titel,
                            $omschrijving,
                            $submit
                            )
        );
    }
}    
    	  
?>    	  