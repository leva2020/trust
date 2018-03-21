<?php

/* SonataAdminBundle:CRUD:edit.html.twig */
class __TwigTemplate_15f397ca8805c658a60276953132ae3b911206c623ba1c7ee4cc98e5e40dae80 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_edit.html.twig", "SonataAdminBundle:CRUD:edit.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_edit.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6dcdc356888e7c8effa49e832abdd9e11ab7e8dceeed2077f70953f564a3ea82 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6dcdc356888e7c8effa49e832abdd9e11ab7e8dceeed2077f70953f564a3ea82->enter($__internal_6dcdc356888e7c8effa49e832abdd9e11ab7e8dceeed2077f70953f564a3ea82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6dcdc356888e7c8effa49e832abdd9e11ab7e8dceeed2077f70953f564a3ea82->leave($__internal_6dcdc356888e7c8effa49e832abdd9e11ab7e8dceeed2077f70953f564a3ea82_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  11 => 12,);
    }

    public function getSource()
    {
        return "{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}

{% extends 'SonataAdminBundle:CRUD:base_edit.html.twig' %}
";
    }
}
