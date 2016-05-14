<?php

/* page/contact.html.twig */
class __TwigTemplate_c2b2ce2183e1e8cbd2217f534c97ef22a61cebfc71ddf6ecff692a759454fb3f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("theme/theme1/layout.html.twig", "page/contact.html.twig", 1);
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
        $__internal_28fbbdc29e34276d052201dc4342a2a869b79312b91c28fbd3efdfb338905207 = $this->env->getExtension("native_profiler");
        $__internal_28fbbdc29e34276d052201dc4342a2a869b79312b91c28fbd3efdfb338905207->enter($__internal_28fbbdc29e34276d052201dc4342a2a869b79312b91c28fbd3efdfb338905207_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "page/contact.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_28fbbdc29e34276d052201dc4342a2a869b79312b91c28fbd3efdfb338905207->leave($__internal_28fbbdc29e34276d052201dc4342a2a869b79312b91c28fbd3efdfb338905207_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_6eaed2c8ecd01f2988b86f7fb51d8525b4f4957fcc5407492c93c2439c4c585d = $this->env->getExtension("native_profiler");
        $__internal_6eaed2c8ecd01f2988b86f7fb51d8525b4f4957fcc5407492c93c2439c4c585d->enter($__internal_6eaed2c8ecd01f2988b86f7fb51d8525b4f4957fcc5407492c93c2439c4c585d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Contact</h1>
";
        
        $__internal_6eaed2c8ecd01f2988b86f7fb51d8525b4f4957fcc5407492c93c2439c4c585d->leave($__internal_6eaed2c8ecd01f2988b86f7fb51d8525b4f4957fcc5407492c93c2439c4c585d_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_6e649f23925be200c6f4ccf58554d9435706507cd5e4acaafc6d0d9552f2e98c = $this->env->getExtension("native_profiler");
        $__internal_6e649f23925be200c6f4ccf58554d9435706507cd5e4acaafc6d0d9552f2e98c->enter($__internal_6e649f23925be200c6f4ccf58554d9435706507cd5e4acaafc6d0d9552f2e98c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 8
        echo "
";
        
        $__internal_6e649f23925be200c6f4ccf58554d9435706507cd5e4acaafc6d0d9552f2e98c->leave($__internal_6e649f23925be200c6f4ccf58554d9435706507cd5e4acaafc6d0d9552f2e98c_prof);

    }

    public function getTemplateName()
    {
        return "page/contact.html.twig";
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
/*     <h1>Contact</h1>*/
/* {% endblock %}*/
/* */
/* {% block stylesheets %}*/
/* */
/* {% endblock %}*/
/* */
