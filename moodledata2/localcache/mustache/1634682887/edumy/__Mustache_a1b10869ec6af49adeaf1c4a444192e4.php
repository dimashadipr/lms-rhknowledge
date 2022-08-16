<?php

class __Mustache_a1b10869ec6af49adeaf1c4a444192e4 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '
';
        // 'branches' section
        $value = $context->find('branches');
        $buffer .= $this->section6cc03446a47900be46ddff77a55733bf($context, $indent, $value);

        return $buffer;
    }

    private function section6cc03446a47900be46ddff77a55733bf(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    <nav class="nav-pills flex-column">
        {{> tool_dataprivacy/context_tree_node}}
    </nav>
';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '    <nav class="nav-pills flex-column">
';
                if ($partial = $this->mustache->loadPartial('tool_dataprivacy/context_tree_node')) {
                    $buffer .= $partial->renderInternal($context, $indent . '        ');
                }
                $buffer .= $indent . '    </nav>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
