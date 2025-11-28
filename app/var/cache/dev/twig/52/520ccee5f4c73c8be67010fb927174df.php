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

/* wiki/list.html.twig */
class __TwigTemplate_e6430aac06a4b736d7d138459a3e421f extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wiki/list.html.twig"));

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

        yield "Wiki";
        
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
    <div class=\"max-w-4xl mx-auto my-8 space-y-10\">

        ";
        // line 10
        yield "        <div class=\"bg-white shadow rounded-lg p-6\">
            <h2 class=\"text-xl font-semibold mb-4\">Créer une nouvelle page</h2>

            ";
        // line 13
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 13, $this->source); })()), 'form_start');
        yield "
                <div class=\"space-y-4\">
                    ";
        // line 15
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 15, $this->source); })()), "title", [], "any", false, false, false, 15), 'row');
        yield "
                    ";
        // line 16
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 16, $this->source); })()), "imageFile", [], "any", false, false, false, 16), 'row');
        yield "
                </div>

                <button class=\"mt-4 px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700\">
                    Enregistrer
                </button>
            ";
        // line 22
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 22, $this->source); })()), 'form_end');
        yield "
        </div>

        ";
        // line 26
        yield "        <div class=\"bg-white shadow rounded-lg p-6\">
            <h2 class=\"text-xl font-semibold mb-4\">Pages existantes</h2>

            ";
        // line 29
        if (Twig\Extension\CoreExtension::testEmpty((isset($context["pages"]) || array_key_exists("pages", $context) ? $context["pages"] : (function () { throw new RuntimeError('Variable "pages" does not exist.', 29, $this->source); })()))) {
            // line 30
            yield "                <p class=\"text-gray-500\">Aucune page pour l’instant.</p>
            ";
        } else {
            // line 32
            yield "                <ul class=\"divide-y divide-gray-200\">
                    ";
            // line 33
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["pages"]) || array_key_exists("pages", $context) ? $context["pages"] : (function () { throw new RuntimeError('Variable "pages" does not exist.', 33, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 34
                yield "                        ";
                $_v0 = $this->env->getRuntime("Symfony\\UX\\TwigComponent\\Twig\\ComponentRuntime");
                $preRendered = $_v0->preRender("WikiCard", Twig\Extension\CoreExtension::toArray(["title" => CoreExtension::getAttribute($this->env, $this->source, $context["page"], "title", [], "any", false, false, false, 34), "backUrl" => "/admin"]));
                if (null !== $preRendered) {
                    yield $preRendered; 
                } else {
                    $preRenderEvent = $_v0->startEmbedComponent("WikiCard", Twig\Extension\CoreExtension::toArray(["title" => CoreExtension::getAttribute($this->env, $this->source, $context["page"], "title", [], "any", false, false, false, 34), "backUrl" => "/admin"]), $context, "wiki/list.html.twig", 25567191861);
                    $embeddedContext = $preRenderEvent->getVariables();
                    $embeddedContext["__parent__"] = $preRenderEvent->getTemplate();
                    $embeddedContext["outerBlocks"] ??= new \Symfony\UX\TwigComponent\BlockStack();
                    $embeddedBlocks = $embeddedContext["outerBlocks"]->convert($blocks, 25567191861);
                    $this->load("wiki/list.html.twig", 34, "25567191861")->display($embeddedContext, $embeddedBlocks);
                    $_v0->finishEmbedComponent();
                }
                // line 58
                yield "
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['page'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 60
            yield "                </ul>
            ";
        }
        // line 62
        yield "        </div>

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
        return "wiki/list.html.twig";
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
        return array (  163 => 62,  159 => 60,  152 => 58,  137 => 34,  133 => 33,  130 => 32,  126 => 30,  124 => 29,  119 => 26,  113 => 22,  104 => 16,  100 => 15,  95 => 13,  90 => 10,  85 => 6,  75 => 5,  58 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Wiki{% endblock %}

{% block body %}

    <div class=\"max-w-4xl mx-auto my-8 space-y-10\">

        {# Formulaire de création rapide #}
        <div class=\"bg-white shadow rounded-lg p-6\">
            <h2 class=\"text-xl font-semibold mb-4\">Créer une nouvelle page</h2>

            {{ form_start(form) }}
                <div class=\"space-y-4\">
                    {{ form_row(form.title) }}
                    {{ form_row(form.imageFile) }}
                </div>

                <button class=\"mt-4 px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700\">
                    Enregistrer
                </button>
            {{ form_end(form) }}
        </div>

        {# Liste des pages existantes #}
        <div class=\"bg-white shadow rounded-lg p-6\">
            <h2 class=\"text-xl font-semibold mb-4\">Pages existantes</h2>

            {% if pages is empty %}
                <p class=\"text-gray-500\">Aucune page pour l’instant.</p>
            {% else %}
                <ul class=\"divide-y divide-gray-200\">
                    {% for page in pages %}
                        {% component 'WikiCard' with { title: (page.title), backUrl: '/admin' } %}
                            
                            {% block content %}
                                {# Tout ce qui est ici va aller dans le corps de la card #}
                                
                                {# Si tu as une image de couverture #}
                                {% if page.image %}
                                    <img src=\"{{ page.image }}\" class=\"w-full h-64 object-cover rounded mb-6 shadow-sm\" alt=\"Cover\">
                                {% endif %}

                                {# Le contenu Trix (HTML) #}
                                {# <div class=\"prose max-w-none\">
                                    {{ page.content|raw }}
                                </div> #}

                                {# --- BOUTON DELETE (Invisible pour les visiteurs si tu ajoutes une condition is_granted) --- #}
                                <div class=\"flex justify-end mb-4\">
                                    <a href=\"{{ path('app_wiki_show', {id: page.id}) }}\" class=\"text-sm text-gray-500 hover:text-gray-700\">
                                        Voir
                                    </a>
                                </div>
                            {% endblock %}

                        {% endcomponent %}

                    {% endfor %}
                </ul>
            {% endif %}
        </div>

    </div>

{% endblock %}


", "wiki/list.html.twig", "/home/guillaume/Bureau/atest/aguomangu2/app/templates/wiki/list.html.twig");
    }
}


/* wiki/list.html.twig */
class __TwigTemplate_e6430aac06a4b736d7d138459a3e421f___25567191861 extends Template
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
            'outer__block_fallback' => [$this, 'block_outer__block_fallback'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 34
        return $this->load((isset($context["__parent__"]) || array_key_exists("__parent__", $context) ? $context["__parent__"] : (function () { throw new RuntimeError('Variable "__parent__" does not exist.', 34, $this->source); })()), 34);
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wiki/list.html.twig"));

        yield from $this->getParent($context)->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_outer__block_fallback(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "outer__block_fallback"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 36
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 37
        yield "                                ";
        // line 38
        yield "                                
                                ";
        // line 40
        yield "                                ";
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 40, $this->source); })()), "image", [], "any", false, false, false, 40)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 41
            yield "                                    <img src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 41, $this->source); })()), "image", [], "any", false, false, false, 41), "html", null, true);
            yield "\" class=\"w-full h-64 object-cover rounded mb-6 shadow-sm\" alt=\"Cover\">
                                ";
        }
        // line 43
        yield "
                                ";
        // line 45
        yield "                                ";
        // line 48
        yield "
                                ";
        // line 50
        yield "                                <div class=\"flex justify-end mb-4\">
                                    <a href=\"";
        // line 51
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_wiki_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 51, $this->source); })()), "id", [], "any", false, false, false, 51)]), "html", null, true);
        yield "\" class=\"text-sm text-gray-500 hover:text-gray-700\">
                                        Voir
                                    </a>
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
        return "wiki/list.html.twig";
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
        return array (  363 => 51,  360 => 50,  357 => 48,  355 => 45,  352 => 43,  346 => 41,  343 => 40,  340 => 38,  338 => 37,  328 => 36,  297 => 34,  163 => 62,  159 => 60,  152 => 58,  137 => 34,  133 => 33,  130 => 32,  126 => 30,  124 => 29,  119 => 26,  113 => 22,  104 => 16,  100 => 15,  95 => 13,  90 => 10,  85 => 6,  75 => 5,  58 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Wiki{% endblock %}

{% block body %}

    <div class=\"max-w-4xl mx-auto my-8 space-y-10\">

        {# Formulaire de création rapide #}
        <div class=\"bg-white shadow rounded-lg p-6\">
            <h2 class=\"text-xl font-semibold mb-4\">Créer une nouvelle page</h2>

            {{ form_start(form) }}
                <div class=\"space-y-4\">
                    {{ form_row(form.title) }}
                    {{ form_row(form.imageFile) }}
                </div>

                <button class=\"mt-4 px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700\">
                    Enregistrer
                </button>
            {{ form_end(form) }}
        </div>

        {# Liste des pages existantes #}
        <div class=\"bg-white shadow rounded-lg p-6\">
            <h2 class=\"text-xl font-semibold mb-4\">Pages existantes</h2>

            {% if pages is empty %}
                <p class=\"text-gray-500\">Aucune page pour l’instant.</p>
            {% else %}
                <ul class=\"divide-y divide-gray-200\">
                    {% for page in pages %}
                        {% component 'WikiCard' with { title: (page.title), backUrl: '/admin' } %}
                            
                            {% block content %}
                                {# Tout ce qui est ici va aller dans le corps de la card #}
                                
                                {# Si tu as une image de couverture #}
                                {% if page.image %}
                                    <img src=\"{{ page.image }}\" class=\"w-full h-64 object-cover rounded mb-6 shadow-sm\" alt=\"Cover\">
                                {% endif %}

                                {# Le contenu Trix (HTML) #}
                                {# <div class=\"prose max-w-none\">
                                    {{ page.content|raw }}
                                </div> #}

                                {# --- BOUTON DELETE (Invisible pour les visiteurs si tu ajoutes une condition is_granted) --- #}
                                <div class=\"flex justify-end mb-4\">
                                    <a href=\"{{ path('app_wiki_show', {id: page.id}) }}\" class=\"text-sm text-gray-500 hover:text-gray-700\">
                                        Voir
                                    </a>
                                </div>
                            {% endblock %}

                        {% endcomponent %}

                    {% endfor %}
                </ul>
            {% endif %}
        </div>

    </div>

{% endblock %}


", "wiki/list.html.twig", "/home/guillaume/Bureau/atest/aguomangu2/app/templates/wiki/list.html.twig");
    }
}
