<?php

class __Mustache_ad294712f32eccb90337011baf51c633 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        // 'defaulteventcontext' section
        $value = $context->find('defaulteventcontext');
        $buffer .= $this->section926e0747350fcc10a6d7eeaf841a712f($context, $indent, $value);

        return $buffer;
    }

    private function section17f3d1ab55887b273f62f9f7fe44e71b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'newevent, core_calendar';
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
                
                $buffer .= 'newevent, core_calendar';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section926e0747350fcc10a6d7eeaf841a712f(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
  <div class="ccn-calendar-header-option">
    <button{{!
    }} class="btn btn-secondary float-sm-right float-right" {{!
    }} data-context-id="{{defaulteventcontext}}" {{!
    }} data-action="new-event-button" {{!
    }}>
      {{#str}}newevent, core_calendar{{/str}}
      </button>
  </div>
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
                
                $buffer .= $indent . '  <div class="ccn-calendar-header-option">
';
                $buffer .= $indent . '    <button';
                $buffer .= ' class="btn btn-secondary float-sm-right float-right" ';
                $buffer .= ' data-context-id="';
                $value = $this->resolveValue($context->find('defaulteventcontext'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" ';
                $buffer .= ' data-action="new-event-button" ';
                $buffer .= '>
';
                $buffer .= $indent . '      ';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section17f3d1ab55887b273f62f9f7fe44e71b($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '      </button>
';
                $buffer .= $indent . '  </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
