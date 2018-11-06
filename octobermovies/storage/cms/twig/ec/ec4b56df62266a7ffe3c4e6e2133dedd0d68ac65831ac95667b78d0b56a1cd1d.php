<?php

/* C:\wamp64\www\octobermovies/themes/clonencsc/layouts/default.htm */
class __TwigTemplate_f8106f6f7c40507787c1a27e36d7e5db53251b81c40b45874200ea13edcf3365 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
    ";
        // line 4
        $_minify = System\Classes\CombineAssets::instance()->useMinify;
        echo '<script src="'. Request::getBasePath()
                .'/modules/system/assets/js/framework'.($_minify ? '-min' : '').'.js"></script>'.PHP_EOL;
        unset($_minify);
        // line 5
        echo "    ";
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('js');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('scripts');
        // line 6
        echo "        <meta charset=\"utf-8\">
        <title>October CMS - ";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", array()), "title", array()), "html", null, true);
        echo "</title>
        <meta name=\"description\" content=\"";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", array()), "meta_description", array()), "html", null, true);
        echo "\">
        <meta name=\"title\" content=\"";
        // line 9
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", array()), "meta_title", array()), "html", null, true);
        echo "\">
        <meta name=\"author\" content=\"OctoberCMS\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <meta name=\"generator\" content=\"OctoberCMS\">
     <!-- Vendor CSS -->
     
    <link href=\"";
        // line 15
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/https://fonts.googleapis.com/css?family=Montserrat:100,300,400,500,600,700,900%7COpen+Sans:300,400,600,700,800\"
\t rel=\"stylesheet\" type=\"text/css");
        // line 16
        echo "\">
\t<link rel=\"stylesheet\" href=\"";
        // line 17
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendor/bootstrap/css/bootstrap.min.css");
        echo "\">
\t<link rel=\"stylesheet\" href=\"";
        // line 18
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendor/font-awesome/css/fontawesome-all.min.css");
        echo "\">
\t<link rel=\"stylesheet\" href=\"";
        // line 19
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendor/animate/animate.min.css");
        echo "\">
\t<link rel=\"stylesheet\" href=\"";
        // line 20
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendor/linear-icons/css/linear-icons.min.css");
        echo "\">
\t<link rel=\"stylesheet\" href=\"";
        // line 21
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendor/owl.carousel/assets/owl.carousel.min.css");
        echo "\">
\t<link rel=\"stylesheet\" href=\"";
        // line 22
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendor/owl.carousel/assets/owl.theme.default.min.css");
        echo "\">
\t<link rel=\"stylesheet\" href=\"";
        // line 23
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendor/magnific-popup/magnific-popup.min.css");
        echo "\">

\t<!-- Theme CSS -->
\t<link rel=\"stylesheet\" href=\"";
        // line 26
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/style.css");
        echo "\">
\t<link rel=\"stylesheet\" href=\"";
        // line 27
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/theme.css");
        echo "\">
\t<link rel=\"stylesheet\" href=\"";
        // line 28
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/theme-elements.css");
        echo "\">

\t<!-- Current Page CSS -->
\t<link rel=\"stylesheet\" href=\"";
        // line 31
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendor/rs-plugin/css/settings.css");
        echo "\">
\t<link rel=\"stylesheet\" href=\"";
        // line 32
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendor/rs-plugin/css/layers.css");
        echo "\">
\t<link rel=\"stylesheet\" href=\"";
        // line 33
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendor/rs-plugin/css/navigation.css");
        echo "\">

\t<!-- Skin CSS -->
\t<link rel=\"stylesheet\" href=\"";
        // line 36
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/skins/default.css");
        echo "\">

\t<!-- Theme Custom CSS -->
\t<link rel=\"stylesheet\" href=\"";
        // line 39
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/custom.css");
        echo "\">
        ";
        // line 40
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('css');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('styles');
        // line 41
        echo "    </head>
    <body>

        <!-- Header -->
        <header id=\"layout-header\">
            ";
        // line 46
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("header"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 47
        echo "        </header>
        

        <!-- Content -->
        ";
        // line 51
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("aboutus"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 52
        echo "
        ";
        // line 53
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("hoatdong"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 54
        echo "
        ";
        // line 55
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("tuyendung"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 56
        echo "        <!-- Footer -->
        <footer id=\"layout-footer\">
                ";
        // line 58
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("footer"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        echo "           
        </footer>
       

   

      
       
        ";
        // line 66
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('js');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('scripts');
        // line 67
        echo "        <script src=\"";
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendor/jquery/jquery.min.js");
        echo "\"></script>
    <script src=\"";
        // line 68
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendor/jquery.appear/jquery.appear.min.js");
        echo "\"></script>
    <script src=\"";
        // line 69
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendor/jquery.easing/jquery.easing.min.js");
        echo "\"></script>
    <script src=\"";
        // line 70
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendor/jquery-cookie/jquery-cookie.min.js");
        echo "\"></script>
    <script src=\"";
        // line 71
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendor/bootstrap/js/bootstrap.bundle.min.js");
        echo "\"></script>
    <script src=\"";
        // line 72
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendor/common/common.min.js");
        echo "\"></script>
    <script src=\"";
        // line 73
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendor/jquery.validation/jquery.validation.min.js");
        echo "\"></script>
    <script src=\"";
        // line 74
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendor/jquery.easy-pie-chart/jquery.easy-pie-chart.min.js");
        echo "\"></script>
    <script src=\"";
        // line 75
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendor/jquery.gmap/jquery.gmap.min.js");
        echo "\"></script>
    <script src=\"";
        // line 76
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendor/jquery.lazyload/jquery.lazyload.min.js");
        echo "\"></script>
    <script src=\"";
        // line 77
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendor/isotope/jquery.isotope.min.js");
        echo "\"></script>
    <script src=\"";
        // line 78
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendor/owl.carousel/owl.carousel.min.js");
        echo "\"></script>
    <script src=\"";
        // line 79
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendor/magnific-popup/jquery.magnific-popup.min.js");
        echo "\"></script>
    <script src=\"";
        // line 80
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendor/vide/vide.min.js");
        echo "\"></script>
    <script src=\"";
        // line 81
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendor/vivus/vivus.min.js");
        echo "\"></script>
    <script src=\"";
        // line 82
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/theme.js");
        echo "\"></script>
    <script src=\"";
        // line 83
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendor/rs-plugin/js/jquery.themepunch.tools.min.js");
        echo "\"></script>
    <script src=\"";
        // line 84
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendor/rs-plugin/js/jquery.themepunch.revolution.min.js");
        echo "\"></script>
    <script src=\"";
        // line 85
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/views/view.contact.js");
        echo "\"></script>
    <script src=\"";
        // line 86
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/custom.js");
        echo "\"></script>
    <script src=\"";
        // line 87
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/theme.init.js");
        echo "\"></script>
    <script src=\"";
        // line 88
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/examples/examples.portfolio.js");
        echo "\"></script>
    </body>
</html>";
    }

    public function getTemplateName()
    {
        return "C:\\wamp64\\www\\octobermovies/themes/clonencsc/layouts/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  274 => 88,  270 => 87,  266 => 86,  262 => 85,  258 => 84,  254 => 83,  250 => 82,  246 => 81,  242 => 80,  238 => 79,  234 => 78,  230 => 77,  226 => 76,  222 => 75,  218 => 74,  214 => 73,  210 => 72,  206 => 71,  202 => 70,  198 => 69,  194 => 68,  189 => 67,  186 => 66,  173 => 58,  169 => 56,  165 => 55,  162 => 54,  158 => 53,  155 => 52,  151 => 51,  145 => 47,  141 => 46,  134 => 41,  131 => 40,  127 => 39,  121 => 36,  115 => 33,  111 => 32,  107 => 31,  101 => 28,  97 => 27,  93 => 26,  87 => 23,  83 => 22,  79 => 21,  75 => 20,  71 => 19,  67 => 18,  63 => 17,  60 => 16,  57 => 15,  48 => 9,  44 => 8,  40 => 7,  37 => 6,  33 => 5,  28 => 4,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
    {% framework %}
    {% scripts %}
        <meta charset=\"utf-8\">
        <title>October CMS - {{ this.page.title }}</title>
        <meta name=\"description\" content=\"{{ this.page.meta_description }}\">
        <meta name=\"title\" content=\"{{ this.page.meta_title }}\">
        <meta name=\"author\" content=\"OctoberCMS\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <meta name=\"generator\" content=\"OctoberCMS\">
     <!-- Vendor CSS -->
     
    <link href=\"{{ 'assets/https://fonts.googleapis.com/css?family=Montserrat:100,300,400,500,600,700,900%7COpen+Sans:300,400,600,700,800\"
\t rel=\"stylesheet\" type=\"text/css' |theme}}\">
\t<link rel=\"stylesheet\" href=\"{{ 'assets/vendor/bootstrap/css/bootstrap.min.css'|theme }}\">
\t<link rel=\"stylesheet\" href=\"{{ 'assets/vendor/font-awesome/css/fontawesome-all.min.css'|theme }}\">
\t<link rel=\"stylesheet\" href=\"{{ 'assets/vendor/animate/animate.min.css'|theme }}\">
\t<link rel=\"stylesheet\" href=\"{{ 'assets/vendor/linear-icons/css/linear-icons.min.css'|theme }}\">
\t<link rel=\"stylesheet\" href=\"{{ 'assets/vendor/owl.carousel/assets/owl.carousel.min.css'|theme }}\">
\t<link rel=\"stylesheet\" href=\"{{ 'assets/vendor/owl.carousel/assets/owl.theme.default.min.css'|theme }}\">
\t<link rel=\"stylesheet\" href=\"{{ 'assets/vendor/magnific-popup/magnific-popup.min.css'|theme }}\">

\t<!-- Theme CSS -->
\t<link rel=\"stylesheet\" href=\"{{ 'assets/css/style.css'|theme }}\">
\t<link rel=\"stylesheet\" href=\"{{ 'assets/css/theme.css'|theme }}\">
\t<link rel=\"stylesheet\" href=\"{{ 'assets/css/theme-elements.css'|theme }}\">

\t<!-- Current Page CSS -->
\t<link rel=\"stylesheet\" href=\"{{ 'assets/vendor/rs-plugin/css/settings.css'|theme }}\">
\t<link rel=\"stylesheet\" href=\"{{ 'assets/vendor/rs-plugin/css/layers.css'|theme }}\">
\t<link rel=\"stylesheet\" href=\"{{ 'assets/vendor/rs-plugin/css/navigation.css'|theme }}\">

\t<!-- Skin CSS -->
\t<link rel=\"stylesheet\" href=\"{{ 'assets/css/skins/default.css'|theme }}\">

\t<!-- Theme Custom CSS -->
\t<link rel=\"stylesheet\" href=\"{{ 'assets/css/custom.css'|theme }}\">
        {% styles %}
    </head>
    <body>

        <!-- Header -->
        <header id=\"layout-header\">
            {% partial 'header' %}
        </header>
        

        <!-- Content -->
        {% partial 'aboutus' %}

        {% partial 'hoatdong' %}

        {% partial 'tuyendung' %}
        <!-- Footer -->
        <footer id=\"layout-footer\">
                {% partial 'footer' %}           
        </footer>
       

   

      
       
        {% scripts %}
        <script src=\"{{ 'assets/vendor/jquery/jquery.min.js'|theme }}\"></script>
    <script src=\"{{ 'assets/vendor/jquery.appear/jquery.appear.min.js'|theme }}\"></script>
    <script src=\"{{ 'assets/vendor/jquery.easing/jquery.easing.min.js'|theme }}\"></script>
    <script src=\"{{ 'assets/vendor/jquery-cookie/jquery-cookie.min.js'|theme }}\"></script>
    <script src=\"{{ 'assets/vendor/bootstrap/js/bootstrap.bundle.min.js'|theme }}\"></script>
    <script src=\"{{ 'assets/vendor/common/common.min.js'|theme }}\"></script>
    <script src=\"{{ 'assets/vendor/jquery.validation/jquery.validation.min.js'|theme }}\"></script>
    <script src=\"{{ 'assets/vendor/jquery.easy-pie-chart/jquery.easy-pie-chart.min.js'|theme }}\"></script>
    <script src=\"{{ 'assets/vendor/jquery.gmap/jquery.gmap.min.js'|theme }}\"></script>
    <script src=\"{{ 'assets/vendor/jquery.lazyload/jquery.lazyload.min.js'|theme }}\"></script>
    <script src=\"{{ 'assets/vendor/isotope/jquery.isotope.min.js'|theme }}\"></script>
    <script src=\"{{ 'assets/vendor/owl.carousel/owl.carousel.min.js'|theme }}\"></script>
    <script src=\"{{ 'assets/vendor/magnific-popup/jquery.magnific-popup.min.js'|theme }}\"></script>
    <script src=\"{{ 'assets/vendor/vide/vide.min.js'|theme }}\"></script>
    <script src=\"{{ 'assets/vendor/vivus/vivus.min.js'|theme }}\"></script>
    <script src=\"{{ 'assets/js/theme.js'|theme }}\"></script>
    <script src=\"{{ 'assets/vendor/rs-plugin/js/jquery.themepunch.tools.min.js'|theme }}\"></script>
    <script src=\"{{ 'assets/vendor/rs-plugin/js/jquery.themepunch.revolution.min.js'|theme }}\"></script>
    <script src=\"{{ 'assets/js/views/view.contact.js'|theme }}\"></script>
    <script src=\"{{ 'assets/js/custom.js'|theme }}\"></script>
    <script src=\"{{ 'assets/js/theme.init.js'|theme }}\"></script>
    <script src=\"{{ 'assets/js/examples/examples.portfolio.js'|theme }}\"></script>
    </body>
</html>", "C:\\wamp64\\www\\octobermovies/themes/clonencsc/layouts/default.htm", "");
    }
}
