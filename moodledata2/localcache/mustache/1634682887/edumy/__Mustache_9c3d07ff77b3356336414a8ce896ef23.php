<?php

class __Mustache_9c3d07ff77b3356336414a8ce896ef23 extends Mustache_Template
{
    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $buffer = '';

        $buffer .= $indent . '<div class="search_overlay">
';
        $buffer .= $indent . '  <a id="search-button-listener" class="mk-search-trigger mk-fullscreen-trigger" href="#">
';
        $buffer .= $indent . '    <span id="search-button"><i class="flaticon-magnifying-glass"></i></span>
';
        $buffer .= $indent . '  </a>
';
        $buffer .= $indent . '</div>
';

        return $buffer;
    }
}
