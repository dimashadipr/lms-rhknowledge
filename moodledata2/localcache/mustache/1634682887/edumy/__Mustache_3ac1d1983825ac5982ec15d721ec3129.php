<?php

class __Mustache_3ac1d1983825ac5982ec15d721ec3129 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div class="container ccn_breadcrumb_widgets clearfix">
';
        // 'settingsmenu' section
        $value = $context->find('settingsmenu');
        $buffer .= $this->section43f3b5f7a23370dcccd952a1593053b4($context, $indent, $value);
        // 'headeractions' section
        $value = $context->find('headeractions');
        $buffer .= $this->section78f8aa8d99ecbee2590deb76979f2f06($context, $indent, $value);
        // 'pageheadingbutton' section
        $value = $context->find('pageheadingbutton');
        $buffer .= $this->sectionB2da8b806c583671943c1cb3f0025cf9($context, $indent, $value);
        // 'courseheader' section
        $value = $context->find('courseheader');
        $buffer .= $this->section1cf26b407823853fb15bd565dd0f870b($context, $indent, $value);
        $buffer .= $indent . '</div>
';

        return $buffer;
    }

    private function section43f3b5f7a23370dcccd952a1593053b4(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    <div id="ccnSettingsMenu" class="context-header-settings-menu">
      {{{settingsmenu}}}
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
                
                $buffer .= $indent . '    <div id="ccnSettingsMenu" class="context-header-settings-menu">
';
                $buffer .= $indent . '      ';
                $value = $this->resolveValue($context->find('settingsmenu'), $context);
                $buffer .= $value;
                $buffer .= '
';
                $buffer .= $indent . '    </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section78f8aa8d99ecbee2590deb76979f2f06(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    <div class="header-actions-container flex-shrink-0" data-region="header-actions-container">
      <div class="header-action ml-2">{{{.}}}</div>
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
                
                $buffer .= $indent . '    <div class="header-actions-container flex-shrink-0" data-region="header-actions-container">
';
                $buffer .= $indent . '      <div class="header-action ml-2">';
                $value = $this->resolveValue($context->last(), $context);
                $buffer .= $value;
                $buffer .= '</div>
';
                $buffer .= $indent . '    </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionB2da8b806c583671943c1cb3f0025cf9(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    <div id="page-heading-button">
      {{{pageheadingbutton}}}
      {{{contextheader}}}
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
                
                $buffer .= $indent . '    <div id="page-heading-button">
';
                $buffer .= $indent . '      ';
                $value = $this->resolveValue($context->find('pageheadingbutton'), $context);
                $buffer .= $value;
                $buffer .= '
';
                $buffer .= $indent . '      ';
                $value = $this->resolveValue($context->find('contextheader'), $context);
                $buffer .= $value;
                $buffer .= '
';
                $buffer .= $indent . '    </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section1cf26b407823853fb15bd565dd0f870b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    <div id="course-header">
      {{{courseheader}}}
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
                
                $buffer .= $indent . '    <div id="course-header">
';
                $buffer .= $indent . '      ';
                $value = $this->resolveValue($context->find('courseheader'), $context);
                $buffer .= $value;
                $buffer .= '
';
                $buffer .= $indent . '    </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
