<?php

namespace Http\Helpers;

use Iterator;

class TagList implements Iterator
{
    protected $storage = [];

    public function __construct()
    {
    }

    public function set($key, $value)
    {
        $this->storage[$key] = $value;
    }

    public function size()
    {
        return count($this->storage);
    }

    public function get($key)
    {
        return $this->storage[$key];
    }

    public function current(): mixed
    {
        return current($this->storage);
    }

    public function next(): void
    {
        next($this->storage);
    }

    public function key(): mixed
    {
        return key($this->storage);
    }

    public function valid(): bool
    {
        return null !== key($this->storage);
    }

    public function rewind(): void
    {
        reset($this->storage);
    }
}
