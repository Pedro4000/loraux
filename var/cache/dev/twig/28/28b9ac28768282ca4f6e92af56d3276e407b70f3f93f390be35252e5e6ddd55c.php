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
class __TwigTemplate_ccada23f8dad0a42fd5582983a30a3ee11248ccccce60352c4385f9a1d4c686e extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "index.html.twig"));

        $this->parent = $this->loadTemplate("layout.html.twig", "index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_page_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_content"));

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
        <div class=\"discogs-result-display\">
            <img src=\"";
            // line 16
            echo twig_escape_filter($this->env, (isset($context["img"]) || array_key_exists("img", $context) ? $context["img"] : (function () { throw new RuntimeError('Variable "img" does not exist.', 16, $this->source); })()), "html", null, true);
            echo "\" onerror=\"this.src='";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/no_image.jpg"), "html", null, true);
            echo "'\" class=\"research-logo\" data-item-type=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["responseContents"]) || array_key_exists("responseContents", $context) ? $context["responseContents"] : (function () { throw new RuntimeError('Variable "responseContents" does not exist.', 16, $this->source); })()), "results", [], "array", false, false, false, 16), 0, [], "array", false, false, false, 16), "type", [], "array", false, false, false, 16), "html", null, true);
            echo "\"
                 data-item-id=\"";
            // line 17
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["responseContents"]) || array_key_exists("responseContents", $context) ? $context["responseContents"] : (function () { throw new RuntimeError('Variable "responseContents" does not exist.', 17, $this->source); })()), "results", [], "array", false, false, false, 17), 0, [], "array", false, false, false, 17), "id", [], "array", false, false, false, 17), "html", null, true);
            echo "\" >
            <p class=\"dj-or-label\">Juste pour info c'est un
                ";
            // line 19
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["responseContents"]) || array_key_exists("responseContents", $context) ? $context["responseContents"] : (function () { throw new RuntimeError('Variable "responseContents" does not exist.', 19, $this->source); })()), "results", [], "array", false, false, false, 19), 0, [], "array", false, false, false, 19), "type", [], "array", false, false, false, 19), "artist"))) {
                // line 20
                echo "                    artiste
                ";
            } else {
                // line 22
                echo "                    ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["responseContents"]) || array_key_exists("responseContents", $context) ? $context["responseContents"] : (function () { throw new RuntimeError('Variable "responseContents" does not exist.', 22, $this->source); })()), "results", [], "array", false, false, false, 22), 0, [], "array", false, false, false, 22), "type", [], "array", false, false, false, 22), "html", null, true);
                echo "
                ";
            }
            // line 23
            echo "</p>
            <p>Alors c'est ça ?</p>
            ";
            // line 25
            if ((isset($context["guzzleException"]) || array_key_exists("guzzleException", $context) ? $context["guzzleException"] : (function () { throw new RuntimeError('Variable "guzzleException" does not exist.', 25, $this->source); })())) {
                // line 26
                echo "                <p>";
                echo twig_escape_filter($this->env, (isset($context["guzzleException"]) || array_key_exists("guzzleException", $context) ? $context["guzzleException"] : (function () { throw new RuntimeError('Variable "guzzleException" does not exist.', 26, $this->source); })()), "html", null, true);
                echo "</p>
            ";
            }
            // line 28
            echo "        </div>

         <div class=\"discogs-query-control-pannel\" data-pages=\"";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["discogsQueryInfos"]) || array_key_exists("discogsQueryInfos", $context) ? $context["discogsQueryInfos"] : (function () { throw new RuntimeError('Variable "discogsQueryInfos" does not exist.', 30, $this->source); })()), "pages", [], "any", false, false, false, 30), "html", null, true);
            echo "\" data-elements=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["discogsQueryInfos"]) || array_key_exists("discogsQueryInfos", $context) ? $context["discogsQueryInfos"] : (function () { throw new RuntimeError('Variable "discogsQueryInfos" does not exist.', 30, $this->source); })()), "totalLength", [], "any", false, false, false, 30), "html", null, true);
            echo "\">
             <button type=\"button\" class=\"good-answer-ma-man\">Yesss c ca</button>
             <button type=\"button\" class='previous-research-button discogs-research-button'><img class=\"previous-discogs-image\" src=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/icons/keyboard_arrow_left-24px.svg"), "html", null, true);
            echo "\"></button>
             <button type=\"button\" class='next-research-button discogs-research-button'><img class=\"next-discogs-image\" src=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/icons/keyboard_arrow_right-24px.svg"), "html", null, true);
            echo "\"> </button>
         </div>
        <div class=\"video-section\">
        </div>
        <div class=\"hidden-links-div\">

        </div>
    </section>
    ";
        }
        // line 42
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

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
        return array (  149 => 42,  137 => 33,  133 => 32,  126 => 30,  122 => 28,  116 => 26,  114 => 25,  110 => 23,  104 => 22,  100 => 20,  98 => 19,  93 => 17,  85 => 16,  81 => 14,  79 => 13,  68 => 4,  58 => 3,  35 => 1,);
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
        <div class=\"discogs-result-display\">
            <img src=\"{{ img }}\" onerror=\"this.src='{{ asset('build/images/no_image.jpg') }}'\" class=\"research-logo\" data-item-type=\"{{ responseContents['results'][0]['type']}}\"
                 data-item-id=\"{{ responseContents['results'][0]['id']}}\" >
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
        </div>

         <div class=\"discogs-query-control-pannel\" data-pages=\"{{ discogsQueryInfos.pages }}\" data-elements=\"{{ discogsQueryInfos.totalLength }}\">
             <button type=\"button\" class=\"good-answer-ma-man\">Yesss c ca</button>
             <button type=\"button\" class='previous-research-button discogs-research-button'><img class=\"previous-discogs-image\" src=\"{{ asset('build/icons/keyboard_arrow_left-24px.svg') }}\"></button>
             <button type=\"button\" class='next-research-button discogs-research-button'><img class=\"next-discogs-image\" src=\"{{ asset('build/icons/keyboard_arrow_right-24px.svg') }}\"> </button>
         </div>
        <div class=\"video-section\">
        </div>
        <div class=\"hidden-links-div\">

        </div>
    </section>
    {% endif %}

{% endblock %}", "index.html.twig", "C:\\Users\\Boulanger\\dev\\cultureClub\\templates\\index.html.twig");
    }
}