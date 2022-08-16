<?php

class __Mustache_3d594de6d7a725d9582952a8aae8a15e extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        if ($partial = $this->mustache->loadPartial('theme_edumy/head_dashboard')) {
            $buffer .= $partial->renderInternal($context);
        }
        $buffer .= $indent . '
';
        $buffer .= $indent . '<body ';
        $value = $this->resolveValue($context->find('bodyattributes'), $context);
        $buffer .= $value;
        $buffer .= '>
';
        if ($partial = $this->mustache->loadPartial('theme_edumy/ccn_preloader')) {
            $buffer .= $partial->renderInternal($context, $indent . '  ');
        }
        $buffer .= $indent . '  ';
        $value = $this->resolveValue($context->findDot('output.standard_top_of_body_html'), $context);
        $buffer .= $value;
        $buffer .= '
';
        $buffer .= $indent . '  <div id="ccn_lc_vb--visualize--container">
';
        $buffer .= $indent . '    <div id="ccn_lc_vb--visualize">
';
        $buffer .= $indent . '      <div id="ccn_lc_vb--visualize--inner">
';
        $buffer .= $indent . '        <div id="ccn_lc_vb--visualize--actions">
';
        $buffer .= $indent . '          <h1 id="ccnTitleEl">
';
        $buffer .= $indent . '            <span class="ccnTitleElTag">
';
        $buffer .= $indent . '              <span class="ccn-flaticon-magic-wand"></span>
';
        $buffer .= $indent . '              <strong>Cocoon ';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->section372516f0382ff1f5f09568caad1628d8($context, $indent, $value);
        $buffer .= '</strong>
';
        $buffer .= $indent . '            </span>
';
        $buffer .= $indent . '            ';
        $value = $this->resolveValue($context->find('ccn_lc_vb_title'), $context);
        $buffer .= $value;
        $buffer .= '
';
        $buffer .= $indent . '          </h1>
';
        $buffer .= $indent . '          <div id="ccnRefreshBlock">
';
        $buffer .= $indent . '            <span class="la la-refresh" id="ccnRefresher"></span>
';
        $buffer .= $indent . '            <div id="ccnRefresherTextContent">Update</div>
';
        $buffer .= $indent . '          </div>
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '        <div id="ccn_visualize_container--live-customizer">
';
        $buffer .= $indent . '          <div id="ccn_lc_vb--visualize--block-wrapper">
';
        $buffer .= $indent . '            <div id="ccn_lc_vb--visualize--block-wrapper--inner">
';
        $buffer .= $indent . '              ';
        $value = $this->resolveValue($context->find('ccn_lc_vb'), $context);
        $buffer .= $value;
        $buffer .= '
';
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '          </div>
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '      </div>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '    <div id="ccn_lc_vb--visualize-aside">
';
        $buffer .= $indent . '      <div id="ccn_lc_vb--visualize-aside--controller">
';
        $buffer .= $indent . '        <span class="la la-refresh" id="ccnRefresherAside"></span>
';
        $buffer .= $indent . '      </div>
';
        $buffer .= $indent . '      <div id="ccn_lc_vb--visualize-aside--inner" class="so_content" data-simplebar="init">
';
        $buffer .= $indent . '        <div class="wrapper">
';
        $buffer .= $indent . '          <div class="main_content_container">
';
        $buffer .= $indent . '            ';
        $value = $this->resolveValue($context->findDot('output.full_header'), $context);
        $buffer .= $value;
        $buffer .= '
';
        $buffer .= $indent . '            ';
        $value = $this->resolveValue($context->find('blocks_fullwidth_top'), $context);
        $buffer .= $value;
        $buffer .= '
';
        $buffer .= $indent . '            ';
        $value = $this->resolveValue($context->findDot('output.region_main_settings_menu'), $context);
        $buffer .= $value;
        $buffer .= '
';
        $buffer .= $indent . '            ';
        $value = $this->resolveValue($context->findDot('output.course_content_header'), $context);
        $buffer .= $value;
        $buffer .= '
';
        $buffer .= $indent . '            ';
        $value = $this->resolveValue($context->findDot('output.main_content'), $context);
        $buffer .= $value;
        $buffer .= '
';
        $buffer .= $indent . '            ';
        $value = $this->resolveValue($context->findDot('output.activity_navigation'), $context);
        $buffer .= $value;
        $buffer .= '
';
        $buffer .= $indent . '            ';
        $value = $this->resolveValue($context->findDot('output.course_content_footer'), $context);
        $buffer .= $value;
        $buffer .= '
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
        // 'ccn_lc_vb_repitem' section
        $value = $context->find('ccn_lc_vb_repitem');
        $buffer .= $this->section3b2cae34153952ecda1b1a0b1f8ee95d($context, $indent, $value);
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

    private function section372516f0382ff1f5f09568caad1628d8(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'live_customizer, theme_edumy';
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
                
                $buffer .= 'live_customizer, theme_edumy';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section3b2cae34153952ecda1b1a0b1f8ee95d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    <div id="ccn_lc_vb--repItem">
      {{{ccn_lc_vb_repitem}}}
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
                
                $buffer .= $indent . '    <div id="ccn_lc_vb--repItem">
';
                $buffer .= $indent . '      ';
                $value = $this->resolveValue($context->find('ccn_lc_vb_repitem'), $context);
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
