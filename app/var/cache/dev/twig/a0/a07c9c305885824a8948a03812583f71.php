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

/* home/index.html.twig */
class __TwigTemplate_30e6d2c6b058186a1cbf37cb0929f0c8 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

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

        yield "Rechercher un wiki";
        
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
    <div class=\"max-w-2xl mx-auto mt-10 bg-white rounded-lg shadow-lg p-6\">
        <h1 class=\"text-3xl font-bold text-gray-800 mb-6 text-center\">
            Trouver une page wiki
        </h1>

        <form method=\"get\" action=\"";
        // line 12
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\" class=\"flex gap-3 mb-8\">
            <input
                type=\"search\"
                name=\"q\"
                value=\"";
        // line 16
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["query"]) || array_key_exists("query", $context) ? $context["query"] : (function () { throw new RuntimeError('Variable "query" does not exist.', 16, $this->source); })()), "html", null, true);
        yield "\"
                class=\"flex-1 px-4 py-2 rounded-md border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500\"
                placeholder=\"Titre du wiki, mot-clé...\"
            >
            <button
                type=\"submit\"
                class=\"px-4 py-2 rounded-md bg-blue-600 text-white font-semibold hover:bg-blue-700\"
            >
                Rechercher
            </button>
        </form>

        ";
        // line 28
        if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty((isset($context["query"]) || array_key_exists("query", $context) ? $context["query"] : (function () { throw new RuntimeError('Variable "query" does not exist.', 28, $this->source); })()))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 29
            yield "            <p class=\"text-sm text-gray-500 mb-4\">
                Résultats pour « ";
            // line 30
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["query"]) || array_key_exists("query", $context) ? $context["query"] : (function () { throw new RuntimeError('Variable "query" does not exist.', 30, $this->source); })()), "html", null, true);
            yield " » :
            </p>

            <div class=\"space-y-6\">
                <div>
                    <h2 class=\"text-sm font-semibold text-gray-700 mb-2\">Pages wiki</h2>
                    ";
            // line 36
            if (Twig\Extension\CoreExtension::testEmpty((isset($context["results"]) || array_key_exists("results", $context) ? $context["results"] : (function () { throw new RuntimeError('Variable "results" does not exist.', 36, $this->source); })()))) {
                // line 37
                yield "                        <p class=\"text-gray-500 text-sm\">Aucun wiki trouvé.</p>
                    ";
            } else {
                // line 39
                yield "                        <ul class=\"space-y-3\">
                            ";
                // line 40
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable((isset($context["results"]) || array_key_exists("results", $context) ? $context["results"] : (function () { throw new RuntimeError('Variable "results" does not exist.', 40, $this->source); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                    // line 41
                    yield "                                <li class=\"border border-gray-200 rounded-md p-3 flex items-center justify-between bg-white shadow-sm\">
                                    <div>
                                        <a href=\"";
                    // line 43
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_wiki_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["page"], "id", [], "any", false, false, false, 43)]), "html", null, true);
                    yield "\"
                                           class=\"font-semibold text-blue-600 hover:underline\">
                                            ";
                    // line 45
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["page"], "title", [], "any", false, false, false, 45), "html", null, true);
                    yield "
                                        </a>
                                    </div>
                                </li>
                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['page'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 50
                yield "                        </ul>
                    ";
            }
            // line 52
            yield "                </div>

                <div>
                    <h2 class=\"text-sm font-semibold text-gray-700 mb-2\">Tags de localisation</h2>
                    ";
            // line 56
            if (Twig\Extension\CoreExtension::testEmpty((isset($context["tagResults"]) || array_key_exists("tagResults", $context) ? $context["tagResults"] : (function () { throw new RuntimeError('Variable "tagResults" does not exist.', 56, $this->source); })()))) {
                // line 57
                yield "                        <p class=\"text-gray-500 text-sm\">Aucun tag trouvé.</p>
                    ";
            } else {
                // line 59
                yield "                        <ul class=\"space-y-2 text-sm\">
                            ";
                // line 60
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable((isset($context["tagResults"]) || array_key_exists("tagResults", $context) ? $context["tagResults"] : (function () { throw new RuntimeError('Variable "tagResults" does not exist.', 60, $this->source); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
                    // line 61
                    yield "                                <li class=\"border border-gray-200 rounded-md px-3 py-2 bg-white shadow-sm\">
                                    <div class=\"flex flex-col gap-1\">
                                        <div>
                                            <a href=\"";
                    // line 64
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_tag_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["tag"], "id", [], "any", false, false, false, 64)]), "html", null, true);
                    yield "\"
                                               class=\"font-semibold text-blue-600 hover:underline\">
                                                ";
                    // line 66
                    yield ((CoreExtension::getAttribute($this->env, $this->source, $context["tag"], "description", [], "any", false, false, false, 66)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["tag"], "description", [], "any", false, false, false, 66), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["tag"], "name", [], "any", false, false, false, 66), "html", null, true)));
                    yield "
                                            </a>
                                            ";
                    // line 68
                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["tag"], "type", [], "any", false, false, false, 68)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 69
                        yield "                                                <span class=\"ml-2 text-[10px] uppercase text-gray-400\">
                                                    (";
                        // line 70
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["tag"], "type", [], "any", false, false, false, 70), "html", null, true);
                        yield ")
                                                </span>
                                            ";
                    }
                    // line 73
                    yield "                                        </div>
                                        ";
                    // line 75
                    yield "                                        ";
                    $context["tagParents"] = (((CoreExtension::getAttribute($this->env, $this->source, ($context["tagsWithParents"] ?? null), CoreExtension::getAttribute($this->env, $this->source, $context["tag"], "id", [], "any", false, false, false, 75), [], "array", true, true, false, 75) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["tagsWithParents"]) || array_key_exists("tagsWithParents", $context) ? $context["tagsWithParents"] : (function () { throw new RuntimeError('Variable "tagsWithParents" does not exist.', 75, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["tag"], "id", [], "any", false, false, false, 75), [], "array", false, false, false, 75)))) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["tagsWithParents"]) || array_key_exists("tagsWithParents", $context) ? $context["tagsWithParents"] : (function () { throw new RuntimeError('Variable "tagsWithParents" does not exist.', 75, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["tag"], "id", [], "any", false, false, false, 75), [], "array", false, false, false, 75)) : ([]));
                    // line 76
                    yield "                                        ";
                    if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty((isset($context["tagParents"]) || array_key_exists("tagParents", $context) ? $context["tagParents"] : (function () { throw new RuntimeError('Variable "tagParents" does not exist.', 76, $this->source); })()))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 77
                        yield "                                            <div class=\"text-xs text-gray-500 flex flex-wrap items-center gap-1\">
                                                <span class=\"text-gray-400\">Dans :</span>
                                                ";
                        // line 79
                        $context['_parent'] = $context;
                        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["tagParents"]) || array_key_exists("tagParents", $context) ? $context["tagParents"] : (function () { throw new RuntimeError('Variable "tagParents" does not exist.', 79, $this->source); })()));
                        $context['loop'] = [
                          'parent' => $context['_parent'],
                          'index0' => 0,
                          'index'  => 1,
                          'first'  => true,
                        ];
                        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                            $length = count($context['_seq']);
                            $context['loop']['revindex0'] = $length - 1;
                            $context['loop']['revindex'] = $length;
                            $context['loop']['length'] = $length;
                            $context['loop']['last'] = 1 === $length;
                        }
                        foreach ($context['_seq'] as $context["_key"] => $context["parent"]) {
                            // line 80
                            yield "                                                    <a href=\"";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_tag_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["parent"], "id", [], "any", false, false, false, 80)]), "html", null, true);
                            yield "\"
                                                       class=\"text-blue-500 hover:underline\">
                                                        ";
                            // line 82
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["parent"], "name", [], "any", false, false, false, 82), "html", null, true);
                            yield "
                                                    </a>
                                                    ";
                            // line 84
                            if ((($tmp =  !CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 84)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                                // line 85
                                yield "                                                        <span class=\"text-gray-400\">›</span>
                                                    ";
                            }
                            // line 87
                            yield "                                                ";
                            ++$context['loop']['index0'];
                            ++$context['loop']['index'];
                            $context['loop']['first'] = false;
                            if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                                --$context['loop']['revindex0'];
                                --$context['loop']['revindex'];
                                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                            }
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_key'], $context['parent'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 88
                        yield "                                            </div>
                                        ";
                    }
                    // line 90
                    yield "                                    </div>
                                </li>
                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['tag'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 93
                yield "                        </ul>
                    ";
            }
            // line 95
            yield "                </div>
            </div>
        ";
        } else {
            // line 98
            yield "            <p class=\"text-gray-500 text-center\">
                Commence par taper un mot-clé pour chercher dans les pages wiki ou les tags de localisation.
            </p>
        ";
        }
        // line 102
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
        return "home/index.html.twig";
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
        return array (  299 => 102,  293 => 98,  288 => 95,  284 => 93,  276 => 90,  272 => 88,  258 => 87,  254 => 85,  252 => 84,  247 => 82,  241 => 80,  224 => 79,  220 => 77,  217 => 76,  214 => 75,  211 => 73,  205 => 70,  202 => 69,  200 => 68,  195 => 66,  190 => 64,  185 => 61,  181 => 60,  178 => 59,  174 => 57,  172 => 56,  166 => 52,  162 => 50,  151 => 45,  146 => 43,  142 => 41,  138 => 40,  135 => 39,  131 => 37,  129 => 36,  120 => 30,  117 => 29,  115 => 28,  100 => 16,  93 => 12,  85 => 6,  75 => 5,  58 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Rechercher un wiki{% endblock %}

{% block body %}

    <div class=\"max-w-2xl mx-auto mt-10 bg-white rounded-lg shadow-lg p-6\">
        <h1 class=\"text-3xl font-bold text-gray-800 mb-6 text-center\">
            Trouver une page wiki
        </h1>

        <form method=\"get\" action=\"{{ path('app_home') }}\" class=\"flex gap-3 mb-8\">
            <input
                type=\"search\"
                name=\"q\"
                value=\"{{ query }}\"
                class=\"flex-1 px-4 py-2 rounded-md border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500\"
                placeholder=\"Titre du wiki, mot-clé...\"
            >
            <button
                type=\"submit\"
                class=\"px-4 py-2 rounded-md bg-blue-600 text-white font-semibold hover:bg-blue-700\"
            >
                Rechercher
            </button>
        </form>

        {% if query is not empty %}
            <p class=\"text-sm text-gray-500 mb-4\">
                Résultats pour « {{ query }} » :
            </p>

            <div class=\"space-y-6\">
                <div>
                    <h2 class=\"text-sm font-semibold text-gray-700 mb-2\">Pages wiki</h2>
                    {% if results is empty %}
                        <p class=\"text-gray-500 text-sm\">Aucun wiki trouvé.</p>
                    {% else %}
                        <ul class=\"space-y-3\">
                            {% for page in results %}
                                <li class=\"border border-gray-200 rounded-md p-3 flex items-center justify-between bg-white shadow-sm\">
                                    <div>
                                        <a href=\"{{ path('app_wiki_show', {id: page.id}) }}\"
                                           class=\"font-semibold text-blue-600 hover:underline\">
                                            {{ page.title }}
                                        </a>
                                    </div>
                                </li>
                            {% endfor %}
                        </ul>
                    {% endif %}
                </div>

                <div>
                    <h2 class=\"text-sm font-semibold text-gray-700 mb-2\">Tags de localisation</h2>
                    {% if tagResults is empty %}
                        <p class=\"text-gray-500 text-sm\">Aucun tag trouvé.</p>
                    {% else %}
                        <ul class=\"space-y-2 text-sm\">
                            {% for tag in tagResults %}
                                <li class=\"border border-gray-200 rounded-md px-3 py-2 bg-white shadow-sm\">
                                    <div class=\"flex flex-col gap-1\">
                                        <div>
                                            <a href=\"{{ path('app_tag_show', {id: tag.id}) }}\"
                                               class=\"font-semibold text-blue-600 hover:underline\">
                                                {{ tag.description ?: tag.name }}
                                            </a>
                                            {% if tag.type %}
                                                <span class=\"ml-2 text-[10px] uppercase text-gray-400\">
                                                    ({{ tag.type }})
                                                </span>
                                            {% endif %}
                                        </div>
                                        {# Affichage de la hiérarchie des parents #}
                                        {% set tagParents = tagsWithParents[tag.id] ?? [] %}
                                        {% if tagParents is not empty %}
                                            <div class=\"text-xs text-gray-500 flex flex-wrap items-center gap-1\">
                                                <span class=\"text-gray-400\">Dans :</span>
                                                {% for parent in tagParents %}
                                                    <a href=\"{{ path('app_tag_show', {id: parent.id}) }}\"
                                                       class=\"text-blue-500 hover:underline\">
                                                        {{ parent.name }}
                                                    </a>
                                                    {% if not loop.last %}
                                                        <span class=\"text-gray-400\">›</span>
                                                    {% endif %}
                                                {% endfor %}
                                            </div>
                                        {% endif %}
                                    </div>
                                </li>
                            {% endfor %}
                        </ul>
                    {% endif %}
                </div>
            </div>
        {% else %}
            <p class=\"text-gray-500 text-center\">
                Commence par taper un mot-clé pour chercher dans les pages wiki ou les tags de localisation.
            </p>
        {% endif %}
    </div>

{% endblock %}
", "home/index.html.twig", "/home/guillaume/Bureau/aguomangu/app/templates/home/index.html.twig");
    }
}
