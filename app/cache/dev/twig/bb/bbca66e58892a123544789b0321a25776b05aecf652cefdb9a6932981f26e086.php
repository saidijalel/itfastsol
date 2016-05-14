<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_ebfd966bdda9c2516237d8b4295028c56e9cb1b145030be5126ffe4bacfa440b extends Twig_Template
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
        $__internal_b4cff48230d90541eb88104a7db51d8d2b55bfa246ea2589c1496f4cddf30ebb = $this->env->getExtension("native_profiler");
        $__internal_b4cff48230d90541eb88104a7db51d8d2b55bfa246ea2589c1496f4cddf30ebb->enter($__internal_b4cff48230d90541eb88104a7db51d8d2b55bfa246ea2589c1496f4cddf30ebb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_b4cff48230d90541eb88104a7db51d8d2b55bfa246ea2589c1496f4cddf30ebb->leave($__internal_b4cff48230d90541eb88104a7db51d8d2b55bfa246ea2589c1496f4cddf30ebb_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr style="display: none">*/
/*     <td colspan="2">*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
