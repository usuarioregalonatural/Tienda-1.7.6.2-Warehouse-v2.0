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

/* __string_template__131e2dbe4f91f9cbae2884649c1297846f04a7c36a941d5788224ed57f3fabfa */
class __TwigTemplate_e9f609213715e51ff11819e63dea9a390614c1422fdbcc2ff00064b7eda1750d extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'extra_stylesheets' => [$this, 'block_extra_stylesheets'],
            'content_header' => [$this, 'block_content_header'],
            'content' => [$this, 'block_content'],
            'content_footer' => [$this, 'block_content_footer'],
            'sidebar_right' => [$this, 'block_sidebar_right'],
            'javascripts' => [$this, 'block_javascripts'],
            'extra_javascripts' => [$this, 'block_extra_javascripts'],
            'translate_javascripts' => [$this, 'block_translate_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"es\">
<head>
  <meta charset=\"utf-8\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<meta name=\"apple-mobile-web-app-capable\" content=\"yes\">
<meta name=\"robots\" content=\"NOFOLLOW, NOINDEX\">

<link rel=\"icon\" type=\"image/x-icon\" href=\"/img/favicon.ico\" />
<link rel=\"apple-touch-icon\" href=\"/img/app_icon.png\" />

<title>Administración de clientes • RegaloNatural</title>

  <script type=\"text/javascript\">
    var help_class_name = 'AdminCustomers';
    var iso_user = 'es';
    var lang_is_rtl = '0';
    var full_language_code = 'es';
    var full_cldr_language_code = 'es-ES';
    var country_iso_code = 'ES';
    var _PS_VERSION_ = '1.7.6.2';
    var roundMode = 2;
    var youEditFieldFor = '';
        var new_order_msg = 'Se ha recibido un nuevo pedido en tu tienda.';
    var order_number_msg = 'Número de pedido: ';
    var total_msg = 'Total: ';
    var from_msg = 'Desde: ';
    var see_order_msg = 'Ver este pedido';
    var new_customer_msg = 'Un nuevo cliente se ha registrado en tu tienda.';
    var customer_name_msg = 'Nombre del cliente: ';
    var new_msg = 'Un nuevo mensaje ha sido publicado en tu tienda.';
    var see_msg = 'Leer este mensaje';
    var token = '';
    var token_admin_orders = '7bbdc450a7b98d0a8fcf5e67121b795c';
    var token_admin_customers = 'e0ef4026a3f284dca65ae18f2e555f2b';
    var token_admin_customer_threads = 'f30287ff694e256eeb00f52b646aa7c8';
    var currentIndex = 'index.php?controller=AdminCustomers';
    var employee_token = '18075fae3a3bca73b8b753cfd7a5d3c2';
    var choose_language_translate = 'Selecciona el idioma';
    var default_language = '1';
    var admin_modules_link = '/admin786icvj8i/index.php/improve/modules/catalog/recommended?_token=HX48j3FVTK6Puhx2fhEaUkIwbFetfuHx1rzS-whbGqg';
    var admin_notification_get_link = '/admin786icvj8i/index.php/common/notifications?_token=HX48j3FVTK6Puhx2fhEaUkIwbFetfuHx1rzS-whbGqg';
    var admin_notification_push_link = '/admin786icvj8i/index.php/common/notifications/ack?_token=HX48j3FVTK6Puhx2fhEaUkIwbFetfuHx1rzS-whbGqg';
    var tab_modules_list = 'trustedshopsintegration,trustpilot,steavisgarantis,allinone_rewards,allexport,allexport,zendesk';
    var update_success_msg = 'Actualización correcta';
    var errorLogin = 'PrestaShop no pudo iniciar sesión en Addons. Por favor verifica tus datos de acceso y tu conexión de Internet.';
    var search_product_msg = 'Buscar un producto';
  </script>

      <link href=\"/modules/emarketing/views/css/menuTabIcon.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/admin786icvj8i/themes/new-theme/public/theme.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/modules/ph_simpleblog/css/simpleblog-admin.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/modules/iqitelementor/views/css/backoffice.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/modules/whatsappchat/views/css/whatsapp.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/modules/whatsappchat/views/css/bo_whatsapp.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/js/jquery/plugins/chosen/jquery.chosen.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/admin786icvj8i/themes/default/css/vendor/nv.d3.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/modules/gamification/views/css/gamification.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/js/jquery/plugins/fancybox/jquery.fancybox.css\" rel=\"stylesheet\" type=\"text/css\"/>
  
  <script type=\"text/javascript\">
var baseAdminDir = \"\\/admin786icvj8i\\/\";
var baseDir = \"\\/\";
var changeFormLanguageUrl = \"\\/admin786icvj8i\\/index.php\\/configure\\/advanced\\/employees\\/change-form-language?_token=HX48j3FVTK6Puhx2fhEaUkIwbFetfuHx1rzS-whbGqg\";
var currency = {\"iso_code\":\"EUR\",\"sign\":\"\\u20ac\",\"name\":\"Euro\",\"format\":null};
var currency_specifications = {\"symbol\":[\",\",\".\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"currencyCode\":\"EUR\",\"currencySymbol\":\"\\u20ac\",\"positivePattern\":\"#,##0.00\\u00a0\\u00a4\",\"negativePattern\":\"-#,##0.00\\u00a0\\u00a4\",\"maxFractionDigits\":2,\"minFractionDigits\":2,\"groupingUsed\":true,\"primaryGroupSize\":3,\"secondaryGroupSize\":3};
var host_mode = false;
var iqitModulesAdditionalTabs = {\"ajaxUrl\":\"https:\\/\\/www.regalonatural.es\\/admin786icvj8i\\/index.php?controller=AdminModules&token=29297828449537ba758e30ce67b0bc5f&ajax=1&configure=iqitadditionaltabs\"};
var iqitModulesSizeCharts = {\"ajaxUrl\":\"https:\\/\\/www.regalonatural.es\\/admin786icvj8i\\/index.php?controller=AdminModules&token=29297828449537ba758e30ce67b0bc5f&ajax=1&configure=iqitsizecharts\"};
var number_specifications = {\"symbol\":[\",\",\".\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"positivePattern\":\"#,##0.###\",\"negativePattern\":\"-#,##0.###\",\"maxFractionDigits\":3,\"minFractionDigits\":0,\"groupingUsed\":true,\"primaryGroupSize\":3,\"secondaryGroupSize\":3};
var show_new_customers = \"1\";
var show_new_messages = false;
var show_new_orders = \"1\";
</script>
<script type=\"text/javascript\" src=\"/modules/ps_faviconnotificationbo/views/js/favico.js\"></script>
<script type=\"text/javascript\" src=\"/admin786icvj8i/themes/new-theme/public/main.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/js/jquery/plugins/jquery.chosen.js\"></script>
<script type=\"text/javascript\" src=\"/js/admin.js?v=1.7.6.2\"></script>
<script type=\"text/javascript\" src=\"/admin786icvj8i/themes/new-theme/public/cldr.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/js/tools.js?v=1.7.6.2\"></script>
<script type=\"text/javascript\" src=\"/admin786icvj8i/public/bundle.js\"></script>
<script type=\"text/javascript\" src=\"/js/vendor/d3.v3.min.js\"></script>
<script type=\"text/javascript\" src=\"/admin786icvj8i/themes/default/js/vendor/nv.d3.min.js\"></script>
<script type=\"text/javascript\" src=\"/modules/gamification/views/js/gamification_bt.js\"></script>
<script type=\"text/javascript\" src=\"/js/jquery/plugins/fancybox/jquery.fancybox.js\"></script>

  <script type=\"text/javascript\">
/*
 * Return total of notification per checkbox checked
 * @param  int nbNewCustomer
 * @param  int nbNewOrder
 * @param  int nbNewMessage
 * @return int result        Total of Notification
 */
function getNotification(nbNewCustomer, nbNewOrder, nbNewMessage) {
    let result = 0;
    //if radiobutton is checked
     result += nbNewOrder;      result += nbNewCustomer;      result += nbNewMessage; 
    return result;
}

function loadAjax(adminController) {
    \$.ajax({
        type: 'POST',
        dataType: 'JSON',
        url: adminController,
        data: {
            ajax: true,
            action: \"GetNotifications\",
        },

        success: function(data) {

            let nbNewCustomers = parseInt(data.customer.total);
            let nbNewOrders = parseInt(data.order.total);
            let nbNewCustomerMessages = parseInt(data.customer_message.total);

            let nbTotalNotification = getNotification(nbNewCustomers, nbNewOrders, nbNewCustomerMessages);

            favicon.badge(nbTotalNotification);
        },
        error: function(err) {
            console.log(err);
            console.log(adminController);
        },
    });
}

function updateNotifications(type) {
  \$.post(
    baseAdminDir + \"ajax.php\",
    {
      \"updateElementEmployee\": \"1\",
      \"updateElementEmployeeType\": type
    }
  );
}

\$(document).ready(function() {
    adminController = adminController.replace(/\\amp;/g, '');
    //set the configuration of the favicon
    window.favicon = new Favico({
        animation: 'popFade',
        bgColor: BgColor,
        textColor: TxtColor,
    });
    loadAjax(adminController)
    setInterval(function() {
        loadAjax(adminController);
    }, 60000); //refresh notification every 60 seconds

    //update favicon when you click on the customer tab into your backoffice
    \$(document).on('click', '#subtab-AdminCustomers', function (e) {
        updateNotifications('customer');
    });
    //update favicon when you click on the customer service tab into your backoffice
    \$(document).on('click', '#subtab-AdminCustomerThreads', function (e) {
        updateNotifications('customer_message');
    });
    //update favicon when you click on the order tab into your backoffice
    \$(document).on('click', '#subtab-AdminOrders', function (e) {
        updateNotifications('order');
    });
});
</script>

<script type=\"text/javascript\">
    let BgColor = \"#DF0067\";
    let TxtColor = \"#ffffff\";
    let CheckBoxOrder = \"1\";
    let CheckBoxCustomer = \"1\";
    let CheckBoxMessage = \"1\";
    let adminController = \"https://www.regalonatural.es/admin786icvj8i/index.php?controller=AdminAjaxFaviconBO&amp;token=cce2a829a3329d2b829ae30acbf1c55e\";
</script>

<script>
            var admin_gamification_ajax_url = \"https:\\/\\/www.regalonatural.es\\/admin786icvj8i\\/index.php?controller=AdminGamification&token=f947d88b1e0fd17e92434cde196f34a3\";
            var current_id_tab = 25;
        </script>    
    <script type=\"text/javascript\">
        var customers_list = {
            init: function() {
                customers_list.createListDropdown();
            },
            createListDropdown: function() {
                                var parent = \$('table.table.customer');
                                if (parent.length) {
                    var items = parent.find('tbody tr');
                    if (items.length) {
                        items.each(function(){
                            var last_cell = \$(this).find('td:last');
                            var checkbox = \$(this).find('td:first input[type=checkbox]');
                            if (checkbox.length > 0) {
                                var id_customer = parseInt(checkbox.attr('value'));
                            } else {
                                                                var id_customer = parseInt(\$(this).find('td:first').html());
                                                            }
                            if (last_cell.length) {
                                                                    var button_container = last_cell.find('.btn-group'),
                                        button = customers_list.createWhatsAppChatButton(id_customer);
                                    if (last_cell.find('.btn-group-action').length) {
                                        button_container.find('ul.dropdown-menu').append(\$(document.createElement('li')).attr({'class': 'divider'}));
                                        button_container.find('ul.dropdown-menu').append(button);
                                    } else {
                                        button_container.wrap(\$(document.createElement('div')).addClass('btn-group-action'));
                                        button_container.append(
                                            \$(document.createElement('button')).addClass('btn btn-default dropdown-toggle').attr('data-toggle', 'dropdown')
                                                .append(\$(document.createElement('i')).addClass('icon-caret-down'))
                                        ).append(\$(document.createElement('ul')).addClass('dropdown-menu').append(button))
                                    }
                                                            }
                        });
                    }
                }
            },
            createWhatsAppChatButton: function(id_customer) {
                return \$(document.createElement('li')).append(\$(document.createElement('a')).attr({'href': '#', 'title':'WhatsApp', 'onclick': 'customers_list.getCustomerPhoneAndOpenWhatsAppChat(' + id_customer + ')'}).html('<i class=\"icon-whatsapp\"></i> ' + customers_list.tr('WhatsApp')));
            },
            tr: function(str) {
                return str;
            },
            getCustomerPhoneAndOpenWhatsAppChat: function(id_customer) {
                \$.ajax({
                    type: 'POST',
                    url: 'https://www.regalonatural.es/admin786icvj8i/index.php?controller=AdminWhatsappChat&token=78b21569144751977830b572d58d0ef2',
                    async: true,
                    cache: false,
                    dataType : \"json\",
                    data: 'method=getCustomerMobilePhone&id_customer=' + id_customer,
                    success: function(jsonData)
                    {
                        if (jsonData.whatsappchat_response.code == 'OK') {
                            window.open(jsonData.whatsappchat_response.url, \"sharer\", \"toolbar=0,status=0,width=660,height=525\");
                        } else if (jsonData.whatsappchat_response.code == 'NOK') {
                            alert(jsonData.whatsappchat_response.msg);
                        }
                    },
                    error: function(XMLHttpRequest, textStatus, errorThrown) {
                        console.log(XMLHttpRequest);
                        if (textStatus != 'abort') {
                            alert(\"TECHNICAL ERROR: unable to open WhatsApp chat window \\n\\nDetails:\\nError thrown: \" + XMLHttpRequest + \"\\n\" + 'Text status: ' + textStatus);
                        }
                    }
                });
            },
            openWhatsAppChat: function() {
                window.open(\"\", \"sharer\", \"toolbar=0,status=0,width=660,height=525\");
            },
        }
        \$(function(){
            customers_list.init();
        });
        if (document.URL.indexOf('id_customer') > 0) {
            \$(document).ready(function(){
                                                            var toolbar = \$('ul#toolbar-nav').prepend('<li><a id=\"page-header-desc-customer-whatsapp\" class=\"toolbar_btn\" href=\"#\" onclick=\"customers_list.openWhatsAppChat();return false;\" title=\"Enviar WhatsApp\"><i class=\"icon-whatsapp bo\"></i><div>Enviar WhatsApp</div></a></li>');
                                        var html = '<a class=\"btn btn-default\" href=\"#\" onclick=\"customers_list.openWhatsAppChat();return false;\" ><i class=\"icon-whatsapp bo\"></i> Enviar WhatsApp</a>';
                                            \$(\"#content div.col-lg-7 .panel:first .hidden-print:first\").prepend(html);
                                                });
        }
    </script>
    


";
        // line 264
        $this->displayBlock('stylesheets', $context, $blocks);
        $this->displayBlock('extra_stylesheets', $context, $blocks);
        echo "</head>

<body class=\"lang-es admincustomers\">

  <header id=\"header\">

    <nav id=\"header_infos\" class=\"main-header\">
      <button class=\"btn btn-primary-reverse onclick btn-lg unbind ajax-spinner\"></button>

            <i class=\"material-icons js-mobile-menu\">menu</i>
      <a id=\"header_logo\" class=\"logo float-left\" href=\"https://www.regalonatural.es/admin786icvj8i/index.php?controller=AdminDashboard&amp;token=49b9fa473aac0feaa48fee66da04ac30\"></a>
      <span id=\"shop_version\">1.7.6.2</span>

      <div class=\"component\" id=\"quick-access-container\">
        <div class=\"dropdown quick-accesses\">
  <button class=\"btn btn-link btn-sm dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" id=\"quick_select\">
    Acceso rápido
  </button>
  <div class=\"dropdown-menu\">
          <a class=\"dropdown-item\"
         href=\"https://www.regalonatural.es/admin786icvj8i/index.php?controller=AdminStats&amp;module=statscheckup&amp;token=c8dbbb1b5de29f26f2bb48cba221fea8\"
                 data-item=\"Evaluación del catálogo\"
      >Evaluación del catálogo</a>
          <a class=\"dropdown-item\"
         href=\"https://www.regalonatural.es/admin786icvj8i/index.php/improve/modules/manage?token=dcded209159a7b6ce38ad30a342e1f15\"
                 data-item=\"Módulos instalados\"
      >Módulos instalados</a>
          <a class=\"dropdown-item\"
         href=\"https://www.regalonatural.es/admin786icvj8i/index.php?controller=AdminCategories&amp;addcategory&amp;token=191ed907ae1e7061748019840e77a7f4\"
                 data-item=\"Nueva categoría\"
      >Nueva categoría</a>
          <a class=\"dropdown-item\"
         href=\"https://www.regalonatural.es/admin786icvj8i/index.php/sell/catalog/products/new?token=dcded209159a7b6ce38ad30a342e1f15\"
                 data-item=\"Nuevo\"
      >Nuevo</a>
          <a class=\"dropdown-item\"
         href=\"https://www.regalonatural.es/admin786icvj8i/index.php?controller=AdminCartRules&amp;addcart_rule&amp;token=25a1ae2637e1ca2deb35536a0b9d2fc1\"
                 data-item=\"Nuevo cupón de descuento\"
      >Nuevo cupón de descuento</a>
          <a class=\"dropdown-item\"
         href=\"https://www.regalonatural.es/admin786icvj8i/index.php?controller=AdminOrders&amp;token=7bbdc450a7b98d0a8fcf5e67121b795c\"
                 data-item=\"Pedidos\"
      >Pedidos</a>
        <div class=\"dropdown-divider\"></div>
          <a
        class=\"dropdown-item js-quick-link\"
        href=\"#\"
        data-rand=\"57\"
        data-icon=\"icon-AdminParentCustomer\"
        data-method=\"add\"
        data-url=\"index.php/sell/customers/?-whbGqg\"
        data-post-link=\"https://www.regalonatural.es/admin786icvj8i/index.php?controller=AdminQuickAccesses&token=bec01173e0d1c31a0e9aac6ca6e26274\"
        data-prompt-text=\"Por favor, renombre este acceso rápido:\"
        data-link=\"Clientes - Lista\"
      >
        <i class=\"material-icons\">add_circle</i>
        Añadir esta página a Acceso rápido
      </a>
        <a class=\"dropdown-item\" href=\"https://www.regalonatural.es/admin786icvj8i/index.php?controller=AdminQuickAccesses&token=bec01173e0d1c31a0e9aac6ca6e26274\">
      <i class=\"material-icons\">settings</i>
      Administrar accesos rápidos
    </a>
  </div>
</div>
      </div>
      <div class=\"component\" id=\"header-search-container\">
        <form id=\"header_search\"
      class=\"bo_search_form dropdown-form js-dropdown-form collapsed\"
      method=\"post\"
      action=\"/admin786icvj8i/index.php?controller=AdminSearch&amp;token=bc8d24d19128524d78aaa764070ab08c\"
      role=\"search\">
  <input type=\"hidden\" name=\"bo_search_type\" id=\"bo_search_type\" class=\"js-search-type\" />
    <div class=\"input-group\">
    <input type=\"text\" class=\"form-control js-form-search\" id=\"bo_query\" name=\"bo_query\" value=\"\" placeholder=\"Buscar (p. ej.: referencia de producto, nombre de cliente...)\">
    <div class=\"input-group-append\">
      <button type=\"button\" class=\"btn btn-outline-secondary dropdown-toggle js-dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
        toda la tienda
      </button>
      <div class=\"dropdown-menu js-items-list\">
        <a class=\"dropdown-item\" data-item=\"toda la tienda\" href=\"#\" data-value=\"0\" data-placeholder=\"¿Qué estás buscando?\" data-icon=\"icon-search\"><i class=\"material-icons\">search</i> toda la tienda</a>
        <div class=\"dropdown-divider\"></div>
        <a class=\"dropdown-item\" data-item=\"Catálogo\" href=\"#\" data-value=\"1\" data-placeholder=\"Nombre del producto, SKU, referencia...\" data-icon=\"icon-book\"><i class=\"material-icons\">store_mall_directory</i> Catálogo</a>
        <a class=\"dropdown-item\" data-item=\"Clientes por nombre\" href=\"#\" data-value=\"2\" data-placeholder=\"Email, nombre...\" data-icon=\"icon-group\"><i class=\"material-icons\">group</i> Clientes por nombre</a>
        <a class=\"dropdown-item\" data-item=\"Clientes por dirección IP\" href=\"#\" data-value=\"6\" data-placeholder=\"123.45.67.89\" data-icon=\"icon-desktop\"><i class=\"material-icons\">desktop_mac</i> Clientes por dirección IP</a>
        <a class=\"dropdown-item\" data-item=\"Pedidos\" href=\"#\" data-value=\"3\" data-placeholder=\"ID del pedido\" data-icon=\"icon-credit-card\"><i class=\"material-icons\">shopping_basket</i> Pedidos</a>
        <a class=\"dropdown-item\" data-item=\"Facturas\" href=\"#\" data-value=\"4\" data-placeholder=\"Número de factura\" data-icon=\"icon-book\"><i class=\"material-icons\">book</i> Facturas</a>
        <a class=\"dropdown-item\" data-item=\"Carritos\" href=\"#\" data-value=\"5\" data-placeholder=\"ID carrito\" data-icon=\"icon-shopping-cart\"><i class=\"material-icons\">shopping_cart</i> Carritos</a>
        <a class=\"dropdown-item\" data-item=\"Módulos\" href=\"#\" data-value=\"7\" data-placeholder=\"Nombre del módulo\" data-icon=\"icon-puzzle-piece\"><i class=\"material-icons\">extension</i> Módulos</a>
      </div>
      <button class=\"btn btn-primary\" type=\"submit\"><span class=\"d-none\">BÚSQUEDA</span><i class=\"material-icons\">search</i></button>
    </div>
  </div>
</form>

<script type=\"text/javascript\">
 \$(document).ready(function(){
    \$('#bo_query').one('click', function() {
    \$(this).closest('form').removeClass('collapsed');
  });
});
</script>
      </div>

      
      
      <div class=\"component\" id=\"header-shop-list-container\">
          <div class=\"shop-list\">
    <a class=\"link\" id=\"header_shopname\" href=\"http://www.regalonatural.es/\" target= \"_blank\">
      <i class=\"material-icons\">visibility</i>
      Ver mi tienda
    </a>
  </div>
      </div>

              <div class=\"component header-right-component\" id=\"header-notifications-container\">
          <div id=\"notif\" class=\"notification-center dropdown dropdown-clickable\">
  <button class=\"btn notification js-notification dropdown-toggle\" data-toggle=\"dropdown\">
    <i class=\"material-icons\">notifications_none</i>
    <span id=\"notifications-total\" class=\"count hide\">0</span>
  </button>
  <div class=\"dropdown-menu dropdown-menu-right js-notifs_dropdown\">
    <div class=\"notifications\">
      <ul class=\"nav nav-tabs\" role=\"tablist\">
                          <li class=\"nav-item\">
            <a
              class=\"nav-link active\"
              id=\"orders-tab\"
              data-toggle=\"tab\"
              data-type=\"order\"
              href=\"#orders-notifications\"
              role=\"tab\"
            >
              Pedidos<span id=\"_nb_new_orders_\"></span>
            </a>
          </li>
                                    <li class=\"nav-item\">
            <a
              class=\"nav-link \"
              id=\"customers-tab\"
              data-toggle=\"tab\"
              data-type=\"customer\"
              href=\"#customers-notifications\"
              role=\"tab\"
            >
              Clientes<span id=\"_nb_new_customers_\"></span>
            </a>
          </li>
                                    <li class=\"nav-item\">
            <a
              class=\"nav-link \"
              id=\"messages-tab\"
              data-toggle=\"tab\"
              data-type=\"customer_message\"
              href=\"#messages-notifications\"
              role=\"tab\"
            >
              Mensajes<span id=\"_nb_new_messages_\"></span>
            </a>
          </li>
                        </ul>

      <!-- Tab panes -->
      <div class=\"tab-content\">
                          <div class=\"tab-pane active empty\" id=\"orders-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              No hay pedidos nuevos por ahora :(<br>
              ¿Y si incluyes algunos descuentos de temporada?
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"customers-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              No hay clientes nuevos por ahora :(<br>
              ¿Se mantiene activo en las redes sociales en estos momentos?
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"messages-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              No hay mensajes nuevo por ahora.<br>
              Que no haya noticias, es de por sí una buena noticia, ¿verdad?
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                        </div>
    </div>
  </div>
</div>

  <script type=\"text/html\" id=\"order-notification-template\">
    <a class=\"notif\" href='order_url'>
      #_id_order_ -
      de <strong>_customer_name_</strong> (_iso_code_)_carrier_
      <strong class=\"float-sm-right\">_total_paid_</strong>
    </a>
  </script>

  <script type=\"text/html\" id=\"customer-notification-template\">
    <a class=\"notif\" href='customer_url'>
      #_id_customer_ - <strong>_customer_name_</strong>_company_ - registrado <strong>_date_add_</strong>
    </a>
  </script>

  <script type=\"text/html\" id=\"message-notification-template\">
    <a class=\"notif\" href='message_url'>
    <span class=\"message-notification-status _status_\">
      <i class=\"material-icons\">fiber_manual_record</i> _status_
    </span>
      - <strong>_customer_name_</strong> (_company_) - <i class=\"material-icons\">access_time</i> _date_add_
    </a>
  </script>
        </div>
      
      <div class=\"component\" id=\"header-employee-container\">
        <div class=\"dropdown employee-dropdown\">
  <div class=\"rounded-circle person\" data-toggle=\"dropdown\">
    <i class=\"material-icons\">account_circle</i>
  </div>
  <div class=\"dropdown-menu dropdown-menu-right\">
    <div class=\"employee-wrapper-avatar\">
      
      <span class=\"employee_avatar\"><img class=\"avatar rounded-circle\" src=\"https://profile.prestashop.com/vicsoft01%40gmail.com.jpg\" /></span>
      <span class=\"employee_profile\">Bienvenido de nuevo, Victor</span>
      <a class=\"dropdown-item employee-link profile-link\" href=\"/admin786icvj8i/index.php/configure/advanced/employees/1/edit?_token=HX48j3FVTK6Puhx2fhEaUkIwbFetfuHx1rzS-whbGqg\">
      <i class=\"material-icons\">settings</i>
      Tu perfil
    </a>
    </div>
    
    <p class=\"divider\"></p>
    <a class=\"dropdown-item\" href=\"https://www.prestashop.com/en/resources/documentations?utm_source=back-office&amp;utm_medium=profile&amp;utm_campaign=resources-en&amp;utm_content=download17\" target=\"_blank\"><i class=\"material-icons\">book</i> Recursos</a>
    <a class=\"dropdown-item\" href=\"https://www.prestashop.com/en/training?utm_source=back-office&amp;utm_medium=profile&amp;utm_campaign=training-en&amp;utm_content=download17\" target=\"_blank\"><i class=\"material-icons\">school</i> Formación</a>
    <a class=\"dropdown-item\" href=\"https://www.prestashop.com/en/experts?utm_source=back-office&amp;utm_medium=profile&amp;utm_campaign=expert-en&amp;utm_content=download17\" target=\"_blank\"><i class=\"material-icons\">person_pin_circle</i> Encontrar un Experto</a>
    <a class=\"dropdown-item\" href=\"https://addons.prestashop.com?utm_source=back-office&amp;utm_medium=profile&amp;utm_campaign=addons-en&amp;utm_content=download17\" target=\"_blank\"><i class=\"material-icons\">extension</i> Marketplace de PrestaShop</a>
    <a class=\"dropdown-item\" href=\"https://www.prestashop.com/en/contact?utm_source=back-office&amp;utm_medium=profile&amp;utm_campaign=help-center-en&amp;utm_content=download17\" target=\"_blank\"><i class=\"material-icons\">help</i> Centro de ayuda</a>
    <p class=\"divider\"></p>
    <a class=\"dropdown-item employee-link text-center\" id=\"header_logout\" href=\"https://www.regalonatural.es/admin786icvj8i/index.php?controller=AdminLogin&amp;logout=1&amp;token=bc18872782a91a43f205b9200458fbcf\">
      <i class=\"material-icons d-lg-none\">power_settings_new</i>
      <span>Cerrar sesión</span>
    </a>
  </div>
</div>
      </div>
    </nav>

      </header>

  <nav class=\"nav-bar d-none d-md-block\">
  <span class=\"menu-collapse\" data-toggle-url=\"/admin786icvj8i/index.php/configure/advanced/employees/toggle-navigation?_token=HX48j3FVTK6Puhx2fhEaUkIwbFetfuHx1rzS-whbGqg\">
    <i class=\"material-icons\">chevron_left</i>
    <i class=\"material-icons\">chevron_left</i>
  </span>

  <ul class=\"main-menu\">

          
                
                
        
          <li class=\"link-levelone \" data-submenu=\"1\" id=\"tab-AdminDashboard\">
            <a href=\"https://www.regalonatural.es/admin786icvj8i/index.php?controller=AdminDashboard&amp;token=49b9fa473aac0feaa48fee66da04ac30\" class=\"link\" >
              <i class=\"material-icons\">trending_up</i> <span>Inicio</span>
            </a>
          </li>

        
                
                                  
                
        
          <li class=\"category-title -active\" data-submenu=\"2\" id=\"tab-SELL\">
              <span class=\"title\">Vender</span>
          </li>

                          
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"3\" id=\"subtab-AdminParentOrders\">
                  <a href=\"https://www.regalonatural.es/admin786icvj8i/index.php?controller=AdminOrders&amp;token=7bbdc450a7b98d0a8fcf5e67121b795c\" class=\"link\">
                    <i class=\"material-icons mi-shopping_basket\">shopping_basket</i>
                    <span>
                    Pedidos
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-3\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"4\" id=\"subtab-AdminOrders\">
                              <a href=\"https://www.regalonatural.es/admin786icvj8i/index.php?controller=AdminOrders&amp;token=7bbdc450a7b98d0a8fcf5e67121b795c\" class=\"link\"> Pedidos
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"5\" id=\"subtab-AdminInvoices\">
                              <a href=\"/admin786icvj8i/index.php/sell/orders/invoices/?_token=HX48j3FVTK6Puhx2fhEaUkIwbFetfuHx1rzS-whbGqg\" class=\"link\"> Facturas
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"6\" id=\"subtab-AdminSlip\">
                              <a href=\"https://www.regalonatural.es/admin786icvj8i/index.php?controller=AdminSlip&amp;token=7b4241b0cf2683ab0b6175915bc894c4\" class=\"link\"> Facturas por abono
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"7\" id=\"subtab-AdminDeliverySlip\">
                              <a href=\"/admin786icvj8i/index.php/sell/orders/delivery-slips/?_token=HX48j3FVTK6Puhx2fhEaUkIwbFetfuHx1rzS-whbGqg\" class=\"link\"> Albaranes de entrega
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"8\" id=\"subtab-AdminCarts\">
                              <a href=\"https://www.regalonatural.es/admin786icvj8i/index.php?controller=AdminCarts&amp;token=b4def2d262b95433ff2d61c4e83c1637\" class=\"link\"> Carritos de compra
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"9\" id=\"subtab-AdminCatalog\">
                  <a href=\"/admin786icvj8i/index.php/sell/catalog/products?_token=HX48j3FVTK6Puhx2fhEaUkIwbFetfuHx1rzS-whbGqg\" class=\"link\">
                    <i class=\"material-icons mi-store\">store</i>
                    <span>
                    Catálogo
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-9\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"10\" id=\"subtab-AdminProducts\">
                              <a href=\"/admin786icvj8i/index.php/sell/catalog/products?_token=HX48j3FVTK6Puhx2fhEaUkIwbFetfuHx1rzS-whbGqg\" class=\"link\"> Productos
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"11\" id=\"subtab-AdminCategories\">
                              <a href=\"/admin786icvj8i/index.php/sell/catalog/categories?_token=HX48j3FVTK6Puhx2fhEaUkIwbFetfuHx1rzS-whbGqg\" class=\"link\"> Categorías
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"12\" id=\"subtab-AdminTracking\">
                              <a href=\"https://www.regalonatural.es/admin786icvj8i/index.php?controller=AdminTracking&amp;token=4922e3807917e68111d31aa6abf82a90\" class=\"link\"> Monitoreo
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"13\" id=\"subtab-AdminParentAttributesGroups\">
                              <a href=\"https://www.regalonatural.es/admin786icvj8i/index.php?controller=AdminAttributesGroups&amp;token=e89d56167d323753d25bd5b461ec2b40\" class=\"link\"> Atributos y Características
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"16\" id=\"subtab-AdminParentManufacturers\">
                              <a href=\"/admin786icvj8i/index.php/sell/catalog/brands/?_token=HX48j3FVTK6Puhx2fhEaUkIwbFetfuHx1rzS-whbGqg\" class=\"link\"> Marcas y Proveedores
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"19\" id=\"subtab-AdminAttachments\">
                              <a href=\"https://www.regalonatural.es/admin786icvj8i/index.php?controller=AdminAttachments&amp;token=cba05f76a3f3d0b457fd7615adcbcb3d\" class=\"link\"> Archivos
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"20\" id=\"subtab-AdminParentCartRules\">
                              <a href=\"https://www.regalonatural.es/admin786icvj8i/index.php?controller=AdminCartRules&amp;token=25a1ae2637e1ca2deb35536a0b9d2fc1\" class=\"link\"> Descuentos
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"23\" id=\"subtab-AdminStockManagement\">
                              <a href=\"/admin786icvj8i/index.php/sell/stocks/?_token=HX48j3FVTK6Puhx2fhEaUkIwbFetfuHx1rzS-whbGqg\" class=\"link\"> Stocks
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"160\" id=\"subtab-AdminAnProductFields\">
                              <a href=\"https://www.regalonatural.es/admin786icvj8i/index.php?controller=AdminAnProductFields&amp;token=aa228bb6f818b64df2c098d3328d4358\" class=\"link\"> AN Product Fields
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                                                    
                <li class=\"link-levelone has_submenu -active open ul-open\" data-submenu=\"24\" id=\"subtab-AdminParentCustomer\">
                  <a href=\"/admin786icvj8i/index.php/sell/customers/?_token=HX48j3FVTK6Puhx2fhEaUkIwbFetfuHx1rzS-whbGqg\" class=\"link\">
                    <i class=\"material-icons mi-account_circle\">account_circle</i>
                    <span>
                    Clientes
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_up
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-24\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo -active\" data-submenu=\"25\" id=\"subtab-AdminCustomers\">
                              <a href=\"/admin786icvj8i/index.php/sell/customers/?_token=HX48j3FVTK6Puhx2fhEaUkIwbFetfuHx1rzS-whbGqg\" class=\"link\"> Clientes
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"26\" id=\"subtab-AdminAddresses\">
                              <a href=\"https://www.regalonatural.es/admin786icvj8i/index.php?controller=AdminAddresses&amp;token=9b66b3dd5af9059e82a9f26f9c2349c5\" class=\"link\"> Direcciones
                              </a>
                            </li>

                                                                                                                          </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"28\" id=\"subtab-AdminParentCustomerThreads\">
                  <a href=\"https://www.regalonatural.es/admin786icvj8i/index.php?controller=AdminCustomerThreads&amp;token=f30287ff694e256eeb00f52b646aa7c8\" class=\"link\">
                    <i class=\"material-icons mi-chat\">chat</i>
                    <span>
                    Servicio al Cliente
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-28\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"29\" id=\"subtab-AdminCustomerThreads\">
                              <a href=\"https://www.regalonatural.es/admin786icvj8i/index.php?controller=AdminCustomerThreads&amp;token=f30287ff694e256eeb00f52b646aa7c8\" class=\"link\"> Servicio al Cliente
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"30\" id=\"subtab-AdminOrderMessage\">
                              <a href=\"https://www.regalonatural.es/admin786icvj8i/index.php?controller=AdminOrderMessage&amp;token=f41a93479b18d631c05f618a232a4188\" class=\"link\"> Mensajes de Pedidos
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"31\" id=\"subtab-AdminReturn\">
                              <a href=\"https://www.regalonatural.es/admin786icvj8i/index.php?controller=AdminReturn&amp;token=4997c55d6d8ed40eec016c453013a4ff\" class=\"link\"> Devoluciones de mercancía
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone\" data-submenu=\"32\" id=\"subtab-AdminStats\">
                  <a href=\"https://www.regalonatural.es/admin786icvj8i/index.php?controller=AdminStats&amp;token=c8dbbb1b5de29f26f2bb48cba221fea8\" class=\"link\">
                    <i class=\"material-icons mi-assessment\">assessment</i>
                    <span>
                    Estadísticas
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                    </li>
                                                    
        
                
                                  
                
        
          <li class=\"category-title \" data-submenu=\"42\" id=\"tab-IMPROVE\">
              <span class=\"title\">Personalizar</span>
          </li>

                          
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"43\" id=\"subtab-AdminParentModulesSf\">
                  <a href=\"/admin786icvj8i/index.php/improve/modules/manage?_token=HX48j3FVTK6Puhx2fhEaUkIwbFetfuHx1rzS-whbGqg\" class=\"link\">
                    <i class=\"material-icons mi-extension\">extension</i>
                    <span>
                    Módulos
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-43\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"44\" id=\"subtab-AdminModulesSf\">
                              <a href=\"/admin786icvj8i/index.php/improve/modules/manage?_token=HX48j3FVTK6Puhx2fhEaUkIwbFetfuHx1rzS-whbGqg\" class=\"link\"> Module Manager
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"48\" id=\"subtab-AdminParentModulesCatalog\">
                              <a href=\"https://www.regalonatural.es/admin786icvj8i/index.php?controller=AdminPsMboModule&amp;token=c3f288bb5a35509c95af02b572ba8622\" class=\"link\"> Catálogo de Módulos
                              </a>
                            </li>

                                                                                                                          </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"52\" id=\"subtab-AdminParentThemes\">
                  <a href=\"/admin786icvj8i/index.php/improve/design/themes/?_token=HX48j3FVTK6Puhx2fhEaUkIwbFetfuHx1rzS-whbGqg\" class=\"link\">
                    <i class=\"material-icons mi-desktop_mac\">desktop_mac</i>
                    <span>
                    Diseño
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-52\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"126\" id=\"subtab-AdminThemesParent\">
                              <a href=\"/admin786icvj8i/index.php/improve/design/themes/?_token=HX48j3FVTK6Puhx2fhEaUkIwbFetfuHx1rzS-whbGqg\" class=\"link\"> Tema y logotipo
                              </a>
                            </li>

                                                                                                                              
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"135\" id=\"subtab-AdminPsMboTheme\">
                              <a href=\"https://www.regalonatural.es/admin786icvj8i/index.php?controller=AdminPsMboTheme&amp;token=27ab4b89cf0b2d1b767888c0feab3eae\" class=\"link\"> Catálogo de Temas
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"55\" id=\"subtab-AdminMailThemeParent\">
                              <a href=\"/admin786icvj8i/index.php/improve/design/mail_theme/?_token=HX48j3FVTK6Puhx2fhEaUkIwbFetfuHx1rzS-whbGqg\" class=\"link\"> Tema Email
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"57\" id=\"subtab-AdminCmsContent\">
                              <a href=\"/admin786icvj8i/index.php/improve/design/cms-pages/?_token=HX48j3FVTK6Puhx2fhEaUkIwbFetfuHx1rzS-whbGqg\" class=\"link\"> Páginas
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"58\" id=\"subtab-AdminModulesPositions\">
                              <a href=\"/admin786icvj8i/index.php/improve/design/modules/positions/?_token=HX48j3FVTK6Puhx2fhEaUkIwbFetfuHx1rzS-whbGqg\" class=\"link\"> Posiciones
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"59\" id=\"subtab-AdminImages\">
                              <a href=\"https://www.regalonatural.es/admin786icvj8i/index.php?controller=AdminImages&amp;token=f89f427988875feb59b294a2996894f2\" class=\"link\"> Ajustes de imágenes
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"125\" id=\"subtab-AdminLinkWidget\">
                              <a href=\"/admin786icvj8i/index.php/modules/link-widget/list?_token=HX48j3FVTK6Puhx2fhEaUkIwbFetfuHx1rzS-whbGqg\" class=\"link\"> Link Widget
                              </a>
                            </li>

                                                                                                                              
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"148\" id=\"subtab-AdminIqitElementor\">
                              <a href=\"https://www.regalonatural.es/admin786icvj8i/index.php?controller=AdminIqitElementor&amp;token=6e026ba260e67e5a9ecc361f6b368fbd\" class=\"link\"> Iqit Elementor - Page builder
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"151\" id=\"subtab-IqitFrontThemeEditor\">
                              <a href=\"https://www.regalonatural.es/admin786icvj8i/index.php?controller=IqitFrontThemeEditor&amp;token=7eab237f4e679db7588ba270572eca01\" class=\"link\"> IqitThemeEditor - Live
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"152\" id=\"subtab-AdminIqitThemeEditor\">
                              <a href=\"https://www.regalonatural.es/admin786icvj8i/index.php?controller=AdminIqitThemeEditor&amp;token=f18637d7a38084849b2ae81ff99f7a8f\" class=\"link\"> IqitThemeEditor - Backoffice
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"60\" id=\"subtab-AdminParentShipping\">
                  <a href=\"https://www.regalonatural.es/admin786icvj8i/index.php?controller=AdminCarriers&amp;token=a8a1f4a0e65fe6ac8e1cc2e754a07eef\" class=\"link\">
                    <i class=\"material-icons mi-local_shipping\">local_shipping</i>
                    <span>
                    Transporte
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-60\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"61\" id=\"subtab-AdminCarriers\">
                              <a href=\"https://www.regalonatural.es/admin786icvj8i/index.php?controller=AdminCarriers&amp;token=a8a1f4a0e65fe6ac8e1cc2e754a07eef\" class=\"link\"> Transportistas
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"62\" id=\"subtab-AdminShipping\">
                              <a href=\"/admin786icvj8i/index.php/improve/shipping/preferences?_token=HX48j3FVTK6Puhx2fhEaUkIwbFetfuHx1rzS-whbGqg\" class=\"link\"> Preferencias
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"63\" id=\"subtab-AdminParentPayment\">
                  <a href=\"/admin786icvj8i/index.php/improve/payment/payment_methods?_token=HX48j3FVTK6Puhx2fhEaUkIwbFetfuHx1rzS-whbGqg\" class=\"link\">
                    <i class=\"material-icons mi-payment\">payment</i>
                    <span>
                    Pago
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-63\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"64\" id=\"subtab-AdminPayment\">
                              <a href=\"/admin786icvj8i/index.php/improve/payment/payment_methods?_token=HX48j3FVTK6Puhx2fhEaUkIwbFetfuHx1rzS-whbGqg\" class=\"link\"> Métodos de pago
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"65\" id=\"subtab-AdminPaymentPreferences\">
                              <a href=\"/admin786icvj8i/index.php/improve/payment/preferences?_token=HX48j3FVTK6Puhx2fhEaUkIwbFetfuHx1rzS-whbGqg\" class=\"link\"> Preferencias
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"66\" id=\"subtab-AdminInternational\">
                  <a href=\"/admin786icvj8i/index.php/improve/international/localization/?_token=HX48j3FVTK6Puhx2fhEaUkIwbFetfuHx1rzS-whbGqg\" class=\"link\">
                    <i class=\"material-icons mi-language\">language</i>
                    <span>
                    Internacional
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-66\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"67\" id=\"subtab-AdminParentLocalization\">
                              <a href=\"/admin786icvj8i/index.php/improve/international/localization/?_token=HX48j3FVTK6Puhx2fhEaUkIwbFetfuHx1rzS-whbGqg\" class=\"link\"> Localización
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"72\" id=\"subtab-AdminParentCountries\">
                              <a href=\"https://www.regalonatural.es/admin786icvj8i/index.php?controller=AdminZones&amp;token=fb373967b8b693d613dbc77fe80404b4\" class=\"link\"> Ubicaciones Geográficas
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"76\" id=\"subtab-AdminParentTaxes\">
                              <a href=\"/admin786icvj8i/index.php/improve/international/taxes/?_token=HX48j3FVTK6Puhx2fhEaUkIwbFetfuHx1rzS-whbGqg\" class=\"link\"> Impuestos
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"79\" id=\"subtab-AdminTranslations\">
                              <a href=\"/admin786icvj8i/index.php/improve/international/translations/settings?_token=HX48j3FVTK6Puhx2fhEaUkIwbFetfuHx1rzS-whbGqg\" class=\"link\"> Traducciones
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone\" data-submenu=\"131\" id=\"subtab-AdminEmarketing\">
                  <a href=\"https://www.regalonatural.es/admin786icvj8i/index.php?controller=AdminEmarketing&amp;token=c4dbb89878c38da429ffd4cb1e796fe2\" class=\"link\">
                    <i class=\"material-icons mi-track_changes\">track_changes</i>
                    <span>
                    Advertising
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"153\" id=\"subtab-AdminBlogForPrestaShop\">
                  <a href=\"https://www.regalonatural.es/admin786icvj8i/index.php?controller=AdminSimpleBlogPosts&amp;token=8cf37e8668648907eb25af35450f7b26\" class=\"link\">
                    <i class=\"material-icons mi-note\">note</i>
                    <span>
                    Blog for PrestaShop
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-153\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"154\" id=\"subtab-AdminSimpleBlogPosts\">
                              <a href=\"https://www.regalonatural.es/admin786icvj8i/index.php?controller=AdminSimpleBlogPosts&amp;token=8cf37e8668648907eb25af35450f7b26\" class=\"link\"> Posts
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"155\" id=\"subtab-AdminSimpleBlogCategories\">
                              <a href=\"https://www.regalonatural.es/admin786icvj8i/index.php?controller=AdminSimpleBlogCategories&amp;token=12ed8a7ab9977a9efcf920ff8c119ce2\" class=\"link\"> Categorías
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"156\" id=\"subtab-AdminSimpleBlogComments\">
                              <a href=\"https://www.regalonatural.es/admin786icvj8i/index.php?controller=AdminSimpleBlogComments&amp;token=db8160d44d1d306bdf4e1878942a65e5\" class=\"link\"> Comments
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"157\" id=\"subtab-AdminSimpleBlogTags\">
                              <a href=\"https://www.regalonatural.es/admin786icvj8i/index.php?controller=AdminSimpleBlogTags&amp;token=8bbdab6b76342a3c9bd513d5677ef7ad\" class=\"link\"> Tags
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"158\" id=\"subtab-AdminSimpleBlogAuthors\">
                              <a href=\"https://www.regalonatural.es/admin786icvj8i/index.php?controller=AdminSimpleBlogAuthors&amp;token=c3c4767e3d9c11b9fc43092370e68c16\" class=\"link\"> Autores
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"159\" id=\"subtab-AdminSimpleBlogSettings\">
                              <a href=\"https://www.regalonatural.es/admin786icvj8i/index.php?controller=AdminSimpleBlogSettings&amp;token=256dfe38f3f011f5f3bd57a1e603154e\" class=\"link\"> Settings
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                          
        
                
                                  
                
        
          <li class=\"category-title \" data-submenu=\"80\" id=\"tab-CONFIGURE\">
              <span class=\"title\">Configurar</span>
          </li>

                          
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"81\" id=\"subtab-ShopParameters\">
                  <a href=\"/admin786icvj8i/index.php/configure/shop/preferences/preferences?_token=HX48j3FVTK6Puhx2fhEaUkIwbFetfuHx1rzS-whbGqg\" class=\"link\">
                    <i class=\"material-icons mi-settings\">settings</i>
                    <span>
                    Parámetros de la tienda
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-81\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"82\" id=\"subtab-AdminParentPreferences\">
                              <a href=\"/admin786icvj8i/index.php/configure/shop/preferences/preferences?_token=HX48j3FVTK6Puhx2fhEaUkIwbFetfuHx1rzS-whbGqg\" class=\"link\"> Configuración
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"85\" id=\"subtab-AdminParentOrderPreferences\">
                              <a href=\"/admin786icvj8i/index.php/configure/shop/order-preferences/?_token=HX48j3FVTK6Puhx2fhEaUkIwbFetfuHx1rzS-whbGqg\" class=\"link\"> Configuración de Pedidos
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"88\" id=\"subtab-AdminPPreferences\">
                              <a href=\"/admin786icvj8i/index.php/configure/shop/product-preferences/?_token=HX48j3FVTK6Puhx2fhEaUkIwbFetfuHx1rzS-whbGqg\" class=\"link\"> Configuración de Productos
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"89\" id=\"subtab-AdminParentCustomerPreferences\">
                              <a href=\"/admin786icvj8i/index.php/configure/shop/customer-preferences/?_token=HX48j3FVTK6Puhx2fhEaUkIwbFetfuHx1rzS-whbGqg\" class=\"link\"> Ajustes sobre clientes
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"93\" id=\"subtab-AdminParentStores\">
                              <a href=\"/admin786icvj8i/index.php/configure/shop/contacts/?_token=HX48j3FVTK6Puhx2fhEaUkIwbFetfuHx1rzS-whbGqg\" class=\"link\"> Contacto
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"96\" id=\"subtab-AdminParentMeta\">
                              <a href=\"/admin786icvj8i/index.php/configure/shop/seo-urls/?_token=HX48j3FVTK6Puhx2fhEaUkIwbFetfuHx1rzS-whbGqg\" class=\"link\"> Tráfico &amp; SEO
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"100\" id=\"subtab-AdminParentSearchConf\">
                              <a href=\"https://www.regalonatural.es/admin786icvj8i/index.php?controller=AdminSearchConf&amp;token=c357a4be6f0feb1341fe7aac95257e89\" class=\"link\"> Buscar
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"130\" id=\"subtab-AdminGamification\">
                              <a href=\"https://www.regalonatural.es/admin786icvj8i/index.php?controller=AdminGamification&amp;token=f947d88b1e0fd17e92434cde196f34a3\" class=\"link\"> Merchant Expertise
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"103\" id=\"subtab-AdminAdvancedParameters\">
                  <a href=\"/admin786icvj8i/index.php/configure/advanced/system-information/?_token=HX48j3FVTK6Puhx2fhEaUkIwbFetfuHx1rzS-whbGqg\" class=\"link\">
                    <i class=\"material-icons mi-settings_applications\">settings_applications</i>
                    <span>
                    Parámetros Avanzados
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-103\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"104\" id=\"subtab-AdminInformation\">
                              <a href=\"/admin786icvj8i/index.php/configure/advanced/system-information/?_token=HX48j3FVTK6Puhx2fhEaUkIwbFetfuHx1rzS-whbGqg\" class=\"link\"> Información
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"105\" id=\"subtab-AdminPerformance\">
                              <a href=\"/admin786icvj8i/index.php/configure/advanced/performance/?_token=HX48j3FVTK6Puhx2fhEaUkIwbFetfuHx1rzS-whbGqg\" class=\"link\"> Rendimiento
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"106\" id=\"subtab-AdminAdminPreferences\">
                              <a href=\"/admin786icvj8i/index.php/configure/advanced/administration/?_token=HX48j3FVTK6Puhx2fhEaUkIwbFetfuHx1rzS-whbGqg\" class=\"link\"> Administración
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"107\" id=\"subtab-AdminEmails\">
                              <a href=\"/admin786icvj8i/index.php/configure/advanced/emails/?_token=HX48j3FVTK6Puhx2fhEaUkIwbFetfuHx1rzS-whbGqg\" class=\"link\"> Dirección de correo electrónico
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"108\" id=\"subtab-AdminImport\">
                              <a href=\"/admin786icvj8i/index.php/configure/advanced/import/?_token=HX48j3FVTK6Puhx2fhEaUkIwbFetfuHx1rzS-whbGqg\" class=\"link\"> Importar
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"109\" id=\"subtab-AdminParentEmployees\">
                              <a href=\"/admin786icvj8i/index.php/configure/advanced/employees/?_token=HX48j3FVTK6Puhx2fhEaUkIwbFetfuHx1rzS-whbGqg\" class=\"link\"> Equipo
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"113\" id=\"subtab-AdminParentRequestSql\">
                              <a href=\"/admin786icvj8i/index.php/configure/advanced/sql-requests/?_token=HX48j3FVTK6Puhx2fhEaUkIwbFetfuHx1rzS-whbGqg\" class=\"link\"> Base de datos
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"116\" id=\"subtab-AdminLogs\">
                              <a href=\"/admin786icvj8i/index.php/configure/advanced/logs/?_token=HX48j3FVTK6Puhx2fhEaUkIwbFetfuHx1rzS-whbGqg\" class=\"link\"> Registros/Logs
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"117\" id=\"subtab-AdminWebservice\">
                              <a href=\"/admin786icvj8i/index.php/configure/advanced/webservice-keys/?_token=HX48j3FVTK6Puhx2fhEaUkIwbFetfuHx1rzS-whbGqg\" class=\"link\"> Webservice
                              </a>
                            </li>

                                                                                                                                                                            </ul>
                                    </li>
                          
        
                
                                  
                
        
          <li class=\"category-title \" data-submenu=\"139\" id=\"tab-AdminRevslider\">
              <span class=\"title\">Revolution Slider</span>
          </li>

                          
                
                                                
                
                <li class=\"link-levelone\" data-submenu=\"140\" id=\"subtab-AdminRevsliderSliders\">
                  <a href=\"https://www.regalonatural.es/admin786icvj8i/index.php?controller=AdminRevsliderSliders&amp;token=059608938408fb202b88308e6bdc476c\" class=\"link\">
                    <i class=\"material-icons mi-extension\">extension</i>
                    <span>
                    Sliders
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone\" data-submenu=\"141\" id=\"subtab-AdminRevolutionsliderGlobalSettings\">
                  <a href=\"https://www.regalonatural.es/admin786icvj8i/index.php?controller=AdminRevolutionsliderGlobalSettings&amp;token=6fb6b77392765ba5f77b3b9b2178c910\" class=\"link\">
                    <i class=\"material-icons mi-extension\">extension</i>
                    <span>
                    Global Settings
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone\" data-submenu=\"142\" id=\"subtab-AdminRevolutionsliderAddons\">
                  <a href=\"https://www.regalonatural.es/admin786icvj8i/index.php?controller=AdminRevolutionsliderAddons&amp;token=8e0e7db530fc9400f6157aa00edd1812\" class=\"link\">
                    <i class=\"material-icons mi-extension\">extension</i>
                    <span>
                    Addons
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone\" data-submenu=\"143\" id=\"subtab-AdminRevolutionsliderNavigation\">
                  <a href=\"https://www.regalonatural.es/admin786icvj8i/index.php?controller=AdminRevolutionsliderNavigation&amp;token=b3718eaec6ae6fe036ced0a42e6ee58b\" class=\"link\">
                    <i class=\"material-icons mi-extension\">extension</i>
                    <span>
                    Navigation
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                    </li>
                          
        
            </ul>
  
</nav>

<div id=\"main-div\">
          
<div class=\"header-toolbar\">
  <div class=\"container-fluid\">

    
      <nav aria-label=\"Breadcrumb\">
        <ol class=\"breadcrumb\">
                      <li class=\"breadcrumb-item\">Clientes</li>
          
                  </ol>
      </nav>
    

    <div class=\"title-row\">
      
          <h1 class=\"title\">
            Administración de clientes          </h1>
      

      
        <div class=\"toolbar-icons\">
          <div class=\"wrapper\">
             

<script>
    
    var isSymfonyContext = true;
    var admin_module_ajax_url_psmbo = 'https://www.regalonatural.es/admin786icvj8i/index.php?controller=AdminPsMboModule&token=c3f288bb5a35509c95af02b572ba8622';
    var controller = 'AdminCustomers';
    
    if (isSymfonyContext === false) {
        
        \$(document).ready(function() {
            
            \$('.process-icon-modules-list').parent('a').prop('href', admin_module_ajax_url_psmbo);
            
            \$('.fancybox-quick-view').fancybox({
                type: 'ajax',
                autoDimensions: false,
                autoSize: false,
                width: 600,
                height: 'auto',
                helpers: {
                    overlay: {
                        locked: false
                    }
                }
            });
        });
    }
\t
\t\$(document).on('click', '#page-header-desc-configuration-modules-list', function(event) {
\t\tevent.preventDefault();
\t\topenModalOrRedirect(isSymfonyContext);
\t});
\t
\t\$('.process-icon-modules-list').parent('a').unbind().bind('click', function (event) {
\t\tevent.preventDefault();
\t\topenModalOrRedirect(isSymfonyContext);
\t});
    
    function openModalOrRedirect(isSymfonyContext) {
        if (isSymfonyContext === false) {
            \$('#modules_list_container').modal('show');
            openModulesList();
        } else {
            window.location.href = admin_module_ajax_url_psmbo;
        }
    }
\t
    function openModulesList() {
        \$.ajax({
            type: 'POST',
            url: admin_module_ajax_url_psmbo,
            data: {
                ajax : true,
                action : 'GetTabModulesList',
                controllerName: controller
            },
            success : function(data) {
                \$('#modules_list_container_tab_modal').html(data).slideDown();
                \$('#modules_list_loader').hide();
            },
        });
    }
\t
\t
</script>

                                                                                    <a
                  class=\"btn btn-primary  pointer\"                  id=\"page-header-desc-configuration-add\"
                  href=\"/admin786icvj8i/index.php/sell/customers/new?_token=HX48j3FVTK6Puhx2fhEaUkIwbFetfuHx1rzS-whbGqg\"                  title=\"Añadir nuevo cliente\"                >
                  <i class=\"material-icons\">add_circle_outline</i>                  Añadir nuevo cliente
                </a>
                                                                  <a
                class=\"btn btn-outline-secondary \"
                id=\"page-header-desc-configuration-modules-list\"
                href=\"/admin786icvj8i/index.php/improve/modules/catalog?_token=HX48j3FVTK6Puhx2fhEaUkIwbFetfuHx1rzS-whbGqg\"                title=\"Módulos recomendados\"
                              >
                Módulos recomendados
              </a>
            
            
                              <a class=\"btn btn-outline-secondary btn-help btn-sidebar\" href=\"#\"
                   title=\"Ayuda\"
                   data-toggle=\"sidebar\"
                   data-target=\"#right-sidebar\"
                   data-url=\"/admin786icvj8i/index.php/common/sidebar/https%253A%252F%252Fhelp.prestashop.com%252Fes%252Fdoc%252FAdminCustomers%253Fversion%253D1.7.6.2%2526country%253Des/Ayuda?_token=HX48j3FVTK6Puhx2fhEaUkIwbFetfuHx1rzS-whbGqg\"
                   id=\"product_form_open_help\"
                >
                  Ayuda
                </a>
                                    </div>
        </div>
      
    </div>
  </div>

  
    
</div>
      
      <div class=\"content-div  \">

        

                                                        
        <div class=\"row \">
          <div class=\"col-sm-12\">
            <div id=\"ajax_confirmation\" class=\"alert alert-success\" style=\"display: none;\"></div>


  ";
        // line 1497
        $this->displayBlock('content_header', $context, $blocks);
        // line 1498
        echo "                 ";
        $this->displayBlock('content', $context, $blocks);
        // line 1499
        echo "                 ";
        $this->displayBlock('content_footer', $context, $blocks);
        // line 1500
        echo "                 ";
        $this->displayBlock('sidebar_right', $context, $blocks);
        // line 1501
        echo "
             
<div class=\"modal fade\" id=\"modules_list_container\">
\t<div class=\"modal-dialog\">
\t\t<div class=\"modal-content\">
\t\t\t<div class=\"modal-header\">
\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
\t\t\t\t<h3 class=\"modal-title\">Módulos y Servicios recomendados</h3>
\t\t\t</div>
\t\t\t<div class=\"modal-body\">
\t\t\t\t<div id=\"modules_list_container_tab_modal\" style=\"display:none;\"></div>
\t\t\t\t<div id=\"modules_list_loader\"><i class=\"icon-refresh icon-spin\"></i></div>
\t\t\t</div>
\t\t</div>
\t</div>
</div>
          </div>
        </div>

      </div>
    </div>

  <div id=\"non-responsive\" class=\"js-non-responsive\">
  <h1>¡Oh no!</h1>
  <p class=\"mt-3\">
    La versión para móviles de esta página no está disponible todavía.
  </p>
  <p class=\"mt-2\">
    Por favor, utiliza un ordenador de escritorio hasta que esta página sea adaptada para dispositivos móviles.
  </p>
  <p class=\"mt-2\">
    Gracias.
  </p>
  <a href=\"https://www.regalonatural.es/admin786icvj8i/index.php?controller=AdminDashboard&amp;token=49b9fa473aac0feaa48fee66da04ac30\" class=\"btn btn-primary py-1 mt-3\">
    <i class=\"material-icons\">arrow_back</i>
    Atrás
  </a>
</div>
  <div class=\"mobile-layer\"></div>

      <div id=\"footer\" class=\"bootstrap\">
    
</div>
  

      <div class=\"bootstrap\">
      <div class=\"modal fade\" id=\"modal_addons_connect\" tabindex=\"-1\">
\t<div class=\"modal-dialog modal-md\">
\t\t<div class=\"modal-content\">
\t\t\t\t\t\t<div class=\"modal-header\">
\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
\t\t\t\t<h4 class=\"modal-title\"><i class=\"icon-puzzle-piece\"></i> <a target=\"_blank\" href=\"https://addons.prestashop.com/?utm_source=back-office&utm_medium=modules&utm_campaign=back-office-ES&utm_content=download\">PrestaShop Addons</a></h4>
\t\t\t</div>
\t\t\t
\t\t\t<div class=\"modal-body\">
\t\t\t\t\t\t<!--start addons login-->
\t\t\t<form id=\"addons_login_form\" method=\"post\" >
\t\t\t\t<div>
\t\t\t\t\t<a href=\"https://addons.prestashop.com/es/login?email=vicsoft01%40gmail.com&amp;firstname=Victor&amp;lastname=Sanchez&amp;website=http%3A%2F%2Fwww.regalonatural.es%2F&amp;utm_source=back-office&amp;utm_medium=connect-to-addons&amp;utm_campaign=back-office-ES&amp;utm_content=download#createnow\"><img class=\"img-responsive center-block\" src=\"/admin786icvj8i/themes/default/img/prestashop-addons-logo.png\" alt=\"Logo PrestaShop Addons\"/></a>
\t\t\t\t\t<h3 class=\"text-center\">Conecta tu tienda con el mercado de PrestaShop para importar automáticamente todas tus compras de Addons.</h3>
\t\t\t\t\t<hr />
\t\t\t\t</div>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<h4>¿No tienes una cuenta?</h4>
\t\t\t\t\t\t<p class='text-justify'>¡Descubre el poder de PrestaShop Addons! Explora el Marketplace oficial de PrestaShop y encuentra más de 3.500 módulos y temas innovadores que optimizan las tasas de conversión, aumentan el tráfico, fidelizan a los clientes y maximizan tu productividad</p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<h4>Conectarme a PrestaShop Addons</h4>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t<div class=\"input-group-prepend\">
\t\t\t\t\t\t\t\t\t<span class=\"input-group-text\"><i class=\"icon-user\"></i></span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<input id=\"username_addons\" name=\"username_addons\" type=\"text\" value=\"\" autocomplete=\"off\" class=\"form-control ac_input\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t<div class=\"input-group-prepend\">
\t\t\t\t\t\t\t\t\t<span class=\"input-group-text\"><i class=\"icon-key\"></i></span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<input id=\"password_addons\" name=\"password_addons\" type=\"password\" value=\"\" autocomplete=\"off\" class=\"form-control ac_input\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<a class=\"btn btn-link float-right _blank\" href=\"//addons.prestashop.com/es/forgot-your-password\">He olvidado mi contraseña</a>
\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"row row-padding-top\">
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<a class=\"btn btn-default btn-block btn-lg _blank\" href=\"https://addons.prestashop.com/es/login?email=vicsoft01%40gmail.com&amp;firstname=Victor&amp;lastname=Sanchez&amp;website=http%3A%2F%2Fwww.regalonatural.es%2F&amp;utm_source=back-office&amp;utm_medium=connect-to-addons&amp;utm_campaign=back-office-ES&amp;utm_content=download#createnow\">
\t\t\t\t\t\t\t\tCrear una Cuenta
\t\t\t\t\t\t\t\t<i class=\"icon-external-link\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<button id=\"addons_login_button\" class=\"btn btn-primary btn-block btn-lg\" type=\"submit\">
\t\t\t\t\t\t\t\t<i class=\"icon-unlock\"></i> Iniciar sesión
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div id=\"addons_loading\" class=\"help-block\"></div>

\t\t\t</form>
\t\t\t<!--end addons login-->
\t\t\t</div>


\t\t\t\t\t</div>
\t</div>
</div>

    </div>
  
";
        // line 1622
        $this->displayBlock('javascripts', $context, $blocks);
        $this->displayBlock('extra_javascripts', $context, $blocks);
        $this->displayBlock('translate_javascripts', $context, $blocks);
        echo "</body>
</html>";
    }

    // line 264
    public function block_stylesheets($context, array $blocks = [])
    {
    }

    public function block_extra_stylesheets($context, array $blocks = [])
    {
    }

    // line 1497
    public function block_content_header($context, array $blocks = [])
    {
    }

    // line 1498
    public function block_content($context, array $blocks = [])
    {
    }

    // line 1499
    public function block_content_footer($context, array $blocks = [])
    {
    }

    // line 1500
    public function block_sidebar_right($context, array $blocks = [])
    {
    }

    // line 1622
    public function block_javascripts($context, array $blocks = [])
    {
    }

    public function block_extra_javascripts($context, array $blocks = [])
    {
    }

    public function block_translate_javascripts($context, array $blocks = [])
    {
    }

    public function getTemplateName()
    {
        return "__string_template__131e2dbe4f91f9cbae2884649c1297846f04a7c36a941d5788224ed57f3fabfa";
    }

    public function getDebugInfo()
    {
        return array (  1712 => 1622,  1707 => 1500,  1702 => 1499,  1697 => 1498,  1692 => 1497,  1683 => 264,  1675 => 1622,  1552 => 1501,  1549 => 1500,  1546 => 1499,  1543 => 1498,  1541 => 1497,  304 => 264,  39 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__131e2dbe4f91f9cbae2884649c1297846f04a7c36a941d5788224ed57f3fabfa", "");
    }
}
