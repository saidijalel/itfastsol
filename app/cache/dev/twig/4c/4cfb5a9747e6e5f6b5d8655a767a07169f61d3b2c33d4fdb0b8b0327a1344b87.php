<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_30fe2544b2cf566e9ed15de54179a45e2a2f7da6c06082aaedba165c834b014e extends Twig_Template
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
        $__internal_74fa13ec87f369c380f1e1fa798099a16a4a8e88786477e3bc9b87387ca9159f = $this->env->getExtension("native_profiler");
        $__internal_74fa13ec87f369c380f1e1fa798099a16a4a8e88786477e3bc9b87387ca9159f->enter($__internal_74fa13ec87f369c380f1e1fa798099a16a4a8e88786477e3bc9b87387ca9159f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_74fa13ec87f369c380f1e1fa798099a16a4a8e88786477e3bc9b87387ca9159f->leave($__internal_74fa13ec87f369c380f1e1fa798099a16a4a8e88786477e3bc9b87387ca9159f_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 3,  22 => 1,);
    }
}
/* <?xml version="1.0" encoding="{{ _charset }}" ?>*/
/* */
/* <error code="{{ status_code }}" message="{{ status_text }}" />*/
/* */
