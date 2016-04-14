<?php

/* /home/kennabi/uat/ironman703vietnam/themes/responsiv-flat/partials/footer.htm */
class __TwigTemplate_5c80b39f644dc78bd2996976450a9ec10e4879a9523839e534a9f0856a0e0c8f extends Twig_Template
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
        echo "<div class=\"container\">
    <nav class=\"pull-left\">
        <ul>
            <li class=\"active\">
                <a href=\"";
        // line 5
        echo $this->env->getExtension('CMS')->pageFilter("home");
        echo "\">Trang Chủ</a>
            </li>
            <li>
                <a href=\"";
        // line 8
        echo $this->env->getExtension('CMS')->pageFilter("blog/blog");
        echo "\">Tin Tức</a>
            </li>
            <li>
                <a href=\"";
        // line 11
        echo $this->env->getExtension('CMS')->pageFilter("gallery");
        echo "\">Thư Viện</a>
            </li>
        </ul>
    </nav>
    <div class=\"social-btns pull-right\">
        <a target=\"_blank\" href=\"https://www.facebook.com/VNGCorporation.Page?hc_location=stream\"><div class=\"fui-facebook\"></div><div class=\"fui-facebook\"></div></a>
        <a target=\"_blank\" href=\"https://twitter.com/vngcorporation\"><div class=\"fui-twitter\"></div><div class=\"fui-twitter\"></div></a>

        <a target=\"_blank\" href=\"https://plus.google.com/107030863331028600810\"><div class=\"fui-googleplus\"></div><div class=\"fui-googleplus\"></div></a>

        <a target=\"_blank\" href=\"https://www.linkedin.com/company/vng-corporation\"><div class=\"fui-linkedin\"></div><div class=\"fui-linkedin\"></div></a>
    </div>

    <div class=\"additional-links\">
        Công Ty Cổ Phần VNG 2016.
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "/home/kennabi/uat/ironman703vietnam/themes/responsiv-flat/partials/footer.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 11,  31 => 8,  25 => 5,  19 => 1,);
    }
}
/* <div class="container">*/
/*     <nav class="pull-left">*/
/*         <ul>*/
/*             <li class="active">*/
/*                 <a href="{{ 'home'|page }}">Trang Chủ</a>*/
/*             </li>*/
/*             <li>*/
/*                 <a href="{{ 'blog/blog'|page }}">Tin Tức</a>*/
/*             </li>*/
/*             <li>*/
/*                 <a href="{{ 'gallery'|page }}">Thư Viện</a>*/
/*             </li>*/
/*         </ul>*/
/*     </nav>*/
/*     <div class="social-btns pull-right">*/
/*         <a target="_blank" href="https://www.facebook.com/VNGCorporation.Page?hc_location=stream"><div class="fui-facebook"></div><div class="fui-facebook"></div></a>*/
/*         <a target="_blank" href="https://twitter.com/vngcorporation"><div class="fui-twitter"></div><div class="fui-twitter"></div></a>*/
/* */
/*         <a target="_blank" href="https://plus.google.com/107030863331028600810"><div class="fui-googleplus"></div><div class="fui-googleplus"></div></a>*/
/* */
/*         <a target="_blank" href="https://www.linkedin.com/company/vng-corporation"><div class="fui-linkedin"></div><div class="fui-linkedin"></div></a>*/
/*     </div>*/
/* */
/*     <div class="additional-links">*/
/*         Công Ty Cổ Phần VNG 2016.*/
/*     </div>*/
/* </div>*/
