<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_f25ca26213671e7663b9b5f7ddb9b053ee6db00c253a7118985adcfe0063edb7 extends Twig_Template
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
        $__internal_4023db0539c4afdacd5ebfc75c6988c4bad19477376c990c9fc79b532df263e5 = $this->env->getExtension("native_profiler");
        $__internal_4023db0539c4afdacd5ebfc75c6988c4bad19477376c990c9fc79b532df263e5->enter($__internal_4023db0539c4afdacd5ebfc75c6988c4bad19477376c990c9fc79b532df263e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
        
        $__internal_4023db0539c4afdacd5ebfc75c6988c4bad19477376c990c9fc79b532df263e5->leave($__internal_4023db0539c4afdacd5ebfc75c6988c4bad19477376c990c9fc79b532df263e5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <table <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <tr>*/
/*         <td colspan="2">*/
/*             <?php echo $view['form']->errors($form) ?>*/
/*         </td>*/
/*     </tr>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </table>*/
/* */
