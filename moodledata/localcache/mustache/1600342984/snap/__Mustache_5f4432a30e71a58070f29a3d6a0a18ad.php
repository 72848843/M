<?php

class __Mustache_5f4432a30e71a58070f29a3d6a0a18ad extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<form action="';
        $value = $this->resolveValue($context->find('searchurl'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '" id="';
        $value = $this->resolveValue($context->find('id'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '" method="get">
';
        $buffer .= $indent . '    <fieldset class="coursesearchbox invisiblefieldset">
';
        $buffer .= $indent . '        <label for="';
        $value = $this->resolveValue($context->find('inputid'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '" class="sr-only">';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->section00ec4f46ef2dd131f134e34ffd80d923($context, $indent, $value);
        $buffer .= '</label>
';
        $buffer .= $indent . '        <div class="input-group">
';
        $buffer .= $indent . '            <input id="';
        $value = $this->resolveValue($context->find('inputid'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '" name="search" type="text" size="0" value="';
        $value = $this->resolveValue($context->find('value'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '" class="form-control" placeholder="';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->section00ec4f46ef2dd131f134e34ffd80d923($context, $indent, $value);
        $buffer .= '">
';
        $buffer .= $indent . '            <span class="input-group-btn">
';
        $buffer .= $indent . '                <button class="btn btn-secondary" type="submit">';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->sectionCd40f67c442c6cf3e4e18af0c0f7a7ca($context, $indent, $value);
        $buffer .= '</button>
';
        $buffer .= $indent . '            </span>
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '    </fieldset>
';
        $buffer .= $indent . '</form>
';

        return $buffer;
    }

    private function section00ec4f46ef2dd131f134e34ffd80d923(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'searchcourses';
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
                
                $buffer .= 'searchcourses';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionCd40f67c442c6cf3e4e18af0c0f7a7ca(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'go';
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
                
                $buffer .= 'go';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
