<?php

class __Mustache_3334b5b7590cd97b76033e0bec5364e3 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div class="container-fluid" data-region="data-deletion">
';
        $buffer .= $indent . '    <div class="row" data-region="top-nav">
';
        $buffer .= $indent . '        <div class="alert alert-info">
';
        $buffer .= $indent . '            ';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->section62cad88c7a52e8e6019fc1c956ddefb1($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '        <div class="float-left">
';
        // 'filter' section
        $value = $context->find('filter');
        $buffer .= $this->section40e5c22fcfffc8d7e18d66f831c9bc41($context, $indent, $value);
        $buffer .= $indent . '        </div>
';
        // 'existingcontexts' section
        $value = $context->find('existingcontexts');
        $buffer .= $this->section5a0cceb9572fb053ec4244fe5a68c4c4($context, $indent, $value);
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '    <div class="row mt-1 mb-1" data-region="expired-contexts-table">
';
        $buffer .= $indent . '        ';
        $value = $this->resolveValue($context->find('expiredcontexts'), $context);
        $buffer .= $value;
        $buffer .= '
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '    <div class="row" data-region="bottom-nav">
';
        // 'existingcontexts' section
        $value = $context->find('existingcontexts');
        $buffer .= $this->section5a0cceb9572fb053ec4244fe5a68c4c4($context, $indent, $value);
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '</div>
';
        // 'js' section
        $value = $context->find('js');
        $buffer .= $this->sectionDd7eaaf963d298e4e16330d7335eb098($context, $indent, $value);

        return $buffer;
    }

    private function section62cad88c7a52e8e6019fc1c956ddefb1(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'datadeletionpagehelp, tool_dataprivacy';
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
                
                $buffer .= 'datadeletionpagehelp, tool_dataprivacy';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section40e5c22fcfffc8d7e18d66f831c9bc41(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                {{> core/single_select}}
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
                
                if ($partial = $this->mustache->loadPartial('core/single_select')) {
                    $buffer .= $partial->renderInternal($context, $indent . '                ');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionD5da9c339ca95ceccf180d1041fec93c(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'deleteselected, moodle';
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
                
                $buffer .= 'deleteselected, moodle';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section5a0cceb9572fb053ec4244fe5a68c4c4(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <div class="float-right">
                <button data-action="markfordeletion" class="btn btn-secondary">{{#str}}deleteselected, moodle{{/str}}</button>
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
                
                $buffer .= $indent . '            <div class="float-right">
';
                $buffer .= $indent . '                <button data-action="markfordeletion" class="btn btn-secondary">';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->sectionD5da9c339ca95ceccf180d1041fec93c($context, $indent, $value);
                $buffer .= '</button>
';
                $buffer .= $indent . '            </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionDd7eaaf963d298e4e16330d7335eb098(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
// Initialise the JS.
require([\'tool_dataprivacy/data_deletion\'], function(DataDeletion) {
    new DataDeletion();
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
                $buffer .= $indent . 'require([\'tool_dataprivacy/data_deletion\'], function(DataDeletion) {
';
                $buffer .= $indent . '    new DataDeletion();
';
                $buffer .= $indent . '});
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
