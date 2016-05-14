<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_61213ef706034c7f924b104b22cdafd68920893034674d5f91f9091dd386dbfa extends Twig_Template
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
        $__internal_4f9dc34b212f159c0f68c49e285aac4c44a51d5bcb9a6292b4c909dad4c56ffe = $this->env->getExtension("native_profiler");
        $__internal_4f9dc34b212f159c0f68c49e285aac4c44a51d5bcb9a6292b4c909dad4c56ffe->enter($__internal_4f9dc34b212f159c0f68c49e285aac4c44a51d5bcb9a6292b4c909dad4c56ffe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_4f9dc34b212f159c0f68c49e285aac4c44a51d5bcb9a6292b4c909dad4c56ffe->leave($__internal_4f9dc34b212f159c0f68c49e285aac4c44a51d5bcb9a6292b4c909dad4c56ffe_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
