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

/* tag/show.html.twig */
class __TwigTemplate_3ef0e8b1ebd1992e0ea4d39858b3fd75 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "tag/show.html.twig"));

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

        yield "Tag ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["tag"]) || array_key_exists("tag", $context) ? $context["tag"] : (function () { throw new RuntimeError('Variable "tag" does not exist.', 3, $this->source); })()), "name", [], "any", false, false, false, 3), "html", null, true);
        
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
    <div class=\"max-w-4xl mx-auto my-8 bg-white shadow rounded-lg p-6\">
        <h1 class=\"text-2xl font-bold text-gray-800 mb-2\">
            ";
        // line 9
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["tag"]) || array_key_exists("tag", $context) ? $context["tag"] : (function () { throw new RuntimeError('Variable "tag" does not exist.', 9, $this->source); })()), "description", [], "any", false, false, false, 9)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["tag"]) || array_key_exists("tag", $context) ? $context["tag"] : (function () { throw new RuntimeError('Variable "tag" does not exist.', 9, $this->source); })()), "description", [], "any", false, false, false, 9), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["tag"]) || array_key_exists("tag", $context) ? $context["tag"] : (function () { throw new RuntimeError('Variable "tag" does not exist.', 9, $this->source); })()), "name", [], "any", false, false, false, 9), "html", null, true)));
        yield "
        </h1>
        
        ";
        // line 13
        yield "        ";
        if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty((isset($context["parents"]) || array_key_exists("parents", $context) ? $context["parents"] : (function () { throw new RuntimeError('Variable "parents" does not exist.', 13, $this->source); })()))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 14
            yield "            <div class=\"mb-3 flex flex-wrap items-center gap-1 text-xs text-gray-600\">
                <span class=\"text-gray-400\">Localisation :</span>
                ";
            // line 16
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["parents"]) || array_key_exists("parents", $context) ? $context["parents"] : (function () { throw new RuntimeError('Variable "parents" does not exist.', 16, $this->source); })()));
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
                // line 17
                yield "                    <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_tag_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["parent"], "id", [], "any", false, false, false, 17)]), "html", null, true);
                yield "\"
                       class=\"text-blue-600 hover:underline\">
                        ";
                // line 19
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["parent"], "name", [], "any", false, false, false, 19), "html", null, true);
                yield "
                    </a>
                    ";
                // line 21
                if ((($tmp =  !CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 21)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 22
                    yield "                        <span class=\"text-gray-400\">›</span>
                    ";
                }
                // line 24
                yield "                ";
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
            // line 25
            yield "                <span class=\"text-gray-400\">›</span>
                <span class=\"font-semibold text-gray-800\">";
            // line 26
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["tag"]) || array_key_exists("tag", $context) ? $context["tag"] : (function () { throw new RuntimeError('Variable "tag" does not exist.', 26, $this->source); })()), "name", [], "any", false, false, false, 26), "html", null, true);
            yield "</span>
            </div>
        ";
        }
        // line 29
        yield "        
        <p class=\"text-xs text-gray-500 mb-4\">
            Tag localisation";
        // line 31
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["tag"]) || array_key_exists("tag", $context) ? $context["tag"] : (function () { throw new RuntimeError('Variable "tag" does not exist.', 31, $this->source); })()), "type", [], "any", false, false, false, 31)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield " (";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["tag"]) || array_key_exists("tag", $context) ? $context["tag"] : (function () { throw new RuntimeError('Variable "tag" does not exist.', 31, $this->source); })()), "type", [], "any", false, false, false, 31), "html", null, true);
            yield ")";
        }
        // line 32
        yield "        </p>

        <div class=\"mb-6\">
            <h2 class=\"text-lg font-semibold mb-2\">Wikis liés à ce tag</h2>
            ";
        // line 36
        if (Twig\Extension\CoreExtension::testEmpty((isset($context["wikis"]) || array_key_exists("wikis", $context) ? $context["wikis"] : (function () { throw new RuntimeError('Variable "wikis" does not exist.', 36, $this->source); })()))) {
            // line 37
            yield "                <p class=\"text-gray-500 text-sm\">Aucun wiki n'est lié à ce tag pour l'instant.</p>
            ";
        } else {
            // line 39
            yield "                <ul class=\"space-y-2\">
                    ";
            // line 40
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["wikis"]) || array_key_exists("wikis", $context) ? $context["wikis"] : (function () { throw new RuntimeError('Variable "wikis" does not exist.', 40, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 41
                yield "                        <li class=\"border border-gray-200 rounded px-3 py-2 flex justify-between items-center text-sm\">
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
            yield "                </ul>
            ";
        }
        // line 52
        yield "        </div>

        <div class=\"mb-6 border-t pt-4\">
            <h2 class=\"text-lg font-semibold mb-2\">Articles liés à ce tag</h2>
            
            ";
        // line 57
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 57, $this->source); })()), "user", [], "any", false, false, false, 57) && (isset($context["articleForm"]) || array_key_exists("articleForm", $context) ? $context["articleForm"] : (function () { throw new RuntimeError('Variable "articleForm" does not exist.', 57, $this->source); })()))) {
            // line 58
            yield "                <div class=\"mb-4 p-3 bg-gray-50 rounded-md\">
                    <h3 class=\"text-sm font-semibold mb-2\">Créer un article</h3>
                    ";
            // line 60
            yield             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["articleForm"]) || array_key_exists("articleForm", $context) ? $context["articleForm"] : (function () { throw new RuntimeError('Variable "articleForm" does not exist.', 60, $this->source); })()), 'form_start');
            yield "
                        <div class=\"space-y-3\">
                            ";
            // line 62
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["articleForm"]) || array_key_exists("articleForm", $context) ? $context["articleForm"] : (function () { throw new RuntimeError('Variable "articleForm" does not exist.', 62, $this->source); })()), "title", [], "any", false, false, false, 62), 'row');
            yield "
                            ";
            // line 63
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["articleForm"]) || array_key_exists("articleForm", $context) ? $context["articleForm"] : (function () { throw new RuntimeError('Variable "articleForm" does not exist.', 63, $this->source); })()), "content", [], "any", false, false, false, 63), 'row');
            yield "
                            ";
            // line 64
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["articleForm"]) || array_key_exists("articleForm", $context) ? $context["articleForm"] : (function () { throw new RuntimeError('Variable "articleForm" does not exist.', 64, $this->source); })()), "imageFile", [], "any", false, false, false, 64), 'row');
            yield "
                        </div>
                        <button class=\"mt-2 px-3 py-1.5 bg-green-600 text-white rounded-md text-sm hover:bg-green-700\">
                            Créer l'article
                        </button>
                    ";
            // line 69
            yield             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["articleForm"]) || array_key_exists("articleForm", $context) ? $context["articleForm"] : (function () { throw new RuntimeError('Variable "articleForm" does not exist.', 69, $this->source); })()), 'form_end');
            yield "
                </div>
            ";
        }
        // line 72
        yield "
            ";
        // line 73
        if (Twig\Extension\CoreExtension::testEmpty((isset($context["articles"]) || array_key_exists("articles", $context) ? $context["articles"] : (function () { throw new RuntimeError('Variable "articles" does not exist.', 73, $this->source); })()))) {
            // line 74
            yield "                <p class=\"text-gray-500 text-sm\">Aucun article n'est lié à ce tag pour l'instant.</p>
            ";
        } else {
            // line 76
            yield "                <ul class=\"space-y-3\">
                    ";
            // line 77
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["articles"]) || array_key_exists("articles", $context) ? $context["articles"] : (function () { throw new RuntimeError('Variable "articles" does not exist.', 77, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
                // line 78
                yield "                        <li class=\"border border-gray-200 rounded-md p-3 bg-white\">
                            <div class=\"flex items-start gap-3\">
                                ";
                // line 80
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["article"], "image", [], "any", false, false, false, 80)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 81
                    yield "                                    <img src=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["article"], "image", [], "any", false, false, false, 81), "html", null, true);
                    yield "\" alt=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["article"], "title", [], "any", false, false, false, 81), "html", null, true);
                    yield "\" class=\"w-24 h-24 object-cover rounded\">
                                ";
                }
                // line 83
                yield "                                <div class=\"flex-1\">
                                    <h3 class=\"font-semibold text-gray-800 mb-1\">";
                // line 84
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["article"], "title", [], "any", false, false, false, 84), "html", null, true);
                yield "</h3>
                                    ";
                // line 85
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["article"], "content", [], "any", false, false, false, 85)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 86
                    yield "                                        <p class=\"text-sm text-gray-600 line-clamp-3\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["article"], "content", [], "any", false, false, false, 86), "html", null, true);
                    yield "</p>
                                    ";
                }
                // line 88
                yield "                                </div>
                            </div>
                        </li>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['article'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 92
            yield "                </ul>
            ";
        }
        // line 94
        yield "        </div>

        <div class=\"mt-6 border-t pt-4\">
            <h2 class=\"text-lg font-semibold mb-2\">Forum du tag</h2>

            ";
        // line 99
        if ((null === (isset($context["forum"]) || array_key_exists("forum", $context) ? $context["forum"] : (function () { throw new RuntimeError('Variable "forum" does not exist.', 99, $this->source); })()))) {
            // line 100
            yield "                <p class=\"text-gray-500 text-sm mb-3\">
                    Aucun forum n’a encore été créé pour ce tag.
                </p>
                ";
            // line 103
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 103, $this->source); })()), "user", [], "any", false, false, false, 103)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 104
                yield "                    <form method=\"post\"
                          action=\"";
                // line 105
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_tag_forum_create", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["tag"]) || array_key_exists("tag", $context) ? $context["tag"] : (function () { throw new RuntimeError('Variable "tag" does not exist.', 105, $this->source); })()), "id", [], "any", false, false, false, 105)]), "html", null, true);
                yield "\"
                          onsubmit=\"return confirm('Créer un forum pour ce tag ?');\">
                        <input type=\"hidden\" name=\"_token\" value=\"";
                // line 107
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("create_forum_tag" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["tag"]) || array_key_exists("tag", $context) ? $context["tag"] : (function () { throw new RuntimeError('Variable "tag" does not exist.', 107, $this->source); })()), "id", [], "any", false, false, false, 107))), "html", null, true);
                yield "\">
                        <button class=\"px-3 py-2 bg-blue-600 text-white rounded-md text-sm hover:bg-blue-700\">
                            Créer le forum
                        </button>
                    </form>
                ";
            } else {
                // line 113
                yield "                    <p class=\"text-xs text-gray-500\">
                        Connecte-toi pour créer un forum pour ce tag.
                    </p>
                ";
            }
            // line 117
            yield "            ";
        } else {
            // line 118
            yield "                <div class=\"space-y-4\">
                    ";
            // line 120
            yield "                    ";
            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 120, $this->source); })()), "user", [], "any", false, false, false, 120) && (isset($context["messageForm"]) || array_key_exists("messageForm", $context) ? $context["messageForm"] : (function () { throw new RuntimeError('Variable "messageForm" does not exist.', 120, $this->source); })()))) {
                // line 121
                yield "                        <div class=\"mb-6\">
                            <h3 class=\"text-sm font-semibold mb-2\">Écrire un message</h3>
                            ";
                // line 123
                yield                 $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["messageForm"]) || array_key_exists("messageForm", $context) ? $context["messageForm"] : (function () { throw new RuntimeError('Variable "messageForm" does not exist.', 123, $this->source); })()), 'form_start');
                yield "
                                ";
                // line 124
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["messageForm"]) || array_key_exists("messageForm", $context) ? $context["messageForm"] : (function () { throw new RuntimeError('Variable "messageForm" does not exist.', 124, $this->source); })()), "content", [], "any", false, false, false, 124), 'row');
                yield "
                                <button class=\"mt-2 px-3 py-1.5 bg-blue-600 text-white rounded-md text-sm hover:bg-blue-700\">
                                    Envoyer
                                </button>
                            ";
                // line 128
                yield                 $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["messageForm"]) || array_key_exists("messageForm", $context) ? $context["messageForm"] : (function () { throw new RuntimeError('Variable "messageForm" does not exist.', 128, $this->source); })()), 'form_end');
                yield "
                        </div>
                    ";
            } elseif ((($tmp =  !CoreExtension::getAttribute($this->env, $this->source,             // line 130
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 130, $this->source); })()), "user", [], "any", false, false, false, 130)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 131
                yield "                        <p class=\"mb-4 text-xs text-gray-500\">
                            Connecte-toi pour participer à la discussion.
                            <a href=\"";
                // line 133
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
                yield "\" class=\"text-blue-600 hover:underline\">
                                Se connecter
                            </a>
                        </p>
                    ";
            }
            // line 138
            yield "
                    ";
            // line 140
            yield "                    ";
            if (Twig\Extension\CoreExtension::testEmpty((isset($context["forumItems"]) || array_key_exists("forumItems", $context) ? $context["forumItems"] : (function () { throw new RuntimeError('Variable "forumItems" does not exist.', 140, $this->source); })()))) {
                // line 141
                yield "                        <p class=\"text-gray-500 text-sm\">Aucun message ou notification pour l'instant. Soyez le premier à écrire !</p>
                    ";
            } else {
                // line 143
                yield "                        <ul class=\"space-y-3\">
                            ";
                // line 144
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable((isset($context["forumItems"]) || array_key_exists("forumItems", $context) ? $context["forumItems"] : (function () { throw new RuntimeError('Variable "forumItems" does not exist.', 144, $this->source); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 145
                    yield "                                ";
                    if ((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "type", [], "any", false, false, false, 145) == "notification")) {
                        // line 146
                        yield "                                    ";
                        // line 147
                        yield "                                    ";
                        $context["notif"] = CoreExtension::getAttribute($this->env, $this->source, $context["item"], "item", [], "any", false, false, false, 147);
                        // line 148
                        yield "                                    <li class=\"bg-blue-50 border-l-4 border-blue-400 rounded px-3 py-2 text-sm\">
                                        <div class=\"flex justify-between items-start mb-1\">
                                            <div class=\"flex-1\">
                                                <span class=\"text-blue-800 font-medium\">
                                                    ";
                        // line 152
                        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["notif"]) || array_key_exists("notif", $context) ? $context["notif"] : (function () { throw new RuntimeError('Variable "notif" does not exist.', 152, $this->source); })()), "type", [], "any", false, false, false, 152) == "tag_created")) {
                            // line 153
                            yield "                                                        📍 Tag créé
                                                    ";
                        } elseif ((CoreExtension::getAttribute($this->env, $this->source,                         // line 154
(isset($context["notif"]) || array_key_exists("notif", $context) ? $context["notif"] : (function () { throw new RuntimeError('Variable "notif" does not exist.', 154, $this->source); })()), "type", [], "any", false, false, false, 154) == "agenda_routine_created")) {
                            // line 155
                            yield "                                                        📅 Routine créée
                                                    ";
                        } elseif ((CoreExtension::getAttribute($this->env, $this->source,                         // line 156
(isset($context["notif"]) || array_key_exists("notif", $context) ? $context["notif"] : (function () { throw new RuntimeError('Variable "notif" does not exist.', 156, $this->source); })()), "type", [], "any", false, false, false, 156) == "agenda_reserved")) {
                            // line 157
                            yield "                                                        ✅ Créneau réservé
                                                    ";
                        } elseif ((CoreExtension::getAttribute($this->env, $this->source,                         // line 158
(isset($context["notif"]) || array_key_exists("notif", $context) ? $context["notif"] : (function () { throw new RuntimeError('Variable "notif" does not exist.', 158, $this->source); })()), "type", [], "any", false, false, false, 158) == "article_created")) {
                            // line 159
                            yield "                                                        📄 Article créé
                                                    ";
                        } elseif ((CoreExtension::getAttribute($this->env, $this->source,                         // line 160
(isset($context["notif"]) || array_key_exists("notif", $context) ? $context["notif"] : (function () { throw new RuntimeError('Variable "notif" does not exist.', 160, $this->source); })()), "type", [], "any", false, false, false, 160) == "wiki_child_created")) {
                            // line 161
                            yield "                                                        🌿 Wiki enfant créé
                                                    ";
                        } else {
                            // line 163
                            yield "                                                        ℹ️ Notification
                                                    ";
                        }
                        // line 165
                        yield "                                                </span>
                                                ";
                        // line 166
                        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["item"], "authorName", [], "any", false, false, false, 166)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                            // line 167
                            yield "                                                    <span class=\"text-blue-600 text-xs ml-2\">
                                                        par ";
                            // line 168
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "authorName", [], "any", false, false, false, 168), "html", null, true);
                            yield "
                                                    </span>
                                                ";
                        }
                        // line 171
                        yield "                                            </div>
                                            <span class=\"text-xs text-blue-500\">
                                                ";
                        // line 173
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["notif"]) || array_key_exists("notif", $context) ? $context["notif"] : (function () { throw new RuntimeError('Variable "notif" does not exist.', 173, $this->source); })()), "createdAt", [], "any", false, false, false, 173), "d/m/Y H:i"), "html", null, true);
                        yield "
                                            </span>
                                        </div>
                                        <p class=\"text-blue-900 mt-1\">
                                            ";
                        // line 177
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["notif"]) || array_key_exists("notif", $context) ? $context["notif"] : (function () { throw new RuntimeError('Variable "notif" does not exist.', 177, $this->source); })()), "content", [], "any", false, false, false, 177), "html", null, true);
                        yield "
                                        </p>
                                    </li>
                                ";
                    } else {
                        // line 181
                        yield "                                    ";
                        // line 182
                        yield "                                    ";
                        $context["m"] = CoreExtension::getAttribute($this->env, $this->source, $context["item"], "item", [], "any", false, false, false, 182);
                        // line 183
                        yield "                                    <li class=\"bg-white border border-gray-200 rounded-md px-3 py-2 text-sm\">
                                        <div class=\"flex justify-between items-center mb-1\">
                                            <span class=\"font-semibold text-gray-800\">
                                                ";
                        // line 186
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "authorName", [], "any", false, false, false, 186), "html", null, true);
                        yield "
                                            </span>
                                            <span class=\"text-xs text-gray-400\">
                                                ";
                        // line 189
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["m"]) || array_key_exists("m", $context) ? $context["m"] : (function () { throw new RuntimeError('Variable "m" does not exist.', 189, $this->source); })()), "createdAt", [], "any", false, false, false, 189), "d/m/Y H:i"), "html", null, true);
                        yield "
                                            </span>
                                        </div>
                                        <p class=\"text-gray-700 whitespace-pre-line\">
                                            ";
                        // line 193
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["m"]) || array_key_exists("m", $context) ? $context["m"] : (function () { throw new RuntimeError('Variable "m" does not exist.', 193, $this->source); })()), "content", [], "any", false, false, false, 193), "html", null, true);
                        yield "
                                        </p>
                                    </li>
                                ";
                    }
                    // line 197
                    yield "                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 198
                yield "                        </ul>
                    ";
            }
            // line 200
            yield "                </div>
            ";
        }
        // line 202
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
        return "tag/show.html.twig";
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
        return array (  531 => 202,  527 => 200,  523 => 198,  517 => 197,  510 => 193,  503 => 189,  497 => 186,  492 => 183,  489 => 182,  487 => 181,  480 => 177,  473 => 173,  469 => 171,  463 => 168,  460 => 167,  458 => 166,  455 => 165,  451 => 163,  447 => 161,  445 => 160,  442 => 159,  440 => 158,  437 => 157,  435 => 156,  432 => 155,  430 => 154,  427 => 153,  425 => 152,  419 => 148,  416 => 147,  414 => 146,  411 => 145,  407 => 144,  404 => 143,  400 => 141,  397 => 140,  394 => 138,  386 => 133,  382 => 131,  380 => 130,  375 => 128,  368 => 124,  364 => 123,  360 => 121,  357 => 120,  354 => 118,  351 => 117,  345 => 113,  336 => 107,  331 => 105,  328 => 104,  326 => 103,  321 => 100,  319 => 99,  312 => 94,  308 => 92,  299 => 88,  293 => 86,  291 => 85,  287 => 84,  284 => 83,  276 => 81,  274 => 80,  270 => 78,  266 => 77,  263 => 76,  259 => 74,  257 => 73,  254 => 72,  248 => 69,  240 => 64,  236 => 63,  232 => 62,  227 => 60,  223 => 58,  221 => 57,  214 => 52,  210 => 50,  199 => 45,  194 => 43,  190 => 41,  186 => 40,  183 => 39,  179 => 37,  177 => 36,  171 => 32,  165 => 31,  161 => 29,  155 => 26,  152 => 25,  138 => 24,  134 => 22,  132 => 21,  127 => 19,  121 => 17,  104 => 16,  100 => 14,  97 => 13,  91 => 9,  86 => 6,  76 => 5,  58 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Tag {{ tag.name }}{% endblock %}

{% block body %}

    <div class=\"max-w-4xl mx-auto my-8 bg-white shadow rounded-lg p-6\">
        <h1 class=\"text-2xl font-bold text-gray-800 mb-2\">
            {{ tag.description ?: tag.name }}
        </h1>
        
        {# Affichage de la hiérarchie des parents #}
        {% if parents is not empty %}
            <div class=\"mb-3 flex flex-wrap items-center gap-1 text-xs text-gray-600\">
                <span class=\"text-gray-400\">Localisation :</span>
                {% for parent in parents %}
                    <a href=\"{{ path('app_tag_show', {id: parent.id}) }}\"
                       class=\"text-blue-600 hover:underline\">
                        {{ parent.name }}
                    </a>
                    {% if not loop.last %}
                        <span class=\"text-gray-400\">›</span>
                    {% endif %}
                {% endfor %}
                <span class=\"text-gray-400\">›</span>
                <span class=\"font-semibold text-gray-800\">{{ tag.name }}</span>
            </div>
        {% endif %}
        
        <p class=\"text-xs text-gray-500 mb-4\">
            Tag localisation{% if tag.type %} ({{ tag.type }}){% endif %}
        </p>

        <div class=\"mb-6\">
            <h2 class=\"text-lg font-semibold mb-2\">Wikis liés à ce tag</h2>
            {% if wikis is empty %}
                <p class=\"text-gray-500 text-sm\">Aucun wiki n'est lié à ce tag pour l'instant.</p>
            {% else %}
                <ul class=\"space-y-2\">
                    {% for page in wikis %}
                        <li class=\"border border-gray-200 rounded px-3 py-2 flex justify-between items-center text-sm\">
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

        <div class=\"mb-6 border-t pt-4\">
            <h2 class=\"text-lg font-semibold mb-2\">Articles liés à ce tag</h2>
            
            {% if app.user and articleForm %}
                <div class=\"mb-4 p-3 bg-gray-50 rounded-md\">
                    <h3 class=\"text-sm font-semibold mb-2\">Créer un article</h3>
                    {{ form_start(articleForm) }}
                        <div class=\"space-y-3\">
                            {{ form_row(articleForm.title) }}
                            {{ form_row(articleForm.content) }}
                            {{ form_row(articleForm.imageFile) }}
                        </div>
                        <button class=\"mt-2 px-3 py-1.5 bg-green-600 text-white rounded-md text-sm hover:bg-green-700\">
                            Créer l'article
                        </button>
                    {{ form_end(articleForm) }}
                </div>
            {% endif %}

            {% if articles is empty %}
                <p class=\"text-gray-500 text-sm\">Aucun article n'est lié à ce tag pour l'instant.</p>
            {% else %}
                <ul class=\"space-y-3\">
                    {% for article in articles %}
                        <li class=\"border border-gray-200 rounded-md p-3 bg-white\">
                            <div class=\"flex items-start gap-3\">
                                {% if article.image %}
                                    <img src=\"{{ article.image }}\" alt=\"{{ article.title }}\" class=\"w-24 h-24 object-cover rounded\">
                                {% endif %}
                                <div class=\"flex-1\">
                                    <h3 class=\"font-semibold text-gray-800 mb-1\">{{ article.title }}</h3>
                                    {% if article.content %}
                                        <p class=\"text-sm text-gray-600 line-clamp-3\">{{ article.content }}</p>
                                    {% endif %}
                                </div>
                            </div>
                        </li>
                    {% endfor %}
                </ul>
            {% endif %}
        </div>

        <div class=\"mt-6 border-t pt-4\">
            <h2 class=\"text-lg font-semibold mb-2\">Forum du tag</h2>

            {% if forum is null %}
                <p class=\"text-gray-500 text-sm mb-3\">
                    Aucun forum n’a encore été créé pour ce tag.
                </p>
                {% if app.user %}
                    <form method=\"post\"
                          action=\"{{ path('app_tag_forum_create', {id: tag.id}) }}\"
                          onsubmit=\"return confirm('Créer un forum pour ce tag ?');\">
                        <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('create_forum_tag' ~ tag.id) }}\">
                        <button class=\"px-3 py-2 bg-blue-600 text-white rounded-md text-sm hover:bg-blue-700\">
                            Créer le forum
                        </button>
                    </form>
                {% else %}
                    <p class=\"text-xs text-gray-500\">
                        Connecte-toi pour créer un forum pour ce tag.
                    </p>
                {% endif %}
            {% else %}
                <div class=\"space-y-4\">
                    {# Formulaire de message en haut #}
                    {% if app.user and messageForm %}
                        <div class=\"mb-6\">
                            <h3 class=\"text-sm font-semibold mb-2\">Écrire un message</h3>
                            {{ form_start(messageForm) }}
                                {{ form_row(messageForm.content) }}
                                <button class=\"mt-2 px-3 py-1.5 bg-blue-600 text-white rounded-md text-sm hover:bg-blue-700\">
                                    Envoyer
                                </button>
                            {{ form_end(messageForm) }}
                        </div>
                    {% elseif not app.user %}
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
    </div>

{% endblock %}


", "tag/show.html.twig", "/home/guillaume/Bureau/aguomangu/app/templates/tag/show.html.twig");
    }
}
