<?php

class __Mustache_7c0491e369af3a743208ff4a31a3658f extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '<a class="nav-link ';
        // 'active' section
        $value = $context->find('active');
        $buffer .= $this->section5749c750acb0d7477dd5257d00cc6d53($context, $indent, $value);
        $buffer .= '" href="#" data-context-tree-node="1"
';
        $buffer .= $indent . '        ';
        // 'contextlevel' section
        $value = $context->find('contextlevel');
        $buffer .= $this->sectionF8855218cd635622f040da10fed9a390($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '        ';
        // 'contextid' section
        $value = $context->find('contextid');
        $buffer .= $this->section72fe3fd772977cd28c4e71b3e1d93c08($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '        ';
        // 'expandcontextid' section
        $value = $context->find('expandcontextid');
        $buffer .= $this->sectionE60c711987356eb12fb24d7082ebc595($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '        ';
        // 'expandelement' section
        $value = $context->find('expandelement');
        $buffer .= $this->section85df499087e23fbce60a8576aaf50764($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '        data-expanded="';
        $value = $this->resolveValue($context->find('expanded'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '">
';
        $buffer .= $indent . '    <i class="fa
';
        $buffer .= $indent . '        ';
        // 'expandelement' section
        $value = $context->find('expandelement');
        $buffer .= $this->section8bce541a9946215adf923a23e7cd7ddd($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '        ';
        // 'expandelement' section
        $value = $context->find('expandelement');
        $buffer .= $this->sectionFfccdc9b402c69ef78149d86388d3483($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '        ';
        // 'expandelement' inverted section
        $value = $context->find('expandelement');
        if (empty($value)) {
            
            // 'expanded' section
            $value = $context->find('expanded');
            $buffer .= $this->section248612e892923ac7e720458154c04fdd($context, $indent, $value);
        }
        $buffer .= '
';
        $buffer .= $indent . '        ';
        // 'expandelement' inverted section
        $value = $context->find('expandelement');
        if (empty($value)) {
            
            // 'expanded' inverted section
            $value = $context->find('expanded');
            if (empty($value)) {
                
                $buffer .= 'fa-file';
            }
        }
        $buffer .= '"
';
        $buffer .= $indent . '        >
';
        $buffer .= $indent . '    </i>
';
        $buffer .= $indent . '    ';
        $value = $this->resolveValue($context->find('text'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '
';
        $buffer .= $indent . '</a>
';
        if ($partial = $this->mustache->loadPartial('tool_dataprivacy/context_tree_branches')) {
            $buffer .= $partial->renderInternal($context);
        }

        return $buffer;
    }

    private function section5749c750acb0d7477dd5257d00cc6d53(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'active';
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
                
                $buffer .= 'active';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionF8855218cd635622f040da10fed9a390(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' data-contextlevel="{{.}}" ';
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
                
                $buffer .= ' data-contextlevel="';
                $value = $this->resolveValue($context->last(), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section72fe3fd772977cd28c4e71b3e1d93c08(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' data-contextid="{{.}}" ';
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
                
                $buffer .= ' data-contextid="';
                $value = $this->resolveValue($context->last(), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionE60c711987356eb12fb24d7082ebc595(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' data-expandcontextid="{{.}}" ';
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
                
                $buffer .= ' data-expandcontextid="';
                $value = $this->resolveValue($context->last(), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section85df499087e23fbce60a8576aaf50764(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' data-expandelement="{{.}}" ';
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
                
                $buffer .= ' data-expandelement="';
                $value = $this->resolveValue($context->last(), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionD5745a157ac0fa8f555779ec3eeef5e8(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'fa-minus';
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
                
                $buffer .= 'fa-minus';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section8bce541a9946215adf923a23e7cd7ddd(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '{{#expanded}}fa-minus{{/expanded}}';
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
                
                // 'expanded' section
                $value = $context->find('expanded');
                $buffer .= $this->sectionD5745a157ac0fa8f555779ec3eeef5e8($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionFfccdc9b402c69ef78149d86388d3483(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '{{^expanded}}fa-plus{{/expanded}}';
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
                
                // 'expanded' inverted section
                $value = $context->find('expanded');
                if (empty($value)) {
                    
                    $buffer .= 'fa-plus';
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section248612e892923ac7e720458154c04fdd(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'fa-folder-open';
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
                
                $buffer .= 'fa-folder-open';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
