<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_5a5c309ea94f03e7d2922731c12101c773ccd9d20faabf085797db62929d6384 extends Twig_Template
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
        $__internal_549b79365b9d675e7606b53bdf6ee6311ea3f897aba00467cf9874e36e268204 = $this->env->getExtension("native_profiler");
        $__internal_549b79365b9d675e7606b53bdf6ee6311ea3f897aba00467cf9874e36e268204->enter($__internal_549b79365b9d675e7606b53bdf6ee6311ea3f897aba00467cf9874e36e268204_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_549b79365b9d675e7606b53bdf6ee6311ea3f897aba00467cf9874e36e268204->leave($__internal_549b79365b9d675e7606b53bdf6ee6311ea3f897aba00467cf9874e36e268204_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}*/
/* */
