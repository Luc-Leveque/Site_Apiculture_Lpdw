<?php

/* account/view.html.twig */
class __TwigTemplate_7c057ff7fd342054c638bec097438431544c05f6b7a3cf37bdbba0eedb73fef5 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "account/view.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "account/view.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "account/view.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "View Account";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<h4>Détail du compte: ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["account"]) || array_key_exists("account", $context) ? $context["account"] : (function () { throw new Twig_Error_Runtime('Variable "account" does not exist.', 6, $this->source); })()), "name", array()), "html", null, true);
        echo " ID: ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["account"]) || array_key_exists("account", $context) ? $context["account"] : (function () { throw new Twig_Error_Runtime('Variable "account" does not exist.', 6, $this->source); })()), "id", array()), "html", null, true);
        echo "</h4><br />
<h5>Transaction de departs</h5>
<table class=\"table\">
<thead class=\"thead-dark\">
    <tr>
        <th>ID</th>
        <th>Montant</th>
        <th>date</th>
        <th>Compte d'arrivee</th>
    </tr>
    ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["account"]) || array_key_exists("account", $context) ? $context["account"] : (function () { throw new Twig_Error_Runtime('Variable "account" does not exist.', 16, $this->source); })()), "departureTransactions", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["transaction"]) {
            // line 17
            echo "        <tr>
            <td>";
            // line 18
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["transaction"], "id", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 19
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["transaction"], "amount", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 20
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["transaction"], "date", array()), "Y-m-d H:i:s"), "html", null, true);
            echo "</td>
            <td>";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["transaction"], "arrivalAccount", array()), "name", array()), "html", null, true);
            echo "</td>
        </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['transaction'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "    </thead>
</table>
<h5>Transaction d'arrivees</h5>
<table class=\"table\">
<thead class=\"thead-dark\">
    <tr>
        <th>ID</th>
        <th>Montant</th>
        <th>date</th>
        <th>Compte d'arrivee</th>
    </tr>
    ";
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["account"]) || array_key_exists("account", $context) ? $context["account"] : (function () { throw new Twig_Error_Runtime('Variable "account" does not exist.', 35, $this->source); })()), "arrivalTransactions", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["transaction"]) {
            // line 36
            echo "        <tr>
            <td>";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["transaction"], "id", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["transaction"], "amount", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 39
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["transaction"], "date", array()), "Y-m-d H:i:s"), "html", null, true);
            echo "</td>
            <td>";
            // line 40
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["transaction"], "arrivalAccount", array()), "name", array()), "html", null, true);
            echo "</td>
        </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['transaction'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "    </thead>
</table>
<h5>Mes béneficaires</h5>
<table class=\"table\">
<thead class=\"thead-dark\">
    <tr>
        <th>ID</th>
        <th>Nom</th>
    </tr>
    ";
        // line 52
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["account"]) || array_key_exists("account", $context) ? $context["account"] : (function () { throw new Twig_Error_Runtime('Variable "account" does not exist.', 52, $this->source); })()), "beneficiaire", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["beneficiaire"]) {
            // line 53
            echo "        <tr>
            <td>";
            // line 54
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["beneficiaire"], "id", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 55
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["beneficiaire"], "name", array()), "html", null, true);
            echo "</td>
            <td><a href=\"";
            // line 56
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("delete_beneficiaire", array("id" => twig_get_attribute($this->env, $this->source, (isset($context["account"]) || array_key_exists("account", $context) ? $context["account"] : (function () { throw new Twig_Error_Runtime('Variable "account" does not exist.', 56, $this->source); })()), "id", array()))), "html", null, true);
            echo "\">Supprimer beneficiaire</a><br /></td>
         </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['beneficiaire'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
        echo "    </thead>
</table>
<a href=\"";
        // line 61
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("add_beneficiaire", array("id" => twig_get_attribute($this->env, $this->source, (isset($context["account"]) || array_key_exists("account", $context) ? $context["account"] : (function () { throw new Twig_Error_Runtime('Variable "account" does not exist.', 61, $this->source); })()), "id", array()))), "html", null, true);
        echo "\">Ajouter un beneficiaire</a><br />
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "account/view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  196 => 61,  192 => 59,  183 => 56,  179 => 55,  175 => 54,  172 => 53,  168 => 52,  157 => 43,  148 => 40,  144 => 39,  140 => 38,  136 => 37,  133 => 36,  129 => 35,  116 => 24,  107 => 21,  103 => 20,  99 => 19,  95 => 18,  92 => 17,  88 => 16,  72 => 6,  63 => 5,  45 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block title %}View Account{% endblock %}
        
{% block body %}
<h4>Détail du compte: {{ account.name }} ID: {{ account.id }}</h4><br />
<h5>Transaction de departs</h5>
<table class=\"table\">
<thead class=\"thead-dark\">
    <tr>
        <th>ID</th>
        <th>Montant</th>
        <th>date</th>
        <th>Compte d'arrivee</th>
    </tr>
    {% for transaction in account.departureTransactions %}
        <tr>
            <td>{{ transaction.id }}</td>
            <td>{{ transaction.amount }}</td>
            <td>{{ transaction.date | date('Y-m-d H:i:s') }}</td>
            <td>{{ transaction.arrivalAccount.name }}</td>
        </tr>
    {% endfor %}
    </thead>
</table>
<h5>Transaction d'arrivees</h5>
<table class=\"table\">
<thead class=\"thead-dark\">
    <tr>
        <th>ID</th>
        <th>Montant</th>
        <th>date</th>
        <th>Compte d'arrivee</th>
    </tr>
    {% for transaction in account.arrivalTransactions %}
        <tr>
            <td>{{ transaction.id }}</td>
            <td>{{ transaction.amount }}</td>
            <td>{{ transaction.date | date('Y-m-d H:i:s') }}</td>
            <td>{{ transaction.arrivalAccount.name }}</td>
        </tr>
    {% endfor %}
    </thead>
</table>
<h5>Mes béneficaires</h5>
<table class=\"table\">
<thead class=\"thead-dark\">
    <tr>
        <th>ID</th>
        <th>Nom</th>
    </tr>
    {% for beneficiaire in account.beneficiaire %}
        <tr>
            <td>{{ beneficiaire.id }}</td>
            <td>{{ beneficiaire.name }}</td>
            <td><a href=\"{{ path('delete_beneficiaire', {'id': account.id}) }}\">Supprimer beneficiaire</a><br /></td>
         </tr>
    {% endfor %}
    </thead>
</table>
<a href=\"{{ path('add_beneficiaire', {'id': account.id}) }}\">Ajouter un beneficiaire</a><br />
{% endblock %}", "account/view.html.twig", "/var/www/symfony/templates/account/view.html.twig");
    }
}
