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

/* components/WikiCard.html.twig */
class __TwigTemplate_0acc1017b3b6c9cf60af698500c880db extends Template
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
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "components/WikiCard.html.twig"));

        // line 2
        yield "<div class=\"max-w-4xl mx-auto my-8 bg-white shadow-xl rounded-lg overflow-hidden border border-gray-100\">
    
    ";
        // line 5
        yield "    <div class=\"bg-gray-50 px-6 py-4 border-b border-gray-200 flex justify-between items-center\">
        <h1 class=\"text-2xl font-bold text-gray-800\">
            ";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 7, $this->source); })()), "html", null, true);
        yield "
        </h1>
        <a href=\"";
        // line 9
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("backUrl", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["backUrl"]) || array_key_exists("backUrl", $context) ? $context["backUrl"] : (function () { throw new RuntimeError('Variable "backUrl" does not exist.', 9, $this->source); })()), "/admin")) : ("/admin")), "html", null, true);
        yield "\" class=\"text-sm text-blue-600 hover:text-blue-800 font-semibold transition\">
            ⬅ Retour
        </a>
    </div>

    ";
        // line 15
        yield "    <div class=\"p-8 text-gray-700 leading-relaxed\">
        ";
        // line 17
        yield "        ";
        yield from $this->unwrap()->yieldBlock('content', $context, $blocks);
        // line 20
        yield "    </div>
    
    ";
        // line 23
        yield "    <div class=\"bg-gray-50 px-6 py-3 text-xs text-gray-400 text-right\">
        Wiki Cheatcode v1.0
    </div>
</div>";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 17
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 18
        yield "            ";
        // line 19
        yield "        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "components/WikiCard.html.twig";
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
        return array (  100 => 19,  98 => 18,  88 => 17,  77 => 23,  73 => 20,  70 => 17,  67 => 15,  59 => 9,  54 => 7,  50 => 5,  46 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/components/WikiCard.html.twig #}
<div class=\"max-w-4xl mx-auto my-8 bg-white shadow-xl rounded-lg overflow-hidden border border-gray-100\">
    
    {# Header de la card avec le bouton retour #}
    <div class=\"bg-gray-50 px-6 py-4 border-b border-gray-200 flex justify-between items-center\">
        <h1 class=\"text-2xl font-bold text-gray-800\">
            {{ title }}
        </h1>
        <a href=\"{{ backUrl|default('/admin') }}\" class=\"text-sm text-blue-600 hover:text-blue-800 font-semibold transition\">
            ⬅ Retour
        </a>
    </div>

    {# Corps de la card (Contenu) #}
    <div class=\"p-8 text-gray-700 leading-relaxed\">
        {# Le bloc 'content' permet d'injecter du HTML complexe depuis le parent #}
        {% block content %}
            {# Contenu par défaut si vide #}
        {% endblock %}
    </div>
    
    {# Footer optionnel (ex: date) #}
    <div class=\"bg-gray-50 px-6 py-3 text-xs text-gray-400 text-right\">
        Wiki Cheatcode v1.0
    </div>
</div>", "components/WikiCard.html.twig", "/home/guillaume/Bureau/atest/aguomangu2/app/templates/components/WikiCard.html.twig");
    }
}
