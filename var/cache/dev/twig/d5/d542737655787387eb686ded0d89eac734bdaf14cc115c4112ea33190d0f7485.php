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
class __TwigTemplate_8ee951afa1e48b7028cab8015e8f36fe57f39665cbb9e22727f4b0fa6fe823f7 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "signup.html.twig"));

        $this->parent = $this->loadTemplate("layout.html.twig", "signup.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_page_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_content"));

        // line 3
        echo "    <main>
        <section class=\"signInPage\">
            <section class=\"signInSection\">
                <section>
                    <h2>Culture Club</h2>
                    <p>Culture club vous permet d'échanger du contenu cuturel avec des centaines de curieux</p>
                    <p>Nous avons besoin de quelques renseignements pour créer votre profil</p>
                </section>

                <section class=\"signInFormSection\">
                    ";
        // line 13
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["userForm"]) || array_key_exists("userForm", $context) ? $context["userForm"] : (function () { throw new RuntimeError('Variable "userForm" does not exist.', 13, $this->source); })()), 'form_start', ["attr" => ["class" => "signInForm"]]);
        echo "
                    ";
        // line 14
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["userForm"]) || array_key_exists("userForm", $context) ? $context["userForm"] : (function () { throw new RuntimeError('Variable "userForm" does not exist.', 14, $this->source); })()), "firstName", [], "any", false, false, false, 14), 'row', ["attr" => ["class" => "signInFormInput"]]);
        // line 16
        echo "
                    ";
        // line 17
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["userForm"]) || array_key_exists("userForm", $context) ? $context["userForm"] : (function () { throw new RuntimeError('Variable "userForm" does not exist.', 17, $this->source); })()), "familyName", [], "any", false, false, false, 17), 'row', ["attr" => ["class" => "signInFormInput"]]);
        echo "
                    ";
        // line 18
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["userForm"]) || array_key_exists("userForm", $context) ? $context["userForm"] : (function () { throw new RuntimeError('Variable "userForm" does not exist.', 18, $this->source); })()), "emailAddress", [], "any", false, false, false, 18), 'row', ["attr" => ["class" => "signInFormInput", "data-container" => "body", "data-toggle" => "popover", "data-placement" => "top", "data-content" => "Vivamus sagittis lacus vel augue laoreet rutrum faucibus."]]);
        // line 24
        echo "
                    <div>
                        <input type=\"text\" id=\"mail_confirm\"  placeholder=\"Confirmez votre adresse mail\" class=\"confirm_mail\">
                    </div>
                    ";
        // line 28
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["userForm"]) || array_key_exists("userForm", $context) ? $context["userForm"] : (function () { throw new RuntimeError('Variable "userForm" does not exist.', 28, $this->source); })()), "password", [], "any", false, false, false, 28), 'row');
        echo "
                    ";
        // line 29
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["userForm"]) || array_key_exists("userForm", $context) ? $context["userForm"] : (function () { throw new RuntimeError('Variable "userForm" does not exist.', 29, $this->source); })()), "birthDate", [], "any", false, false, false, 29), 'row', ["attr" => ["class" => "signInFormInput"]]);
        echo "
                    ";
        // line 30
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["userForm"]) || array_key_exists("userForm", $context) ? $context["userForm"] : (function () { throw new RuntimeError('Variable "userForm" does not exist.', 30, $this->source); })()), "sex", [], "any", false, false, false, 30), 'row', ["attr" => ["class" => "signInFormInput"]]);
        echo "
                    ";
        // line 31
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["userForm"]) || array_key_exists("userForm", $context) ? $context["userForm"] : (function () { throw new RuntimeError('Variable "userForm" does not exist.', 31, $this->source); })()), "save", [], "any", false, false, false, 31), 'row', ["attr" => ["class" => "btn btn-light"]]);
        echo "
                    ";
        // line 32
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["userForm"]) || array_key_exists("userForm", $context) ? $context["userForm"] : (function () { throw new RuntimeError('Variable "userForm" does not exist.', 32, $this->source); })()), 'form_end');
        echo "
                </section>
            </section>
        </section>
    </main>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

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
        return array (  108 => 32,  104 => 31,  100 => 30,  96 => 29,  92 => 28,  86 => 24,  84 => 18,  80 => 17,  77 => 16,  75 => 14,  71 => 13,  59 => 3,  52 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'layout.html.twig' %}
{% block page_content %}
    <main>
        <section class=\"signInPage\">
            <section class=\"signInSection\">
                <section>
                    <h2>Culture Club</h2>
                    <p>Culture club vous permet d'échanger du contenu cuturel avec des centaines de curieux</p>
                    <p>Nous avons besoin de quelques renseignements pour créer votre profil</p>
                </section>

                <section class=\"signInFormSection\">
                    {{ form_start(userForm, { 'attr' : { 'class':'signInForm'}}) }}
                    {{ form_row(userForm.firstName, { 'attr' : {
                        'class':'signInFormInput'
                    }} ) }}
                    {{ form_row(userForm.familyName, { 'attr' : { 'class':'signInFormInput' }} ) }}
                    {{ form_row(userForm.emailAddress, { 'attr' : {
                        'class':'signInFormInput',
                        'data-container' : 'body',
                        'data-toggle': 'popover',
                        'data-placement' : 'top',
                        'data-content' : 'Vivamus sagittis lacus vel augue laoreet rutrum faucibus.'
                    }} ) }}
                    <div>
                        <input type=\"text\" id=\"mail_confirm\"  placeholder=\"Confirmez votre adresse mail\" class=\"confirm_mail\">
                    </div>
                    {{ form_row(userForm.password) }}
                    {{ form_row(userForm.birthDate, { 'attr' : { 'class':'signInFormInput' }} ) }}
                    {{ form_row(userForm.sex, { 'attr' : { 'class':'signInFormInput' }} ) }}
                    {{ form_row(userForm.save, { 'attr' : { 'class':'btn btn-light' }} ) }}
                    {{ form_end(userForm) }}
                </section>
            </section>
        </section>
    </main>
{% endblock %}
", "signup.html.twig", "C:\\Users\\Boulanger\\dev\\cultureClub\\templates\\signup.html.twig");
    }
}
