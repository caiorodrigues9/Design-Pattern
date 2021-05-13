<?php

namespace Caio\DesignPattern;

class PdoConnection extends \PDO
{

    private static ?self $instance=null;

    private function __construct($dns, $username = null, $passwd = null, $option = null)
    {
        parent::__construct($dns,$username,$passwd,$option);
    }

    public static function getInstace($dns, $username = null, $passwd = null, $option = null):self
    {
        if (is_null(self::$instance)) {
            self::$instance = new static($dns,$username,$passwd,$option);
        }

        return self::$instance;
    }

}