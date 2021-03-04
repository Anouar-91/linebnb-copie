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

/* admin/partials/header.html.twig */
class __TwigTemplate_9ff448761b962a59ea67de615ee91ab70bb72c339cadb1316dbade5cac185ee0 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/partials/header.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/partials/header.html.twig"));

        // line 1
        echo "
        <nav class=\"navbar navbar-expand-lg navbar-light bg-light\">
            <a class=\"navbar-brand\" href=\"";
        // line 3
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("homepage");
        echo "\">LineBnB</a>
            <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarColor02\" aria-controls=\"navbarColor02\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                <span class=\"navbar-toggler-icon\"></span>
            </button>

            <div class=\"collapse navbar-collapse\" id=\"navbarColor01\">
                <ul class=\"navbar-nav mr-auto\">
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"";
        // line 11
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_dashboard");
        echo "\"><i class=\"fas fa-chart-line\">
                        </i>Dashboard</a>
                    </li>

                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"";
        // line 16
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_ads_index");
        echo "\">
                        <i class=\"fas fa-hotel\"></i>
                        Annonces</a>
                    </li>

                    <li class=\"nav-item\">
                        
                        <a class=\"nav-link\" href=\"";
        // line 23
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_booking_index", ["page" => 1]);
        echo "\">
                        <i class=\"fas fa-folder\"></i>
                        Réservations</a>
                    </li>

                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"";
        // line 29
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_comment_index");
        echo "\">
                        <i class=\"fas fa-comment\"></i>
                        Commentaires</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"";
        // line 34
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_user_index");
        echo "\">
                        <i class=\"fas fa-users\"></i>
                        Utilisateurs</a>
                    </li>

                </ul>
                <ul class=\"navbar-nav ml-auto\">
                    <li class=\"nav-item\">
                        <a href=\"";
        // line 42
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("homepage");
        echo "\" target=\"_blank\" class=\"nav-link\">
                            <i class=\"fas fa-eye\"></i>
                            Voir le site
                        </a>
                    </li>
                    ";
        // line 47
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 47, $this->source); })()), "user", [], "any", false, false, false, 47)) {
            echo " ";
            // line 48
            echo "                    <li class=\"nav-item dropdown\">
                        <a href=\"#\" class=\"nav-link dropdown-toggle\" data-toggle=\"dropdown\" id=\"accountDropdownLink\">
                            <img src=\"";
            // line 50
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 50, $this->source); })()), "user", [], "any", false, false, false, 50), "picture", [], "any", false, false, false, 50), "html", null, true);
            echo "\" alt=\"Avatar de ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 50, $this->source); })()), "user", [], "any", false, false, false, 50), "fullName", [], "any", false, false, false, 50), "html", null, true);
            echo "\" class=\"avatar avatar-mini\">
                            ";
            // line 51
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 51, $this->source); })()), "user", [], "any", false, false, false, 51), "fullName", [], "any", false, false, false, 51), "html", null, true);
            echo "
                        </a>
                        <div class=\"dropdown-menu dropdown-menu-right\" aria-labelledy=\"accountDopdownLink\">
                   
                            <a href=\"";
            // line 55
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_account_logout");
            echo "\" class=\"dropdown-item\">Déconnexion</a>
                        </div>
                    </li>

                    ";
        } else {
            // line 60
            echo "
                    ";
        }
        // line 62
        echo "                </ul>
                
            </div>
        </nav>


";
        // line 69
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 69, $this->source); })()), "flashes", [], "any", false, false, false, 69));
        foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
            echo " ";
            // line 70
            echo "            <div class=\"container\">
                <div class=\"alert alert-";
            // line 71
            echo twig_escape_filter($this->env, $context["label"], "html", null, true);
            echo "\">
                    ";
            // line 72
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 73
                echo "                        <p>";
                echo $context["message"];
                echo "</p>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 75
            echo "                </div>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['label'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "admin/partials/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  178 => 75,  169 => 73,  165 => 72,  161 => 71,  158 => 70,  152 => 69,  144 => 62,  140 => 60,  132 => 55,  125 => 51,  119 => 50,  115 => 48,  112 => 47,  104 => 42,  93 => 34,  85 => 29,  76 => 23,  66 => 16,  58 => 11,  47 => 3,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
        <nav class=\"navbar navbar-expand-lg navbar-light bg-light\">
            <a class=\"navbar-brand\" href=\"{{path('homepage')}}\">LineBnB</a>
            <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarColor02\" aria-controls=\"navbarColor02\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                <span class=\"navbar-toggler-icon\"></span>
            </button>

            <div class=\"collapse navbar-collapse\" id=\"navbarColor01\">
                <ul class=\"navbar-nav mr-auto\">
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"{{path('admin_dashboard')}}\"><i class=\"fas fa-chart-line\">
                        </i>Dashboard</a>
                    </li>

                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"{{path('admin_ads_index')}}\">
                        <i class=\"fas fa-hotel\"></i>
                        Annonces</a>
                    </li>

                    <li class=\"nav-item\">
                        
                        <a class=\"nav-link\" href=\"{{path('admin_booking_index', {'page' : 1})}}\">
                        <i class=\"fas fa-folder\"></i>
                        Réservations</a>
                    </li>

                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"{{path('admin_comment_index')}}\">
                        <i class=\"fas fa-comment\"></i>
                        Commentaires</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"{{path('admin_user_index')}}\">
                        <i class=\"fas fa-users\"></i>
                        Utilisateurs</a>
                    </li>

                </ul>
                <ul class=\"navbar-nav ml-auto\">
                    <li class=\"nav-item\">
                        <a href=\"{{ path('homepage') }}\" target=\"_blank\" class=\"nav-link\">
                            <i class=\"fas fa-eye\"></i>
                            Voir le site
                        </a>
                    </li>
                    {% if app.user %} {# si je suis connecté #}
                    <li class=\"nav-item dropdown\">
                        <a href=\"#\" class=\"nav-link dropdown-toggle\" data-toggle=\"dropdown\" id=\"accountDropdownLink\">
                            <img src=\"{{app.user.picture}}\" alt=\"Avatar de {{app.user.fullName}}\" class=\"avatar avatar-mini\">
                            {{app.user.fullName}}
                        </a>
                        <div class=\"dropdown-menu dropdown-menu-right\" aria-labelledy=\"accountDopdownLink\">
                   
                            <a href=\"{{path('admin_account_logout')}}\" class=\"dropdown-item\">Déconnexion</a>
                        </div>
                    </li>

                    {% else %}

                    {% endif %}
                </ul>
                
            </div>
        </nav>


{# permet d'affiche les flashs dans le header #}
        {% for label, messages in app.flashes %} {# un for avec deux données : label = clé message = valeur #}
            <div class=\"container\">
                <div class=\"alert alert-{{label}}\">
                    {% for message in messages %}
                        <p>{{ message | raw }}</p>
                    {% endfor %}
                </div>
            </div>
        {% endfor %}", "admin/partials/header.html.twig", "/Applications/MAMP/htdocs/lineup-copie/templates/admin/partials/header.html.twig");
    }
}
