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

/* partials/header.html.twig */
class __TwigTemplate_bf6c59d1a203d90b12f5bfa6bd82c58d619396d3d27a46dbb236d536373063cf extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/header.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/header.html.twig"));

        // line 1
        echo "<div class=\"container-fluid\">
    <div class=\"row\">
        <nav class=\"navbar navbar-expand-lg navbar-dark bg-primary\">
            <a class=\"navbar-brand\" href=\"";
        // line 4
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("homepage");
        echo "\">LineBnB</a>
        <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarColor01\" aria-controls=\"navbarColor01\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
            <span class=\"navbar-toggler-icon\"></span>
        </button>

        <div class=\"collapse navbar-collapse\" id=\"navbarColor01\">
            <ul class=\"navbar-nav mr-auto\">
                            <li class=\"nav-item\">
                                <a class=\"nav-link\" href=\"";
        // line 12
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("homepage");
        echo "\">Accueil</a>
                            </li>
                            <li class=\"nav-item\">
                                <a class=\"nav-link\" href=\"";
        // line 15
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ads_index");
        echo "\">Annonces</a>
                            </li>

                        </ul>
                        <ul class=\"navbar-nav ml-auto\">
                            ";
        // line 20
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 20, $this->source); })()), "user", [], "any", false, false, false, 20)) {
            echo " ";
            // line 21
            echo "                            <li class=\"nav-item dropdown\">
                                <a href=\"#\" class=\"nav-link dropdown-toggle\" data-toggle=\"dropdown\" id=\"accountDropdownLink\">
                                    <img src=\"";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 23, $this->source); })()), "user", [], "any", false, false, false, 23), "picture", [], "any", false, false, false, 23), "html", null, true);
            echo "\" alt=\"Avatar de ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 23, $this->source); })()), "user", [], "any", false, false, false, 23), "fullName", [], "any", false, false, false, 23), "html", null, true);
            echo "\" class=\"avatar avatar-mini\">
                                    ";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 24, $this->source); })()), "user", [], "any", false, false, false, 24), "fullName", [], "any", false, false, false, 24), "html", null, true);
            echo "
                                </a>
                                <div class=\"dropdown-menu dropdown-menu-right\" aria-labelledy=\"accountDopdownLink\">
                                    <a href=\"";
            // line 27
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("account_index");
            echo "\" class=\"dropdown-item\">Mon compte</a>
                                    <a href=\"";
            // line 28
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("account_bookings");
            echo "\" class=\"dropdown-item\">Mes réservations</a>
                                    <a href=\"";
            // line 29
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("account_profile");
            echo "\" class=\"dropdown-item\">Modifier mon profil</a>
                                    <a href=\"";
            // line 30
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("account_password");
            echo "\" class=\"dropdown-item\">Modifier mon mot de passe</a>  
                                                
                                    <a class=\"dropdown-item\" href=\"";
            // line 32
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ads_create");
            echo "\">Créer une nouvelle annonce</a>
                                    <div class=\"dropdown-divider\"></div>
                                    <a href=\"";
            // line 34
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\" class=\"dropdown-item\">Déconnexion</a>
                                </div>
                            </li>

                            ";
        } else {
            // line 39
            echo "                            <li class=\"nav-item\">
                                <a href=\"";
            // line 40
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("register");
            echo "\" class=\"nav-link\">Inscription</a>
                            </li>
                            <li class=\"nav-item\">
                                <a href=\"";
            // line 43
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\" class=\"nav-link\">Connexion</a>
                            </li>

                            ";
        }
        // line 47
        echo "                        </ul>
                        
                    </div>
                </nav>
        
        </div>
        </div>
    


";
        // line 58
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 58, $this->source); })()), "flashes", [], "any", false, false, false, 58));
        foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
            echo " ";
            // line 59
            echo "            <div class=\"container\">
                <div class=\"alert alert-";
            // line 60
            echo twig_escape_filter($this->env, $context["label"], "html", null, true);
            echo "\">
                    ";
            // line 61
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 62
                echo "                        <p>";
                echo $context["message"];
                echo "</p>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 64
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
        return "partials/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  176 => 64,  167 => 62,  163 => 61,  159 => 60,  156 => 59,  150 => 58,  138 => 47,  131 => 43,  125 => 40,  122 => 39,  114 => 34,  109 => 32,  104 => 30,  100 => 29,  96 => 28,  92 => 27,  86 => 24,  80 => 23,  76 => 21,  73 => 20,  65 => 15,  59 => 12,  48 => 4,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"container-fluid\">
    <div class=\"row\">
        <nav class=\"navbar navbar-expand-lg navbar-dark bg-primary\">
            <a class=\"navbar-brand\" href=\"{{path('homepage')}}\">LineBnB</a>
        <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarColor01\" aria-controls=\"navbarColor01\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
            <span class=\"navbar-toggler-icon\"></span>
        </button>

        <div class=\"collapse navbar-collapse\" id=\"navbarColor01\">
            <ul class=\"navbar-nav mr-auto\">
                            <li class=\"nav-item\">
                                <a class=\"nav-link\" href=\"{{path('homepage')}}\">Accueil</a>
                            </li>
                            <li class=\"nav-item\">
                                <a class=\"nav-link\" href=\"{{path('ads_index')}}\">Annonces</a>
                            </li>

                        </ul>
                        <ul class=\"navbar-nav ml-auto\">
                            {% if app.user %} {# si je suis connecté #}
                            <li class=\"nav-item dropdown\">
                                <a href=\"#\" class=\"nav-link dropdown-toggle\" data-toggle=\"dropdown\" id=\"accountDropdownLink\">
                                    <img src=\"{{app.user.picture}}\" alt=\"Avatar de {{app.user.fullName}}\" class=\"avatar avatar-mini\">
                                    {{app.user.fullName}}
                                </a>
                                <div class=\"dropdown-menu dropdown-menu-right\" aria-labelledy=\"accountDopdownLink\">
                                    <a href=\"{{path('account_index')}}\" class=\"dropdown-item\">Mon compte</a>
                                    <a href=\"{{path('account_bookings')}}\" class=\"dropdown-item\">Mes réservations</a>
                                    <a href=\"{{path('account_profile')}}\" class=\"dropdown-item\">Modifier mon profil</a>
                                    <a href=\"{{path('account_password')}}\" class=\"dropdown-item\">Modifier mon mot de passe</a>  
                                                
                                    <a class=\"dropdown-item\" href=\"{{path('ads_create')}}\">Créer une nouvelle annonce</a>
                                    <div class=\"dropdown-divider\"></div>
                                    <a href=\"{{path('app_logout')}}\" class=\"dropdown-item\">Déconnexion</a>
                                </div>
                            </li>

                            {% else %}
                            <li class=\"nav-item\">
                                <a href=\"{{ path('register') }}\" class=\"nav-link\">Inscription</a>
                            </li>
                            <li class=\"nav-item\">
                                <a href=\"{{ path('app_login') }}\" class=\"nav-link\">Connexion</a>
                            </li>

                            {% endif %}
                        </ul>
                        
                    </div>
                </nav>
        
        </div>
        </div>
    


{# permet d'affiche les flashs dans le header #}
        {% for label, messages in app.flashes %} {# un for avec deux données : label = clé message = valeur #}
            <div class=\"container\">
                <div class=\"alert alert-{{label}}\">
                    {% for message in messages %}
                        <p>{{ message | raw }}</p>
                    {% endfor %}
                </div>
            </div>
        {% endfor %}
", "partials/header.html.twig", "/Applications/MAMP/htdocs/lineup-copie/templates/partials/header.html.twig");
    }
}
