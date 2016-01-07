<?php
namespace Compufour\Uuid\Test;
use Compufour\Uuid\Uuid;

/**
 * @author Weverson Cachinsky <weversoncachinsky@gmail.com>
 */
class UuidTest extends \PHPUnit_Framework_TestCase
{
    /** @var  Uuid */
    private $service;

    public function setUp()
    {
        $this->service = new Uuid();
    }

    public function testIdentifierLengthWithLongerString()
    {
        $fakeNamespace = 'Inventory\Model\Product';
        $expected = 'ry\Model\Product';

        $this->service->setIdentifier($fakeNamespace);
        $actual = $this->service->getIdentifier();

        $this->assertEquals($expected, $actual);
    }

    public function testIdentifierLengthWithSmallerString()
    {
        $fakeNamespace = 'Product';
        $expected = str_repeat(Uuid::BYTE_FILLER, 9) . 'Product';

        $this->service->setIdentifier($fakeNamespace);
        $actual = $this->service->getIdentifier();

        $this->assertEquals($expected, $actual);
    }

    public function testUuidCreation()
    {
        $fakeNamespace = 'Inventory\Model\Product';
        $expectedUuid = 'adffd45d-50a7-5e8c-87b9-3fe2b7756e04';
        $actualUuid = $this->service->setIdentifier($fakeNamespace)->generate(10);

        $this->assertEquals($expectedUuid, $actualUuid);

        $expectedUuid = 'b88c6bce-4f8f-5419-910e-3227791e8ef8';
        $newUuid = $this->service->setIdentifier($fakeNamespace)->generate(2003123);

        $this->assertEquals($expectedUuid, $newUuid);
    }

    public function testBytesFillerStrLength()
    {
        $this->assertEquals(1, strlen(Uuid::BYTE_FILLER));
    }
}
