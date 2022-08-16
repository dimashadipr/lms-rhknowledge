<?php

class __Mustache_44f01c536659552b172bda5221ff836b extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '
';
        // 'httpsite' section
        $value = $context->find('httpsite');
        $buffer .= $this->sectionA5f732fc92c79feae20c6f6e590c7db6($context, $indent, $value);
        $buffer .= $indent . '
';
        $buffer .= $indent . '<div data-region="datarequests">
';
        $buffer .= $indent . '    <div class="mt-1 mb-1">
';
        $buffer .= $indent . '        <div class="float-right">
';
        $buffer .= $indent . '            <a href="';
        $value = $this->resolveValue($context->find('newdatarequesturl'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '" class="btn btn-primary" data-action="new-request">
';
        $buffer .= $indent . '                ';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->section8b55bca25c980fff003c0d15bc2c80fd($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '            </a>
';
        $buffer .= $indent . '        </div>
';
        // 'filter' section
        $value = $context->find('filter');
        $buffer .= $this->section561927127d36a02d883abd4666fe89bb($context, $indent, $value);
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    <div class="mt-1 mb-1" data-region="data-requests-table">
';
        $buffer .= $indent . '        ';
        $value = $this->resolveValue($context->find('datarequests'), $context);
        $buffer .= $value;
        $buffer .= '
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '</div>
';
        $buffer .= $indent . '
';
        // 'js' section
        $value = $context->find('js');
        $buffer .= $this->section69389f7ab886daadd47f12dedcfdce1e($context, $indent, $value);

        return $buffer;
    }

    private function sectionA5f732fc92c79feae20c6f6e590c7db6(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    {{> core/notification_warning}}
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
                
                if ($partial = $this->mustache->loadPartial('core/notification_warning')) {
                    $buffer .= $partial->renderInternal($context, $indent . '    ');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section8b55bca25c980fff003c0d15bc2c80fd(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'newrequest, tool_dataprivacy';
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
                
                $buffer .= 'newrequest, tool_dataprivacy';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section561927127d36a02d883abd4666fe89bb(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            {{>tool_dataprivacy/request_filter}}
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
                
                if ($partial = $this->mustache->loadPartial('tool_dataprivacy/request_filter')) {
                    $buffer .= $partial->renderInternal($context, $indent . '            ');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section69389f7ab886daadd47f12dedcfdce1e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
// Initialise the JS.
require([\'tool_dataprivacy/requestactions\'], function(ActionsMod) {
    new ActionsMod();
});
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
                
                $buffer .= $indent . '// Initialise the JS.
';
                $buffer .= $indent . 'require([\'tool_dataprivacy/requestactions\'], function(ActionsMod) {
';
                $buffer .= $indent . '    new ActionsMod();
';
                $buffer .= $indent . '});
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
