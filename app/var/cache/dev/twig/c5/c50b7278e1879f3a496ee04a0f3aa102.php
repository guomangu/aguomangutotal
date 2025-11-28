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

/* base.html.twig */
class __TwigTemplate_1bf480c83e446fc8259a956d25ac4e3f extends Template
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

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
            'importmap' => [$this, 'block_importmap'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <title>";
        // line 6
        yield from $this->unwrap()->yieldBlock('title', $context, $blocks);
        yield "</title>
        <link rel=\"icon\" href=\"data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 128 128%22><text y=%221.2em%22 font-size=%2296%22>⚫️</text><text y=%221.3em%22 x=%220.2em%22 font-size=%2276%22 fill=%22%23fff%22>sf</text></svg>\">
        ";
        // line 8
        yield from $this->unwrap()->yieldBlock('stylesheets', $context, $blocks);
        // line 10
        yield "
        ";
        // line 11
        yield from $this->unwrap()->yieldBlock('javascripts', $context, $blocks);
        // line 14
        yield "    </head>
    <body class=\"bg-gray-100 min-h-screen\">
        <header class=\"bg-white shadow mb-6\">
            <div class=\"max-w-6xl mx-auto px-3 sm:px-4 py-3 flex flex-col sm:flex-row gap-3 sm:gap-0 sm:items-center sm:justify-between\">

                
                <a href=\"";
        // line 20
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\">
                    <div class=\"text-lg font-bold text-gray-800\">
                        Mon Wiki
                    </div>
                </a>

                <nav class=\"space-x-2 sm:space-x-3 flex flex-wrap items-center justify-start sm:justify-end gap-2\">
                    <a href=\"";
        // line 27
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_wiki_index");
        yield "\" class=\"text-sm font-medium text-gray-700 hover:text-blue-600\">
                        <button class=\"bg-gray-600 text-white px-4 py-2 rounded-md hover:bg-gray-700\">
                            Wiki public
                        </button>
                    </a>
                    <a href=\"";
        // line 32
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin");
        yield "\" class=\"text-sm font-medium text-gray-700 hover:text-blue-600\">
                        <button class=\"bg-gray-600 text-white px-4 py-2 rounded-md hover:bg-blue-700\">
                            Admin
                        </button>
                    </a>

                    <span class=\"h-6 w-px bg-gray-300 mx-1\"></span>

                    ";
        // line 40
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 40, $this->source); })()), "user", [], "any", false, false, false, 40)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 41
            yield "                        <span class=\"text-xs text-gray-500\">
                            Connecté : ";
            // line 42
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 42, $this->source); })()), "user", [], "any", false, false, false, 42), "displayName", [], "any", false, false, false, 42), "html", null, true);
            yield "
                        </span>
                        <a href=\"";
            // line 44
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_profile");
            yield "\" class=\"text-sm font-medium text-gray-700 hover:text-blue-600\">
                            <button class=\"bg-blue-600 text-white px-4 py-2 rounded-md hover:bg-blue-700\">
                                Mon profil
                            </button>
                        </a>
                        <a href=\"";
            // line 49
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_public", ["identifier" => ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 49, $this->source); })()), "user", [], "any", false, false, false, 49), "pseudo", [], "any", false, false, false, 49)) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 49, $this->source); })()), "user", [], "any", false, false, false, 49), "pseudo", [], "any", false, false, false, 49)) : (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 49, $this->source); })()), "user", [], "any", false, false, false, 49), "email", [], "any", false, false, false, 49)))]), "html", null, true);
            yield "\" class=\"text-sm font-medium text-gray-700 hover:text-blue-600\">
                            <button class=\"bg-green-600 text-white px-4 py-2 rounded-md hover:bg-green-700\">
                                Profil public
                            </button>
                        </a>
                        <a href=\"";
            // line 54
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            yield "\" class=\"text-sm font-medium text-gray-700 hover:text-red-600\">
                            <button class=\"bg-red-500 text-white px-3 py-2 rounded-md hover:bg-red-600\">
                                Déconnexion
                            </button>
                        </a>
                    ";
        } else {
            // line 60
            yield "                        <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            yield "\" class=\"text-sm font-medium text-gray-700 hover:text-blue-600\">
                            <button class=\"bg-blue-600 text-white px-4 py-2 rounded-md hover:bg-blue-700\">
                                Connexion
                            </button>
                        </a>
                        <a href=\"";
            // line 65
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
            yield "\" class=\"text-sm font-medium text-gray-700 hover:text-green-600\">
                            <button class=\"bg-green-600 text-white px-4 py-2 rounded-md hover:bg-green-700\">
                                Créer un compte
                            </button>
                        </a>
                    ";
        }
        // line 71
        yield "                </nav>
            </div>
        </header>

        <main class=\"max-w-6xl mx-auto px-4\">
            ";
        // line 76
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        // line 77
        yield "        </main>
    </body>
</html>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 6
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Welcome!";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 8
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 9
        yield "        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 11
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 12
        yield "            ";
        yield from $this->unwrap()->yieldBlock('importmap', $context, $blocks);
        // line 13
        yield "        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 12
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_importmap(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "importmap"));

        yield $this->env->getRuntime('Symfony\Bridge\Twig\Extension\ImportMapRuntime')->importmap("app");
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 76
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "base.html.twig";
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
        return array (  252 => 76,  235 => 12,  227 => 13,  224 => 12,  214 => 11,  206 => 9,  196 => 8,  179 => 6,  168 => 77,  166 => 76,  159 => 71,  150 => 65,  141 => 60,  132 => 54,  124 => 49,  116 => 44,  111 => 42,  108 => 41,  106 => 40,  95 => 32,  87 => 27,  77 => 20,  69 => 14,  67 => 11,  64 => 10,  62 => 8,  57 => 6,  50 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <title>{% block title %}Welcome!{% endblock %}</title>
        <link rel=\"icon\" href=\"data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 128 128%22><text y=%221.2em%22 font-size=%2296%22>⚫️</text><text y=%221.3em%22 x=%220.2em%22 font-size=%2276%22 fill=%22%23fff%22>sf</text></svg>\">
        {% block stylesheets %}
        {% endblock %}

        {% block javascripts %}
            {% block importmap %}{{ importmap('app') }}{% endblock %}
        {% endblock %}
    </head>
    <body class=\"bg-gray-100 min-h-screen\">
        <header class=\"bg-white shadow mb-6\">
            <div class=\"max-w-6xl mx-auto px-3 sm:px-4 py-3 flex flex-col sm:flex-row gap-3 sm:gap-0 sm:items-center sm:justify-between\">

                
                <a href=\"{{ path('app_home') }}\">
                    <div class=\"text-lg font-bold text-gray-800\">
                        Mon Wiki
                    </div>
                </a>

                <nav class=\"space-x-2 sm:space-x-3 flex flex-wrap items-center justify-start sm:justify-end gap-2\">
                    <a href=\"{{ path('app_wiki_index') }}\" class=\"text-sm font-medium text-gray-700 hover:text-blue-600\">
                        <button class=\"bg-gray-600 text-white px-4 py-2 rounded-md hover:bg-gray-700\">
                            Wiki public
                        </button>
                    </a>
                    <a href=\"{{ path('admin') }}\" class=\"text-sm font-medium text-gray-700 hover:text-blue-600\">
                        <button class=\"bg-gray-600 text-white px-4 py-2 rounded-md hover:bg-blue-700\">
                            Admin
                        </button>
                    </a>

                    <span class=\"h-6 w-px bg-gray-300 mx-1\"></span>

                    {% if app.user %}
                        <span class=\"text-xs text-gray-500\">
                            Connecté : {{ app.user.displayName }}
                        </span>
                        <a href=\"{{ path('app_user_profile') }}\" class=\"text-sm font-medium text-gray-700 hover:text-blue-600\">
                            <button class=\"bg-blue-600 text-white px-4 py-2 rounded-md hover:bg-blue-700\">
                                Mon profil
                            </button>
                        </a>
                        <a href=\"{{ path('app_user_public', { identifier: app.user.pseudo ?: app.user.email }) }}\" class=\"text-sm font-medium text-gray-700 hover:text-blue-600\">
                            <button class=\"bg-green-600 text-white px-4 py-2 rounded-md hover:bg-green-700\">
                                Profil public
                            </button>
                        </a>
                        <a href=\"{{ path('app_logout') }}\" class=\"text-sm font-medium text-gray-700 hover:text-red-600\">
                            <button class=\"bg-red-500 text-white px-3 py-2 rounded-md hover:bg-red-600\">
                                Déconnexion
                            </button>
                        </a>
                    {% else %}
                        <a href=\"{{ path('app_login') }}\" class=\"text-sm font-medium text-gray-700 hover:text-blue-600\">
                            <button class=\"bg-blue-600 text-white px-4 py-2 rounded-md hover:bg-blue-700\">
                                Connexion
                            </button>
                        </a>
                        <a href=\"{{ path('app_register') }}\" class=\"text-sm font-medium text-gray-700 hover:text-green-600\">
                            <button class=\"bg-green-600 text-white px-4 py-2 rounded-md hover:bg-green-700\">
                                Créer un compte
                            </button>
                        </a>
                    {% endif %}
                </nav>
            </div>
        </header>

        <main class=\"max-w-6xl mx-auto px-4\">
            {% block body %}{% endblock %}
        </main>
    </body>
</html>
", "base.html.twig", "/home/guillaume/Bureau/atest/aguomangu2/app/templates/base.html.twig");
    }
}
