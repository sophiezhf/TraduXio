<?php

class Form_Login extends Zend_Form
{
    public function init()
    {
        $username = $this->addElement('text', 'username', array(
            'filters'    => array('StringTrim', 'StringToLower'),
            'validators' => array(
            ),
            'required'   => true,
            'label'      => 'Your username:',
            'value'    => 'atena'
        ));

        $password = $this->addElement('password', 'password', array(
            'filters'    => array('StringTrim'),
            'validators' => array(
            ),
            'required'   => true,
            'label'      => 'Password:',
        ));

        $password = $this->addElement('text', 'redirect', array(
            'validators' => array(
            ),
            'required'   => true,
        ));

         $login = $this->addElement('submit', 'login', array(
            'required' => false,
            'ignore'   => true,
            'label'    => 'Login',
        ));

        // We want to display a 'failed authentication' message if necessary;
        // we'll do that with the form 'description', so we need to add that
        // decorator.
        $this->setDecorators(array(
            'FormElements',
            array('HtmlTag', array('tag' => 'dl', 'class' => 'zend_form')),
            array('Description', array('placement' => 'prepend')),
            'Form'
        ));
    }
}
