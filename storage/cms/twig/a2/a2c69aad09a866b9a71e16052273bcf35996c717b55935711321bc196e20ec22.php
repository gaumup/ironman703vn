<?php

/* /home/kennabi/uat/ironman703vietnam/themes/responsiv-flat/partials/blog/sidebar.htm */
class __TwigTemplate_6dced4666b1b5e9fdcd3e091033d2a9fe5acdde3bdf686421cedbfdf8ce1cea1 extends Twig_Template
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
        echo "<div class=\"blog-sidebar\">
    <!-- Search -->
    <form role=\"form\" action=\"";
        // line 3
        echo $this->env->getExtension('System')->appFilter("news");
        echo "\" method=\"get\">
        <div class=\"well\">
            <div class=\"input-group\">
                <input type=\"text\" class=\"form-control\" placeholder=\"Tìm Kiếm Bài Viết...\" name=\"s\" value=\"";
        // line 6
        echo twig_escape_filter($this->env, (isset($context["searchQuery"]) ? $context["searchQuery"] : null), "html", null, true);
        echo "\" />
                <span class=\"input-group-btn\">
                    <button class=\"btn btn-primary\" type=\"button\"><i class=\"icon-search\"></i></button>
                </span>
            </div>
        </div>
    </form>
</div>";
    }

    public function getTemplateName()
    {
        return "/home/kennabi/uat/ironman703vietnam/themes/responsiv-flat/partials/blog/sidebar.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 6,  23 => 3,  19 => 1,);
    }
}
/* <div class="blog-sidebar">*/
/*     <!-- Search -->*/
/*     <form role="form" action="{{ 'news'|app }}" method="get">*/
/*         <div class="well">*/
/*             <div class="input-group">*/
/*                 <input type="text" class="form-control" placeholder="Tìm Kiếm Bài Viết..." name="s" value="{{ searchQuery }}" />*/
/*                 <span class="input-group-btn">*/
/*                     <button class="btn btn-primary" type="button"><i class="icon-search"></i></button>*/
/*                 </span>*/
/*             </div>*/
/*         </div>*/
/*     </form>*/
/* </div>*/
