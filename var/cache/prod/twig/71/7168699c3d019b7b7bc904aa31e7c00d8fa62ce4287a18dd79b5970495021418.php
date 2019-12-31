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

/* @PrestaShop/Admin/Sell/Customer/index.html.twig */
class __TwigTemplate_055d4fd9822d306a1cafc099ed07ae9055673f9f32775648d262f114f8d55b83 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        // line 39
        $this->parent = $this->loadTemplate("PrestaShopBundle:Admin:layout.html.twig", "@PrestaShop/Admin/Sell/Customer/index.html.twig", 39);
        $this->blocks = [
            'content' => [$this, 'block_content'],
            'employee_helper_card' => [$this, 'block_employee_helper_card'],
            'customers_kpis' => [$this, 'block_customers_kpis'],
            'customers_listing' => [$this, 'block_customers_listing'],
            'customer_required_fields_form' => [$this, 'block_customer_required_fields_form'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context)
    {
        return "PrestaShopBundle:Admin:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 26
        $context["enableSidebar"] = true;
        // line 27
        $context["layoutTitle"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Manage your Customers", [], "Admin.Orderscustomers.Feature");
        // line 29
        if (($context["isSingleShopContext"] ?? null)) {
            // line 30
            $context["layoutHeaderToolbarBtn"] = ["add" => ["href" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_customers_create"), "desc" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Add new customer", [], "Admin.Orderscustomers.Feature"), "icon" => "add_circle_outline"]];
        }
        // line 39
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 41
    public function block_content($context, array $blocks = [])
    {
        // line 42
        echo "  ";
        $this->displayBlock('employee_helper_card', $context, $blocks);
        // line 49
        echo "
  ";
        // line 50
        $this->displayBlock('customers_kpis', $context, $blocks);
        // line 64
        echo "
  ";
        // line 65
        $this->displayBlock('customers_listing', $context, $blocks);
        // line 88
        echo "
  ";
        // line 89
        $this->displayBlock('customer_required_fields_form', $context, $blocks);
    }

    // line 42
    public function block_employee_helper_card($context, array $blocks = [])
    {
        // line 43
        echo "    <div class=\"row\">
      <div class=\"col\">
        ";
        // line 45
        $this->loadTemplate("@PrestaShop/Admin/Sell/Customer/Blocks/showcase_card.html.twig", "@PrestaShop/Admin/Sell/Customer/index.html.twig", 45)->display($context);
        // line 46
        echo "      </div>
    </div>
  ";
    }

    // line 50
    public function block_customers_kpis($context, array $blocks = [])
    {
        // line 51
        echo "    <div class=\"row\">
      <div class=\"col-md-12\">
        <div class=\"card\">
          <div class=\"row\">
            ";
        // line 55
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("PrestaShopBundle:Admin\\Common:renderKpiRow", ["kpiRow" =>         // line 57
($context["customersKpi"] ?? null)]));
        // line 58
        echo "
          </div>
        </div>
      </div>
    </div>
  ";
    }

    // line 65
    public function block_customers_listing($context, array $blocks = [])
    {
        // line 66
        echo "    ";
        if ( !($context["isSingleShopContext"] ?? null)) {
            // line 67
            echo "      <div class=\"row\">
        <div class=\"col-md-12\">
          <div class=\"alert alert-info\" role=\"alert\">
            <p class=\"alert-text\">
              ";
            // line 71
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("You have to select a shop if you want to create a customer.", [], "Admin.Orderscustomers.Notification"), "html", null, true);
            echo "
            </p>
          </div>
        </div>
      </div>
    ";
        }
        // line 77
        echo "
    <div class=\"row\">
      <div class=\"col-12\">
        ";
        // line 80
        $this->loadTemplate("@PrestaShop/Admin/Sell/Customer/index.html.twig", "@PrestaShop/Admin/Sell/Customer/index.html.twig", 80, "1399977998")->display(twig_array_merge($context, ["grid" => ($context["customerGrid"] ?? null)]));
        // line 85
        echo "      </div>
    </div>
  ";
    }

    // line 89
    public function block_customer_required_fields_form($context, array $blocks = [])
    {
        // line 90
        echo "    <div class=\"row\">
      <div class=\"col-md-12\">
        <p>
          <button class=\"btn btn-primary\"
                  type=\"button\"
                  data-toggle=\"collapse\"
                  data-target=\"#customerRequiredFieldsContainer\"
                  aria-expanded=\"false\"
                  aria-controls=\"customerRequiredFieldsContainer\"
          >
            <i class=\"material-icons\">add_circle</i>
            ";
        // line 101
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Set required fields for this section", [], "Admin.Orderscustomers.Feature"), "html", null, true);
        echo "
          </button>
        </p>
      </div>

      <div class=\"col-md-12\">
        ";
        // line 107
        $this->loadTemplate("@PrestaShop/Admin/Sell/Customer/Blocks/Index/required_fields.html.twig", "@PrestaShop/Admin/Sell/Customer/index.html.twig", 107)->display($context);
        // line 108
        echo "      </div>
    </div>
  ";
    }

    // line 113
    public function block_javascripts($context, array $blocks = [])
    {
        // line 114
        echo "  ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

  ";
        // line 116
        $this->loadTemplate("@PrestaShop/Admin/Sell/Customer/Blocks/javascript.html.twig", "@PrestaShop/Admin/Sell/Customer/index.html.twig", 116)->display($context);
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Sell/Customer/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  189 => 116,  183 => 114,  180 => 113,  174 => 108,  172 => 107,  163 => 101,  150 => 90,  147 => 89,  141 => 85,  139 => 80,  134 => 77,  125 => 71,  119 => 67,  116 => 66,  113 => 65,  104 => 58,  102 => 57,  101 => 55,  95 => 51,  92 => 50,  86 => 46,  84 => 45,  80 => 43,  77 => 42,  73 => 89,  70 => 88,  68 => 65,  65 => 64,  63 => 50,  60 => 49,  57 => 42,  54 => 41,  50 => 39,  47 => 30,  45 => 29,  43 => 27,  41 => 26,  22 => 39,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Sell/Customer/index.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Sell/Customer/index.html.twig");
    }
}


/* @PrestaShop/Admin/Sell/Customer/index.html.twig */
class __TwigTemplate_055d4fd9822d306a1cafc099ed07ae9055673f9f32775648d262f114f8d55b83___1399977998 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        // line 80
        $this->parent = $this->loadTemplate("@PrestaShop/Admin/Common/Grid/grid_panel.html.twig", "@PrestaShop/Admin/Sell/Customer/index.html.twig", 80);
        $this->blocks = [
            'grid_panel_extra_content' => [$this, 'block_grid_panel_extra_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        return "@PrestaShop/Admin/Common/Grid/grid_panel.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 81
    public function block_grid_panel_extra_content($context, array $blocks = [])
    {
        // line 82
        echo "            ";
        $this->loadTemplate("@PrestaShop/Admin/Sell/Customer/Blocks/delete_modal.html.twig", "@PrestaShop/Admin/Sell/Customer/index.html.twig", 82)->display($context);
        // line 83
        echo "          ";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Sell/Customer/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  253 => 83,  250 => 82,  247 => 81,  230 => 80,  189 => 116,  183 => 114,  180 => 113,  174 => 108,  172 => 107,  163 => 101,  150 => 90,  147 => 89,  141 => 85,  139 => 80,  134 => 77,  125 => 71,  119 => 67,  116 => 66,  113 => 65,  104 => 58,  102 => 57,  101 => 55,  95 => 51,  92 => 50,  86 => 46,  84 => 45,  80 => 43,  77 => 42,  73 => 89,  70 => 88,  68 => 65,  65 => 64,  63 => 50,  60 => 49,  57 => 42,  54 => 41,  50 => 39,  47 => 30,  45 => 29,  43 => 27,  41 => 26,  22 => 39,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Sell/Customer/index.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Sell/Customer/index.html.twig");
    }
}
