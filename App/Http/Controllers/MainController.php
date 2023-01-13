<?php

namespace Http\Controllers;

use Http\Services\TagService;

class MainController
{
    public function __construct()
    {
    }

    public function showMainPage()
    {
        $url = "https://4pda.to";
        $tagService = new TagService($url);

        $tagWrapper = $tagService->findTags($url);
        print_r($tagWrapper);
    }
}
