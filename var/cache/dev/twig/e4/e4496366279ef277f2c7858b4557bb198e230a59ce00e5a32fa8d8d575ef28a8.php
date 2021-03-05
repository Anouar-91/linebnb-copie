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

/* ad/_ad.html.twig */
class __TwigTemplate_adf63ff82921311fd96d2620dc9b6877a6fdaf9ab206bf0cf525bdfc17f7b0d8 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "ad/_ad.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "ad/_ad.html.twig"));

        // line 1
        $context["url"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ads_show", ["slug" => twig_get_attribute($this->env, $this->source, (isset($context["ad"]) || array_key_exists("ad", $context) ? $context["ad"] : (function () { throw new RuntimeError('Variable "ad" does not exist.', 1, $this->source); })()), "slug", [], "any", false, false, false, 1)]);
        // line 2
        echo "<div class=\"col-12 col-lg-4\">

    <div class=\"card bg-light mb-3\">
        <div class=\"card-header text-center\">
            ";
        // line 6
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ad"]) || array_key_exists("ad", $context) ? $context["ad"] : (function () { throw new RuntimeError('Variable "ad" does not exist.', 6, $this->source); })()), "rooms", [], "any", false, false, false, 6), "html", null, true);
        echo " chambres, <strong>";
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ad"]) || array_key_exists("ad", $context) ? $context["ad"] : (function () { throw new RuntimeError('Variable "ad" does not exist.', 6, $this->source); })()), "price", [], "any", false, false, false, 6), 2, ",", " "), "html", null, true);
        echo "€</strong><br>
            ";
        // line 7
        if ((1 === twig_compare(twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ad"]) || array_key_exists("ad", $context) ? $context["ad"] : (function () { throw new RuntimeError('Variable "ad" does not exist.', 7, $this->source); })()), "comments", [], "any", false, false, false, 7)), 0))) {
            // line 8
            echo "                ";
            $this->loadTemplate("partials/rating.html.twig", "ad/_ad.html.twig", 8)->display(twig_array_merge($context, ["rating" => twig_get_attribute($this->env, $this->source, (isset($context["ad"]) || array_key_exists("ad", $context) ? $context["ad"] : (function () { throw new RuntimeError('Variable "ad" does not exist.', 8, $this->source); })()), "avgRatings", [], "any", false, false, false, 8)]));
            // line 9
            echo "            ";
        } else {
            // line 10
            echo "                <small>Pas encore noté</small>
            ";
        }
        // line 12
        echo "        </div>
        <a href=\"";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["url"]) || array_key_exists("url", $context) ? $context["url"] : (function () { throw new RuntimeError('Variable "url" does not exist.', 13, $this->source); })()), "html", null, true);
        echo "\">
            <img src=\"";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ad"]) || array_key_exists("ad", $context) ? $context["ad"] : (function () { throw new RuntimeError('Variable "ad" does not exist.', 14, $this->source); })()), "coverImage", [], "any", false, false, false, 14), "html", null, true);
        echo "\" alt=\"image de l'appartement\" style=\"height: 200px; width: 100%; display:block\" >
        </a>
        <div class=\"card-body\">
            <a href=\"";
        // line 17
        echo twig_escape_filter($this->env, (isset($context["url"]) || array_key_exists("url", $context) ? $context["url"] : (function () { throw new RuntimeError('Variable "url" does not exist.', 17, $this->source); })()), "html", null, true);
        echo "\">
                <h4 class=\"card-title\">
                    ";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ad"]) || array_key_exists("ad", $context) ? $context["ad"] : (function () { throw new RuntimeError('Variable "ad" does not exist.', 19, $this->source); })()), "title", [], "any", false, false, false, 19), "html", null, true);
        echo "
                </h4> 
            </a>
            <p class=\"card-text\">
                ";
        // line 23
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ad"]) || array_key_exists("ad", $context) ? $context["ad"] : (function () { throw new RuntimeError('Variable "ad" does not exist.', 23, $this->source); })()), "introduction", [], "any", false, false, false, 23), "html", null, true);
        echo "
            </p>

            <a class=\"btn btn-primary\" href=\"";
        // line 26
        echo twig_escape_filter($this->env, (isset($context["url"]) || array_key_exists("url", $context) ? $context["url"] : (function () { throw new RuntimeError('Variable "url" does not exist.', 26, $this->source); })()), "html", null, true);
        echo "\">En savoir plus !</a>
            ";
        // line 27
        if ((twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 27, $this->source); })()), "user", [], "any", false, false, false, 27) && (0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 27, $this->source); })()), "user", [], "any", false, false, false, 27), twig_get_attribute($this->env, $this->source, (isset($context["ad"]) || array_key_exists("ad", $context) ? $context["ad"] : (function () { throw new RuntimeError('Variable "ad" does not exist.', 27, $this->source); })()), "author", [], "any", false, false, false, 27))))) {
            // line 28
            echo "            <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ads_edit", ["slug" => twig_get_attribute($this->env, $this->source, (isset($context["ad"]) || array_key_exists("ad", $context) ? $context["ad"] : (function () { throw new RuntimeError('Variable "ad" does not exist.', 28, $this->source); })()), "slug", [], "any", false, false, false, 28)]), "html", null, true);
            echo "\" class=\"btn btn-secondary\">Modifier l'annonce</a>
            ";
        }
        // line 30
        echo "        </div>
    </div>
</div>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "ad/_ad.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 30,  106 => 28,  104 => 27,  100 => 26,  94 => 23,  87 => 19,  82 => 17,  76 => 14,  72 => 13,  69 => 12,  65 => 10,  62 => 9,  59 => 8,  57 => 7,  51 => 6,  45 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set url = path('ads_show', {'slug' : ad.slug}) %}
<div class=\"col-12 col-lg-4\">

    <div class=\"card bg-light mb-3\">
        <div class=\"card-header text-center\">
            {{ad.rooms}} chambres, <strong>{{ad.price | number_format(2,',', ' ')}}€</strong><br>
            {% if ad.comments | length > 0 %}
                {% include \"partials/rating.html.twig\" with {'rating' : ad.avgRatings} %}
            {% else %}
                <small>Pas encore noté</small>
            {% endif %}
        </div>
        <a href=\"{{url}}\">
            <img src=\"{{ad.coverImage}}\" alt=\"image de l'appartement\" style=\"height: 200px; width: 100%; display:block\" >
        </a>
        <div class=\"card-body\">
            <a href=\"{{url}}\">
                <h4 class=\"card-title\">
                    {{ ad.title}}
                </h4> 
            </a>
            <p class=\"card-text\">
                {{ad.introduction}}
            </p>

            <a class=\"btn btn-primary\" href=\"{{url}}\">En savoir plus !</a>
            {% if(app.user and app.user == ad.author)%}
            <a href=\"{{ path('ads_edit', {'slug': ad.slug}) }}\" class=\"btn btn-secondary\">Modifier l'annonce</a>
            {% endif %}
        </div>
    </div>
</div>", "ad/_ad.html.twig", "/Applications/MAMP/htdocs/lineup-copie/templates/ad/_ad.html.twig");
    }
}
