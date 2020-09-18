<?php

class __Mustache_2d630a064ab6772d74564f48b83a2423 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '<!-- Modal -->
';
        $buffer .= $indent . '<div data-section="0" class="modal fade" id="snap-modchooser-modal" tabindex="-1" role="dialog" aria-labelledby="snap-modchooser-title" aria-hidden="true">
';
        $buffer .= $indent . '    <div class="modal-dialog modal-lg" role="document">
';
        $buffer .= $indent . '        <div class="modal-content" id="modchooser-accessible-tab">
';
        $buffer .= $indent . '            <div class="modal-header">
';
        $buffer .= $indent . '                <button type="button" class="close" data-dismiss="modal" aria-label="';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->section7a20f6a0c1e5f01649c33230170638b5($context, $indent, $value);
        $buffer .= '">
';
        $buffer .= $indent . '                    <span aria-hidden="true">&times;</span>
';
        $buffer .= $indent . '                </button>
';
        $buffer .= $indent . '                <h6 class="modal-title" id="snap-modchooser-title">';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->sectionDed9b286fd7871ed8863bb0ea8f45c02($context, $indent, $value);
        $buffer .= '</h6>
';
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '            <!-- Nav tabs -->
';
        $buffer .= $indent . '            <ul class="nav nav-tabs" role="tablist">
';
        $buffer .= $indent . '                <li class="tab active">
';
        $buffer .= $indent . '                    <a id="activites-tab" class="nav-link" href="#activites" role="tab" aria-controls="activites" data-toggle="tab" tabindex="0">';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->section24a67fa020473241f6bf9a69b69d7be2($context, $indent, $value);
        $buffer .= '</a>
';
        $buffer .= $indent . '                </li>
';
        $buffer .= $indent . '                <li class="tab">
';
        $buffer .= $indent . '                    <a id="resources-tab" class="nav-link" href="#resources" role="tab" aria-controls="resources" data-toggle="tab" tabindex="-1">';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->section26a67f780630d9cdc7f6be47eb719a14($context, $indent, $value);
        $buffer .= '</a>
';
        $buffer .= $indent . '                </li>
';
        $buffer .= $indent . '                <li class="tab" role="tab" data-toggle="tab" id="snap-modchooser-help-tab">
';
        $buffer .= $indent . '                    <a id="help-guide-tab" class="nav-link iconhelp" href="#help" role="tab" aria-controls="help" data-toggle="tab" tabindex="-1">';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->sectionDf7498e076f73038f95f4383341a05f7($context, $indent, $value);
        $buffer .= ' ';
        // 'pix' section
        $value = $context->find('pix');
        $buffer .= $this->section70d0b77085e3a582721f6e82dc936607($context, $indent, $value);
        $buffer .= '</a>
';
        $buffer .= $indent . '                </li>
';
        $buffer .= $indent . '            </ul>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '            <!-- Tab panes -->
';
        $buffer .= $indent . '            <div id="accessible-tab-content" class="tab-content" aria-live="polite">
';
        $buffer .= $indent . '                <br>
';
        // 'tabs' section
        $value = $context->find('tabs');
        $buffer .= $this->section678f73317dbac64878acd43028f2bffd($context, $indent, $value);
        $buffer .= $indent . '                <br>
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

    private function section7a20f6a0c1e5f01649c33230170638b5(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'closebuttontitle';
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
                
                $buffer .= 'closebuttontitle';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionDed9b286fd7871ed8863bb0ea8f45c02(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'addresourceoractivity, theme_snap';
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
                
                $buffer .= 'addresourceoractivity, theme_snap';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section24a67fa020473241f6bf9a69b69d7be2(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'activities';
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
                
                $buffer .= 'activities';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section26a67f780630d9cdc7f6be47eb719a14(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'resources';
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
                
                $buffer .= 'resources';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionDf7498e076f73038f95f4383341a05f7(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'helpguide, theme_snap';
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
                
                $buffer .= 'helpguide, theme_snap';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section70d0b77085e3a582721f6e82dc936607(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'help, theme_snap, {{#str}}helpguide, theme_snap{{/str}}';
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
                
                $buffer .= 'help, theme_snap, ';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->sectionDf7498e076f73038f95f4383341a05f7($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionD6a32fc2bf05d20dc88b9171e16846cb(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                            <div class="col-xs-3 snap-modchooser-activity">
                                <a class="snap-modchooser-addlink" href="{{{link}}}"><img src="{{icon}}" class="svg-icon" alt="" role="presentation"><br>{{title}}</a>
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
                
                $buffer .= $indent . '                            <div class="col-xs-3 snap-modchooser-activity">
';
                $buffer .= $indent . '                                <a class="snap-modchooser-addlink" href="';
                $value = $this->resolveValue($context->find('link'), $context);
                $buffer .= $value;
                $buffer .= '"><img src="';
                $value = $this->resolveValue($context->find('icon'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" class="svg-icon" alt="" role="presentation"><br>';
                $value = $this->resolveValue($context->find('title'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</a>
';
                $buffer .= $indent . '                            </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section0902e195e9073f6588b300e313b30082(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                            <div class="col-xs-3 snap-modchooser-resource">
                                <a class="snap-modchooser-addlink" href="{{{link}}}"><img src="{{icon}}" class="svg-icon" alt="" role="presentation"><br>{{title}}</a>
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
                
                $buffer .= $indent . '                            <div class="col-xs-3 snap-modchooser-resource">
';
                $buffer .= $indent . '                                <a class="snap-modchooser-addlink" href="';
                $value = $this->resolveValue($context->find('link'), $context);
                $buffer .= $value;
                $buffer .= '"><img src="';
                $value = $this->resolveValue($context->find('icon'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" class="svg-icon" alt="" role="presentation"><br>';
                $value = $this->resolveValue($context->find('title'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</a>
';
                $buffer .= $indent . '                            </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionDfa995c0fa0fadc9505f1b951844d152(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                            <div class="col-xs-3 snap-modchooser-activity" id="snap-modchooser_{{name}}">
                                <a class="snap-modchooser-addlink" href="{{{link}}}"><img src="{{icon}}" class="svg-icon" alt="" role="presentation"><br>{{title}}</a>
                            </div>
                            <div class="col-xs-8 snap-modchooser-help">
                                {{{help}}}
                            </div>
                            <div class="col-xs-12"><hr></div>
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
                
                $buffer .= $indent . '                            <div class="col-xs-3 snap-modchooser-activity" id="snap-modchooser_';
                $value = $this->resolveValue($context->find('name'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '">
';
                $buffer .= $indent . '                                <a class="snap-modchooser-addlink" href="';
                $value = $this->resolveValue($context->find('link'), $context);
                $buffer .= $value;
                $buffer .= '"><img src="';
                $value = $this->resolveValue($context->find('icon'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" class="svg-icon" alt="" role="presentation"><br>';
                $value = $this->resolveValue($context->find('title'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</a>
';
                $buffer .= $indent . '                            </div>
';
                $buffer .= $indent . '                            <div class="col-xs-8 snap-modchooser-help">
';
                $buffer .= $indent . '                                ';
                $value = $this->resolveValue($context->find('help'), $context);
                $buffer .= $value;
                $buffer .= '
';
                $buffer .= $indent . '                            </div>
';
                $buffer .= $indent . '                            <div class="col-xs-12"><hr></div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section416e518c725d5d9cba4a2d2a4459e720(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                            <div class="col-xs-3 snap-modchooser-resource" id="snap-modchooser_{{name}}">
                                <a class="snap-modchooser-addlink" href="{{{link}}}"><img src="{{icon}}" class="svg-icon" alt="" role="presentation"><br>{{title}}</a>
                            </div>
                            <div class="col-xs-8 snap-modchooser-help">
                                {{{help}}}
                            </div>
                            <div class="col-xs-12"><hr></div>
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
                
                $buffer .= $indent . '                            <div class="col-xs-3 snap-modchooser-resource" id="snap-modchooser_';
                $value = $this->resolveValue($context->find('name'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '">
';
                $buffer .= $indent . '                                <a class="snap-modchooser-addlink" href="';
                $value = $this->resolveValue($context->find('link'), $context);
                $buffer .= $value;
                $buffer .= '"><img src="';
                $value = $this->resolveValue($context->find('icon'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" class="svg-icon" alt="" role="presentation"><br>';
                $value = $this->resolveValue($context->find('title'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</a>
';
                $buffer .= $indent . '                            </div>
';
                $buffer .= $indent . '                            <div class="col-xs-8 snap-modchooser-help">
';
                $buffer .= $indent . '                                ';
                $value = $this->resolveValue($context->find('help'), $context);
                $buffer .= $value;
                $buffer .= '
';
                $buffer .= $indent . '                            </div>
';
                $buffer .= $indent . '                            <div class="col-xs-12"><hr></div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section678f73317dbac64878acd43028f2bffd(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    <div class="tab-pane row text-center fade in" id="activites" role="tabpanel" aria-labelledby="activites-tab" aria-hidden="false" tabindex="0">
                        {{#activities}}
                            <div class="col-xs-3 snap-modchooser-activity">
                                <a class="snap-modchooser-addlink" href="{{{link}}}"><img src="{{icon}}" class="svg-icon" alt="" role="presentation"><br>{{title}}</a>
                            </div>
                        {{/activities}}
                    </div>
                    <div class="tab-pane fade row text-center" id="resources" role="tabpanel" aria-labelledby="resources-tab" aria-hidden="true" tabindex="0">
                        {{#resources}}
                            <div class="col-xs-3 snap-modchooser-resource">
                                <a class="snap-modchooser-addlink" href="{{{link}}}"><img src="{{icon}}" class="svg-icon" alt="" role="presentation"><br>{{title}}</a>
                            </div>
                        {{/resources}}
                    </div>
                    <div class="tab-pane fade row text-center" id="help" role="tabpanel" aria-labelledby="help-guide-tab" aria-hidden="true" tabindex="0">
                        {{#activities}}
                            <div class="col-xs-3 snap-modchooser-activity" id="snap-modchooser_{{name}}">
                                <a class="snap-modchooser-addlink" href="{{{link}}}"><img src="{{icon}}" class="svg-icon" alt="" role="presentation"><br>{{title}}</a>
                            </div>
                            <div class="col-xs-8 snap-modchooser-help">
                                {{{help}}}
                            </div>
                            <div class="col-xs-12"><hr></div>
                        {{/activities}}
                        {{#resources}}
                            <div class="col-xs-3 snap-modchooser-resource" id="snap-modchooser_{{name}}">
                                <a class="snap-modchooser-addlink" href="{{{link}}}"><img src="{{icon}}" class="svg-icon" alt="" role="presentation"><br>{{title}}</a>
                            </div>
                            <div class="col-xs-8 snap-modchooser-help">
                                {{{help}}}
                            </div>
                            <div class="col-xs-12"><hr></div>
                        {{/resources}}
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
                
                $buffer .= $indent . '                    <div class="tab-pane row text-center fade in" id="activites" role="tabpanel" aria-labelledby="activites-tab" aria-hidden="false" tabindex="0">
';
                // 'activities' section
                $value = $context->find('activities');
                $buffer .= $this->sectionD6a32fc2bf05d20dc88b9171e16846cb($context, $indent, $value);
                $buffer .= $indent . '                    </div>
';
                $buffer .= $indent . '                    <div class="tab-pane fade row text-center" id="resources" role="tabpanel" aria-labelledby="resources-tab" aria-hidden="true" tabindex="0">
';
                // 'resources' section
                $value = $context->find('resources');
                $buffer .= $this->section0902e195e9073f6588b300e313b30082($context, $indent, $value);
                $buffer .= $indent . '                    </div>
';
                $buffer .= $indent . '                    <div class="tab-pane fade row text-center" id="help" role="tabpanel" aria-labelledby="help-guide-tab" aria-hidden="true" tabindex="0">
';
                // 'activities' section
                $value = $context->find('activities');
                $buffer .= $this->sectionDfa995c0fa0fadc9505f1b951844d152($context, $indent, $value);
                // 'resources' section
                $value = $context->find('resources');
                $buffer .= $this->section416e518c725d5d9cba4a2d2a4459e720($context, $indent, $value);
                $buffer .= $indent . '                    </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
