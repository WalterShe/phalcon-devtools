<?php

namespace Phalcon\Mvc\Model;

/**
 * Phalcon\Mvc\Model\Validator
 * This is a base class for Phalcon\Mvc\Model validators
 */
abstract class Validator
{

    protected $_options;


    protected $_messages = array();


    /**
     * Phalcon\Mvc\Model\Validator constructor
     *
     * @param array $options 
     */
    public function __construct($options) {}

    /**
     * Appends a message to the validator
     *
     * @param string $message 
     * @param string|array $field 
     * @param string $type 
     */
    protected function appendMessage($message, $field = null, $type = null) {}

    /**
     * Returns messages generated by the validator
     *
     * @return array 
     */
    public function getMessages() {}

    /**
     * Returns all the options from the validator
     *
     * @return array 
     */
    protected function getOptions() {}

    /**
     * Returns an option
     *
     * @param	string option
     * @return	mixed
     * @param string $option 
     */
    protected function getOption($option) {}

    /**
     * Check whether a option has been defined in the validator options
     *
     * @param string $option 
     * @return bool 
     */
    protected function isSetOption($option) {}


     function zephir_init_properties_Phalcon_Mvc_Model_Validator() {}

}