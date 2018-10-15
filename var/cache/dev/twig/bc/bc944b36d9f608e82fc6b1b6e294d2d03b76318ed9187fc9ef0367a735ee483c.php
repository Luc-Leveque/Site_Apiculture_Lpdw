<?php

/* blog/show.html.twig */
class __TwigTemplate_c0d09151562450b2873e300b412c10a44f5421b3889c719052ba28350a49b3a4 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "blog/show.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "blog/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "blog/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <artcicle>
        <h2>";
        // line 5
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new Twig_Error_Runtime('Variable "article" does not exist.', 5, $this->source); })()), "title", array()), "html", null, true);
        echo "</h2>
        <div class=\"metadata\">Ecrit le
            ";
        // line 7
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new Twig_Error_Runtime('Variable "article" does not exist.', 7, $this->source); })()), "createAt", array()), "d/m/Y"), "html", null, true);
        echo "
            à
            ";
        // line 9
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new Twig_Error_Runtime('Variable "article" does not exist.', 9, $this->source); })()), "createAt", array()), "H:i"), "html", null, true);
        echo "
            dans la catégorie
            ";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new Twig_Error_Runtime('Variable "article" does not exist.', 11, $this->source); })()), "category", array()), "title", array()), "html", null, true);
        echo "</div>
        <div class=\"content\">
            <img src=\"";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new Twig_Error_Runtime('Variable "article" does not exist.', 13, $this->source); })()), "image", array()), "html", null, true);
        echo "\" alt=\"\">
            ";
        // line 14
        echo twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new Twig_Error_Runtime('Variable "article" does not exist.', 14, $this->source); })()), "content", array());
        echo "
        </div>
    </artcicle>

    <section id=\"commentaires\">
        <h1>";
        // line 19
        echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new Twig_Error_Runtime('Variable "article" does not exist.', 19, $this->source); })()), "comments", array())), "html", null, true);
        echo "
            commentaires :</h1>
        ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new Twig_Error_Runtime('Variable "article" does not exist.', 21, $this->source); })()), "comments", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
            // line 22
            echo "
            <div class=\"comment\">
                <div class=\"row\">
                    <div class=\"col-3\">
                        ";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "author", array()), "html", null, true);
            echo "
                        (<small>";
            // line 27
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "createdAt", array()), "d/m/Y à H:i"), "html", null, true);
            echo "</small>)
                    </div>
                    <div class=\"col\">
                        ";
            // line 30
            echo twig_get_attribute($this->env, $this->source, $context["comment"], "content", array());
            echo "
                    </div>
                </div>
            </div>

        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "
        ";
        // line 37
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 37, $this->source); })()), "user", array())) {
            // line 38
            echo "
            ";
            // line 39
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["commentForm"]) || array_key_exists("commentForm", $context) ? $context["commentForm"] : (function () { throw new Twig_Error_Runtime('Variable "commentForm" does not exist.', 39, $this->source); })()), 'form_start');
            echo "
            ";
            // line 40
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["commentForm"]) || array_key_exists("commentForm", $context) ? $context["commentForm"] : (function () { throw new Twig_Error_Runtime('Variable "commentForm" does not exist.', 40, $this->source); })()), "author", array()), 'row', array("attr" => array("placeholder" => "Votre nom")));
            echo "
            ";
            // line 41
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["commentForm"]) || array_key_exists("commentForm", $context) ? $context["commentForm"] : (function () { throw new Twig_Error_Runtime('Variable "commentForm" does not exist.', 41, $this->source); })()), "content", array()), 'row', array("attr" => array("placeholder" => "Votre commentaire")));
            echo "

            <button type=\"submit\" class=\"btn btn-success\">Commenter !</button>

            ";
            // line 45
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["commentForm"]) || array_key_exists("commentForm", $context) ? $context["commentForm"] : (function () { throw new Twig_Error_Runtime('Variable "commentForm" does not exist.', 45, $this->source); })()), 'form_end');
            echo "

        ";
        } else {
            // line 48
            echo "            <h2>Vous ne pouvez pas commenter si vous n'êtes pas connecter !</h2>
            <a href=\"";
            // line 49
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("security_login");
            echo "\" class=\"btn btn-primary\">Connexion</a>
        ";
        }
        // line 51
        echo "
    </section>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "blog/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  162 => 51,  157 => 49,  154 => 48,  148 => 45,  141 => 41,  137 => 40,  133 => 39,  130 => 38,  128 => 37,  125 => 36,  113 => 30,  107 => 27,  103 => 26,  97 => 22,  93 => 21,  88 => 19,  80 => 14,  76 => 13,  71 => 11,  66 => 9,  61 => 7,  56 => 5,  53 => 4,  44 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <artcicle>
        <h2>{{ article.title }}</h2>
        <div class=\"metadata\">Ecrit le
            {{ article.createAt | date('d/m/Y') }}
            à
            {{ article.createAt | date('H:i') }}
            dans la catégorie
            {{ article.category.title}}</div>
        <div class=\"content\">
            <img src=\"{{ article.image }}\" alt=\"\">
            {{ article.content | raw }}
        </div>
    </artcicle>

    <section id=\"commentaires\">
        <h1>{{ article.comments | length }}
            commentaires :</h1>
        {% for comment in article.comments %}

            <div class=\"comment\">
                <div class=\"row\">
                    <div class=\"col-3\">
                        {{ comment.author}}
                        (<small>{{ comment.createdAt | date('d/m/Y à H:i')}}</small>)
                    </div>
                    <div class=\"col\">
                        {{ comment.content | raw}}
                    </div>
                </div>
            </div>

        {% endfor %}

        {% if app.user %}

            {{ form_start(commentForm) }}
            {{ form_row(commentForm.author, {'attr': {'placeholder': \"Votre nom\"}}) }}
            {{ form_row(commentForm.content, {'attr': {'placeholder': \"Votre commentaire\"}}) }}

            <button type=\"submit\" class=\"btn btn-success\">Commenter !</button>

            {{ form_end(commentForm) }}

        {% else %}
            <h2>Vous ne pouvez pas commenter si vous n'êtes pas connecter !</h2>
            <a href=\"{{ path('security_login')}}\" class=\"btn btn-primary\">Connexion</a>
        {% endif %}

    </section>

{% endblock %}", "blog/show.html.twig", "/Users/raphaelgoncalves/Documents/GitHub/Site_Appiculture_Lpdw/templates/blog/show.html.twig");
    }
}
