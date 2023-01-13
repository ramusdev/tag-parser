<?php

namespace Http\Helpers;

use Http\Models\Tag;

class TagFactory
{
    public static function makeTag($name, $pattern)
    {
        return new Tag($name, $pattern);
    }
}
