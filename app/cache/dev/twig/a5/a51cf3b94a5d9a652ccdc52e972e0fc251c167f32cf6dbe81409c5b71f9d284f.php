<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_c4608aa5d547de256c800492421d279e18db71520d91ec0a737da075e8fabe40 extends Twig_Template
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
        $__internal_bbf08070458413776acbfaf3e6a2b2cd7b7fb7d72871bea52690ca9c1fad98ed = $this->env->getExtension("native_profiler");
        $__internal_bbf08070458413776acbfaf3e6a2b2cd7b7fb7d72871bea52690ca9c1fad98ed->enter($__internal_bbf08070458413776acbfaf3e6a2b2cd7b7fb7d72871bea52690ca9c1fad98ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_bbf08070458413776acbfaf3e6a2b2cd7b7fb7d72871bea52690ca9c1fad98ed->leave($__internal_bbf08070458413776acbfaf3e6a2b2cd7b7fb7d72871bea52690ca9c1fad98ed_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
