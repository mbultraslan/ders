<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_e6d8638e55d59451b4dc7a364b5480e265690be4513e3114e9228320d4fa2cb6 extends Twig_Template
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
        $__internal_21cf85487083598a55212cca9e7cb1643e9c999171be6fc7b77e30dc7edb3c35 = $this->env->getExtension("native_profiler");
        $__internal_21cf85487083598a55212cca9e7cb1643e9c999171be6fc7b77e30dc7edb3c35->enter($__internal_21cf85487083598a55212cca9e7cb1643e9c999171be6fc7b77e30dc7edb3c35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_21cf85487083598a55212cca9e7cb1643e9c999171be6fc7b77e30dc7edb3c35->leave($__internal_21cf85487083598a55212cca9e7cb1643e9c999171be6fc7b77e30dc7edb3c35_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_48dd253452f03dec65486c6f37f55f333e99d8c18eec505780349a55a1dcb548 = $this->env->getExtension("native_profiler");
        $__internal_48dd253452f03dec65486c6f37f55f333e99d8c18eec505780349a55a1dcb548->enter($__internal_48dd253452f03dec65486c6f37f55f333e99d8c18eec505780349a55a1dcb548_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_48dd253452f03dec65486c6f37f55f333e99d8c18eec505780349a55a1dcb548->leave($__internal_48dd253452f03dec65486c6f37f55f333e99d8c18eec505780349a55a1dcb548_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_3107956d315b6065116bef43f251cf27838c4ac782f646e24dba8de546be449a = $this->env->getExtension("native_profiler");
        $__internal_3107956d315b6065116bef43f251cf27838c4ac782f646e24dba8de546be449a->enter($__internal_3107956d315b6065116bef43f251cf27838c4ac782f646e24dba8de546be449a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_3107956d315b6065116bef43f251cf27838c4ac782f646e24dba8de546be449a->leave($__internal_3107956d315b6065116bef43f251cf27838c4ac782f646e24dba8de546be449a_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_97aaea89cc3b248f47d3ad574d64117b03715b343e76a3704b85102250563a0c = $this->env->getExtension("native_profiler");
        $__internal_97aaea89cc3b248f47d3ad574d64117b03715b343e76a3704b85102250563a0c->enter($__internal_97aaea89cc3b248f47d3ad574d64117b03715b343e76a3704b85102250563a0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_97aaea89cc3b248f47d3ad574d64117b03715b343e76a3704b85102250563a0c->leave($__internal_97aaea89cc3b248f47d3ad574d64117b03715b343e76a3704b85102250563a0c_prof);

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
