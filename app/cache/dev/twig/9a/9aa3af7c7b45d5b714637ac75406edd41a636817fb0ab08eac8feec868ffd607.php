<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_89dee32c3b81272a5baae7564d1e0da4b0ca09b06a83f9c115d436640b96e788 extends Twig_Template
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
        $__internal_16585f83c77bfc112a36e7d4211ff33712c23948136f89b43d63bebcbae7b474 = $this->env->getExtension("native_profiler");
        $__internal_16585f83c77bfc112a36e7d4211ff33712c23948136f89b43d63bebcbae7b474->enter($__internal_16585f83c77bfc112a36e7d4211ff33712c23948136f89b43d63bebcbae7b474_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code"));
        echo " ";
        echo (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_16585f83c77bfc112a36e7d4211ff33712c23948136f89b43d63bebcbae7b474->leave($__internal_16585f83c77bfc112a36e7d4211ff33712c23948136f89b43d63bebcbae7b474_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 4,  22 => 1,);
    }
}
/* Oops! An Error Occurred*/
/* =======================*/
/* */
/* The server returned a "{{ status_code }} {{ status_text }}".*/
/* */
/* Something is broken. Please let us know what you were doing when this error occurred.*/
/* We will fix it as soon as possible. Sorry for any inconvenience caused.*/
/* */
