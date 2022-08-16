<?php

class __Mustache_5ba8b539794dcf352c86763d7b2d06b6 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        // 'footer_1' section
        $value = $context->find('footer_1');
        $buffer .= $this->section1ad26edae3c5da8b35ae92a5e206f68d($context, $indent, $value);
        // 'footer_2' section
        $value = $context->find('footer_2');
        $buffer .= $this->section1ad26edae3c5da8b35ae92a5e206f68d($context, $indent, $value);
        // 'footer_3' section
        $value = $context->find('footer_3');
        $buffer .= $this->section1ad26edae3c5da8b35ae92a5e206f68d($context, $indent, $value);
        // 'footer_4' section
        $value = $context->find('footer_4');
        $buffer .= $this->section08ec2c1d053d72c468463f1ec8a18045($context, $indent, $value);
        // 'footer_5' section
        $value = $context->find('footer_5');
        $buffer .= $this->section1ad26edae3c5da8b35ae92a5e206f68d($context, $indent, $value);
        // 'footer_6' section
        $value = $context->find('footer_6');
        $buffer .= $this->section1ad26edae3c5da8b35ae92a5e206f68d($context, $indent, $value);
        // 'footer_7' section
        $value = $context->find('footer_7');
        $buffer .= $this->section1ad26edae3c5da8b35ae92a5e206f68d($context, $indent, $value);
        // 'footer_8' section
        $value = $context->find('footer_8');
        $buffer .= $this->sectionC67647fec1e90ba17f355d60d39da367($context, $indent, $value);
        // 'footer_9' section
        $value = $context->find('footer_9');
        $buffer .= $this->sectionF52680fdd5c51095bf59d5b1bf3cf00b($context, $indent, $value);
        $buffer .= $indent . '
';
        $buffer .= $indent . '
';
        // 'back_to_top' section
        $value = $context->find('back_to_top');
        $buffer .= $this->section5aa096c8cddc0853fbe03993f81ba285($context, $indent, $value);
        $buffer .= $indent . '
';
        // 'gmaps_key' section
        $value = $context->find('gmaps_key');
        $buffer .= $this->section1a7284b9d6e7de10ecdcf71b0f6e2bed($context, $indent, $value);
        $buffer .= $indent . '
';
        $value = $this->resolveValue($context->find('custom_js'), $context);
        $buffer .= $indent . $value;
        $buffer .= '
';
        $value = $this->resolveValue($context->findDot('output.standard_end_of_body_html'), $context);
        $buffer .= $indent . $value;
        $buffer .= '
';

        return $buffer;
    }

    private function section1ad26edae3c5da8b35ae92a5e206f68d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
  {{> theme_edumy/ccn_footer_default }}
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
                
                if ($partial = $this->mustache->loadPartial('theme_edumy/ccn_footer_default')) {
                    $buffer .= $partial->renderInternal($context, $indent . '  ');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section08ec2c1d053d72c468463f1ec8a18045(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
  {{> theme_edumy/ccn_footer_4 }}
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
                
                if ($partial = $this->mustache->loadPartial('theme_edumy/ccn_footer_4')) {
                    $buffer .= $partial->renderInternal($context, $indent . '  ');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionC67647fec1e90ba17f355d60d39da367(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
  {{> theme_edumy/ccn_footer_8 }}
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
                
                if ($partial = $this->mustache->loadPartial('theme_edumy/ccn_footer_8')) {
                    $buffer .= $partial->renderInternal($context, $indent . '  ');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionF52680fdd5c51095bf59d5b1bf3cf00b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
  {{> theme_edumy/ccn_footer_9 }}
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
                
                if ($partial = $this->mustache->loadPartial('theme_edumy/ccn_footer_9')) {
                    $buffer .= $partial->renderInternal($context, $indent . '  ');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section5aa096c8cddc0853fbe03993f81ba285(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
  <a class="scrollToHome" href="#"><i class="flaticon-up-arrow-1"></i></a>
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
                
                $buffer .= $indent . '  <a class="scrollToHome" href="#"><i class="flaticon-up-arrow-1"></i></a>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section1a7284b9d6e7de10ecdcf71b0f6e2bed(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
  <script src="//maps.googleapis.com/maps/api/js?key={{gmaps_key}}"></script>
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
                
                $buffer .= $indent . '  <script src="//maps.googleapis.com/maps/api/js?key=';
                $value = $this->resolveValue($context->find('gmaps_key'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '"></script>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
