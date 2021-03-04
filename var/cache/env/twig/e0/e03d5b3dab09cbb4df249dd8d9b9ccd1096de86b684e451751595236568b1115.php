<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* home.html.twig */
class __TwigTemplate_2713e3eea2b40d7c0773b37f1854fe8e3d9b643fdf9ae0a507cbefabd0cd948e extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "        Bienvenue chez votre futur partenaire
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "        <div class=\"container\">
            <div class=\"jumbotron mt-3\">
                <h1 class=\"display-3\">Bienvenue chez LineBnB</h1>
                <p class=\"lead\">Nous mettons en relations les voyageurs et les propriétaires qui souhaitent profiter d'opportunités et gagner de l'argent en proposant leurs biens à la location !</p>
                <hr class=\"my-4\">
                <p>Vous êtes voyageur ? Vous voulez voir où vous pourriez loger pour votre prochain déplacement ?</p>
                <p class=\"lead\">
                    <a class=\"btn btn-primary btn-lg\" href=\"#\" role=\"button\">Voir nos offres</a>
                </p>
            </div>
        

            <h2 class=\"my-5\"> Nos produits premiums</h2>

            <div class=\"row\">
                ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["ads"]) || array_key_exists("ads", $context) ? $context["ads"] : (function () { throw new RuntimeError('Variable "ads" does not exist.', 22, $this->source); })()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 23
            echo "                    ";
            $this->loadTemplate("ad/_ad.html.twig", "home.html.twig", 23)->display(twig_array_merge($context, ["ad" => twig_get_attribute($this->env, $this->source, $context["data"], "annonce", [], "any", false, false, false, 23)]));
            // line 24
            echo "                    
                ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo " 
            </div>

            <h2 class=\"my-5\">Nos propriétaires stars !</h2>

            <div class=\"row\">
            ";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 32, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 33
            echo "                <div class=\"col\">
                    <div class=\"card border-secondary mb-3\">
                        <div class=\"card-body\">
                            <h4 class=\"card-title\">";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["data"], "user", [], "any", false, false, false, 36), "fullName", [], "any", false, false, false, 36), "html", null, true);
            echo "</h4>
                            <hr>

                            <div class=\"card-text\">

                                <img src=\"";
            // line 41
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["data"], "user", [], "any", false, false, false, 41), "picture", [], "any", false, false, false, 41), "html", null, true);
            echo "\" alt=\"Avatar de ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["data"], "user", [], "any", false, false, false, 41), "fullName", [], "any", false, false, false, 41), "html", null, true);
            echo "\" class=\"float-left mr-3\"/>
                                <p>";
            // line 42
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["data"], "user", [], "any", false, false, false, 42), "introduction", [], "any", false, false, false, 42), "html", null, true);
            echo "</p>
                                <a href=\"";
            // line 43
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_show", ["slug" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["data"], "user", [], "any", false, false, false, 43), "slug", [], "any", false, false, false, 43)]), "html", null, true);
            echo "\" class=\"btn btn-success float-right\">En savoir plus</a>
                            </div>
                        </div>
                    </div>
                </div>
                 ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo "               

            </div>

    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  174 => 49,  162 => 43,  158 => 42,  152 => 41,  144 => 36,  139 => 33,  135 => 32,  127 => 26,  112 => 24,  109 => 23,  92 => 22,  75 => 7,  68 => 6,  60 => 3,  53 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
    {% block title %}
        Bienvenue chez votre futur partenaire
    {% endblock %}

    {% block body %}
        <div class=\"container\">
            <div class=\"jumbotron mt-3\">
                <h1 class=\"display-3\">Bienvenue chez LineBnB</h1>
                <p class=\"lead\">Nous mettons en relations les voyageurs et les propriétaires qui souhaitent profiter d'opportunités et gagner de l'argent en proposant leurs biens à la location !</p>
                <hr class=\"my-4\">
                <p>Vous êtes voyageur ? Vous voulez voir où vous pourriez loger pour votre prochain déplacement ?</p>
                <p class=\"lead\">
                    <a class=\"btn btn-primary btn-lg\" href=\"#\" role=\"button\">Voir nos offres</a>
                </p>
            </div>
        

            <h2 class=\"my-5\"> Nos produits premiums</h2>

            <div class=\"row\">
                {% for data in ads %}
                    {% include \"ad/_ad.html.twig\" with {'ad' : data.annonce} %}
                    
                {% endfor %}
 
            </div>

            <h2 class=\"my-5\">Nos propriétaires stars !</h2>

            <div class=\"row\">
            {% for data in users %}
                <div class=\"col\">
                    <div class=\"card border-secondary mb-3\">
                        <div class=\"card-body\">
                            <h4 class=\"card-title\">{{data.user.fullName}}</h4>
                            <hr>

                            <div class=\"card-text\">

                                <img src=\"{{data.user.picture}}\" alt=\"Avatar de {{data.user.fullName}}\" class=\"float-left mr-3\"/>
                                <p>{{data.user.introduction}}</p>
                                <a href=\"{{path('user_show', {'slug' : data.user.slug})}}\" class=\"btn btn-success float-right\">En savoir plus</a>
                            </div>
                        </div>
                    </div>
                </div>
                 {% endfor %}
               

            </div>

    {% endblock %}", "home.html.twig", "/Applications/MAMP/htdocs/lineup/templates/home.html.twig");
    }
}
