<?php
namespace Compufour\Uuid;

/**
 * @author Weverson Cachinsky <weversoncachinsky@gmail.com>
 */
interface UuidInterface
{
    public function generate(int $entityId);
    public function setIdentifier(string $entityName);
}

