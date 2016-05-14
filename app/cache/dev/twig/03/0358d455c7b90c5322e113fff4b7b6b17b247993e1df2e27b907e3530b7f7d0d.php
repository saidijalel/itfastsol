<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_1e94da2bc88c54b5b06f989a48e9ab84075cd211662c1d92ece1552a8ea2eded extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0e98eda81f83d00864d03ca98fcab51ee74c9448a4f4b0aaa586f258bb2d2304 = $this->env->getExtension("native_profiler");
        $__internal_0e98eda81f83d00864d03ca98fcab51ee74c9448a4f4b0aaa586f258bb2d2304->enter($__internal_0e98eda81f83d00864d03ca98fcab51ee74c9448a4f4b0aaa586f258bb2d2304_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0e98eda81f83d00864d03ca98fcab51ee74c9448a4f4b0aaa586f258bb2d2304->leave($__internal_0e98eda81f83d00864d03ca98fcab51ee74c9448a4f4b0aaa586f258bb2d2304_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_e093cc8b1fdb49fbf53141a4456afa467940ccf5db1c6b9976c4d452874e05e6 = $this->env->getExtension("native_profiler");
        $__internal_e093cc8b1fdb49fbf53141a4456afa467940ccf5db1c6b9976c4d452874e05e6->enter($__internal_e093cc8b1fdb49fbf53141a4456afa467940ccf5db1c6b9976c4d452874e05e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_e093cc8b1fdb49fbf53141a4456afa467940ccf5db1c6b9976c4d452874e05e6->leave($__internal_e093cc8b1fdb49fbf53141a4456afa467940ccf5db1c6b9976c4d452874e05e6_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_003fb6b03f096ad410ddc765d2dee250c0892dfe2c97c230867758f38dee2670 = $this->env->getExtension("native_profiler");
        $__internal_003fb6b03f096ad410ddc765d2dee250c0892dfe2c97c230867758f38dee2670->enter($__internal_003fb6b03f096ad410ddc765d2dee250c0892dfe2c97c230867758f38dee2670_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_003fb6b03f096ad410ddc765d2dee250c0892dfe2c97c230867758f38dee2670->leave($__internal_003fb6b03f096ad410ddc765d2dee250c0892dfe2c97c230867758f38dee2670_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block title 'Redirection Intercepted' %}*/
/* */
/* {% block body %}*/
/*     <div class="sf-reset">*/
/*         <div class="block-exception">*/
/*             <h1>This request redirects to <a href="{{ location }}">{{ location }}</a>.</h1>*/
/* */
/*             <p>*/
/*                 <small>*/
/*                     The redirect was intercepted by the web debug toolbar to help debugging.*/
/*                     For more information, see the "intercept-redirects" option of the Profiler.*/
/*                 </small>*/
/*             </p>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
