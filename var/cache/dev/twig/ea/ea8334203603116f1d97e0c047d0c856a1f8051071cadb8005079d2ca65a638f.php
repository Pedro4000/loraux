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
class __TwigTemplate_c00e000cce0cbf752eac6540ad316c725ec434d7897923aaf32e8c33481386d8 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "index.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <title>Mon portfolio</title>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width\">
    <link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.4.1/css/all.css\" integrity=\"sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz\" crossorigin=\"anonymous\">
    <link href=\"https://fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500\" rel=\"stylesheet\">
    <link href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css\" rel=\"stylesheet\" integrity=\"sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN\" crossorigin=\"anonymous\">
    <link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.5.0/css/all.css\" integrity=\"sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU\" crossorigin=\"anonymous\">
    ";
        // line 11
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 18
        echo "    <link rel=\"icon\" type=\"image/png\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/img/icons/feather.png"), "html", null, true);
        echo "\" />
";
        // line 25
        echo "
</head>
<body class=\"container\" data-spy=\"scroll\">
<header id=\"main-header\">
    <a href=\"index.html\"><img src=";
        // line 29
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/img/icons/frenchflag.png"), "html", null, true);
        echo "  class=\"flag fr\"></a>
    <a href=\"indexEn.html\"><img src=";
        // line 30
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/img/icons/enflag.png"), "html", null, true);
        echo " class=\"flag en\"></a>
    <nav class=\"main-nav\">
        <ul class=\"main-nav-list\">
            <li class=\"name\"><a href=\"#main-nav-list\">Pierre Brickley</a></li>
            <li class=\"landing\"><a href=\"#landing-section\">Accueil</a></li>
            <li class=\"about\"><a href=\"#about-section\">A propos</a></li>
            <li class=\"skills\"><a href=\"#skills-section\">Compétences</a></li>
            <li class=\"projects\"><a href=\"#projects-section\">Travaux</a></li>
            <li class=\"contact\"><a href=\"#contact-section\">Contact</a></li>
        </ul>
    </nav>
</header>
<main>
    <section id=\"landing-section\">
        <div class=\"section-flex\">
            <span class=\"fullname\">Pierre Brickley</span>
            <span class=\"portfolio-title\">Portfolio</span>
            <span class=\"occupation\">Intégrateur / Développeur WEB Junior</span>
        </div>
    </section>
    <h3 class=\"perso-title\">Personnel</h3>
    <section id=\"about-section\">
        <div class=\"about-div\">
            <img src=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/img/photos/photoidentite.JPG"), "html", null, true);
        echo "\" atl=\"bzzz\" class=\"profile-picture\">
            <span class=\"about-flex\">
\t\t\t\t<h2 class=\"about-title\">A propos</h2>
                    <p>Bonjour, je m'appelle Pierre Brickley, je suis intégrateur et développeur WEB Junior. J'ai découvert la programmation grâce à Visual Basic de Microsoft. En effet, j'étais contrôleur de gestion avant de m'intéresser au Web, et certaines tâches rébarbatives m'ont amené à m'interesser au code en autodidacte.</p>
\t\t\t\t<p>L'apprentissage du code m'a beaucoup plu, mais mes connaissances se limitaient aux tâches que je devais effectuer. J'ai donc voulu élargir mes connaissances et avoir des bases pratiques, c'est donc pour cela que j'ai suivit la formation Développement WEB de la 3W Academy. Je suis actuellement en train d'apprendre React pour renforcer mon profil.</p>
\t\t\t</span>
        </div>
    </section>
    <h3 class=\"perso-title\">Mes compétences</h3>
    <section id=\"skills-section\">
        <div class=\"skills-div\">
            <ul class=\"skills-list\">
";
        // line 73
        echo "


            </ul>
        </div>
    </section>
    <h3 class=\"perso-title\">Mes travaux</h3>
    <section id=\"projects-section\">
";
        // line 97
        echo "    </section>
    <h3 class=\"perso-title\">Contactez-moi</h3>
    <section id=\"contact-section\">
\t\t<span class=\"linkedin\">
\t\t\t<a href=";
        // line 101
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/img/resume/CV_Pbrickley_111118.pdf"), "html", null, true);
        echo ">CV</a>
";
        // line 105
        echo "\t\t</span>
        <form class=\"contact-form\" action=\"form.php\" method=\"post\" >
            <fieldset>
                <input type=\"text\" name=\"namebox\" placeholder=\"Votre Nom\" class=\"input-name\">
                <input type=\"e-mail\" name=\"mailbox\" placeholder=\"Votre e-mail\"class=\"input-mail\">
                <textarea class=\"input-message\" name=\"message\"> Votre message</textarea>
                <button type=\"submit\" class=\"cta\">Envoyer</button>
            </fieldset>
        </form>
    </section>
</main>
<img src=\"";
        // line 116
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/img/resume/CV_Pbrickley_111118.pdf"), "html", null, true);
        echo "\">
<footer>
    <p>Pierre Brickley - 2018</p>
</footer>
</body>
";
        // line 123
        echo "<!--     <script src=\"js/classes/ColorPalette.class.js\"></script> -->
</html>s";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 11
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 12
        echo "        ";
        // line 13
        echo "        ";
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackLinkTags("app");
        echo "

        <!-- Renders a link tag (if your module requires any CSS)
             <link rel=\"stylesheet\" href=\"/build/app.css\"> -->
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
        return array (  169 => 13,  167 => 12,  160 => 11,  152 => 123,  144 => 116,  131 => 105,  127 => 101,  121 => 97,  111 => 73,  96 => 53,  70 => 30,  66 => 29,  60 => 25,  55 => 18,  53 => 11,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
<head>
    <title>Mon portfolio</title>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width\">
    <link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.4.1/css/all.css\" integrity=\"sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz\" crossorigin=\"anonymous\">
    <link href=\"https://fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500\" rel=\"stylesheet\">
    <link href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css\" rel=\"stylesheet\" integrity=\"sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN\" crossorigin=\"anonymous\">
    <link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.5.0/css/all.css\" integrity=\"sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU\" crossorigin=\"anonymous\">
    {% block stylesheets %}
        {# 'app' must match the first argument to addEntry() in webpack.config.js #}
        {{ encore_entry_link_tags('app') }}

        <!-- Renders a link tag (if your module requires any CSS)
             <link rel=\"stylesheet\" href=\"/build/app.css\"> -->
    {% endblock %}
    <link rel=\"icon\" type=\"image/png\" href=\"{{ asset(\"build/img/icons/feather.png\")}}\" />
{#    <script
            src=\"https://code.jquery.com/jquery-3.3.1.min.js\"
            integrity=\"sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=\"
            crossorigin=\"anonymous\"></script>
    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js\"></script>
    <script src=\"js/animations.js\"></script>#}

</head>
<body class=\"container\" data-spy=\"scroll\">
<header id=\"main-header\">
    <a href=\"index.html\"><img src={{ asset(\"build/img/icons/frenchflag.png\") }}  class=\"flag fr\"></a>
    <a href=\"indexEn.html\"><img src={{ asset(\"build/img/icons/enflag.png\") }} class=\"flag en\"></a>
    <nav class=\"main-nav\">
        <ul class=\"main-nav-list\">
            <li class=\"name\"><a href=\"#main-nav-list\">Pierre Brickley</a></li>
            <li class=\"landing\"><a href=\"#landing-section\">Accueil</a></li>
            <li class=\"about\"><a href=\"#about-section\">A propos</a></li>
            <li class=\"skills\"><a href=\"#skills-section\">Compétences</a></li>
            <li class=\"projects\"><a href=\"#projects-section\">Travaux</a></li>
            <li class=\"contact\"><a href=\"#contact-section\">Contact</a></li>
        </ul>
    </nav>
</header>
<main>
    <section id=\"landing-section\">
        <div class=\"section-flex\">
            <span class=\"fullname\">Pierre Brickley</span>
            <span class=\"portfolio-title\">Portfolio</span>
            <span class=\"occupation\">Intégrateur / Développeur WEB Junior</span>
        </div>
    </section>
    <h3 class=\"perso-title\">Personnel</h3>
    <section id=\"about-section\">
        <div class=\"about-div\">
            <img src=\"{{ asset(\"build/img/photos/photoidentite.JPG\") }}\" atl=\"bzzz\" class=\"profile-picture\">
            <span class=\"about-flex\">
\t\t\t\t<h2 class=\"about-title\">A propos</h2>
                    <p>Bonjour, je m'appelle Pierre Brickley, je suis intégrateur et développeur WEB Junior. J'ai découvert la programmation grâce à Visual Basic de Microsoft. En effet, j'étais contrôleur de gestion avant de m'intéresser au Web, et certaines tâches rébarbatives m'ont amené à m'interesser au code en autodidacte.</p>
\t\t\t\t<p>L'apprentissage du code m'a beaucoup plu, mais mes connaissances se limitaient aux tâches que je devais effectuer. J'ai donc voulu élargir mes connaissances et avoir des bases pratiques, c'est donc pour cela que j'ai suivit la formation Développement WEB de la 3W Academy. Je suis actuellement en train d'apprendre React pour renforcer mon profil.</p>
\t\t\t</span>
        </div>
    </section>
    <h3 class=\"perso-title\">Mes compétences</h3>
    <section id=\"skills-section\">
        <div class=\"skills-div\">
            <ul class=\"skills-list\">
{#                <li><img src=\"img/icons/html5.png\" class=\"skills-logo html\"><canvas id=\"draw\" height=\"200\" width=\"200\"></canvas></li>
                <li><img src=\"img/icons/css3.png\" class=\"skills-logo css\"><canvas id=\"draw2\" height=\"200\" width=\"200\"></canvas></li>
                <li><img src=\"img/icons/JS.png\" class=\"skills-logo js\"><canvas id=\"draw3\" height=\"200\" width=\"200\"></canvas></li>
                <li><img src=\"img/icons/PHP-logo.svg.png\" class=\"skills-logo php\"><canvas id=\"draw4\" height=\"200\" width=\"200\"></canvas></li>
                <li><img src=\"img/icons/MySQL.svg.png\" class=\"skills-logo mysql\"><canvas id=\"draw5\" height=\"200\" width=\"200\"></canvas></li>
                <li><img src=\"img/icons/jquery.png\" class=\"skills-logo jquery\"><canvas id=\"draw6\" height=\"200\" width=\"200\"></canvas></li>
                <li><img src=\"img/icons/bootstrap.png\" class=\"skills-logo bootstrap\"><canvas id=\"draw7\" height=\"200\" width=\"200\"></canvas></li>
                <li><img src=\"img/icons/logo-symfony.png\" class=\"skills-logo symfony\"><canvas id=\"draw8\" height=\"200\" width=\"200\"></canvas></li>#}



            </ul>
        </div>
    </section>
    <h3 class=\"perso-title\">Mes travaux</h3>
    <section id=\"projects-section\">
{#        <div class=\"projects-item1\">
            <img src=\"img/projets/restaurant1.PNG\" class=\"project-image projectimage1\">
            <h4><i class=\"fas fa-arrow-circle-left\" id=\"previmg1\"></i>Restaurant<i class=\"fas fa-arrow-circle-right\" id=\"nextimg1\"></i></h4>
        </div>
        <div class=\"projects-item1\">
            <a href=\"http://www.pedromachuca.me\"><img src=\"img/projets/API_Film1.PNG\" class=\"project-image projectimage2\"></a>
            <h4><i class=\"fas fa-arrow-circle-left previmg2\"></i>API films<i class=\"fas fa-arrow-circle-right nextimg2\"></i></h4>
        </div>
        <div class=\"projects-item2\">
            <img src=\"img/projets/MindGeek1.PNG\" class=\"project-image projectimage3\">
            <h4><i class=\"fas fa-arrow-circle-left previmg3\"></i>MindGeek<i class=\"fas fa-arrow-circle-right nextimg3\"></i></h4>
        </div>
        <div class=\"projects-item2\">
            <img src=\"img/projets/Cupoftea1.PNG\" class=\"project-image projectimage4\">
            <h4><i class=\"fas fa-arrow-circle-left previmg4\"></i>Cup of tea<i class=\"fas fa-arrow-circle-right nextimg4\"></i></h4>
        </div>#}
    </section>
    <h3 class=\"perso-title\">Contactez-moi</h3>
    <section id=\"contact-section\">
\t\t<span class=\"linkedin\">
\t\t\t<a href={{ asset(\"build/img/resume/CV_Pbrickley_111118.pdf\") }}>CV</a>
{#
            {{ path(\"assets/img/resume/CV_Pbrickley_111118.pdf\"), relative = false) }}
#}
\t\t</span>
        <form class=\"contact-form\" action=\"form.php\" method=\"post\" >
            <fieldset>
                <input type=\"text\" name=\"namebox\" placeholder=\"Votre Nom\" class=\"input-name\">
                <input type=\"e-mail\" name=\"mailbox\" placeholder=\"Votre e-mail\"class=\"input-mail\">
                <textarea class=\"input-message\" name=\"message\"> Votre message</textarea>
                <button type=\"submit\" class=\"cta\">Envoyer</button>
            </fieldset>
        </form>
    </section>
</main>
<img src=\"{{ asset(\"build/img/resume/CV_Pbrickley_111118.pdf\") }}\">
<footer>
    <p>Pierre Brickley - 2018</p>
</footer>
</body>
{#<script src=\"js/slider.js\"></script>
<script type=\"text/javascript\" src=\"js/main.js\"></script>#}
<!--     <script src=\"js/classes/ColorPalette.class.js\"></script> -->
</html>s", "index.html.twig", "C:\\wamp64\\www\\sites\\portfolio_symfony4\\templates\\index.html.twig");
    }
}
