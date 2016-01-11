<?php
namespace Compufour\Uuid;

use Ramsey\Uuid\Uuid as UuidLibrary;

/**
 * @author Weverson Cachinsky <weversoncachinsky@gmail.com>
 */

class Uuid implements UuidInterface
{
    const BYTE_FILLER = '.';

    private $identifier;

    public function generate(int $entityId) : string
    {
        return UuidLibrary::uuid4();
    }

    public function getIdentifier() : string
    {
        if (strlen($this->identifier == 16)) {
            return $this->identifier;
        }

        return $this->makeBytesCompatible($this->identifier);
    }

    public function setIdentifier(string $entityName) : self
    {
        $this->identifier = $entityName;

        return $this;
    }

    private function makeBytesCompatible(string $string)
    {
        $string = substr($string, -16, 16);

        return sprintf("%'".self::BYTE_FILLER."16s",  $string);
    }
}
