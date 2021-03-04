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

/* booking/book.html.twig */
class __TwigTemplate_cd5165e82f923d453804261d35346628c8e741a57c89778a6f9d4d1fdc28a55e extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "booking/book.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "booking/book.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Réserver l'annonce ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ad"]) || array_key_exists("ad", $context) ? $context["ad"] : (function () { throw new RuntimeError('Variable "ad" does not exist.', 3, $this->source); })()), "title", [], "any", false, false, false, 3), "html", null, true);
        echo " !";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        echo "    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css\" integrity=\"sha512-mSYUmp1HYZDFaVKK//63EcZq4iFWFjxSL+Z3T/aCt4IO9Cejm03q3NKKYN6pFQzY0SBOr8h+eCIAZHPXcpZaNw==\" crossorigin=\"anonymous\" />
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 8
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "    <div class=\"container\">
        <h1>Réserver l'annonce : <em>";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ad"]) || array_key_exists("ad", $context) ? $context["ad"] : (function () { throw new RuntimeError('Variable "ad" does not exist.', 10, $this->source); })()), "title", [], "any", false, false, false, 10), "html", null, true);
        echo "</em></h1>

        <p>Vous êtes sur le point de réserver le bien de <strong>";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["ad"]) || array_key_exists("ad", $context) ? $context["ad"] : (function () { throw new RuntimeError('Variable "ad" does not exist.', 12, $this->source); })()), "author", [], "any", false, false, false, 12), "fullName", [], "any", false, false, false, 12), "html", null, true);
        echo "</strong>, dites nous tout, on s'occupe du reste !</p>
    
        ";
        // line 14
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 14, $this->source); })()), 'form_start');
        echo "

        <div class=\"alert alert-light\">
            <h4>Commencez par nous dire quelles sont les dates qui vous intéressent !</h4>
            <div class=\"row\">
                <div class=\"col\">
                    ";
        // line 20
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 20, $this->source); })()), "startDate", [], "any", false, false, false, 20), 'row');
        echo "
                </div>
                <div class=\"col\">
                    ";
        // line 23
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 23, $this->source); })()), "endDate", [], "any", false, false, false, 23), 'row');
        echo "
                </div>
            </div>
            <h4 class=\"mt-2\">Montant du séjour : <span id=\"amount\">...</span>&euro;</h4>
            <span id=\"days\">0</span> nuit(s) à ";
        // line 27
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ad"]) || array_key_exists("ad", $context) ? $context["ad"] : (function () { throw new RuntimeError('Variable "ad" does not exist.', 27, $this->source); })()), "price", [], "any", false, false, false, 27), 2, ",", " "), "html", null, true);
        echo "&euro; par nuit

            <h4 class=\"mt-3\">Vous avez un commentaire ?</h4>
            ";
        // line 30
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 30, $this->source); })()), "comment", [], "any", false, false, false, 30), 'row');
        echo "
        </div>


        <h2>Vous avez terminé !!</h2>
        <p>Vacance de rêve ? Hébergement pour le boulot ? Peu importe, on est avec vous !</p>

        <button type=\"submit\" class=\"btn btn-outline-primary\">Je réserve !</button>

        ";
        // line 39
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 39, $this->source); })()), 'form_end');
        echo "
    </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 44
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 45
        echo "<script src=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js\" integrity=\"sha512-T/tUfKSV1bihCnd+MxKD0Hm1uBBroVYBOYSk1knyvQ9VyZJpc/ALb4P0r6ubwVPSGB2GvjeoMAJJImBG12TiaQ==\" crossorigin=\"anonymous\"></script>

<script>
";
        // line 49
        echo "
    \$(document).ready(function(){
        \$('#booking_startDate, #booking_endDate').datepicker({
            format: 'dd/mm/yyyy',
            datesDisabled: [
                ";
        // line 54
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["ad"]) || array_key_exists("ad", $context) ? $context["ad"] : (function () { throw new RuntimeError('Variable "ad" does not exist.', 54, $this->source); })()), "notAvailableDays", [], "any", false, false, false, 54));
        foreach ($context['_seq'] as $context["_key"] => $context["day"]) {
            // line 55
            echo "                    \"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["day"], "format", [0 => "d/m/Y"], "method", false, false, false, 55), "html", null, true);
            echo "\",
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['day'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
        echo "            ], 
            startDate: new Date()
        });
        \$('#booking_startDate, #booking_endDate').on('change', calculateAmount);
    });

    function calculateAmount(){
        // on récupère les dates
        //On utilise la fonction replace car la date inscrite dans notre datepicker n'est pas au format de la class date, on va donc utiliser une expression régulière pour capturer les valeurs et les remodeler avec replace
        // 18/09/2018
        // (\\d+)\\/(\\d+)\\/(\\d{4})
        const endDate = new Date (\$('#booking_endDate').val().replace(/(\\d+)\\/(\\d+)\\/(\\d{4})/, '\$3-\$2-\$1'));
        const startDate = new Date (\$('#booking_startDate').val().replace(/(\\d+)\\/(\\d+)\\/(\\d{4})/, '\$3-\$2-\$1'));

        if(startDate && endDate && startDate < endDate){

            const DAY_TIME = 24 * 60 *60 * 1000; // represente 1 journée en miliseconde
            const interval = endDate.getTime() - startDate.getTime();
            const days = interval / DAY_TIME;
            const amount = days * ";
        // line 76
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ad"]) || array_key_exists("ad", $context) ? $context["ad"] : (function () { throw new RuntimeError('Variable "ad" does not exist.', 76, $this->source); })()), "price", [], "any", false, false, false, 76), "html", null, true);
        echo ";

            \$('#days').text(days);
            \$('#amount').text(amount.toLocaleString('fr-FR'))
        }
    }
</script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "booking/book.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  209 => 76,  188 => 57,  179 => 55,  175 => 54,  168 => 49,  163 => 45,  156 => 44,  145 => 39,  133 => 30,  127 => 27,  120 => 23,  114 => 20,  105 => 14,  100 => 12,  95 => 10,  92 => 9,  85 => 8,  77 => 5,  70 => 4,  55 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Réserver l'annonce {{ ad.title }} !{% endblock %}
{% block stylesheets %}
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css\" integrity=\"sha512-mSYUmp1HYZDFaVKK//63EcZq4iFWFjxSL+Z3T/aCt4IO9Cejm03q3NKKYN6pFQzY0SBOr8h+eCIAZHPXcpZaNw==\" crossorigin=\"anonymous\" />
{% endblock %}

{% block body %}
    <div class=\"container\">
        <h1>Réserver l'annonce : <em>{{ ad.title }}</em></h1>

        <p>Vous êtes sur le point de réserver le bien de <strong>{{ ad.author.fullName }}</strong>, dites nous tout, on s'occupe du reste !</p>
    
        {{form_start(form)}}

        <div class=\"alert alert-light\">
            <h4>Commencez par nous dire quelles sont les dates qui vous intéressent !</h4>
            <div class=\"row\">
                <div class=\"col\">
                    {{form_row(form.startDate)}}
                </div>
                <div class=\"col\">
                    {{form_row(form.endDate)}}
                </div>
            </div>
            <h4 class=\"mt-2\">Montant du séjour : <span id=\"amount\">...</span>&euro;</h4>
            <span id=\"days\">0</span> nuit(s) à {{ad.price | number_format(2,',', ' ')}}&euro; par nuit

            <h4 class=\"mt-3\">Vous avez un commentaire ?</h4>
            {{form_row(form.comment)}}
        </div>


        <h2>Vous avez terminé !!</h2>
        <p>Vacance de rêve ? Hébergement pour le boulot ? Peu importe, on est avec vous !</p>

        <button type=\"submit\" class=\"btn btn-outline-primary\">Je réserve !</button>

        {{form_end(form)}}
    </div>

{% endblock %}

{% block javascripts %}
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js\" integrity=\"sha512-T/tUfKSV1bihCnd+MxKD0Hm1uBBroVYBOYSk1knyvQ9VyZJpc/ALb4P0r6ubwVPSGB2GvjeoMAJJImBG12TiaQ==\" crossorigin=\"anonymous\"></script>

<script>
{# uxsolutions/bootstrap-datepicker #}

    \$(document).ready(function(){
        \$('#booking_startDate, #booking_endDate').datepicker({
            format: 'dd/mm/yyyy',
            datesDisabled: [
                {% for day in ad.notAvailableDays %}
                    \"{{ day.format('d/m/Y') }}\",
                {% endfor %}
            ], 
            startDate: new Date()
        });
        \$('#booking_startDate, #booking_endDate').on('change', calculateAmount);
    });

    function calculateAmount(){
        // on récupère les dates
        //On utilise la fonction replace car la date inscrite dans notre datepicker n'est pas au format de la class date, on va donc utiliser une expression régulière pour capturer les valeurs et les remodeler avec replace
        // 18/09/2018
        // (\\d+)\\/(\\d+)\\/(\\d{4})
        const endDate = new Date (\$('#booking_endDate').val().replace(/(\\d+)\\/(\\d+)\\/(\\d{4})/, '\$3-\$2-\$1'));
        const startDate = new Date (\$('#booking_startDate').val().replace(/(\\d+)\\/(\\d+)\\/(\\d{4})/, '\$3-\$2-\$1'));

        if(startDate && endDate && startDate < endDate){

            const DAY_TIME = 24 * 60 *60 * 1000; // represente 1 journée en miliseconde
            const interval = endDate.getTime() - startDate.getTime();
            const days = interval / DAY_TIME;
            const amount = days * {{ ad.price}};

            \$('#days').text(days);
            \$('#amount').text(amount.toLocaleString('fr-FR'))
        }
    }
</script>
{% endblock %}", "booking/book.html.twig", "/Applications/MAMP/htdocs/lineup/templates/booking/book.html.twig");
    }
}
