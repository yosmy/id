<?php

namespace Yosmy;

/**
 * @di\service()
 */
class GenerateId
{
    /**
     * @return string
     */
    public function generate(): string
    {
        return uniqid();
    }
}
