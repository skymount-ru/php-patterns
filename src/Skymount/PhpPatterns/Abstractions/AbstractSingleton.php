<?php

namespace Skymount\PhpPatterns\Abstractions;

use Exception;
use ReflectionClass;
use Skymount\PhpPatterns\Interfaces\Classical\IsSingleton;

class AbstractSingleton implements IsSingleton
{
    private static $instance;

    /**
     * Return an instance or create it.
     *
     * @return object
     * @throws Exception
     */
    public static function getInstance(): object
    {
        try {
            if (empty(self::$instance)) {
                self::$instance = (new ReflectionClass(get_called_class()))
                    ->newInstanceWithoutConstructor();
            }
        } catch (\Exception $e) {
            throw new \Exception('Unable to instantiate a Singleton. Due to ' . $e->getMessage());
        }

        return self::$instance;
    }

    /**
     * AbstractSingleton constructor.
     * @throws Exception
     */
    private  function __construct()
    {
        throw new Exception('Singleton should only be initiated with getInstance() method!');
    }

    private  function __wakeup()
    {
        throw new Exception('Singleton cannot be woken up!');
    }

    private  function __clone()
    {
        throw new Exception('Singleton cannot be cloned!');
    }

    private  function __unserialize(array $data): void
    {
        throw new Exception('Singleton may not be unserialized!');
    }
}
