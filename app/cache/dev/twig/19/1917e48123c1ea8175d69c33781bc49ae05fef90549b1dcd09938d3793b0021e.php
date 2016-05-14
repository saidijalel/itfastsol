<?php

/* page/index.html.twig */
class __TwigTemplate_7deb2931b1d4c41ec81b179a41f76c8a431ce501ea9e6482d1eca8ca75f61b1a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("theme/theme1/layout.html.twig", "page/index.html.twig", 1);
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
        $__internal_ba95b3902bd4373453fa952d73381a1b360f79021da1c7fc91164c8b70401508 = $this->env->getExtension("native_profiler");
        $__internal_ba95b3902bd4373453fa952d73381a1b360f79021da1c7fc91164c8b70401508->enter($__internal_ba95b3902bd4373453fa952d73381a1b360f79021da1c7fc91164c8b70401508_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "page/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ba95b3902bd4373453fa952d73381a1b360f79021da1c7fc91164c8b70401508->leave($__internal_ba95b3902bd4373453fa952d73381a1b360f79021da1c7fc91164c8b70401508_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_d6e5a4f1dc56b794ab379e072bcd5d26979c77012a76bbd8206a1f05abe8bd93 = $this->env->getExtension("native_profiler");
        $__internal_d6e5a4f1dc56b794ab379e072bcd5d26979c77012a76bbd8206a1f05abe8bd93->enter($__internal_d6e5a4f1dc56b794ab379e072bcd5d26979c77012a76bbd8206a1f05abe8bd93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Home</h1>
";
        
        $__internal_d6e5a4f1dc56b794ab379e072bcd5d26979c77012a76bbd8206a1f05abe8bd93->leave($__internal_d6e5a4f1dc56b794ab379e072bcd5d26979c77012a76bbd8206a1f05abe8bd93_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_b11c46ea57a29f192a2612ef817d5fb3cbcbce9e5792f70db46b6aec3fcd945c = $this->env->getExtension("native_profiler");
        $__internal_b11c46ea57a29f192a2612ef817d5fb3cbcbce9e5792f70db46b6aec3fcd945c->enter($__internal_b11c46ea57a29f192a2612ef817d5fb3cbcbce9e5792f70db46b6aec3fcd945c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 8
        echo "
";
        
        $__internal_b11c46ea57a29f192a2612ef817d5fb3cbcbce9e5792f70db46b6aec3fcd945c->leave($__internal_b11c46ea57a29f192a2612ef817d5fb3cbcbce9e5792f70db46b6aec3fcd945c_prof);

    }

    public function getTemplateName()
    {
        return "page/index.html.twig";
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
/*     <h1>Home</h1>*/
/* {% endblock %}*/
/* */
/* {% block stylesheets %}*/
/* */
/* {% endblock %}*/
/* */
