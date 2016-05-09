<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_44ff132d276a2cb6c09b3c81a81e8089e9cff16d4bd1b73df9b3078a9ffc68fd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Profile:show.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ca31716a34feb248f2071bf5bf2d7cd243cd10643ec414484f8eb47eb1c2cb47 = $this->env->getExtension("native_profiler");
        $__internal_ca31716a34feb248f2071bf5bf2d7cd243cd10643ec414484f8eb47eb1c2cb47->enter($__internal_ca31716a34feb248f2071bf5bf2d7cd243cd10643ec414484f8eb47eb1c2cb47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ca31716a34feb248f2071bf5bf2d7cd243cd10643ec414484f8eb47eb1c2cb47->leave($__internal_ca31716a34feb248f2071bf5bf2d7cd243cd10643ec414484f8eb47eb1c2cb47_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b24b8026f8532f0f513ca14a2214af8082a20e1d22eed2b4318a6991e612d673 = $this->env->getExtension("native_profiler");
        $__internal_b24b8026f8532f0f513ca14a2214af8082a20e1d22eed2b4318a6991e612d673->enter($__internal_b24b8026f8532f0f513ca14a2214af8082a20e1d22eed2b4318a6991e612d673_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_b24b8026f8532f0f513ca14a2214af8082a20e1d22eed2b4318a6991e612d673->leave($__internal_b24b8026f8532f0f513ca14a2214af8082a20e1d22eed2b4318a6991e612d673_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% block fos_user_content %}*/
/* {% include "FOSUserBundle:Profile:show_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
