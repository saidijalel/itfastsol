<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_29473098eca919d2ec133d0f9f315341b8d63d5ec578456b6e8219eb3674c7d6 extends Twig_Template
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
        $__internal_82141ffd28041d281e6cb5fc49e76b9b6de30efc69c00c69f8d8df61481bb6e1 = $this->env->getExtension("native_profiler");
        $__internal_82141ffd28041d281e6cb5fc49e76b9b6de30efc69c00c69f8d8df61481bb6e1->enter($__internal_82141ffd28041d281e6cb5fc49e76b9b6de30efc69c00c69f8d8df61481bb6e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_82141ffd28041d281e6cb5fc49e76b9b6de30efc69c00c69f8d8df61481bb6e1->leave($__internal_82141ffd28041d281e6cb5fc49e76b9b6de30efc69c00c69f8d8df61481bb6e1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="radio"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     value="<?php echo $view->escape($value) ?>"*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
