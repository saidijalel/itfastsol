<?php

/* theme/layout.html.twig */
class __TwigTemplate_3dfa92fdd43a96fe4b107e2e71a5cd646c45bc03679d2d0d9d81338363f22e27 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'navbar' => array($this, 'block_navbar'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2be73cd5bb8348122118fc66876359147ee12a736e802c433eab25ee873e1603 = $this->env->getExtension("native_profiler");
        $__internal_2be73cd5bb8348122118fc66876359147ee12a736e802c433eab25ee873e1603->enter($__internal_2be73cd5bb8348122118fc66876359147ee12a736e802c433eab25ee873e1603_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "theme/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/vendor/bootstrap/dist/css/bootstrap.min.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/css/app.css"), "html", null, true);
        echo "\">
        ";
        // line 11
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 12
        echo "    </head>
    <body>
    ";
        // line 14
        $this->displayBlock('navbar', $context, $blocks);
        // line 17
        echo "    <div class=\"container\">
        ";
        // line 18
        $this->displayBlock('body', $context, $blocks);
        // line 19
        echo "    </div>

    <script src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/vendor/jquery/dist/jquery.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/vendor/bootstrap/dist/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    ";
        // line 23
        $this->displayBlock('javascripts', $context, $blocks);
        // line 24
        echo "
    </body>
</html>
";
        
        $__internal_2be73cd5bb8348122118fc66876359147ee12a736e802c433eab25ee873e1603->leave($__internal_2be73cd5bb8348122118fc66876359147ee12a736e802c433eab25ee873e1603_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_1d380046a2641d319285753ea6f0625003682ef722002bfdce6ef34293ab16c8 = $this->env->getExtension("native_profiler");
        $__internal_1d380046a2641d319285753ea6f0625003682ef722002bfdce6ef34293ab16c8->enter($__internal_1d380046a2641d319285753ea6f0625003682ef722002bfdce6ef34293ab16c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_1d380046a2641d319285753ea6f0625003682ef722002bfdce6ef34293ab16c8->leave($__internal_1d380046a2641d319285753ea6f0625003682ef722002bfdce6ef34293ab16c8_prof);

    }

    // line 11
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_88ff893ca4c99f550d524f3a16ead1e0c339324860ce869574ae5091fca61c39 = $this->env->getExtension("native_profiler");
        $__internal_88ff893ca4c99f550d524f3a16ead1e0c339324860ce869574ae5091fca61c39->enter($__internal_88ff893ca4c99f550d524f3a16ead1e0c339324860ce869574ae5091fca61c39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_88ff893ca4c99f550d524f3a16ead1e0c339324860ce869574ae5091fca61c39->leave($__internal_88ff893ca4c99f550d524f3a16ead1e0c339324860ce869574ae5091fca61c39_prof);

    }

    // line 14
    public function block_navbar($context, array $blocks = array())
    {
        $__internal_0a8a29c81b7521ac062583e35078a98af122f437851238a4627383d54bc3b477 = $this->env->getExtension("native_profiler");
        $__internal_0a8a29c81b7521ac062583e35078a98af122f437851238a4627383d54bc3b477->enter($__internal_0a8a29c81b7521ac062583e35078a98af122f437851238a4627383d54bc3b477_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar"));

        // line 15
        echo "        ";
        $this->loadTemplate("theme/navbar.html.twig", "theme/layout.html.twig", 15)->display($context);
        // line 16
        echo "    ";
        
        $__internal_0a8a29c81b7521ac062583e35078a98af122f437851238a4627383d54bc3b477->leave($__internal_0a8a29c81b7521ac062583e35078a98af122f437851238a4627383d54bc3b477_prof);

    }

    // line 18
    public function block_body($context, array $blocks = array())
    {
        $__internal_07e012444bc0050749e92d6385668f14550d0dfbd31b293ac029bb9f8f21e797 = $this->env->getExtension("native_profiler");
        $__internal_07e012444bc0050749e92d6385668f14550d0dfbd31b293ac029bb9f8f21e797->enter($__internal_07e012444bc0050749e92d6385668f14550d0dfbd31b293ac029bb9f8f21e797_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_07e012444bc0050749e92d6385668f14550d0dfbd31b293ac029bb9f8f21e797->leave($__internal_07e012444bc0050749e92d6385668f14550d0dfbd31b293ac029bb9f8f21e797_prof);

    }

    // line 23
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_36b9db77de0377d76d6e3ba4265ee2503b287dbf729a555eb78f77f167c7e427 = $this->env->getExtension("native_profiler");
        $__internal_36b9db77de0377d76d6e3ba4265ee2503b287dbf729a555eb78f77f167c7e427->enter($__internal_36b9db77de0377d76d6e3ba4265ee2503b287dbf729a555eb78f77f167c7e427_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_36b9db77de0377d76d6e3ba4265ee2503b287dbf729a555eb78f77f167c7e427->leave($__internal_36b9db77de0377d76d6e3ba4265ee2503b287dbf729a555eb78f77f167c7e427_prof);

    }

    public function getTemplateName()
    {
        return "theme/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 23,  127 => 18,  120 => 16,  117 => 15,  111 => 14,  100 => 11,  88 => 7,  78 => 24,  76 => 23,  72 => 22,  68 => 21,  64 => 19,  62 => 18,  59 => 17,  57 => 14,  53 => 12,  51 => 11,  47 => 10,  43 => 9,  39 => 8,  35 => 7,  27 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <meta http-equiv="X-UA-Compatible" content="IE=edge">*/
/*         <meta name="viewport" content="width=device-width, initial-scale=1">*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*         <link rel="stylesheet" href="{{ asset('assets/vendor/bootstrap/dist/css/bootstrap.min.css') }}">*/
/*         <link rel="stylesheet" href="{{ asset('assets/css/app.css') }}">*/
/*         {% block stylesheets %}{% endblock %}*/
/*     </head>*/
/*     <body>*/
/*     {% block navbar %}*/
/*         {%  include 'theme/navbar.html.twig' %}*/
/*     {% endblock %}*/
/*     <div class="container">*/
/*         {% block body %}{% endblock %}*/
/*     </div>*/
/* */
/*     <script src="{{ asset('assets/vendor/jquery/dist/jquery.min.js') }}"></script>*/
/*     <script src="{{ asset('assets/vendor/bootstrap/dist/js/bootstrap.min.js') }}"></script>*/
/*     {% block javascripts %}{% endblock %}*/
/* */
/*     </body>*/
/* </html>*/
/* */
