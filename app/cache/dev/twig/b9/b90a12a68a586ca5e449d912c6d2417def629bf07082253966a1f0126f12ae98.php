<?php

/* knp_menu_base.html.twig */
class __TwigTemplate_ffd883f12b703775f8d9ba996d1af057ee8b77b8dbd34b72be53f502c438ed67 extends Twig_Template
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
        $__internal_9f401112ba9cb0c1ffd645b931ad0088cc3ef9c5ff94c92a2db8021ec580052e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f401112ba9cb0c1ffd645b931ad0088cc3ef9c5ff94c92a2db8021ec580052e->enter($__internal_9f401112ba9cb0c1ffd645b931ad0088cc3ef9c5ff94c92a2db8021ec580052e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "knp_menu_base.html.twig"));

        // line 1
        if ($this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "compressed", array())) {
            $this->displayBlock("compressed_root", $context, $blocks);
        } else {
            $this->displayBlock("root", $context, $blocks);
        }
        
        $__internal_9f401112ba9cb0c1ffd645b931ad0088cc3ef9c5ff94c92a2db8021ec580052e->leave($__internal_9f401112ba9cb0c1ffd645b931ad0088cc3ef9c5ff94c92a2db8021ec580052e_prof);

    }

    public function getTemplateName()
    {
        return "knp_menu_base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "{% if options.compressed %}{{ block('compressed_root') }}{% else %}{{ block('root') }}{% endif %}
";
    }
}
