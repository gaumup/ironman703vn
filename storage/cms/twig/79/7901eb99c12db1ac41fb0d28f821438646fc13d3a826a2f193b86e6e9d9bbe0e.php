<?php

/* /Users/gaumup/Projects/ironmanvn/themes/responsiv-flat/layouts/default.htm */
class __TwigTemplate_7137f861d0c330877f13e450e917384bd7963c8207f3c84564a92447401768f0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        ob_start();
        // line 2
        echo "<!DOCTYPE html>
<html>
    <head>
        <title>IronMan70.3Vietnam - ";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "title", array()), "html", null, true);
        echo "</title>
        <meta name=\"author\" content=\"October CMS\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo $this->env->getExtension('CMS')->themeFilter("assets/images/october.png");
        echo "\" />
        ";
        // line 9
        echo $this->env->getExtension('CMS')->assetsFunction('css');
        echo $this->env->getExtension('CMS')->displayBlock('styles');
        // line 10
        echo "        <link href=\"";
        echo $this->env->getExtension('CMS')->themeFilter(array(0 => "assets/vendor/owl.carousel/css/owl.carousel.css", 1 => "assets/vendor/owl.carousel/css/owl.theme.css", 2 => "assets/css/theme.css"));
        // line 14
        echo "\" rel=\"stylesheet\">
    </head>
    <body class=\"page-";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "id", array()), "html", null, true);
        echo " layout-";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "layout", array()), "id", array()), "html", null, true);
        echo "\">

        <!-- Header -->
        <header id=\"layout-header\" class=\"header-navbar\">
            <!-- Nav -->
            ";
        // line 21
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("nav"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 22
        echo "        </header>


        <!-- Content -->
        <div id=\"layout-content\">
            ";
        // line 27
        echo $this->env->getExtension('CMS')->pageFunction();
        // line 28
        echo "        </div>

        <!-- Footer -->
        <footer id=\"layout-footer\">
            ";
        // line 32
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("footer"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 33
        echo "        </footer>

        <!-- Scripts -->
        <script src=\"";
        // line 36
        echo $this->env->getExtension('CMS')->themeFilter(array(0 => "assets/javascript/jquery.js", 1 => "assets/vendor/bootstrap/js/transition.js", 2 => "assets/vendor/bootstrap/js/alert.js", 3 => "assets/vendor/bootstrap/js/button.js", 4 => "assets/vendor/bootstrap/js/carousel.js", 5 => "assets/vendor/bootstrap/js/collapse.js", 6 => "assets/vendor/bootstrap/js/dropdown.js", 7 => "assets/vendor/bootstrap/js/modal.js", 8 => "assets/vendor/bootstrap/js/tooltip.js", 9 => "assets/vendor/bootstrap/js/popover.js", 10 => "assets/vendor/bootstrap/js/scrollspy.js", 11 => "assets/vendor/bootstrap/js/tab.js", 12 => "assets/vendor/bootstrap/js/affix.js", 13 => "assets/vendor/flat-ui/js/bootstrap-select.js", 14 => "assets/vendor/flat-ui/js/bootstrap-switch.js", 15 => "assets/vendor/flat-ui/js/flatui-checkbox.js", 16 => "assets/vendor/flat-ui/js/flatui-radio.js", 17 => "assets/vendor/flat-ui/js/jquery.tagsinput.js", 18 => "assets/vendor/flat-ui/js/jquery.placeholder.js", 19 => "assets/vendor/owl.carousel/js/owl.carousel.min.js", 20 => "assets/javascript/app.js"));
        // line 58
        echo "\"></script>
        ";
        // line 59
        echo '<script src="'. Request::getBasePath()
                .'/modules/system/assets/js/framework.js"></script>'.PHP_EOL;
        echo '<script src="'. Request::getBasePath()
                    .'/modules/system/assets/js/framework.extras.js"></script>'.PHP_EOL;
        echo '<link rel="stylesheet" property="stylesheet" href="'. Request::getBasePath()
                    .'/modules/system/assets/css/framework.extras.css">'.PHP_EOL;
        // line 60
        echo "        ";
        echo $this->env->getExtension('CMS')->assetsFunction('js');
        echo $this->env->getExtension('CMS')->displayBlock('scripts');
        // line 61
        echo "    </body>
</html>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "/Users/gaumup/Projects/ironmanvn/themes/responsiv-flat/layouts/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 61,  96 => 60,  89 => 59,  86 => 58,  84 => 36,  79 => 33,  75 => 32,  69 => 28,  67 => 27,  60 => 22,  56 => 21,  46 => 16,  42 => 14,  39 => 10,  36 => 9,  32 => 8,  26 => 5,  21 => 2,  19 => 1,);
    }
}
/* {% spaceless %}*/
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <title>IronMan70.3Vietnam - {{ this.page.title }}</title>*/
/*         <meta name="author" content="October CMS">*/
/*         <meta name="viewport" content="width=device-width, initial-scale=1.0">*/
/*         <link rel="icon" type="image/png" href="{{ 'assets/images/october.png'|theme }}" />*/
/*         {% styles %}*/
/*         <link href="{{ [*/
/*             'assets/vendor/owl.carousel/css/owl.carousel.css',*/
/*             'assets/vendor/owl.carousel/css/owl.theme.css',*/
/*             'assets/css/theme.css',*/
/*         ]|theme }}" rel="stylesheet">*/
/*     </head>*/
/*     <body class="page-{{ this.page.id }} layout-{{ this.layout.id }}">*/
/* */
/*         <!-- Header -->*/
/*         <header id="layout-header" class="header-navbar">*/
/*             <!-- Nav -->*/
/*             {% partial "nav" %}*/
/*         </header>*/
/* */
/* */
/*         <!-- Content -->*/
/*         <div id="layout-content">*/
/*             {% page %}*/
/*         </div>*/
/* */
/*         <!-- Footer -->*/
/*         <footer id="layout-footer">*/
/*             {% partial "footer" %}*/
/*         </footer>*/
/* */
/*         <!-- Scripts -->*/
/*         <script src="{{ [*/
/*             'assets/javascript/jquery.js',*/
/*             'assets/vendor/bootstrap/js/transition.js',*/
/*             'assets/vendor/bootstrap/js/alert.js',*/
/*             'assets/vendor/bootstrap/js/button.js',*/
/*             'assets/vendor/bootstrap/js/carousel.js',*/
/*             'assets/vendor/bootstrap/js/collapse.js',*/
/*             'assets/vendor/bootstrap/js/dropdown.js',*/
/*             'assets/vendor/bootstrap/js/modal.js',*/
/*             'assets/vendor/bootstrap/js/tooltip.js',*/
/*             'assets/vendor/bootstrap/js/popover.js',*/
/*             'assets/vendor/bootstrap/js/scrollspy.js',*/
/*             'assets/vendor/bootstrap/js/tab.js',*/
/*             'assets/vendor/bootstrap/js/affix.js',*/
/*             'assets/vendor/flat-ui/js/bootstrap-select.js',*/
/*             'assets/vendor/flat-ui/js/bootstrap-switch.js',*/
/*             'assets/vendor/flat-ui/js/flatui-checkbox.js',*/
/*             'assets/vendor/flat-ui/js/flatui-radio.js',*/
/*             'assets/vendor/flat-ui/js/jquery.tagsinput.js',*/
/*             'assets/vendor/flat-ui/js/jquery.placeholder.js',*/
/*             'assets/vendor/owl.carousel/js/owl.carousel.min.js',*/
/*             'assets/javascript/app.js',*/
/*         ]|theme }}"></script>*/
/*         {% framework extras %}*/
/*         {% scripts %}*/
/*     </body>*/
/* </html>*/
/* {% endspaceless %}*/
