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

/* index.html.twig */
class __TwigTemplate_612c3c750cc7b9bb3a02e9b2e443cddeb886ee0bb05986565e85964664579652 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'page_content' => [$this, 'block_page_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "index.html.twig"));

        $this->parent = $this->loadTemplate("layout.html.twig", "index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_page_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_content"));

        // line 4
        echo "
    <section class=\"discogs-research-section\">
        <form method=\"post\" >
            <label for=\"query\">Votre recherche</label>
            <input type=\"text\" id=\"query-discogs\" name=\"query-discogs\">
            <button type=\"submit\">Cherche ma frye</button>
            <button type=\"reset\">Annule</button>
        </form>
    </section>
    ";
        // line 13
        if (((isset($context["img"]) || array_key_exists("img", $context) ? $context["img"] : (function () { throw new RuntimeError('Variable "img" does not exist.', 13, $this->source); })()) && (isset($context["responseContents"]) || array_key_exists("responseContents", $context) ? $context["responseContents"] : (function () { throw new RuntimeError('Variable "responseContents" does not exist.', 13, $this->source); })()))) {
            // line 14
            echo "    <section class=\"discogs-response-section\">
        <img src=\"";
            // line 15
            echo twig_escape_filter($this->env, (isset($context["img"]) || array_key_exists("img", $context) ? $context["img"] : (function () { throw new RuntimeError('Variable "img" does not exist.', 15, $this->source); })()), "html", null, true);
            echo "\" onerror=\"this.src='";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/no_image.jpg"), "html", null, true);
            echo "'\" class=\"research-logo\">
        <p class=\"dj-or-label\">Juste pour info c'est un
            ";
            // line 17
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["responseContents"]) || array_key_exists("responseContents", $context) ? $context["responseContents"] : (function () { throw new RuntimeError('Variable "responseContents" does not exist.', 17, $this->source); })()), "results", [], "array", false, false, false, 17), 0, [], "array", false, false, false, 17), "type", [], "array", false, false, false, 17), "artist"))) {
                // line 18
                echo "                artiste
            ";
            } else {
                // line 20
                echo "                ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["responseContents"]) || array_key_exists("responseContents", $context) ? $context["responseContents"] : (function () { throw new RuntimeError('Variable "responseContents" does not exist.', 20, $this->source); })()), "results", [], "array", false, false, false, 20), 0, [], "array", false, false, false, 20), "type", [], "array", false, false, false, 20), "html", null, true);
                echo "
            ";
            }
            // line 21
            echo "</p>
        <p>Alors c'est ça ?</p>
        ";
            // line 23
            if ((isset($context["guzzleException"]) || array_key_exists("guzzleException", $context) ? $context["guzzleException"] : (function () { throw new RuntimeError('Variable "guzzleException" does not exist.', 23, $this->source); })())) {
                // line 24
                echo "            <p>";
                echo twig_escape_filter($this->env, (isset($context["guzzleException"]) || array_key_exists("guzzleException", $context) ? $context["guzzleException"] : (function () { throw new RuntimeError('Variable "guzzleException" does not exist.', 24, $this->source); })()), "html", null, true);
                echo "</p>
        ";
            }
            // line 26
            echo "         <div class=\"discogs-query-control-pannel\">
             <button type=\"button\" class=\"good-answer-ma-man\">Yesss c ca</button>
             <button type=\"button\" class='previous-research-button discogs-research-button'><img class=\"previous-discogs-image\" src=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/icons/keyboard_arrow_left-24px.svg"), "html", null, true);
            echo "\"></button>
             <button type=\"button\" class='next-research-button discogs-research-button'><img class=\"next-discogs-image\" src=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/icons/keyboard_arrow_right-24px.svg"), "html", null, true);
            echo "\"> </button>
         </div>
        ";
            // line 31
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["videosArray"]) || array_key_exists("videosArray", $context) ? $context["videosArray"] : (function () { throw new RuntimeError('Variable "videosArray" does not exist.', 31, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["videoUri"]) {
                // line 32
                echo "            <p><a href=\"";
                echo twig_escape_filter($this->env, $context["videoUri"], "html", null, true);
                echo "\">Allé clicke là</a> </p>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['videoUri'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 34
            echo "    </section>
    ";
        }
        // line 36
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  136 => 36,  132 => 34,  123 => 32,  119 => 31,  114 => 29,  110 => 28,  106 => 26,  100 => 24,  98 => 23,  94 => 21,  88 => 20,  84 => 18,  82 => 17,  75 => 15,  72 => 14,  70 => 13,  59 => 4,  52 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'layout.html.twig' %}

{% block page_content %}

    <section class=\"discogs-research-section\">
        <form method=\"post\" >
            <label for=\"query\">Votre recherche</label>
            <input type=\"text\" id=\"query-discogs\" name=\"query-discogs\">
            <button type=\"submit\">Cherche ma frye</button>
            <button type=\"reset\">Annule</button>
        </form>
    </section>
    {% if img and responseContents %}
    <section class=\"discogs-response-section\">
        <img src=\"{{ img }}\" onerror=\"this.src='{{ asset('build/images/no_image.jpg') }}'\" class=\"research-logo\">
        <p class=\"dj-or-label\">Juste pour info c'est un
            {% if responseContents['results'][0]['type'] == 'artist'%}
                artiste
            {% else %}
                {{ responseContents['results'][0]['type'] }}
            {% endif %}</p>
        <p>Alors c'est ça ?</p>
        {% if guzzleException %}
            <p>{{ guzzleException }}</p>
        {% endif %}
         <div class=\"discogs-query-control-pannel\">
             <button type=\"button\" class=\"good-answer-ma-man\">Yesss c ca</button>
             <button type=\"button\" class='previous-research-button discogs-research-button'><img class=\"previous-discogs-image\" src=\"{{ asset('build/icons/keyboard_arrow_left-24px.svg') }}\"></button>
             <button type=\"button\" class='next-research-button discogs-research-button'><img class=\"next-discogs-image\" src=\"{{ asset('build/icons/keyboard_arrow_right-24px.svg') }}\"> </button>
         </div>
        {% for videoUri in videosArray %}
            <p><a href=\"{{ videoUri }}\">Allé clicke là</a> </p>
        {% endfor %}
    </section>
    {% endif %}

{% endblock %}", "index.html.twig", "C:\\Users\\Boulanger\\dev\\cultureClub\\templates\\index.html.twig");
    }
}
