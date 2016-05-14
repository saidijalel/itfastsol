<?php

/* theme/theme1/layout.html.twig */
class __TwigTemplate_12664b04cfcce725bd1a98f2a550d2bb1ad95454946ef7b005fb9caceced3cef extends Twig_Template
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
            'footer' => array($this, 'block_footer'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_de3093da42d63dab156f6326b3424aaa26844dae8572d31e54edb7427e4bdec9 = $this->env->getExtension("native_profiler");
        $__internal_de3093da42d63dab156f6326b3424aaa26844dae8572d31e54edb7427e4bdec9->enter($__internal_de3093da42d63dab156f6326b3424aaa26844dae8572d31e54edb7427e4bdec9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "theme/theme1/layout.html.twig"));

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
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/vendor/font-awesome/css/font-awesome.min.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/css/app.css"), "html", null, true);
        echo "\">
        ";
        // line 12
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 13
        echo "    </head>
    <body>
    ";
        // line 15
        $this->displayBlock('navbar', $context, $blocks);
        // line 18
        echo "    <div class=\"container\">
        ";
        // line 19
        $this->displayBlock('body', $context, $blocks);
        // line 20
        echo "    </div>
    ";
        // line 21
        $this->displayBlock('footer', $context, $blocks);
        // line 24
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/vendor/jquery/dist/jquery.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/vendor/bootstrap/dist/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    ";
        // line 26
        $this->displayBlock('javascripts', $context, $blocks);
        // line 27
        echo "    </body>
</html>";
        
        $__internal_de3093da42d63dab156f6326b3424aaa26844dae8572d31e54edb7427e4bdec9->leave($__internal_de3093da42d63dab156f6326b3424aaa26844dae8572d31e54edb7427e4bdec9_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_f0ec9d352a69e08ebb60ab5bc43675a51fde113cf2cd67ea3e6018ed30af8c34 = $this->env->getExtension("native_profiler");
        $__internal_f0ec9d352a69e08ebb60ab5bc43675a51fde113cf2cd67ea3e6018ed30af8c34->enter($__internal_f0ec9d352a69e08ebb60ab5bc43675a51fde113cf2cd67ea3e6018ed30af8c34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_f0ec9d352a69e08ebb60ab5bc43675a51fde113cf2cd67ea3e6018ed30af8c34->leave($__internal_f0ec9d352a69e08ebb60ab5bc43675a51fde113cf2cd67ea3e6018ed30af8c34_prof);

    }

    // line 12
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_97545dfbdd54f75e844579895cce77c160ca2f9e4fea8f6c7a182ee09d715b70 = $this->env->getExtension("native_profiler");
        $__internal_97545dfbdd54f75e844579895cce77c160ca2f9e4fea8f6c7a182ee09d715b70->enter($__internal_97545dfbdd54f75e844579895cce77c160ca2f9e4fea8f6c7a182ee09d715b70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_97545dfbdd54f75e844579895cce77c160ca2f9e4fea8f6c7a182ee09d715b70->leave($__internal_97545dfbdd54f75e844579895cce77c160ca2f9e4fea8f6c7a182ee09d715b70_prof);

    }

    // line 15
    public function block_navbar($context, array $blocks = array())
    {
        $__internal_526accd01a84bae87ea72419bf4afe417f44e3636e7ea2cb9707d6b2a3c489fd = $this->env->getExtension("native_profiler");
        $__internal_526accd01a84bae87ea72419bf4afe417f44e3636e7ea2cb9707d6b2a3c489fd->enter($__internal_526accd01a84bae87ea72419bf4afe417f44e3636e7ea2cb9707d6b2a3c489fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar"));

        // line 16
        echo "        ";
        $this->loadTemplate("theme/theme1/navbar.html.twig", "theme/theme1/layout.html.twig", 16)->display($context);
        // line 17
        echo "    ";
        
        $__internal_526accd01a84bae87ea72419bf4afe417f44e3636e7ea2cb9707d6b2a3c489fd->leave($__internal_526accd01a84bae87ea72419bf4afe417f44e3636e7ea2cb9707d6b2a3c489fd_prof);

    }

    // line 19
    public function block_body($context, array $blocks = array())
    {
        $__internal_1091418755738f5d8c27b8060b0778f9fcdb987205f5a04ac89f350ccadeba44 = $this->env->getExtension("native_profiler");
        $__internal_1091418755738f5d8c27b8060b0778f9fcdb987205f5a04ac89f350ccadeba44->enter($__internal_1091418755738f5d8c27b8060b0778f9fcdb987205f5a04ac89f350ccadeba44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_1091418755738f5d8c27b8060b0778f9fcdb987205f5a04ac89f350ccadeba44->leave($__internal_1091418755738f5d8c27b8060b0778f9fcdb987205f5a04ac89f350ccadeba44_prof);

    }

    // line 21
    public function block_footer($context, array $blocks = array())
    {
        $__internal_7a16171b352d0e008af46d39bf42b6b382b193d0d2a0e6c96c241d51a18ac37e = $this->env->getExtension("native_profiler");
        $__internal_7a16171b352d0e008af46d39bf42b6b382b193d0d2a0e6c96c241d51a18ac37e->enter($__internal_7a16171b352d0e008af46d39bf42b6b382b193d0d2a0e6c96c241d51a18ac37e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 22
        echo "        ";
        $this->loadTemplate("theme/theme1/footer.html.twig", "theme/theme1/layout.html.twig", 22)->display($context);
        // line 23
        echo "    ";
        
        $__internal_7a16171b352d0e008af46d39bf42b6b382b193d0d2a0e6c96c241d51a18ac37e->leave($__internal_7a16171b352d0e008af46d39bf42b6b382b193d0d2a0e6c96c241d51a18ac37e_prof);

    }

    // line 26
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_19dc19ade06f8c3fa5c61a30fdc6d97152542bc83596970088d2b61872132aae = $this->env->getExtension("native_profiler");
        $__internal_19dc19ade06f8c3fa5c61a30fdc6d97152542bc83596970088d2b61872132aae->enter($__internal_19dc19ade06f8c3fa5c61a30fdc6d97152542bc83596970088d2b61872132aae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_19dc19ade06f8c3fa5c61a30fdc6d97152542bc83596970088d2b61872132aae->leave($__internal_19dc19ade06f8c3fa5c61a30fdc6d97152542bc83596970088d2b61872132aae_prof);

    }

    public function getTemplateName()
    {
        return "theme/theme1/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  159 => 26,  152 => 23,  149 => 22,  143 => 21,  132 => 19,  125 => 17,  122 => 16,  116 => 15,  105 => 12,  93 => 7,  85 => 27,  83 => 26,  79 => 25,  74 => 24,  72 => 21,  69 => 20,  67 => 19,  64 => 18,  62 => 15,  58 => 13,  56 => 12,  52 => 11,  48 => 10,  44 => 9,  40 => 8,  36 => 7,  28 => 1,);
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
/*         <link rel="stylesheet" href="{{ asset('assets/vendor/font-awesome/css/font-awesome.min.css') }}">*/
/*         <link rel="stylesheet" href="{{ asset('assets/css/app.css') }}">*/
/*         {% block stylesheets %}{% endblock %}*/
/*     </head>*/
/*     <body>*/
/*     {% block navbar %}*/
/*         {%  include 'theme/theme1/navbar.html.twig' %}*/
/*     {% endblock %}*/
/*     <div class="container">*/
/*         {% block body %}{% endblock %}*/
/*     </div>*/
/*     {% block footer %}*/
/*         {%  include 'theme/theme1/footer.html.twig' %}*/
/*     {% endblock %}*/
/*     <script src="{{ asset('assets/vendor/jquery/dist/jquery.min.js') }}"></script>*/
/*     <script src="{{ asset('assets/vendor/bootstrap/dist/js/bootstrap.min.js') }}"></script>*/
/*     {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
