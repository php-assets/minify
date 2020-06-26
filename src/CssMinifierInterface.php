<?php

namespace PhpAssets\Minify;

interface CssMinifierInterface
{
    /**
     * Minify css string.
     *
     * @param string $css
     * @return string
     */
    public function minify($css);
}
