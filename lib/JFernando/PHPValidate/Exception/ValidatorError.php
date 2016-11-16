<?php
/**
 * Created by PhpStorm.
 * User: JFernando
 * Date: 27/09/2016
 * Time: 16:27
 */

namespace JFernando\PHPValidate\Exception;

class ValidatorError
{

    protected $code;
    protected $message;
    protected $params;

    public function __construct($code, $message, $params = [])
    {
        $this->params = $params;
        $this->code = $code;
        $this->message = $message;
    }

    public function getCode()
    {
        return $this->code;
    }

    public function getMessage()
    {
        return $this->message;
    }

    public function getParams(){
        return $this->params;
    }

    public function addParam(array $param){
        $this->params[] = $param;
    }

    public function getParam(string $key){
        if($this->params[$key]){
            return $this->params[$key];
        }
        return null;
    }

    public function __toString()
    {
        return '{"code" : "' . $this->getCode()  . '", "message" : "' . $this->getMessage() .'"}';
    }
}
