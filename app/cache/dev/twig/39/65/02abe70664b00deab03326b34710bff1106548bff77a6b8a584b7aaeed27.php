<?php

/* CbbBundle:Parts:raidprogress.html.twig */
class __TwigTemplate_396502abe70664b00deab03326b34710bff1106548bff77a6b8a584b7aaeed27 extends Twig_Template
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
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["progress"]) ? $context["progress"] : $this->getContext($context, "progress")));
        foreach ($context['_seq'] as $context["_key"] => $context["raid"]) {
            // line 2
            echo "    <div class=\"categories\">
        <div class=\"header\">
            <span style=\"color:#2ac0ff\">PROGRESS //</span>
            <a href=\"#\">";
            // line 5
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["raid"]) ? $context["raid"] : $this->getContext($context, "raid")), "name"), "html", null, true);
            echo "</a>
        </div>
        <ul>
        ";
            // line 8
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["raid"]) ? $context["raid"] : $this->getContext($context, "raid")), "bosses"));
            foreach ($context['_seq'] as $context["_key"] => $context["boss"]) {
                // line 9
                echo "            <li class=\"boss ";
                if ($this->getAttribute((isset($context["boss"]) ? $context["boss"] : null), "heroicKills", array(), "any", true, true)) {
                    if (($this->getAttribute((isset($context["boss"]) ? $context["boss"] : $this->getContext($context, "boss")), "heroicKills") > 0)) {
                        echo "heroic";
                    }
                }
                if ($this->getAttribute((isset($context["boss"]) ? $context["boss"] : null), "normalKills", array(), "any", true, true)) {
                    if (($this->getAttribute((isset($context["boss"]) ? $context["boss"] : $this->getContext($context, "boss")), "normalKills") > 0)) {
                        echo "normal";
                    }
                }
                echo "\">
                <a href=\"#\" class=\"bossDetails tooltip\" title=\"<div style='width:130px;height:100px;'><img src='";
                // line 10
                echo twig_escape_filter($this->env, $this->env->getExtension('bossImage')->getImageUrl($this->getAttribute((isset($context["boss"]) ? $context["boss"] : $this->getContext($context, "boss")), "name")), "html", null, true);
                echo "' onerror='\$(this).hide()' style='border-bottom:2px solid #333;' />
                    <span style='font-size:10px;'> 
                    ";
                // line 12
                if ($this->getAttribute((isset($context["boss"]) ? $context["boss"] : null), "normalKills", array(), "any", true, true)) {
                    // line 13
                    echo "                        <strong>Normal kill:</strong>
                        ";
                    // line 14
                    if (($this->getAttribute((isset($context["boss"]) ? $context["boss"] : $this->getContext($context, "boss")), "normalKills") > 0)) {
                        // line 15
                        echo "                            ";
                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, ($this->getAttribute((isset($context["boss"]) ? $context["boss"] : $this->getContext($context, "boss")), "normalTimestamp") / 1000), "d.m.Y"), "html", null, true);
                        echo "<br />
                        ";
                    } else {
                        // line 17
                        echo "                            N/A <br />
                        ";
                    }
                    // line 19
                    echo "                    ";
                }
                // line 20
                echo "                    ";
                if ($this->getAttribute((isset($context["boss"]) ? $context["boss"] : null), "heroicKills", array(), "any", true, true)) {
                    // line 21
                    echo "                        <strong>Heroic kill:</strong>
                        ";
                    // line 22
                    if (($this->getAttribute((isset($context["boss"]) ? $context["boss"] : $this->getContext($context, "boss")), "heroicKills") > 0)) {
                        // line 23
                        echo "                            ";
                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, ($this->getAttribute((isset($context["boss"]) ? $context["boss"] : $this->getContext($context, "boss")), "heroicTimestamp") / 1000), "d.m.Y"), "html", null, true);
                        echo " <br />
                        ";
                    } else {
                        // line 25
                        echo "                            N/A <br />
                        ";
                    }
                    // line 27
                    echo "                    ";
                }
                // line 28
                echo "                    </span>
                \">  
                    ";
                // line 30
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["boss"]) ? $context["boss"] : $this->getContext($context, "boss")), "name"), "html", null, true);
                echo "
                    ";
                // line 31
                if ($this->getAttribute((isset($context["boss"]) ? $context["boss"] : null), "heroicKills", array(), "any", true, true)) {
                    if (($this->getAttribute((isset($context["boss"]) ? $context["boss"] : $this->getContext($context, "boss")), "heroicKills") > 0)) {
                        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
                            // asset "8cd976d_0"
                            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_8cd976d_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/images/8cd976d_heroic_1.gif");
                            echo "<img src=\"";
                            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
                            echo "\" style=\"height:12px;margin-left:5px;\" alt=\"heroic\" />";
                        } else {
                            // asset "8cd976d"
                            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_8cd976d") : $this->env->getExtension('assets')->getAssetUrl("_controller/images/8cd976d.gif");
                            echo "<img src=\"";
                            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
                            echo "\" style=\"height:12px;margin-left:5px;\" alt=\"heroic\" />";
                        }
                        unset($context["asset_url"]);
                    }
                }
                echo " 
                </a>
            </li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['boss'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 35
            echo "        </ul>
    </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['raid'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "CbbBundle:Parts:raidprogress.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 17,  34 => 8,  84 => 18,  81 => 17,  77 => 20,  23 => 2,  161 => 55,  146 => 44,  134 => 18,  129 => 14,  124 => 12,  114 => 62,  104 => 55,  100 => 53,  65 => 37,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 15,  128 => 49,  107 => 36,  61 => 13,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 53,  119 => 42,  102 => 30,  71 => 19,  67 => 15,  63 => 15,  59 => 13,  38 => 9,  94 => 28,  89 => 44,  85 => 23,  75 => 17,  68 => 14,  56 => 9,  87 => 25,  21 => 2,  26 => 6,  93 => 28,  88 => 6,  78 => 21,  46 => 7,  27 => 4,  44 => 12,  31 => 4,  28 => 5,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 52,  151 => 63,  142 => 59,  138 => 19,  136 => 56,  121 => 11,  117 => 44,  105 => 40,  91 => 25,  62 => 14,  49 => 19,  24 => 4,  25 => 1,  19 => 1,  79 => 18,  72 => 16,  69 => 38,  47 => 9,  40 => 8,  37 => 11,  22 => 2,  246 => 90,  157 => 56,  145 => 46,  139 => 45,  131 => 52,  123 => 47,  120 => 40,  115 => 43,  111 => 37,  108 => 36,  101 => 32,  98 => 28,  96 => 31,  83 => 22,  74 => 19,  66 => 15,  55 => 15,  52 => 10,  50 => 24,  43 => 8,  41 => 7,  35 => 5,  32 => 4,  29 => 3,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 57,  154 => 58,  149 => 45,  147 => 58,  144 => 49,  141 => 20,  133 => 35,  130 => 41,  125 => 44,  122 => 43,  116 => 63,  112 => 42,  109 => 34,  106 => 31,  103 => 32,  99 => 31,  95 => 27,  92 => 17,  86 => 28,  82 => 22,  80 => 21,  73 => 12,  64 => 15,  60 => 6,  57 => 12,  54 => 10,  51 => 14,  48 => 23,  45 => 22,  42 => 19,  39 => 14,  36 => 5,  33 => 4,  30 => 7,);
    }
}
