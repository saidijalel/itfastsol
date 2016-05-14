<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_e6a9601941237e1d7785618d6df2fdb742c19d425dd0608bd1026a17b84422ca extends Twig_Template
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
        $__internal_b3018d62d251479db750d44b7eccdb9262cb2572fd86ec58ca5d1ba90ac29e08 = $this->env->getExtension("native_profiler");
        $__internal_b3018d62d251479db750d44b7eccdb9262cb2572fd86ec58ca5d1ba90ac29e08->enter($__internal_b3018d62d251479db750d44b7eccdb9262cb2572fd86ec58ca5d1ba90ac29e08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_b3018d62d251479db750d44b7eccdb9262cb2572fd86ec58ca5d1ba90ac29e08->leave($__internal_b3018d62d251479db750d44b7eccdb9262cb2572fd86ec58ca5d1ba90ac29e08_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div>*/
/*     <?php echo $view['form']->label($form) ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php echo $view['form']->widget($form) ?>*/
/* </div>*/
/* */
