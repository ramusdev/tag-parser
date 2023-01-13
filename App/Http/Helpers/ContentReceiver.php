<?php

namespace Http\Helpers;

use Http\Helpers\ContentReceiverStrategy;

class ContentReceiver extends ContentReceiverStrategy
{
    private $url;
    private $content;
    private $curl;
    private static $userAgent = "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.43 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36 OPR/92.0.0.0";

    public function __construct($url)
    {
        $this->url = $url;
    }

    public function curlInit(): void
    {
        $this->curl = curl_init();

        curl_setopt($this->curl, CURLOPT_USERAGENT, ContentReceiver::$userAgent);
        curl_setopt($this->curl, CURLOPT_AUTOREFERER, true);
        curl_setopt($this->curl, CURLOPT_HEADER, 0);
        curl_setopt($this->curl, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($this->curl, CURLOPT_URL, $this->url);
        curl_setopt($this->curl, CURLOPT_FOLLOWLOCATION, $this->url);
    }

    public function curlExec(): void
    {
        $result = curl_exec($this->curl);
        curl_close($this->curl);

        $this->content = $result;
    }

    public function getContent(): string
    {
        return $this->content;
    }

}
