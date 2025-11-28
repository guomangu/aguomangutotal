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

/* wiki/new.html.twig */
class __TwigTemplate_87a7b525021f43d3b5e768d522589016 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wiki/new.html.twig"));

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

        yield "Nouvel Article";
        
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
        yield "<div class=\"max-w-2xl mx-auto mt-10 p-6 bg-white shadow-lg rounded-lg\">
    <h1 class=\"text-2xl font-bold mb-6 text-gray-800\">Créer une page Wiki</h1>

    ";
        // line 10
        yield "    ";
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 10, $this->source); })()), 'form_start', ["attr" => ["class" => "space-y-4"]]);
        yield "

        <div>
            ";
        // line 14
        yield "            ";
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 14, $this->source); })()), "title", [], "any", false, false, false, 14), 'label', ["label_attr" => ["class" => "block text-sm font-medium text-gray-700"], "label" => "Titre"]);
        yield "
            ";
        // line 15
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 15, $this->source); })()), "title", [], "any", false, false, false, 15), 'widget', ["attr" => ["class" => "mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 sm:text-sm p-2 border"]]);
        yield "
        </div>

        <div>
            ";
        // line 20
        yield "            ";
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 20, $this->source); })()), "image", [], "any", false, false, false, 20), 'label', ["label_attr" => ["class" => "block text-sm font-medium text-gray-700"], "label" => "Contenu"]);
        yield "
            ";
        // line 21
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 21, $this->source); })()), "image", [], "any", false, false, false, 21), 'widget', ["attr" => ["class" => "mt-1 block w-full rounded-md border-gray-300 shadow-sm border p-2 h-40"]]);
        yield "
        </div>

        <button type=\"submit\" class=\"w-full bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded transition\">
            Publier l'article 🚀
        </button>

    ";
        // line 28
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 28, $this->source); })()), 'form_end');
        yield "
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
        return "wiki/new.html.twig";
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
        return array (  124 => 28,  114 => 21,  109 => 20,  102 => 15,  97 => 14,  90 => 10,  85 => 6,  75 => 5,  58 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Nouvel Article{% endblock %}

{% block body %}
<div class=\"max-w-2xl mx-auto mt-10 p-6 bg-white shadow-lg rounded-lg\">
    <h1 class=\"text-2xl font-bold mb-6 text-gray-800\">Créer une page Wiki</h1>

    {# Le form_start et form_end gèrent tout le HTML technique #}
    {{ form_start(form, {'attr': {'class': 'space-y-4'}}) }}

        <div>
            {# Le label et le champ Titre #}
            {{ form_label(form.title, 'Titre', {'label_attr': {'class': 'block text-sm font-medium text-gray-700'}}) }}
            {{ form_widget(form.title, {'attr': {'class': 'mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 sm:text-sm p-2 border'}}) }}
        </div>

        <div>
            {# Le contenu (qui utilisera Trix si tu as installé le bundle, sinon un textarea simple) #}
            {{ form_label(form.image, 'Contenu', {'label_attr': {'class': 'block text-sm font-medium text-gray-700'}}) }}
            {{ form_widget(form.image, {'attr': {'class': 'mt-1 block w-full rounded-md border-gray-300 shadow-sm border p-2 h-40'}}) }}
        </div>

        <button type=\"submit\" class=\"w-full bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded transition\">
            Publier l'article 🚀
        </button>

    {{ form_end(form) }}
</div>
{% endblock %}", "wiki/new.html.twig", "/home/guillaume/Bureau/aguomangu/app/templates/wiki/new.html.twig");
    }
}
