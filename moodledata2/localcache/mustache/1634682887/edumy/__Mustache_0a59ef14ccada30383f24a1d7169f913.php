<?php

class __Mustache_0a59ef14ccada30383f24a1d7169f913 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        // 'header_1' section
        $value = $context->find('header_1');
        $buffer .= $this->section3ca3ef5cbcb51e3f6a392c3927309c7c($context, $indent, $value);
        // 'header_2' section
        $value = $context->find('header_2');
        $buffer .= $this->section08d5e72632d6b79e6127e5168314bbd9($context, $indent, $value);
        // 'header_3' section
        $value = $context->find('header_3');
        $buffer .= $this->section2fdb389e4158a120342570abc0326773($context, $indent, $value);
        // 'header_4' section
        $value = $context->find('header_4');
        $buffer .= $this->section3bcf3ec9bfc2cbe580994aa8e8bc6d0f($context, $indent, $value);
        // 'header_5' section
        $value = $context->find('header_5');
        $buffer .= $this->sectionB2d3ece666dac789c64324edbd8cc7b0($context, $indent, $value);
        // 'header_6' section
        $value = $context->find('header_6');
        $buffer .= $this->section005b87fc58ccd2f43a2db6ab63d3b15c($context, $indent, $value);
        // 'header_7' section
        $value = $context->find('header_7');
        $buffer .= $this->section0a4f53c508bd48d464f0d24186799f00($context, $indent, $value);
        // 'header_8' section
        $value = $context->find('header_8');
        $buffer .= $this->section8a8c6b664a08e567c6fa8427aef484d1($context, $indent, $value);
        // 'header_9' section
        $value = $context->find('header_9');
        $buffer .= $this->section6eeca59873c7ef825f4071eb5c7c6308($context, $indent, $value);
        // 'header_10' section
        $value = $context->find('header_10');
        $buffer .= $this->section1872f7edf5e671722f5e5c176cfb7673($context, $indent, $value);
        // 'header_11' section
        $value = $context->find('header_11');
        $buffer .= $this->section02b8310699e434fb5bfb1186df842eaa($context, $indent, $value);
        // 'header_12' section
        $value = $context->find('header_12');
        $buffer .= $this->section50f49b4dc3bbb5f3ef2c457e50d5403c($context, $indent, $value);
        // 'header_13' section
        $value = $context->find('header_13');
        $buffer .= $this->sectionEb00ed10817c683101da827c7b896e7b($context, $indent, $value);
        // 'header_14' section
        $value = $context->find('header_14');
        $buffer .= $this->sectionFffd70d3afa2766bf4b6cddd26599b05($context, $indent, $value);
        if ($partial = $this->mustache->loadPartial('theme_edumy/ccn_modals')) {
            $buffer .= $partial->renderInternal($context);
        }
        if ($partial = $this->mustache->loadPartial('theme_edumy/ccn_breadcrumb')) {
            $buffer .= $partial->renderInternal($context);
        }

        return $buffer;
    }

    private function section3ca3ef5cbcb51e3f6a392c3927309c7c(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
  {{> theme_edumy/ccn_header_1 }}
  {{> theme_edumy/ccn_header_mob_1 }}
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
                
                if ($partial = $this->mustache->loadPartial('theme_edumy/ccn_header_1')) {
                    $buffer .= $partial->renderInternal($context, $indent . '  ');
                }
                if ($partial = $this->mustache->loadPartial('theme_edumy/ccn_header_mob_1')) {
                    $buffer .= $partial->renderInternal($context, $indent . '  ');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section08d5e72632d6b79e6127e5168314bbd9(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
  {{> theme_edumy/ccn_header_2 }}
  {{> theme_edumy/ccn_header_mob_2 }}
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
                
                if ($partial = $this->mustache->loadPartial('theme_edumy/ccn_header_2')) {
                    $buffer .= $partial->renderInternal($context, $indent . '  ');
                }
                if ($partial = $this->mustache->loadPartial('theme_edumy/ccn_header_mob_2')) {
                    $buffer .= $partial->renderInternal($context, $indent . '  ');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section2fdb389e4158a120342570abc0326773(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
  {{> theme_edumy/ccn_header_3 }}
  {{> theme_edumy/ccn_header_mob_3 }}
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
                
                if ($partial = $this->mustache->loadPartial('theme_edumy/ccn_header_3')) {
                    $buffer .= $partial->renderInternal($context, $indent . '  ');
                }
                if ($partial = $this->mustache->loadPartial('theme_edumy/ccn_header_mob_3')) {
                    $buffer .= $partial->renderInternal($context, $indent . '  ');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section3bcf3ec9bfc2cbe580994aa8e8bc6d0f(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
  {{> theme_edumy/ccn_header_4 }}
  {{> theme_edumy/ccn_header_mob_4 }}
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
                
                if ($partial = $this->mustache->loadPartial('theme_edumy/ccn_header_4')) {
                    $buffer .= $partial->renderInternal($context, $indent . '  ');
                }
                if ($partial = $this->mustache->loadPartial('theme_edumy/ccn_header_mob_4')) {
                    $buffer .= $partial->renderInternal($context, $indent . '  ');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionB2d3ece666dac789c64324edbd8cc7b0(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
  {{> theme_edumy/ccn_header_5 }}
  {{> theme_edumy/ccn_header_mob_5 }}
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
                
                if ($partial = $this->mustache->loadPartial('theme_edumy/ccn_header_5')) {
                    $buffer .= $partial->renderInternal($context, $indent . '  ');
                }
                if ($partial = $this->mustache->loadPartial('theme_edumy/ccn_header_mob_5')) {
                    $buffer .= $partial->renderInternal($context, $indent . '  ');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section005b87fc58ccd2f43a2db6ab63d3b15c(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
  {{> theme_edumy/ccn_header_6 }}
  {{> theme_edumy/ccn_header_mob_6 }}
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
                
                if ($partial = $this->mustache->loadPartial('theme_edumy/ccn_header_6')) {
                    $buffer .= $partial->renderInternal($context, $indent . '  ');
                }
                if ($partial = $this->mustache->loadPartial('theme_edumy/ccn_header_mob_6')) {
                    $buffer .= $partial->renderInternal($context, $indent . '  ');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section0a4f53c508bd48d464f0d24186799f00(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
  {{> theme_edumy/ccn_header_7 }}
  {{> theme_edumy/ccn_header_mob_7 }}
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
                
                if ($partial = $this->mustache->loadPartial('theme_edumy/ccn_header_7')) {
                    $buffer .= $partial->renderInternal($context, $indent . '  ');
                }
                if ($partial = $this->mustache->loadPartial('theme_edumy/ccn_header_mob_7')) {
                    $buffer .= $partial->renderInternal($context, $indent . '  ');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section8a8c6b664a08e567c6fa8427aef484d1(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
  {{> theme_edumy/ccn_header_8 }}
  {{> theme_edumy/ccn_header_mob_8 }}
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
                
                if ($partial = $this->mustache->loadPartial('theme_edumy/ccn_header_8')) {
                    $buffer .= $partial->renderInternal($context, $indent . '  ');
                }
                if ($partial = $this->mustache->loadPartial('theme_edumy/ccn_header_mob_8')) {
                    $buffer .= $partial->renderInternal($context, $indent . '  ');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section6eeca59873c7ef825f4071eb5c7c6308(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
  {{> theme_edumy/ccn_header_9 }}
  {{> theme_edumy/ccn_header_mob_9 }}
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
                
                if ($partial = $this->mustache->loadPartial('theme_edumy/ccn_header_9')) {
                    $buffer .= $partial->renderInternal($context, $indent . '  ');
                }
                if ($partial = $this->mustache->loadPartial('theme_edumy/ccn_header_mob_9')) {
                    $buffer .= $partial->renderInternal($context, $indent . '  ');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section1872f7edf5e671722f5e5c176cfb7673(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
  {{> theme_edumy/ccn_header_10 }}
  {{> theme_edumy/ccn_header_mob_10 }}
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
                
                if ($partial = $this->mustache->loadPartial('theme_edumy/ccn_header_10')) {
                    $buffer .= $partial->renderInternal($context, $indent . '  ');
                }
                if ($partial = $this->mustache->loadPartial('theme_edumy/ccn_header_mob_10')) {
                    $buffer .= $partial->renderInternal($context, $indent . '  ');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section02b8310699e434fb5bfb1186df842eaa(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
  {{> theme_edumy/ccn_header_11 }}
  {{> theme_edumy/ccn_header_mob_11 }}
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
                
                if ($partial = $this->mustache->loadPartial('theme_edumy/ccn_header_11')) {
                    $buffer .= $partial->renderInternal($context, $indent . '  ');
                }
                if ($partial = $this->mustache->loadPartial('theme_edumy/ccn_header_mob_11')) {
                    $buffer .= $partial->renderInternal($context, $indent . '  ');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section50f49b4dc3bbb5f3ef2c457e50d5403c(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
  {{> theme_edumy/ccn_header_12 }}
  {{> theme_edumy/ccn_header_mob_12 }}
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
                
                if ($partial = $this->mustache->loadPartial('theme_edumy/ccn_header_12')) {
                    $buffer .= $partial->renderInternal($context, $indent . '  ');
                }
                if ($partial = $this->mustache->loadPartial('theme_edumy/ccn_header_mob_12')) {
                    $buffer .= $partial->renderInternal($context, $indent . '  ');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionEb00ed10817c683101da827c7b896e7b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
  {{> theme_edumy/ccn_header_13 }}
  {{> theme_edumy/ccn_header_mob_13 }}
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
                
                if ($partial = $this->mustache->loadPartial('theme_edumy/ccn_header_13')) {
                    $buffer .= $partial->renderInternal($context, $indent . '  ');
                }
                if ($partial = $this->mustache->loadPartial('theme_edumy/ccn_header_mob_13')) {
                    $buffer .= $partial->renderInternal($context, $indent . '  ');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionFffd70d3afa2766bf4b6cddd26599b05(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
  {{> theme_edumy/ccn_header_14 }}
  {{> theme_edumy/ccn_header_mob_14 }}
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
                
                if ($partial = $this->mustache->loadPartial('theme_edumy/ccn_header_14')) {
                    $buffer .= $partial->renderInternal($context, $indent . '  ');
                }
                if ($partial = $this->mustache->loadPartial('theme_edumy/ccn_header_mob_14')) {
                    $buffer .= $partial->renderInternal($context, $indent . '  ');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
