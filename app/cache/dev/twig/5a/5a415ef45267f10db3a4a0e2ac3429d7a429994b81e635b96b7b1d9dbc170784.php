<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_bd02dd4298808091516abdabfe730c59be2fe7c6f413fbb9593968abd438646d extends Twig_Template
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
        $__internal_123cdd1a942f3f08ba4c845e9e106c78cfa28ba666e3043b79f74428c2ae2636 = $this->env->getExtension("native_profiler");
        $__internal_123cdd1a942f3f08ba4c845e9e106c78cfa28ba666e3043b79f74428c2ae2636->enter($__internal_123cdd1a942f3f08ba4c845e9e106c78cfa28ba666e3043b79f74428c2ae2636_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_123cdd1a942f3f08ba4c845e9e106c78cfa28ba666e3043b79f74428c2ae2636->leave($__internal_123cdd1a942f3f08ba4c845e9e106c78cfa28ba666e3043b79f74428c2ae2636_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child) : ?>*/
/*     <?php echo $view['form']->row($child) ?>*/
/* <?php endforeach; ?>*/
/* */
