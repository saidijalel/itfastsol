<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_ad3fd73daee91dde09c69fafebca4b95e73c428b34a0fb8d11cb497bfa33fece extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_46c463ffaeead003490e8e97d9a269e3d7869ada55ecded97190ce284fc29ebf = $this->env->getExtension("native_profiler");
        $__internal_46c463ffaeead003490e8e97d9a269e3d7869ada55ecded97190ce284fc29ebf->enter($__internal_46c463ffaeead003490e8e97d9a269e3d7869ada55ecded97190ce284fc29ebf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_46c463ffaeead003490e8e97d9a269e3d7869ada55ecded97190ce284fc29ebf->leave($__internal_46c463ffaeead003490e8e97d9a269e3d7869ada55ecded97190ce284fc29ebf_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_921f5e74e0ca5a4b76f1d9f10b4c7986d8be04c07383ba02433a0999a5634459 = $this->env->getExtension("native_profiler");
        $__internal_921f5e74e0ca5a4b76f1d9f10b4c7986d8be04c07383ba02433a0999a5634459->enter($__internal_921f5e74e0ca5a4b76f1d9f10b4c7986d8be04c07383ba02433a0999a5634459_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_921f5e74e0ca5a4b76f1d9f10b4c7986d8be04c07383ba02433a0999a5634459->leave($__internal_921f5e74e0ca5a4b76f1d9f10b4c7986d8be04c07383ba02433a0999a5634459_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }
}
/* {% block panel '' %}*/
/* */
