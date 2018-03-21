<?php

/* SonataBlockBundle:Block:block_base.html.twig */
class __TwigTemplate_be22e5bfe592074096bf3a54db3b3d9d180bfc55c0a5d3bc6d119f6b9144d2ff extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'block' => array($this, 'block_block'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3981a77f7982052e1725a0a7bde97ed575a5154f5fd7a219dd04d877aa25c0d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3981a77f7982052e1725a0a7bde97ed575a5154f5fd7a219dd04d877aa25c0d5->enter($__internal_3981a77f7982052e1725a0a7bde97ed575a5154f5fd7a219dd04d877aa25c0d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_base.html.twig"));

        // line 11
        echo "<div id=\"cms-block-";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["block"]) ? $context["block"] : $this->getContext($context, "block")), "id", array()), "html", null, true);
        echo "\" class=\"cms-block cms-block-element\">
    ";
        // line 12
        $this->displayBlock('block', $context, $blocks);
        // line 13
        echo "</div>
";
        
        $__internal_3981a77f7982052e1725a0a7bde97ed575a5154f5fd7a219dd04d877aa25c0d5->leave($__internal_3981a77f7982052e1725a0a7bde97ed575a5154f5fd7a219dd04d877aa25c0d5_prof);

    }

    // line 12
    public function block_block($context, array $blocks = array())
    {
        $__internal_37a4a908c3c4f10ac82054a7957c63170a5c5497cb86ed67bfbeb0c7249dc786 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_37a4a908c3c4f10ac82054a7957c63170a5c5497cb86ed67bfbeb0c7249dc786->enter($__internal_37a4a908c3c4f10ac82054a7957c63170a5c5497cb86ed67bfbeb0c7249dc786_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        echo "EMPTY CONTENT";
        
        $__internal_37a4a908c3c4f10ac82054a7957c63170a5c5497cb86ed67bfbeb0c7249dc786->leave($__internal_37a4a908c3c4f10ac82054a7957c63170a5c5497cb86ed67bfbeb0c7249dc786_prof);

    }

    public function getTemplateName()
    {
        return "SonataBlockBundle:Block:block_base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 12,  30 => 13,  28 => 12,  23 => 11,);
    }

    public function getSource()
    {
        return "{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}
<div id=\"cms-block-{{ block.id }}\" class=\"cms-block cms-block-element\">
    {% block block %}EMPTY CONTENT{% endblock %}
</div>
";
    }
}
