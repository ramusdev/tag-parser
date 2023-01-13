<?php

namespace Http\Helpers;

class TagWrapper
{
    public $tag;
    public $count;

    public function __construct($tag, $count)
    {
        $this->tag = $tag;
        $this->count = $count;
    }

    public function getTag()
    {
        return $this->tag;
    }

    public function setTag($tag): void
    {
        $this->tag = $tag;
    }

    public function getCount()
    {
        return $this->count;
    }

    public function setCount($count): void
    {
        $this->count = $count;
    }

}