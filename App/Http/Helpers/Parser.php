<?php

namespace Http\Helpers;

use Http\Helpers\ParserStrategy;
use Exception;

class Parser extends ParserStrategy
{
    private $tagList;
    private $content;
    private $tagWrapperArray;

    public function __construct($tagList, $content)
    {
        $this->tagList = $tagList;
        $this->content = $content;
    }

    public function test()
    {
        if ($this->tagList->size() == 0) {
            throw new Exception("Size is 0");
        }
    }

    public function findTag()
    {
        foreach ($this->tagList as $tag) {
            $pattern = $tag->getPattern();

            preg_match_all($pattern, $this->content, $out);
            $countTags = count($out[0]);

            $this->storeCountedTagHelper($tag, $countTags);
        }
    }

    private function storeCountedTagHelper($tag, $countTags)
    {
        $this->tagWrapperArray[] = new TagWrapper($tag, $countTags);
    }

    public function getCountedTags() {
        return $this->tagWrapperArray;
    }
}

