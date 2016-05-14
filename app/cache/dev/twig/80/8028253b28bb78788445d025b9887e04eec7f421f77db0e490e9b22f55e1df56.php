<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_a10110ba98d3d55653e2afcfb54bdbb110e97d10b41e93332d60d9fac3ac1169 extends Twig_Template
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
        $__internal_5df704e847d900df2c2939ae62d220a71a0dc173854b7eb023470a999395e361 = $this->env->getExtension("native_profiler");
        $__internal_5df704e847d900df2c2939ae62d220a71a0dc173854b7eb023470a999395e361->enter($__internal_5df704e847d900df2c2939ae62d220a71a0dc173854b7eb023470a999395e361_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_5df704e847d900df2c2939ae62d220a71a0dc173854b7eb023470a999395e361->leave($__internal_5df704e847d900df2c2939ae62d220a71a0dc173854b7eb023470a999395e361_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="checkbox"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     <?php if (strlen($value) > 0): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?>*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
