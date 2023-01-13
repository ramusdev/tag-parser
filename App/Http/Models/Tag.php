<?php

namespace Http\Models;

class Tag implements ITag
{
    private $name;
    private $pattern;

    public function __construct(string $name, string $pattern)
    {
        $this->name = $name;
        $this->pattern = $pattern;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getPattern(): string
    {
        return $this->pattern;
    }
}