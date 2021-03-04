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

/* admin/booking/index.html.twig */
class __TwigTemplate_bf53033f3054c7779378de51291c1dcfd8993f5e5d57066c566f4ee4d6035a23 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/booking/index.html.twig"));

        $this->parent = $this->loadTemplate("admin/base.html.twig", "admin/booking/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Administration des réservations !";
        
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
    <h1 class=\"my-5\">Gestion des réservations</h1>

    <table class=\"table table-hover\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Visiteur</th>
                <th>Annonce</th>
                <th>Date de réservation</th>
                <th>Date d'arrivée</th>
                <th>Date de départ</th>
                <th>Montant</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["bookings"]) || array_key_exists("bookings", $context) ? $context["bookings"] : (function () { throw new RuntimeError('Variable "bookings" does not exist.', 23, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["booking"]) {
            // line 24
            echo "                <tr>
                    <td>";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["booking"], "id", [], "any", false, false, false, 25), "html", null, true);
            echo "</td>
                    <td>";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["booking"], "booker", [], "any", false, false, false, 26), "fullName", [], "any", false, false, false, 26), "html", null, true);
            echo "</td>
                    <td> 
                        ";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["booking"], "ad", [], "any", false, false, false, 28), "title", [], "any", false, false, false, 28), "html", null, true);
            echo "
                    </td>
                    <td>
                        ";
            // line 31
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["booking"], "createdAt", [], "any", false, false, false, 31), "d/m/Y H:i"), "html", null, true);
            echo "
                    </td>
                    <td>
                        ";
            // line 34
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["booking"], "startDate", [], "any", false, false, false, 34), "d/m/Y"), "html", null, true);
            echo "
                    </td>
                    <td>
                        ";
            // line 37
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["booking"], "endDate", [], "any", false, false, false, 37), "d/m/Y"), "html", null, true);
            echo "
                    </td>
                    <td>
                        ";
            // line 40
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["booking"], "amount", [], "any", false, false, false, 40), "html", null, true);
            echo "€
                    </td>
                    <td>
                        <a href=\"";
            // line 43
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_booking_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["booking"], "id", [], "any", false, false, false, 43)]), "html", null, true);
            echo "\" class=\"btn btn-primary\"> <i class=\"fas fa-edit\"></i> </a>
                        <a href=\"";
            // line 44
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_booking_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["booking"], "id", [], "any", false, false, false, 44)]), "html", null, true);
            echo "\" class=\"btn btn-danger\"> <i class=\"fas fa-trash\"></i> </a>
                    </td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['booking'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "        </tbody>
    </table>
    ";
        // line 50
        $this->loadTemplate("admin/partials/pagination.html.twig", "admin/booking/index.html.twig", 50)->display(twig_array_merge($context, ["route" => "admin_booking_index"]));
        // line 51
        echo "
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "admin/booking/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  158 => 51,  156 => 50,  152 => 48,  142 => 44,  138 => 43,  132 => 40,  126 => 37,  120 => 34,  114 => 31,  108 => 28,  103 => 26,  99 => 25,  96 => 24,  92 => 23,  73 => 6,  66 => 5,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'admin/base.html.twig' %}

{% block title %}Administration des réservations !{% endblock %}

{% block body %}
<div class=\"container-fluid\">
    <h1 class=\"my-5\">Gestion des réservations</h1>

    <table class=\"table table-hover\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Visiteur</th>
                <th>Annonce</th>
                <th>Date de réservation</th>
                <th>Date d'arrivée</th>
                <th>Date de départ</th>
                <th>Montant</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            {% for booking in bookings %}
                <tr>
                    <td>{{booking.id}}</td>
                    <td>{{booking.booker.fullName}}</td>
                    <td> 
                        {{booking.ad.title}}
                    </td>
                    <td>
                        {{booking.createdAt | date('d/m/Y H:i')}}
                    </td>
                    <td>
                        {{booking.startDate | date('d/m/Y')}}
                    </td>
                    <td>
                        {{booking.endDate | date('d/m/Y')}}
                    </td>
                    <td>
                        {{booking.amount}}€
                    </td>
                    <td>
                        <a href=\"{{ path('admin_booking_edit', {'id' : booking.id})}}\" class=\"btn btn-primary\"> <i class=\"fas fa-edit\"></i> </a>
                        <a href=\"{{ path('admin_booking_delete', {'id' : booking.id}) }}\" class=\"btn btn-danger\"> <i class=\"fas fa-trash\"></i> </a>
                    </td>
                </tr>
            {% endfor %}
        </tbody>
    </table>
    {% include 'admin/partials/pagination.html.twig' with {'route' : 'admin_booking_index'}%}

</div>
{% endblock %}
", "admin/booking/index.html.twig", "/Applications/MAMP/htdocs/lineup/templates/admin/booking/index.html.twig");
    }
}
