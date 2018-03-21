<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_cbf6548b6d6cb8af57933a3ecb68193ac6b2e47d668889bf1e62571b43dcac7e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
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
        $__internal_b5fb2ce5190cc77b3f5a3ca5ef1ea87c165ea08d8c7aa8d4db696e9ac75efcf4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b5fb2ce5190cc77b3f5a3ca5ef1ea87c165ea08d8c7aa8d4db696e9ac75efcf4->enter($__internal_b5fb2ce5190cc77b3f5a3ca5ef1ea87c165ea08d8c7aa8d4db696e9ac75efcf4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b5fb2ce5190cc77b3f5a3ca5ef1ea87c165ea08d8c7aa8d4db696e9ac75efcf4->leave($__internal_b5fb2ce5190cc77b3f5a3ca5ef1ea87c165ea08d8c7aa8d4db696e9ac75efcf4_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_9312b837113b91db9643142c5567486004abd5055cc461d7a7419bb53da9d155 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9312b837113b91db9643142c5567486004abd5055cc461d7a7419bb53da9d155->enter($__internal_9312b837113b91db9643142c5567486004abd5055cc461d7a7419bb53da9d155_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_9312b837113b91db9643142c5567486004abd5055cc461d7a7419bb53da9d155->leave($__internal_9312b837113b91db9643142c5567486004abd5055cc461d7a7419bb53da9d155_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_3e92c85e3dfb03dd5149ea414abc35d421d708ecf6fa2d437d7eca7422054b66 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e92c85e3dfb03dd5149ea414abc35d421d708ecf6fa2d437d7eca7422054b66->enter($__internal_3e92c85e3dfb03dd5149ea414abc35d421d708ecf6fa2d437d7eca7422054b66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_3e92c85e3dfb03dd5149ea414abc35d421d708ecf6fa2d437d7eca7422054b66->leave($__internal_3e92c85e3dfb03dd5149ea414abc35d421d708ecf6fa2d437d7eca7422054b66_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_d8b0bc01c27abb7b3427354a5fda5c43af79080527f47ddf3356d4e8be37233c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d8b0bc01c27abb7b3427354a5fda5c43af79080527f47ddf3356d4e8be37233c->enter($__internal_d8b0bc01c27abb7b3427354a5fda5c43af79080527f47ddf3356d4e8be37233c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_d8b0bc01c27abb7b3427354a5fda5c43af79080527f47ddf3356d4e8be37233c->leave($__internal_d8b0bc01c27abb7b3427354a5fda5c43af79080527f47ddf3356d4e8be37233c_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
";
    }
}
