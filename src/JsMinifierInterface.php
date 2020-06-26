<?php

namespace PhpAssets\Minify;

interface JsMinifierInterface
{
    /**
     * Minify javascript string.
     *
     * @param string $javascript
     * @return string
     */
    public function minify($javascript);
}
