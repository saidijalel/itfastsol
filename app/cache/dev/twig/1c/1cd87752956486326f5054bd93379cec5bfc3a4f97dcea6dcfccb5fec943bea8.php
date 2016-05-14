<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_c829c7c630e2251acb6fd061e5692986484a35b432c07400a103395a63d0c7b5 extends Twig_Template
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
        $__internal_338cc32091267fd86e9a9f38354027cb8e9edd2af745e78b26f5fb53c1d18557 = $this->env->getExtension("native_profiler");
        $__internal_338cc32091267fd86e9a9f38354027cb8e9edd2af745e78b26f5fb53c1d18557->enter($__internal_338cc32091267fd86e9a9f38354027cb8e9edd2af745e78b26f5fb53c1d18557_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_338cc32091267fd86e9a9f38354027cb8e9edd2af745e78b26f5fb53c1d18557->leave($__internal_338cc32091267fd86e9a9f38354027cb8e9edd2af745e78b26f5fb53c1d18557_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/* <?php foreach ($form as $child): ?>*/
/*     <?php echo $view['form']->widget($child) ?>*/
/*     <?php echo $view['form']->label($child, null, array('translation_domain' => $choice_translation_domain)) ?>*/
/* <?php endforeach ?>*/
/* </div>*/
/* */
