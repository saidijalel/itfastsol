<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_6eb52fdd232aa8e4aa94cc1eb4c4f091aaed263c29f4952b3d2af9c6dfddf409 extends Twig_Template
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
        $__internal_2e6d10e8ca6ef8541c752a0e57f814cb4e24a1025bddf0fbf3c57902538ec6cc = $this->env->getExtension("native_profiler");
        $__internal_2e6d10e8ca6ef8541c752a0e57f814cb4e24a1025bddf0fbf3c57902538ec6cc->enter($__internal_2e6d10e8ca6ef8541c752a0e57f814cb4e24a1025bddf0fbf3c57902538ec6cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_2e6d10e8ca6ef8541c752a0e57f814cb4e24a1025bddf0fbf3c57902538ec6cc->leave($__internal_2e6d10e8ca6ef8541c752a0e57f814cb4e24a1025bddf0fbf3c57902538ec6cc_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
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
