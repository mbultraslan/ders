<?php

/* DersBundle:Default:listele.html.twig */
class __TwigTemplate_88c06faceadefae97d0c649d7ea9a7e136dae4dd98c4641998ff47079b78e617 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "DersBundle:Default:listele.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_681387fc359f39052e45632b0f07fdc5277321d223b0b9f3f156711522402a95 = $this->env->getExtension("native_profiler");
        $__internal_681387fc359f39052e45632b0f07fdc5277321d223b0b9f3f156711522402a95->enter($__internal_681387fc359f39052e45632b0f07fdc5277321d223b0b9f3f156711522402a95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DersBundle:Default:listele.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_681387fc359f39052e45632b0f07fdc5277321d223b0b9f3f156711522402a95->leave($__internal_681387fc359f39052e45632b0f07fdc5277321d223b0b9f3f156711522402a95_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_abf0a23841c4dd917023accd0b40ff0c62760adad5cc8bc6343ca62cda0743a5 = $this->env->getExtension("native_profiler");
        $__internal_abf0a23841c4dd917023accd0b40ff0c62760adad5cc8bc6343ca62cda0743a5->enter($__internal_abf0a23841c4dd917023accd0b40ff0c62760adad5cc8bc6343ca62cda0743a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    Ders listele
";
        
        $__internal_abf0a23841c4dd917023accd0b40ff0c62760adad5cc8bc6343ca62cda0743a5->leave($__internal_abf0a23841c4dd917023accd0b40ff0c62760adad5cc8bc6343ca62cda0743a5_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_95ca6ca9696a40af23928ff98c685a621ca263f2c5b4873b59268751de3626e2 = $this->env->getExtension("native_profiler");
        $__internal_95ca6ca9696a40af23928ff98c685a621ca263f2c5b4873b59268751de3626e2->enter($__internal_95ca6ca9696a40af23928ff98c685a621ca263f2c5b4873b59268751de3626e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["dersler"]) ? $context["dersler"] : $this->getContext($context, "dersler")));
        foreach ($context['_seq'] as $context["_key"] => $context["d"]) {
            // line 9
            echo "      ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["d"], "id", array()), "html", null, true);
            echo " -> ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["d"], "baslik", array()), "html", null, true);
            echo " <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ders-detay", array("id" => $this->getAttribute($context["d"], "id", array()))), "html", null, true);
            echo "\">Detay</a> <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ders-sil", array("id" => $this->getAttribute($context["d"], "id", array()))), "html", null, true);
            echo "\">Sil</a><br>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['d'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_95ca6ca9696a40af23928ff98c685a621ca263f2c5b4873b59268751de3626e2->leave($__internal_95ca6ca9696a40af23928ff98c685a621ca263f2c5b4873b59268751de3626e2_prof);

    }

    public function getTemplateName()
    {
        return "DersBundle:Default:listele.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 9,  55 => 8,  49 => 7,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends "::base.html.twig" %}*/
/* */
/* {% block title %}*/
/*     Ders listele*/
/* {% endblock title %}*/
/* */
/* {% block body %}*/
/*     {% for d in dersler %}*/
/*       {{ d.id }} -> {{ d.baslik }} <a href="{{ path('ders-detay',{'id':d.id }) }}">Detay</a> <a href="{{ path('ders-sil', {'id':d.id}) }}">Sil</a><br>*/
/*     {% endfor %}*/
/* {% endblock body %}*/
/* */
