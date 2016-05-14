<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_fcb681bd47df409e92ef5a7369469f24a02b073d9bafec01d1275da4e666a793 extends Twig_Template
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
        $__internal_57d4065c70d787645650e34286873ef00bc417b7fa01a47eb28d4e9df21d1385 = $this->env->getExtension("native_profiler");
        $__internal_57d4065c70d787645650e34286873ef00bc417b7fa01a47eb28d4e9df21d1385->enter($__internal_57d4065c70d787645650e34286873ef00bc417b7fa01a47eb28d4e9df21d1385_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_57d4065c70d787645650e34286873ef00bc417b7fa01a47eb28d4e9df21d1385->leave($__internal_57d4065c70d787645650e34286873ef00bc417b7fa01a47eb28d4e9df21d1385_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php echo str_replace('{{ widget }}', $view['form']->block($form, 'form_widget_simple'), $money_pattern) ?>*/
/* */
