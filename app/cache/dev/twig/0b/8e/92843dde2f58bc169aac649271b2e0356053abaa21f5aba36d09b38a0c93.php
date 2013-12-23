<?php

/* TedivmStashBundle:Profiler:layout.html.twig */
class __TwigTemplate_0b8e92843dde2f58bc169aac649271b2e0356053abaa21f5aba36d09b38a0c93 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("WebProfilerBundle:Profiler:layout.html.twig");

        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "WebProfilerBundle:Profiler:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        <img width=\"22\" height=\"28\" alt=\"Memory Usage\" style=\"vertical-align: middle;\" src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABYAAAAcCAYAAABlL09dAAAABGdBTUEAALGPC/xhBQAAAAZiS0dEAP8A/wD/oL2nkwAAAAlwSFlzAAALEwAACxMBAJqcGAAAAAd0SU1FB9wHGAALFQCM6LQAAAFwSURBVEjH7ZW9S4JRFIefRAoaAmlpbguCiKaGIqjh1FI0SV+vH6G2BmW4RlJG0Rj08RcE0aI3bGqPioagD6IpSEISGiSiBt/ATK+91ynwLBfOOffhx+/cD6jHv40GpVQ7EDXcnxCR+7JgAKVUGhgyAJ8CAyLyWVpw2esC8GEA7gesiopt1btA0AD+AnSISKacYoAYkDMAtwKJSlYgIs/AmuEQLaXUYHHCXdKwBdxqAFlN7UkH7jQ8Hd9z2gZuROTNXZQcBg6AZgPmOxAC2gAvEHXZUC9wZAjNASPAgy2ssdiKa6DX0IEM0GJfluYfHi8txi5qeRdWE/F5wFPpHNf05pQm3Lru4GyAyakJPJ6CmO6unkqtLkdgf8DHxvomyWSKfD7vSLHWipXlOGPjo6RPjglHQo680YJTKYU17ScSnsPyzehamxxZcX55VrjH2Sx7O/t/teKxKlgzrHLgV8AvIodVwQ7iDugTkav6b/8rvgBcMlqf0kD/YAAAAABJRU5ErkJggg==\"/>
        <span class=\"sf-toolbar-status sf-toolbar-status-green\">";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "calls"), "html", null, true);
        echo " call";
        if (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "calls") != 1)) {
            echo "s";
        }
        echo " / ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hits"), "html", null, true);
        echo " hit";
        if (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hits") != 1)) {
            echo "s";
        }
        echo "</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "    ";
        ob_start();
        // line 9
        echo "        <div class=\"sf-toolbar-info-piece\">
                <b>Total Response</b> <span class=\"sf-toolbar-status sf-toolbar-status-green\">";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "calls"), "html", null, true);
        echo " / ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hits"), "html", null, true);
        echo "</span>
        </div>
        <div class=\"sf-toolbar-info-piece\">
                <b>Default Queue</b> <span>";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "default"), "html", null, true);
        echo "</span>
        </div>
        <div class=\"sf-toolbar-info-piece\">
                <b>Av. Handlers</b> <span>";
        // line 16
        echo twig_escape_filter($this->env, twig_join_filter($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "handlers"), ", "), "html", null, true);
        echo "</span>
        </div>
        ";
        // line 18
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "caches"));
        foreach ($context['_seq'] as $context["name"] => $context["details"]) {
            // line 19
            echo "            <hr style=\"border: 1px solid #ccc;\">
            <div class=\"sf-toolbar-info-piece\">
                <b><i>";
            // line 21
            echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
            echo "</i></b> <span class=\"sf-toolbar-status sf-toolbar-status-green\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["details"]) ? $context["details"] : $this->getContext($context, "details")), "calls"), "html", null, true);
            echo " / ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["details"]) ? $context["details"] : $this->getContext($context, "details")), "hits"), "html", null, true);
            echo "</span>
            </div>
            <div class=\"sf-toolbar-info-piece\">
                <b>Handlers</b> <span>";
            // line 24
            echo twig_escape_filter($this->env, twig_join_filter($this->getAttribute($this->getAttribute((isset($context["details"]) ? $context["details"] : $this->getContext($context, "details")), "options"), "handlers"), ", "), "html", null, true);
            echo "</span>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['name'], $context['details'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "    ";
        $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 28
        echo "    ";
        $this->env->loadTemplate("WebProfilerBundle:Profiler:toolbar_item.html.twig")->display(array_merge($context, array("link" => (isset($context["profiler_url"]) ? $context["profiler_url"] : $this->getContext($context, "profiler_url")))));
    }

    // line 31
    public function block_menu($context, array $blocks = array())
    {
        // line 32
        echo "<span class=\"label\">
    <span class=\"icon\"><img src=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/tedivmstash/images/stash.png"), "html", null, true);
        echo "\" alt=\"\" /></span>
    <strong>Stash</strong>
    <span class=\"count\">
        <span>";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "calls"), "html", null, true);
        echo " / ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hits"), "html", null, true);
        echo "</span>
    </span>
</span>
";
    }

    // line 41
    public function block_panel($context, array $blocks = array())
    {
        // line 42
        echo "    <h2>Cache Information</h2>
    <table>
        <tr>
            <th>Default Cache</th>
            <td>";
        // line 46
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "default"), "html", null, true);
        echo "</td>
        <tr>
            <th>Available Handlers</th>
            <td>";
        // line 49
        echo twig_escape_filter($this->env, twig_join_filter($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "handlers"), ", "), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Total Requests</th>
            <td>";
        // line 53
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "calls"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Total Hits</th>
            <td>";
        // line 57
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hits"), "html", null, true);
        echo "</td>
        </tr>
    </table>

    ";
        // line 61
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "caches"));
        foreach ($context['_seq'] as $context["name"] => $context["details"]) {
            // line 62
            echo "
        <h2>Cache Service: <i>";
            // line 63
            echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
            echo "</i></h2>
        <table>
            <tr>
                <th>Handlers</th>
                <td>";
            // line 67
            echo twig_escape_filter($this->env, twig_join_filter($this->getAttribute($this->getAttribute((isset($context["details"]) ? $context["details"] : $this->getContext($context, "details")), "options"), "handlers"), ", "), "html", null, true);
            echo "</td>
            </tr>
            <tr>
                <th>Calls</th>
                <td>";
            // line 71
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["details"]) ? $context["details"] : $this->getContext($context, "details")), "calls"), "html", null, true);
            echo "</td>
            </tr>
            <tr>
                <th>Hits</th>
                <td>";
            // line 75
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["details"]) ? $context["details"] : $this->getContext($context, "details")), "hits"), "html", null, true);
            echo "</td>
            </tr>
            <tr>
                <th>Doctrine Adapter</th>
                <td>";
            // line 79
            echo (($this->getAttribute($this->getAttribute((isset($context["details"]) ? $context["details"] : $this->getContext($context, "details")), "options"), "registerDoctrineAdapter")) ? ("true") : ("false"));
            echo "</td>
            </tr>
            <tr>
                <th>Cache In-Memory</th>
                <td>";
            // line 83
            echo (($this->getAttribute($this->getAttribute((isset($context["details"]) ? $context["details"] : $this->getContext($context, "details")), "options"), "inMemory")) ? ("true") : ("false"));
            echo "</td>
            </tr>
        </table>

        <h3>Handler Options</h3>
        <table>
            ";
            // line 89
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["details"]) ? $context["details"] : $this->getContext($context, "details")), "options"));
            foreach ($context['_seq'] as $context["name"] => $context["options"]) {
                // line 90
                echo "                ";
                if ((((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")) != "handlers") && twig_in_filter((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), $this->getAttribute($this->getAttribute((isset($context["details"]) ? $context["details"] : $this->getContext($context, "details")), "options"), "handlers")))) {
                    // line 91
                    echo "                    <tr>
                        <th colspan=\"2\"><h3 style=\"font-size: 16px; margin-bottom: 0;\">";
                    // line 92
                    echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
                    echo " settings</h3></th>
                    </tr>
                    ";
                    // line 94
                    if (((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")) == "Memcache")) {
                        // line 95
                        echo "                        ";
                        $context['_parent'] = (array) $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "servers"));
                        foreach ($context['_seq'] as $context["_key"] => $context["ovalue"]) {
                            // line 96
                            echo "                            <tr>
                                <th>Server</th>
                                <td>";
                            // line 98
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ovalue"]) ? $context["ovalue"] : $this->getContext($context, "ovalue")), "server"), "html", null, true);
                            echo ":";
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ovalue"]) ? $context["ovalue"] : $this->getContext($context, "ovalue")), "port"), "html", null, true);
                            echo " ";
                            if ($this->getAttribute((isset($context["ovalue"]) ? $context["ovalue"] : null), "weight", array(), "any", true, true)) {
                                echo "(weight ";
                                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ovalue"]) ? $context["ovalue"] : $this->getContext($context, "ovalue")), "weight"), "html", null, true);
                                echo ")";
                            }
                            echo "</td>
                            </tr>
                        ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ovalue'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 101
                        echo "                    ";
                    } else {
                        // line 102
                        echo "                        ";
                        $context['_parent'] = (array) $context;
                        $context['_seq'] = twig_ensure_traversable((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")));
                        foreach ($context['_seq'] as $context["oname"] => $context["ovalue"]) {
                            // line 103
                            echo "                            <tr>
                                <th>";
                            // line 104
                            echo twig_escape_filter($this->env, (isset($context["oname"]) ? $context["oname"] : $this->getContext($context, "oname")), "html", null, true);
                            echo "</th>
                                ";
                            // line 105
                            if ((((isset($context["oname"]) ? $context["oname"] : $this->getContext($context, "oname")) == "filePermissions") || ((isset($context["oname"]) ? $context["oname"] : $this->getContext($context, "oname")) == "dirPermissions"))) {
                                // line 106
                                echo "                                    <td>";
                                echo twig_escape_filter($this->env, sprintf("%o", (isset($context["ovalue"]) ? $context["ovalue"] : $this->getContext($context, "ovalue"))), "html", null, true);
                                echo "
                                ";
                            } else {
                                // line 108
                                echo "                                    <td>";
                                echo twig_escape_filter($this->env, (isset($context["ovalue"]) ? $context["ovalue"] : $this->getContext($context, "ovalue")), "html", null, true);
                                echo "</td>
                                ";
                            }
                            // line 110
                            echo "                            </tr>
                        ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['oname'], $context['ovalue'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 112
                        echo "                    ";
                    }
                    // line 113
                    echo "                ";
                }
                // line 114
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['name'], $context['options'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 115
            echo "        </table>

        <h3>Query Record</h3>
        <table>
            <tr>
                <th>Request Key</th>
                <th>Hit?</th>
                <th>Returned Value</th>
            </tr>
            ";
            // line 124
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["details"]) ? $context["details"] : $this->getContext($context, "details")), "queries"));
            foreach ($context['_seq'] as $context["_key"] => $context["query"]) {
                // line 125
                echo "                <tr>
                    <td>";
                // line 126
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["query"]) ? $context["query"] : $this->getContext($context, "query")), "key"), "html", null, true);
                echo "</td>
                    <td>";
                // line 127
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["query"]) ? $context["query"] : $this->getContext($context, "query")), "hit"), "html", null, true);
                echo "</td>
                    <td>";
                // line 128
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["query"]) ? $context["query"] : $this->getContext($context, "query")), "value"), "html", null, true);
                echo "</td>
                </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['query'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 131
            echo "        </table>


    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['name'], $context['details'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "TedivmStashBundle:Profiler:layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  349 => 131,  336 => 127,  308 => 114,  277 => 104,  266 => 101,  249 => 98,  245 => 96,  223 => 89,  186 => 67,  126 => 36,  114 => 31,  97 => 24,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  398 => 129,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  362 => 110,  360 => 109,  337 => 103,  322 => 101,  314 => 115,  305 => 113,  294 => 90,  268 => 85,  264 => 84,  252 => 80,  247 => 78,  214 => 83,  177 => 65,  169 => 60,  132 => 51,  128 => 49,  107 => 36,  254 => 92,  240 => 95,  238 => 94,  230 => 91,  221 => 77,  219 => 76,  217 => 75,  204 => 72,  171 => 61,  138 => 54,  135 => 53,  78 => 21,  71 => 17,  209 => 82,  193 => 71,  149 => 51,  133 => 42,  103 => 32,  95 => 28,  86 => 24,  57 => 9,  48 => 8,  672 => 345,  668 => 344,  664 => 342,  651 => 337,  647 => 336,  644 => 335,  640 => 334,  631 => 327,  626 => 325,  613 => 320,  609 => 319,  602 => 317,  593 => 310,  591 => 309,  588 => 308,  585 => 307,  581 => 305,  577 => 303,  569 => 300,  563 => 298,  559 => 296,  557 => 295,  552 => 293,  548 => 292,  545 => 291,  541 => 290,  533 => 284,  531 => 283,  525 => 280,  519 => 278,  515 => 276,  509 => 272,  505 => 270,  499 => 268,  497 => 267,  489 => 262,  483 => 258,  479 => 256,  473 => 254,  471 => 253,  465 => 249,  463 => 248,  459 => 246,  457 => 153,  454 => 244,  448 => 240,  444 => 149,  438 => 236,  436 => 235,  428 => 230,  418 => 224,  412 => 222,  410 => 221,  402 => 130,  400 => 214,  397 => 213,  393 => 126,  383 => 207,  376 => 205,  365 => 111,  347 => 191,  317 => 185,  313 => 183,  304 => 181,  295 => 110,  285 => 89,  273 => 96,  205 => 108,  201 => 106,  179 => 63,  159 => 61,  93 => 28,  77 => 20,  51 => 10,  34 => 5,  31 => 4,  810 => 492,  807 => 491,  796 => 489,  792 => 488,  788 => 486,  775 => 485,  749 => 479,  746 => 478,  727 => 476,  710 => 475,  706 => 473,  702 => 472,  698 => 471,  694 => 470,  690 => 469,  686 => 468,  682 => 467,  679 => 466,  677 => 465,  660 => 340,  649 => 462,  634 => 456,  629 => 326,  625 => 453,  622 => 323,  620 => 451,  606 => 318,  601 => 446,  567 => 414,  549 => 411,  532 => 410,  529 => 409,  527 => 281,  522 => 279,  517 => 404,  199 => 67,  196 => 92,  188 => 102,  182 => 66,  173 => 65,  68 => 13,  62 => 12,  28 => 3,  357 => 123,  344 => 119,  341 => 105,  332 => 126,  327 => 114,  324 => 113,  318 => 111,  306 => 107,  297 => 179,  291 => 102,  263 => 95,  258 => 81,  243 => 88,  231 => 83,  224 => 71,  212 => 78,  202 => 94,  190 => 76,  187 => 70,  174 => 65,  143 => 56,  136 => 41,  122 => 43,  117 => 32,  112 => 35,  104 => 32,  85 => 25,  75 => 19,  58 => 25,  44 => 9,  161 => 63,  158 => 53,  154 => 58,  151 => 49,  140 => 55,  125 => 44,  121 => 50,  118 => 49,  100 => 39,  87 => 21,  49 => 14,  46 => 7,  27 => 3,  91 => 27,  88 => 25,  63 => 15,  389 => 160,  386 => 159,  378 => 157,  371 => 156,  367 => 198,  363 => 126,  358 => 151,  353 => 193,  345 => 147,  343 => 146,  340 => 128,  334 => 141,  331 => 140,  328 => 139,  326 => 138,  321 => 112,  309 => 97,  307 => 128,  302 => 112,  296 => 121,  293 => 120,  290 => 119,  288 => 176,  283 => 106,  281 => 105,  276 => 111,  274 => 103,  269 => 102,  265 => 96,  259 => 103,  255 => 93,  253 => 100,  235 => 74,  232 => 88,  227 => 90,  222 => 83,  210 => 77,  208 => 68,  189 => 71,  184 => 101,  175 => 65,  170 => 96,  166 => 95,  163 => 62,  155 => 47,  152 => 46,  144 => 49,  127 => 35,  109 => 28,  94 => 28,  82 => 22,  76 => 34,  61 => 13,  39 => 6,  36 => 5,  79 => 18,  72 => 17,  69 => 16,  54 => 8,  47 => 9,  42 => 7,  40 => 11,  37 => 10,  22 => 1,  164 => 59,  157 => 89,  145 => 46,  139 => 42,  131 => 52,  120 => 33,  115 => 39,  111 => 37,  108 => 36,  106 => 27,  101 => 32,  98 => 31,  92 => 27,  83 => 19,  80 => 21,  74 => 16,  66 => 11,  60 => 10,  55 => 24,  52 => 12,  50 => 10,  41 => 8,  32 => 4,  29 => 3,  462 => 202,  453 => 151,  449 => 198,  446 => 197,  441 => 196,  439 => 195,  431 => 189,  429 => 188,  422 => 226,  415 => 180,  408 => 176,  401 => 172,  394 => 168,  387 => 122,  380 => 206,  373 => 156,  361 => 195,  355 => 106,  351 => 192,  348 => 140,  342 => 137,  338 => 135,  335 => 134,  329 => 125,  325 => 124,  323 => 128,  320 => 127,  315 => 110,  312 => 98,  303 => 106,  300 => 180,  298 => 91,  289 => 108,  286 => 112,  278 => 86,  275 => 105,  270 => 102,  267 => 101,  262 => 98,  256 => 96,  248 => 97,  246 => 90,  241 => 77,  233 => 92,  229 => 73,  226 => 84,  220 => 70,  216 => 79,  213 => 78,  207 => 79,  203 => 78,  200 => 75,  197 => 104,  194 => 68,  191 => 67,  185 => 74,  181 => 65,  178 => 66,  176 => 62,  172 => 61,  168 => 62,  165 => 57,  162 => 59,  156 => 62,  153 => 77,  150 => 55,  147 => 58,  141 => 48,  134 => 54,  130 => 41,  123 => 61,  119 => 42,  116 => 41,  113 => 48,  105 => 25,  102 => 32,  99 => 31,  96 => 37,  90 => 26,  84 => 40,  81 => 23,  73 => 19,  70 => 15,  67 => 15,  64 => 14,  59 => 14,  53 => 12,  45 => 8,  43 => 12,  38 => 6,  35 => 5,  33 => 4,  30 => 3,);
    }
}
