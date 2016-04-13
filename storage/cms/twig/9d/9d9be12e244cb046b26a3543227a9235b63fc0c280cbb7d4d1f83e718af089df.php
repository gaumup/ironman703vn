<?php

/* /Users/gaumup/Projects/ironmanvn/themes/responsiv-flat/partials/blog/pagination.htm */
class __TwigTemplate_8678596b6d418605f12ec771587f82298f51aff96fe4f0b92446a4eec91f63eb extends Twig_Template
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
        if (twig_test_empty((isset($context["base"]) ? $context["base"] : null))) {
            // line 2
            echo "    ";
            $context["base"] = $this->env->getExtension('System')->appFilter("");
        }
        // line 4
        echo "
";
        // line 5
        if ((((isset($context["total"]) ? $context["total"] : null) / (isset($context["perPage"]) ? $context["perPage"] : null)) > 10)) {
            // line 6
            echo "    ";
            $context["range"] = 10;
        } else {
            // line 8
            echo "    ";
            $context["range"] = twig_round(((isset($context["total"]) ? $context["total"] : null) / (isset($context["perPage"]) ? $context["perPage"] : null)), 0, "ceil");
        }
        // line 10
        echo "
";
        // line 11
        if (((isset($context["current"]) ? $context["current"] : null) == 1)) {
            // line 12
            echo "    ";
            $context["prev"] = 1;
        } else {
            // line 14
            echo "    ";
            $context["prev"] = ((isset($context["current"]) ? $context["current"] : null) - 1);
        }
        // line 16
        echo "
";
        // line 17
        if (((isset($context["current"]) ? $context["current"] : null) < (isset($context["last"]) ? $context["last"] : null))) {
            // line 18
            echo "    ";
            $context["next"] = ((isset($context["current"]) ? $context["current"] : null) + 1);
        } else {
            // line 20
            echo "    ";
            $context["next"] = (isset($context["last"]) ? $context["last"] : null);
        }
        // line 22
        echo "<div class=\"pagination pull-right\">
    <ul>
        <li class=\"previous ";
        // line 24
        if (((isset($context["current"]) ? $context["current"] : null) == 1)) {
            echo "disabled";
        }
        echo "\"><a href=\"";
        echo $this->env->getExtension('System')->appFilter(((isset($context["base"]) ? $context["base"] : null) . (isset($context["prev"]) ? $context["prev"] : null)));
        echo "\" class=\"fui-arrow-left\"></a></li>

        ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["range"]) ? $context["range"] : null)));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 27
            echo "            <li ";
            if (((isset($context["current"]) ? $context["current"] : null) == $context["i"])) {
                echo "class=\"active\"";
            }
            echo "><a href=\"";
            echo $this->env->getExtension('System')->appFilter(((isset($context["base"]) ? $context["base"] : null) . $context["i"]));
            echo "\">";
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "
        <li class=\"next ";
        // line 30
        if (((isset($context["current"]) ? $context["current"] : null) == (isset($context["last"]) ? $context["last"] : null))) {
            echo "disabled";
        }
        echo "\"><a href=\"";
        echo $this->env->getExtension('System')->appFilter(((isset($context["base"]) ? $context["base"] : null) . (isset($context["next"]) ? $context["next"] : null)));
        echo "\" class=\"fui-arrow-right\"></a></li>
    </ul>
</div>";
    }

    public function getTemplateName()
    {
        return "/Users/gaumup/Projects/ironmanvn/themes/responsiv-flat/partials/blog/pagination.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 30,  96 => 29,  81 => 27,  77 => 26,  68 => 24,  64 => 22,  60 => 20,  56 => 18,  54 => 17,  51 => 16,  47 => 14,  43 => 12,  41 => 11,  38 => 10,  34 => 8,  30 => 6,  28 => 5,  25 => 4,  21 => 2,  19 => 1,);
    }
}
/* {% if base is empty %}*/
/*     {% set base=( ''|app ) %}*/
/* {% endif %}*/
/* */
/* {% if ( total/perPage > 10 ) %}*/
/*     {% set range=10 %}*/
/* {% else %}*/
/*     {% set range=(total/perPage)|round(0, 'ceil') %}*/
/* {% endif %}*/
/* */
/* {% if ( current == 1 ) %}*/
/*     {% set prev=1 %}*/
/* {% else %}*/
/*     {% set prev=current-1 %}*/
/* {% endif %}*/
/* */
/* {% if ( current < last ) %}*/
/*     {% set next=current+1 %}*/
/* {% else %}*/
/*     {% set next=last %}*/
/* {% endif %}*/
/* <div class="pagination pull-right">*/
/*     <ul>*/
/*         <li class="previous {% if ( current == 1 ) %}disabled{% endif %}"><a href="{{ (base ~ prev)|app }}" class="fui-arrow-left"></a></li>*/
/* */
/*         {% for i in 1..range %}*/
/*             <li {% if ( current==i ) %}{{ 'class="active"' }}{% endif %}><a href="{{ (base ~ i)|app }}">{{ i }}</a></li>*/
/*         {% endfor %}*/
/* */
/*         <li class="next {% if ( current == last ) %}disabled{% endif %}"><a href="{{ (base ~ next)|app }}" class="fui-arrow-right"></a></li>*/
/*     </ul>*/
/* </div>*/
