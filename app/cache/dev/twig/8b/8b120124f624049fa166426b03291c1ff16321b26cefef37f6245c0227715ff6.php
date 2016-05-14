<?php

/* base.html.twig */
class __TwigTemplate_92b93276c23aa037891466d5c9a86bb73ce36e70bd3c7e85ec168ecdf74ed33f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_85f3bf468cbf40f5984f9450026c179569b2e9e6460b45d0075859b6169e53fe = $this->env->getExtension("native_profiler");
        $__internal_85f3bf468cbf40f5984f9450026c179569b2e9e6460b45d0075859b6169e53fe->enter($__internal_85f3bf468cbf40f5984f9450026c179569b2e9e6460b45d0075859b6169e53fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_85f3bf468cbf40f5984f9450026c179569b2e9e6460b45d0075859b6169e53fe->leave($__internal_85f3bf468cbf40f5984f9450026c179569b2e9e6460b45d0075859b6169e53fe_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_9aca71140bac9b0eddd0176100ff9c7a71855baee20f6e72ef1bd6f629a083fe = $this->env->getExtension("native_profiler");
        $__internal_9aca71140bac9b0eddd0176100ff9c7a71855baee20f6e72ef1bd6f629a083fe->enter($__internal_9aca71140bac9b0eddd0176100ff9c7a71855baee20f6e72ef1bd6f629a083fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_9aca71140bac9b0eddd0176100ff9c7a71855baee20f6e72ef1bd6f629a083fe->leave($__internal_9aca71140bac9b0eddd0176100ff9c7a71855baee20f6e72ef1bd6f629a083fe_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_4bffcd609f1ac58733f9ff814b20b0b72d66809d19a8e26f0f0eb4f78218d9ff = $this->env->getExtension("native_profiler");
        $__internal_4bffcd609f1ac58733f9ff814b20b0b72d66809d19a8e26f0f0eb4f78218d9ff->enter($__internal_4bffcd609f1ac58733f9ff814b20b0b72d66809d19a8e26f0f0eb4f78218d9ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_4bffcd609f1ac58733f9ff814b20b0b72d66809d19a8e26f0f0eb4f78218d9ff->leave($__internal_4bffcd609f1ac58733f9ff814b20b0b72d66809d19a8e26f0f0eb4f78218d9ff_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_e89ac9ba5ca26ab24e1d2f6168979fa2e88ec9be047480d79eaaec73fb923a8e = $this->env->getExtension("native_profiler");
        $__internal_e89ac9ba5ca26ab24e1d2f6168979fa2e88ec9be047480d79eaaec73fb923a8e->enter($__internal_e89ac9ba5ca26ab24e1d2f6168979fa2e88ec9be047480d79eaaec73fb923a8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_e89ac9ba5ca26ab24e1d2f6168979fa2e88ec9be047480d79eaaec73fb923a8e->leave($__internal_e89ac9ba5ca26ab24e1d2f6168979fa2e88ec9be047480d79eaaec73fb923a8e_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_58082b041f17dba3505255bfff4203c061138aac8a21d8f6b73707d5bfccd317 = $this->env->getExtension("native_profiler");
        $__internal_58082b041f17dba3505255bfff4203c061138aac8a21d8f6b73707d5bfccd317->enter($__internal_58082b041f17dba3505255bfff4203c061138aac8a21d8f6b73707d5bfccd317_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_58082b041f17dba3505255bfff4203c061138aac8a21d8f6b73707d5bfccd317->leave($__internal_58082b041f17dba3505255bfff4203c061138aac8a21d8f6b73707d5bfccd317_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
