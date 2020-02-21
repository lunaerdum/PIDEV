<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* ProduitBundle:Produit:AjouterProduit.html.twig */
class __TwigTemplate_09fce8b9040f94e64faf1e410f27090aa9a8d360a6ba096ecbf6889a7693268d extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "@User/Page_admin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "ProduitBundle:Produit:AjouterProduit.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "ProduitBundle:Produit:AjouterProduit.html.twig"));

        $this->parent = $this->loadTemplate("@User/Page_admin.html.twig", "ProduitBundle:Produit:AjouterProduit.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
    ";
        // line 5
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
    <div class=\"col-12 grid-margin stretch-card\">
        <div class=\"card\">
            <div class=\"card-body\">
                <h4 class=\"card-title\">Produit</h4>
                <p class=\"card-description\">
                </p>
                    <div class=\"form-group\">
                        <label for=\"exampleInputName1\">Name</label>
                         ";
        // line 14
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nom", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                    </div>
                    <div class=\"form-group\">
                        <label for=\"exampleInputEmail3\">Marque</label>
                       ";
        // line 18
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "marque", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                    </div>
                    <div class=\"form-group\">
                        <label for=\"exampleInputPassword4\">Prix</label>
                        ";
        // line 22
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "prix", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                    </div>
                    <div class=\"form-group\">
                        <label>File upload</label>
                        ";
        // line 26
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "file", []), 'widget', ["attr" => ["class" => "form-control file-upload-info"]]);
        echo "

                        <input type=\"file\" name=\"img[]\" class=\"file-upload-default\">
                        <div class=\"input-group col-xs-12\">
                        </div>
                    </div>
                    <div class=\"form-group\">
                        <label for=\"exampleInputCity1\">Categorie</label>
                        ";
        // line 34
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "id_Categorie", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                    </div>
                    <div class=\"form-group\">
                        <label for=\"exampleInputName1\">Quantite</label>
                        ";
        // line 38
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "quantite", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                    </div>
                <input type=\"submit\" value=\"Envoyer\" class=\" btn btn-primary mr-2\"/>
                ";
        // line 41
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

            </div>
        </div>
    </div>


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "ProduitBundle:Produit:AjouterProduit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 41,  114 => 38,  107 => 34,  96 => 26,  89 => 22,  82 => 18,  75 => 14,  63 => 5,  60 => 4,  51 => 3,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"@User/Page_admin.html.twig\" %}

{% block body %}

    {{ form_start(form) }}
    <div class=\"col-12 grid-margin stretch-card\">
        <div class=\"card\">
            <div class=\"card-body\">
                <h4 class=\"card-title\">Produit</h4>
                <p class=\"card-description\">
                </p>
                    <div class=\"form-group\">
                        <label for=\"exampleInputName1\">Name</label>
                         {{ form_widget(form.nom, { 'attr': {'class': 'form-control'} }) }}
                    </div>
                    <div class=\"form-group\">
                        <label for=\"exampleInputEmail3\">Marque</label>
                       {{ form_widget(form.marque, { 'attr': {'class': 'form-control'} }) }}
                    </div>
                    <div class=\"form-group\">
                        <label for=\"exampleInputPassword4\">Prix</label>
                        {{ form_widget(form.prix, { 'attr': {'class': 'form-control'} }) }}
                    </div>
                    <div class=\"form-group\">
                        <label>File upload</label>
                        {{ form_widget(form.file, { 'attr': {'class': 'form-control file-upload-info'} }) }}

                        <input type=\"file\" name=\"img[]\" class=\"file-upload-default\">
                        <div class=\"input-group col-xs-12\">
                        </div>
                    </div>
                    <div class=\"form-group\">
                        <label for=\"exampleInputCity1\">Categorie</label>
                        {{ form_widget(form.id_Categorie, { 'attr': {'class': 'form-control'} }) }}
                    </div>
                    <div class=\"form-group\">
                        <label for=\"exampleInputName1\">Quantite</label>
                        {{ form_widget(form.quantite, { 'attr': {'class': 'form-control'} }) }}
                    </div>
                <input type=\"submit\" value=\"Envoyer\" class=\" btn btn-primary mr-2\"/>
                {{ form_end(form) }}

            </div>
        </div>
    </div>


{% endblock %}
", "ProduitBundle:Produit:AjouterProduit.html.twig", "C:\\wamp\\www\\Projet\\src\\ProduitBundle/Resources/views/Produit/AjouterProduit.html.twig");
    }
}
