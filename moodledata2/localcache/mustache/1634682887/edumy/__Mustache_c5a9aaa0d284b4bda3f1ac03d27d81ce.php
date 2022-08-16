<?php

class __Mustache_c5a9aaa0d284b4bda3f1ac03d27d81ce extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        if ($partial = $this->mustache->loadPartial('theme_edumy/head_dashboard')) {
            $buffer .= $partial->renderInternal($context);
        }
        $buffer .= $indent . '<body ';
        $value = $this->resolveValue($context->find('bodyattributes'), $context);
        $buffer .= $value;
        $buffer .= '>
';
        if ($partial = $this->mustache->loadPartial('theme_edumy/ccn_preloader')) {
            $buffer .= $partial->renderInternal($context, $indent . '  ');
        }
        $buffer .= $indent . '  <div class="wrapper">
';
        $buffer .= $indent . '    <div class="our-dashbord dashbord mt40 pl25 pr25">
';
        $buffer .= $indent . '      <div class="">
';
        $buffer .= $indent . '        <div class="container-fluid">
';
        $buffer .= $indent . '          <div class="main_content_container">
';
        $buffer .= $indent . '            <div class="row">
';
        $buffer .= $indent . '              <div class="col-xl-12">
';
        $buffer .= $indent . '                <!-- <div class="row">
';
        $buffer .= $indent . '                  <div class="col-lg-12">
';
        $buffer .= $indent . '                    <nav class="breadcrumb_widgets ';
        $value = $this->resolveValue($context->find('breadcrumb_clip_dash'), $context);
        $buffer .= $value;
        $buffer .= '" aria-label="breadcrumb mb30">
';
        $buffer .= $indent . '                      <h4 class="title float-left">';
        $value = $this->resolveValue($context->find('pageheading'), $context);
        $buffer .= $value;
        $buffer .= '</h4>
';
        $buffer .= $indent . '                      <ol class="breadcrumb float-right">
';
        $buffer .= $indent . '                        ';
        $value = $this->resolveValue($context->findDot('output.navbar'), $context);
        $buffer .= $value;
        $buffer .= '
';
        $buffer .= $indent . '                      </ol>
';
        $buffer .= $indent . '                    </nav>
';
        $buffer .= $indent . '                  </div>
';
        $buffer .= $indent . '                </div> -->
';
        $buffer .= $indent . '                <div class="row">
';
        $buffer .= $indent . '                  <div class="
';
        // 'sidebar_right' section
        $value = $context->find('sidebar_right');
        $buffer .= $this->section69b2491f2a68056190044b071d5bb967($context, $indent, $value);
        // 'sidebar_right' inverted section
        $value = $context->find('sidebar_right');
        if (empty($value)) {
            
            $buffer .= $indent . '                      col-lg-12
';
        }
        $buffer .= $indent . '                  ">
';
        $buffer .= $indent . '                    ';
        $value = $this->resolveValue($context->findDot('output.standard_top_of_body_html'), $context);
        $buffer .= $value;
        $buffer .= '
';
        $buffer .= $indent . '                    ';
        $value = $this->resolveValue($context->findDot('output.full_header'), $context);
        $buffer .= $value;
        $buffer .= '
';
        $buffer .= $indent . '                    ';
        $value = $this->resolveValue($context->find('blocks_fullwidth_top'), $context);
        $buffer .= $value;
        $buffer .= '
';
        $buffer .= $indent . '                    ';
        $value = $this->resolveValue($context->findDot('output.region_main_settings_menu'), $context);
        $buffer .= $value;
        $buffer .= '
';
        $buffer .= $indent . '                    ';
        $value = $this->resolveValue($context->findDot('output.course_content_header'), $context);
        $buffer .= $value;
        $buffer .= '
';
        $buffer .= $indent . '                    ';
        $value = $this->resolveValue($context->findDot('output.main_content'), $context);
        $buffer .= $value;
        $buffer .= '
';
        $buffer .= $indent . '                    ';
        $value = $this->resolveValue($context->findDot('output.activity_navigation'), $context);
        $buffer .= $value;
        $buffer .= '
';
        $buffer .= $indent . '                    ';
        $value = $this->resolveValue($context->findDot('output.course_content_footer'), $context);
        $buffer .= $value;
        $buffer .= '
';
        $buffer .= $indent . '                  </div>
';
        // 'sidebar_right' section
        $value = $context->find('sidebar_right');
        $buffer .= $this->section5cfec2ef85e53c8b447b12a4a0938e95($context, $indent, $value);
        $buffer .= $indent . '                </div>
';
        $buffer .= $indent . '              </div>
';
        $buffer .= $indent . '            </div>
';
        if ($partial = $this->mustache->loadPartial('theme_edumy/ccn_minimal_footer')) {
            $buffer .= $partial->renderInternal($context, $indent . '            ');
        }
        $buffer .= $indent . '          </div>
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '      </div>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '  </div>
';
        $buffer .= $indent . '  ';
        $value = $this->resolveValue($context->findDot('output.standard_after_main_region_html'), $context);
        $buffer .= $value;
        $buffer .= '
';
        $buffer .= $indent . '</body>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '</html>
';
        // 'js' section
        $value = $context->find('js');
        $buffer .= $this->section594644b43f41eedfedc914de6473d7f6($context, $indent, $value);

        return $buffer;
    }

    private function section69b2491f2a68056190044b071d5bb967(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                      col-lg-9
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
                
                $buffer .= $indent . '                      col-lg-9
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section5cfec2ef85e53c8b447b12a4a0938e95(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    <div class="col-lg-3 col-xl-3">
                      {{{ sidepreblocks }}}
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
                
                $buffer .= $indent . '                    <div class="col-lg-3 col-xl-3">
';
                $buffer .= $indent . '                      ';
                $value = $this->resolveValue($context->find('sidepreblocks'), $context);
                $buffer .= $value;
                $buffer .= '
';
                $buffer .= $indent . '                    </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section594644b43f41eedfedc914de6473d7f6(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
  M.util.js_pending(\'theme_boost/loader\');
  require([\'theme_boost/loader\'], function() {
  M.util.js_complete(\'theme_boost/loader\');
  });
  M.util.js_pending(\'theme_boost/drawer\');
  require([\'theme_boost/drawer\'], function(mod) {
  mod.init();
  M.util.js_complete(\'theme_boost/drawer\');
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
                
                $buffer .= $indent . '  M.util.js_pending(\'theme_boost/loader\');
';
                $buffer .= $indent . '  require([\'theme_boost/loader\'], function() {
';
                $buffer .= $indent . '  M.util.js_complete(\'theme_boost/loader\');
';
                $buffer .= $indent . '  });
';
                $buffer .= $indent . '  M.util.js_pending(\'theme_boost/drawer\');
';
                $buffer .= $indent . '  require([\'theme_boost/drawer\'], function(mod) {
';
                $buffer .= $indent . '  mod.init();
';
                $buffer .= $indent . '  M.util.js_complete(\'theme_boost/drawer\');
';
                $buffer .= $indent . '  });
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
