<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_06f512426b7919a85535015c2bf6eeb33b1256dd611129ce9236fd5ef96b3315 extends Twig_Template
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
        $__internal_da55609a82030d1e7d8a6c65117419a100411056ad1e479002b2eff29bc50cb1 = $this->env->getExtension("native_profiler");
        $__internal_da55609a82030d1e7d8a6c65117419a100411056ad1e479002b2eff29bc50cb1->enter($__internal_da55609a82030d1e7d8a6c65117419a100411056ad1e479002b2eff29bc50cb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_da55609a82030d1e7d8a6c65117419a100411056ad1e479002b2eff29bc50cb1->leave($__internal_da55609a82030d1e7d8a6c65117419a100411056ad1e479002b2eff29bc50cb1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child): ?>*/
/*     <?php if (!$child->isRendered()): ?>*/
/*         <?php echo $view['form']->row($child) ?>*/
/*     <?php endif; ?>*/
/* <?php endforeach; ?>*/
/* */
