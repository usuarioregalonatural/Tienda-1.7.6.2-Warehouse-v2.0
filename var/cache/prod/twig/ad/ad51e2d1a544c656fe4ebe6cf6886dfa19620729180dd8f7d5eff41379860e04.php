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

/* @PrestaShop/Admin/Sell/Customer/Blocks/View/addresses.html.twig */
class __TwigTemplate_a480b3199f52675c6c8be5d74346b423e64f770cf1ae5a61083fd903fc4d635e extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 25
        echo "
<div class=\"card\">
  <h3 class=\"card-header\">
    <i class=\"material-icons\">location_on</i>
    ";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Addresses", [], "Admin.Global"), "html", null, true);
        echo "

    <a href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('PrestaShopBundle\Twig\LayoutExtension')->getAdminLink("AdminAddresses", true, ["id_customer" => $this->getAttribute($this->getAttribute(($context["customerInformation"] ?? null), "customerId", []), "value", []), "addaddress" => 1]), "html", null, true);
        echo "\"
       class=\"tooltip-link float-right\"
       data-toggle=\"pstooltip\"
       title=\"\"
       data-placement=\"top\"
       data-original-title=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Add", [], "Admin.Actions"), "html", null, true);
        echo "\"
    >
      <i class=\"material-icons\">add_circle</i>
    </a>
  </h3>

  <div class=\"card-body\">
    ";
        // line 43
        if ( !twig_test_empty($this->getAttribute(($context["customerInformation"] ?? null), "addressesInformation", []))) {
            // line 44
            echo "      <table class=\"table\">
        <thead>
          <tr>
            <th>";
            // line 47
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Company", [], "Admin.Global"), "html", null, true);
            echo "</th>
            <th>";
            // line 48
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Name", [], "Admin.Global"), "html", null, true);
            echo "</th>
            <th>";
            // line 49
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Address", [], "Admin.Global"), "html", null, true);
            echo "</th>
            <th>";
            // line 50
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Country", [], "Admin.Global"), "html", null, true);
            echo "</th>
            <th>";
            // line 51
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Phone number(s)", [], "Admin.Orderscustomers.Feature"), "html", null, true);
            echo "</th>
            <th class=\"text-right\">";
            // line 52
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Actions", [], "Admin.Global"), "html", null, true);
            echo "</th>
          </tr>
        </thead>
        <tbody>
          ";
            // line 56
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["customerInformation"] ?? null), "addressesInformation", []));
            foreach ($context['_seq'] as $context["_key"] => $context["address"]) {
                // line 57
                echo "            ";
                $context["addressEditUrl"] = $this->env->getExtension('PrestaShopBundle\Twig\LayoutExtension')->getAdminLink("AdminAddresses", true, ["id_address" => $this->getAttribute($context["address"], "addressId", []), "addaddress" => 1, "back" => $this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", []), "uri", [])]);
                // line 58
                echo "
            <tr>
              <td class=\"js-linkable-item cursor-pointer\" data-linkable-href=\"";
                // line 60
                echo twig_escape_filter($this->env, ($context["addressEditUrl"] ?? null), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["address"], "company", []), "html", null, true);
                echo "</td>
              <td class=\"js-linkable-item cursor-pointer\" data-linkable-href=\"";
                // line 61
                echo twig_escape_filter($this->env, ($context["addressEditUrl"] ?? null), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["address"], "fullName", []), "html", null, true);
                echo "</td>
              <td class=\"js-linkable-item cursor-pointer\" data-linkable-href=\"";
                // line 62
                echo twig_escape_filter($this->env, ($context["addressEditUrl"] ?? null), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["address"], "fullAddress", []), "html", null, true);
                echo "</td>
              <td class=\"js-linkable-item cursor-pointer\" data-linkable-href=\"";
                // line 63
                echo twig_escape_filter($this->env, ($context["addressEditUrl"] ?? null), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["address"], "countryName", []), "html", null, true);
                echo "</td>
              <td class=\"js-linkable-item cursor-pointer\" data-linkable-href=\"";
                // line 64
                echo twig_escape_filter($this->env, ($context["addressEditUrl"] ?? null), "html", null, true);
                echo "\">
                ";
                // line 65
                if ($this->getAttribute($context["address"], "phone", [])) {
                    // line 66
                    echo "                  ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["address"], "phone", []), "html", null, true);
                    echo "
                  ";
                    // line 67
                    if ( !twig_test_empty($this->getAttribute($context["address"], "phoneMobile", []))) {
                        // line 68
                        echo "                    <br> ";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["address"], "phoneMobile", []), "html", null, true);
                        echo "
                  ";
                    }
                    // line 70
                    echo "                ";
                } elseif ( !twig_test_empty($this->getAttribute($context["address"], "phoneMobile", []))) {
                    // line 71
                    echo "                  ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["address"], "phoneMobile", []), "html", null, true);
                    echo "
                ";
                } else {
                    // line 73
                    echo "                  --
                ";
                }
                // line 75
                echo "              </td>
              <td class=\"text-right\">
                <div class=\"btn-group-action\">
                  <div class=\"btn-group\">
                    <a href=\"";
                // line 79
                echo twig_escape_filter($this->env, ($context["addressEditUrl"] ?? null), "html", null, true);
                echo "\"
                       class=\"btn tooltip-link dropdown-item\"
                       data-toggle=\"pstooltip\"
                       data-placement=\"top\"
                       data-original-title=\"";
                // line 83
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Edit", [], "Admin.Actions"), "html", null, true);
                echo "\"
                    >
                      <i class=\"material-icons\">edit</i>
                    </a>

                    <a class=\"btn btn-link dropdown-toggle dropdown-toggle-dots dropdown-toggle-split\"
                       data-toggle=\"dropdown\"
                       aria-haspopup=\"true\"
                       aria-expanded=\"false\"
                    ></a>

                    <div class=\"dropdown-menu dropdown-menu-right\">
                      <a class=\"btn tooltip-link dropdown-item\"
                         href=\"";
                // line 96
                echo twig_escape_filter($this->env, $this->env->getExtension('PrestaShopBundle\Twig\LayoutExtension')->getAdminLink("AdminAddresses", true, ["id_address" => $this->getAttribute($context["address"], "addressId", []), "deleteaddress" => 1, "back" => $this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", []), "uri", [])]), "html", null, true);
                echo "\"
                      >
                        <i class=\"material-icons\">delete</i>
                        ";
                // line 99
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Delete", [], "Admin.Actions"), "html", null, true);
                echo "
                      </a>

                      ";
                // line 102
                echo $this->env->getExtension('PrestaShopBundle\Twig\HookExtension')->renderHook("displayAdminCustomersAddressesItemAction", ["id_address" => $this->getAttribute($context["address"], "addressId", [])]);
                echo "
                    </div>
                  </div>
                </div>
              </td>
            </tr>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['address'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 109
            echo "        </tbody>
      </table>
    ";
        } else {
            // line 112
            echo "      <p class=\"text-muted text-center mb-0\">
        ";
            // line 113
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("%firstname% %lastname% has not registered any addresses yet", ["%firstname%" => $this->getAttribute($this->getAttribute(($context["customerInformation"] ?? null), "personalInformation", []), "firstName", []), "%lastname%" => $this->getAttribute($this->getAttribute(($context["customerInformation"] ?? null), "personalInformation", []), "lastName", [])], "Admin.Orderscustomers.Feature"), "html", null, true);
            echo "
      </p>
    ";
        }
        // line 116
        echo "  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Sell/Customer/Blocks/View/addresses.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  228 => 116,  222 => 113,  219 => 112,  214 => 109,  201 => 102,  195 => 99,  189 => 96,  173 => 83,  166 => 79,  160 => 75,  156 => 73,  150 => 71,  147 => 70,  141 => 68,  139 => 67,  134 => 66,  132 => 65,  128 => 64,  122 => 63,  116 => 62,  110 => 61,  104 => 60,  100 => 58,  97 => 57,  93 => 56,  86 => 52,  82 => 51,  78 => 50,  74 => 49,  70 => 48,  66 => 47,  61 => 44,  59 => 43,  49 => 36,  41 => 31,  36 => 29,  30 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Sell/Customer/Blocks/View/addresses.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Sell/Customer/Blocks/View/addresses.html.twig");
    }
}
