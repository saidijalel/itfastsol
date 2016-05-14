<?php

/* theme/navbar.html.twig */
class __TwigTemplate_976b6c427ce3580c0aebd07e00a09afe6fdf6835e282504e4f4c01bbfd8d09af extends Twig_Template
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
        $__internal_a19e45d4fc00c9255584130c95382b33c1565f22ae99342be6929017ee8b090d = $this->env->getExtension("native_profiler");
        $__internal_a19e45d4fc00c9255584130c95382b33c1565f22ae99342be6929017ee8b090d->enter($__internal_a19e45d4fc00c9255584130c95382b33c1565f22ae99342be6929017ee8b090d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "theme/navbar.html.twig"));

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
            <a class=\"navbar-brand\" href=\"#\">Project name</a>
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
        echo "\">Home</a></li>
                <li ";
        // line 15
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "_route"), "method") == "page_about")) {
            echo " class=\"active\"";
        }
        echo "><a href=\"";
        echo $this->env->getExtension('routing')->getPath("page_about");
        echo "\">About</a></li>
                <li ";
        // line 16
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "_route"), "method") == "page_contact")) {
            echo " class=\"active\"";
        }
        echo "><a href=\"";
        echo $this->env->getExtension('routing')->getPath("page_contact");
        echo "\">Contact</a></li>
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</nav>
";
        
        $__internal_a19e45d4fc00c9255584130c95382b33c1565f22ae99342be6929017ee8b090d->leave($__internal_a19e45d4fc00c9255584130c95382b33c1565f22ae99342be6929017ee8b090d_prof);

    }

    public function getTemplateName()
    {
        return "theme/navbar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 16,  45 => 15,  37 => 14,  22 => 1,);
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
/*             <a class="navbar-brand" href="#">Project name</a>*/
/*         </div>*/
/*         <div id="navbar" class="collapse navbar-collapse">*/
/*             <ul class="nav navbar-nav">*/
/*                 <li {% if app.request.get('_route') == 'page_home' %} class="active"{% endif %}><a href="{{ path('page_home') }}">Home</a></li>*/
/*                 <li {% if app.request.get('_route') == 'page_about' %} class="active"{% endif %}><a href="{{ path('page_about') }}">About</a></li>*/
/*                 <li {% if app.request.get('_route') == 'page_contact' %} class="active"{% endif %}><a href="{{ path('page_contact') }}">Contact</a></li>*/
/*             </ul>*/
/*         </div><!--/.nav-collapse -->*/
/*     </div>*/
/* </nav>*/
/* */
