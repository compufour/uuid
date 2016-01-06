<?php
namespace Compufour\uuid\Test;
use Ramsey\Uuid\Uuid;

/**
 * @author Weverson Cachinsky <weversoncachinsky@gmail.com>
 */
class TestCase extends \PHPUnit_Framework_TestCase
{
    public function testFromString()
    {
        $uuid = Uuid::fromString('ff6f8cb0-c57d-11e1-9b21-0800200c9a66');
        $this->assertEquals('ff6f8cb0-c57d-11e1-9b21-0800200c9a66', $uuid->toString());
    }

}
