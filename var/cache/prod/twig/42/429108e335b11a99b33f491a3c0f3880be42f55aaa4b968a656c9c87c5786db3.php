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

/* @PrestaShop/Admin/Product/ProductPage/product.html.twig */
class __TwigTemplate_59c4682d464400c31e8afd2335b8de1c539601d7a92d6c0ffdfc010959ad61c9 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        // line 25
        $this->parent = $this->loadTemplate("@PrestaShop/Admin/layout.html.twig", "@PrestaShop/Admin/Product/ProductPage/product.html.twig", 25);
        $this->blocks = [
            'content' => [$this, 'block_content'],
            'product_header' => [$this, 'block_product_header'],
            'product_tabs_container' => [$this, 'block_product_tabs_container'],
            'product_panel_essentials' => [$this, 'block_product_panel_essentials'],
            'product_panel_combinations' => [$this, 'block_product_panel_combinations'],
            'product_panel_shipping' => [$this, 'block_product_panel_shipping'],
            'product_panel_pricing' => [$this, 'block_product_panel_pricing'],
            'product_panel_seo' => [$this, 'block_product_panel_seo'],
            'product_panel_options' => [$this, 'block_product_panel_options'],
            'product_panel_modules' => [$this, 'block_product_panel_modules'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context)
    {
        return "@PrestaShop/Admin/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 336
        $context["js_translatable"] = twig_array_merge(["Are you sure to disable variations ? they will all be deleted" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("This will delete all the combinations. Do you wish to proceed?", [], "Admin.Catalog.Notification")],         // line 338
($context["js_translatable"] ?? null));
        // line 340
        $context["js_translatable"] = twig_array_merge(["Form update success" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Settings updated.", [], "Admin.Notifications.Success"), "Form update errors" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Unable to update settings.", [], "Admin.Notifications.Error"), "Delete" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Delete", [], "Admin.Actions"), "ToLargeFile" => twig_replace_filter($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("The file is too large. Maximum size allowed is: [1]. The file you are trying to upload is [2].", [], "Admin.Notifications.Error"), ["[1]" => "{{maxFilesize}}", "[2]" => "{{filesize}}"]), "Drop images here" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Drop images here", [], "Admin.Catalog.Feature"), "or select files" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("or select files", [], "Admin.Catalog.Feature"), "files recommandations" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Recommended size 800 x 800px for default theme.", [], "Admin.Catalog.Feature"), "files recommandations2" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("JPG, GIF or PNG format.", [], "Admin.Catalog.Feature"), "Cover" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Cover", [], "Admin.Catalog.Feature"), "Are you sure to delete this?" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Are you sure to delete this?", [], "Admin.Notifications.Warning"), "This will delete the specific price. Do you wish to proceed?" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("This will delete the specific price. Do you wish to proceed?", [], "Admin.Catalog.Notification"), "Quantities" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Quantities", [], "Admin.Catalog.Feature"), "Combinations" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Combinations", [], "Admin.Catalog.Feature"), "Virtual product" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Virtual product", [], "Admin.Catalog.Feature"), "tax incl." => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("tax incl.", [], "Admin.Catalog.Feature"), "tax excl." => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("tax excl.", [], "Admin.Catalog.Feature"), "You can't create pack product with variations. Are you sure to disable variations ? they will all be deleted." => (($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("A pack of products can't have combinations.", [], "Admin.Catalog.Notification") . " ") . $this->getAttribute(        // line 357
($context["js_translatable"] ?? null), "Are you sure to disable variations ? they will all be deleted", [], "array")), "You can't create virtual product with variations. Are you sure to disable variations ? they will all be deleted." => (($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("A virtual product can't have combinations.", [], "Admin.Catalog.Notification") . " ") . $this->getAttribute(        // line 358
($context["js_translatable"] ?? null), "Are you sure to disable variations ? they will all be deleted", [], "array"))],         // line 359
($context["js_translatable"] ?? null));
        // line 25
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 27
    public function block_content($context, array $blocks = [])
    {
        // line 28
        echo "
  <form name=\"form\" id=\"form\" method=\"post\" class=\"form-horizontal product-page row justify-content-md-center\" novalidate=\"novalidate\">

    ";
        // line 31
        if ( !($context["editable"] ?? null)) {
            echo " <fieldset disabled id=\"field-disabled\"> ";
        }
        // line 32
        echo "    ";
        // line 33
        echo "    ";
        $this->displayBlock('product_header', $context, $blocks);
        // line 44
        echo "
    <div class=\"col-md-10\">
      <div id=\"form_bubbling_errors\">
        ";
        // line 47
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
        echo "
      </div>
    </div>

    <div id=\"form-loading\" class=\"col-xxl-10\">
      ";
        // line 53
        echo "      ";
        $this->displayBlock('product_tabs_container', $context, $blocks);
        // line 56
        echo "      <div id=\"form_content\" class=\"tab-content\">

        ";
        // line 59
        echo "        ";
        $this->displayBlock('product_panel_essentials', $context, $blocks);
        // line 80
        echo "
        ";
        // line 82
        echo "        ";
        $this->displayBlock('product_panel_combinations', $context, $blocks);
        // line 104
        echo "
        ";
        // line 106
        echo "        ";
        $this->displayBlock('product_panel_shipping', $context, $blocks);
        // line 125
        echo "
        ";
        // line 127
        echo "        ";
        $this->displayBlock('product_panel_pricing', $context, $blocks);
        // line 134
        echo "
        ";
        // line 136
        echo "        ";
        $this->displayBlock('product_panel_seo', $context, $blocks);
        // line 142
        echo "
        ";
        // line 144
        echo "        ";
        $this->displayBlock('product_panel_options', $context, $blocks);
        // line 150
        echo "
        ";
        // line 152
        echo "        ";
        $this->displayBlock('product_panel_modules', $context, $blocks);
        // line 248
        echo "      </div>

      ";
        // line 250
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "id_product", []), 'widget');
        echo "
      ";
        // line 251
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "_token", []), 'widget');
        echo "

    </div>
    ";
        // line 255
        echo "    ";
        echo twig_include($this->env, $context, "@Product/ProductPage/Blocks/footer.html.twig", ["preview_link" =>         // line 256
($context["preview_link"] ?? null), "preview_link_deactivate" =>         // line 257
($context["preview_link_deactivate"] ?? null), "is_shop_context" =>         // line 258
($context["is_shop_context"] ?? null), "editable" =>         // line 259
($context["editable"] ?? null), "is_active" => $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(        // line 260
($context["form"] ?? null), "step1", []), "vars", []), "value", []), "active", []), "productId" =>         // line 261
($context["id_product"] ?? null)]);
        // line 262
        echo "
    ";
        // line 263
        if ( !($context["editable"] ?? null)) {
            echo " </fieldset> ";
        }
        // line 264
        echo "  </form>


  ";
        // line 267
        $this->loadTemplate("@PrestaShop/Admin/Product/ProductPage/product.html.twig", "@PrestaShop/Admin/Product/ProductPage/product.html.twig", 267, "413035129")->display(twig_array_merge($context, ["id" => "confirmation_modal", "title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Warning", [], "Admin.Notifications.Warning"), "closable" => false, "actions" => [0 => ["type" => "button", "label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("No", [], "Admin.Global"), "class" => "btn btn-outline-secondary btn-lg cancel"], 1 => ["type" => "button", "label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Yes", [], "Admin.Global"), "class" => "btn btn-primary btn-lg continue"]]]));
        // line 288
        echo "
";
    }

    // line 33
    public function block_product_header($context, array $blocks = [])
    {
        // line 34
        echo "      ";
        echo twig_include($this->env, $context, "@Product/ProductPage/Blocks/header.html.twig", ["formName" => $this->getAttribute($this->getAttribute(        // line 35
($context["form"] ?? null), "step1", []), "name", []), "formType" => $this->getAttribute($this->getAttribute(        // line 36
($context["form"] ?? null), "step1", []), "type_product", []), "is_multishop_context" =>         // line 37
($context["is_multishop_context"] ?? null), "languages" =>         // line 38
($context["languages"] ?? null), "help_link" =>         // line 39
($context["help_link"] ?? null), "stats_link" =>         // line 40
($context["stats_link"] ?? null)]);
        // line 42
        echo "
    ";
    }

    // line 53
    public function block_product_tabs_container($context, array $blocks = [])
    {
        // line 54
        echo "        ";
        echo twig_include($this->env, $context, "@Product/ProductPage/Blocks/tabs.html.twig");
        echo "
      ";
    }

    // line 59
    public function block_product_panel_essentials($context, array $blocks = [])
    {
        // line 60
        echo "          ";
        $context["formQuantityShortcut"] = (($this->getAttribute($this->getAttribute(($context["form"] ?? null), "step1", [], "any", false, true), "qty_0_shortcut", [], "any", true, true)) ? ($this->getAttribute($this->getAttribute(($context["form"] ?? null), "step1", []), "qty_0_shortcut", [])) : (null));
        // line 61
        echo "          ";
        echo twig_include($this->env, $context, "@Product/ProductPage/Panels/essentials.html.twig", ["formPackItems" => $this->getAttribute($this->getAttribute(        // line 62
($context["form"] ?? null), "step1", []), "inputPackItems", []), "productId" =>         // line 63
($context["id_product"] ?? null), "images" => $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(        // line 64
($context["form"] ?? null), "step1", []), "vars", []), "value", []), "images", []), "formShortDescription" => $this->getAttribute($this->getAttribute(        // line 65
($context["form"] ?? null), "step1", []), "description_short", []), "formDescription" => $this->getAttribute($this->getAttribute(        // line 66
($context["form"] ?? null), "step1", []), "description", []), "formFeatures" => $this->getAttribute($this->getAttribute(        // line 67
($context["form"] ?? null), "step1", []), "features", []), "formManufacturer" => $this->getAttribute($this->getAttribute(        // line 68
($context["form"] ?? null), "step1", []), "id_manufacturer", []), "formRelatedProducts" => $this->getAttribute($this->getAttribute(        // line 69
($context["form"] ?? null), "step1", []), "related_products", []), "is_combination_active" =>         // line 70
($context["is_combination_active"] ?? null), "has_combinations" =>         // line 71
($context["has_combinations"] ?? null), "formReference" => $this->getAttribute($this->getAttribute(        // line 72
($context["form"] ?? null), "step6", []), "reference", []), "formQuantityShortcut" =>         // line 73
($context["formQuantityShortcut"] ?? null), "formPriceShortcut" => $this->getAttribute($this->getAttribute(        // line 74
($context["form"] ?? null), "step1", []), "price_shortcut", []), "formPriceShortcutTTC" => $this->getAttribute($this->getAttribute(        // line 75
($context["form"] ?? null), "step1", []), "price_ttc_shortcut", []), "formCategories" => $this->getAttribute(        // line 76
($context["form"] ?? null), "step1", [])]);
        // line 78
        echo "
        ";
    }

    // line 82
    public function block_product_panel_combinations($context, array $blocks = [])
    {
        // line 83
        echo "          ";
        $context["formStockQuantity"] = (($this->getAttribute($this->getAttribute(($context["form"] ?? null), "step3", [], "any", false, true), "qty_0", [], "any", true, true)) ? ($this->getAttribute($this->getAttribute(($context["form"] ?? null), "step3", []), "qty_0", [])) : (null));
        // line 84
        echo "          ";
        echo twig_include($this->env, $context, "@Product/ProductPage/Panels/combinations.html.twig", ["formDependsOnStocks" => $this->getAttribute($this->getAttribute(        // line 85
($context["form"] ?? null), "step3", []), "depends_on_stock", []), "productId" =>         // line 86
($context["id_product"] ?? null), "formStockQuantity" =>         // line 87
($context["formStockQuantity"] ?? null), "formStockMinimalQuantity" => $this->getAttribute($this->getAttribute(        // line 88
($context["form"] ?? null), "step3", []), "minimal_quantity", []), "formLowStockThreshold" => $this->getAttribute($this->getAttribute(        // line 89
($context["form"] ?? null), "step3", []), "low_stock_threshold", []), "formLocation" => $this->getAttribute($this->getAttribute(        // line 90
($context["form"] ?? null), "step3", []), "location", []), "formLowStockAlert" => $this->getAttribute($this->getAttribute(        // line 91
($context["form"] ?? null), "step3", []), "low_stock_alert", []), "formVirtualProduct" => $this->getAttribute($this->getAttribute(        // line 92
($context["form"] ?? null), "step3", []), "virtual_product", []), "asm_globally_activated" =>         // line 93
($context["asm_globally_activated"] ?? null), "formType" => $this->getAttribute($this->getAttribute(        // line 94
($context["form"] ?? null), "step1", []), "type_product", []), "formAdvancedStockManagement" => $this->getAttribute($this->getAttribute(        // line 95
($context["form"] ?? null), "step3", []), "advanced_stock_management", []), "formPackStockType" => $this->getAttribute($this->getAttribute(        // line 96
($context["form"] ?? null), "step3", []), "pack_stock_type", []), "formStep3" => $this->getAttribute(        // line 97
($context["form"] ?? null), "step3", []), "formCombinations" =>         // line 98
($context["formCombinations"] ?? null), "has_combinations" =>         // line 99
($context["has_combinations"] ?? null), "max_upload_size" =>         // line 100
($context["max_upload_size"] ?? null)]);
        // line 102
        echo "
        ";
    }

    // line 106
    public function block_product_panel_shipping($context, array $blocks = [])
    {
        // line 107
        echo "          <div role=\"tabpanel\" class=\"form-contenttab tab-pane\" id=\"step4\">
            <div class=\"row\">
              <div class=\"col-md-12\">
                <div class=\"container-fluid\">
                  <div class=\"row\">
                    ";
        // line 112
        echo twig_include($this->env, $context, "@Product/ProductPage/Forms/form_shipping.html.twig", ["form" => $this->getAttribute(        // line 113
($context["form"] ?? null), "step4", []), "asm_globally_activated" =>         // line 114
($context["asm_globally_activated"] ?? null), "isNotVirtual" => ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(        // line 115
($context["form"] ?? null), "step1", []), "type_product", []), "vars", []), "value", []) != "2"), "isChecked" => $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(        // line 116
($context["form"] ?? null), "step3", []), "advanced_stock_management", []), "vars", []), "checked", []), "warehouses" =>         // line 117
($context["warehouses"] ?? null)]);
        // line 118
        echo "
                  </div>
                </div>
              </div>
            </div>
          </div>
        ";
    }

    // line 127
    public function block_product_panel_pricing($context, array $blocks = [])
    {
        // line 128
        echo "          ";
        echo twig_include($this->env, $context, "@Product/ProductPage/Panels/pricing.html.twig", ["pricingForm" => $this->getAttribute(        // line 129
($context["form"] ?? null), "step2", []), "is_multishop_context" =>         // line 130
($context["is_multishop_context"] ?? null), "productId" =>         // line 131
($context["id_product"] ?? null)]);
        // line 132
        echo "
        ";
    }

    // line 136
    public function block_product_panel_seo($context, array $blocks = [])
    {
        // line 137
        echo "          ";
        echo twig_include($this->env, $context, "@Product/ProductPage/Panels/seo.html.twig", ["seoForm" => $this->getAttribute(        // line 138
($context["form"] ?? null), "step5", []), "productId" =>         // line 139
($context["id_product"] ?? null)]);
        // line 140
        echo "
        ";
    }

    // line 144
    public function block_product_panel_options($context, array $blocks = [])
    {
        // line 145
        echo "          ";
        echo twig_include($this->env, $context, "@Product/ProductPage/Panels/options.html.twig", ["optionsForm" => $this->getAttribute(        // line 146
($context["form"] ?? null), "step6", []), "productId" =>         // line 147
($context["id_product"] ?? null)]);
        // line 148
        echo "
        ";
    }

    // line 152
    public function block_product_panel_modules($context, array $blocks = [])
    {
        // line 153
        echo "          ";
        if (($this->env->getExtension('PrestaShopBundle\Twig\HookExtension')->hookCount("displayAdminProductsExtra") > 0)) {
            // line 154
            echo "            <div role=\"tabpanel\" class=\"form-contenttab tab-pane\" id=\"hooks\">
              <div class=\"row\">
                <div class=\"col-md-12\">
                  <div class=\"container-fluid\">
                    <div class=\"row\">

                      ";
            // line 161
            echo "                      <div class=\"col-md-12\">
                        ";
            // line 162
            $context["hooks"] = $this->env->getExtension('PrestaShopBundle\Twig\HookExtension')->renderHooksArray("displayAdminProductsExtra", ["id_product" => ($context["id_product"] ?? null)]);
            // line 163
            echo "
                        <div class=\"row module-selection\" style=\"display: none;\">
                          <div class=\"col-md-12 col-lg-7\">
                            ";
            // line 166
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["hooks"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                // line 167
                echo "                              <div class=\"module-render-container module-";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["module"], "attributes", []), "name", []), "html", null, true);
                echo "\">
                                <div>
                                  <img class=\"top-logo\" src=\"";
                // line 169
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["module"], "attributes", []), "img", []), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["module"], "attributes", []), "displayName", []), "html", null, true);
                echo "\">
                                  <h2 class=\"text-ellipsis module-name-grid\">
                                    ";
                // line 171
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["module"], "attributes", []), "displayName", []), "html", null, true);
                echo "
                                  </h2>
                                  <div class=\"text-ellipsis small-text module-version\">
                                    ";
                // line 174
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["module"], "attributes", []), "version", []), "html", null, true);
                echo " by ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["module"], "attributes", []), "author", []), "html", null, true);
                echo "
                                  </div>
                                </div>
                                <div class=\"small no-padding\">
                                  ";
                // line 178
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["module"], "attributes", []), "description", []), "html", null, true);
                echo "
                                </div>
                              </div>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 182
            echo "                          </div>
                          <div class=\"col-md-12 col-lg-5\">
                            <h2>";
            // line 184
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Module to configure", [], "Admin.Catalog.Feature"), "html", null, true);
            echo "</h2>
                            <select class=\"modules-list-select\" data-toggle=\"select2\">
                              ";
            // line 186
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["hooks"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                // line 187
                echo "                                <option value=\"module-";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["module"], "attributes", []), "name", []), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["module"], "attributes", []), "displayName", []), "html", null, true);
                echo "</option>
                              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 189
            echo "                            </select>
                          </div>
                        </div>

                        <div class=\"module-render-container all-modules\">
                          <p>
                            <h2>";
            // line 195
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Choose a module to configure", [], "Admin.Catalog.Feature"), "html", null, true);
            echo "</h2>
                            ";
            // line 196
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("These modules are relative to the product page of your shop.", [], "Admin.Catalog.Feature"), "html", null, true);
            echo "<br />
                            ";
            // line 197
            echo twig_replace_filter($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("To manage all your modules go to the [1]Installed module page[/1]", [], "Admin.Catalog.Feature"), ["[1]" => (("<a href=\"" . $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_module_manage")) . "\">"), "[/1]" => "</a>"]);
            echo "
                          </p>
                          <div class=\"row\">
                            ";
            // line 200
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["hooks"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                // line 201
                echo "                              <div class=\"col-md-12 col-lg-6 col-xl-4\">
                                <div class=\"module-item-wrapper-grid\">
                                  <div class=\"module-item-heading-grid\">
                                    <img class=\"module-logo-thumb-grid\" src=\"";
                // line 204
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["module"], "attributes", []), "img", []), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["module"], "attributes", []), "displayName", []), "html", null, true);
                echo "\">
                                    <h3 class=\"text-ellipsis module-name-grid\">
                                      ";
                // line 206
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["module"], "attributes", []), "displayName", []), "html", null, true);
                echo "
                                    </h3>
                                    <div class=\"text-ellipsis small-text module-version-author-grid\">
                                      ";
                // line 209
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["module"], "attributes", []), "version", []), "html", null, true);
                echo " by ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["module"], "attributes", []), "author", []), "html", null, true);
                echo "
                                    </div>
                                  </div>
                                  <div class=\"module-quick-description-grid small no-padding\">
                                    ";
                // line 213
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["module"], "attributes", []), "description", []), "html", null, true);
                echo "
                                  </div>
                                  <div class=\"module-container\">
                                    <div class=\"module-quick-action-grid clearfix\">
                                      <button class=\"modules-list-button btn btn-outline-primary pull-xs-right\" data-target=\"module-";
                // line 217
                echo twig_escape_filter($this->env, $this->getAttribute($context["module"], "id", []), "html", null, true);
                echo "\">
                                        ";
                // line 218
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Configure", [], "Admin.Actions"), "html", null, true);
                echo "
                                      </button>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 225
            echo "                          </div>
                        </div>

                        ";
            // line 228
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["hooks"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                // line 229
                echo "                          <div
                            id=\"module_";
                // line 230
                echo twig_escape_filter($this->env, $this->getAttribute($context["module"], "id", []), "html", null, true);
                echo "\"
                            class=\"module-render-container module-";
                // line 231
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["module"], "attributes", []), "name", []), "html", null, true);
                echo "\"
                            style=\"display: none;\"
                          >
                            <div>
                              ";
                // line 235
                echo $this->getAttribute($context["module"], "content", []);
                echo "
                            </div>
                          </div>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 239
            echo "                      </div>

                    </div>
                  </div>
                </div>
              </div>
            </div>
          ";
        }
        // line 247
        echo "        ";
    }

    // line 291
    public function block_stylesheets($context, array $blocks = [])
    {
        // line 292
        echo "  ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
  <link rel=\"stylesheet\" href=\"";
        // line 293
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("themes/new-theme/public/product_page.css"), "html", null, true);
        echo "\">
";
    }

    // line 296
    public function block_javascripts($context, array $blocks = [])
    {
        // line 297
        echo "  ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

  <script src=\"";
        // line 299
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("themes/default/js/bundle/product/form.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 300
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("themes/new-theme/public/catalog_product.bundle.js"), "html", null, true);
        echo "\"></script>

  <script src=\"";
        // line 302
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("themes/default/js/bundle/product/product-manufacturer.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 303
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("themes/default/js/bundle/product/product-related.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 304
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("themes/default/js/bundle/product/product-category-tags.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 305
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("themes/default/js/bundle/product/default-category.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 306
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("themes/default/js/bundle/product/product-combinations.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 307
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("themes/default/js/bundle/category-tree.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 308
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("themes/default/js/bundle/module/module_card.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 309
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("themes/default/js/bundle/modal-confirmation.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 310
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("themes/new-theme/public/product_page.bundle.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 311
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("../js/tiny_mce/tiny_mce.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 312
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("../js/admin/tinymce.inc.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 313
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("../js/admin/tinymce_loader.js"), "html", null, true);
        echo "\"></script>

  <script>
      \$(function() {
        var editable = '";
        // line 317
        echo twig_escape_filter($this->env, ($context["editable"] ?? null), "html", null, true);
        echo "';

        if (editable !== '1'){
          \$('#field-disabled').find(\"select\").each(function() {
            \$(this).removeClass('select2-hidden-accessible');
          });
          \$('#field-disabled').find(\"span.select2\").each(function() {
            \$(this).hide();
          });
          \$('#field-disabled').find(\"a.pstaggerClosingCross\").each(function() {
            \$(this).attr(\"disabled\", \"disabled\").on(\"click\", function() {
              return false;
            });
          });
        }
      });
  </script>
";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Product/ProductPage/product.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  627 => 317,  620 => 313,  616 => 312,  612 => 311,  608 => 310,  604 => 309,  600 => 308,  596 => 307,  592 => 306,  588 => 305,  584 => 304,  580 => 303,  576 => 302,  571 => 300,  567 => 299,  561 => 297,  558 => 296,  552 => 293,  547 => 292,  544 => 291,  540 => 247,  530 => 239,  520 => 235,  513 => 231,  509 => 230,  506 => 229,  502 => 228,  497 => 225,  484 => 218,  480 => 217,  473 => 213,  464 => 209,  458 => 206,  451 => 204,  446 => 201,  442 => 200,  436 => 197,  432 => 196,  428 => 195,  420 => 189,  409 => 187,  405 => 186,  400 => 184,  396 => 182,  386 => 178,  377 => 174,  371 => 171,  364 => 169,  358 => 167,  354 => 166,  349 => 163,  347 => 162,  344 => 161,  336 => 154,  333 => 153,  330 => 152,  325 => 148,  323 => 147,  322 => 146,  320 => 145,  317 => 144,  312 => 140,  310 => 139,  309 => 138,  307 => 137,  304 => 136,  299 => 132,  297 => 131,  296 => 130,  295 => 129,  293 => 128,  290 => 127,  280 => 118,  278 => 117,  277 => 116,  276 => 115,  275 => 114,  274 => 113,  273 => 112,  266 => 107,  263 => 106,  258 => 102,  256 => 100,  255 => 99,  254 => 98,  253 => 97,  252 => 96,  251 => 95,  250 => 94,  249 => 93,  248 => 92,  247 => 91,  246 => 90,  245 => 89,  244 => 88,  243 => 87,  242 => 86,  241 => 85,  239 => 84,  236 => 83,  233 => 82,  228 => 78,  226 => 76,  225 => 75,  224 => 74,  223 => 73,  222 => 72,  221 => 71,  220 => 70,  219 => 69,  218 => 68,  217 => 67,  216 => 66,  215 => 65,  214 => 64,  213 => 63,  212 => 62,  210 => 61,  207 => 60,  204 => 59,  197 => 54,  194 => 53,  189 => 42,  187 => 40,  186 => 39,  185 => 38,  184 => 37,  183 => 36,  182 => 35,  180 => 34,  177 => 33,  172 => 288,  170 => 267,  165 => 264,  161 => 263,  158 => 262,  156 => 261,  155 => 260,  154 => 259,  153 => 258,  152 => 257,  151 => 256,  149 => 255,  143 => 251,  139 => 250,  135 => 248,  132 => 152,  129 => 150,  126 => 144,  123 => 142,  120 => 136,  117 => 134,  114 => 127,  111 => 125,  108 => 106,  105 => 104,  102 => 82,  99 => 80,  96 => 59,  92 => 56,  89 => 53,  81 => 47,  76 => 44,  73 => 33,  71 => 32,  67 => 31,  62 => 28,  59 => 27,  55 => 25,  53 => 359,  52 => 358,  51 => 357,  50 => 340,  48 => 338,  47 => 336,  22 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Product/ProductPage/product.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Product/ProductPage/product.html.twig");
    }
}


/* @PrestaShop/Admin/Product/ProductPage/product.html.twig */
class __TwigTemplate_59c4682d464400c31e8afd2335b8de1c539601d7a92d6c0ffdfc010959ad61c9___413035129 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        // line 267
        $this->parent = $this->loadTemplate("@PrestaShop/Admin/Helpers/bootstrap_popup.html.twig", "@PrestaShop/Admin/Product/ProductPage/product.html.twig", 267);
        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        return "@PrestaShop/Admin/Helpers/bootstrap_popup.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 284
    public function block_content($context, array $blocks = [])
    {
        // line 285
        echo "      <div class=\"modal-body\"></div>
    ";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Product/ProductPage/product.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  706 => 285,  703 => 284,  686 => 267,  627 => 317,  620 => 313,  616 => 312,  612 => 311,  608 => 310,  604 => 309,  600 => 308,  596 => 307,  592 => 306,  588 => 305,  584 => 304,  580 => 303,  576 => 302,  571 => 300,  567 => 299,  561 => 297,  558 => 296,  552 => 293,  547 => 292,  544 => 291,  540 => 247,  530 => 239,  520 => 235,  513 => 231,  509 => 230,  506 => 229,  502 => 228,  497 => 225,  484 => 218,  480 => 217,  473 => 213,  464 => 209,  458 => 206,  451 => 204,  446 => 201,  442 => 200,  436 => 197,  432 => 196,  428 => 195,  420 => 189,  409 => 187,  405 => 186,  400 => 184,  396 => 182,  386 => 178,  377 => 174,  371 => 171,  364 => 169,  358 => 167,  354 => 166,  349 => 163,  347 => 162,  344 => 161,  336 => 154,  333 => 153,  330 => 152,  325 => 148,  323 => 147,  322 => 146,  320 => 145,  317 => 144,  312 => 140,  310 => 139,  309 => 138,  307 => 137,  304 => 136,  299 => 132,  297 => 131,  296 => 130,  295 => 129,  293 => 128,  290 => 127,  280 => 118,  278 => 117,  277 => 116,  276 => 115,  275 => 114,  274 => 113,  273 => 112,  266 => 107,  263 => 106,  258 => 102,  256 => 100,  255 => 99,  254 => 98,  253 => 97,  252 => 96,  251 => 95,  250 => 94,  249 => 93,  248 => 92,  247 => 91,  246 => 90,  245 => 89,  244 => 88,  243 => 87,  242 => 86,  241 => 85,  239 => 84,  236 => 83,  233 => 82,  228 => 78,  226 => 76,  225 => 75,  224 => 74,  223 => 73,  222 => 72,  221 => 71,  220 => 70,  219 => 69,  218 => 68,  217 => 67,  216 => 66,  215 => 65,  214 => 64,  213 => 63,  212 => 62,  210 => 61,  207 => 60,  204 => 59,  197 => 54,  194 => 53,  189 => 42,  187 => 40,  186 => 39,  185 => 38,  184 => 37,  183 => 36,  182 => 35,  180 => 34,  177 => 33,  172 => 288,  170 => 267,  165 => 264,  161 => 263,  158 => 262,  156 => 261,  155 => 260,  154 => 259,  153 => 258,  152 => 257,  151 => 256,  149 => 255,  143 => 251,  139 => 250,  135 => 248,  132 => 152,  129 => 150,  126 => 144,  123 => 142,  120 => 136,  117 => 134,  114 => 127,  111 => 125,  108 => 106,  105 => 104,  102 => 82,  99 => 80,  96 => 59,  92 => 56,  89 => 53,  81 => 47,  76 => 44,  73 => 33,  71 => 32,  67 => 31,  62 => 28,  59 => 27,  55 => 25,  53 => 359,  52 => 358,  51 => 357,  50 => 340,  48 => 338,  47 => 336,  22 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Product/ProductPage/product.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Product/ProductPage/product.html.twig");
    }
}
