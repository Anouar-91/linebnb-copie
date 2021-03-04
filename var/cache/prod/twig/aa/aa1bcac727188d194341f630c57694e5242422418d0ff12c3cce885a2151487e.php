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

/* admin/comment/index.html.twig */
class __TwigTemplate_5a9de079ea40d0d7da43923bd3a88f9ede183ce1c1cef40035a6425ee70645d4 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/comment/index.html.twig"));

        $this->parent = $this->loadTemplate("admin/base.html.twig", "admin/comment/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Administration des commentaires !";
        
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
    <h1 class=\"my-5\">Gestion des commentaires</h1>

    <table class=\"table table-hover\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Date</th>
                <th class=\"text-center\">Auteur</th>
                <th>Contenu</th>
                <th>Note</th>
                <th>Annonce</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["comments"]) || array_key_exists("comments", $context) ? $context["comments"] : (function () { throw new RuntimeError('Variable "comments" does not exist.', 22, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
            // line 23
            echo "                <tr>
                    <td>";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "id", [], "any", false, false, false, 24), "html", null, true);
            echo "</td>
                    <td>
                        ";
            // line 26
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "createdAt", [], "any", false, false, false, 26), "d/m/Y H:i"), "html", null, true);
            echo "
                    </td>
                    <td class=\"text-center\"> 
                        <img src=\"";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["comment"], "author", [], "any", false, false, false, 29), "picture", [], "any", false, false, false, 29), "html", null, true);
            echo "\" alt=\"Avatar de ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["comment"], "author", [], "any", false, false, false, 29), "fullName", [], "any", false, false, false, 29), "html", null, true);
            echo "\" class=\"avatar avatar-micro mr-2\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["comment"], "author", [], "any", false, false, false, 29), "fullName", [], "any", false, false, false, 29), "html", null, true);
            echo "
                    </td>
                    <td>
                        ";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "content", [], "any", false, false, false, 32), "html", null, true);
            echo "
                    </td>
                    <td>
                        <span class=\"badge badge-dark\">";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "rating", [], "any", false, false, false, 35), "html", null, true);
            echo "</span>
                    </td>
                    <td>
                        ";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["comment"], "ad", [], "any", false, false, false, 38), "title", [], "any", false, false, false, 38), "html", null, true);
            echo "
                    </td>


                    <td>
                        <a href=\"";
            // line 43
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_ads_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["comment"], "id", [], "any", false, false, false, 43)]), "html", null, true);
            echo "\" class=\"btn btn-primary\"> <i class=\"fas fa-edit\"></i> </a>
                        <a href=\"";
            // line 44
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_comment_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["comment"], "id", [], "any", false, false, false, 44)]), "html", null, true);
            echo "\" class=\"btn btn-danger\"> <i class=\"fas fa-trash\"></i> </a>
                    </td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "        </tbody>
    </table>
    ";
        // line 50
        $this->loadTemplate("admin/partials/pagination.html.twig", "admin/comment/index.html.twig", 50)->display(twig_array_merge($context, ["route" => "admin_comment_index"]));
        // line 51
        echo "</div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "admin/comment/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  159 => 51,  157 => 50,  153 => 48,  143 => 44,  139 => 43,  131 => 38,  125 => 35,  119 => 32,  109 => 29,  103 => 26,  98 => 24,  95 => 23,  91 => 22,  73 => 6,  66 => 5,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'admin/base.html.twig' %}

{% block title %}Administration des commentaires !{% endblock %}

{% block body %}
<div class=\"container-fluid\">
    <h1 class=\"my-5\">Gestion des commentaires</h1>

    <table class=\"table table-hover\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Date</th>
                <th class=\"text-center\">Auteur</th>
                <th>Contenu</th>
                <th>Note</th>
                <th>Annonce</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            {% for comment in comments %}
                <tr>
                    <td>{{comment.id}}</td>
                    <td>
                        {{comment.createdAt | date('d/m/Y H:i')}}
                    </td>
                    <td class=\"text-center\"> 
                        <img src=\"{{comment.author.picture}}\" alt=\"Avatar de {{comment.author.fullName}}\" class=\"avatar avatar-micro mr-2\">{{comment.author.fullName}}
                    </td>
                    <td>
                        {{comment.content}}
                    </td>
                    <td>
                        <span class=\"badge badge-dark\">{{comment.rating}}</span>
                    </td>
                    <td>
                        {{comment.ad.title}}
                    </td>


                    <td>
                        <a href=\"{{ path('admin_ads_edit', {'id' : comment.id})}}\" class=\"btn btn-primary\"> <i class=\"fas fa-edit\"></i> </a>
                        <a href=\"{{ path('admin_comment_delete', {'id' : comment.id}) }}\" class=\"btn btn-danger\"> <i class=\"fas fa-trash\"></i> </a>
                    </td>
                </tr>
            {% endfor %}
        </tbody>
    </table>
    {% include 'admin/partials/pagination.html.twig' with {'route' : 'admin_comment_index'}%}
</div>

{% endblock %}
", "admin/comment/index.html.twig", "/Applications/MAMP/htdocs/lineup/templates/admin/comment/index.html.twig");
    }
}
