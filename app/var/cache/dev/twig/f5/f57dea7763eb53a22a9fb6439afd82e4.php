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

/* wiki/index.html.twig */
class __TwigTemplate_e39aa4476cacce4d8fff039742822627 extends Template
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
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wiki/index.html.twig"));

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

        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 3, $this->source); })()), "title", [], "any", false, false, false, 3), "html", null, true);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        yield "    ";
        yield from $this->yieldParentBlock("stylesheets", $context, $blocks);
        yield "
    <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/fullcalendar@6.1.15/index.global.min.css\">
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 10
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 11
        yield "    
    ";
        // line 13
        yield "    ";
        $_v0 = $this->env->getRuntime("Symfony\\UX\\TwigComponent\\Twig\\ComponentRuntime");
        $preRendered = $_v0->preRender("WikiCard", Twig\Extension\CoreExtension::toArray(["title" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 13, $this->source); })()), "title", [], "any", false, false, false, 13), "backUrl" => "/admin"]));
        if (null !== $preRendered) {
            yield $preRendered; 
        } else {
            $preRenderEvent = $_v0->startEmbedComponent("WikiCard", Twig\Extension\CoreExtension::toArray(["title" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 13, $this->source); })()), "title", [], "any", false, false, false, 13), "backUrl" => "/admin"]), $context, "wiki/index.html.twig", 6570955491);
            $embeddedContext = $preRenderEvent->getVariables();
            $embeddedContext["__parent__"] = $preRenderEvent->getTemplate();
            $embeddedContext["outerBlocks"] ??= new \Symfony\UX\TwigComponent\BlockStack();
            $embeddedBlocks = $embeddedContext["outerBlocks"]->convert($blocks, 6570955491);
            $this->load("wiki/index.html.twig", 13, "6570955491")->display($embeddedContext, $embeddedBlocks);
            $_v0->finishEmbedComponent();
        }
        // line 434
        yield "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 437
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 438
        yield "    ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
    <script src=\"https://cdn.jsdelivr.net/npm/fullcalendar@6.1.15/index.global.min.js\"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const calendarEl = document.getElementById('wiki-calendar');
            if (!calendarEl) return;

            const wikiId = ";
        // line 445
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 445, $this->source); })()), "id", [], "any", false, false, false, 445), "html", null, true);
        yield ";

            const calendar = new FullCalendar.Calendar(calendarEl, {
                initialView: 'timeGridWeek',
                locale: 'fr',
                timeZone: 'local',
                headerToolbar: {
                    left: 'prev,next today',
                    center: 'title',
                    right: 'dayGridMonth,timeGridWeek,timeGridDay'
                },
                firstDay: 1,
                allDaySlot: false,
                slotMinTime: '00:00:00',
                slotMaxTime: '24:00:00',
                events: function (info, successCallback, failureCallback) {
                    const params = new URLSearchParams({
                        start: info.startStr,
                        end: info.endStr,
                        filters: JSON.stringify({ wikiId: wikiId })
                    });

                    fetch('/fc-load-events?' + params.toString())
                        .then(response => {
                            if (response.status === 204) {
                                return '[]';
                            }
                            if (!response.ok) {
                                throw new Error('Erreur lors du chargement des événements');
                            }
                            return response.text();
                        })
                        .then(text => text ? JSON.parse(text) : [])
                        .then(events => successCallback(events))
                        .catch(error => {
                            console.error(error);
                            failureCallback(error);
                        });
                }
            });

            calendar.render();
        });
    </script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "wiki/index.html.twig";
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
        return array (  157 => 445,  146 => 438,  136 => 437,  127 => 434,  112 => 13,  109 => 11,  99 => 10,  87 => 6,  77 => 5,  60 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}{{ page.title }}{% endblock %}

{% block stylesheets %}
    {{ parent() }}
    <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/fullcalendar@6.1.15/index.global.min.css\">
{% endblock %}

{% block body %}
    
    {# Appel du composant. On passe le titre en attribut. #}
    {% component 'WikiCard' with { title: (page.title), backUrl: '/admin' } %}
        
        {% block content %}
            {# Tout ce qui est ici va aller dans le corps de la card #}
            
            {# Si tu as une image de couverture #}
            {% if page.image %}
                <img src=\"{{ page.image }}\" class=\"w-full h-64 object-cover rounded mb-6 shadow-sm\" alt=\"Cover\">
            {% endif %}

            {# Tags de localisation sous le titre du wiki #}
            {% set locTags = page.locationTags ?? [] %}
            {% if locTags is not empty %}
                <div class=\"mb-4 flex flex-wrap gap-2\">
                        {% for tag in locTags %}
                            <a href=\"{{ path('app_tag_show', {id: tag.id}) }}\"
                               class=\"inline-flex items-center px-2 py-1 rounded-full text-xs
                                      bg-gray-100 text-gray-700 border border-gray-200 hover:bg-gray-200\">
                                {% if tag.type == 'custom' and tag.description %}
                                    {{ tag.description }} <span class=\"ml-1 text-[10px] uppercase text-gray-400\">({{ tag.name }})</span>
                                {% elseif tag.type == 'custom' %}
                                    {{ tag.name }}
                                {% else %}
                                    {{ tag.name }}{% if tag.type %} <span class=\"ml-1 text-[10px] uppercase text-gray-400\">({{ tag.type }})</span>{% endif %}
                                {% endif %}
                            </a>
                        {% endfor %}
                </div>
            {% endif %}

            {# Le contenu Trix (HTML) #}
            {# <div class=\"prose max-w-none\">
                {{ page.content|raw }}
            </div> #}

            {# --- LISTE DES ARTICLES ENFANTS --- #}
            <div class=\"mt-8\">
                <h2 class=\"text-xl font-semibold mb-4\">Articles</h2>

                {% if articles is empty %}
                    <p class=\"text-gray-500\">Aucun article pour l'instant.</p>
                {% else %}
                    <ul class=\"space-y-3\">
                        {% for article in articles %}
                            <li class=\"border border-gray-200 rounded p-3 bg-gray-50\">
                                <h3 class=\"font-semibold text-gray-800\">{{ article.title }}</h3>
                                {% if article.image %}
                                    <img src=\"{{ article.image }}\" class=\"w-full h-48 object-cover rounded mb-3 shadow-sm\" alt=\"\">
                                {% endif %}
                                {% if article.content %}
                                    <p class=\"mt-1 text-gray-700 text-sm\">
                                        {{ article.content }}
                                    </p>
                                {% endif %}
                            </li>
                        {% endfor %}
                    </ul>
                {% endif %}
            </div>

            {% if app.user and articleForm is not null %}
                {# --- FORMULAIRE DE CREATION D'ARTICLE (accessible à tous les utilisateurs connectés) --- #}
                <div class=\"mt-8 border-t pt-6\">
                    <h2 class=\"text-xl font-semibold mb-4\">Ajouter un article</h2>
                    {{ form_start(articleForm) }}
                        <div class=\"space-y-4\">
                            {{ form_row(articleForm.title) }}
                            {{ form_row(articleForm.content) }}
                            {{ form_row(articleForm.imageFile) }}
                        </div>
                        <button class=\"mt-4 px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700\">
                            Enregistrer l'article
                        </button>
                    {{ form_end(articleForm) }}
                </div>
            {% endif %}

            {# --- AGENDA / EMPLOI DU TEMPS --- #}
            <div class=\"mt-10 border-t pt-6\">
                <h2 class=\"text-xl font-semibold mb-4\">Agenda / créneaux disponibles</h2>
                <div id=\"wiki-calendar\" class=\"mt-4 bg-white rounded shadow p-4\"></div>
                <p class=\"mt-2 text-xs text-gray-500\">
                    Clique sur un créneau vert pour réserver ce créneau.
                </p>
            </div>

            {# --- FORUM / DISCUSSION --- #}
            <div class=\"mt-10 border-t pt-6\">
                <h2 class=\"text-xl font-semibold mb-4\">Forum de discussion</h2>

                {% if forum is null %}
                    {% if isOwner %}
                        <p class=\"text-gray-500 text-sm mb-4\">
                            Aucun forum n’a encore été créé pour ce wiki.
                        </p>
                        <form method=\"post\"
                              action=\"{{ path('app_wiki_forum_create', {id: page.id}) }}\"
                              onsubmit=\"return confirm('Créer un forum pour ce wiki ?');\">
                            <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('create_forum' ~ page.id) }}\">
                            <button class=\"px-4 py-2 bg-blue-600 text-white rounded-md text-sm hover:bg-blue-700\">
                                Créer le forum
                            </button>
                        </form>
                    {% else %}
                        <p class=\"text-gray-500 text-sm\">
                            Le forum de ce wiki n’a pas encore été créé.
                        </p>
                    {% endif %}
                {% else %}
                    <div class=\"space-y-4\">
                        {# Formulaire de message en haut #}
                        {% if app.user %}
                            <div class=\"mb-6\">
                                <h3 class=\"text-sm font-semibold mb-2\">Écrire un message</h3>
                                {{ form_start(messageForm) }}
                                    {{ form_row(messageForm.content) }}
                                    <button class=\"mt-2 px-3 py-1.5 bg-blue-600 text-white rounded-md text-sm hover:bg-blue-700\">
                                        Envoyer
                                    </button>
                                {{ form_end(messageForm) }}
                            </div>
                        {% else %}
                            <p class=\"mb-4 text-xs text-gray-500\">
                                Connecte-toi pour participer à la discussion.
                                <a href=\"{{ path('app_login') }}\" class=\"text-blue-600 hover:underline\">
                                    Se connecter
                                </a>
                            </p>
                        {% endif %}

                        {# Messages et notifications mélangés, triés par date (plus récent en haut) #}
                        {% if forumItems is empty %}
                            <p class=\"text-gray-500 text-sm\">Aucun message ou notification pour l'instant. Soyez le premier à écrire !</p>
                        {% else %}
                            <ul class=\"space-y-3\">
                                {% for item in forumItems %}
                                    {% if item.type == 'notification' %}
                                        {# Notification #}
                                        {% set notif = item.item %}
                                        <li class=\"bg-blue-50 border-l-4 border-blue-400 rounded px-3 py-2 text-sm\">
                                            <div class=\"flex justify-between items-start mb-1\">
                                                <div class=\"flex-1\">
                                                    <span class=\"text-blue-800 font-medium\">
                                                        {% if notif.type == 'tag_created' %}
                                                            📍 Tag créé
                                                        {% elseif notif.type == 'agenda_routine_created' %}
                                                            📅 Routine créée
                                                        {% elseif notif.type == 'agenda_reserved' %}
                                                            ✅ Créneau réservé
                                                        {% elseif notif.type == 'article_created' %}
                                                            📄 Article créé
                                                        {% elseif notif.type == 'wiki_child_created' %}
                                                            🌿 Wiki enfant créé
                                                        {% else %}
                                                            ℹ️ Notification
                                                        {% endif %}
                                                    </span>
                                                    {% if item.authorName %}
                                                        <span class=\"text-blue-600 text-xs ml-2\">
                                                            par {{ item.authorName }}
                                                        </span>
                                                    {% endif %}
                                                </div>
                                                <span class=\"text-xs text-blue-500\">
                                                    {{ notif.createdAt|date('d/m/Y H:i') }}
                                                </span>
                                            </div>
                                            <p class=\"text-blue-900 mt-1\">
                                                {{ notif.content }}
                                            </p>
                                        </li>
                                    {% else %}
                                        {# Message #}
                                        {% set m = item.item %}
                                        <li class=\"bg-white border border-gray-200 rounded-md px-3 py-2 text-sm\">
                                            <div class=\"flex justify-between items-center mb-1\">
                                                <span class=\"font-semibold text-gray-800\">
                                                    {{ item.authorName }}
                                                </span>
                                                <span class=\"text-xs text-gray-400\">
                                                    {{ m.createdAt|date('d/m/Y H:i') }}
                                                </span>
                                            </div>
                                            <p class=\"text-gray-700 whitespace-pre-line\">
                                                {{ m.content }}
                                            </p>
                                        </li>
                                    {% endif %}
                                {% endfor %}
                            </ul>
                        {% endif %}
                    </div>
                {% endif %}
            </div>

            {# --- LOCALISATION (TAGS) --- #}
            <div class=\"mt-10 border-t pt-6\">
                <h2 class=\"text-xl font-semibold mb-4\">Localisation</h2>

                {# Affichage des tags existants (section localisation détaillée) #}
                {% if locTags is empty %}
                    <p class=\"text-gray-500 text-sm mb-4\">
                        Aucun tag de localisation pour l’instant.
                    </p>
                {% else %}
                    <div class=\"flex flex-wrap gap-2 mb-4\">
                        {% for tag in locTags %}
                            <a href=\"{{ path('app_tag_show', {id: tag.id}) }}\"
                               class=\"inline-flex items-center px-2 py-1 rounded-full text-xs
                                      bg-gray-100 text-gray-700 border border-gray-200 hover:bg-gray-200\">
                                {% if tag.type == 'custom' and tag.description %}
                                    {{ tag.description }} <span class=\"ml-1 text-[10px] uppercase text-gray-400\">({{ tag.name }})</span>
                                {% elseif tag.type == 'custom' %}
                                    {{ tag.name }}
                                {% else %}
                                    {{ tag.name }}{% if tag.type %} <span class=\"ml-1 text-[10px] uppercase text-gray-400\">({{ tag.type }})</span>{% endif %}
                                {% endif %}
                            </a>
                        {% endfor %}
                    </div>
                {% endif %}

                {% if isOwner %}
                    {# Recherche de localisation via CSV - seulement si pas de tags officiels déjà présents #}
                    {% if not hasOfficialTags %}
                        <div class=\"mt-4 mb-6\">
                            <h3 class=\"text-sm font-semibold mb-2\">Ajouter depuis la base officielle (adresses 68)</h3>
                            <form method=\"get\" action=\"{{ path('app_wiki_show', {id: page.id}) }}\" class=\"flex flex-col sm:flex-row gap-2\">
                                <input
                                    type=\"search\"
                                    name=\"loc_q\"
                                    value=\"{{ locationSearchQuery }}\"
                                    class=\"flex-1 px-3 py-2 rounded-md border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500\"
                                    placeholder=\"Ex : 7 rue de la mairie Colmar ou 68000 Colmar...\"
                                >
                                <button
                                    type=\"submit\"
                                    class=\"px-3 py-2 bg-blue-600 text-white text-sm rounded-md hover:bg-blue-700\"
                                >
                                    Chercher
                                </button>
                            </form>

                            {% if locationSearchQuery is not empty %}
                                <p class=\"mt-2 text-xs text-gray-500\">
                                    Résultats pour « {{ locationSearchQuery }} » :
                                </p>

                                {% if locationSearchResults is empty %}
                                    <p class=\"text-gray-500 text-sm mt-1\">Aucune adresse trouvée.</p>
                                {% else %}
                                    <ul class=\"mt-2 space-y-1 text-sm\">
                                        {% for r in locationSearchResults %}
                                            <li class=\"flex flex-col sm:flex-row sm:items-center sm:justify-between bg-white border border-gray-200 rounded px-3 py-2\">
                                                <div class=\"text-gray-800\">
                                                    <div class=\"font-semibold\">
                                                        {% if r.numero %}{{ r.numero }} {% endif %}
                                                        {% if r.nom_voie %}{{ r.nom_voie }}{% endif %}
                                                    </div>
                                                    <div class=\"text-gray-600 text-xs\">
                                                        France &gt; Grand Est &gt; {{ r.nom_commune }}{% if r.code_postal %} ({{ r.code_postal }}){% endif %}
                                                    </div>
                                                </div>
                                                <form method=\"post\"
                                                      action=\"{{ path('app_wiki_location_attach', {id: page.id, externalId: r.id}) }}\"
                                                      class=\"mt-2 sm:mt-0\"
                                                >
                                                    <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('attach_location' ~ page.id ~ r.id) }}\">
                                                    <button class=\"px-2 py-1 text-xs bg-green-600 text-white rounded hover:bg-green-700\">
                                                        Associer
                                                    </button>
                                                </form>
                                            </li>
                                        {% endfor %}
                                    </ul>
                                {% endif %}
                            {% endif %}
                        </div>
                    {% else %}
                        <div class=\"mt-4 mb-6 p-3 bg-blue-50 border border-blue-200 rounded-md\">
                            <p class=\"text-sm text-blue-800\">
                                <strong>Une adresse officielle est déjà associée à ce wiki.</strong><br>
                                <span class=\"text-xs text-blue-600\">Vous ne pouvez ajouter qu'une seule adresse officielle. Vous pouvez toujours ajouter des tags personnalisés ci-dessous.</span>
                            </p>
                        </div>
                    {% endif %}

                    {# Tags personnalisés #}
                    <div class=\"mt-4\">
                        <h3 class=\"text-sm font-semibold mb-2\">Ajouter un tag personnalisé (ex : étage, bâtiment...)</h3>
                        {{ form_start(customLocationForm) }}
                            <div class=\"space-y-3\">
                                {{ form_row(customLocationForm.title) }}
                                {{ form_row(customLocationForm.description) }}
                            </div>
                            <button class=\"mt-2 px-3 py-1.5 bg-purple-600 text-white rounded-md text-sm hover:bg-purple-700\">
                                Ajouter le tag
                            </button>
                        {{ form_end(customLocationForm) }}
                    </div>
                {% endif %}
            </div>

            {# --- LISTE DES WIKIS ENFANTS --- #}
            <div class=\"mt-10 border-t pt-6\">
                <h2 class=\"text-xl font-semibold mb-4\">Wikis enfants</h2>

                {% if page.children is empty %}
                    <p class=\"text-gray-500\">Aucun wiki enfant pour l’instant.</p>
                {% else %}
                    <ul class=\"space-y-3\">
                        {% for child in page.children %}
                            <li class=\"border border-gray-200 rounded p-3 bg-gray-50 flex justify-between items-center\">
                                <div>
                                    <a href=\"{{ path('app_wiki_show', {id: child.id}) }}\" class=\"font-semibold text-blue-600 hover:underline\">
                                        {{ child.title }}
                                    </a>
                                </div>
                            </li>
                        {% endfor %}
                    </ul>
                {% endif %}
            </div>

            {% if isOwner and childWikiForm is not null %}
                {# --- FORMULAIRE DE CREATION DE WIKI ENFANT (réservé au propriétaire) --- #}
                <div class=\"mt-8 border-t pt-6\">
                    <h2 class=\"text-xl font-semibold mb-4\">Créer un wiki enfant</h2>
                    {{ form_start(childWikiForm) }}
                        <div class=\"space-y-4\">
                            {{ form_row(childWikiForm.title) }}
                            {{ form_row(childWikiForm.imageFile) }}
                        </div>
                        <button class=\"mt-4 px-4 py-2 bg-green-600 text-white rounded hover:bg-green-700\">
                            Créer le wiki enfant
                        </button>
                    {{ form_end(childWikiForm) }}
                </div>
            {% endif %}

            {% if isOwner and agendaForm is not null %}
                {# --- FORMULAIRE DE CREATION DE ROUTINE DE CRENEAUX (plusieurs jours) --- #}
                <div class=\"mt-8 border-t pt-6\">
                    <h2 class=\"text-xl font-semibold mb-4\">Ajouter une routine de créneaux</h2>
                    {{ form_start(agendaForm) }}
                        <div class=\"space-y-4\">
                            {{ form_row(agendaForm.title) }}
                            {{ form_row(agendaForm.startTime) }}
                            {{ form_row(agendaForm.endTime) }}
                            {{ form_row(agendaForm.daysOfWeek) }}
                            {{ form_row(agendaForm.capacity) }}
                        </div>
                        <button class=\"mt-4 px-4 py-2 bg-purple-600 text-white rounded hover:bg-purple-700\">
                            Enregistrer la routine
                        </button>
                    {{ form_end(agendaForm) }}
                </div>

                {# --- LISTE DES ROUTINES EXISTANTES --- #}
                <div class=\"mt-8 border-t pt-6\">
                    <h2 class=\"text-xl font-semibold mb-4\">Routines existantes</h2>

                    {% set patterns = patterns ?? [] %}

                    {% if patterns is empty %}
                        <p class=\"text-gray-500 text-sm\">Aucune routine pour l’instant.</p>
                    {% else %}
                        <table class=\"min-w-full text-sm text-left border border-gray-200 rounded overflow-hidden\">
                            <thead class=\"bg-gray-50\">
                                <tr>
                                    <th class=\"px-3 py-2\">Titre</th>
                                    <th class=\"px-3 py-2\">Jour</th>
                                    <th class=\"px-3 py-2\">Heure</th>
                                    <th class=\"px-3 py-2\">Capacité</th>
                                    <th class=\"px-3 py-2 text-right\">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                {% for pattern in patterns %}
                                    <tr class=\"border-t border-gray-200\">
                                        <td class=\"px-3 py-2\">{{ pattern.title }}</td>
                                        <td class=\"px-3 py-2\">
                                            {% set d = pattern.dayOfWeek %}
                                            {% if d == 1 %}Lundi{% elseif d == 2 %}Mardi{% elseif d == 3 %}Mercredi{% elseif d == 4 %}Jeudi{% elseif d == 5 %}Vendredi{% elseif d == 6 %}Samedi{% else %}Dimanche{% endif %}
                                        </td>
                                        <td class=\"px-3 py-2\">
                                            {{ pattern.startTime|date('H:i') }} → {{ pattern.endTime|date('H:i') }}
                                        </td>
                                        <td class=\"px-3 py-2\">{{ pattern.capacity }}</td>
                                        <td class=\"px-3 py-2 text-right\">
                                            <form method=\"post\"
                                                  action=\"{{ path('app_wiki_pattern_delete', {wikiId: page.id, id: pattern.id}) }}\"
                                                  onsubmit=\"return confirm('Supprimer cette routine ?');\">
                                                <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete_pattern' ~ pattern.id) }}\">
                                                <button class=\"text-red-500 hover:text-red-700 text-xs font-semibold\">
                                                    Supprimer
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                {% endfor %}
                            </tbody>
                        </table>
                    {% endif %}
                </div>
            {% endif %}

            {% if isOwner %}
                {# --- BOUTON DELETE (réservé au propriétaire) --- #}
                <div class=\"flex justify-end mb-4 mt-6\">
                    <form method=\"post\" action=\"{{ path('app_wiki_delete', {'id': page.id}) }}\" onsubmit=\"return confirm('Sûr de vouloir supprimer ça ?');\">
                        <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ page.id) }}\">
                        <button class=\"text-red-500 hover:text-red-700 text-sm font-bold underline\">
                            Supprimer cette page 🗑️
                        </button>
                    </form>
                </div>
            {% endif %}
        {% endblock %}

    {% endcomponent %}

{% endblock %}

{% block javascripts %}
    {{ parent() }}
    <script src=\"https://cdn.jsdelivr.net/npm/fullcalendar@6.1.15/index.global.min.js\"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const calendarEl = document.getElementById('wiki-calendar');
            if (!calendarEl) return;

            const wikiId = {{ page.id }};

            const calendar = new FullCalendar.Calendar(calendarEl, {
                initialView: 'timeGridWeek',
                locale: 'fr',
                timeZone: 'local',
                headerToolbar: {
                    left: 'prev,next today',
                    center: 'title',
                    right: 'dayGridMonth,timeGridWeek,timeGridDay'
                },
                firstDay: 1,
                allDaySlot: false,
                slotMinTime: '00:00:00',
                slotMaxTime: '24:00:00',
                events: function (info, successCallback, failureCallback) {
                    const params = new URLSearchParams({
                        start: info.startStr,
                        end: info.endStr,
                        filters: JSON.stringify({ wikiId: wikiId })
                    });

                    fetch('/fc-load-events?' + params.toString())
                        .then(response => {
                            if (response.status === 204) {
                                return '[]';
                            }
                            if (!response.ok) {
                                throw new Error('Erreur lors du chargement des événements');
                            }
                            return response.text();
                        })
                        .then(text => text ? JSON.parse(text) : [])
                        .then(events => successCallback(events))
                        .catch(error => {
                            console.error(error);
                            failureCallback(error);
                        });
                }
            });

            calendar.render();
        });
    </script>
{% endblock %}", "wiki/index.html.twig", "/home/guillaume/Bureau/atest/aguomangu2/app/templates/wiki/index.html.twig");
    }
}


/* wiki/index.html.twig */
class __TwigTemplate_e39aa4476cacce4d8fff039742822627___6570955491 extends Template
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
        // line 13
        return $this->load((isset($context["__parent__"]) || array_key_exists("__parent__", $context) ? $context["__parent__"] : (function () { throw new RuntimeError('Variable "__parent__" does not exist.', 13, $this->source); })()), 13);
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wiki/index.html.twig"));

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

    // line 15
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 16
        yield "            ";
        // line 17
        yield "            
            ";
        // line 19
        yield "            ";
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 19, $this->source); })()), "image", [], "any", false, false, false, 19)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 20
            yield "                <img src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 20, $this->source); })()), "image", [], "any", false, false, false, 20), "html", null, true);
            yield "\" class=\"w-full h-64 object-cover rounded mb-6 shadow-sm\" alt=\"Cover\">
            ";
        }
        // line 22
        yield "
            ";
        // line 24
        yield "            ";
        $context["locTags"] = (((CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "locationTags", [], "any", true, true, false, 24) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 24, $this->source); })()), "locationTags", [], "any", false, false, false, 24)))) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 24, $this->source); })()), "locationTags", [], "any", false, false, false, 24)) : ([]));
        // line 25
        yield "            ";
        if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty((isset($context["locTags"]) || array_key_exists("locTags", $context) ? $context["locTags"] : (function () { throw new RuntimeError('Variable "locTags" does not exist.', 25, $this->source); })()))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 26
            yield "                <div class=\"mb-4 flex flex-wrap gap-2\">
                        ";
            // line 27
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["locTags"]) || array_key_exists("locTags", $context) ? $context["locTags"] : (function () { throw new RuntimeError('Variable "locTags" does not exist.', 27, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
                // line 28
                yield "                            <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_tag_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["tag"], "id", [], "any", false, false, false, 28)]), "html", null, true);
                yield "\"
                               class=\"inline-flex items-center px-2 py-1 rounded-full text-xs
                                      bg-gray-100 text-gray-700 border border-gray-200 hover:bg-gray-200\">
                                ";
                // line 31
                if (((CoreExtension::getAttribute($this->env, $this->source, $context["tag"], "type", [], "any", false, false, false, 31) == "custom") && CoreExtension::getAttribute($this->env, $this->source, $context["tag"], "description", [], "any", false, false, false, 31))) {
                    // line 32
                    yield "                                    ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["tag"], "description", [], "any", false, false, false, 32), "html", null, true);
                    yield " <span class=\"ml-1 text-[10px] uppercase text-gray-400\">(";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["tag"], "name", [], "any", false, false, false, 32), "html", null, true);
                    yield ")</span>
                                ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 33
$context["tag"], "type", [], "any", false, false, false, 33) == "custom")) {
                    // line 34
                    yield "                                    ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["tag"], "name", [], "any", false, false, false, 34), "html", null, true);
                    yield "
                                ";
                } else {
                    // line 36
                    yield "                                    ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["tag"], "name", [], "any", false, false, false, 36), "html", null, true);
                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["tag"], "type", [], "any", false, false, false, 36)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        yield " <span class=\"ml-1 text-[10px] uppercase text-gray-400\">(";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["tag"], "type", [], "any", false, false, false, 36), "html", null, true);
                        yield ")</span>";
                    }
                    // line 37
                    yield "                                ";
                }
                // line 38
                yield "                            </a>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['tag'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 40
            yield "                </div>
            ";
        }
        // line 42
        yield "
            ";
        // line 44
        yield "            ";
        // line 47
        yield "
            ";
        // line 49
        yield "            <div class=\"mt-8\">
                <h2 class=\"text-xl font-semibold mb-4\">Articles</h2>

                ";
        // line 52
        if (Twig\Extension\CoreExtension::testEmpty((isset($context["articles"]) || array_key_exists("articles", $context) ? $context["articles"] : (function () { throw new RuntimeError('Variable "articles" does not exist.', 52, $this->source); })()))) {
            // line 53
            yield "                    <p class=\"text-gray-500\">Aucun article pour l'instant.</p>
                ";
        } else {
            // line 55
            yield "                    <ul class=\"space-y-3\">
                        ";
            // line 56
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["articles"]) || array_key_exists("articles", $context) ? $context["articles"] : (function () { throw new RuntimeError('Variable "articles" does not exist.', 56, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
                // line 57
                yield "                            <li class=\"border border-gray-200 rounded p-3 bg-gray-50\">
                                <h3 class=\"font-semibold text-gray-800\">";
                // line 58
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["article"], "title", [], "any", false, false, false, 58), "html", null, true);
                yield "</h3>
                                ";
                // line 59
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["article"], "image", [], "any", false, false, false, 59)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 60
                    yield "                                    <img src=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["article"], "image", [], "any", false, false, false, 60), "html", null, true);
                    yield "\" class=\"w-full h-48 object-cover rounded mb-3 shadow-sm\" alt=\"\">
                                ";
                }
                // line 62
                yield "                                ";
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["article"], "content", [], "any", false, false, false, 62)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 63
                    yield "                                    <p class=\"mt-1 text-gray-700 text-sm\">
                                        ";
                    // line 64
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["article"], "content", [], "any", false, false, false, 64), "html", null, true);
                    yield "
                                    </p>
                                ";
                }
                // line 67
                yield "                            </li>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['article'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 69
            yield "                    </ul>
                ";
        }
        // line 71
        yield "            </div>

            ";
        // line 73
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 73, $this->source); })()), "user", [], "any", false, false, false, 73) &&  !(null === (isset($context["articleForm"]) || array_key_exists("articleForm", $context) ? $context["articleForm"] : (function () { throw new RuntimeError('Variable "articleForm" does not exist.', 73, $this->source); })())))) {
            // line 74
            yield "                ";
            // line 75
            yield "                <div class=\"mt-8 border-t pt-6\">
                    <h2 class=\"text-xl font-semibold mb-4\">Ajouter un article</h2>
                    ";
            // line 77
            yield             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["articleForm"]) || array_key_exists("articleForm", $context) ? $context["articleForm"] : (function () { throw new RuntimeError('Variable "articleForm" does not exist.', 77, $this->source); })()), 'form_start');
            yield "
                        <div class=\"space-y-4\">
                            ";
            // line 79
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["articleForm"]) || array_key_exists("articleForm", $context) ? $context["articleForm"] : (function () { throw new RuntimeError('Variable "articleForm" does not exist.', 79, $this->source); })()), "title", [], "any", false, false, false, 79), 'row');
            yield "
                            ";
            // line 80
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["articleForm"]) || array_key_exists("articleForm", $context) ? $context["articleForm"] : (function () { throw new RuntimeError('Variable "articleForm" does not exist.', 80, $this->source); })()), "content", [], "any", false, false, false, 80), 'row');
            yield "
                            ";
            // line 81
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["articleForm"]) || array_key_exists("articleForm", $context) ? $context["articleForm"] : (function () { throw new RuntimeError('Variable "articleForm" does not exist.', 81, $this->source); })()), "imageFile", [], "any", false, false, false, 81), 'row');
            yield "
                        </div>
                        <button class=\"mt-4 px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700\">
                            Enregistrer l'article
                        </button>
                    ";
            // line 86
            yield             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["articleForm"]) || array_key_exists("articleForm", $context) ? $context["articleForm"] : (function () { throw new RuntimeError('Variable "articleForm" does not exist.', 86, $this->source); })()), 'form_end');
            yield "
                </div>
            ";
        }
        // line 89
        yield "
            ";
        // line 91
        yield "            <div class=\"mt-10 border-t pt-6\">
                <h2 class=\"text-xl font-semibold mb-4\">Agenda / créneaux disponibles</h2>
                <div id=\"wiki-calendar\" class=\"mt-4 bg-white rounded shadow p-4\"></div>
                <p class=\"mt-2 text-xs text-gray-500\">
                    Clique sur un créneau vert pour réserver ce créneau.
                </p>
            </div>

            ";
        // line 100
        yield "            <div class=\"mt-10 border-t pt-6\">
                <h2 class=\"text-xl font-semibold mb-4\">Forum de discussion</h2>

                ";
        // line 103
        if ((null === (isset($context["forum"]) || array_key_exists("forum", $context) ? $context["forum"] : (function () { throw new RuntimeError('Variable "forum" does not exist.', 103, $this->source); })()))) {
            // line 104
            yield "                    ";
            if ((($tmp = (isset($context["isOwner"]) || array_key_exists("isOwner", $context) ? $context["isOwner"] : (function () { throw new RuntimeError('Variable "isOwner" does not exist.', 104, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 105
                yield "                        <p class=\"text-gray-500 text-sm mb-4\">
                            Aucun forum n’a encore été créé pour ce wiki.
                        </p>
                        <form method=\"post\"
                              action=\"";
                // line 109
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_wiki_forum_create", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 109, $this->source); })()), "id", [], "any", false, false, false, 109)]), "html", null, true);
                yield "\"
                              onsubmit=\"return confirm('Créer un forum pour ce wiki ?');\">
                            <input type=\"hidden\" name=\"_token\" value=\"";
                // line 111
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("create_forum" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 111, $this->source); })()), "id", [], "any", false, false, false, 111))), "html", null, true);
                yield "\">
                            <button class=\"px-4 py-2 bg-blue-600 text-white rounded-md text-sm hover:bg-blue-700\">
                                Créer le forum
                            </button>
                        </form>
                    ";
            } else {
                // line 117
                yield "                        <p class=\"text-gray-500 text-sm\">
                            Le forum de ce wiki n’a pas encore été créé.
                        </p>
                    ";
            }
            // line 121
            yield "                ";
        } else {
            // line 122
            yield "                    <div class=\"space-y-4\">
                        ";
            // line 124
            yield "                        ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 124, $this->source); })()), "user", [], "any", false, false, false, 124)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 125
                yield "                            <div class=\"mb-6\">
                                <h3 class=\"text-sm font-semibold mb-2\">Écrire un message</h3>
                                ";
                // line 127
                yield                 $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["messageForm"]) || array_key_exists("messageForm", $context) ? $context["messageForm"] : (function () { throw new RuntimeError('Variable "messageForm" does not exist.', 127, $this->source); })()), 'form_start');
                yield "
                                    ";
                // line 128
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["messageForm"]) || array_key_exists("messageForm", $context) ? $context["messageForm"] : (function () { throw new RuntimeError('Variable "messageForm" does not exist.', 128, $this->source); })()), "content", [], "any", false, false, false, 128), 'row');
                yield "
                                    <button class=\"mt-2 px-3 py-1.5 bg-blue-600 text-white rounded-md text-sm hover:bg-blue-700\">
                                        Envoyer
                                    </button>
                                ";
                // line 132
                yield                 $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["messageForm"]) || array_key_exists("messageForm", $context) ? $context["messageForm"] : (function () { throw new RuntimeError('Variable "messageForm" does not exist.', 132, $this->source); })()), 'form_end');
                yield "
                            </div>
                        ";
            } else {
                // line 135
                yield "                            <p class=\"mb-4 text-xs text-gray-500\">
                                Connecte-toi pour participer à la discussion.
                                <a href=\"";
                // line 137
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
                yield "\" class=\"text-blue-600 hover:underline\">
                                    Se connecter
                                </a>
                            </p>
                        ";
            }
            // line 142
            yield "
                        ";
            // line 144
            yield "                        ";
            if (Twig\Extension\CoreExtension::testEmpty((isset($context["forumItems"]) || array_key_exists("forumItems", $context) ? $context["forumItems"] : (function () { throw new RuntimeError('Variable "forumItems" does not exist.', 144, $this->source); })()))) {
                // line 145
                yield "                            <p class=\"text-gray-500 text-sm\">Aucun message ou notification pour l'instant. Soyez le premier à écrire !</p>
                        ";
            } else {
                // line 147
                yield "                            <ul class=\"space-y-3\">
                                ";
                // line 148
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable((isset($context["forumItems"]) || array_key_exists("forumItems", $context) ? $context["forumItems"] : (function () { throw new RuntimeError('Variable "forumItems" does not exist.', 148, $this->source); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 149
                    yield "                                    ";
                    if ((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "type", [], "any", false, false, false, 149) == "notification")) {
                        // line 150
                        yield "                                        ";
                        // line 151
                        yield "                                        ";
                        $context["notif"] = CoreExtension::getAttribute($this->env, $this->source, $context["item"], "item", [], "any", false, false, false, 151);
                        // line 152
                        yield "                                        <li class=\"bg-blue-50 border-l-4 border-blue-400 rounded px-3 py-2 text-sm\">
                                            <div class=\"flex justify-between items-start mb-1\">
                                                <div class=\"flex-1\">
                                                    <span class=\"text-blue-800 font-medium\">
                                                        ";
                        // line 156
                        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["notif"]) || array_key_exists("notif", $context) ? $context["notif"] : (function () { throw new RuntimeError('Variable "notif" does not exist.', 156, $this->source); })()), "type", [], "any", false, false, false, 156) == "tag_created")) {
                            // line 157
                            yield "                                                            📍 Tag créé
                                                        ";
                        } elseif ((CoreExtension::getAttribute($this->env, $this->source,                         // line 158
(isset($context["notif"]) || array_key_exists("notif", $context) ? $context["notif"] : (function () { throw new RuntimeError('Variable "notif" does not exist.', 158, $this->source); })()), "type", [], "any", false, false, false, 158) == "agenda_routine_created")) {
                            // line 159
                            yield "                                                            📅 Routine créée
                                                        ";
                        } elseif ((CoreExtension::getAttribute($this->env, $this->source,                         // line 160
(isset($context["notif"]) || array_key_exists("notif", $context) ? $context["notif"] : (function () { throw new RuntimeError('Variable "notif" does not exist.', 160, $this->source); })()), "type", [], "any", false, false, false, 160) == "agenda_reserved")) {
                            // line 161
                            yield "                                                            ✅ Créneau réservé
                                                        ";
                        } elseif ((CoreExtension::getAttribute($this->env, $this->source,                         // line 162
(isset($context["notif"]) || array_key_exists("notif", $context) ? $context["notif"] : (function () { throw new RuntimeError('Variable "notif" does not exist.', 162, $this->source); })()), "type", [], "any", false, false, false, 162) == "article_created")) {
                            // line 163
                            yield "                                                            📄 Article créé
                                                        ";
                        } elseif ((CoreExtension::getAttribute($this->env, $this->source,                         // line 164
(isset($context["notif"]) || array_key_exists("notif", $context) ? $context["notif"] : (function () { throw new RuntimeError('Variable "notif" does not exist.', 164, $this->source); })()), "type", [], "any", false, false, false, 164) == "wiki_child_created")) {
                            // line 165
                            yield "                                                            🌿 Wiki enfant créé
                                                        ";
                        } else {
                            // line 167
                            yield "                                                            ℹ️ Notification
                                                        ";
                        }
                        // line 169
                        yield "                                                    </span>
                                                    ";
                        // line 170
                        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["item"], "authorName", [], "any", false, false, false, 170)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                            // line 171
                            yield "                                                        <span class=\"text-blue-600 text-xs ml-2\">
                                                            par ";
                            // line 172
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "authorName", [], "any", false, false, false, 172), "html", null, true);
                            yield "
                                                        </span>
                                                    ";
                        }
                        // line 175
                        yield "                                                </div>
                                                <span class=\"text-xs text-blue-500\">
                                                    ";
                        // line 177
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["notif"]) || array_key_exists("notif", $context) ? $context["notif"] : (function () { throw new RuntimeError('Variable "notif" does not exist.', 177, $this->source); })()), "createdAt", [], "any", false, false, false, 177), "d/m/Y H:i"), "html", null, true);
                        yield "
                                                </span>
                                            </div>
                                            <p class=\"text-blue-900 mt-1\">
                                                ";
                        // line 181
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["notif"]) || array_key_exists("notif", $context) ? $context["notif"] : (function () { throw new RuntimeError('Variable "notif" does not exist.', 181, $this->source); })()), "content", [], "any", false, false, false, 181), "html", null, true);
                        yield "
                                            </p>
                                        </li>
                                    ";
                    } else {
                        // line 185
                        yield "                                        ";
                        // line 186
                        yield "                                        ";
                        $context["m"] = CoreExtension::getAttribute($this->env, $this->source, $context["item"], "item", [], "any", false, false, false, 186);
                        // line 187
                        yield "                                        <li class=\"bg-white border border-gray-200 rounded-md px-3 py-2 text-sm\">
                                            <div class=\"flex justify-between items-center mb-1\">
                                                <span class=\"font-semibold text-gray-800\">
                                                    ";
                        // line 190
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "authorName", [], "any", false, false, false, 190), "html", null, true);
                        yield "
                                                </span>
                                                <span class=\"text-xs text-gray-400\">
                                                    ";
                        // line 193
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["m"]) || array_key_exists("m", $context) ? $context["m"] : (function () { throw new RuntimeError('Variable "m" does not exist.', 193, $this->source); })()), "createdAt", [], "any", false, false, false, 193), "d/m/Y H:i"), "html", null, true);
                        yield "
                                                </span>
                                            </div>
                                            <p class=\"text-gray-700 whitespace-pre-line\">
                                                ";
                        // line 197
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["m"]) || array_key_exists("m", $context) ? $context["m"] : (function () { throw new RuntimeError('Variable "m" does not exist.', 197, $this->source); })()), "content", [], "any", false, false, false, 197), "html", null, true);
                        yield "
                                            </p>
                                        </li>
                                    ";
                    }
                    // line 201
                    yield "                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 202
                yield "                            </ul>
                        ";
            }
            // line 204
            yield "                    </div>
                ";
        }
        // line 206
        yield "            </div>

            ";
        // line 209
        yield "            <div class=\"mt-10 border-t pt-6\">
                <h2 class=\"text-xl font-semibold mb-4\">Localisation</h2>

                ";
        // line 213
        yield "                ";
        if (Twig\Extension\CoreExtension::testEmpty((isset($context["locTags"]) || array_key_exists("locTags", $context) ? $context["locTags"] : (function () { throw new RuntimeError('Variable "locTags" does not exist.', 213, $this->source); })()))) {
            // line 214
            yield "                    <p class=\"text-gray-500 text-sm mb-4\">
                        Aucun tag de localisation pour l’instant.
                    </p>
                ";
        } else {
            // line 218
            yield "                    <div class=\"flex flex-wrap gap-2 mb-4\">
                        ";
            // line 219
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["locTags"]) || array_key_exists("locTags", $context) ? $context["locTags"] : (function () { throw new RuntimeError('Variable "locTags" does not exist.', 219, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
                // line 220
                yield "                            <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_tag_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["tag"], "id", [], "any", false, false, false, 220)]), "html", null, true);
                yield "\"
                               class=\"inline-flex items-center px-2 py-1 rounded-full text-xs
                                      bg-gray-100 text-gray-700 border border-gray-200 hover:bg-gray-200\">
                                ";
                // line 223
                if (((CoreExtension::getAttribute($this->env, $this->source, $context["tag"], "type", [], "any", false, false, false, 223) == "custom") && CoreExtension::getAttribute($this->env, $this->source, $context["tag"], "description", [], "any", false, false, false, 223))) {
                    // line 224
                    yield "                                    ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["tag"], "description", [], "any", false, false, false, 224), "html", null, true);
                    yield " <span class=\"ml-1 text-[10px] uppercase text-gray-400\">(";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["tag"], "name", [], "any", false, false, false, 224), "html", null, true);
                    yield ")</span>
                                ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 225
$context["tag"], "type", [], "any", false, false, false, 225) == "custom")) {
                    // line 226
                    yield "                                    ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["tag"], "name", [], "any", false, false, false, 226), "html", null, true);
                    yield "
                                ";
                } else {
                    // line 228
                    yield "                                    ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["tag"], "name", [], "any", false, false, false, 228), "html", null, true);
                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["tag"], "type", [], "any", false, false, false, 228)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        yield " <span class=\"ml-1 text-[10px] uppercase text-gray-400\">(";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["tag"], "type", [], "any", false, false, false, 228), "html", null, true);
                        yield ")</span>";
                    }
                    // line 229
                    yield "                                ";
                }
                // line 230
                yield "                            </a>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['tag'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 232
            yield "                    </div>
                ";
        }
        // line 234
        yield "
                ";
        // line 235
        if ((($tmp = (isset($context["isOwner"]) || array_key_exists("isOwner", $context) ? $context["isOwner"] : (function () { throw new RuntimeError('Variable "isOwner" does not exist.', 235, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 236
            yield "                    ";
            // line 237
            yield "                    ";
            if ((($tmp =  !(isset($context["hasOfficialTags"]) || array_key_exists("hasOfficialTags", $context) ? $context["hasOfficialTags"] : (function () { throw new RuntimeError('Variable "hasOfficialTags" does not exist.', 237, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 238
                yield "                        <div class=\"mt-4 mb-6\">
                            <h3 class=\"text-sm font-semibold mb-2\">Ajouter depuis la base officielle (adresses 68)</h3>
                            <form method=\"get\" action=\"";
                // line 240
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_wiki_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 240, $this->source); })()), "id", [], "any", false, false, false, 240)]), "html", null, true);
                yield "\" class=\"flex flex-col sm:flex-row gap-2\">
                                <input
                                    type=\"search\"
                                    name=\"loc_q\"
                                    value=\"";
                // line 244
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["locationSearchQuery"]) || array_key_exists("locationSearchQuery", $context) ? $context["locationSearchQuery"] : (function () { throw new RuntimeError('Variable "locationSearchQuery" does not exist.', 244, $this->source); })()), "html", null, true);
                yield "\"
                                    class=\"flex-1 px-3 py-2 rounded-md border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500\"
                                    placeholder=\"Ex : 7 rue de la mairie Colmar ou 68000 Colmar...\"
                                >
                                <button
                                    type=\"submit\"
                                    class=\"px-3 py-2 bg-blue-600 text-white text-sm rounded-md hover:bg-blue-700\"
                                >
                                    Chercher
                                </button>
                            </form>

                            ";
                // line 256
                if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty((isset($context["locationSearchQuery"]) || array_key_exists("locationSearchQuery", $context) ? $context["locationSearchQuery"] : (function () { throw new RuntimeError('Variable "locationSearchQuery" does not exist.', 256, $this->source); })()))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 257
                    yield "                                <p class=\"mt-2 text-xs text-gray-500\">
                                    Résultats pour « ";
                    // line 258
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["locationSearchQuery"]) || array_key_exists("locationSearchQuery", $context) ? $context["locationSearchQuery"] : (function () { throw new RuntimeError('Variable "locationSearchQuery" does not exist.', 258, $this->source); })()), "html", null, true);
                    yield " » :
                                </p>

                                ";
                    // line 261
                    if (Twig\Extension\CoreExtension::testEmpty((isset($context["locationSearchResults"]) || array_key_exists("locationSearchResults", $context) ? $context["locationSearchResults"] : (function () { throw new RuntimeError('Variable "locationSearchResults" does not exist.', 261, $this->source); })()))) {
                        // line 262
                        yield "                                    <p class=\"text-gray-500 text-sm mt-1\">Aucune adresse trouvée.</p>
                                ";
                    } else {
                        // line 264
                        yield "                                    <ul class=\"mt-2 space-y-1 text-sm\">
                                        ";
                        // line 265
                        $context['_parent'] = $context;
                        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["locationSearchResults"]) || array_key_exists("locationSearchResults", $context) ? $context["locationSearchResults"] : (function () { throw new RuntimeError('Variable "locationSearchResults" does not exist.', 265, $this->source); })()));
                        foreach ($context['_seq'] as $context["_key"] => $context["r"]) {
                            // line 266
                            yield "                                            <li class=\"flex flex-col sm:flex-row sm:items-center sm:justify-between bg-white border border-gray-200 rounded px-3 py-2\">
                                                <div class=\"text-gray-800\">
                                                    <div class=\"font-semibold\">
                                                        ";
                            // line 269
                            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["r"], "numero", [], "any", false, false, false, 269)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["r"], "numero", [], "any", false, false, false, 269), "html", null, true);
                                yield " ";
                            }
                            // line 270
                            yield "                                                        ";
                            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["r"], "nom_voie", [], "any", false, false, false, 270)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["r"], "nom_voie", [], "any", false, false, false, 270), "html", null, true);
                            }
                            // line 271
                            yield "                                                    </div>
                                                    <div class=\"text-gray-600 text-xs\">
                                                        France &gt; Grand Est &gt; ";
                            // line 273
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["r"], "nom_commune", [], "any", false, false, false, 273), "html", null, true);
                            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["r"], "code_postal", [], "any", false, false, false, 273)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                                yield " (";
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["r"], "code_postal", [], "any", false, false, false, 273), "html", null, true);
                                yield ")";
                            }
                            // line 274
                            yield "                                                    </div>
                                                </div>
                                                <form method=\"post\"
                                                      action=\"";
                            // line 277
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_wiki_location_attach", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 277, $this->source); })()), "id", [], "any", false, false, false, 277), "externalId" => CoreExtension::getAttribute($this->env, $this->source, $context["r"], "id", [], "any", false, false, false, 277)]), "html", null, true);
                            yield "\"
                                                      class=\"mt-2 sm:mt-0\"
                                                >
                                                    <input type=\"hidden\" name=\"_token\" value=\"";
                            // line 280
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken((("attach_location" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 280, $this->source); })()), "id", [], "any", false, false, false, 280)) . CoreExtension::getAttribute($this->env, $this->source, $context["r"], "id", [], "any", false, false, false, 280))), "html", null, true);
                            yield "\">
                                                    <button class=\"px-2 py-1 text-xs bg-green-600 text-white rounded hover:bg-green-700\">
                                                        Associer
                                                    </button>
                                                </form>
                                            </li>
                                        ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_key'], $context['r'], $context['_parent']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 287
                        yield "                                    </ul>
                                ";
                    }
                    // line 289
                    yield "                            ";
                }
                // line 290
                yield "                        </div>
                    ";
            } else {
                // line 292
                yield "                        <div class=\"mt-4 mb-6 p-3 bg-blue-50 border border-blue-200 rounded-md\">
                            <p class=\"text-sm text-blue-800\">
                                <strong>Une adresse officielle est déjà associée à ce wiki.</strong><br>
                                <span class=\"text-xs text-blue-600\">Vous ne pouvez ajouter qu'une seule adresse officielle. Vous pouvez toujours ajouter des tags personnalisés ci-dessous.</span>
                            </p>
                        </div>
                    ";
            }
            // line 299
            yield "
                    ";
            // line 301
            yield "                    <div class=\"mt-4\">
                        <h3 class=\"text-sm font-semibold mb-2\">Ajouter un tag personnalisé (ex : étage, bâtiment...)</h3>
                        ";
            // line 303
            yield             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["customLocationForm"]) || array_key_exists("customLocationForm", $context) ? $context["customLocationForm"] : (function () { throw new RuntimeError('Variable "customLocationForm" does not exist.', 303, $this->source); })()), 'form_start');
            yield "
                            <div class=\"space-y-3\">
                                ";
            // line 305
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["customLocationForm"]) || array_key_exists("customLocationForm", $context) ? $context["customLocationForm"] : (function () { throw new RuntimeError('Variable "customLocationForm" does not exist.', 305, $this->source); })()), "title", [], "any", false, false, false, 305), 'row');
            yield "
                                ";
            // line 306
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["customLocationForm"]) || array_key_exists("customLocationForm", $context) ? $context["customLocationForm"] : (function () { throw new RuntimeError('Variable "customLocationForm" does not exist.', 306, $this->source); })()), "description", [], "any", false, false, false, 306), 'row');
            yield "
                            </div>
                            <button class=\"mt-2 px-3 py-1.5 bg-purple-600 text-white rounded-md text-sm hover:bg-purple-700\">
                                Ajouter le tag
                            </button>
                        ";
            // line 311
            yield             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["customLocationForm"]) || array_key_exists("customLocationForm", $context) ? $context["customLocationForm"] : (function () { throw new RuntimeError('Variable "customLocationForm" does not exist.', 311, $this->source); })()), 'form_end');
            yield "
                    </div>
                ";
        }
        // line 314
        yield "            </div>

            ";
        // line 317
        yield "            <div class=\"mt-10 border-t pt-6\">
                <h2 class=\"text-xl font-semibold mb-4\">Wikis enfants</h2>

                ";
        // line 320
        if (Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 320, $this->source); })()), "children", [], "any", false, false, false, 320))) {
            // line 321
            yield "                    <p class=\"text-gray-500\">Aucun wiki enfant pour l’instant.</p>
                ";
        } else {
            // line 323
            yield "                    <ul class=\"space-y-3\">
                        ";
            // line 324
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 324, $this->source); })()), "children", [], "any", false, false, false, 324));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 325
                yield "                            <li class=\"border border-gray-200 rounded p-3 bg-gray-50 flex justify-between items-center\">
                                <div>
                                    <a href=\"";
                // line 327
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_wiki_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["child"], "id", [], "any", false, false, false, 327)]), "html", null, true);
                yield "\" class=\"font-semibold text-blue-600 hover:underline\">
                                        ";
                // line 328
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["child"], "title", [], "any", false, false, false, 328), "html", null, true);
                yield "
                                    </a>
                                </div>
                            </li>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['child'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 333
            yield "                    </ul>
                ";
        }
        // line 335
        yield "            </div>

            ";
        // line 337
        if (((isset($context["isOwner"]) || array_key_exists("isOwner", $context) ? $context["isOwner"] : (function () { throw new RuntimeError('Variable "isOwner" does not exist.', 337, $this->source); })()) &&  !(null === (isset($context["childWikiForm"]) || array_key_exists("childWikiForm", $context) ? $context["childWikiForm"] : (function () { throw new RuntimeError('Variable "childWikiForm" does not exist.', 337, $this->source); })())))) {
            // line 338
            yield "                ";
            // line 339
            yield "                <div class=\"mt-8 border-t pt-6\">
                    <h2 class=\"text-xl font-semibold mb-4\">Créer un wiki enfant</h2>
                    ";
            // line 341
            yield             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["childWikiForm"]) || array_key_exists("childWikiForm", $context) ? $context["childWikiForm"] : (function () { throw new RuntimeError('Variable "childWikiForm" does not exist.', 341, $this->source); })()), 'form_start');
            yield "
                        <div class=\"space-y-4\">
                            ";
            // line 343
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["childWikiForm"]) || array_key_exists("childWikiForm", $context) ? $context["childWikiForm"] : (function () { throw new RuntimeError('Variable "childWikiForm" does not exist.', 343, $this->source); })()), "title", [], "any", false, false, false, 343), 'row');
            yield "
                            ";
            // line 344
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["childWikiForm"]) || array_key_exists("childWikiForm", $context) ? $context["childWikiForm"] : (function () { throw new RuntimeError('Variable "childWikiForm" does not exist.', 344, $this->source); })()), "imageFile", [], "any", false, false, false, 344), 'row');
            yield "
                        </div>
                        <button class=\"mt-4 px-4 py-2 bg-green-600 text-white rounded hover:bg-green-700\">
                            Créer le wiki enfant
                        </button>
                    ";
            // line 349
            yield             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["childWikiForm"]) || array_key_exists("childWikiForm", $context) ? $context["childWikiForm"] : (function () { throw new RuntimeError('Variable "childWikiForm" does not exist.', 349, $this->source); })()), 'form_end');
            yield "
                </div>
            ";
        }
        // line 352
        yield "
            ";
        // line 353
        if (((isset($context["isOwner"]) || array_key_exists("isOwner", $context) ? $context["isOwner"] : (function () { throw new RuntimeError('Variable "isOwner" does not exist.', 353, $this->source); })()) &&  !(null === (isset($context["agendaForm"]) || array_key_exists("agendaForm", $context) ? $context["agendaForm"] : (function () { throw new RuntimeError('Variable "agendaForm" does not exist.', 353, $this->source); })())))) {
            // line 354
            yield "                ";
            // line 355
            yield "                <div class=\"mt-8 border-t pt-6\">
                    <h2 class=\"text-xl font-semibold mb-4\">Ajouter une routine de créneaux</h2>
                    ";
            // line 357
            yield             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["agendaForm"]) || array_key_exists("agendaForm", $context) ? $context["agendaForm"] : (function () { throw new RuntimeError('Variable "agendaForm" does not exist.', 357, $this->source); })()), 'form_start');
            yield "
                        <div class=\"space-y-4\">
                            ";
            // line 359
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["agendaForm"]) || array_key_exists("agendaForm", $context) ? $context["agendaForm"] : (function () { throw new RuntimeError('Variable "agendaForm" does not exist.', 359, $this->source); })()), "title", [], "any", false, false, false, 359), 'row');
            yield "
                            ";
            // line 360
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["agendaForm"]) || array_key_exists("agendaForm", $context) ? $context["agendaForm"] : (function () { throw new RuntimeError('Variable "agendaForm" does not exist.', 360, $this->source); })()), "startTime", [], "any", false, false, false, 360), 'row');
            yield "
                            ";
            // line 361
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["agendaForm"]) || array_key_exists("agendaForm", $context) ? $context["agendaForm"] : (function () { throw new RuntimeError('Variable "agendaForm" does not exist.', 361, $this->source); })()), "endTime", [], "any", false, false, false, 361), 'row');
            yield "
                            ";
            // line 362
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["agendaForm"]) || array_key_exists("agendaForm", $context) ? $context["agendaForm"] : (function () { throw new RuntimeError('Variable "agendaForm" does not exist.', 362, $this->source); })()), "daysOfWeek", [], "any", false, false, false, 362), 'row');
            yield "
                            ";
            // line 363
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["agendaForm"]) || array_key_exists("agendaForm", $context) ? $context["agendaForm"] : (function () { throw new RuntimeError('Variable "agendaForm" does not exist.', 363, $this->source); })()), "capacity", [], "any", false, false, false, 363), 'row');
            yield "
                        </div>
                        <button class=\"mt-4 px-4 py-2 bg-purple-600 text-white rounded hover:bg-purple-700\">
                            Enregistrer la routine
                        </button>
                    ";
            // line 368
            yield             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["agendaForm"]) || array_key_exists("agendaForm", $context) ? $context["agendaForm"] : (function () { throw new RuntimeError('Variable "agendaForm" does not exist.', 368, $this->source); })()), 'form_end');
            yield "
                </div>

                ";
            // line 372
            yield "                <div class=\"mt-8 border-t pt-6\">
                    <h2 class=\"text-xl font-semibold mb-4\">Routines existantes</h2>

                    ";
            // line 375
            $context["patterns"] = (((array_key_exists("patterns", $context) &&  !(null === $context["patterns"]))) ? ($context["patterns"]) : ([]));
            // line 376
            yield "
                    ";
            // line 377
            if (Twig\Extension\CoreExtension::testEmpty((isset($context["patterns"]) || array_key_exists("patterns", $context) ? $context["patterns"] : (function () { throw new RuntimeError('Variable "patterns" does not exist.', 377, $this->source); })()))) {
                // line 378
                yield "                        <p class=\"text-gray-500 text-sm\">Aucune routine pour l’instant.</p>
                    ";
            } else {
                // line 380
                yield "                        <table class=\"min-w-full text-sm text-left border border-gray-200 rounded overflow-hidden\">
                            <thead class=\"bg-gray-50\">
                                <tr>
                                    <th class=\"px-3 py-2\">Titre</th>
                                    <th class=\"px-3 py-2\">Jour</th>
                                    <th class=\"px-3 py-2\">Heure</th>
                                    <th class=\"px-3 py-2\">Capacité</th>
                                    <th class=\"px-3 py-2 text-right\">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                ";
                // line 391
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable((isset($context["patterns"]) || array_key_exists("patterns", $context) ? $context["patterns"] : (function () { throw new RuntimeError('Variable "patterns" does not exist.', 391, $this->source); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["pattern"]) {
                    // line 392
                    yield "                                    <tr class=\"border-t border-gray-200\">
                                        <td class=\"px-3 py-2\">";
                    // line 393
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["pattern"], "title", [], "any", false, false, false, 393), "html", null, true);
                    yield "</td>
                                        <td class=\"px-3 py-2\">
                                            ";
                    // line 395
                    $context["d"] = CoreExtension::getAttribute($this->env, $this->source, $context["pattern"], "dayOfWeek", [], "any", false, false, false, 395);
                    // line 396
                    yield "                                            ";
                    if (((isset($context["d"]) || array_key_exists("d", $context) ? $context["d"] : (function () { throw new RuntimeError('Variable "d" does not exist.', 396, $this->source); })()) == 1)) {
                        yield "Lundi";
                    } elseif (((isset($context["d"]) || array_key_exists("d", $context) ? $context["d"] : (function () { throw new RuntimeError('Variable "d" does not exist.', 396, $this->source); })()) == 2)) {
                        yield "Mardi";
                    } elseif (((isset($context["d"]) || array_key_exists("d", $context) ? $context["d"] : (function () { throw new RuntimeError('Variable "d" does not exist.', 396, $this->source); })()) == 3)) {
                        yield "Mercredi";
                    } elseif (((isset($context["d"]) || array_key_exists("d", $context) ? $context["d"] : (function () { throw new RuntimeError('Variable "d" does not exist.', 396, $this->source); })()) == 4)) {
                        yield "Jeudi";
                    } elseif (((isset($context["d"]) || array_key_exists("d", $context) ? $context["d"] : (function () { throw new RuntimeError('Variable "d" does not exist.', 396, $this->source); })()) == 5)) {
                        yield "Vendredi";
                    } elseif (((isset($context["d"]) || array_key_exists("d", $context) ? $context["d"] : (function () { throw new RuntimeError('Variable "d" does not exist.', 396, $this->source); })()) == 6)) {
                        yield "Samedi";
                    } else {
                        yield "Dimanche";
                    }
                    // line 397
                    yield "                                        </td>
                                        <td class=\"px-3 py-2\">
                                            ";
                    // line 399
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["pattern"], "startTime", [], "any", false, false, false, 399), "H:i"), "html", null, true);
                    yield " → ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["pattern"], "endTime", [], "any", false, false, false, 399), "H:i"), "html", null, true);
                    yield "
                                        </td>
                                        <td class=\"px-3 py-2\">";
                    // line 401
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["pattern"], "capacity", [], "any", false, false, false, 401), "html", null, true);
                    yield "</td>
                                        <td class=\"px-3 py-2 text-right\">
                                            <form method=\"post\"
                                                  action=\"";
                    // line 404
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_wiki_pattern_delete", ["wikiId" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 404, $this->source); })()), "id", [], "any", false, false, false, 404), "id" => CoreExtension::getAttribute($this->env, $this->source, $context["pattern"], "id", [], "any", false, false, false, 404)]), "html", null, true);
                    yield "\"
                                                  onsubmit=\"return confirm('Supprimer cette routine ?');\">
                                                <input type=\"hidden\" name=\"_token\" value=\"";
                    // line 406
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete_pattern" . CoreExtension::getAttribute($this->env, $this->source, $context["pattern"], "id", [], "any", false, false, false, 406))), "html", null, true);
                    yield "\">
                                                <button class=\"text-red-500 hover:text-red-700 text-xs font-semibold\">
                                                    Supprimer
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['pattern'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 414
                yield "                            </tbody>
                        </table>
                    ";
            }
            // line 417
            yield "                </div>
            ";
        }
        // line 419
        yield "
            ";
        // line 420
        if ((($tmp = (isset($context["isOwner"]) || array_key_exists("isOwner", $context) ? $context["isOwner"] : (function () { throw new RuntimeError('Variable "isOwner" does not exist.', 420, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 421
            yield "                ";
            // line 422
            yield "                <div class=\"flex justify-end mb-4 mt-6\">
                    <form method=\"post\" action=\"";
            // line 423
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_wiki_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 423, $this->source); })()), "id", [], "any", false, false, false, 423)]), "html", null, true);
            yield "\" onsubmit=\"return confirm('Sûr de vouloir supprimer ça ?');\">
                        <input type=\"hidden\" name=\"_token\" value=\"";
            // line 424
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 424, $this->source); })()), "id", [], "any", false, false, false, 424))), "html", null, true);
            yield "\">
                        <button class=\"text-red-500 hover:text-red-700 text-sm font-bold underline\">
                            Supprimer cette page 🗑️
                        </button>
                    </form>
                </div>
            ";
        }
        // line 431
        yield "        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "wiki/index.html.twig";
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
        return array (  1686 => 431,  1676 => 424,  1672 => 423,  1669 => 422,  1667 => 421,  1665 => 420,  1662 => 419,  1658 => 417,  1653 => 414,  1639 => 406,  1634 => 404,  1628 => 401,  1621 => 399,  1617 => 397,  1600 => 396,  1598 => 395,  1593 => 393,  1590 => 392,  1586 => 391,  1573 => 380,  1569 => 378,  1567 => 377,  1564 => 376,  1562 => 375,  1557 => 372,  1551 => 368,  1543 => 363,  1539 => 362,  1535 => 361,  1531 => 360,  1527 => 359,  1522 => 357,  1518 => 355,  1516 => 354,  1514 => 353,  1511 => 352,  1505 => 349,  1497 => 344,  1493 => 343,  1488 => 341,  1484 => 339,  1482 => 338,  1480 => 337,  1476 => 335,  1472 => 333,  1461 => 328,  1457 => 327,  1453 => 325,  1449 => 324,  1446 => 323,  1442 => 321,  1440 => 320,  1435 => 317,  1431 => 314,  1425 => 311,  1417 => 306,  1413 => 305,  1408 => 303,  1404 => 301,  1401 => 299,  1392 => 292,  1388 => 290,  1385 => 289,  1381 => 287,  1368 => 280,  1362 => 277,  1357 => 274,  1350 => 273,  1346 => 271,  1341 => 270,  1336 => 269,  1331 => 266,  1327 => 265,  1324 => 264,  1320 => 262,  1318 => 261,  1312 => 258,  1309 => 257,  1307 => 256,  1292 => 244,  1285 => 240,  1281 => 238,  1278 => 237,  1276 => 236,  1274 => 235,  1271 => 234,  1267 => 232,  1260 => 230,  1257 => 229,  1249 => 228,  1243 => 226,  1241 => 225,  1234 => 224,  1232 => 223,  1225 => 220,  1221 => 219,  1218 => 218,  1212 => 214,  1209 => 213,  1204 => 209,  1200 => 206,  1196 => 204,  1192 => 202,  1186 => 201,  1179 => 197,  1172 => 193,  1166 => 190,  1161 => 187,  1158 => 186,  1156 => 185,  1149 => 181,  1142 => 177,  1138 => 175,  1132 => 172,  1129 => 171,  1127 => 170,  1124 => 169,  1120 => 167,  1116 => 165,  1114 => 164,  1111 => 163,  1109 => 162,  1106 => 161,  1104 => 160,  1101 => 159,  1099 => 158,  1096 => 157,  1094 => 156,  1088 => 152,  1085 => 151,  1083 => 150,  1080 => 149,  1076 => 148,  1073 => 147,  1069 => 145,  1066 => 144,  1063 => 142,  1055 => 137,  1051 => 135,  1045 => 132,  1038 => 128,  1034 => 127,  1030 => 125,  1027 => 124,  1024 => 122,  1021 => 121,  1015 => 117,  1006 => 111,  1001 => 109,  995 => 105,  992 => 104,  990 => 103,  985 => 100,  975 => 91,  972 => 89,  966 => 86,  958 => 81,  954 => 80,  950 => 79,  945 => 77,  941 => 75,  939 => 74,  937 => 73,  933 => 71,  929 => 69,  922 => 67,  916 => 64,  913 => 63,  910 => 62,  904 => 60,  902 => 59,  898 => 58,  895 => 57,  891 => 56,  888 => 55,  884 => 53,  882 => 52,  877 => 49,  874 => 47,  872 => 44,  869 => 42,  865 => 40,  858 => 38,  855 => 37,  847 => 36,  841 => 34,  839 => 33,  832 => 32,  830 => 31,  823 => 28,  819 => 27,  816 => 26,  813 => 25,  810 => 24,  807 => 22,  801 => 20,  798 => 19,  795 => 17,  793 => 16,  783 => 15,  752 => 13,  157 => 445,  146 => 438,  136 => 437,  127 => 434,  112 => 13,  109 => 11,  99 => 10,  87 => 6,  77 => 5,  60 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}{{ page.title }}{% endblock %}

{% block stylesheets %}
    {{ parent() }}
    <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/fullcalendar@6.1.15/index.global.min.css\">
{% endblock %}

{% block body %}
    
    {# Appel du composant. On passe le titre en attribut. #}
    {% component 'WikiCard' with { title: (page.title), backUrl: '/admin' } %}
        
        {% block content %}
            {# Tout ce qui est ici va aller dans le corps de la card #}
            
            {# Si tu as une image de couverture #}
            {% if page.image %}
                <img src=\"{{ page.image }}\" class=\"w-full h-64 object-cover rounded mb-6 shadow-sm\" alt=\"Cover\">
            {% endif %}

            {# Tags de localisation sous le titre du wiki #}
            {% set locTags = page.locationTags ?? [] %}
            {% if locTags is not empty %}
                <div class=\"mb-4 flex flex-wrap gap-2\">
                        {% for tag in locTags %}
                            <a href=\"{{ path('app_tag_show', {id: tag.id}) }}\"
                               class=\"inline-flex items-center px-2 py-1 rounded-full text-xs
                                      bg-gray-100 text-gray-700 border border-gray-200 hover:bg-gray-200\">
                                {% if tag.type == 'custom' and tag.description %}
                                    {{ tag.description }} <span class=\"ml-1 text-[10px] uppercase text-gray-400\">({{ tag.name }})</span>
                                {% elseif tag.type == 'custom' %}
                                    {{ tag.name }}
                                {% else %}
                                    {{ tag.name }}{% if tag.type %} <span class=\"ml-1 text-[10px] uppercase text-gray-400\">({{ tag.type }})</span>{% endif %}
                                {% endif %}
                            </a>
                        {% endfor %}
                </div>
            {% endif %}

            {# Le contenu Trix (HTML) #}
            {# <div class=\"prose max-w-none\">
                {{ page.content|raw }}
            </div> #}

            {# --- LISTE DES ARTICLES ENFANTS --- #}
            <div class=\"mt-8\">
                <h2 class=\"text-xl font-semibold mb-4\">Articles</h2>

                {% if articles is empty %}
                    <p class=\"text-gray-500\">Aucun article pour l'instant.</p>
                {% else %}
                    <ul class=\"space-y-3\">
                        {% for article in articles %}
                            <li class=\"border border-gray-200 rounded p-3 bg-gray-50\">
                                <h3 class=\"font-semibold text-gray-800\">{{ article.title }}</h3>
                                {% if article.image %}
                                    <img src=\"{{ article.image }}\" class=\"w-full h-48 object-cover rounded mb-3 shadow-sm\" alt=\"\">
                                {% endif %}
                                {% if article.content %}
                                    <p class=\"mt-1 text-gray-700 text-sm\">
                                        {{ article.content }}
                                    </p>
                                {% endif %}
                            </li>
                        {% endfor %}
                    </ul>
                {% endif %}
            </div>

            {% if app.user and articleForm is not null %}
                {# --- FORMULAIRE DE CREATION D'ARTICLE (accessible à tous les utilisateurs connectés) --- #}
                <div class=\"mt-8 border-t pt-6\">
                    <h2 class=\"text-xl font-semibold mb-4\">Ajouter un article</h2>
                    {{ form_start(articleForm) }}
                        <div class=\"space-y-4\">
                            {{ form_row(articleForm.title) }}
                            {{ form_row(articleForm.content) }}
                            {{ form_row(articleForm.imageFile) }}
                        </div>
                        <button class=\"mt-4 px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700\">
                            Enregistrer l'article
                        </button>
                    {{ form_end(articleForm) }}
                </div>
            {% endif %}

            {# --- AGENDA / EMPLOI DU TEMPS --- #}
            <div class=\"mt-10 border-t pt-6\">
                <h2 class=\"text-xl font-semibold mb-4\">Agenda / créneaux disponibles</h2>
                <div id=\"wiki-calendar\" class=\"mt-4 bg-white rounded shadow p-4\"></div>
                <p class=\"mt-2 text-xs text-gray-500\">
                    Clique sur un créneau vert pour réserver ce créneau.
                </p>
            </div>

            {# --- FORUM / DISCUSSION --- #}
            <div class=\"mt-10 border-t pt-6\">
                <h2 class=\"text-xl font-semibold mb-4\">Forum de discussion</h2>

                {% if forum is null %}
                    {% if isOwner %}
                        <p class=\"text-gray-500 text-sm mb-4\">
                            Aucun forum n’a encore été créé pour ce wiki.
                        </p>
                        <form method=\"post\"
                              action=\"{{ path('app_wiki_forum_create', {id: page.id}) }}\"
                              onsubmit=\"return confirm('Créer un forum pour ce wiki ?');\">
                            <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('create_forum' ~ page.id) }}\">
                            <button class=\"px-4 py-2 bg-blue-600 text-white rounded-md text-sm hover:bg-blue-700\">
                                Créer le forum
                            </button>
                        </form>
                    {% else %}
                        <p class=\"text-gray-500 text-sm\">
                            Le forum de ce wiki n’a pas encore été créé.
                        </p>
                    {% endif %}
                {% else %}
                    <div class=\"space-y-4\">
                        {# Formulaire de message en haut #}
                        {% if app.user %}
                            <div class=\"mb-6\">
                                <h3 class=\"text-sm font-semibold mb-2\">Écrire un message</h3>
                                {{ form_start(messageForm) }}
                                    {{ form_row(messageForm.content) }}
                                    <button class=\"mt-2 px-3 py-1.5 bg-blue-600 text-white rounded-md text-sm hover:bg-blue-700\">
                                        Envoyer
                                    </button>
                                {{ form_end(messageForm) }}
                            </div>
                        {% else %}
                            <p class=\"mb-4 text-xs text-gray-500\">
                                Connecte-toi pour participer à la discussion.
                                <a href=\"{{ path('app_login') }}\" class=\"text-blue-600 hover:underline\">
                                    Se connecter
                                </a>
                            </p>
                        {% endif %}

                        {# Messages et notifications mélangés, triés par date (plus récent en haut) #}
                        {% if forumItems is empty %}
                            <p class=\"text-gray-500 text-sm\">Aucun message ou notification pour l'instant. Soyez le premier à écrire !</p>
                        {% else %}
                            <ul class=\"space-y-3\">
                                {% for item in forumItems %}
                                    {% if item.type == 'notification' %}
                                        {# Notification #}
                                        {% set notif = item.item %}
                                        <li class=\"bg-blue-50 border-l-4 border-blue-400 rounded px-3 py-2 text-sm\">
                                            <div class=\"flex justify-between items-start mb-1\">
                                                <div class=\"flex-1\">
                                                    <span class=\"text-blue-800 font-medium\">
                                                        {% if notif.type == 'tag_created' %}
                                                            📍 Tag créé
                                                        {% elseif notif.type == 'agenda_routine_created' %}
                                                            📅 Routine créée
                                                        {% elseif notif.type == 'agenda_reserved' %}
                                                            ✅ Créneau réservé
                                                        {% elseif notif.type == 'article_created' %}
                                                            📄 Article créé
                                                        {% elseif notif.type == 'wiki_child_created' %}
                                                            🌿 Wiki enfant créé
                                                        {% else %}
                                                            ℹ️ Notification
                                                        {% endif %}
                                                    </span>
                                                    {% if item.authorName %}
                                                        <span class=\"text-blue-600 text-xs ml-2\">
                                                            par {{ item.authorName }}
                                                        </span>
                                                    {% endif %}
                                                </div>
                                                <span class=\"text-xs text-blue-500\">
                                                    {{ notif.createdAt|date('d/m/Y H:i') }}
                                                </span>
                                            </div>
                                            <p class=\"text-blue-900 mt-1\">
                                                {{ notif.content }}
                                            </p>
                                        </li>
                                    {% else %}
                                        {# Message #}
                                        {% set m = item.item %}
                                        <li class=\"bg-white border border-gray-200 rounded-md px-3 py-2 text-sm\">
                                            <div class=\"flex justify-between items-center mb-1\">
                                                <span class=\"font-semibold text-gray-800\">
                                                    {{ item.authorName }}
                                                </span>
                                                <span class=\"text-xs text-gray-400\">
                                                    {{ m.createdAt|date('d/m/Y H:i') }}
                                                </span>
                                            </div>
                                            <p class=\"text-gray-700 whitespace-pre-line\">
                                                {{ m.content }}
                                            </p>
                                        </li>
                                    {% endif %}
                                {% endfor %}
                            </ul>
                        {% endif %}
                    </div>
                {% endif %}
            </div>

            {# --- LOCALISATION (TAGS) --- #}
            <div class=\"mt-10 border-t pt-6\">
                <h2 class=\"text-xl font-semibold mb-4\">Localisation</h2>

                {# Affichage des tags existants (section localisation détaillée) #}
                {% if locTags is empty %}
                    <p class=\"text-gray-500 text-sm mb-4\">
                        Aucun tag de localisation pour l’instant.
                    </p>
                {% else %}
                    <div class=\"flex flex-wrap gap-2 mb-4\">
                        {% for tag in locTags %}
                            <a href=\"{{ path('app_tag_show', {id: tag.id}) }}\"
                               class=\"inline-flex items-center px-2 py-1 rounded-full text-xs
                                      bg-gray-100 text-gray-700 border border-gray-200 hover:bg-gray-200\">
                                {% if tag.type == 'custom' and tag.description %}
                                    {{ tag.description }} <span class=\"ml-1 text-[10px] uppercase text-gray-400\">({{ tag.name }})</span>
                                {% elseif tag.type == 'custom' %}
                                    {{ tag.name }}
                                {% else %}
                                    {{ tag.name }}{% if tag.type %} <span class=\"ml-1 text-[10px] uppercase text-gray-400\">({{ tag.type }})</span>{% endif %}
                                {% endif %}
                            </a>
                        {% endfor %}
                    </div>
                {% endif %}

                {% if isOwner %}
                    {# Recherche de localisation via CSV - seulement si pas de tags officiels déjà présents #}
                    {% if not hasOfficialTags %}
                        <div class=\"mt-4 mb-6\">
                            <h3 class=\"text-sm font-semibold mb-2\">Ajouter depuis la base officielle (adresses 68)</h3>
                            <form method=\"get\" action=\"{{ path('app_wiki_show', {id: page.id}) }}\" class=\"flex flex-col sm:flex-row gap-2\">
                                <input
                                    type=\"search\"
                                    name=\"loc_q\"
                                    value=\"{{ locationSearchQuery }}\"
                                    class=\"flex-1 px-3 py-2 rounded-md border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500\"
                                    placeholder=\"Ex : 7 rue de la mairie Colmar ou 68000 Colmar...\"
                                >
                                <button
                                    type=\"submit\"
                                    class=\"px-3 py-2 bg-blue-600 text-white text-sm rounded-md hover:bg-blue-700\"
                                >
                                    Chercher
                                </button>
                            </form>

                            {% if locationSearchQuery is not empty %}
                                <p class=\"mt-2 text-xs text-gray-500\">
                                    Résultats pour « {{ locationSearchQuery }} » :
                                </p>

                                {% if locationSearchResults is empty %}
                                    <p class=\"text-gray-500 text-sm mt-1\">Aucune adresse trouvée.</p>
                                {% else %}
                                    <ul class=\"mt-2 space-y-1 text-sm\">
                                        {% for r in locationSearchResults %}
                                            <li class=\"flex flex-col sm:flex-row sm:items-center sm:justify-between bg-white border border-gray-200 rounded px-3 py-2\">
                                                <div class=\"text-gray-800\">
                                                    <div class=\"font-semibold\">
                                                        {% if r.numero %}{{ r.numero }} {% endif %}
                                                        {% if r.nom_voie %}{{ r.nom_voie }}{% endif %}
                                                    </div>
                                                    <div class=\"text-gray-600 text-xs\">
                                                        France &gt; Grand Est &gt; {{ r.nom_commune }}{% if r.code_postal %} ({{ r.code_postal }}){% endif %}
                                                    </div>
                                                </div>
                                                <form method=\"post\"
                                                      action=\"{{ path('app_wiki_location_attach', {id: page.id, externalId: r.id}) }}\"
                                                      class=\"mt-2 sm:mt-0\"
                                                >
                                                    <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('attach_location' ~ page.id ~ r.id) }}\">
                                                    <button class=\"px-2 py-1 text-xs bg-green-600 text-white rounded hover:bg-green-700\">
                                                        Associer
                                                    </button>
                                                </form>
                                            </li>
                                        {% endfor %}
                                    </ul>
                                {% endif %}
                            {% endif %}
                        </div>
                    {% else %}
                        <div class=\"mt-4 mb-6 p-3 bg-blue-50 border border-blue-200 rounded-md\">
                            <p class=\"text-sm text-blue-800\">
                                <strong>Une adresse officielle est déjà associée à ce wiki.</strong><br>
                                <span class=\"text-xs text-blue-600\">Vous ne pouvez ajouter qu'une seule adresse officielle. Vous pouvez toujours ajouter des tags personnalisés ci-dessous.</span>
                            </p>
                        </div>
                    {% endif %}

                    {# Tags personnalisés #}
                    <div class=\"mt-4\">
                        <h3 class=\"text-sm font-semibold mb-2\">Ajouter un tag personnalisé (ex : étage, bâtiment...)</h3>
                        {{ form_start(customLocationForm) }}
                            <div class=\"space-y-3\">
                                {{ form_row(customLocationForm.title) }}
                                {{ form_row(customLocationForm.description) }}
                            </div>
                            <button class=\"mt-2 px-3 py-1.5 bg-purple-600 text-white rounded-md text-sm hover:bg-purple-700\">
                                Ajouter le tag
                            </button>
                        {{ form_end(customLocationForm) }}
                    </div>
                {% endif %}
            </div>

            {# --- LISTE DES WIKIS ENFANTS --- #}
            <div class=\"mt-10 border-t pt-6\">
                <h2 class=\"text-xl font-semibold mb-4\">Wikis enfants</h2>

                {% if page.children is empty %}
                    <p class=\"text-gray-500\">Aucun wiki enfant pour l’instant.</p>
                {% else %}
                    <ul class=\"space-y-3\">
                        {% for child in page.children %}
                            <li class=\"border border-gray-200 rounded p-3 bg-gray-50 flex justify-between items-center\">
                                <div>
                                    <a href=\"{{ path('app_wiki_show', {id: child.id}) }}\" class=\"font-semibold text-blue-600 hover:underline\">
                                        {{ child.title }}
                                    </a>
                                </div>
                            </li>
                        {% endfor %}
                    </ul>
                {% endif %}
            </div>

            {% if isOwner and childWikiForm is not null %}
                {# --- FORMULAIRE DE CREATION DE WIKI ENFANT (réservé au propriétaire) --- #}
                <div class=\"mt-8 border-t pt-6\">
                    <h2 class=\"text-xl font-semibold mb-4\">Créer un wiki enfant</h2>
                    {{ form_start(childWikiForm) }}
                        <div class=\"space-y-4\">
                            {{ form_row(childWikiForm.title) }}
                            {{ form_row(childWikiForm.imageFile) }}
                        </div>
                        <button class=\"mt-4 px-4 py-2 bg-green-600 text-white rounded hover:bg-green-700\">
                            Créer le wiki enfant
                        </button>
                    {{ form_end(childWikiForm) }}
                </div>
            {% endif %}

            {% if isOwner and agendaForm is not null %}
                {# --- FORMULAIRE DE CREATION DE ROUTINE DE CRENEAUX (plusieurs jours) --- #}
                <div class=\"mt-8 border-t pt-6\">
                    <h2 class=\"text-xl font-semibold mb-4\">Ajouter une routine de créneaux</h2>
                    {{ form_start(agendaForm) }}
                        <div class=\"space-y-4\">
                            {{ form_row(agendaForm.title) }}
                            {{ form_row(agendaForm.startTime) }}
                            {{ form_row(agendaForm.endTime) }}
                            {{ form_row(agendaForm.daysOfWeek) }}
                            {{ form_row(agendaForm.capacity) }}
                        </div>
                        <button class=\"mt-4 px-4 py-2 bg-purple-600 text-white rounded hover:bg-purple-700\">
                            Enregistrer la routine
                        </button>
                    {{ form_end(agendaForm) }}
                </div>

                {# --- LISTE DES ROUTINES EXISTANTES --- #}
                <div class=\"mt-8 border-t pt-6\">
                    <h2 class=\"text-xl font-semibold mb-4\">Routines existantes</h2>

                    {% set patterns = patterns ?? [] %}

                    {% if patterns is empty %}
                        <p class=\"text-gray-500 text-sm\">Aucune routine pour l’instant.</p>
                    {% else %}
                        <table class=\"min-w-full text-sm text-left border border-gray-200 rounded overflow-hidden\">
                            <thead class=\"bg-gray-50\">
                                <tr>
                                    <th class=\"px-3 py-2\">Titre</th>
                                    <th class=\"px-3 py-2\">Jour</th>
                                    <th class=\"px-3 py-2\">Heure</th>
                                    <th class=\"px-3 py-2\">Capacité</th>
                                    <th class=\"px-3 py-2 text-right\">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                {% for pattern in patterns %}
                                    <tr class=\"border-t border-gray-200\">
                                        <td class=\"px-3 py-2\">{{ pattern.title }}</td>
                                        <td class=\"px-3 py-2\">
                                            {% set d = pattern.dayOfWeek %}
                                            {% if d == 1 %}Lundi{% elseif d == 2 %}Mardi{% elseif d == 3 %}Mercredi{% elseif d == 4 %}Jeudi{% elseif d == 5 %}Vendredi{% elseif d == 6 %}Samedi{% else %}Dimanche{% endif %}
                                        </td>
                                        <td class=\"px-3 py-2\">
                                            {{ pattern.startTime|date('H:i') }} → {{ pattern.endTime|date('H:i') }}
                                        </td>
                                        <td class=\"px-3 py-2\">{{ pattern.capacity }}</td>
                                        <td class=\"px-3 py-2 text-right\">
                                            <form method=\"post\"
                                                  action=\"{{ path('app_wiki_pattern_delete', {wikiId: page.id, id: pattern.id}) }}\"
                                                  onsubmit=\"return confirm('Supprimer cette routine ?');\">
                                                <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete_pattern' ~ pattern.id) }}\">
                                                <button class=\"text-red-500 hover:text-red-700 text-xs font-semibold\">
                                                    Supprimer
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                {% endfor %}
                            </tbody>
                        </table>
                    {% endif %}
                </div>
            {% endif %}

            {% if isOwner %}
                {# --- BOUTON DELETE (réservé au propriétaire) --- #}
                <div class=\"flex justify-end mb-4 mt-6\">
                    <form method=\"post\" action=\"{{ path('app_wiki_delete', {'id': page.id}) }}\" onsubmit=\"return confirm('Sûr de vouloir supprimer ça ?');\">
                        <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ page.id) }}\">
                        <button class=\"text-red-500 hover:text-red-700 text-sm font-bold underline\">
                            Supprimer cette page 🗑️
                        </button>
                    </form>
                </div>
            {% endif %}
        {% endblock %}

    {% endcomponent %}

{% endblock %}

{% block javascripts %}
    {{ parent() }}
    <script src=\"https://cdn.jsdelivr.net/npm/fullcalendar@6.1.15/index.global.min.js\"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const calendarEl = document.getElementById('wiki-calendar');
            if (!calendarEl) return;

            const wikiId = {{ page.id }};

            const calendar = new FullCalendar.Calendar(calendarEl, {
                initialView: 'timeGridWeek',
                locale: 'fr',
                timeZone: 'local',
                headerToolbar: {
                    left: 'prev,next today',
                    center: 'title',
                    right: 'dayGridMonth,timeGridWeek,timeGridDay'
                },
                firstDay: 1,
                allDaySlot: false,
                slotMinTime: '00:00:00',
                slotMaxTime: '24:00:00',
                events: function (info, successCallback, failureCallback) {
                    const params = new URLSearchParams({
                        start: info.startStr,
                        end: info.endStr,
                        filters: JSON.stringify({ wikiId: wikiId })
                    });

                    fetch('/fc-load-events?' + params.toString())
                        .then(response => {
                            if (response.status === 204) {
                                return '[]';
                            }
                            if (!response.ok) {
                                throw new Error('Erreur lors du chargement des événements');
                            }
                            return response.text();
                        })
                        .then(text => text ? JSON.parse(text) : [])
                        .then(events => successCallback(events))
                        .catch(error => {
                            console.error(error);
                            failureCallback(error);
                        });
                }
            });

            calendar.render();
        });
    </script>
{% endblock %}", "wiki/index.html.twig", "/home/guillaume/Bureau/atest/aguomangu2/app/templates/wiki/index.html.twig");
    }
}
