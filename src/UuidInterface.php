<?php
namespace Compufour\Uuid;

/**
 * @author Weverson Cachinsky <weversoncachinsky@gmail.com>
 */
interface UuidInterface
{
    public function create(int $entityId);
    public function setIdentifier(string $entityName);
}

