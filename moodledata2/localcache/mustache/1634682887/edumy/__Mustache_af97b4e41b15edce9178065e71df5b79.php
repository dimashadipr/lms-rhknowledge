<?php

class __Mustache_af97b4e41b15edce9178065e71df5b79 extends Mustache_Template
{
    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $buffer = '';

        $value = $this->resolveValue($context->find('ccn_globalsearch'), $context);
        $buffer .= $indent . $value;
        $buffer .= '
';

        return $buffer;
    }
}
