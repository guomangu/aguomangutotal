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

/* security/login.html.twig */
class __TwigTemplate_0c3757ff26f18fcd79e08f77c9676994 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

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

        yield "Connexion";
        
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
                Connexion
            </h1>

            ";
        // line 13
        if ((($tmp = (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 13, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 14
            yield "                <div class=\"mb-4 text-sm text-red-700 bg-red-100 border border-red-200 rounded px-3 py-2\">
                    ";
            // line 15
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 15, $this->source); })()), "messageKey", [], "any", false, false, false, 15), CoreExtension::getAttribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 15, $this->source); })()), "messageData", [], "any", false, false, false, 15), "security"), "html", null, true);
            yield "
                </div>
            ";
        }
        // line 18
        yield "
            ";
        // line 19
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 19, $this->source); })()), "user", [], "any", false, false, false, 19)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 20
            yield "                <div class=\"mb-4 text-sm text-gray-700\">
                    Connecté en tant que <span class=\"font-semibold\">";
            // line 21
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 21, $this->source); })()), "user", [], "any", false, false, false, 21), "displayName", [], "any", false, false, false, 21), "html", null, true);
            yield "</span>.
                    <a href=\"";
            // line 22
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            yield "\" class=\"text-blue-600 hover:underline\">
                        Se déconnecter
                    </a>
                </div>
            ";
        }
        // line 27
        yield "
            <form method=\"post\" class=\"space-y-4\">
                <div>
                    <label for=\"inputEmail\" class=\"block text-sm font-medium text-gray-700 mb-1\">
                        Email
                    </label>
                    <input
                        type=\"email\"
                        value=\"";
        // line 35
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new RuntimeError('Variable "last_username" does not exist.', 35, $this->source); })()), "html", null, true);
        yield "\"
                        name=\"email\"
                        id=\"inputEmail\"
                        class=\"w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500\"
                        autocomplete=\"email\"
                        required
                        autofocus
                    >
                </div>

                <div>
                    <label for=\"inputPassword\" class=\"block text-sm font-medium text-gray-700 mb-1\">
                        Mot de passe
                    </label>
                    <input
                        type=\"password\"
                        name=\"password\"
                        id=\"inputPassword\"
                        class=\"w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500\"
                        autocomplete=\"current-password\"
                        required
                    >
                </div>

                <input type=\"hidden\" name=\"_csrf_token\" data-controller=\"csrf-protection\" value=\"";
        // line 59
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        yield "\">

                <button
                    class=\"w-full mt-2 px-4 py-2 bg-blue-600 text-white font-semibold rounded-md hover:bg-blue-700\"
                    type=\"submit\"
                >
                    Se connecter
                </button>
            </form>

            <p class=\"mt-4 text-center text-sm text-gray-600\">
                Pas encore de compte ?
                <a href=\"";
        // line 71
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
        yield "\" class=\"text-blue-600 hover:underline\">
                    Créer un compte
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
        return "security/login.html.twig";
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
        return array (  177 => 71,  162 => 59,  135 => 35,  125 => 27,  117 => 22,  113 => 21,  110 => 20,  108 => 19,  105 => 18,  99 => 15,  96 => 14,  94 => 13,  85 => 6,  75 => 5,  58 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Connexion{% endblock %}

{% block body %}

    <div class=\"min-h-[70vh] flex items-center justify-center\">
        <div class=\"w-full max-w-md bg-white rounded-lg shadow-lg p-8\">
            <h1 class=\"text-2xl font-bold text-gray-800 mb-6 text-center\">
                Connexion
            </h1>

            {% if error %}
                <div class=\"mb-4 text-sm text-red-700 bg-red-100 border border-red-200 rounded px-3 py-2\">
                    {{ error.messageKey|trans(error.messageData, 'security') }}
                </div>
            {% endif %}

            {% if app.user %}
                <div class=\"mb-4 text-sm text-gray-700\">
                    Connecté en tant que <span class=\"font-semibold\">{{ app.user.displayName }}</span>.
                    <a href=\"{{ path('app_logout') }}\" class=\"text-blue-600 hover:underline\">
                        Se déconnecter
                    </a>
                </div>
            {% endif %}

            <form method=\"post\" class=\"space-y-4\">
                <div>
                    <label for=\"inputEmail\" class=\"block text-sm font-medium text-gray-700 mb-1\">
                        Email
                    </label>
                    <input
                        type=\"email\"
                        value=\"{{ last_username }}\"
                        name=\"email\"
                        id=\"inputEmail\"
                        class=\"w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500\"
                        autocomplete=\"email\"
                        required
                        autofocus
                    >
                </div>

                <div>
                    <label for=\"inputPassword\" class=\"block text-sm font-medium text-gray-700 mb-1\">
                        Mot de passe
                    </label>
                    <input
                        type=\"password\"
                        name=\"password\"
                        id=\"inputPassword\"
                        class=\"w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500\"
                        autocomplete=\"current-password\"
                        required
                    >
                </div>

                <input type=\"hidden\" name=\"_csrf_token\" data-controller=\"csrf-protection\" value=\"{{ csrf_token('authenticate') }}\">

                <button
                    class=\"w-full mt-2 px-4 py-2 bg-blue-600 text-white font-semibold rounded-md hover:bg-blue-700\"
                    type=\"submit\"
                >
                    Se connecter
                </button>
            </form>

            <p class=\"mt-4 text-center text-sm text-gray-600\">
                Pas encore de compte ?
                <a href=\"{{ path('app_register') }}\" class=\"text-blue-600 hover:underline\">
                    Créer un compte
                </a>
            </p>
        </div>
    </div>

{% endblock %}
", "security/login.html.twig", "/home/guillaume/Bureau/atest/aguomangu2/app/templates/security/login.html.twig");
    }
}
