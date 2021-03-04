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
class __TwigTemplate_d09bc2d0467edde520d87c5a881373b0e670e4e96684cc1081a17e4708708535 extends Template
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
        // line 1
        $context["url"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ads_show", ["slug" => twig_get_attribute($this->env, $this->source, ($context["ad"] ?? null), "slug", [], "any", false, false, false, 1)]);
        // line 2
        echo "<div class=\"col-md-4\">

    <div class=\"card bg-light mb-3\">
        <div class=\"card-header text-center\">
            ";
        // line 6
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["ad"] ?? null), "rooms", [], "any", false, false, false, 6), "html", null, true);
        echo " chambres, <strong>";
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["ad"] ?? null), "price", [], "any", false, false, false, 6), 2, ",", " "), "html", null, true);
        echo "€</strong><br>
            ";
        // line 7
        if ((1 === twig_compare(twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["ad"] ?? null), "comments", [], "any", false, false, false, 7)), 0))) {
            // line 8
            echo "                ";
            $this->loadTemplate("partials/rating.html.twig", "ad/_ad.html.twig", 8)->display(twig_array_merge($context, ["rating" => twig_get_attribute($this->env, $this->source, ($context["ad"] ?? null), "avgRatings", [], "any", false, false, false, 8)]));
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
        echo twig_escape_filter($this->env, ($context["url"] ?? null), "html", null, true);
        echo "\">
            <img src=\"";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["ad"] ?? null), "coverImage", [], "any", false, false, false, 14), "html", null, true);
        echo "\" alt=\"image de l'appartement\" style=\"height: 200px; width: 100%; display:block\" >
        </a>
        <div class=\"card-body\">
            <a href=\"";
        // line 17
        echo twig_escape_filter($this->env, ($context["url"] ?? null), "html", null, true);
        echo "\">
                <h4 class=\"card-title\">
                    ";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["ad"] ?? null), "title", [], "any", false, false, false, 19), "html", null, true);
        echo "
                </h4> 
            </a>
            <p class=\"card-text\">
                ";
        // line 23
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["ad"] ?? null), "introduction", [], "any", false, false, false, 23), "html", null, true);
        echo "
            </p>

            <a class=\"btn btn-primary\" href=\"";
        // line 26
        echo twig_escape_filter($this->env, ($context["url"] ?? null), "html", null, true);
        echo "\">En savoir plus !</a>
            ";
        // line 27
        if ((twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 27) && (0 === twig_compare(twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 27), twig_get_attribute($this->env, $this->source, ($context["ad"] ?? null), "author", [], "any", false, false, false, 27))))) {
            // line 28
            echo "            <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ads_edit", ["slug" => twig_get_attribute($this->env, $this->source, ($context["ad"] ?? null), "slug", [], "any", false, false, false, 28)]), "html", null, true);
            echo "\" class=\"btn btn-secondary\">Modifier l'annonce</a>
            ";
        }
        // line 30
        echo "        </div>
    </div>
</div>";
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
        return array (  106 => 30,  100 => 28,  98 => 27,  94 => 26,  88 => 23,  81 => 19,  76 => 17,  70 => 14,  66 => 13,  63 => 12,  59 => 10,  56 => 9,  53 => 8,  51 => 7,  45 => 6,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "ad/_ad.html.twig", "/Applications/MAMP/htdocs/lineup/templates/ad/_ad.html.twig");
    }
}
