<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_89966fef0cc3d7cb3d2d6d91cb7dfe9bced02d1117b31401376a946f402436d8 extends Twig_Template
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
        $__internal_caa3c461b90f614752df938a321caa92649ed513aa2fb09fe1aba0c4a3640489 = $this->env->getExtension("native_profiler");
        $__internal_caa3c461b90f614752df938a321caa92649ed513aa2fb09fe1aba0c4a3640489->enter($__internal_caa3c461b90f614752df938a321caa92649ed513aa2fb09fe1aba0c4a3640489_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_caa3c461b90f614752df938a321caa92649ed513aa2fb09fe1aba0c4a3640489->leave($__internal_caa3c461b90f614752df938a321caa92649ed513aa2fb09fe1aba0c4a3640489_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </div>*/
/* */
