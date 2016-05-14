<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_a710a41b0da7fad1e725a8821e97584eace7fc393d08a6ad06e339218e3c5c7f extends Twig_Template
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
        $__internal_d73b28b37a27608996493343ac4181285d6232bd89417e8d285b2491a1a7bad3 = $this->env->getExtension("native_profiler");
        $__internal_d73b28b37a27608996493343ac4181285d6232bd89417e8d285b2491a1a7bad3->enter($__internal_d73b28b37a27608996493343ac4181285d6232bd89417e8d285b2491a1a7bad3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_d73b28b37a27608996493343ac4181285d6232bd89417e8d285b2491a1a7bad3->leave($__internal_d73b28b37a27608996493343ac4181285d6232bd89417e8d285b2491a1a7bad3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($widget == 'single_text'): ?>*/
/*     <?php echo $view['form']->block($form, 'form_widget_simple'); ?>*/
/* <?php else: ?>*/
/*     <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*         <?php echo $view['form']->widget($form['date']).' '.$view['form']->widget($form['time']) ?>*/
/*     </div>*/
/* <?php endif ?>*/
/* */
