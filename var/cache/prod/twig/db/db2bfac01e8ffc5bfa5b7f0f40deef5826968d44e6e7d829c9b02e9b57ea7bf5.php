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

/* signup.html.twig */
class __TwigTemplate_a8bbd74597e4f77fd14583f3ccd929e5204366891b856cc0bfc03991a60629de extends Template
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

        <section class=\"signInForm\">
            ";
        // line 19
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["userForm"] ?? null), 'form_start');
        echo "
            ";
        // line 20
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["userForm"] ?? null), "firstName", [], "any", false, false, false, 20), 'row', ["attr" => ["class" => "signInFormInput"]]);
        echo "
            ";
        // line 21
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["userForm"] ?? null), "familyName", [], "any", false, false, false, 21), 'row', ["attr" => ["class" => "signInFormInput"]]);
        echo "
            ";
        // line 22
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["userForm"] ?? null), "emailAddress", [], "any", false, false, false, 22), 'row', ["attr" => ["class" => "signInFormInput"]]);
        echo "
            ";
        // line 23
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["userForm"] ?? null), "birthDate", [], "any", false, false, false, 23), 'row', ["attr" => ["class" => "signInFormInput"]]);
        echo "
            ";
        // line 24
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["userForm"] ?? null), "sex", [], "any", false, false, false, 24), 'row', ["attr" => ["class" => "signInFormInput"]]);
        echo "
            ";
        // line 25
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["userForm"] ?? null), 'form_end');
        echo "
        </section>
    </main>
    <footer>

    </footer>
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "signup.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 25,  77 => 24,  73 => 23,  69 => 22,  65 => 21,  61 => 20,  57 => 19,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "signup.html.twig", "C:\\Users\\Boulanger\\dev\\cultureClub\\templates\\signup.html.twig");
    }
}
