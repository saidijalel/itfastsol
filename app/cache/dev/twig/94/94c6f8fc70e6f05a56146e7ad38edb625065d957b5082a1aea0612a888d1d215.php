<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_21e59f54f2cbc2ca351d50c7b2630e0eaa40e19bb54f16b7e9a46a5db98be784 extends Twig_Template
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
        $__internal_6a9aa728d8f27a3d786c62fc0bc5942423641a980c2ab244ad3446eed3eceb9b = $this->env->getExtension("native_profiler");
        $__internal_6a9aa728d8f27a3d786c62fc0bc5942423641a980c2ab244ad3446eed3eceb9b->enter($__internal_6a9aa728d8f27a3d786c62fc0bc5942423641a980c2ab244ad3446eed3eceb9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_6a9aa728d8f27a3d786c62fc0bc5942423641a980c2ab244ad3446eed3eceb9b->leave($__internal_6a9aa728d8f27a3d786c62fc0bc5942423641a980c2ab244ad3446eed3eceb9b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (count($errors) > 0): ?>*/
/*     <ul>*/
/*         <?php foreach ($errors as $error): ?>*/
/*             <li><?php echo $error->getMessage() ?></li>*/
/*         <?php endforeach; ?>*/
/*     </ul>*/
/* <?php endif ?>*/
/* */
