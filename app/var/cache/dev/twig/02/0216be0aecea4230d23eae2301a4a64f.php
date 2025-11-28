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

/* user/profile.html.twig */
class __TwigTemplate_c1efd055739423d936ea108f9d49b655 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/profile.html.twig"));

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

        yield "Mon profil";
        
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
        <h1 class=\"text-2xl font-bold mb-4\">Mon profil</h1>

        <div class=\"mb-6 p-4 bg-blue-50 rounded-lg border border-blue-200\">
            <h2 class=\"text-lg font-semibold mb-3 text-blue-800\">Informations personnelles</h2>
            <p class=\"text-sm text-blue-700 mb-2\">
                <span class=\"font-semibold\">Email :</span> ";
        // line 13
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 13, $this->source); })()), "email", [], "any", false, false, false, 13), "html", null, true);
        yield "
            </p>
            <p class=\"text-sm text-blue-700\">
                <span class=\"font-semibold\">Pseudo :</span> ";
        // line 16
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 16, $this->source); })()), "pseudo", [], "any", false, false, false, 16)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 16, $this->source); })()), "pseudo", [], "any", false, false, false, 16), "html", null, true)) : ("Non défini"));
        yield "
            </p>
        </div>

        <div class=\"border-t pt-6\">
            <h2 class=\"text-lg font-semibold mb-4\">Modifier mes informations</h2>

            ";
        // line 23
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["profileForm"]) || array_key_exists("profileForm", $context) ? $context["profileForm"] : (function () { throw new RuntimeError('Variable "profileForm" does not exist.', 23, $this->source); })()), 'form_start');
        yield "
                <div class=\"space-y-4\">
                    ";
        // line 25
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["profileForm"]) || array_key_exists("profileForm", $context) ? $context["profileForm"] : (function () { throw new RuntimeError('Variable "profileForm" does not exist.', 25, $this->source); })()), "email", [], "any", false, false, false, 25), 'row', ["label" => "Email", "attr" => ["class" => "w-full px-3 py-2 border border-gray-300 rounded-md"]]);
        // line 28
        yield "
                    ";
        // line 29
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["profileForm"]) || array_key_exists("profileForm", $context) ? $context["profileForm"] : (function () { throw new RuntimeError('Variable "profileForm" does not exist.', 29, $this->source); })()), "pseudo", [], "any", false, false, false, 29), 'row', ["label" => "Pseudo", "attr" => ["class" => "w-full px-3 py-2 border border-gray-300 rounded-md"]]);
        // line 32
        yield "
                    <div class=\"p-4 bg-gray-50 rounded-md\">
                        <p class=\"text-sm text-gray-600 mb-3\">
                            <strong>Changer le mot de passe :</strong><br>
                            Laissez vide si vous ne souhaitez pas le modifier.
                        </p>
                        ";
        // line 38
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["profileForm"]) || array_key_exists("profileForm", $context) ? $context["profileForm"] : (function () { throw new RuntimeError('Variable "profileForm" does not exist.', 38, $this->source); })()), "plainPassword", [], "any", false, false, false, 38), "first", [], "any", false, false, false, 38), 'row', ["label" => "Nouveau mot de passe", "attr" => ["class" => "w-full px-3 py-2 border border-gray-300 rounded-md"]]);
        // line 41
        yield "
                        ";
        // line 42
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["profileForm"]) || array_key_exists("profileForm", $context) ? $context["profileForm"] : (function () { throw new RuntimeError('Variable "profileForm" does not exist.', 42, $this->source); })()), "plainPassword", [], "any", false, false, false, 42), "second", [], "any", false, false, false, 42), 'row', ["label" => "Confirmer le mot de passe", "attr" => ["class" => "w-full px-3 py-2 border border-gray-300 rounded-md"]]);
        // line 45
        yield "
                    </div>
                </div>
                <button class=\"mt-4 px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700\">
                    Enregistrer les modifications
                </button>
            ";
        // line 51
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["profileForm"]) || array_key_exists("profileForm", $context) ? $context["profileForm"] : (function () { throw new RuntimeError('Variable "profileForm" does not exist.', 51, $this->source); })()), 'form_end');
        yield "
        </div>

        <div class=\"mt-6 border-t pt-6\">
            <a href=\"";
        // line 55
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_public", ["identifier" => ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 55, $this->source); })()), "pseudo", [], "any", false, false, false, 55)) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 55, $this->source); })()), "pseudo", [], "any", false, false, false, 55)) : (CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 55, $this->source); })()), "email", [], "any", false, false, false, 55)))]), "html", null, true);
        yield "\" 
               class=\"text-blue-600 hover:underline text-sm\">
                ← Retour à mon profil public
            </a>
        </div>

        <div class=\"mt-8 border-t pt-6\">
            <h2 class=\"text-lg font-semibold mb-4 text-red-600\">Zone de danger</h2>
            <div class=\"p-4 bg-red-50 rounded-md border border-red-200\">
                <p class=\"text-sm text-red-700 mb-4\">
                    <strong>Supprimer mon compte</strong><br>
                    Cette action est irréversible. Toutes vos données seront définitivement supprimées.
                </p>
                
                ";
        // line 69
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["deleteForm"]) || array_key_exists("deleteForm", $context) ? $context["deleteForm"] : (function () { throw new RuntimeError('Variable "deleteForm" does not exist.', 69, $this->source); })()), 'form_start', ["attr" => ["onsubmit" => "return confirm(\"Êtes-vous sûr de vouloir supprimer votre compte ? Cette action est irréversible.\");"]]);
        yield "
                    <div class=\"space-y-3\">
                        ";
        // line 71
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["deleteForm"]) || array_key_exists("deleteForm", $context) ? $context["deleteForm"] : (function () { throw new RuntimeError('Variable "deleteForm" does not exist.', 71, $this->source); })()), "password", [], "any", false, false, false, 71), 'row', ["label" => "Confirmez votre mot de passe", "attr" => ["class" => "w-full px-3 py-2 border border-red-300 rounded-md"]]);
        // line 74
        yield "
                        <button type=\"submit\" 
                                class=\"px-4 py-2 bg-red-600 text-white rounded hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-red-500\">
                            Supprimer mon compte
                        </button>
                    </div>
                ";
        // line 80
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["deleteForm"]) || array_key_exists("deleteForm", $context) ? $context["deleteForm"] : (function () { throw new RuntimeError('Variable "deleteForm" does not exist.', 80, $this->source); })()), 'form_end');
        yield "
            </div>
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
        return "user/profile.html.twig";
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
        return array (  184 => 80,  176 => 74,  174 => 71,  169 => 69,  152 => 55,  145 => 51,  137 => 45,  135 => 42,  132 => 41,  130 => 38,  122 => 32,  120 => 29,  117 => 28,  115 => 25,  110 => 23,  100 => 16,  94 => 13,  85 => 6,  75 => 5,  58 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Mon profil{% endblock %}

{% block body %}

    <div class=\"max-w-2xl mx-auto mt-10 bg-white rounded-lg shadow p-6\">
        <h1 class=\"text-2xl font-bold mb-4\">Mon profil</h1>

        <div class=\"mb-6 p-4 bg-blue-50 rounded-lg border border-blue-200\">
            <h2 class=\"text-lg font-semibold mb-3 text-blue-800\">Informations personnelles</h2>
            <p class=\"text-sm text-blue-700 mb-2\">
                <span class=\"font-semibold\">Email :</span> {{ user.email }}
            </p>
            <p class=\"text-sm text-blue-700\">
                <span class=\"font-semibold\">Pseudo :</span> {{ user.pseudo ?: 'Non défini' }}
            </p>
        </div>

        <div class=\"border-t pt-6\">
            <h2 class=\"text-lg font-semibold mb-4\">Modifier mes informations</h2>

            {{ form_start(profileForm) }}
                <div class=\"space-y-4\">
                    {{ form_row(profileForm.email, {
                        'label': 'Email',
                        'attr': {'class': 'w-full px-3 py-2 border border-gray-300 rounded-md'}
                    }) }}
                    {{ form_row(profileForm.pseudo, {
                        'label': 'Pseudo',
                        'attr': {'class': 'w-full px-3 py-2 border border-gray-300 rounded-md'}
                    }) }}
                    <div class=\"p-4 bg-gray-50 rounded-md\">
                        <p class=\"text-sm text-gray-600 mb-3\">
                            <strong>Changer le mot de passe :</strong><br>
                            Laissez vide si vous ne souhaitez pas le modifier.
                        </p>
                        {{ form_row(profileForm.plainPassword.first, {
                            'label': 'Nouveau mot de passe',
                            'attr': {'class': 'w-full px-3 py-2 border border-gray-300 rounded-md'}
                        }) }}
                        {{ form_row(profileForm.plainPassword.second, {
                            'label': 'Confirmer le mot de passe',
                            'attr': {'class': 'w-full px-3 py-2 border border-gray-300 rounded-md'}
                        }) }}
                    </div>
                </div>
                <button class=\"mt-4 px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700\">
                    Enregistrer les modifications
                </button>
            {{ form_end(profileForm) }}
        </div>

        <div class=\"mt-6 border-t pt-6\">
            <a href=\"{{ path('app_user_public', {identifier: user.pseudo ?: user.email}) }}\" 
               class=\"text-blue-600 hover:underline text-sm\">
                ← Retour à mon profil public
            </a>
        </div>

        <div class=\"mt-8 border-t pt-6\">
            <h2 class=\"text-lg font-semibold mb-4 text-red-600\">Zone de danger</h2>
            <div class=\"p-4 bg-red-50 rounded-md border border-red-200\">
                <p class=\"text-sm text-red-700 mb-4\">
                    <strong>Supprimer mon compte</strong><br>
                    Cette action est irréversible. Toutes vos données seront définitivement supprimées.
                </p>
                
                {{ form_start(deleteForm, {'attr': {'onsubmit': 'return confirm(\"Êtes-vous sûr de vouloir supprimer votre compte ? Cette action est irréversible.\");'}}) }}
                    <div class=\"space-y-3\">
                        {{ form_row(deleteForm.password, {
                            'label': 'Confirmez votre mot de passe',
                            'attr': {'class': 'w-full px-3 py-2 border border-red-300 rounded-md'}
                        }) }}
                        <button type=\"submit\" 
                                class=\"px-4 py-2 bg-red-600 text-white rounded hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-red-500\">
                            Supprimer mon compte
                        </button>
                    </div>
                {{ form_end(deleteForm) }}
            </div>
        </div>
    </div>

{% endblock %}

", "user/profile.html.twig", "/home/guillaume/Bureau/aguomangu/app/templates/user/profile.html.twig");
    }
}
