<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_1c76d2d3a6baec8e1f79d657f44733941000e462b9beee2b582d0f545303e337 extends Twig_Template
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
        $__internal_bcdc44ded8cd5335f182cc6690105ea88e9fda55990438e44512906cc8acdd79 = $this->env->getExtension("native_profiler");
        $__internal_bcdc44ded8cd5335f182cc6690105ea88e9fda55990438e44512906cc8acdd79->enter($__internal_bcdc44ded8cd5335f182cc6690105ea88e9fda55990438e44512906cc8acdd79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_bcdc44ded8cd5335f182cc6690105ea88e9fda55990438e44512906cc8acdd79->leave($__internal_bcdc44ded8cd5335f182cc6690105ea88e9fda55990438e44512906cc8acdd79_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($expanded): ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_expanded') ?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_collapsed') ?>*/
/* <?php endif ?>*/
/* */
