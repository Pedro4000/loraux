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
class __TwigTemplate_f19c5d26432ebfbe9f65ec943c60183abbf7714e95716b11f48169b82092f06b extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "index.html.twig"));

        // line 1
        echo "<!doctype html>
<html lang=\"fr\">
<head>
    <meta charset=\"utf-8\">
    <title>Landing Club Culture</title>
    <script src=\"script.js\"></script>
</head>
<body>
    <header>

    </header>
    <main>
        <section>
            <h2>Culture Club</h2>
            <p>Culture club vous permet d'échanger du contenu cuturel avec des centaines de curieux</p>
        </section>
            
        <section>

        </section>
    </main>
    <footer>

    </footer>
</body>
</html>";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "index.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!doctype html>
<html lang=\"fr\">
<head>
    <meta charset=\"utf-8\">
    <title>Landing Club Culture</title>
    <script src=\"script.js\"></script>
</head>
<body>
    <header>

    </header>
    <main>
        <section>
            <h2>Culture Club</h2>
            <p>Culture club vous permet d'échanger du contenu cuturel avec des centaines de curieux</p>
        </section>
            
        <section>

        </section>
    </main>
    <footer>

    </footer>
</body>
</html>", "index.html.twig", "C:\\wamp64\\www\\sites\\portfolio_symfony4\\templates\\index.html.twig");
    }
}
