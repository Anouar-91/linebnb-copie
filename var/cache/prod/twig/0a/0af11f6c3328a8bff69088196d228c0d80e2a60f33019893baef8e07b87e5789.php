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

/* admin/ad/index.html.twig */
class __TwigTemplate_3c75c4423583fafed76c0c27adc1b52c4dd35c95c681b123f318315758efa7b2 extends Template
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
        return "admin/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/ad/index.html.twig"));

        $this->parent = $this->loadTemplate("admin/base.html.twig", "admin/ad/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Administration des annonces !";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<div class=\"container-fluid\">
    <h1 class=\"my-5\">Gestion des annonces</h1>

    <table class=\"table table-hover\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Titre</th>
                <th>Auteur</th>
                <th class=\"text-center\">Réservation</th>
                <th class=\"text-center\">Note</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["ads"]) || array_key_exists("ads", $context) ? $context["ads"] : (function () { throw new RuntimeError('Variable "ads" does not exist.', 21, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["ad"]) {
            // line 22
            echo "                <tr>
                    <td>";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ad"], "id", [], "any", false, false, false, 23), "html", null, true);
            echo "</td>
                    <td>";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ad"], "title", [], "any", false, false, false, 24), "html", null, true);
            echo "</td>
                    <td> 
                        <img src=\"";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["ad"], "author", [], "any", false, false, false, 26), "picture", [], "any", false, false, false, 26), "html", null, true);
            echo "\" alt=\"Avatar de ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["ad"], "author", [], "any", false, false, false, 26), "fullName", [], "any", false, false, false, 26), "html", null, true);
            echo "\" class=\"avatar avatar-micro mr-2\"> ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["ad"], "author", [], "any", false, false, false, 26), "fullName", [], "any", false, false, false, 26), "html", null, true);
            echo "
                    </td>
                    <td class=\"text-center\">
                        <span class=\"badge badge-primary rounded\">";
            // line 29
            echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ad"], "bookings", [], "any", false, false, false, 29)), "html", null, true);
            echo "</span>
                    </td>
                    <td class=\"text-center\">
                        <span class=\"badge badge-primary rounded\">";
            // line 32
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ad"], "avgRatings", [], "any", false, false, false, 32), 1, ",", " "), "html", null, true);
            echo "</span>
                    </td>
                    <td>
                        <a href=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_ads_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["ad"], "id", [], "any", false, false, false, 35)]), "html", null, true);
            echo "\" class=\"btn btn-primary\"> <i class=\"fas fa-edit\"></i> </a>
                        <a href=\"";
            // line 36
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_ads_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["ad"], "id", [], "any", false, false, false, 36)]), "html", null, true);
            echo "\" class=\"btn btn-danger\"> <i class=\"fas fa-trash\"></i> </a>
                    </td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ad'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "        </tbody>
    </table>
    ";
        // line 42
        $this->loadTemplate("admin/partials/pagination.html.twig", "admin/ad/index.html.twig", 42)->display(twig_array_merge($context, ["route" => "admin_ads_index"]));
        // line 43
        echo "</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "admin/ad/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  148 => 43,  146 => 42,  142 => 40,  132 => 36,  128 => 35,  122 => 32,  116 => 29,  106 => 26,  101 => 24,  97 => 23,  94 => 22,  90 => 21,  73 => 6,  66 => 5,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'admin/base.html.twig' %}

{% block title %}Administration des annonces !{% endblock %}

{% block body %}
<div class=\"container-fluid\">
    <h1 class=\"my-5\">Gestion des annonces</h1>

    <table class=\"table table-hover\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Titre</th>
                <th>Auteur</th>
                <th class=\"text-center\">Réservation</th>
                <th class=\"text-center\">Note</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            {% for ad in ads %}
                <tr>
                    <td>{{ad.id}}</td>
                    <td>{{ad.title}}</td>
                    <td> 
                        <img src=\"{{ad.author.picture}}\" alt=\"Avatar de {{ad.author.fullName}}\" class=\"avatar avatar-micro mr-2\"> {{ad.author.fullName}}
                    </td>
                    <td class=\"text-center\">
                        <span class=\"badge badge-primary rounded\">{{ad.bookings | length}}</span>
                    </td>
                    <td class=\"text-center\">
                        <span class=\"badge badge-primary rounded\">{{ad.avgRatings | number_format(1, ',', ' ')}}</span>
                    </td>
                    <td>
                        <a href=\"{{ path('admin_ads_edit', {'id' : ad.id})}}\" class=\"btn btn-primary\"> <i class=\"fas fa-edit\"></i> </a>
                        <a href=\"{{ path('admin_ads_delete', {'id' : ad.id}) }}\" class=\"btn btn-danger\"> <i class=\"fas fa-trash\"></i> </a>
                    </td>
                </tr>
            {% endfor %}
        </tbody>
    </table>
    {% include 'admin/partials/pagination.html.twig' with {'route' : 'admin_ads_index'}%}
</div>
{% endblock %}
", "admin/ad/index.html.twig", "/Applications/MAMP/htdocs/lineup/templates/admin/ad/index.html.twig");
    }
}
