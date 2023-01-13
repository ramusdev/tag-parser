<?php

namespace Http\Helpers;

abstract class ParserStrategy
{
    final public function parse() {
        $this->test();
        $this->findTag();
    }

    abstract public function test();
    abstract public function findTag();
}