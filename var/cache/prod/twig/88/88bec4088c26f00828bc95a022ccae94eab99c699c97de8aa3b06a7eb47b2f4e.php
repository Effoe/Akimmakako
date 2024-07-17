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

/* __string_template__f2c4ce97ede24808d32bdcd25b3043bd1f22ea6f4a9e83542b6955fabc573fe4 */
class __TwigTemplate_eef0533da20dab11b551e0c465582c4495cd8f8484f604a7744d38634ad4a9f8 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

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
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"fr\">
<head>
  <meta charset=\"utf-8\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<meta name=\"apple-mobile-web-app-capable\" content=\"yes\">
<meta name=\"robots\" content=\"NOFOLLOW, NOINDEX\">

<link rel=\"icon\" type=\"image/x-icon\" href=\"/prestashop/img/favicon.ico\" />
<link rel=\"apple-touch-icon\" href=\"/prestashop/img/app_icon.png\" />

<title>Marketplace • Akimmakako</title>

  <script type=\"text/javascript\">
    var help_class_name = 'AdminPsMboModule';
    var iso_user = 'fr';
    var lang_is_rtl = '0';
    var full_language_code = 'fr-fr';
    var full_cldr_language_code = 'fr-FR';
    var country_iso_code = 'TG';
    var _PS_VERSION_ = '8.1.0';
    var roundMode = 2;
    var youEditFieldFor = '';
        var new_order_msg = 'Une nouvelle commande a été passée sur votre boutique.';
    var order_number_msg = 'Numéro de commande : ';
    var total_msg = 'Total : ';
    var from_msg = 'Du ';
    var see_order_msg = 'Afficher cette commande';
    var new_customer_msg = 'Un nouveau client s\\'est inscrit sur votre boutique.';
    var customer_name_msg = 'Nom du client : ';
    var new_msg = 'Un nouveau message a été posté sur votre boutique.';
    var see_msg = 'Lire le message';
    var token = 'c80f1e5fe2fa0549e799bd567d18ab6f';
    var currentIndex = 'index.php?controller=AdminPsMboModule';
    var employee_token = 'f8bd9de1a2c3444c30c8138c4d6afdc1';
    var choose_language_translate = 'Choisissez la langue :';
    var default_language = '1';
    var admin_modules_link = '/prestashop/admin5/index.php/improve/modules/manage?_token=z3FsxlNPSW-zyItz3adnYSB1w_XLpsC874lgmv7STlc';
    var admin_notification_get_link = '/prestashop/admin5/index.php/common/notifications?_token=z3FsxlNPSW-zyItz3adnYSB1w_XLpsC874lgmv7STlc';
    var admin_notification_push_link = adminNotificationPushLink = '/prestashop/admin5/index.php/common/notifications/ack?_token=z3FsxlNPSW-zyItz3adnYSB1w_XLpsC874lgmv7STlc';
    var tab_modules_list";
        // line 41
        echo " = '';
    var update_success_msg = 'Mise à jour réussie';
    var search_product_msg = 'Rechercher un produit';
  </script>



<link
      rel=\"preload\"
      href=\"/prestashop/admin5/themes/new-theme/public/2d8017489da689caedc1.preload..woff2\"
      as=\"font\"
      crossorigin
    >
      <link href=\"/prestashop/admin5/themes/new-theme/public/create_product_default_theme.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/prestashop/admin5/themes/new-theme/public/theme.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"https://unpkg.com/@prestashopcorp/edition-reskin/dist/back.min.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/prestashop/js/jquery/plugins/chosen/jquery.chosen.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/prestashop/js/jquery/plugins/fancybox/jquery.fancybox.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/prestashop/modules/blockwishlist/public/backoffice.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/prestashop/admin5/themes/default/css/vendor/nv.d3.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/modules/klaviyopsautomation/dist/css/klaviyops-admin-global.f8a9f5f9.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/prestashop/modules/ps_mbo/views/css/hide-toolbar.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/prestashop/modules/psxmarketingwithgoogle/views/css/admin/menu.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/prestashop/modules/ps_facebook/views/css/admin/menu.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/prestashop/modules/psxdesign/views/css/admin/dashboard-notification.css\" rel=\"stylesheet\" type=\"text/css\"/>
  
  <script type=\"text/javascript\">
var baseAdminDir = \"\\/prestashop\\/admin5\\/\";
var baseDir = \"\\/prestashop\\/\";
var changeFormLanguageUrl = \"\\/prestashop\\/admin5\\/index.php\\/configure\\/advanced\\/employees\\/change-form-language?_token=z3FsxlNPSW-zyItz3adnYSB1w_XLpsC874lgmv7STlc\";
var contextPsAccounts = {\"currentCo";
        // line 71
        echo "ntext\":{\"type\":1,\"id\":1},\"psxName\":\"ps_mbo\",\"psIs17\":true,\"psAccountsVersion\":\"7.0.3\",\"psAccountsIsInstalled\":true,\"psAccountsInstallLink\":null,\"psAccountsIsEnabled\":true,\"psAccountsEnableLink\":\"http:\\/\\/localhost\\/prestashop\\/admin5\\/index.php\\/improve\\/modules\\/manage\\/action\\/enable\\/ps_accounts?_token=z3FsxlNPSW-zyItz3adnYSB1w_XLpsC874lgmv7STlc\",\"psAccountsIsUptodate\":true,\"psAccountsUpdateLink\":null,\"user\":{\"uuid\":null,\"email\":null,\"emailIsValidated\":false,\"isSuperAdmin\":true},\"backendUser\":{\"email\":\"florentketope@gmail.com\",\"employeeId\":1,\"isSuperAdmin\":true},\"currentShop\":{\"id\":\"1\",\"name\":\"Akimmakako\",\"domain\":\"localhost\",\"domainSsl\":\"localhost\",\"physicalUri\":\"\\/prestashop\\/\",\"virtualUri\":\"\",\"frontUrl\":\"https:\\/\\/localhost\\/prestashop\\/\",\"uuid\":null,\"publicKey\":\"-----BEGIN RSA PUBLIC KEY-----\\r\\nMIGJAoGBAOdPvRytqHpMCBhCaV+BlDxwfwr67JwFxAIui3WqoOGQCID2JOkIb\\/5i\\r\\nVPpUJTGEmwIxdhIqKDkbz2ZigYXfaFPIJiFzsgS3+5zNDUw0CT69JNhdXNQBey79\\r\\nnW2eSEt\\/EROAyA4wMCNWANWyvaDx1IbqN+pPwmsVsRkMpYfKrgPhAgMBAAE=\\r\\n-----END RSA PUBLIC KEY-----\",\"employeeId\":null,\"user\":{\"email\":null,\"emailIsValidated\":false,\"uuid\":null},\"url\":\"http:\\/\\/localhost\\/prestashop\\/admin5\\/index.php?controller=AdminModules&configure=ps_mbo&setShopContext=s-1&token=5d6811526a99347308d6454d121240c6\",\"isLinkedV4\":false,\"unlinkedAuto\":false,\"multishop\":false,\"moduleName\":\"ps_mbo\",\"psVersion\":\"8.1.0\"},\"isShopContext\":true,\"superAdminEmail\":\"florentketope@gmail.com\",\"onboardingLink\":\"https:\\/\\/accounts.distribution.prestashop.net?shops=W3siaWQiOiIxIiwibmFtZSI6IkFraW1tYWtha28iLCJkb21haW4iOiJsb2NhbGhvc3QiLCJkb21haW5Tc2wiOiJsb2NhbGhvc3QiLCJwaHlzaWNhbFVyaSI6IlwvcHJlc3Rhc2hvcFwvIiwidmlydHVhbFVyaSI6IiIsImZyb250VXJsIjoiaHR0cHM6XC9cL2xvY2FsaG9zdFwvcHJlc3Rhc2hvcFwvIiwidXVpZCI6bnVsbCwicHVibGljS2V5IjoiLS0tLS1CRUdJTiBSU0EgUFVCTElDIEtFWS0tLS0tXHJcbk1JR0pBb0dCQU9kUHZSeXRxSHBNQ0JoQ2FWK0JsRHh3ZndyNjdKd0Z4QUl1aTNXcW9PR1FDSUQySk9rSWJcLzVpXHJcblZQcFVKVEdFbXdJeGRoSXFLRGtiejJaaWdZWGZhRlBJSmlGenNnUzMrNXpORFV3MENUNjlKTmhkWE5RQmV5Nzl";
        echo "cclxublcyZVNFdFwvRVJPQXlBNHdNQ05XQU5XeXZhRHgxSWJxTitwUHdtc1ZzUmtNcFlmS3JnUGhBZ01CQUFFPVxyXG4tLS0tLUVORCBSU0EgUFVCTElDIEtFWS0tLS0tIiwiZW1wbG95ZWVJZCI6IjEiLCJ1c2VyIjp7ImVtYWlsIjpudWxsLCJlbWFpbElzVmFsaWRhdGVkIjpmYWxzZSwidXVpZCI6bnVsbH0sInVybCI6Imh0dHA6XC9cL2xvY2FsaG9zdFwvcHJlc3Rhc2hvcFwvYWRtaW41XC9pbmRleC5waHA\\/Y29udHJvbGxlcj1BZG1pbk1vZHVsZXMmY29uZmlndXJlPXBzX21ibyZzZXRTaG9wQ29udGV4dD1zLTEmdG9rZW49NWQ2ODExNTI2YTk5MzQ3MzA4ZDY0NTRkMTIxMjQwYzYiLCJpc0xpbmtlZFY0IjpmYWxzZSwidW5saW5rZWRBdXRvIjpmYWxzZSwibXVsdGlzaG9wIjpmYWxzZSwibW9kdWxlTmFtZSI6InBzX21ibyIsInBzVmVyc2lvbiI6IjguMS4wIn1d\",\"ssoResendVerificationEmail\":\"https:\\/\\/auth.prestashop.com\\/account\\/send-verification-email\",\"manageAccountLink\":\"https:\\/\\/auth.prestashop.com\\/login?lang=fr\",\"isOnboardedV4\":false,\"shops\":[{\"id\":\"1\",\"name\":\"Default\",\"shops\":[{\"id\":\"1\",\"name\":\"Akimmakako\",\"domain\":\"localhost\",\"domainSsl\":\"localhost\",\"physicalUri\":\"\\/prestashop\\/\",\"virtualUri\":\"\",\"frontUrl\":\"https:\\/\\/localhost\\/prestashop\\/\",\"uuid\":null,\"publicKey\":\"-----BEGIN RSA PUBLIC KEY-----\\r\\nMIGJAoGBAOdPvRytqHpMCBhCaV+BlDxwfwr67JwFxAIui3WqoOGQCID2JOkIb\\/5i\\r\\nVPpUJTGEmwIxdhIqKDkbz2ZigYXfaFPIJiFzsgS3+5zNDUw0CT69JNhdXNQBey79\\r\\nnW2eSEt\\/EROAyA4wMCNWANWyvaDx1IbqN+pPwmsVsRkMpYfKrgPhAgMBAAE=\\r\\n-----END RSA PUBLIC KEY-----\",\"employeeId\":null,\"user\":{\"email\":null,\"emailIsValidated\":false,\"uuid\":null},\"url\":\"http:\\/\\/localhost\\/prestashop\\/admin5\\/index.php?controller=AdminModules&configure=ps_mbo&setShopContext=s-1&token=5d6811526a99347308d6454d121240c6\",\"isLinkedV4\":false,\"unlinkedAuto\":false,\"multishop\":false,\"moduleName\":\"ps_mbo\",\"psVersion\":\"8.1.0\",\"moduleVersion\":\"7.0.3\"}],\"multishop\":false,\"moduleName\":\"ps_mbo\",\"psVersion\":\"8.1.0\"}],\"adminAjaxLink\":\"http:\\/\\/localhost\\/prestashop\\/admin5\\/index.php?controller=AdminAjaxPsAccounts&ajax=1&token=624e89c8e7a37152678b5c9f50431e7f\",\"accountsUiUrl\":\"https:\\/\\/accounts.distribution.prestashop.net\",\"dependencies\":{\"ps_eventbus\":{\"isInstalled\":true,\"installLink\":\"http:\\/\\/localhost\\/prestashop\\/ad";
        echo "min5\\/index.php\\/improve\\/modules\\/manage\\/action\\/install\\/ps_eventbus?_token=z3FsxlNPSW-zyItz3adnYSB1w_XLpsC874lgmv7STlc\",\"isEnabled\":true,\"enableLink\":\"http:\\/\\/localhost\\/prestashop\\/admin5\\/index.php\\/improve\\/modules\\/manage\\/action\\/enable\\/ps_eventbus?_token=z3FsxlNPSW-zyItz3adnYSB1w_XLpsC874lgmv7STlc\"}}};
var currency = {\"iso_code\":\"EUR\",\"sign\":\"CFA\",\"name\":\"Franc CFA (BCEAO)\",\"format\":null};
var currency_specifications = {\"symbol\":[\",\",\"\\u202f\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"currencyCode\":\"EUR\",\"currencySymbol\":\"CFA\",\"numberSymbols\":[\",\",\"\\u202f\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"positivePattern\":\"#,##0.00\\u00a0\\u00a4\",\"negativePattern\":\"-#,##0.00\\u00a0\\u00a4\",\"maxFractionDigits\":2,\"minFractionDigits\":2,\"groupingUsed\":true,\"primaryGroupSize\":3,\"secondaryGroupSize\":3};
var number_specifications = {\"symbol\":[\",\",\"\\u202f\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"numberSymbols\":[\",\",\"\\u202f\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"positivePattern\":\"#,##0.###\",\"negativePattern\":\"-#,##0.###\",\"maxFractionDigits\":3,\"minFractionDigits\":0,\"groupingUsed\":true,\"primaryGroupSize\":3,\"secondaryGroupSize\":3};
var prestashop = {\"debug\":false};
var psxDesignUpdateNotification = \"\\n<div class=\\\"psxdesign-notification\\\">\\n  1\\n<\\/div>\\n\";
var show_new_customers = \"1\";
var show_new_messages = \"1\";
var show_new_orders = \"1\";
</script>
<script type=\"text/javascript\" src=\"/prestashop/modules/ps_edition_basic/views/js/favicon.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop/admin5/themes/new-theme/public/main.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop/js/jquery/plugins/jquery.chosen.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop/js/jquery/plugins/fancybox/jquery.fancybox.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop/js/admin.js?v=8.1.0\"></script>
<script type=\"text/javascript\" src=\"/prestashop/admin5/themes/new-theme/public/cldr.bundle.js\"";
        // line 86
        echo "></script>
<script type=\"text/javascript\" src=\"/prestashop/js/tools.js?v=8.1.0\"></script>
<script type=\"text/javascript\" src=\"/prestashop/admin5/themes/new-theme/public/create_product.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop/modules/blockwishlist/public/vendors.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop/modules/ps_emailalerts/js/admin/ps_emailalerts.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop/modules/gamification/views/js/gamification_bt.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop/js/vendor/d3.v3.min.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop/admin5/themes/default/js/vendor/nv.d3.min.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop/modules/ps_mbo/views/js/upload_module_with_cdc.js?v=4.11.3\"></script>
<script type=\"text/javascript\" src=\"/prestashop/modules/ps_mbo/views/js/recommended-modules.js?v=4.11.3\"></script>
<script type=\"text/javascript\" src=\"/prestashop/modules/ps_faviconnotificationbo/views/js/favico.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop/modules/ps_faviconnotificationbo/views/js/ps_faviconnotificationbo.js\"></script>

  <script>
            var admin_gamification_ajax_url = \"http:\\/\\/localhost\\/prestashop\\/admin5\\/index.php?controller=AdminGamification&token=d563691ec36ea8705b0a41845e6ddce7\";
            var current_id_tab = 167;
        </script><script>
  if (undefined !== ps_faviconnotificationbo) {
    ps_faviconnotificationbo.initialize({
      backgroundColor: '#DF0067',
      textColor: '#FFFFFF',
      notificationGetUrl: '/prestashop/admin5/index.php/common/notifications?_token=z3FsxlNPSW-zyItz3adnYSB1w_XLpsC874lgmv7STlc',
      CHECKBOX_ORDER: 1,
      CHECKBOX_CUSTOMER: 1,
      CHECKBOX_MESSAGE: 1,
      timer: 120000, // Refresh every 2 minutes
    });
  }
</script>
    <script>
        window.userLocale  = 'fr';
        window.userflow_id = 'ct_55jfryadgneorc45cjqxpbf6o4';
    </script>
    <script type=\"mod";
        // line 119
        echo "ule\" src=\"https://unpkg.com/@prestashopcorp/smb-edition-homepage/dist/assets/index.js\"></script><script type=\"module\" src=\"/prestashop/modules/psxdesign/views/js/upgrade-notification.js\"></script>


";
        // line 122
        $this->displayBlock('stylesheets', $context, $blocks);
        $this->displayBlock('extra_stylesheets', $context, $blocks);
        echo "</head>";
        echo "

<body
  class=\"lang-fr adminpsmbomodule\"
  data-base-url=\"/prestashop/admin5/index.php\"  data-token=\"z3FsxlNPSW-zyItz3adnYSB1w_XLpsC874lgmv7STlc\">

  <header id=\"header\" class=\"d-print-none\">

    <nav id=\"header_infos\" class=\"main-header\">
      <button class=\"btn btn-primary-reverse onclick btn-lg unbind ajax-spinner\"></button>

            <i class=\"material-icons js-mobile-menu\">menu</i>
      <a id=\"header_logo\" class=\"logo float-left\" href=\"/prestashop/admin5/index.php/modules/pseditionbasic/homepage?_token=z3FsxlNPSW-zyItz3adnYSB1w_XLpsC874lgmv7STlc\"></a>
      <span id=\"shop_version\">8.1.0</span>

      <div class=\"component\" id=\"quick-access-container\">
        <div class=\"dropdown quick-accesses\">
  <button class=\"btn btn-link btn-sm dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" id=\"quick_select\">
    Accès rapide
  </button>
  <div class=\"dropdown-menu\">
          <a class=\"dropdown-item quick-row-link \"
         href=\"http://localhost/prestashop/admin5/index.php/sell/orders?token=400e3a136394b0637f513d99808f2cce\"
                 data-item=\"Commandes\"
      >Commandes</a>
          <a class=\"dropdown-item quick-row-link \"
         href=\"http://localhost/prestashop/admin5/index.php?controller=AdminStats&amp;module=statscheckup&amp;token=c8100914ba0032625f3cbd48819d40b7\"
                 data-item=\"Évaluation du catalogue\"
      >Évaluation du catalogue</a>
          <a class=\"dropdown-item quick-row-link \"
         href=\"http://localhost/prestashop/admin5/index.php/improve/modules/manage?token=400e3a136394b0637f513d99808f2cce\"
                 data-item=\"Modules installés\"
      >Modules installés</a>
          <a class=\"dropdown-item quick-row-link \"
         href=\"http://localhost/prestashop/admin5/index.php?controller=AdminCartRules&amp;addcart_rule&amp;token=023f17c23ac69aac99a5824d9b2bba14\"
                 data-item=\"Nouveau bon de réduction\"
      >Nouveau bon de réduction</a>
          <a";
        // line 159
        echo " class=\"dropdown-item quick-row-link new-product-button\"
         href=\"http://localhost/prestashop/admin5/index.php/sell/catalog/products-v2/create?token=400e3a136394b0637f513d99808f2cce\"
                 data-item=\"Nouveau produit\"
      >Nouveau produit</a>
          <a class=\"dropdown-item quick-row-link \"
         href=\"http://localhost/prestashop/admin5/index.php/sell/catalog/categories/new?token=400e3a136394b0637f513d99808f2cce\"
                 data-item=\"Nouvelle catégorie\"
      >Nouvelle catégorie</a>
        <div class=\"dropdown-divider\"></div>
          <a id=\"quick-add-link\"
        class=\"dropdown-item js-quick-link\"
        href=\"#\"
        data-rand=\"77\"
        data-icon=\"icon-AdminPsMboModuleParent\"
        data-method=\"add\"
        data-url=\"index.php/modules/mbo/modules/catalog/?-zyItz3adnYSB1w_XLpsC874lgmv7STlc\"
        data-post-link=\"http://localhost/prestashop/admin5/index.php?controller=AdminQuickAccesses&token=95ce1edc2a8bd85cce4dd8050583919e\"
        data-prompt-text=\"Veuillez nommer ce raccourci :\"
        data-link=\"Marketplace - Liste\"
      >
        <i class=\"material-icons\">add_circle</i>
        Ajouter la page actuelle à l'accès rapide
      </a>
        <a id=\"quick-manage-link\" class=\"dropdown-item\" href=\"http://localhost/prestashop/admin5/index.php?controller=AdminQuickAccesses&token=95ce1edc2a8bd85cce4dd8050583919e\">
      <i class=\"material-icons\">settings</i>
      Gérez vos accès rapides
    </a>
  </div>
</div>
      </div>
      <div class=\"component component-search\" id=\"header-search-container\">
        <div class=\"component-search-body\">
          <div class=\"component-search-top\">
            <form id=\"header_search\"
      class=\"bo_search_form dropdown-form js-dropdown-form collapsed\"
      method=\"post\"
      action=\"/prestashop/admin5/index.php?controller=AdminSearch&amp;token=8909cc465f49ab79a5c7183e7e2a2caf\"
      role=\"search\">
  <input type=\"hidden\" name=\"bo_search_type\" id=\"bo_search_type\" class=\"js-sear";
        // line 197
        echo "ch-type\" />
    <div class=\"input-group\">
    <input type=\"text\" class=\"form-control js-form-search\" id=\"bo_query\" name=\"bo_query\" value=\"\" placeholder=\"Rechercher (ex. : référence produit, nom du client, etc.)\" aria-label=\"Barre de recherche\">
    <div class=\"input-group-append\">
      <button type=\"button\" class=\"btn btn-outline-secondary dropdown-toggle js-dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
        Partout
      </button>
      <div class=\"dropdown-menu js-items-list\">
        <a class=\"dropdown-item\" data-item=\"Partout\" href=\"#\" data-value=\"0\" data-placeholder=\"Que souhaitez-vous trouver ?\" data-icon=\"icon-search\"><i class=\"material-icons\">search</i> Partout</a>
        <div class=\"dropdown-divider\"></div>
        <a class=\"dropdown-item\" data-item=\"Catalogue\" href=\"#\" data-value=\"1\" data-placeholder=\"Nom du produit, référence, etc.\" data-icon=\"icon-book\"><i class=\"material-icons\">store_mall_directory</i> Catalogue</a>
        <a class=\"dropdown-item\" data-item=\"Clients par nom\" href=\"#\" data-value=\"2\" data-placeholder=\"Nom\" data-icon=\"icon-group\"><i class=\"material-icons\">group</i> Clients par nom</a>
        <a class=\"dropdown-item\" data-item=\"Clients par adresse IP\" href=\"#\" data-value=\"6\" data-placeholder=\"123.45.67.89\" data-icon=\"icon-desktop\"><i class=\"material-icons\">desktop_mac</i> Clients par adresse IP</a>
        <a class=\"dropdown-item\" data-item=\"Commandes\" href=\"#\" data-value=\"3\" data-placeholder=\"ID commande\" data-icon=\"icon-credit-card\"><i class=\"material-icons\">shopping_basket</i> Commandes</a>
        <a class=\"dropdown-item\" data-item=\"Factures\" href=\"#\" data-value=\"4\" data-placeholder=\"Numéro de facture\" data-icon=\"icon-book\"><i class=\"material-icons\">book</i> Factures</a>
        <a class=\"dropdown-item\" data-item=\"Paniers\" href=\"#\" data-value=\"5\" data-placeholder=\"ID panier\" data-icon=\"icon-shopping-cart\"><i class=\"material-icons\">shopping_cart</i> Paniers</a>
        <a class=\"dropdown-";
        // line 213
        echo "item\" data-item=\"Modules\" href=\"#\" data-value=\"7\" data-placeholder=\"Nom du module\" data-icon=\"icon-puzzle-piece\"><i class=\"material-icons\">extension</i> Modules</a>
      </div>
      <button class=\"btn btn-primary\" type=\"submit\"><span class=\"d-none\">RECHERCHE</span><i class=\"material-icons\">search</i></button>
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
            <button class=\"component-search-cancel d-none\">Annuler</button>
          </div>

          <div class=\"component-search-quickaccess d-none\">
  <p class=\"component-search-title\">Accès rapide</p>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://localhost/prestashop/admin5/index.php/sell/orders?token=400e3a136394b0637f513d99808f2cce\"
             data-item=\"Commandes\"
    >Commandes</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://localhost/prestashop/admin5/index.php?controller=AdminStats&amp;module=statscheckup&amp;token=c8100914ba0032625f3cbd48819d40b7\"
             data-item=\"Évaluation du catalogue\"
    >Évaluation du catalogue</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://localhost/prestashop/admin5/index.php/improve/modules/manage?token=400e3a136394b0637f513d99808f2cce\"
             data-item=\"Modules installés\"
    >Modules installés</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://localhost/prestashop/admin5/index.php?controller=AdminCartRules&amp;addcart_rule&amp;token=023f17c23ac69aac99a5824d9b2bba14\"
             data-item=\"Nouveau bon de réduction\"
    >Nouveau bon de réduction</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://localhost/prestashop/admin5/index.php/sell/catalog/products-v2/create?token=400e3a136394b0637f513d99808f2cce\"
             data-item=\"Nouveau produit\"
    >Nouveau produit</a>
      <a class=\"dropdo";
        // line 252
        echo "wn-item quick-row-link\"
       href=\"http://localhost/prestashop/admin5/index.php/sell/catalog/categories/new?token=400e3a136394b0637f513d99808f2cce\"
             data-item=\"Nouvelle catégorie\"
    >Nouvelle catégorie</a>
    <div class=\"dropdown-divider\"></div>
      <a id=\"quick-add-link\"
      class=\"dropdown-item js-quick-link\"
      href=\"#\"
      data-rand=\"113\"
      data-icon=\"icon-AdminPsMboModuleParent\"
      data-method=\"add\"
      data-url=\"index.php/modules/mbo/modules/catalog/?-zyItz3adnYSB1w_XLpsC874lgmv7STlc\"
      data-post-link=\"http://localhost/prestashop/admin5/index.php?controller=AdminQuickAccesses&token=95ce1edc2a8bd85cce4dd8050583919e\"
      data-prompt-text=\"Veuillez nommer ce raccourci :\"
      data-link=\"Marketplace - Liste\"
    >
      <i class=\"material-icons\">add_circle</i>
      Ajouter la page actuelle à l'accès rapide
    </a>
    <a id=\"quick-manage-link\" class=\"dropdown-item\" href=\"http://localhost/prestashop/admin5/index.php?controller=AdminQuickAccesses&token=95ce1edc2a8bd85cce4dd8050583919e\">
    <i class=\"material-icons\">settings</i>
    Gérez vos accès rapides
  </a>
</div>
        </div>

        <div class=\"component-search-background d-none\"></div>
      </div>

      
                      <div class=\"component hide-mobile-sm\" id=\"header-maintenance-mode-container\">
          <a class=\"link shop-state\"
             id=\"maintenance-mode\"
             data-toggle=\"pstooltip\"
             data-placement=\"bottom\"
             data-html=\"true\"
             title=\"          &lt;p class=&quot;text-left text-nowrap&quot;&gt;
            &lt;strong&gt;Votre boutique est en mode maintenance.&lt;/strong&gt;
          &lt;/p&gt;
          &lt;p class=&quot;text-left&quot;&gt;
              Vos visiteurs et clients ne peuvent pas accéder à votre boutique lorsque le mode maintenance est activé.
          &lt;/p&gt;
          &lt;p class=&quot;text-left&quot;&gt;
              Pour gérer les paramètres de maintenance, rendez-v";
        // line 295
        echo "ous sur la page Paramètres de la boutique &amp;gt; Paramètres généraux &amp;gt; Maintenance.
          &lt;/p&gt;
                      &lt;p class=&quot;text-left&quot;&gt;
              Les administrateurs peuvent accéder au front-office de la boutique sans que leur adresse IP ne soit enregistrée.
            &lt;/p&gt;
                  \"
             href=\"/prestashop/admin5/index.php/configure/shop/maintenance/?_token=z3FsxlNPSW-zyItz3adnYSB1w_XLpsC874lgmv7STlc\"
          >
            <i class=\"material-icons\"
              style=\"color: var(--green);\"
            >build</i>
            <span>Mode maintenance</span>
          </a>
        </div>
      
      <div class=\"header-right\">
                  <div class=\"component\" id=\"header-shop-list-container\">
              <div class=\"shop-list\">
    <a class=\"link\" id=\"header_shopname\" href=\"http://localhost/prestashop/\" target= \"_blank\">
      <i class=\"material-icons\">visibility</i>
      <span>Voir ma boutique</span>
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
              Commandes<span id=\"_nb_new_orders_\"></span>
            </a>
          </li>
                                    <li ";
        // line 340
        echo "class=\"nav-item\">
            <a
              class=\"nav-link \"
              id=\"customers-tab\"
              data-toggle=\"tab\"
              data-type=\"customer\"
              href=\"#customers-notifications\"
              role=\"tab\"
            >
              Clients<span id=\"_nb_new_customers_\"></span>
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
              Messages<span id=\"_nb_new_messages_\"></span>
            </a>
          </li>
                        </ul>

      <!-- Tab panes -->
      <div class=\"tab-content\">
                          <div class=\"tab-pane active empty\" id=\"orders-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              Pas de nouvelle commande pour le moment :(<br>
              Avez-vous consulté vos <strong><a href=\"http://localhost/prestashop/admin5/index.php?controller=AdminCarts&action=filterOnlyAbandonedCarts&token=47106300f78005a1360db5fa0977e8c1\">paniers abandonnés</a></strong> ?<br> Votre prochaine commande s'y trouve peut-être !
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"customers-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              Aucun nouveau client pour l'instant :(<br>
              Êtes-vous actifs sur les réseaux sociaux en ce moment ?
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"messages-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              Pas de nouveau message pour l'instant.<br>
              On dirait que vos ";
        // line 385
        echo "clients sont satisfaits :)
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
      #_id_customer_ - <strong>_customer_name_</strong>_company_ - enregistré le <strong>_date_add_</strong>
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
      <div class=\"employee-top\">
        <span class=\"employee-avatar\"><img class=\"avatar rounded-circle\" src=\"http://localhost/prestashop/img/pr/default.jpg\" alt=\"Effoe\" /></span>
        <span class=\"employee_profile\">Ravi de vous revoir Effoe</span>
      </div>

      <a class=\"dropdown-item employee-link profile-link\" href=\"/prestashop/admin5/index.php/configure/advanced/employees/1/edit?_token=z3FsxlNPSW-zyItz3adnYSB1w_XLpsC874lgmv7STlc\">
      <i class=\"material-icons\">edit</i>
      <span>Votre profil</span>
    </a>
    </div>

    <p class=\"divider\"></p>

                  <a class=\"dropdo";
        // line 438
        echo "wn-item \" href=\"https://accounts.distribution.prestashop.net?utm_source=localhost&utm_medium=back-office&utm_campaign=ps_accounts&utm_content=headeremployeedropdownlink\" target=\"_blank\" rel=\"noopener noreferrer nofollow\">
            <i class=\"material-icons\">open_in_new</i> Gérer votre compte PrestaShop
        </a>
                  <p class=\"divider\"></p>
            
    <a class=\"dropdown-item employee-link text-center\" id=\"header_logout\" href=\"http://localhost/prestashop/admin5/index.php?controller=AdminLogin&amp;logout=1&amp;token=267080c3bef6bf10031f56f10fef81bc\">
      <i class=\"material-icons d-lg-none\">power_settings_new</i>
      <span>Déconnexion</span>
    </a>
  </div>
</div>
        </div>
              </div>
    </nav>
  </header>

  <nav class=\"nav-bar d-none d-print-none d-md-block\">
  <span class=\"menu-collapse\" data-toggle-url=\"/prestashop/admin5/index.php/configure/advanced/employees/toggle-navigation?_token=z3FsxlNPSW-zyItz3adnYSB1w_XLpsC874lgmv7STlc\">
    <i class=\"material-icons rtl-flip\">chevron_left</i>
    <i class=\"material-icons rtl-flip\">chevron_left</i>
  </span>

  <div class=\"nav-bar-overflow\">
      <div class=\"logo-container\">
          <a id=\"header_logo\" class=\"logo float-left\" href=\"/prestashop/admin5/index.php/modules/pseditionbasic/homepage?_token=z3FsxlNPSW-zyItz3adnYSB1w_XLpsC874lgmv7STlc\"></a>
          <span id=\"shop_version\" class=\"header-version\">8.1.0</span>
      </div>

      <ul class=\"main-menu\">
              
                                          
                    
          
            <li class=\"category-title\" data-submenu=\"134\" id=\"tab-HOME\">
                <span class=\"title\">Bienvenue</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone\" data-submenu=\"135\" id=\"subtab-AdminPsEditionBasicHomepageController\">
                    <a href=\"/prestashop/admin5/inde";
        // line 480
        echo "x.php/modules/pseditionbasic/homepage?_token=z3FsxlNPSW-zyItz3adnYSB1w_XLpsC874lgmv7STlc\" class=\"link\">
                      <i class=\"material-icons mi-home\">home</i>
                      <span>
                      Accueil
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone\" data-submenu=\"1\" id=\"subtab-AdminDashboard\">
                    <a href=\"http://localhost/prestashop/admin5/index.php?controller=AdminDashboard&amp;token=c4f984e0b6799da0b15d2156c83f130c\" class=\"link\">
                      <i class=\"material-icons mi-trending_up\">trending_up</i>
                      <span>
                      Tableau de bord
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                        </li>
                              
          
                      
                                          
                    
          
            <li class=\"category-title\" data-submenu=\"2\" id=\"tab-SELL\">
                <span class=\"title\">Vendre</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"3\" id=\"subtab-AdminPa";
        // line 519
        echo "rentOrders\">
                    <a href=\"/prestashop/admin5/index.php/sell/orders/?_token=z3FsxlNPSW-zyItz3adnYSB1w_XLpsC874lgmv7STlc\" class=\"link\">
                      <i class=\"material-icons mi-shopping_basket\">shopping_basket</i>
                      <span>
                      Commandes
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-3\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"4\" id=\"subtab-AdminOrders\">
                                <a href=\"/prestashop/admin5/index.php/sell/orders/?_token=z3FsxlNPSW-zyItz3adnYSB1w_XLpsC874lgmv7STlc\" class=\"link\"> Commandes
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"5\" id=\"subtab-AdminInvoices\">
                                <a href=\"/prestashop/admin5/index.php/sell/orders/invoices/?_token=z3FsxlNPSW-zyItz3adnYSB1w_XLpsC874lgmv7STlc\" class=\"link\"> Factures
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"6\" id=\"subtab-AdminSlip\">
             ";
        // line 550
        echo "                   <a href=\"/prestashop/admin5/index.php/sell/orders/credit-slips/?_token=z3FsxlNPSW-zyItz3adnYSB1w_XLpsC874lgmv7STlc\" class=\"link\"> Avoirs
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"7\" id=\"subtab-AdminDeliverySlip\">
                                <a href=\"/prestashop/admin5/index.php/sell/orders/delivery-slips/?_token=z3FsxlNPSW-zyItz3adnYSB1w_XLpsC874lgmv7STlc\" class=\"link\"> Bons de livraison
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"8\" id=\"subtab-AdminCarts\">
                                <a href=\"http://localhost/prestashop/admin5/index.php?controller=AdminCarts&amp;token=47106300f78005a1360db5fa0977e8c1\" class=\"link\"> Paniers
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"9\" id=\"subtab-AdminCatalog\">
                    <a href=\"/prestashop/admin5/index.php/sell/catalog/products?_token=z3FsxlNPSW-zyItz3adnYSB1w_XLpsC874lgmv7STlc\" class=\"link\">
                      <i class=\"material-icons mi-store\">store</i>
                      <span>
                      Catalogue
                      </span>
                                          ";
        // line 582
        echo "          <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-9\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"10\" id=\"subtab-AdminProducts\">
                                <a href=\"/prestashop/admin5/index.php/sell/catalog/products?_token=z3FsxlNPSW-zyItz3adnYSB1w_XLpsC874lgmv7STlc\" class=\"link\"> Produits
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"11\" id=\"subtab-AdminCategories\">
                                <a href=\"/prestashop/admin5/index.php/sell/catalog/categories?_token=z3FsxlNPSW-zyItz3adnYSB1w_XLpsC874lgmv7STlc\" class=\"link\"> Catégories
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"12\" id=\"subtab-AdminTracking\">
                                <a href=\"/prestashop/admin5/index.php/sell/catalog/monitoring/?_token=z3FsxlNPSW-zyItz3adnYSB1w_XLpsC874lgmv7STlc\" class=\"link\"> Suivi
                                </a>
                              </li>

                                                                                  
                              
    ";
        // line 613
        echo "                                                        
                              <li class=\"link-leveltwo\" data-submenu=\"13\" id=\"subtab-AdminParentAttributesGroups\">
                                <a href=\"http://localhost/prestashop/admin5/index.php?controller=AdminAttributesGroups&amp;token=d267b20955faffa958dfd2819d0ee54e\" class=\"link\"> Attributs &amp; caractéristiques
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"16\" id=\"subtab-AdminParentManufacturers\">
                                <a href=\"/prestashop/admin5/index.php/sell/catalog/brands/?_token=z3FsxlNPSW-zyItz3adnYSB1w_XLpsC874lgmv7STlc\" class=\"link\"> Marques et fournisseurs
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"19\" id=\"subtab-AdminAttachments\">
                                <a href=\"/prestashop/admin5/index.php/sell/attachments/?_token=z3FsxlNPSW-zyItz3adnYSB1w_XLpsC874lgmv7STlc\" class=\"link\"> Fichiers
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"20\" id=\"subtab-AdminParentCartRules\">
                                <a href=\"http://localhost/prestashop/admin5/index.php?controller=AdminCartRules&amp;token=023f17c23ac69aac99a5824d9b2bba14\" class=\"link\"> Réductions
                    ";
        // line 640
        echo "            </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"23\" id=\"subtab-AdminStockManagement\">
                                <a href=\"/prestashop/admin5/index.php/sell/stocks/?_token=z3FsxlNPSW-zyItz3adnYSB1w_XLpsC874lgmv7STlc\" class=\"link\"> Stock
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"24\" id=\"subtab-AdminParentCustomer\">
                    <a href=\"/prestashop/admin5/index.php/sell/customers/?_token=z3FsxlNPSW-zyItz3adnYSB1w_XLpsC874lgmv7STlc\" class=\"link\">
                      <i class=\"material-icons mi-account_circle\">account_circle</i>
                      <span>
                      Clients
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-24\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"25\" id=\"subtab-AdminCustomers\">
                                <a href=\"/prestashop/admin5/index.php/sell/customers/?_token=z3Fsxl";
        // line 672
        echo "NPSW-zyItz3adnYSB1w_XLpsC874lgmv7STlc\" class=\"link\"> Clients
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"26\" id=\"subtab-AdminAddresses\">
                                <a href=\"/prestashop/admin5/index.php/sell/addresses/?_token=z3FsxlNPSW-zyItz3adnYSB1w_XLpsC874lgmv7STlc\" class=\"link\"> Adresses
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"27\" id=\"subtab-AdminOutstanding\">
                                <a href=\"/prestashop/admin5/index.php/sell/outstanding/?_token=z3FsxlNPSW-zyItz3adnYSB1w_XLpsC874lgmv7STlc\" class=\"link\"> Encours autorisés
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"28\" id=\"subtab-AdminParentCustomerThreads\">
                    <a href=\"http://localhost/prestashop/admin5/index.php?controller=AdminCustomerThreads&amp;token=0b3d40c43a62dd45a4c23845933121f9\" class=\"link\">
                      <i class=\"material-icons mi-chat\">chat</i>
                      <span>
                      SAV
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                   ";
        // line 705
        echo "                                 keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-28\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"29\" id=\"subtab-AdminCustomerThreads\">
                                <a href=\"http://localhost/prestashop/admin5/index.php?controller=AdminCustomerThreads&amp;token=0b3d40c43a62dd45a4c23845933121f9\" class=\"link\"> SAV
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"30\" id=\"subtab-AdminOrderMessage\">
                                <a href=\"/prestashop/admin5/index.php/sell/customer-service/order-messages/?_token=z3FsxlNPSW-zyItz3adnYSB1w_XLpsC874lgmv7STlc\" class=\"link\"> Messages prédéfinis
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"31\" id=\"subtab-AdminReturn\">
                                <a href=\"http://localhost/prestashop/admin5/index.php?controller=AdminReturn&amp;token=799ee1d4a3017073013bf088038f17ea\" class=\"link\"> Retours produits
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
             ";
        // line 735
        echo "                                 
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"32\" id=\"subtab-AdminStats\">
                    <a href=\"/prestashop/admin5/index.php/modules/metrics/legacy/stats?_token=z3FsxlNPSW-zyItz3adnYSB1w_XLpsC874lgmv7STlc\" class=\"link\">
                      <i class=\"material-icons mi-assessment\">assessment</i>
                      <span>
                      Statistiques
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-32\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"155\" id=\"subtab-AdminMetricsLegacyStatsController\">
                                <a href=\"/prestashop/admin5/index.php/modules/metrics/legacy/stats?_token=z3FsxlNPSW-zyItz3adnYSB1w_XLpsC874lgmv7STlc\" class=\"link\"> Statistiques
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"156\" id=\"subtab-AdminMetricsController\">
                                <a href=\"/prestashop/admin5/index.php/modules/metrics?_token=z3FsxlNPSW-zyItz3adnYSB1w_XLpsC874lgmv7STlc\" class=\"link\"> PrestaShop Metrics
                                </a>
                              </li>

    ";
        // line 766
        echo "                                                                          </ul>
                                        </li>
                              
          
                      
                                          
                    
          
            <li class=\"category-title link-active\" data-submenu=\"37\" id=\"tab-IMPROVE\">
                <span class=\"title\">Personnaliser</span>
            </li>

                              
                  
                                                      
                                                          
                  <li class=\"link-levelone has_submenu link-active open ul-open\" data-submenu=\"38\" id=\"subtab-AdminParentModulesSf\">
                    <a href=\"/prestashop/admin5/index.php/modules/mbo/modules/catalog/?_token=z3FsxlNPSW-zyItz3adnYSB1w_XLpsC874lgmv7STlc\" class=\"link\">
                      <i class=\"material-icons mi-extension\">extension</i>
                      <span>
                      Modules
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_up
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-38\" class=\"submenu panel-collapse\">
                                                                                                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo link-active\" data-submenu=\"166\" id=\"subtab-AdminPsMboModuleParent\">
                                <a href=\"/prestashop/admin5/index.php/modules/mbo/modules/catalog/?_token=z3FsxlNPSW-zyItz3adnYSB1w_XLpsC874lgmv7STlc\" class=\"link\"> Marketplace
         ";
        // line 798
        echo "                       </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"39\" id=\"subtab-AdminModulesSf\">
                                <a href=\"/prestashop/admin5/index.php/improve/modules/manage?_token=z3FsxlNPSW-zyItz3adnYSB1w_XLpsC874lgmv7STlc\" class=\"link\"> Gestionnaire de modules 
                                </a>
                              </li>

                                                                                                                                    </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"43\" id=\"subtab-AdminParentThemes\">
                    <a href=\"/prestashop/admin5/index.php/modules/improve/design/themes?_token=z3FsxlNPSW-zyItz3adnYSB1w_XLpsC874lgmv7STlc\" class=\"link\">
                      <i class=\"material-icons mi-desktop_mac\">desktop_mac</i>
                      <span>
                      Apparence
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-43\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"157\" id=\"subtab-AdminPsxDesignParen";
        // line 829
        echo "tTab\">
                                <a href=\"/prestashop/admin5/index.php/modules/improve/design/themes?_token=z3FsxlNPSW-zyItz3adnYSB1w_XLpsC874lgmv7STlc\" class=\"link\"> Personnalisation
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"170\" id=\"subtab-AdminPsMboTheme\">
                                <a href=\"/prestashop/admin5/index.php/modules/mbo/themes/catalog/?_token=z3FsxlNPSW-zyItz3adnYSB1w_XLpsC874lgmv7STlc\" class=\"link\"> Themes Catalog
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"163\" id=\"subtab-AdminThemesParent\">
                                <a href=\"http://localhost/prestashop/admin5/index.php?controller=AdminPsThemeCustoConfiguration&amp;token=4a10b99103fd1ef87a70229818d7a7c8\" class=\"link\"> Modules du thème
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"45\" id=\"subtab-AdminParentMailTheme\">
                                <a href=\"/prestashop/admin5/index.php/improve/design/mail_theme/?_token=z3FsxlNPSW-zyItz3adnYSB1w_XLpsC874lgmv7STlc\" class=\"link\"> Thème d&#039;e-mail
                                </a>
                              </li>

                                                                                  
                     ";
        // line 859
        echo "         
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"47\" id=\"subtab-AdminCmsContent\">
                                <a href=\"/prestashop/admin5/index.php/improve/design/cms-pages/?_token=z3FsxlNPSW-zyItz3adnYSB1w_XLpsC874lgmv7STlc\" class=\"link\"> Pages
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"48\" id=\"subtab-AdminModulesPositions\">
                                <a href=\"/prestashop/admin5/index.php/improve/design/modules/positions/?_token=z3FsxlNPSW-zyItz3adnYSB1w_XLpsC874lgmv7STlc\" class=\"link\"> Positions
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"49\" id=\"subtab-AdminImages\">
                                <a href=\"http://localhost/prestashop/admin5/index.php?controller=AdminImages&amp;token=f5cdc8a276ffb7848a6f74fb0447c460\" class=\"link\"> Images
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"118\" id=\"subtab-AdminLinkWidget\">
                                <a href=\"/prestashop/admin5/index.php/modules/link-widget/list?_token=z3FsxlNPSW-zyItz3adnYSB1w_XLpsC874lgmv7STlc\" class=\"link\"> Liste de liens
                                </a>
                              </";
        // line 888
        echo "li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"50\" id=\"subtab-AdminParentShipping\">
                    <a href=\"http://localhost/prestashop/admin5/index.php?controller=AdminCarriers&amp;token=6c3738b98d46656f6d227b92b5099a51\" class=\"link\">
                      <i class=\"material-icons mi-local_shipping\">local_shipping</i>
                      <span>
                      Livraison
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-50\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"51\" id=\"subtab-AdminCarriers\">
                                <a href=\"http://localhost/prestashop/admin5/index.php?controller=AdminCarriers&amp;token=6c3738b98d46656f6d227b92b5099a51\" class=\"link\"> Transporteurs
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"52\" id=\"subtab-AdminShipping\">
                                <a href=\"/prestashop/admin5/index.php/improve/shipping/preferences/?_token=z3";
        // line 919
        echo "FsxlNPSW-zyItz3adnYSB1w_XLpsC874lgmv7STlc\" class=\"link\"> Préférences
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"53\" id=\"subtab-AdminParentPayment\">
                    <a href=\"/prestashop/admin5/index.php/improve/payment/payment_methods?_token=z3FsxlNPSW-zyItz3adnYSB1w_XLpsC874lgmv7STlc\" class=\"link\">
                      <i class=\"material-icons mi-payment\">payment</i>
                      <span>
                      Paiement
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-53\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"54\" id=\"subtab-AdminPayment\">
                                <a href=\"/prestashop/admin5/index.php/improve/payment/payment_methods?_token=z3FsxlNPSW-zyItz3adnYSB1w_XLpsC874lgmv7STlc\" class=\"link\"> Moyens de paiement
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"55\" id=\"subtab";
        // line 951
        echo "-AdminPaymentPreferences\">
                                <a href=\"/prestashop/admin5/index.php/improve/payment/preferences?_token=z3FsxlNPSW-zyItz3adnYSB1w_XLpsC874lgmv7STlc\" class=\"link\"> Préférences
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"56\" id=\"subtab-AdminInternational\">
                    <a href=\"/prestashop/admin5/index.php/improve/international/localization/?_token=z3FsxlNPSW-zyItz3adnYSB1w_XLpsC874lgmv7STlc\" class=\"link\">
                      <i class=\"material-icons mi-language\">language</i>
                      <span>
                      International
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-56\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"57\" id=\"subtab-AdminParentLocalization\">
                                <a href=\"/prestashop/admin5/index.php/improve/international/localization/?_token=z3FsxlNPSW-zyItz3adnYSB1w_XLpsC874lgmv7STlc\" class=\"link\"> Localisation
                                </a>
                              </li>

                                                                                  
                      ";
        // line 982
        echo "        
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"62\" id=\"subtab-AdminParentCountries\">
                                <a href=\"/prestashop/admin5/index.php/improve/international/zones/?_token=z3FsxlNPSW-zyItz3adnYSB1w_XLpsC874lgmv7STlc\" class=\"link\"> Zones géographiques
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"66\" id=\"subtab-AdminParentTaxes\">
                                <a href=\"/prestashop/admin5/index.php/improve/international/taxes/?_token=z3FsxlNPSW-zyItz3adnYSB1w_XLpsC874lgmv7STlc\" class=\"link\"> Taxes
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"69\" id=\"subtab-AdminTranslations\">
                                <a href=\"/prestashop/admin5/index.php/improve/international/translations/settings?_token=z3FsxlNPSW-zyItz3adnYSB1w_XLpsC874lgmv7STlc\" class=\"link\"> Traductions
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"149\" id=\"subtab-Marketing\">
                    <a href=\"http://localhost/prestashop/admin5/index.php?controller=AdminPsxMktgWithGoogleModule&amp;token=";
        // line 1012
        echo "e6b4f2d7ad8cc9ec49738a1dcf0dc1ac\" class=\"link\">
                      <i class=\"material-icons mi-campaign\">campaign</i>
                      <span>
                      Marketing
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-149\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"150\" id=\"subtab-AdminPsxMktgWithGoogleModule\">
                                <a href=\"http://localhost/prestashop/admin5/index.php?controller=AdminPsxMktgWithGoogleModule&amp;token=e6b4f2d7ad8cc9ec49738a1dcf0dc1ac\" class=\"link\"> Google
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"152\" id=\"subtab-AdminPsfacebookModule\">
                                <a href=\"http://localhost/prestashop/admin5/index.php?controller=AdminPsfacebookModule&amp;token=fa0c5a955d86bc477a556799e78b2a04\" class=\"link\"> Facebook &amp; Instagram
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                              
          
                      
                                          
                    
          
            <li class=\"category-";
        // line 1046
        echo "title\" data-submenu=\"70\" id=\"tab-CONFIGURE\">
                <span class=\"title\">Configurer</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone\" data-submenu=\"136\" id=\"subtab-AdminPsEditionBasicSettingsController\">
                    <a href=\"/prestashop/admin5/index.php/modules/pseditionbasic/settings?_token=z3FsxlNPSW-zyItz3adnYSB1w_XLpsC874lgmv7STlc\" class=\"link\">
                      <i class=\"material-icons mi-settings\">settings</i>
                      <span>
                      Paramètres
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"71\" id=\"subtab-ShopParameters\">
                    <a href=\"/prestashop/admin5/index.php/configure/shop/preferences/preferences?_token=z3FsxlNPSW-zyItz3adnYSB1w_XLpsC874lgmv7STlc\" class=\"link\">
                      <i class=\"material-icons mi-settings\">settings</i>
                      <span>
                      Paramètres de la boutique
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-71\" class=\"submenu panel-collapse\">";
        // line 1079
        echo "
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"72\" id=\"subtab-AdminParentPreferences\">
                                <a href=\"/prestashop/admin5/index.php/configure/shop/preferences/preferences?_token=z3FsxlNPSW-zyItz3adnYSB1w_XLpsC874lgmv7STlc\" class=\"link\"> Paramètres généraux
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"75\" id=\"subtab-AdminParentOrderPreferences\">
                                <a href=\"/prestashop/admin5/index.php/configure/shop/order-preferences/?_token=z3FsxlNPSW-zyItz3adnYSB1w_XLpsC874lgmv7STlc\" class=\"link\"> Commandes
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"78\" id=\"subtab-AdminPPreferences\">
                                <a href=\"/prestashop/admin5/index.php/configure/shop/product-preferences/?_token=z3FsxlNPSW-zyItz3adnYSB1w_XLpsC874lgmv7STlc\" class=\"link\"> Produits
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"79\" id=\"subtab-AdminParentCustomerPreferences\">
                                <a href=\"/prestashop/admin5/index.php/configure/shop/customer-pref";
        // line 1108
        echo "erences/?_token=z3FsxlNPSW-zyItz3adnYSB1w_XLpsC874lgmv7STlc\" class=\"link\"> Clients
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"83\" id=\"subtab-AdminParentStores\">
                                <a href=\"/prestashop/admin5/index.php/configure/shop/contacts/?_token=z3FsxlNPSW-zyItz3adnYSB1w_XLpsC874lgmv7STlc\" class=\"link\"> Contact
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"86\" id=\"subtab-AdminParentMeta\">
                                <a href=\"/prestashop/admin5/index.php/configure/shop/seo-urls/?_token=z3FsxlNPSW-zyItz3adnYSB1w_XLpsC874lgmv7STlc\" class=\"link\"> Trafic et SEO
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"89\" id=\"subtab-AdminParentSearchConf\">
                                <a href=\"http://localhost/prestashop/admin5/index.php?controller=AdminSearchConf&amp;token=2f3a37206c1b34dbb8697b79f2bae668\" class=\"link\"> Rechercher
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
  ";
        // line 1141
        echo "                
                  <li class=\"link-levelone has_submenu\" data-submenu=\"92\" id=\"subtab-AdminAdvancedParameters\">
                    <a href=\"/prestashop/admin5/index.php/configure/advanced/system-information/?_token=z3FsxlNPSW-zyItz3adnYSB1w_XLpsC874lgmv7STlc\" class=\"link\">
                      <i class=\"material-icons mi-settings_applications\">settings_applications</i>
                      <span>
                      Paramètres avancés
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-92\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"93\" id=\"subtab-AdminInformation\">
                                <a href=\"/prestashop/admin5/index.php/configure/advanced/system-information/?_token=z3FsxlNPSW-zyItz3adnYSB1w_XLpsC874lgmv7STlc\" class=\"link\"> Informations
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"94\" id=\"subtab-AdminPerformance\">
                                <a href=\"/prestashop/admin5/index.php/configure/advanced/performance/?_token=z3FsxlNPSW-zyItz3adnYSB1w_XLpsC874lgmv7STlc\" class=\"link\"> Performances
                                </a>
                              </li>

                                                                  ";
        // line 1169
        echo "                
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"95\" id=\"subtab-AdminAdminPreferences\">
                                <a href=\"/prestashop/admin5/index.php/configure/advanced/administration/?_token=z3FsxlNPSW-zyItz3adnYSB1w_XLpsC874lgmv7STlc\" class=\"link\"> Administration
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"96\" id=\"subtab-AdminEmails\">
                                <a href=\"/prestashop/admin5/index.php/configure/advanced/emails/?_token=z3FsxlNPSW-zyItz3adnYSB1w_XLpsC874lgmv7STlc\" class=\"link\"> E-mail
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"97\" id=\"subtab-AdminImport\">
                                <a href=\"/prestashop/admin5/index.php/configure/advanced/import/?_token=z3FsxlNPSW-zyItz3adnYSB1w_XLpsC874lgmv7STlc\" class=\"link\"> Importer
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"98\" id=\"subtab-AdminParentEmployees\">
                                <a href=\"/prestashop/admin5/index.php/configure/advanced/employees/?_token=z3FsxlNPSW-zyItz3adnYSB1w_XLpsC874lgmv7STlc\" class=\"link\"> Équipe
                           ";
        // line 1198
        echo "     </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"102\" id=\"subtab-AdminParentRequestSql\">
                                <a href=\"/prestashop/admin5/index.php/configure/advanced/sql-requests/?_token=z3FsxlNPSW-zyItz3adnYSB1w_XLpsC874lgmv7STlc\" class=\"link\"> Base de données
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"105\" id=\"subtab-AdminLogs\">
                                <a href=\"/prestashop/admin5/index.php/configure/advanced/logs/?_token=z3FsxlNPSW-zyItz3adnYSB1w_XLpsC874lgmv7STlc\" class=\"link\"> Logs
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"106\" id=\"subtab-AdminWebservice\">
                                <a href=\"/prestashop/admin5/index.php/configure/advanced/webservice-keys/?_token=z3FsxlNPSW-zyItz3adnYSB1w_XLpsC874lgmv7STlc\" class=\"link\"> Webservice
                                </a>
                              </li>

                                                                                                                                                                                                                                                    
                              
                                                            
                      ";
        // line 1228
        echo "        <li class=\"link-leveltwo\" data-submenu=\"110\" id=\"subtab-AdminFeatureFlag\">
                                <a href=\"/prestashop/admin5/index.php/configure/advanced/feature-flags/?_token=z3FsxlNPSW-zyItz3adnYSB1w_XLpsC874lgmv7STlc\" class=\"link\"> Fonctionnalités nouvelles et expérimentales
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"111\" id=\"subtab-AdminParentSecurity\">
                                <a href=\"/prestashop/admin5/index.php/configure/advanced/security/?_token=z3FsxlNPSW-zyItz3adnYSB1w_XLpsC874lgmv7STlc\" class=\"link\"> Sécurité
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone\" data-submenu=\"126\" id=\"subtab-AdminPsAssistantSettings\">
                    <a href=\"http://localhost/prestashop/admin5/index.php?controller=AdminPsAssistantSettings&amp;token=54d8aba9121dbe43a805194b5bed4ac3\" class=\"link\">
                      <i class=\"material-icons mi-extension\">extension</i>
                      <span>
                      Assistance By PrestaShop
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                        </li>
                                ";
        // line 1258
        echo "              
                  
                                                      
                  
                  <li class=\"link-levelone\" data-submenu=\"154\" id=\"subtab-AdminKlaviyoPsConfig\">
                    <a href=\"http://localhost/prestashop/admin5/index.php?controller=AdminKlaviyoPsConfig&amp;token=203c1672a231d5894aeafe74c1ccd444\" class=\"link\">
                      <i class=\"material-icons mi-trending_up\">trending_up</i>
                      <span>
                      Klaviyo
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                        </li>
                              
          
                  </ul>
  </div>
  
</nav>


<div class=\"header-toolbar d-print-none\">
    
  <div class=\"container-fluid\">

    
      <nav aria-label=\"Breadcrumb\">
        <ol class=\"breadcrumb\">
                      <li class=\"breadcrumb-item\">Marketplace</li>
          
                  </ol>
      </nav>
    

    <div class=\"title-row\">
      
          <h1 class=\"title\">
            Marketplace          </h1>
      

      
        <div class=\"toolbar-icons\">
          <div class=\"wrapper\">
            
                                                          <a
                  class=\"btn btn-primary pointer\"                  id=\"page-header-desc-configuration-add_module\"
                  href=\"#\"                  title=\"Installer un module\"                  data-toggle=\"pstooltip\"
                  data-placement=\"bottom\"                                  >
                  <i class=\"material-icons\">cloud_upload</i>                  Installer un module
                </a>
                                      
            
                         ";
        // line 1312
        echo "     <a class=\"btn btn-outline-secondary btn-help btn-sidebar\" href=\"#\"
                   title=\"Aide\"
                   data-toggle=\"sidebar\"
                   data-target=\"#right-sidebar\"
                   data-url=\"/prestashop/admin5/index.php/common/sidebar/https%253A%252F%252Fhelp.prestashop-project.org%252Ffr%252Fdoc%252FAdminModules%253Fversion%253D8.1.0%2526country%253Dfr/Aide?_token=z3FsxlNPSW-zyItz3adnYSB1w_XLpsC874lgmv7STlc\"
                   id=\"product_form_open_help\"
                >
                  Aide
                </a>
                                    </div>
        </div>

      
    </div>
  </div>

  
      <div class=\"page-head-tabs\" id=\"head_tabs\">
      <ul class=\"nav nav-pills\">
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                      <li class=\"nav-item\">
                    <a href=\"/prestashop/admin5/index.php/modules/mbo/modules/catalog/?_token=z3FsxlNPSW-zyItz3adnYSB1w_XLpsC874lgmv7STlc\" id=\"subtab-AdminPsMboModule\" class=\"nav-link tab active current\" data-submenu=\"167\">
                      Marketplace
                      <span class=\"notification-container\">
                        <span class=\"notification-counter\"></span>
                      </span>
                    </a>
                  </li>
              ";
        // line 1339
        echo "                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                  </ul>
    </div>
  
  <div class=\"btn-floating\">
    <button class=\"btn btn-primary collapsed\" data-toggle=\"collapse\" data-target=\".btn-floating-container\" aria-expanded=\"false\">
      <i class=\"material-icons\">add</i>
    </button>
    <div class=\"btn-floating-container collapse\">
      <div class=\"btn-floating-menu\">
        
                              <a
              class=\"btn btn-floating-item   pointer\"              id=\"page-header-desc-floating-configuration-add_module\"
              href=\"#\"              title=\"Installer un module\"              data-toggle=\"pstooltip\"
              data-placement=\"bottom\"            >
              Installer un module
              <i class=\"material-icons\">cloud_upload</i>            </a>
                  
                              <a class=\"btn btn-floating-item btn-help btn-sidebar";
        // line 1356
        echo "\" href=\"#\"
               title=\"Aide\"
               data-toggle=\"sidebar\"
               data-target=\"#right-sidebar\"
               data-url=\"/prestashop/admin5/index.php/common/sidebar/https%253A%252F%252Fhelp.prestashop-project.org%252Ffr%252Fdoc%252FAdminModules%253Fversion%253D8.1.0%2526country%253Dfr/Aide?_token=z3FsxlNPSW-zyItz3adnYSB1w_XLpsC874lgmv7STlc\"
            >
              Aide
            </a>
                        </div>
    </div>
  </div>
  
</div>

<div id=\"main-div\">
          
      <div class=\"content-div  with-tabs\">

        

                                                        
        <div id=\"ajax_confirmation\" class=\"alert alert-success\" style=\"display: none;\"></div>
<div id=\"content-message-box\"></div>


  ";
        // line 1381
        $this->displayBlock('content_header', $context, $blocks);
        $this->displayBlock('content', $context, $blocks);
        $this->displayBlock('content_footer', $context, $blocks);
        $this->displayBlock('sidebar_right', $context, $blocks);
        echo "

        

      </div>
    </div>

  <div id=\"non-responsive\" class=\"js-non-responsive\">
  <h1>Oh non !</h1>
  <p class=\"mt-3\">
    La version mobile de cette page n'est pas encore disponible.
  </p>
  <p class=\"mt-2\">
    Cette page n'est pas encore disponible sur mobile, merci de la consulter sur ordinateur.
  </p>
  <p class=\"mt-2\">
    Merci.
  </p>
  <a href=\"/prestashop/admin5/index.php/modules/pseditionbasic/homepage?_token=z3FsxlNPSW-zyItz3adnYSB1w_XLpsC874lgmv7STlc\" class=\"btn btn-primary py-1 mt-3\">
    <i class=\"material-icons rtl-flip\">arrow_back</i>
    Précédent
  </a>
</div>
  <div class=\"mobile-layer\"></div>

      <div id=\"footer\" class=\"bootstrap\">
    
</div>
  

      <div class=\"bootstrap\">
      
    </div>
  
";
        // line 1415
        $this->displayBlock('javascripts', $context, $blocks);
        $this->displayBlock('extra_javascripts', $context, $blocks);
        $this->displayBlock('translate_javascripts', $context, $blocks);
        echo "</body>";
        echo "
</html>";
    }

    // line 122
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_extra_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 1381
    public function block_content_header($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_content_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_sidebar_right($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 1415
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_extra_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_translate_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function getTemplateName()
    {
        return "__string_template__f2c4ce97ede24808d32bdcd25b3043bd1f22ea6f4a9e83542b6955fabc573fe4";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1598 => 1415,  1577 => 1381,  1566 => 122,  1557 => 1415,  1517 => 1381,  1490 => 1356,  1471 => 1339,  1442 => 1312,  1386 => 1258,  1354 => 1228,  1322 => 1198,  1291 => 1169,  1261 => 1141,  1226 => 1108,  1195 => 1079,  1160 => 1046,  1124 => 1012,  1092 => 982,  1059 => 951,  1025 => 919,  992 => 888,  961 => 859,  929 => 829,  896 => 798,  862 => 766,  829 => 735,  797 => 705,  762 => 672,  728 => 640,  699 => 613,  666 => 582,  632 => 550,  599 => 519,  558 => 480,  514 => 438,  459 => 385,  412 => 340,  365 => 295,  320 => 252,  279 => 213,  261 => 197,  221 => 159,  179 => 122,  174 => 119,  139 => 86,  120 => 71,  88 => 41,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__f2c4ce97ede24808d32bdcd25b3043bd1f22ea6f4a9e83542b6955fabc573fe4", "");
    }
}
