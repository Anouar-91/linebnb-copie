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
class __TwigTemplate_e7052075c9ce2ba547fd50deb577411d91a9d64f8b8967c28b97cf1fc1e21f65 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "home.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        echo "        Bienvenue chez votre futur partenaire
    ";
    }

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 7
        echo "        <div class=\"container\">
            <div class=\"jumbotron mt-3\">
                <h1 class=\"display-3\">Bienvenue chez LineBnB</h1>
                <p class=\"lead\">Nous mettons en relations les voyageurs et les propriétaires qui souhaitent profiter d'opportunités et gagner de l'argent en proposant leurs biens à la location !</p>
                <hr class=\"my-4\">
                <p>Vous êtes voyageur ? Vous voulez voir où vous pourriez loger pour votre prochain déplacement ?</p>
                <p class=\"lead\">
                    <a class=\"btn btn-primary btn-lg\" href=\"";
        // line 14
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ads_index");
        echo "\" role=\"button\">Voir nos offres</a>
                </p>
            </div>
        

            <h2 class=\"my-5\"> Nos produits premiums</h2>

            <div class=\"row\">
                ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["ads"] ?? null));
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
        $context['_seq'] = twig_ensure_traversable(($context["users"] ?? null));
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
        return array (  162 => 49,  150 => 43,  146 => 42,  140 => 41,  132 => 36,  127 => 33,  123 => 32,  115 => 26,  100 => 24,  97 => 23,  80 => 22,  69 => 14,  60 => 7,  56 => 6,  51 => 3,  47 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "home.html.twig", "/Applications/MAMP/htdocs/lineup/templates/home.html.twig");
    }
}
