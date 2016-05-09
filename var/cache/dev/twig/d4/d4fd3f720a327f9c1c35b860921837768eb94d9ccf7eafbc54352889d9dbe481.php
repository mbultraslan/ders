<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_d0880283f88ab82c66c4fda1dc0b9e1c79ba34c7af9967833696e694166f77bc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b1b479f0c6e9d31263e709f058aec92b02ac7a9b7dc755de868a602a304c1310 = $this->env->getExtension("native_profiler");
        $__internal_b1b479f0c6e9d31263e709f058aec92b02ac7a9b7dc755de868a602a304c1310->enter($__internal_b1b479f0c6e9d31263e709f058aec92b02ac7a9b7dc755de868a602a304c1310_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b1b479f0c6e9d31263e709f058aec92b02ac7a9b7dc755de868a602a304c1310->leave($__internal_b1b479f0c6e9d31263e709f058aec92b02ac7a9b7dc755de868a602a304c1310_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_0e22e4ff9958e46f07599acff7248a9e8a0fc3464cf16ea9621f2d067386a682 = $this->env->getExtension("native_profiler");
        $__internal_0e22e4ff9958e46f07599acff7248a9e8a0fc3464cf16ea9621f2d067386a682->enter($__internal_0e22e4ff9958e46f07599acff7248a9e8a0fc3464cf16ea9621f2d067386a682_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_0e22e4ff9958e46f07599acff7248a9e8a0fc3464cf16ea9621f2d067386a682->leave($__internal_0e22e4ff9958e46f07599acff7248a9e8a0fc3464cf16ea9621f2d067386a682_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_f52d8b98901bbe970e357770be237b604d40edc7f6f1e39f9f1692e7c3f057af = $this->env->getExtension("native_profiler");
        $__internal_f52d8b98901bbe970e357770be237b604d40edc7f6f1e39f9f1692e7c3f057af->enter($__internal_f52d8b98901bbe970e357770be237b604d40edc7f6f1e39f9f1692e7c3f057af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_f52d8b98901bbe970e357770be237b604d40edc7f6f1e39f9f1692e7c3f057af->leave($__internal_f52d8b98901bbe970e357770be237b604d40edc7f6f1e39f9f1692e7c3f057af_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_db944c31740e819495767d748a92c863473d777a6e9dac1efbfac0e715221cd3 = $this->env->getExtension("native_profiler");
        $__internal_db944c31740e819495767d748a92c863473d777a6e9dac1efbfac0e715221cd3->enter($__internal_db944c31740e819495767d748a92c863473d777a6e9dac1efbfac0e715221cd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_db944c31740e819495767d748a92c863473d777a6e9dac1efbfac0e715221cd3->leave($__internal_db944c31740e819495767d748a92c863473d777a6e9dac1efbfac0e715221cd3_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
