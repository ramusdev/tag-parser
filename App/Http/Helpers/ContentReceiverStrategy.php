<?php

namespace Http\Helpers;

abstract class ContentReceiverStrategy
{
    final public function runCurl() {
        $this->curlInit();
        $this->curlExec();
    }

    abstract public function curlInit();
    abstract public function curlExec();
}
