<?php

/* page/about.html.twig */
class __TwigTemplate_1386537040300651c3cfd761705518401bb6a4e34fc60ac9a19f3ee65cfe3041 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("theme/theme1/layout.html.twig", "page/about.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'stylesheets' => array($this, 'block_stylesheets'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "theme/theme1/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_26e399be86f86e01aadb0a2ccff0d64dea3d3ef35278115f500dc70fef0d0d84 = $this->env->getExtension("native_profiler");
        $__internal_26e399be86f86e01aadb0a2ccff0d64dea3d3ef35278115f500dc70fef0d0d84->enter($__internal_26e399be86f86e01aadb0a2ccff0d64dea3d3ef35278115f500dc70fef0d0d84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "page/about.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_26e399be86f86e01aadb0a2ccff0d64dea3d3ef35278115f500dc70fef0d0d84->leave($__internal_26e399be86f86e01aadb0a2ccff0d64dea3d3ef35278115f500dc70fef0d0d84_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_0e3956883ddbc051334c60feb8f9338ceb39b9fb3b906e7a8f5facdd2cb134d9 = $this->env->getExtension("native_profiler");
        $__internal_0e3956883ddbc051334c60feb8f9338ceb39b9fb3b906e7a8f5facdd2cb134d9->enter($__internal_0e3956883ddbc051334c60feb8f9338ceb39b9fb3b906e7a8f5facdd2cb134d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>About</h1>
";
        
        $__internal_0e3956883ddbc051334c60feb8f9338ceb39b9fb3b906e7a8f5facdd2cb134d9->leave($__internal_0e3956883ddbc051334c60feb8f9338ceb39b9fb3b906e7a8f5facdd2cb134d9_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_416a8a36feebad17265df7bc7196d89736eb4fec8534230807b2100b8b76f6e0 = $this->env->getExtension("native_profiler");
        $__internal_416a8a36feebad17265df7bc7196d89736eb4fec8534230807b2100b8b76f6e0->enter($__internal_416a8a36feebad17265df7bc7196d89736eb4fec8534230807b2100b8b76f6e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 8
        echo "
";
        
        $__internal_416a8a36feebad17265df7bc7196d89736eb4fec8534230807b2100b8b76f6e0->leave($__internal_416a8a36feebad17265df7bc7196d89736eb4fec8534230807b2100b8b76f6e0_prof);

    }

    public function getTemplateName()
    {
        return "page/about.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 8,  49 => 7,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'theme/theme1/layout.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>About</h1>*/
/* {% endblock %}*/
/* */
/* {% block stylesheets %}*/
/* */
/* {% endblock %}*/
/* */
