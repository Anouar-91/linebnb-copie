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

/* account/bookings.html.twig */
class __TwigTemplate_0d114ed09c1af337c97fee18cac4f2900819fe9c7dc1a83e1dcaee10161166fc extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "account/bookings.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "account/bookings.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Vos réservation passées et à venir";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<div class=\"container\">
    <h1 class=\"my-5\">Mes réservations</h1>
    <div class=\"alert alert-info mt-5\">
        <p>Retrouvez ci-dessous toutes vos réservations passées et à venir</p>
    </div>

    ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 12, $this->source); })()), "user", [], "any", false, false, false, 12), "bookings", [], "any", false, false, false, 12));
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
        foreach ($context['_seq'] as $context["_key"] => $context["booking"]) {
            // line 13
            echo "    <div class=\"row mt-5\">
        <div class=\"col-4\">
            <img src=\"";
            // line 15
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["booking"], "ad", [], "any", false, false, false, 15), "coverImage", [], "any", false, false, false, 15), "html", null, true);
            echo "\" alt=\"Photo de l'annonce ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["booking"], "ad", [], "any", false, false, false, 15), "title", [], "any", false, false, false, 15), "html", null, true);
            echo "\" class=\"img-fluid\">
            <div class=\"mt-3\">
                ";
            // line 17
            $context["comment"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["booking"], "ad", [], "any", false, false, false, 17), "commentFromAuthor", [0 => twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 17, $this->source); })()), "user", [], "any", false, false, false, 17)], "method", false, false, false, 17);
            // line 18
            echo "                ";
            if ( !(null === (isset($context["comment"]) || array_key_exists("comment", $context) ? $context["comment"] : (function () { throw new RuntimeError('Variable "comment" does not exist.', 18, $this->source); })()))) {
                // line 19
                echo "                    <strong>Note donnée : </strong> ";
                $this->loadTemplate("partials/rating.html.twig", "account/bookings.html.twig", 19)->display(twig_array_merge($context, ["rating" => twig_get_attribute($this->env, $this->source, (isset($context["comment"]) || array_key_exists("comment", $context) ? $context["comment"] : (function () { throw new RuntimeError('Variable "comment" does not exist.', 19, $this->source); })()), "rating", [], "any", false, false, false, 19)]));
                // line 20
                echo "                ";
            } else {
                // line 21
                echo "                    Vous n'avez pas encore donné de note.
                    <a href=\"";
                // line 22
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("booking_show", ["id" => twig_get_attribute($this->env, $this->source, $context["booking"], "id", [], "any", false, false, false, 22)]), "html", null, true);
                echo "#comment\" class=\"btn btn-link\">Je donne mon avis !</a>
                ";
            }
            // line 24
            echo "            </div>
        </div>
        <div class=\"col-8\">
            <h4>";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["booking"], "ad", [], "any", false, false, false, 27), "title", [], "any", false, false, false, 27), "html", null, true);
            echo "</h4>
            <p> 
                Réservation <strong>n°";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["booking"], "id", [], "any", false, false, false, 29), "html", null, true);
            echo "</strong><br>
                Du ";
            // line 30
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["booking"], "startDate", [], "any", false, false, false, 30), "d/m/Y"), "html", null, true);
            echo " au ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["booking"], "endDate", [], "any", false, false, false, 30), "d/m/Y"), "html", null, true);
            echo " <br>
                Au prix : ";
            // line 31
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["booking"], "amount", [], "any", false, false, false, 31), 2, ",", " "), "html", null, true);
            echo " &euro;
            
            </p>
            <a href=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("booking_show", ["id" => twig_get_attribute($this->env, $this->source, $context["booking"], "id", [], "any", false, false, false, 34)]), "html", null, true);
            echo "\" class=\"btn btn-outline-info\">Plus d'informations</a>
        </div>
    </div>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['booking'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "</div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "account/bookings.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  172 => 38,  154 => 34,  148 => 31,  142 => 30,  138 => 29,  133 => 27,  128 => 24,  123 => 22,  120 => 21,  117 => 20,  114 => 19,  111 => 18,  109 => 17,  102 => 15,  98 => 13,  81 => 12,  73 => 6,  66 => 5,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}

{% block title %}Vos réservation passées et à venir{% endblock %}

{% block body %}
<div class=\"container\">
    <h1 class=\"my-5\">Mes réservations</h1>
    <div class=\"alert alert-info mt-5\">
        <p>Retrouvez ci-dessous toutes vos réservations passées et à venir</p>
    </div>

    {% for booking in app.user.bookings %}
    <div class=\"row mt-5\">
        <div class=\"col-4\">
            <img src=\"{{booking.ad.coverImage}}\" alt=\"Photo de l'annonce {{booking.ad.title}}\" class=\"img-fluid\">
            <div class=\"mt-3\">
                {% set comment = booking.ad.commentFromAuthor(app.user) %}
                {% if comment is not null %}
                    <strong>Note donnée : </strong> {% include \"partials/rating.html.twig\" with {'rating' : comment.rating} %}
                {% else %}
                    Vous n'avez pas encore donné de note.
                    <a href=\"{{ path('booking_show', {'id' : booking.id}) }}#comment\" class=\"btn btn-link\">Je donne mon avis !</a>
                {% endif %}
            </div>
        </div>
        <div class=\"col-8\">
            <h4>{{booking.ad.title}}</h4>
            <p> 
                Réservation <strong>n°{{booking.id}}</strong><br>
                Du {{booking.startDate | date('d/m/Y')}} au {{booking.endDate | date('d/m/Y')}} <br>
                Au prix : {{booking.amount  | number_format(2,',', ' ')}} &euro;
            
            </p>
            <a href=\"{{path('booking_show', {'id' : booking.id}) }}\" class=\"btn btn-outline-info\">Plus d'informations</a>
        </div>
    </div>
    {% endfor %}
</div>

{% endblock %}", "account/bookings.html.twig", "/Applications/MAMP/htdocs/lineup/templates/account/bookings.html.twig");
    }
}
