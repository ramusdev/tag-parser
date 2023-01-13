<?php

namespace Http\Models;

interface ITag
{
    public function getName(): string;
    public function getPattern(): string;
}