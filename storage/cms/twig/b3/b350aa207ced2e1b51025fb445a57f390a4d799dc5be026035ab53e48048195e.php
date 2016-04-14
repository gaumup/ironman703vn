<?php

/* /Users/gaumup/Projects/ironmanvn/themes/responsiv-flat/pages/gallery.htm */
class __TwigTemplate_8e3ec20df2ee7446cfc054b3557869425c1ed446f6bee324b3c82a34ffabed51 extends Twig_Template
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
        echo "<section id=\"layout-title\">
    <div class=\"container\">
        <h3>Thư Viện</h3>
    </div>
</section>

<div class=\"section-gallery\">
    <div class=\"container\">
        <div id=\"gallery-list\" class=\"row\">
            ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["gallery"]) ? $context["gallery"] : null), "images", array()));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
            // line 11
            echo "                <div class=\"col-sm-4 col-xs-6\">
                    ";
            // line 12
            if (preg_match("{^<iframe}", $this->getAttribute($context["image"], "description", array()))) {
                // line 13
                echo "                        ";
                $context["video"] = true;
                // line 14
                echo "                    ";
            }
            // line 15
            echo "
                    <div class=\"gallery-list__item\">
                        <div class=\"gallery-list__item-wrapper\">
                            <img class=\"gallery-img\" src=\"";
            // line 18
            echo $this->env->getExtension('CMS')->themeFilter("assets/images/img1x1.gif");
            echo "\" data-src=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["image"], "path", array()), "html", null, true);
            echo "\" alt=\"\" title=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["image"], "title", array()), "html", null, true);
            echo "\" />

                            <div class=\"gallery-list__item-info\">
                                <p class=\"gallery-item__cate\">";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["gallery"]) ? $context["gallery"] : null), "name", array()), "html", null, true);
            echo "</p>

                                <p class=\"gallery-item__name\">";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["image"], "title", array()), "html", null, true);
            echo "</p>
                                <p class=\"gallery-item__description\">
                                    ";
            // line 25
            if (((isset($context["video"]) ? $context["video"] : null) == false)) {
                // line 26
                echo "                                        ";
                echo call_user_func_array($this->env->getFunction('str_limit')->getCallable(), array("limit", $this->getAttribute($context["image"], "description", array()), 50));
                echo "
                                    ";
            }
            // line 28
            echo "                                </p>

                                <p class=\"gallery-item__exploring\">
                                    ";
            // line 31
            if (((isset($context["video"]) ? $context["video"] : null) == false)) {
                // line 32
                echo "                                        <a data-key=\"";
                echo twig_escape_filter($this->env, ($this->getAttribute($context["loop"], "index", array()) - 1), "html", null, true);
                echo "\" href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["image"], "path", array()), "html", null, true);
                echo "\" title=\"\" class=\"gallery-item__exploring--fullscreen\"></a>
                                    ";
            } else {
                // line 34
                echo "                                        <a href=\"#watch\" data-index=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo "\" data-href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["image"], "description", array()), "html", null, true);
                echo "\" title=\"\" class=\"gallery-item__video\"></a>
                                    ";
            }
            // line 36
            echo "                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "/Users/gaumup/Projects/ironmanvn/themes/responsiv-flat/pages/gallery.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  133 => 42,  114 => 36,  106 => 34,  98 => 32,  96 => 31,  91 => 28,  85 => 26,  83 => 25,  78 => 23,  73 => 21,  63 => 18,  58 => 15,  55 => 14,  52 => 13,  50 => 12,  47 => 11,  30 => 10,  19 => 1,);
    }
}
/* <section id="layout-title">*/
/*     <div class="container">*/
/*         <h3>Thư Viện</h3>*/
/*     </div>*/
/* </section>*/
/* */
/* <div class="section-gallery">*/
/*     <div class="container">*/
/*         <div id="gallery-list" class="row">*/
/*             {% for image in gallery.images %}*/
/*                 <div class="col-sm-4 col-xs-6">*/
/*                     {% if ( image.description matches '{^<iframe}' ) %}*/
/*                         {% set video = true %}*/
/*                     {% endif %}*/
/* */
/*                     <div class="gallery-list__item">*/
/*                         <div class="gallery-list__item-wrapper">*/
/*                             <img class="gallery-img" src="{{ 'assets/images/img1x1.gif'|theme }}" data-src="{{ image.path }}" alt="" title="{{ image.title }}" />*/
/* */
/*                             <div class="gallery-list__item-info">*/
/*                                 <p class="gallery-item__cate">{{ gallery.name }}</p>*/
/* */
/*                                 <p class="gallery-item__name">{{ image.title }}</p>*/
/*                                 <p class="gallery-item__description">*/
/*                                     {% if ( video == false ) %}*/
/*                                         {{ str_limit( image.description, 50 ) }}*/
/*                                     {% endif %}*/
/*                                 </p>*/
/* */
/*                                 <p class="gallery-item__exploring">*/
/*                                     {% if ( video == false ) %}*/
/*                                         <a data-key="{{ loop.index-1 }}" href="{{ image.path }}" title="" class="gallery-item__exploring--fullscreen"></a>*/
/*                                     {% else %}*/
/*                                         <a href="#watch" data-index="{{ loop.index }}" data-href="{{ image.description }}" title="" class="gallery-item__video"></a>*/
/*                                     {% endif %}*/
/*                                 </p>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             {% endfor %}*/
/*         </div>*/
/*     </div>*/
/* </div>*/
