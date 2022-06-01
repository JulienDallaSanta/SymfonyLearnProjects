<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* categorie/categorie.html.twig */
class __TwigTemplate_f7fb3b4e6d4f3c518d2058b0e0c4a978 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "categorie/categorie.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "categorie/categorie.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "categorie/categorie.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Hello ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 3, $this->source); })()), "id", [], "any", false, false, false, 3), "html", null, true);
        echo "!";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<style>
    .example-wrapper { margin: 1em auto; max-width: 800px; width: 95%; font: 18px/1.5 sans-serif; }
    .example-wrapper code { background: #F5F5F5; padding: 2px 6px; }
    .sous-categorie, .topic{ font-weight: bold; font-size: 1.2rem; margin-bottom: 0.5rem; }
    .sous-categorie-description{ list-style: none; font-weight: initial; font-size: initial; margin-bottom: 0; }
</style>

";
        // line 14
        echo "    ";
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 14, $this->source); })()), "categoriesFilles", [], "any", false, false, false, 14)) > 0)) {
            // line 15
            echo "        <h2>Catégorie";
            if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 15, $this->source); })()), "categoriesFilles", [], "any", false, false, false, 15)) > 1)) {
                echo "s";
            }
            echo "</h2>
        <ul>
            ";
            // line 17
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 17, $this->source); })()), "categoriesFilles", [], "any", false, false, false, 17));
            foreach ($context['_seq'] as $context["_key"] => $context["sousCategorie"]) {
                // line 18
                echo "            <li class=\"sous-categorie\">
                <a href=\"/categorie/";
                // line 19
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["sousCategorie"], "id", [], "any", false, false, false, 19), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["sousCategorie"], "titre", [], "any", false, false, false, 19), "html", null, true);
                echo " :</a>
                <ul>
                    <li class=\"sous-categorie-description\">";
                // line 21
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["sousCategorie"], "description", [], "any", false, false, false, 21), "html", null, true);
                echo "</li>
                </ul>
            </li>

";
                // line 31
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sousCategorie'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 32
            echo "        </ul>
    ";
        } else {
            // line 34
            echo "        <p>la ";
            if ((twig_get_attribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 34, $this->source); })()), "parent", [], "any", false, false, false, 34) == null)) {
                echo "catégorie";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 34, $this->source); })()), "id", [], "any", false, false, false, 34), "html", null, true);
            } else {
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 34, $this->source); })()), "titre", [], "any", false, false, false, 34), "html", null, true);
                echo " ";
            }
            echo " n'a pas de sous-catégories.</p>
    ";
        }
        // line 36
        echo "
    <h2>Topics</h2>
    <ul>
        ";
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 39, $this->source); })()), "topics", [], "any", false, false, false, 39));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["topic"]) {
            // line 40
            echo "            <li class=\"topic\">
                <a href=\"/topic/";
            // line 41
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["topic"], "id", [], "any", false, false, false, 41), "html", null, true);
            echo "\">Topic n°";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 41), "html", null, true);
            echo " de la ";
            if ((twig_get_attribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 41, $this->source); })()), "parent", [], "any", false, false, false, 41) == null)) {
                echo "catégorie";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 41, $this->source); })()), "id", [], "any", false, false, false, 41), "html", null, true);
            } else {
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 41, $this->source); })()), "titre", [], "any", false, false, false, 41), "html", null, true);
                echo " ";
            }
            echo "</a>
            </li>
        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['topic'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "    </ul>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "categorie/categorie.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  205 => 44,  178 => 41,  175 => 40,  158 => 39,  153 => 36,  141 => 34,  137 => 32,  131 => 31,  124 => 21,  117 => 19,  114 => 18,  110 => 17,  102 => 15,  99 => 14,  90 => 6,  80 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Hello {{ category.id }}!{% endblock %}

{% block body %}
<style>
    .example-wrapper { margin: 1em auto; max-width: 800px; width: 95%; font: 18px/1.5 sans-serif; }
    .example-wrapper code { background: #F5F5F5; padding: 2px 6px; }
    .sous-categorie, .topic{ font-weight: bold; font-size: 1.2rem; margin-bottom: 0.5rem; }
    .sous-categorie-description{ list-style: none; font-weight: initial; font-size: initial; margin-bottom: 0; }
</style>

{#    {{ dump(category) }}#}
    {% if category.categoriesFilles|length>0 %}
        <h2>Catégorie{% if category.categoriesFilles|length>1 %}s{% endif %}</h2>
        <ul>
            {% for sousCategorie in category.categoriesFilles %}
            <li class=\"sous-categorie\">
                <a href=\"/categorie/{{ sousCategorie.id }}\">{{ sousCategorie.titre }} :</a>
                <ul>
                    <li class=\"sous-categorie-description\">{{ sousCategorie.description }}</li>
                </ul>
            </li>

{#                <span>Cette sous-catégorie a {{ sousCategorie.topics|length }} topics :</span>#}
{#                <ul>#}
{#                {% for topic in sousCategorie.topics %}#}
{#                    <li>Topic n°{{ loop.index}}</li>#}
{#                {% endfor %}#}
{#                </ul>#}
            {% endfor %}
        </ul>
    {% else %}
        <p>la {% if category.parent == null %}catégorie{{ category.id}}{% else %}{{ category.titre }} {% endif %} n'a pas de sous-catégories.</p>
    {% endif %}

    <h2>Topics</h2>
    <ul>
        {% for topic in category.topics %}
            <li class=\"topic\">
                <a href=\"/topic/{{ topic.id }}\">Topic n°{{ loop.index }} de la {% if category.parent == null %}catégorie{{ category.id}}{% else %}{{ category.titre }} {% endif %}</a>
            </li>
        {% endfor %}
    </ul>

{% endblock %}", "categorie/categorie.html.twig", "C:\\Users\\JulienDALLASANTA(DEF\\Symfony\\formation\\templates\\categorie\\categorie.html.twig");
    }
}
