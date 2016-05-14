<?php

/* theme/theme1/navbar.html.twig */
class __TwigTemplate_cddac8a1c8e1c6f8578a2101a87c3ef5158639d38ee3b06486266eb56676d0e3 extends Twig_Template
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
        $__internal_1da4e07762436900d9cc00a6920ce515afe18836cfc84d9476a2394b03c35ef6 = $this->env->getExtension("native_profiler");
        $__internal_1da4e07762436900d9cc00a6920ce515afe18836cfc84d9476a2394b03c35ef6->enter($__internal_1da4e07762436900d9cc00a6920ce515afe18836cfc84d9476a2394b03c35ef6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "theme/theme1/navbar.html.twig"));

        // line 1
        echo "<nav class=\"navbar navbar-inverse navbar-fixed-top\">
    <div class=\"container\">
        <div class=\"navbar-header\">
            <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#navbar\" aria-expanded=\"false\" aria-controls=\"navbar\">
                <span class=\"sr-only\">Toggle navigation</span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
            </button>
            <a class=\"navbar-brand\" href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("page_home");
        echo "\">ItFastSolution</a>
        </div>
        <div id=\"navbar\" class=\"collapse navbar-collapse\">
            <ul class=\"nav navbar-nav\">
                <li ";
        // line 14
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "_route"), "method") == "page_home")) {
            echo " class=\"active\"";
        }
        echo "><a href=\"";
        echo $this->env->getExtension('routing')->getPath("page_home");
        echo "\"><i class=\"fa fa-home\" aria-hidden=\"true\"></i> Home</a></li>
                <li ";
        // line 15
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "_route"), "method") == "page_about")) {
            echo " class=\"active\"";
        }
        echo "><a href=\"";
        echo $this->env->getExtension('routing')->getPath("page_about");
        echo "\"><i class=\"fa fa-info-circle\" aria-hidden=\"true\"></i> About</a></li>
                <li ";
        // line 16
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "_route"), "method") == "page_contact")) {
            echo " class=\"active\"";
        }
        echo "><a href=\"";
        echo $this->env->getExtension('routing')->getPath("page_contact");
        echo "\"><i class=\"fa fa-envelope-o\" aria-hidden=\"true\"></i> Contact</a></li>
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</nav>
";
        
        $__internal_1da4e07762436900d9cc00a6920ce515afe18836cfc84d9476a2394b03c35ef6->leave($__internal_1da4e07762436900d9cc00a6920ce515afe18836cfc84d9476a2394b03c35ef6_prof);

    }

    public function getTemplateName()
    {
        return "theme/theme1/navbar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 16,  48 => 15,  40 => 14,  33 => 10,  22 => 1,);
    }
}
/* <nav class="navbar navbar-inverse navbar-fixed-top">*/
/*     <div class="container">*/
/*         <div class="navbar-header">*/
/*             <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">*/
/*                 <span class="sr-only">Toggle navigation</span>*/
/*                 <span class="icon-bar"></span>*/
/*                 <span class="icon-bar"></span>*/
/*                 <span class="icon-bar"></span>*/
/*             </button>*/
/*             <a class="navbar-brand" href="{{ path('page_home') }}">ItFastSolution</a>*/
/*         </div>*/
/*         <div id="navbar" class="collapse navbar-collapse">*/
/*             <ul class="nav navbar-nav">*/
/*                 <li {% if app.request.get('_route') == 'page_home' %} class="active"{% endif %}><a href="{{ path('page_home') }}"><i class="fa fa-home" aria-hidden="true"></i> Home</a></li>*/
/*                 <li {% if app.request.get('_route') == 'page_about' %} class="active"{% endif %}><a href="{{ path('page_about') }}"><i class="fa fa-info-circle" aria-hidden="true"></i> About</a></li>*/
/*                 <li {% if app.request.get('_route') == 'page_contact' %} class="active"{% endif %}><a href="{{ path('page_contact') }}"><i class="fa fa-envelope-o" aria-hidden="true"></i> Contact</a></li>*/
/*             </ul>*/
/*         </div><!--/.nav-collapse -->*/
/*     </div>*/
/* </nav>*/
/* */
