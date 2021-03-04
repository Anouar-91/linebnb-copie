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

/* booking/show.html.twig */
class __TwigTemplate_c1f52567e5c5e319725abb419328e5723a40ad52532aad6348df54b711e607ca extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "booking/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "booking/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "booking/show.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Réservation n°";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["booking"]) || array_key_exists("booking", $context) ? $context["booking"] : (function () { throw new RuntimeError('Variable "booking" does not exist.', 2, $this->source); })()), "id", [], "any", false, false, false, 2), "html", null, true);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 4
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        $context["ad"] = twig_get_attribute($this->env, $this->source, (isset($context["booking"]) || array_key_exists("booking", $context) ? $context["booking"] : (function () { throw new RuntimeError('Variable "booking" does not exist.', 6, $this->source); })()), "ad", [], "any", false, false, false, 6);
        // line 7
        $context["author"] = twig_get_attribute($this->env, $this->source, (isset($context["ad"]) || array_key_exists("ad", $context) ? $context["ad"] : (function () { throw new RuntimeError('Variable "ad" does not exist.', 7, $this->source); })()), "author", [], "any", false, false, false, 7);
        // line 8
        echo "    <div class=\"container\">
        <h1 class=\"my-5\">Votre réservation n°";
        // line 9
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["booking"]) || array_key_exists("booking", $context) ? $context["booking"] : (function () { throw new RuntimeError('Variable "booking" does not exist.', 9, $this->source); })()), "id", [], "any", false, false, false, 9), "html", null, true);
        echo "</h1>

        ";
        // line 11
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 11, $this->source); })()), "request", [], "any", false, false, false, 11), "query", [], "any", false, false, false, 11), "get", [0 => "withAlert"], "method", false, false, false, 11)) {
            // line 12
            echo "            <div class=\"alert alert-success\">
                <h4 class=\"alert-heading\">Bravo !</h4>
                <p>
                    Votre réservation auprès de <strong> <a href=\"";
            // line 15
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_show", ["slug" => twig_get_attribute($this->env, $this->source, (isset($context["author"]) || array_key_exists("author", $context) ? $context["author"] : (function () { throw new RuntimeError('Variable "author" does not exist.', 15, $this->source); })()), "slug", [], "any", false, false, false, 15)]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["author"]) || array_key_exists("author", $context) ? $context["author"] : (function () { throw new RuntimeError('Variable "author" does not exist.', 15, $this->source); })()), "fullName", [], "any", false, false, false, 15), "html", null, true);
            echo "</a></strong> pour l'annonce <strong><a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ads_show", ["slug" => twig_get_attribute($this->env, $this->source, (isset($context["ad"]) || array_key_exists("ad", $context) ? $context["ad"] : (function () { throw new RuntimeError('Variable "ad" does not exist.', 15, $this->source); })()), "slug", [], "any", false, false, false, 15)]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ad"]) || array_key_exists("ad", $context) ? $context["ad"] : (function () { throw new RuntimeError('Variable "ad" does not exist.', 15, $this->source); })()), "title", [], "any", false, false, false, 15), "html", null, true);
            echo "</a></strong>
                    a bien été prise en compte !
                </p>
            </div>
        ";
        }
        // line 20
        echo "        <div class=\"row\">
            <div class=\"col\">

                <div class=\"alert alert-light\">
                    <h2>Détails</h2>
                    <dl class=\"row\">
                        <dt class=\"col-md-4\">Numéro</dt>
                        <dd class=\"col-md-8\">";
        // line 27
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["booking"]) || array_key_exists("booking", $context) ? $context["booking"] : (function () { throw new RuntimeError('Variable "booking" does not exist.', 27, $this->source); })()), "id", [], "any", false, false, false, 27), "html", null, true);
        echo "</dd>
                        <dt class=\"col-md-4\">Date d'arrivée</dt>
                        <dd class=\"col-md-8\">";
        // line 29
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["booking"]) || array_key_exists("booking", $context) ? $context["booking"] : (function () { throw new RuntimeError('Variable "booking" does not exist.', 29, $this->source); })()), "startDate", [], "any", false, false, false, 29), "d/m/Y"), "html", null, true);
        echo "</dd>
                        <dt class=\"col-md-4\">Date de départ</dt>
                        <dd class=\"col-md-8\">";
        // line 31
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["booking"]) || array_key_exists("booking", $context) ? $context["booking"] : (function () { throw new RuntimeError('Variable "booking" does not exist.', 31, $this->source); })()), "endDate", [], "any", false, false, false, 31), "d/m/Y"), "html", null, true);
        echo "</dd>
                        <dt class=\"col-md-4\">Nombre de nuits</dt>
                        <dd class=\"col-md-8\">";
        // line 33
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["booking"]) || array_key_exists("booking", $context) ? $context["booking"] : (function () { throw new RuntimeError('Variable "booking" does not exist.', 33, $this->source); })()), "duration", [], "any", false, false, false, 33), "html", null, true);
        echo "</dd>
                        <dt class=\"col-md-4\">Montont total</dt>
                        <dd class=\"col-md-8\">";
        // line 35
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["booking"]) || array_key_exists("booking", $context) ? $context["booking"] : (function () { throw new RuntimeError('Variable "booking" does not exist.', 35, $this->source); })()), "amount", [], "any", false, false, false, 35), 2, ",", " "), "html", null, true);
        echo "&euro;</dd>
                        <dt class=\"col-md-4\">Commentaire</dt>
                        <dd class=\"col-md-8\">";
        // line 37
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["booking"] ?? null), "comment", [], "any", true, true, false, 37)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["booking"] ?? null), "comment", [], "any", false, false, false, 37), "Aucun commentaire")) : ("Aucun commentaire")), "html", null, true);
        echo "</dd>
                    </dl>
                    <hr>

                    <h2 class=\"alert-heading\">Votre hôte</h2>
                    <div class=\"row mb-3\">
                        <div class=\"col-3\">
                            <img src=\"";
        // line 44
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["booking"]) || array_key_exists("booking", $context) ? $context["booking"] : (function () { throw new RuntimeError('Variable "booking" does not exist.', 44, $this->source); })()), "ad", [], "any", false, false, false, 44), "author", [], "any", false, false, false, 44), "picture", [], "any", false, false, false, 44), "html", null, true);
        echo "\" class=\"avatar avatar-medium\" alt=\"Avatar de ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["booking"]) || array_key_exists("booking", $context) ? $context["booking"] : (function () { throw new RuntimeError('Variable "booking" does not exist.', 44, $this->source); })()), "ad", [], "any", false, false, false, 44), "author", [], "any", false, false, false, 44), "fullname", [], "any", false, false, false, 44), "html", null, true);
        echo "\">
                        </div>
                        <div class=\"col-9\">
                            <h4>
                                <a href=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_show", ["slug" => twig_get_attribute($this->env, $this->source, (isset($context["author"]) || array_key_exists("author", $context) ? $context["author"] : (function () { throw new RuntimeError('Variable "author" does not exist.', 48, $this->source); })()), "slug", [], "any", false, false, false, 48)]), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["author"]) || array_key_exists("author", $context) ? $context["author"] : (function () { throw new RuntimeError('Variable "author" does not exist.', 48, $this->source); })()), "fullName", [], "any", false, false, false, 48), "html", null, true);
        echo "</a>
                            </h4>
                            <span class=\"badge badge-primary\">";
        // line 50
        echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["author"]) || array_key_exists("author", $context) ? $context["author"] : (function () { throw new RuntimeError('Variable "author" does not exist.', 50, $this->source); })()), "ads", [], "any", false, false, false, 50)), "html", null, true);
        echo " annonces</span>
                        </div>
                    </div>
                    ";
        // line 53
        echo twig_get_attribute($this->env, $this->source, (isset($context["author"]) || array_key_exists("author", $context) ? $context["author"] : (function () { throw new RuntimeError('Variable "author" does not exist.', 53, $this->source); })()), "description", [], "any", false, false, false, 53);
        echo "
                    <a href=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_show", ["slug" => twig_get_attribute($this->env, $this->source, (isset($context["author"]) || array_key_exists("author", $context) ? $context["author"] : (function () { throw new RuntimeError('Variable "author" does not exist.', 54, $this->source); })()), "slug", [], "any", false, false, false, 54)]), "html", null, true);
        echo "\" class=\"btn btn-primary\">Plus d'informations sur ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["author"]) || array_key_exists("author", $context) ? $context["author"] : (function () { throw new RuntimeError('Variable "author" does not exist.', 54, $this->source); })()), "firstName", [], "any", false, false, false, 54), "html", null, true);
        echo "</a>
                </div>
                <div class=\"alert alert-light\">
                <h2 class=\"alert-heading\" id=\"comment\">Votre avis compte !</h2>
                ";
        // line 58
        if ((1 === twig_compare(twig_date_converter($this->env), twig_date_converter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["booking"]) || array_key_exists("booking", $context) ? $context["booking"] : (function () { throw new RuntimeError('Variable "booking" does not exist.', 58, $this->source); })()), "endDate", [], "any", false, false, false, 58))))) {
            // line 59
            echo "                    ";
            $context["comment"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["booking"]) || array_key_exists("booking", $context) ? $context["booking"] : (function () { throw new RuntimeError('Variable "booking" does not exist.', 59, $this->source); })()), "ad", [], "any", false, false, false, 59), "commentFromAuthor", [0 => twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 59, $this->source); })()), "user", [], "any", false, false, false, 59)], "method", false, false, false, 59);
            // line 60
            echo "                    ";
            if ( !(null === (isset($context["comment"]) || array_key_exists("comment", $context) ? $context["comment"] : (function () { throw new RuntimeError('Variable "comment" does not exist.', 60, $this->source); })()))) {
                // line 61
                echo "                        <blockquote>
                            ";
                // line 62
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["comment"]) || array_key_exists("comment", $context) ? $context["comment"] : (function () { throw new RuntimeError('Variable "comment" does not exist.', 62, $this->source); })()), "content", [], "any", false, false, false, 62), "html", null, true);
                echo "
                        </blockquote>
                        <strong>Note : </strong> ";
                // line 64
                $this->loadTemplate("partials/rating.html.twig", "booking/show.html.twig", 64)->display(twig_array_merge($context, ["rating" => twig_get_attribute($this->env, $this->source, (isset($context["comment"]) || array_key_exists("comment", $context) ? $context["comment"] : (function () { throw new RuntimeError('Variable "comment" does not exist.', 64, $this->source); })()), "rating", [], "any", false, false, false, 64)]));
                // line 65
                echo "                    ";
            } else {
                // line 66
                echo "                        ";
                echo                 $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 66, $this->source); })()), 'form_start');
                echo "
                        ";
                // line 67
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 67, $this->source); })()), 'widget');
                echo "
                        <button type=\"submit\" class=\"btn btn-outline-primary\">Confirmer !</button>
                        ";
                // line 69
                echo                 $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 69, $this->source); })()), 'form_end');
                echo "
                    ";
            }
            // line 71
            echo "                ";
        } else {
            // line 72
            echo "                    <p>Vous ne pourrez pas noter cette annonce tant que vous n'avez pas effectué votre voyage.</p>
                ";
        }
        // line 74
        echo "                </div>
            </div>
            <div class=\"col\">
                <div class=\"alert alert-light\">
                    <h2 class=\"alert heading\">Votre hébergement</h2>
                    <h4>
                        <a href=\"";
        // line 80
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ads_show", ["slug" => twig_get_attribute($this->env, $this->source, (isset($context["ad"]) || array_key_exists("ad", $context) ? $context["ad"] : (function () { throw new RuntimeError('Variable "ad" does not exist.', 80, $this->source); })()), "slug", [], "any", false, false, false, 80)]), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ad"]) || array_key_exists("ad", $context) ? $context["ad"] : (function () { throw new RuntimeError('Variable "ad" does not exist.', 80, $this->source); })()), "title", [], "any", false, false, false, 80), "html", null, true);
        echo "</a>
                    </h4>

                    <img src=\"";
        // line 83
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ad"]) || array_key_exists("ad", $context) ? $context["ad"] : (function () { throw new RuntimeError('Variable "ad" does not exist.', 83, $this->source); })()), "coverImage", [], "any", false, false, false, 83), "html", null, true);
        echo "\" alt=\"Image de ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ad"]) || array_key_exists("ad", $context) ? $context["ad"] : (function () { throw new RuntimeError('Variable "ad" does not exist.', 83, $this->source); })()), "title", [], "any", false, false, false, 83), "html", null, true);
        echo "\" class=\"img-fluid mb-3\">

                    ";
        // line 85
        echo twig_get_attribute($this->env, $this->source, (isset($context["ad"]) || array_key_exists("ad", $context) ? $context["ad"] : (function () { throw new RuntimeError('Variable "ad" does not exist.', 85, $this->source); })()), "content", [], "any", false, false, false, 85);
        echo "

                    <a href=\"";
        // line 87
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ads_show", ["slug" => twig_get_attribute($this->env, $this->source, (isset($context["ad"]) || array_key_exists("ad", $context) ? $context["ad"] : (function () { throw new RuntimeError('Variable "ad" does not exist.', 87, $this->source); })()), "slug", [], "any", false, false, false, 87)]), "html", null, true);
        echo "\" class=\"btn btn-outline-primary\">Plus d'informations</a>
                </div>
            </div>
        </div>
    </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "booking/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  272 => 87,  267 => 85,  260 => 83,  252 => 80,  244 => 74,  240 => 72,  237 => 71,  232 => 69,  227 => 67,  222 => 66,  219 => 65,  217 => 64,  212 => 62,  209 => 61,  206 => 60,  203 => 59,  201 => 58,  192 => 54,  188 => 53,  182 => 50,  175 => 48,  166 => 44,  156 => 37,  151 => 35,  146 => 33,  141 => 31,  136 => 29,  131 => 27,  122 => 20,  108 => 15,  103 => 12,  101 => 11,  96 => 9,  93 => 8,  91 => 7,  89 => 6,  79 => 4,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}
{% block title %}Réservation n°{{booking.id}}{% endblock %}

{% block body %}
{# On crée des variables pour éviter de réécrire booking.ad.author à chaque fois #}
{% set ad = booking.ad %}
{% set author = ad.author %}
    <div class=\"container\">
        <h1 class=\"my-5\">Votre réservation n°{{booking.id}}</h1>

        {% if app.request.query.get('withAlert') %}
            <div class=\"alert alert-success\">
                <h4 class=\"alert-heading\">Bravo !</h4>
                <p>
                    Votre réservation auprès de <strong> <a href=\"{{ path(\"user_show\", {'slug' : author.slug})}}\">{{author.fullName}}</a></strong> pour l'annonce <strong><a href=\"{{path('ads_show', {'slug' : ad.slug})}}\">{{ad.title}}</a></strong>
                    a bien été prise en compte !
                </p>
            </div>
        {% endif %}
        <div class=\"row\">
            <div class=\"col\">

                <div class=\"alert alert-light\">
                    <h2>Détails</h2>
                    <dl class=\"row\">
                        <dt class=\"col-md-4\">Numéro</dt>
                        <dd class=\"col-md-8\">{{booking.id}}</dd>
                        <dt class=\"col-md-4\">Date d'arrivée</dt>
                        <dd class=\"col-md-8\">{{booking.startDate | date('d/m/Y')}}</dd>
                        <dt class=\"col-md-4\">Date de départ</dt>
                        <dd class=\"col-md-8\">{{booking.endDate | date('d/m/Y')}}</dd>
                        <dt class=\"col-md-4\">Nombre de nuits</dt>
                        <dd class=\"col-md-8\">{{booking.duration}}</dd>
                        <dt class=\"col-md-4\">Montont total</dt>
                        <dd class=\"col-md-8\">{{booking.amount | number_format(2,',', ' ')}}&euro;</dd>
                        <dt class=\"col-md-4\">Commentaire</dt>
                        <dd class=\"col-md-8\">{{booking.comment | default('Aucun commentaire')}}</dd>
                    </dl>
                    <hr>

                    <h2 class=\"alert-heading\">Votre hôte</h2>
                    <div class=\"row mb-3\">
                        <div class=\"col-3\">
                            <img src=\"{{booking.ad.author.picture}}\" class=\"avatar avatar-medium\" alt=\"Avatar de {{booking.ad.author.fullname}}\">
                        </div>
                        <div class=\"col-9\">
                            <h4>
                                <a href=\"{{path('user_show', {'slug' : author.slug})}}\">{{author.fullName}}</a>
                            </h4>
                            <span class=\"badge badge-primary\">{{author.ads | length}} annonces</span>
                        </div>
                    </div>
                    {{author.description | raw}}
                    <a href=\"{{ path(\"user_show\", {'slug' : author.slug})}}\" class=\"btn btn-primary\">Plus d'informations sur {{author.firstName}}</a>
                </div>
                <div class=\"alert alert-light\">
                <h2 class=\"alert-heading\" id=\"comment\">Votre avis compte !</h2>
                {% if date() > date(booking.endDate) %}
                    {% set comment = booking.ad.commentFromAuthor(app.user) %}
                    {% if comment is not null %}
                        <blockquote>
                            {{comment.content}}
                        </blockquote>
                        <strong>Note : </strong> {% include \"partials/rating.html.twig\" with {'rating' : comment.rating} %}
                    {% else %}
                        {{form_start(form)}}
                        {{form_widget(form)}}
                        <button type=\"submit\" class=\"btn btn-outline-primary\">Confirmer !</button>
                        {{form_end(form)}}
                    {% endif %}
                {% else %}
                    <p>Vous ne pourrez pas noter cette annonce tant que vous n'avez pas effectué votre voyage.</p>
                {% endif %}
                </div>
            </div>
            <div class=\"col\">
                <div class=\"alert alert-light\">
                    <h2 class=\"alert heading\">Votre hébergement</h2>
                    <h4>
                        <a href=\"{{path(\"ads_show\", {'slug' : ad.slug})}}\">{{ ad.title}}</a>
                    </h4>

                    <img src=\"{{ad.coverImage}}\" alt=\"Image de {{ad.title}}\" class=\"img-fluid mb-3\">

                    {{ad.content | raw}}

                    <a href=\"{{path('ads_show', {'slug' : ad.slug})}}\" class=\"btn btn-outline-primary\">Plus d'informations</a>
                </div>
            </div>
        </div>
    </div>

{% endblock %}

", "booking/show.html.twig", "/Applications/MAMP/htdocs/lineup-copie/templates/booking/show.html.twig");
    }
}
