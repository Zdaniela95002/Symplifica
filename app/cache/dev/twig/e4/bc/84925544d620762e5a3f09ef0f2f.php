<?php

/* ZdcUserBundle:User:index.html.twig */
class __TwigTemplate_e4bc84925544d620762e5a3f09ef0f2f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("layout.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        $this->displayParentBlock("body", $context, $blocks);
        echo "
<div class=\"container\">
\t\t<div class=\"col-md-12\">
\t\t\t<div class=\"page-header margin-none\">
\t\t\t\t<h2 class=\"padding-none\">Users</h2>
\t\t\t</div>
\t\t\t<div class=\"table-responsive\">
\t\t\t<table class=\"table table-striped table-hover\">
<thead>
<tr>
<th>Username</th>
<th>Nombres</th>
<th>Apellidos</th>
<th>Email</th>
<th>Role</th>
<th>Acciones</th>
</thead>
<tbody>
";
        // line 22
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) ? $context["users"] : $this->getContext($context, "users")));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 23
            echo "
<tr>
<td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username"), "html", null, true);
            echo "</td>
<td> ";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "firtsName"), "html", null, true);
            echo " </td>
<td> ";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "lastName"), "html", null, true);
            echo " </td>
<td> ";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email"), "html", null, true);
            echo " </td>
<td> ";
            // line 29
            if (($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "role") == "ROLE_ADMIN")) {
                // line 30
                echo "\t <strong>Administrador</strong>
\t ";
            } elseif (($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "role") == "ROLE_USER")) {
                // line 32
                echo "\t <strong>Usuario</strong>
\t  ";
            }
            // line 34
            echo "</td>

<td> <a href=\"";
            // line 36
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("zdc_user_view", array("id" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id"))), "html", null, true);
            echo "\"  class=\"btn btn-info\"> Ver </a> 
     <a href=\"";
            // line 37
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("zdc_user_edit", array("id" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id"))), "html", null, true);
            echo "\"  class=\"btn btn-success\"> Editar </a>


     </td>
</tr>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "</tbody>
</table>

";
    }

    public function getTemplateName()
    {
        return "ZdcUserBundle:User:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 43,  94 => 37,  90 => 36,  86 => 34,  82 => 32,  78 => 30,  76 => 29,  72 => 28,  68 => 27,  64 => 26,  60 => 25,  56 => 23,  52 => 22,  31 => 4,  28 => 3,);
    }
}
