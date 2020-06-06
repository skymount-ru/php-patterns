<?php

require dirname(__DIR__) . '/vendor/autoload.php';

use Skymount\PhpPatterns\Abstractions\AbstractSingleton;

class SingletonTest extends AbstractSingleton
{
    public $memory;

    public function setMemory($value)
    {
        $this->memory = $value;
    }

    public function getMemory()
    {
        return $this->memory;
    }
}

/** @var SingletonTest $singleton */
$singleton = SingletonTest::getInstance();
$singleton->setMemory(5);
echo 'Singleton #1: ', $singleton->getMemory(), "\n";

$singleton2 = SingletonTest::getInstance();
echo 'Singleton #2: ', $singleton2->getMemory(), "\n";

$singleton2->setMemory(7);
echo 'Singleton #2: ', $singleton2->getMemory(), "\n";

echo 'Comparing: ', $singleton === $singleton2 ? 'Are the same instance.' : 'Are the different objects.', "\n";
