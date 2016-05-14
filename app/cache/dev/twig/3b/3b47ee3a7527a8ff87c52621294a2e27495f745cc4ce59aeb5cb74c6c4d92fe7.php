<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_7761ca753c4d30a6928bb3d370d8ffd36651939bd063a0b5f412a53010833ed4 extends Twig_Template
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
        $__internal_506d9c3009732d6f2b7f4bce219bc4cfd8064be7632ae4d3d419da559fdcb1d4 = $this->env->getExtension("native_profiler");
        $__internal_506d9c3009732d6f2b7f4bce219bc4cfd8064be7632ae4d3d419da559fdcb1d4->enter($__internal_506d9c3009732d6f2b7f4bce219bc4cfd8064be7632ae4d3d419da559fdcb1d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_506d9c3009732d6f2b7f4bce219bc4cfd8064be7632ae4d3d419da559fdcb1d4->leave($__internal_506d9c3009732d6f2b7f4bce219bc4cfd8064be7632ae4d3d419da559fdcb1d4_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
