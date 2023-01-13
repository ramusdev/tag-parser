<?php

namespace Http\Enums;

enum TagsEnum
{
    case DIV;
    case SPAN;
    case BODY;
    case A;
    case BR;
    case FORM;
    case HEAD;
    case INPUT;
    case UL;
    case LI;
    case TITLE;

    public function pattern(): string
    {
        return match($this)
        {
            TagsEnum::DIV => '/<div(.*?)>/',
            TagsEnum::SPAN => '/<span(.*?)>/',
            TagsEnum::BODY => '/<body(.*?)>/',
            TagsEnum::A => '/<a(.*?)>/',
            TagsEnum::BR => '/<br(.*?)>/',
            TagsEnum::FORM => '/<form(.*?)>/',
            TagsEnum::HEAD => '/<head(.*?)>/',
            TagsEnum::INPUT => '/<input(.*?)>/',
            TagsEnum::UL => '/<ul(.*?)>/',
            TagsEnum::LI => '/<li(.*?)>/',
            TagsEnum::TITLE => '/<title(.*?)>/'
        };
    }
}