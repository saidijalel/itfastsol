<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_f2d03b37436bd4b28ccaa596130a1c9f39c509767c473ba25aaa5dd37e080f32 extends Twig_Template
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
        $__internal_e5c6ca65771cf74120e01e11dd29736d53394ad094376bd2ca63f28455d851cd = $this->env->getExtension("native_profiler");
        $__internal_e5c6ca65771cf74120e01e11dd29736d53394ad094376bd2ca63f28455d851cd->enter($__internal_e5c6ca65771cf74120e01e11dd29736d53394ad094376bd2ca63f28455d851cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_e5c6ca65771cf74120e01e11dd29736d53394ad094376bd2ca63f28455d851cd->leave($__internal_e5c6ca65771cf74120e01e11dd29736d53394ad094376bd2ca63f28455d851cd_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php echo $view['form']->start($form) ?>*/
/*     <?php echo $view['form']->widget($form) ?>*/
/* <?php echo $view['form']->end($form) ?>*/
/* */
