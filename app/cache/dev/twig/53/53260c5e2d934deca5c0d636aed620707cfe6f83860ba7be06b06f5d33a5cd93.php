<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_0c15e1d87659553ad2a67337941b9087eacb51ee9db5692dd01e88b16fdce761 extends Twig_Template
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
        $__internal_2fcb977a2eaeb03c9f388917ffddd1a4004d01d459f6989d075e55def90d9ca1 = $this->env->getExtension("native_profiler");
        $__internal_2fcb977a2eaeb03c9f388917ffddd1a4004d01d459f6989d075e55def90d9ca1->enter($__internal_2fcb977a2eaeb03c9f388917ffddd1a4004d01d459f6989d075e55def90d9ca1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_2fcb977a2eaeb03c9f388917ffddd1a4004d01d459f6989d075e55def90d9ca1->leave($__internal_2fcb977a2eaeb03c9f388917ffddd1a4004d01d459f6989d075e55def90d9ca1_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */
