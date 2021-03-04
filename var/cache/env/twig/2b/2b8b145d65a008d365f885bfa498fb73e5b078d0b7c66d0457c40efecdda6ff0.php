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

/* ad/_collection.html.twig */
class __TwigTemplate_1fb7df9c0cf266e49b0f9784588ab0352b9ccc6b02bb92f7b398b02e5b67e3b3 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            '_ad_images_widget' => [$this, 'block__ad_images_widget'],
            '_ad_images_entry_row' => [$this, 'block__ad_images_entry_row'],
            '_ad_images_entry_widget' => [$this, 'block__ad_images_entry_widget'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "ad/_collection.html.twig"));

        // line 1
        echo "
";
        // line 2
        $this->displayBlock('_ad_images_widget', $context, $blocks);
        // line 17
        echo "
";
        // line 18
        $this->displayBlock('_ad_images_entry_row', $context, $blocks);
        // line 23
        echo "
";
        // line 24
        $this->displayBlock('_ad_images_entry_widget', $context, $blocks);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block__ad_images_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "_ad_images_widget"));

        echo " ";
        // line 3
        echo "    <p>Ici, vous pouvez ajoputer vos propres images : </p>

    <input type=\"hidden\" id=\"widgets-counter\" value=\"0\">

    ";
        // line 7
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 7, $this->source); })()), 'widget');
        echo "

    <div class=\"form-group\">
        <button type=\"button\" id=\"add-image\" class=\"btn btn-primary\">
            <i class=\"fas fa-plus\"></i>
            Ajouter une image
            </button>
    </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 18
    public function block__ad_images_entry_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "_ad_images_entry_row"));

        echo " ";
        // line 19
        echo "
     ";
        // line 20
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 20, $this->source); })()), 'widget');
        echo "

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 24
    public function block__ad_images_entry_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "_ad_images_entry_widget"));

        echo " 
    <div class=\"form-group\" id=\"block_";
        // line 25
        echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 25, $this->source); })()), "html", null, true);
        echo "\">
        <div class=\"row\">
            <div class=\"col-10\">
                <div class=\"row\">
                    <div class=\"col\">
                        ";
        // line 30
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 30, $this->source); })()), "url", [], "any", false, false, false, 30), 'widget');
        echo "
                         ";
        // line 31
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 31, $this->source); })()), "url", [], "any", false, false, false, 31), 'errors');
        echo " ";
        // line 32
        echo "                    </div>
                    <div class=\"col\">
                        ";
        // line 34
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 34, $this->source); })()), "caption", [], "any", false, false, false, 34), 'widget');
        echo "
                        ";
        // line 35
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 35, $this->source); })()), "caption", [], "any", false, false, false, 35), 'errors');
        echo " ";
        // line 36
        echo "                    </div>
                </div>
            </div>
            <div class=\"col-2\">
                <button type=\"button\" data-action=\"delete\" data-target=\"#block_";
        // line 40
        echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 40, $this->source); })()), "html", null, true);
        echo "\" class=\"btn btn-danger\"> X </button>
            </div>
        </div>
    </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "ad/_collection.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  156 => 40,  150 => 36,  147 => 35,  143 => 34,  139 => 32,  136 => 31,  132 => 30,  124 => 25,  115 => 24,  105 => 20,  102 => 19,  94 => 18,  77 => 7,  71 => 3,  63 => 2,  56 => 24,  53 => 23,  51 => 18,  48 => 17,  46 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
{% block _ad_images_widget %} {# permet de modifier la sortie de form_widget() sur  un champ donné #}
    <p>Ici, vous pouvez ajoputer vos propres images : </p>

    <input type=\"hidden\" id=\"widgets-counter\" value=\"0\">

    {{ form_widget(form) }}

    <div class=\"form-group\">
        <button type=\"button\" id=\"add-image\" class=\"btn btn-primary\">
            <i class=\"fas fa-plus\"></i>
            Ajouter une image
            </button>
    </div>

{% endblock %}

{% block _ad_images_entry_row %} {# la row contient le label, les erreurs, le widget et les aides #}

     {{ form_widget(form) }}

{% endblock %}

{% block _ad_images_entry_widget %} 
    <div class=\"form-group\" id=\"block_{{id}}\">
        <div class=\"row\">
            <div class=\"col-10\">
                <div class=\"row\">
                    <div class=\"col\">
                        {{ form_widget(form.url) }}
                         {{form_errors(form.url)}} {# permet d'afficher les erreurs #}
                    </div>
                    <div class=\"col\">
                        {{ form_widget(form.caption)}}
                        {{form_errors(form.caption)}} {# permet d'afficher les erreurs #}
                    </div>
                </div>
            </div>
            <div class=\"col-2\">
                <button type=\"button\" data-action=\"delete\" data-target=\"#block_{{id}}\" class=\"btn btn-danger\"> X </button>
            </div>
        </div>
    </div>

{% endblock %}", "ad/_collection.html.twig", "/Applications/MAMP/htdocs/lineup/templates/ad/_collection.html.twig");
    }
}
