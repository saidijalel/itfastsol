<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_cea34843b4fa816a29dc773cb97b4fb60f3e29bed18b6f18430045701995d96c extends Twig_Template
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
        $__internal_5cfc6ee5888995693c88bee87768eb7a2272e493a64a04a5ff9b9005009677e7 = $this->env->getExtension("native_profiler");
        $__internal_5cfc6ee5888995693c88bee87768eb7a2272e493a64a04a5ff9b9005009677e7->enter($__internal_5cfc6ee5888995693c88bee87768eb7a2272e493a64a04a5ff9b9005009677e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_5cfc6ee5888995693c88bee87768eb7a2272e493a64a04a5ff9b9005009677e7->leave($__internal_5cfc6ee5888995693c88bee87768eb7a2272e493a64a04a5ff9b9005009677e7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr>*/
/*     <td>*/
/*         <?php echo $view['form']->label($form) ?>*/
/*     </td>*/
/*     <td>*/
/*         <?php echo $view['form']->errors($form) ?>*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
