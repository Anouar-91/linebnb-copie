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

/* admin/ad/edit.html.twig */
class __TwigTemplate_510d0516f264f3aeb8385b81e9f5dc5eda67b2ac439d2580e0a4c200688b8aa9 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/ad/edit.html.twig"));

        $this->parent = $this->loadTemplate("admin/base.html.twig", "admin/ad/edit.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Modification de l'annonce n°";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ad"]) || array_key_exists("ad", $context) ? $context["ad"] : (function () { throw new RuntimeError('Variable "ad" does not exist.', 3, $this->source); })()), "id", [], "any", false, false, false, 3), "html", null, true);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "    <div class=\"container\">
        <h1>Modification de l'annonce ";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ad"]) || array_key_exists("ad", $context) ? $context["ad"] : (function () { throw new RuntimeError('Variable "ad" does not exist.', 8, $this->source); })()), "title", [], "any", false, false, false, 8), "html", null, true);
        echo "</h1>

        ";
        // line 10
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 10, $this->source); })()), 'form_start');
        echo "

        <div class=\"row\">
            <div class=\"col\">
                <div class=\"card bg-light\">
                    <div class=\"card-header\">
                        <h4 class=\"card-title\">Corriger l'annonce ?</h4>
                    </div>
                    <div class=\"card-body\">
                         ";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 19, $this->source); })()), 'widget');
        echo "
                         <button type=\"submit\" class=\"btn btn-outline-primary\">
                            <i class=\"fas fa-check\"></i>
                            Enregistrer les modifications
                         </button>
                    </div>
                </div>
            </div>
            <div class=\"col\">
                <div class=\"card bg-light\">
                    <div class=\"card-header\">
                        <h4 class=\"card-title\">Les réservations</h4>
                    </div>  
                    <div class=\"card-body\">
                        <table class=\"table\">
                            <thead>
                                <tr>   
                                    <th>Id</th>
                                    <th>Voyageur</th>
                                    <th>Date de réservation</th>
                                    <th></th>
                                
                                </tr>
                            </thead>
                            <tbody>
                                ";
        // line 44
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["ad"]) || array_key_exists("ad", $context) ? $context["ad"] : (function () { throw new RuntimeError('Variable "ad" does not exist.', 44, $this->source); })()), "bookings", [], "any", false, false, false, 44));
        foreach ($context['_seq'] as $context["_key"] => $context["booking"]) {
            // line 45
            echo "                                <tr>
                                    <td>";
            // line 46
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["booking"], "id", [], "any", false, false, false, 46), "html", null, true);
            echo "</td>
                                    <td>";
            // line 47
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["booking"], "booker", [], "any", false, false, false, 47), "fullName", [], "any", false, false, false, 47), "html", null, true);
            echo "</td>
                                    <td>";
            // line 48
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["booking"], "createdAt", [], "any", false, false, false, 48), "d/m/Y H:i"), "html", null, true);
            echo "</td>
                                    <td>
                                        <a href=\"#\" class=\"btn btn-primary\">
                                            <i class=\"fas fa-pencil\"></i>
                                        </a>
                                    </td>
                                </tr>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['booking'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        echo "    
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class=\"card bg-light  mt-5\">
                    <div class=\"card-header\">
                        <h4 class=\"card-title\">Les commentaires</h4>
                    </div>  
                    <div class=\"card-body\">
                        <table class=\"table\">
                            <thead>
                                <tr>   
                                    <th>Id</th>
                                    <th>Voyageur</th>
                                    <th>Note</th>
                                    <th>Commentaire</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                ";
        // line 76
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["ad"]) || array_key_exists("ad", $context) ? $context["ad"] : (function () { throw new RuntimeError('Variable "ad" does not exist.', 76, $this->source); })()), "comments", [], "any", false, false, false, 76));
        foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
            // line 77
            echo "                                <tr>
                                    <td>";
            // line 78
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "id", [], "any", false, false, false, 78), "html", null, true);
            echo "</td>
                                    <td>";
            // line 79
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["comment"], "author", [], "any", false, false, false, 79), "fullName", [], "any", false, false, false, 79), "html", null, true);
            echo "</td>
                                    <td>";
            // line 80
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "rating", [], "any", false, false, false, 80), "html", null, true);
            echo "</td>
                                    <td>";
            // line 81
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "content", [], "any", false, false, false, 81), "html", null, true);
            echo "</td>
                                    <td>
                                        <a href=\"#\" class=\"btn btn-primary\">
                                            <i class=\"fas fa-pencil\"></i>
                                        </a>
                                    </td>
                                </tr>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 88
        echo "    
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
       
        
        ";
        // line 97
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 97, $this->source); })()), 'form_end');
        echo "
    </div>


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "admin/ad/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  218 => 97,  207 => 88,  193 => 81,  189 => 80,  185 => 79,  181 => 78,  178 => 77,  174 => 76,  151 => 55,  137 => 48,  133 => 47,  129 => 46,  126 => 45,  122 => 44,  94 => 19,  82 => 10,  77 => 8,  74 => 7,  67 => 6,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"admin/base.html.twig\" %}

{% block title %}Modification de l'annonce n°{{ad.id}}{% endblock %}


{% block body %}
    <div class=\"container\">
        <h1>Modification de l'annonce {{ad.title}}</h1>

        {{form_start(form)}}

        <div class=\"row\">
            <div class=\"col\">
                <div class=\"card bg-light\">
                    <div class=\"card-header\">
                        <h4 class=\"card-title\">Corriger l'annonce ?</h4>
                    </div>
                    <div class=\"card-body\">
                         {{form_widget(form)}}
                         <button type=\"submit\" class=\"btn btn-outline-primary\">
                            <i class=\"fas fa-check\"></i>
                            Enregistrer les modifications
                         </button>
                    </div>
                </div>
            </div>
            <div class=\"col\">
                <div class=\"card bg-light\">
                    <div class=\"card-header\">
                        <h4 class=\"card-title\">Les réservations</h4>
                    </div>  
                    <div class=\"card-body\">
                        <table class=\"table\">
                            <thead>
                                <tr>   
                                    <th>Id</th>
                                    <th>Voyageur</th>
                                    <th>Date de réservation</th>
                                    <th></th>
                                
                                </tr>
                            </thead>
                            <tbody>
                                {% for booking in ad.bookings %}
                                <tr>
                                    <td>{{booking.id}}</td>
                                    <td>{{booking.booker.fullName}}</td>
                                    <td>{{booking.createdAt | date('d/m/Y H:i')}}</td>
                                    <td>
                                        <a href=\"#\" class=\"btn btn-primary\">
                                            <i class=\"fas fa-pencil\"></i>
                                        </a>
                                    </td>
                                </tr>
                                {% endfor %}    
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class=\"card bg-light  mt-5\">
                    <div class=\"card-header\">
                        <h4 class=\"card-title\">Les commentaires</h4>
                    </div>  
                    <div class=\"card-body\">
                        <table class=\"table\">
                            <thead>
                                <tr>   
                                    <th>Id</th>
                                    <th>Voyageur</th>
                                    <th>Note</th>
                                    <th>Commentaire</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                {% for comment in ad.comments %}
                                <tr>
                                    <td>{{comment.id}}</td>
                                    <td>{{comment.author.fullName}}</td>
                                    <td>{{comment.rating}}</td>
                                    <td>{{comment.content}}</td>
                                    <td>
                                        <a href=\"#\" class=\"btn btn-primary\">
                                            <i class=\"fas fa-pencil\"></i>
                                        </a>
                                    </td>
                                </tr>
                                {% endfor %}    
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
       
        
        {{form_end(form)}}
    </div>


{% endblock %}", "admin/ad/edit.html.twig", "/Applications/MAMP/htdocs/lineup/templates/admin/ad/edit.html.twig");
    }
}
