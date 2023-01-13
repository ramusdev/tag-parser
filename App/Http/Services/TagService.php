<?php

namespace Http\Services;

use Http\Enums\TagsEnum;
use Http\Helpers\ContentReceiver;
use Http\Helpers\Parser;
use Http\Helpers\TagFactory;
use Http\Helpers\TagList;

class TagService
{
    public function __construct()
    {

    }

    public function findTags($url)
    {
        $contentReceiver = new ContentReceiver($url);
        $contentReceiver->runCurl();
        $content = $contentReceiver->getContent();

        $tagList = new TagList();
        foreach (TagsEnum::cases() as $key => $enum)
        {
            $tagName = strtolower($enum->name);
            $tagPattern = $enum->pattern();

            $tagObj = TagFactory::makeTag($tagName, $tagPattern);
            $tagList->set($key, $tagObj);
        }

        $parser = new Parser($tagList, $content);
        $parser->parse();

        return $parser->getCountedTags();
    }
}