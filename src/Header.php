<?php
/* (c) EspoCRM */

namespace Espo\ApiClient;

class Header
{
    /**
     * @var string
     */
    private $name;
    /**
     * @var string
     */
    private $value;
    public function __construct(string $name, string $value)
    {
        $this->name = $name;
        $this->value = $value;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getValue(): string
    {
        return $this->value;
    }
}
