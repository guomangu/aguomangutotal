<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* registration/register.html.twig */
class __TwigTemplate_437ff747a04ed7ff4aa656115a5fef34 extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/register.html.twig"));

        $this->parent = $this->load("base.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Créer un compte";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        yield "
    <div class=\"min-h-[70vh] flex items-center justify-center\">
        <div class=\"w-full max-w-md bg-white rounded-lg shadow-lg p-8\">
            <h1 class=\"text-2xl font-bold text-gray-800 mb-6 text-center\">
                Créer un compte
            </h1>

            ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 13, $this->source); })()), "flashes", ["verify_email_error"], "method", false, false, false, 13));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_error"]) {
            // line 14
            yield "                <div class=\"mb-4 text-sm text-red-700 bg-red-100 border border-red-200 rounded px-3 py-2\">
                    ";
            // line 15
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["flash_error"], "html", null, true);
            yield "
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['flash_error'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        yield "
            ";
        // line 19
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 19, $this->source); })()), 'form_start', ["attr" => ["class" => "space-y-4"]]);
        yield "
                ";
        // line 20
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 20, $this->source); })()), "email", [], "any", false, false, false, 20), 'row', ["label" => "Email"]);
        // line 22
        yield "
                ";
        // line 23
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 23, $this->source); })()), "plainPassword", [], "any", false, false, false, 23), 'row', ["label" => "Mot de passe"]);
        // line 25
        yield "
                ";
        // line 26
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 26, $this->source); })()), "agreeTerms", [], "any", false, false, false, 26), 'row', ["label" => "J’accepte les conditions d’utilisation"]);
        // line 28
        yield "

                <button
                    type=\"submit\"
                    class=\"w-full mt-2 px-4 py-2 bg-blue-600 text-white font-semibold rounded-md hover:bg-blue-700\"
                >
                    Créer mon compte
                </button>
            ";
        // line 36
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 36, $this->source); })()), 'form_end');
        yield "

            <p class=\"mt-4 text-center text-sm text-gray-600\">
                Déjà inscrit ?
                <a href=\"";
        // line 40
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        yield "\" class=\"text-blue-600 hover:underline\">
                    Se connecter
                </a>
            </p>
        </div>
    </div>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "registration/register.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  146 => 40,  139 => 36,  129 => 28,  127 => 26,  124 => 25,  122 => 23,  119 => 22,  117 => 20,  113 => 19,  110 => 18,  101 => 15,  98 => 14,  94 => 13,  85 => 6,  75 => 5,  58 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Créer un compte{% endblock %}

{% block body %}

    <div class=\"min-h-[70vh] flex items-center justify-center\">
        <div class=\"w-full max-w-md bg-white rounded-lg shadow-lg p-8\">
            <h1 class=\"text-2xl font-bold text-gray-800 mb-6 text-center\">
                Créer un compte
            </h1>

            {% for flash_error in app.flashes('verify_email_error') %}
                <div class=\"mb-4 text-sm text-red-700 bg-red-100 border border-red-200 rounded px-3 py-2\">
                    {{ flash_error }}
                </div>
            {% endfor %}

            {{ form_start(registrationForm, {'attr': {'class': 'space-y-4'}}) }}
                {{ form_row(registrationForm.email, {
                    label: 'Email'
                }) }}
                {{ form_row(registrationForm.plainPassword, {
                    label: 'Mot de passe'
                }) }}
                {{ form_row(registrationForm.agreeTerms, {
                    label: 'J’accepte les conditions d’utilisation'
                }) }}

                <button
                    type=\"submit\"
                    class=\"w-full mt-2 px-4 py-2 bg-blue-600 text-white font-semibold rounded-md hover:bg-blue-700\"
                >
                    Créer mon compte
                </button>
            {{ form_end(registrationForm) }}

            <p class=\"mt-4 text-center text-sm text-gray-600\">
                Déjà inscrit ?
                <a href=\"{{ path('app_login') }}\" class=\"text-blue-600 hover:underline\">
                    Se connecter
                </a>
            </p>
        </div>
    </div>

{% endblock %}
", "registration/register.html.twig", "/home/guillaume/Bureau/aguomangu/app/templates/registration/register.html.twig");
    }
}
