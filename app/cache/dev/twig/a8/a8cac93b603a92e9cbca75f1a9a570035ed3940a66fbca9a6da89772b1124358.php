<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_889f217e4d336fbd854323b8b45c0c2c4e315a63a7f72067e595c29ca7840c54 extends Twig_Template
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
        $__internal_162342cb989dcdedb4be8941224a1b50073c4ade833d347f57cd3839943cdf78 = $this->env->getExtension("native_profiler");
        $__internal_162342cb989dcdedb4be8941224a1b50073c4ade833d347f57cd3839943cdf78->enter($__internal_162342cb989dcdedb4be8941224a1b50073c4ade833d347f57cd3839943cdf78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_162342cb989dcdedb4be8941224a1b50073c4ade833d347f57cd3839943cdf78->leave($__internal_162342cb989dcdedb4be8941224a1b50073c4ade833d347f57cd3839943cdf78_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
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
/* {% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}*/
/* */
