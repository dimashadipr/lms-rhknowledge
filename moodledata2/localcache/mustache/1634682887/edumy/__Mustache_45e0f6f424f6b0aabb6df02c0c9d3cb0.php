<?php

class __Mustache_45e0f6f424f6b0aabb6df02c0c9d3cb0 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div class="ccn_col_tree">
';
        // 'groups' section
        $value = $context->find('groups');
        $buffer .= $this->sectionD1b7a16eaae7b94dbf56c5bd0388ea8e($context, $indent, $value);
        $buffer .= $indent . '</div>
';

        return $buffer;
    }

    private function section8d18ca5e1e0c946c7922a8734bcaa09d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'title="{{get_title}}" ';
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
                
                $buffer .= 'title="';
                $value = $this->resolveValue($context->find('get_title'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section9cec5c8fb4c1a9f792b3adbf914da875(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
          <div><a {{#get_title}}title="{{get_title}}" {{/get_title}} href="{{{action}}}">{{get_content}}</a></div>
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
                
                $buffer .= $indent . '          <div><a ';
                // 'get_title' section
                $value = $context->find('get_title');
                $buffer .= $this->section8d18ca5e1e0c946c7922a8734bcaa09d($context, $indent, $value);
                $buffer .= ' href="';
                $value = $this->resolveValue($context->find('action'), $context);
                $buffer .= $value;
                $buffer .= '">';
                $value = $this->resolveValue($context->find('get_content'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</a></div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionD1b7a16eaae7b94dbf56c5bd0388ea8e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    <div class="ccn_col_branch">
      <h4 class="card-title">{{title}}</h4>
      <div class="card-text">
        {{#nodes}}
          <div><a {{#get_title}}title="{{get_title}}" {{/get_title}} href="{{{action}}}">{{get_content}}</a></div>
        {{/nodes}}
      </div>
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
                
                $buffer .= $indent . '    <div class="ccn_col_branch">
';
                $buffer .= $indent . '      <h4 class="card-title">';
                $value = $this->resolveValue($context->find('title'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</h4>
';
                $buffer .= $indent . '      <div class="card-text">
';
                // 'nodes' section
                $value = $context->find('nodes');
                $buffer .= $this->section9cec5c8fb4c1a9f792b3adbf914da875($context, $indent, $value);
                $buffer .= $indent . '      </div>
';
                $buffer .= $indent . '    </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
