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
class __TwigTemplate_d02958102ccea58538b17e04e34be620f4c2e2999b4aafd9384ad39b122fc69f extends Template
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

        <section class=\"signInForm\">
            ";
        // line 19
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["userForm"]) || array_key_exists("userForm", $context) ? $context["userForm"] : (function () { throw new RuntimeError('Variable "userForm" does not exist.', 19, $this->source); })()), 'form_start');
        echo "
            ";
        // line 20
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["userForm"]) || array_key_exists("userForm", $context) ? $context["userForm"] : (function () { throw new RuntimeError('Variable "userForm" does not exist.', 20, $this->source); })()), "firstName", [], "any", false, false, false, 20), 'row', ["attr" => ["class" => "signInFormInput"]]);
        echo "
            ";
        // line 21
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["userForm"]) || array_key_exists("userForm", $context) ? $context["userForm"] : (function () { throw new RuntimeError('Variable "userForm" does not exist.', 21, $this->source); })()), "familyName", [], "any", false, false, false, 21), 'row', ["attr" => ["class" => "signInFormInput"]]);
        echo "
            ";
        // line 22
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["userForm"]) || array_key_exists("userForm", $context) ? $context["userForm"] : (function () { throw new RuntimeError('Variable "userForm" does not exist.', 22, $this->source); })()), "emailAddress", [], "any", false, false, false, 22), 'row', ["attr" => ["class" => "signInFormInput"]]);
        echo "
            ";
        // line 23
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["userForm"]) || array_key_exists("userForm", $context) ? $context["userForm"] : (function () { throw new RuntimeError('Variable "userForm" does not exist.', 23, $this->source); })()), "birthDate", [], "any", false, false, false, 23), 'row', ["attr" => ["class" => "signInFormInput"]]);
        echo "
            ";
        // line 24
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["userForm"]) || array_key_exists("userForm", $context) ? $context["userForm"] : (function () { throw new RuntimeError('Variable "userForm" does not exist.', 24, $this->source); })()), "sex", [], "any", false, false, false, 24), 'row', ["attr" => ["class" => "signInFormInput"]]);
        echo "
            ";
        // line 25
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["userForm"]) || array_key_exists("userForm", $context) ? $context["userForm"] : (function () { throw new RuntimeError('Variable "userForm" does not exist.', 25, $this->source); })()), 'form_end');
        echo "
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

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 25,  80 => 24,  76 => 23,  72 => 22,  68 => 21,  64 => 20,  60 => 19,  40 => 1,);
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

        <section class=\"signInForm\">
            {{ form_start(userForm) }}
            {{ form_row(userForm.firstName, { 'attr' : { 'class':'signInFormInput' }} ) }}
            {{ form_row(userForm.familyName, { 'attr' : { 'class':'signInFormInput' }} ) }}
            {{ form_row(userForm.emailAddress, { 'attr' : { 'class':'signInFormInput' }} ) }}
            {{ form_row(userForm.birthDate, { 'attr' : { 'class':'signInFormInput' }} ) }}
            {{ form_row(userForm.sex, { 'attr' : { 'class':'signInFormInput' }} ) }}
            {{ form_end(userForm) }}
        </section>
    </main>
    <footer>

    </footer>
</body>
</html>", "index.html.twig", "C:\\wamp64\\www\\sites\\portfolio_symfony4\\templates\\index.html.twig");
    }
}
