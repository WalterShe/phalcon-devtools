<?php

namespace Phalcon\Mvc\Model;

/**
 * Phalcon\Mvc\Model\ValidatorInterface
 * Interface for Phalcon\Mvc\Model validators
 */
interface ValidatorInterface
{

    /**
     * Returns messages generated by the validator
     *
     * @return array 
     */
    public function getMessages();

    /**
     * Executes the validator
     *
     * @param \Phalcon\Mvc\ModelInterface $record 
     * @return boolean 
     */
    public function validate(\Phalcon\Mvc\ModelInterface $record);

}
