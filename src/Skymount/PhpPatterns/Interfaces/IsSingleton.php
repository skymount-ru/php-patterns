<?php

namespace Skymount\PhpPatterns\Interfaces\Classical;

/**
 * A Singleton interface.
 *
 * Interface Group: Creational.
 *
 * @package Skymount\Interfaces\Creational
 * @author  Dmitry Vikharev <idexdv@gmail.com>
 */
interface IsSingleton
{
    /**
     * Return an instance or create it.
     *
     * @return object
     * @throws \Exception
     */
    public static function getInstance(): object;
}
