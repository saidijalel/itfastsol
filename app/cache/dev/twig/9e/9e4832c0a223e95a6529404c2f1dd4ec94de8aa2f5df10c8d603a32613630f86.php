<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_5f2701924405d0ad4a8ee3c1840cb15b9f7372236a16856a238fe20131d66109 extends Twig_Template
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
        $__internal_1b56a3300e7f4933546598420f9cd4a531c60c0eca8d1e4d29234e6bef7d971c = $this->env->getExtension("native_profiler");
        $__internal_1b56a3300e7f4933546598420f9cd4a531c60c0eca8d1e4d29234e6bef7d971c->enter($__internal_1b56a3300e7f4933546598420f9cd4a531c60c0eca8d1e4d29234e6bef7d971c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_1b56a3300e7f4933546598420f9cd4a531c60c0eca8d1e4d29234e6bef7d971c->leave($__internal_1b56a3300e7f4933546598420f9cd4a531c60c0eca8d1e4d29234e6bef7d971c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <textarea <?php echo $view['form']->block($form, 'widget_attributes') ?>><?php echo $view->escape($value) ?></textarea>*/
/* */
