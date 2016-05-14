<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_05529a87a11ed89a232074a5156417306ea9b5503998e069b2b643f27b91d02d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9c12b253e9bc89f26dc926c48a1439de4c4e7452785f52c879953beb1348f8b7 = $this->env->getExtension("native_profiler");
        $__internal_9c12b253e9bc89f26dc926c48a1439de4c4e7452785f52c879953beb1348f8b7->enter($__internal_9c12b253e9bc89f26dc926c48a1439de4c4e7452785f52c879953beb1348f8b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_9c12b253e9bc89f26dc926c48a1439de4c4e7452785f52c879953beb1348f8b7->leave($__internal_9c12b253e9bc89f26dc926c48a1439de4c4e7452785f52c879953beb1348f8b7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="<?php echo isset($type) ? $view->escape($type) : 'text' ?>" <?php echo $view['form']->block($form, 'widget_attributes') ?><?php if (!empty($value) || is_numeric($value)): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?> />*/
/* */
