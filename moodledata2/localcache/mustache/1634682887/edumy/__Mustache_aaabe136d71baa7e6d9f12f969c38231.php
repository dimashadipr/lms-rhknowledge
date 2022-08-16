<?php

class __Mustache_aaabe136d71baa7e6d9f12f969c38231 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div class="data-registry">
';
        $buffer .= $indent . '    <div class="top-nav d-flex">
';
        // 'defaultsbutton' section
        $value = $context->find('defaultsbutton');
        $buffer .= $this->section2522d158b0509584ae9e4e73dac18980($context, $indent, $value);
        // 'actions' section
        $value = $context->find('actions');
        $buffer .= $this->section9b0841d5ef1c367ff3f6529e73887ebf($context, $indent, $value);
        $buffer .= $indent . '    </div>
';
        // 'info' section
        $value = $context->find('info');
        $buffer .= $this->section66381891bda2eb5d859b8b67f5b35500($context, $indent, $value);
        // 'nosystemdefaults' section
        $value = $context->find('nosystemdefaults');
        $buffer .= $this->sectionAb15cc92865f9a6052253d65b0b04fb5($context, $indent, $value);
        $buffer .= $indent . '
';
        $buffer .= $indent . '    <div class="container-fluid mt-2">
';
        $buffer .= $indent . '        <div class="row">
';
        $buffer .= $indent . '            <div class="col-md-4 pl-0 nav-pills context-tree">
';
        // 'tree' section
        $value = $context->find('tree');
        $buffer .= $this->section6949d4a77cd3acf2e9e25fb758f390d8($context, $indent, $value);
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '            <div class="col-md-8" id="context-form-container">
';
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '</div>
';

        return $buffer;
    }

    private function section2522d158b0509584ae9e4e73dac18980(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            {{> core/action_link}}
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
                
                if ($partial = $this->mustache->loadPartial('core/action_link')) {
                    $buffer .= $partial->renderInternal($context, $indent . '            ');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section9b0841d5ef1c367ff3f6529e73887ebf(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            {{> core/action_menu}}
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
                
                if ($partial = $this->mustache->loadPartial('core/action_menu')) {
                    $buffer .= $partial->renderInternal($context, $indent . '            ');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section66381891bda2eb5d859b8b67f5b35500(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <div class="mt-1">
            {{> core/notification_info}}
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
                
                $buffer .= $indent . '        <div class="mt-1">
';
                if ($partial = $this->mustache->loadPartial('core/notification_info')) {
                    $buffer .= $partial->renderInternal($context, $indent . '            ');
                }
                $buffer .= $indent . '        </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionAb15cc92865f9a6052253d65b0b04fb5(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <div class="mt-1">
            {{> core/notification_warning}}
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
                
                $buffer .= $indent . '        <div class="mt-1">
';
                if ($partial = $this->mustache->loadPartial('core/notification_warning')) {
                    $buffer .= $partial->renderInternal($context, $indent . '            ');
                }
                $buffer .= $indent . '        </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section6949d4a77cd3acf2e9e25fb758f390d8(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    {{> tool_dataprivacy/context_tree_node}}
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
                
                if ($partial = $this->mustache->loadPartial('tool_dataprivacy/context_tree_node')) {
                    $buffer .= $partial->renderInternal($context, $indent . '                    ');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
