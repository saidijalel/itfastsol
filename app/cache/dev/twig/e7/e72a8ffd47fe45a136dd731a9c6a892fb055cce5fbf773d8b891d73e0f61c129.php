<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_ce7dd9d461e7d76731b71675f961acef0f2f659a6a663c98cf3aadd858140c1b extends Twig_Template
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
        $__internal_800aa844d096bf2b58d3c7a42a1f7f91954d8c89cbebd99cd745faa99fbca35b = $this->env->getExtension("native_profiler");
        $__internal_800aa844d096bf2b58d3c7a42a1f7f91954d8c89cbebd99cd745faa99fbca35b->enter($__internal_800aa844d096bf2b58d3c7a42a1f7f91954d8c89cbebd99cd745faa99fbca35b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_800aa844d096bf2b58d3c7a42a1f7f91954d8c89cbebd99cd745faa99fbca35b->leave($__internal_800aa844d096bf2b58d3c7a42a1f7f91954d8c89cbebd99cd745faa99fbca35b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (isset($prototype)): ?>*/
/*     <?php $attr['data-prototype'] = $view->escape($view['form']->row($prototype)) ?>*/
/* <?php endif ?>*/
/* <?php echo $view['form']->widget($form, array('attr' => $attr)) ?>*/
/* */
