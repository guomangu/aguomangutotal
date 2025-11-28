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

/* user/public.html.twig */
class __TwigTemplate_c3cf588193e0a85f6e458bc213fb38a6 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/public.html.twig"));

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

        yield "Profil de ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 3, $this->source); })()), "displayName", [], "any", false, false, false, 3), "html", null, true);
        
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
    <div class=\"max-w-2xl mx-auto mt-10 bg-white rounded-lg shadow p-6\">
        <h1 class=\"text-2xl font-bold mb-4\">Profil public</h1>

        <p class=\"mt-2 text-gray-600\">
            <span class=\"font-semibold\">Pseudo :</span>
            ";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 12, $this->source); })()), "displayName", [], "any", false, false, false, 12), "html", null, true);
        yield "
        </p>

        <p class=\"mt-6 text-sm text-gray-500\">
            URL publique : <code>/u/";
        // line 16
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 16, $this->source); })()), "pseudo", [], "any", false, false, false, 16)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 16, $this->source); })()), "pseudo", [], "any", false, false, false, 16), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 16, $this->source); })()), "email", [], "any", false, false, false, 16), "html", null, true)));
        yield "</code>
        </p>

        <hr class=\"my-6\">

        ";
        // line 22
        yield "        <div class=\"mb-6 p-4 bg-gray-50 rounded-lg\">
            <h2 class=\"text-lg font-semibold mb-3\">Statistiques d'utilisation</h2>
            <div class=\"grid grid-cols-2 md:grid-cols-3 gap-4 text-sm\">
                <div class=\"flex flex-col\">
                    <span class=\"text-gray-500 text-xs\">Wikis créés</span>
                    <span class=\"text-xl font-bold text-blue-600\">";
        // line 27
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 27, $this->source); })()), "wikis_created", [], "any", false, false, false, 27), "html", null, true);
        yield "</span>
                </div>
                <div class=\"flex flex-col\">
                    <span class=\"text-gray-500 text-xs\">Wikis enfants</span>
                    <span class=\"text-xl font-bold text-blue-600\">";
        // line 31
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 31, $this->source); })()), "child_wikis_created", [], "any", false, false, false, 31), "html", null, true);
        yield "</span>
                </div>
                <div class=\"flex flex-col\">
                    <span class=\"text-gray-500 text-xs\">Articles créés</span>
                    <span class=\"text-xl font-bold text-green-600\">";
        // line 35
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 35, $this->source); })()), "articles_created", [], "any", false, false, false, 35), "html", null, true);
        yield "</span>
                </div>
                <div class=\"flex flex-col\">
                    <span class=\"text-gray-500 text-xs\">Messages postés</span>
                    <span class=\"text-xl font-bold text-purple-600\">";
        // line 39
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 39, $this->source); })()), "messages_count", [], "any", false, false, false, 39), "html", null, true);
        yield "</span>
                </div>
                <div class=\"flex flex-col\">
                    <span class=\"text-gray-500 text-xs\">Actions déclenchées</span>
                    <span class=\"text-xl font-bold text-orange-600\">";
        // line 43
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 43, $this->source); })()), "notifications_created", [], "any", false, false, false, 43), "html", null, true);
        yield "</span>
                </div>
                <div class=\"flex flex-col\">
                    <span class=\"text-gray-500 text-xs\">Réservations</span>
                    <span class=\"text-xl font-bold text-red-600\">";
        // line 47
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 47, $this->source); })()), "reservations_count", [], "any", false, false, false, 47), "html", null, true);
        yield "</span>
                </div>
            </div>
        </div>

        <hr class=\"my-6\">

        <h2 class=\"text-xl font-semibold mb-3\">Ses pages wiki</h2>

        ";
        // line 56
        if (Twig\Extension\CoreExtension::testEmpty((isset($context["wikis"]) || array_key_exists("wikis", $context) ? $context["wikis"] : (function () { throw new RuntimeError('Variable "wikis" does not exist.', 56, $this->source); })()))) {
            // line 57
            yield "            <p class=\"text-gray-500 mb-4\">Cet utilisateur n’a pas encore de pages wiki.</p>
        ";
        } else {
            // line 59
            yield "            <ul class=\"space-y-3 mb-6\">
                ";
            // line 60
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["wikis"]) || array_key_exists("wikis", $context) ? $context["wikis"] : (function () { throw new RuntimeError('Variable "wikis" does not exist.', 60, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 61
                yield "                    <li class=\"border rounded p-3 flex items-center justify-between\">
                        <div>
                            <a href=\"";
                // line 63
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_wiki_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["page"], "id", [], "any", false, false, false, 63)]), "html", null, true);
                yield "\" class=\"font-semibold text-blue-600 hover:underline\">
                                ";
                // line 64
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["page"], "title", [], "any", false, false, false, 64), "html", null, true);
                yield "
                            </a>
                        </div>
                    </li>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['page'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 69
            yield "            </ul>
        ";
        }
        // line 71
        yield "
        <div class=\"mt-6\">
            <h3 class=\"text-lg font-semibold mb-3\">Créer une nouvelle page wiki</h3>

            ";
        // line 75
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["wikiForm"]) || array_key_exists("wikiForm", $context) ? $context["wikiForm"] : (function () { throw new RuntimeError('Variable "wikiForm" does not exist.', 75, $this->source); })()), 'form_start');
        yield "
                <div class=\"space-y-4\">
                    ";
        // line 77
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["wikiForm"]) || array_key_exists("wikiForm", $context) ? $context["wikiForm"] : (function () { throw new RuntimeError('Variable "wikiForm" does not exist.', 77, $this->source); })()), "title", [], "any", false, false, false, 77), 'row');
        yield "
                    ";
        // line 78
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["wikiForm"]) || array_key_exists("wikiForm", $context) ? $context["wikiForm"] : (function () { throw new RuntimeError('Variable "wikiForm" does not exist.', 78, $this->source); })()), "imageFile", [], "any", false, false, false, 78), 'row');
        yield "
                </div>
                <button class=\"mt-4 px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700\">
                    Créer la page
                </button>
            ";
        // line 83
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["wikiForm"]) || array_key_exists("wikiForm", $context) ? $context["wikiForm"] : (function () { throw new RuntimeError('Variable "wikiForm" does not exist.', 83, $this->source); })()), 'form_end');
        yield "
        </div>

        <hr class=\"my-6\">

        <h2 class=\"text-xl font-semibold mb-3\">Ses réservations de créneaux</h2>

        ";
        // line 90
        if (Twig\Extension\CoreExtension::testEmpty((isset($context["reservations"]) || array_key_exists("reservations", $context) ? $context["reservations"] : (function () { throw new RuntimeError('Variable "reservations" does not exist.', 90, $this->source); })()))) {
            // line 91
            yield "            <p class=\"text-gray-500 mb-2 text-sm\">Aucune réservation de créneau pour l’instant.</p>
        ";
        } else {
            // line 93
            yield "            <ul class=\"space-y-2\">
                ";
            // line 94
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["reservations"]) || array_key_exists("reservations", $context) ? $context["reservations"] : (function () { throw new RuntimeError('Variable "reservations" does not exist.', 94, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["r"]) {
                // line 95
                yield "                    <li class=\"border rounded p-3 flex items-center justify-between text-sm\">
                        <div>
                            <div class=\"font-semibold\">
                                ";
                // line 98
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["r"], "title", [], "any", false, false, false, 98), "html", null, true);
                yield "
                                ";
                // line 99
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["r"], "wikiPage", [], "any", false, false, false, 99)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 100
                    yield "                                    <span class=\"text-gray-500\">sur</span>
                                    <a href=\"";
                    // line 101
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_wiki_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["r"], "wikiPage", [], "any", false, false, false, 101), "id", [], "any", false, false, false, 101)]), "html", null, true);
                    yield "\"
                                       class=\"text-blue-600 hover:underline\">
                                        ";
                    // line 103
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["r"], "wikiPage", [], "any", false, false, false, 103), "title", [], "any", false, false, false, 103), "html", null, true);
                    yield "
                                    </a>
                                ";
                }
                // line 106
                yield "                            </div>
                            <div class=\"text-gray-600\">
                                ";
                // line 108
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["r"], "start", [], "any", false, false, false, 108), "d/m/Y H:i"), "html", null, true);
                yield " → ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["r"], "end", [], "any", false, false, false, 108), "d/m/Y H:i"), "html", null, true);
                yield "
                            </div>
                        </div>
                    </li>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['r'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 113
            yield "            </ul>
        ";
        }
        // line 115
        yield "    </div>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "user/public.html.twig";
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
        return array (  291 => 115,  287 => 113,  274 => 108,  270 => 106,  264 => 103,  259 => 101,  256 => 100,  254 => 99,  250 => 98,  245 => 95,  241 => 94,  238 => 93,  234 => 91,  232 => 90,  222 => 83,  214 => 78,  210 => 77,  205 => 75,  199 => 71,  195 => 69,  184 => 64,  180 => 63,  176 => 61,  172 => 60,  169 => 59,  165 => 57,  163 => 56,  151 => 47,  144 => 43,  137 => 39,  130 => 35,  123 => 31,  116 => 27,  109 => 22,  101 => 16,  94 => 12,  86 => 6,  76 => 5,  58 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Profil de {{ user.displayName }}{% endblock %}

{% block body %}

    <div class=\"max-w-2xl mx-auto mt-10 bg-white rounded-lg shadow p-6\">
        <h1 class=\"text-2xl font-bold mb-4\">Profil public</h1>

        <p class=\"mt-2 text-gray-600\">
            <span class=\"font-semibold\">Pseudo :</span>
            {{ user.displayName }}
        </p>

        <p class=\"mt-6 text-sm text-gray-500\">
            URL publique : <code>/u/{{ user.pseudo ?: user.email }}</code>
        </p>

        <hr class=\"my-6\">

        {# Statistiques d'utilisation #}
        <div class=\"mb-6 p-4 bg-gray-50 rounded-lg\">
            <h2 class=\"text-lg font-semibold mb-3\">Statistiques d'utilisation</h2>
            <div class=\"grid grid-cols-2 md:grid-cols-3 gap-4 text-sm\">
                <div class=\"flex flex-col\">
                    <span class=\"text-gray-500 text-xs\">Wikis créés</span>
                    <span class=\"text-xl font-bold text-blue-600\">{{ stats.wikis_created }}</span>
                </div>
                <div class=\"flex flex-col\">
                    <span class=\"text-gray-500 text-xs\">Wikis enfants</span>
                    <span class=\"text-xl font-bold text-blue-600\">{{ stats.child_wikis_created }}</span>
                </div>
                <div class=\"flex flex-col\">
                    <span class=\"text-gray-500 text-xs\">Articles créés</span>
                    <span class=\"text-xl font-bold text-green-600\">{{ stats.articles_created }}</span>
                </div>
                <div class=\"flex flex-col\">
                    <span class=\"text-gray-500 text-xs\">Messages postés</span>
                    <span class=\"text-xl font-bold text-purple-600\">{{ stats.messages_count }}</span>
                </div>
                <div class=\"flex flex-col\">
                    <span class=\"text-gray-500 text-xs\">Actions déclenchées</span>
                    <span class=\"text-xl font-bold text-orange-600\">{{ stats.notifications_created }}</span>
                </div>
                <div class=\"flex flex-col\">
                    <span class=\"text-gray-500 text-xs\">Réservations</span>
                    <span class=\"text-xl font-bold text-red-600\">{{ stats.reservations_count }}</span>
                </div>
            </div>
        </div>

        <hr class=\"my-6\">

        <h2 class=\"text-xl font-semibold mb-3\">Ses pages wiki</h2>

        {% if wikis is empty %}
            <p class=\"text-gray-500 mb-4\">Cet utilisateur n’a pas encore de pages wiki.</p>
        {% else %}
            <ul class=\"space-y-3 mb-6\">
                {% for page in wikis %}
                    <li class=\"border rounded p-3 flex items-center justify-between\">
                        <div>
                            <a href=\"{{ path('app_wiki_show', {id: page.id}) }}\" class=\"font-semibold text-blue-600 hover:underline\">
                                {{ page.title }}
                            </a>
                        </div>
                    </li>
                {% endfor %}
            </ul>
        {% endif %}

        <div class=\"mt-6\">
            <h3 class=\"text-lg font-semibold mb-3\">Créer une nouvelle page wiki</h3>

            {{ form_start(wikiForm) }}
                <div class=\"space-y-4\">
                    {{ form_row(wikiForm.title) }}
                    {{ form_row(wikiForm.imageFile) }}
                </div>
                <button class=\"mt-4 px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700\">
                    Créer la page
                </button>
            {{ form_end(wikiForm) }}
        </div>

        <hr class=\"my-6\">

        <h2 class=\"text-xl font-semibold mb-3\">Ses réservations de créneaux</h2>

        {% if reservations is empty %}
            <p class=\"text-gray-500 mb-2 text-sm\">Aucune réservation de créneau pour l’instant.</p>
        {% else %}
            <ul class=\"space-y-2\">
                {% for r in reservations %}
                    <li class=\"border rounded p-3 flex items-center justify-between text-sm\">
                        <div>
                            <div class=\"font-semibold\">
                                {{ r.title }}
                                {% if r.wikiPage %}
                                    <span class=\"text-gray-500\">sur</span>
                                    <a href=\"{{ path('app_wiki_show', {id: r.wikiPage.id}) }}\"
                                       class=\"text-blue-600 hover:underline\">
                                        {{ r.wikiPage.title }}
                                    </a>
                                {% endif %}
                            </div>
                            <div class=\"text-gray-600\">
                                {{ r.start|date('d/m/Y H:i') }} → {{ r.end|date('d/m/Y H:i') }}
                            </div>
                        </div>
                    </li>
                {% endfor %}
            </ul>
        {% endif %}
    </div>

{% endblock %}


", "user/public.html.twig", "/home/guillaume/Bureau/aguomangu/app/templates/user/public.html.twig");
    }
}
