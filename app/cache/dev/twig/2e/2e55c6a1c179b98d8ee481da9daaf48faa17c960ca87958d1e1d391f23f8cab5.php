<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_14d9eb16eb07f36413ab7eb6ccdb42386e9969c5a7e9707add4607c3f79f9cf8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_5d2f3229adf5f34da4d252d63ac64ffc7164933d87ffc46012b0d56e4e66e335 = $this->env->getExtension("native_profiler");
        $__internal_5d2f3229adf5f34da4d252d63ac64ffc7164933d87ffc46012b0d56e4e66e335->enter($__internal_5d2f3229adf5f34da4d252d63ac64ffc7164933d87ffc46012b0d56e4e66e335_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5d2f3229adf5f34da4d252d63ac64ffc7164933d87ffc46012b0d56e4e66e335->leave($__internal_5d2f3229adf5f34da4d252d63ac64ffc7164933d87ffc46012b0d56e4e66e335_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_25098613ca2be48f638065d89d5ad15e24dd544769ef50d599a64c958c189131 = $this->env->getExtension("native_profiler");
        $__internal_25098613ca2be48f638065d89d5ad15e24dd544769ef50d599a64c958c189131->enter($__internal_25098613ca2be48f638065d89d5ad15e24dd544769ef50d599a64c958c189131_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_25098613ca2be48f638065d89d5ad15e24dd544769ef50d599a64c958c189131->leave($__internal_25098613ca2be48f638065d89d5ad15e24dd544769ef50d599a64c958c189131_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_e14c884cc48b858f59f66df64292e55e084fed587412a1b3d0c77db3df873284 = $this->env->getExtension("native_profiler");
        $__internal_e14c884cc48b858f59f66df64292e55e084fed587412a1b3d0c77db3df873284->enter($__internal_e14c884cc48b858f59f66df64292e55e084fed587412a1b3d0c77db3df873284_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_e14c884cc48b858f59f66df64292e55e084fed587412a1b3d0c77db3df873284->leave($__internal_e14c884cc48b858f59f66df64292e55e084fed587412a1b3d0c77db3df873284_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_6d7cf4df443fa6d095f3c1eed83ebc7fa44c14415c5521128a0149e872a71bcf = $this->env->getExtension("native_profiler");
        $__internal_6d7cf4df443fa6d095f3c1eed83ebc7fa44c14415c5521128a0149e872a71bcf->enter($__internal_6d7cf4df443fa6d095f3c1eed83ebc7fa44c14415c5521128a0149e872a71bcf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_6d7cf4df443fa6d095f3c1eed83ebc7fa44c14415c5521128a0149e872a71bcf->leave($__internal_6d7cf4df443fa6d095f3c1eed83ebc7fa44c14415c5521128a0149e872a71bcf_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
