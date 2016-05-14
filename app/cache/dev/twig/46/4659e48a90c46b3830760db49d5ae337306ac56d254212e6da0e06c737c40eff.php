<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_bde80c4775c161a86a3ad0f8e5c175bd6be5cea856294798bea16b0afe232078 extends Twig_Template
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
        $__internal_5c943a1690da25dae5d5229d900df385e4f06fd9b11013dceb613af2360d7061 = $this->env->getExtension("native_profiler");
        $__internal_5c943a1690da25dae5d5229d900df385e4f06fd9b11013dceb613af2360d7061->enter($__internal_5c943a1690da25dae5d5229d900df385e4f06fd9b11013dceb613af2360d7061_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_5c943a1690da25dae5d5229d900df385e4f06fd9b11013dceb613af2360d7061->leave($__internal_5c943a1690da25dae5d5229d900df385e4f06fd9b11013dceb613af2360d7061_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!isset($render_rest) || $render_rest): ?>*/
/* <?php echo $view['form']->rest($form) ?>*/
/* <?php endif ?>*/
/* </form>*/
/* */
