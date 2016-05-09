<?php

/* ::base.html.twig */
class __TwigTemplate_25392dcd07b6cf3b6d83ad97c8d1a699500dedca800a0e55c409c78e5aa05f9c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_637b95ab7bf058af0b6629c2632268334c4efcd018b2ef11c5093b6958537655 = $this->env->getExtension("native_profiler");
        $__internal_637b95ab7bf058af0b6629c2632268334c4efcd018b2ef11c5093b6958537655->enter($__internal_637b95ab7bf058af0b6629c2632268334c4efcd018b2ef11c5093b6958537655_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_637b95ab7bf058af0b6629c2632268334c4efcd018b2ef11c5093b6958537655->leave($__internal_637b95ab7bf058af0b6629c2632268334c4efcd018b2ef11c5093b6958537655_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_8f7f0367fd25ba0a6ff52177ea063a0bd4c17dd8c8fda3a5d3fb6d6156b181cb = $this->env->getExtension("native_profiler");
        $__internal_8f7f0367fd25ba0a6ff52177ea063a0bd4c17dd8c8fda3a5d3fb6d6156b181cb->enter($__internal_8f7f0367fd25ba0a6ff52177ea063a0bd4c17dd8c8fda3a5d3fb6d6156b181cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_8f7f0367fd25ba0a6ff52177ea063a0bd4c17dd8c8fda3a5d3fb6d6156b181cb->leave($__internal_8f7f0367fd25ba0a6ff52177ea063a0bd4c17dd8c8fda3a5d3fb6d6156b181cb_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_1b7514de3349009e84e78c356de37a44e864120dab42e095609b969d71aa9a70 = $this->env->getExtension("native_profiler");
        $__internal_1b7514de3349009e84e78c356de37a44e864120dab42e095609b969d71aa9a70->enter($__internal_1b7514de3349009e84e78c356de37a44e864120dab42e095609b969d71aa9a70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_1b7514de3349009e84e78c356de37a44e864120dab42e095609b969d71aa9a70->leave($__internal_1b7514de3349009e84e78c356de37a44e864120dab42e095609b969d71aa9a70_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_6a000da775ef05d7f60442c6031bb40209854f605033dd032dfbd427a1fb7738 = $this->env->getExtension("native_profiler");
        $__internal_6a000da775ef05d7f60442c6031bb40209854f605033dd032dfbd427a1fb7738->enter($__internal_6a000da775ef05d7f60442c6031bb40209854f605033dd032dfbd427a1fb7738_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_6a000da775ef05d7f60442c6031bb40209854f605033dd032dfbd427a1fb7738->leave($__internal_6a000da775ef05d7f60442c6031bb40209854f605033dd032dfbd427a1fb7738_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_88a587c6ae1e2bafaf012879c1c744c64d2048cdd530882b4fdddcb0af4ecdea = $this->env->getExtension("native_profiler");
        $__internal_88a587c6ae1e2bafaf012879c1c744c64d2048cdd530882b4fdddcb0af4ecdea->enter($__internal_88a587c6ae1e2bafaf012879c1c744c64d2048cdd530882b4fdddcb0af4ecdea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_88a587c6ae1e2bafaf012879c1c744c64d2048cdd530882b4fdddcb0af4ecdea->leave($__internal_88a587c6ae1e2bafaf012879c1c744c64d2048cdd530882b4fdddcb0af4ecdea_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
