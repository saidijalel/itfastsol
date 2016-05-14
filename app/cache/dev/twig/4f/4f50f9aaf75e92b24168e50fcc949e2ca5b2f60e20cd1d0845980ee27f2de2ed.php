<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_34e5a5275406d71fb0e853adb2e2311d4fcbefd73719f2816540160f14e6324a extends Twig_Template
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
        $__internal_db3f72690509fed671b3d53689d41f19ca487553168e235f631d00648f2f7dc7 = $this->env->getExtension("native_profiler");
        $__internal_db3f72690509fed671b3d53689d41f19ca487553168e235f631d00648f2f7dc7->enter($__internal_db3f72690509fed671b3d53689d41f19ca487553168e235f631d00648f2f7dc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_db3f72690509fed671b3d53689d41f19ca487553168e235f631d00648f2f7dc7->leave($__internal_db3f72690509fed671b3d53689d41f19ca487553168e235f631d00648f2f7dc7_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}*/
/* *//* */
/* */
