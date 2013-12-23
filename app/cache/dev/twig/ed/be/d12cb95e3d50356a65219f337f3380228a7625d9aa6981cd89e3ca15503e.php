<?php

/* WebProfilerBundle:Collector:exception.css.twig */
class __TwigTemplate_edbed12cb95e3d50356a65219f337f3380228a7625d9aa6981cd89e3ca15503e extends Twig_Template
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
        echo ".sf-reset .traces {
    padding-bottom: 14px;
}
.sf-reset .traces li {
    font-size: 12px;
    color: #868686;
    padding: 5px 4px;
    list-style-type: decimal;
    margin-left: 20px;
    white-space: break-word;
}
.sf-reset #logs .traces li.error {
    font-style: normal;
    color: #AA3333;
    background: #f9ecec;
}
.sf-reset #logs .traces li.warning {
    font-style: normal;
    background: #ffcc00;
}
/* fix for Opera not liking empty <li> */
.sf-reset .traces li:after {
    content: \"\\00A0\";
}
.sf-reset .trace {
    border: 1px solid #D3D3D3;
    padding: 10px;
    overflow: auto;
    margin: 10px 0 20px;
}
.sf-reset .block-exception {
    border-radius: 16px;
    margin-bottom: 20px;
    background-color: #f6f6f6;
    border: 1px solid #dfdfdf;
    padding: 30px 28px;
    word-wrap: break-word;
    overflow: hidden;
}
.sf-reset .block-exception div {
    color: #313131;
    font-size: 10px;
}
.sf-reset .block-exception-detected .illustration-exception,
.sf-reset .block-exception-detected .text-exception {
    float: left;
}
.sf-reset .block-exception-detected .illustration-exception {
    width: 152px;
}
.sf-reset .block-exception-detected .text-exception {
    width: 670px;
    padding: 30px 44px 24px 46px;
    position: relative;
}
.sf-reset .text-exception .open-quote,
.sf-reset .text-exception .close-quote {
    position: absolute;
}
.sf-reset .open-quote {
    top: 0;
    left: 0;
}
.sf-reset .close-quote {
    bottom: 0;
    right: 50px;
}
.sf-reset .block-exception p {
    font-family: Arial, Helvetica, sans-serif;
}
.sf-reset .block-exception p a,
.sf-reset .block-exception p a:hover {
    color: #565656;
}
.sf-reset .logs h2 {
    float: left;
    width: 654px;
}
.sf-reset .error-count {
    float: right;
    width: 170px;
    text-align: right;
}
.sf-reset .error-count span {
    display: inline-block;
    background-color: #aacd4e;
    border-radius: 6px;
    padding: 4px;
    color: white;
    margin-right: 2px;
    font-size: 11px;
    font-weight: bold;
}
.sf-reset .toggle {
    vertical-align: middle;
}
.sf-reset .linked ul,
.sf-reset .linked li {
    display: inline;
}
.sf-reset #output-content {
    color: #000;
    font-size: 12px;
}
";
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.css.twig";
    }

    public function getDebugInfo()
    {
        return array (  175 => 65,  118 => 49,  76 => 31,  462 => 202,  449 => 198,  446 => 197,  441 => 196,  439 => 195,  431 => 189,  429 => 188,  422 => 184,  415 => 180,  408 => 176,  401 => 172,  394 => 168,  380 => 160,  373 => 156,  361 => 146,  351 => 141,  348 => 140,  342 => 137,  338 => 135,  335 => 134,  323 => 128,  320 => 127,  315 => 125,  303 => 122,  300 => 121,  286 => 112,  275 => 105,  270 => 102,  267 => 101,  262 => 98,  256 => 96,  248 => 94,  226 => 84,  216 => 79,  213 => 78,  197 => 71,  194 => 70,  191 => 67,  185 => 66,  181 => 65,  178 => 66,  153 => 56,  150 => 55,  113 => 48,  90 => 27,  53 => 12,  349 => 131,  340 => 128,  336 => 127,  332 => 126,  329 => 131,  325 => 129,  308 => 114,  302 => 112,  295 => 110,  289 => 113,  281 => 105,  277 => 104,  274 => 103,  266 => 101,  249 => 98,  245 => 96,  233 => 87,  223 => 89,  207 => 75,  200 => 72,  186 => 67,  172 => 64,  165 => 60,  126 => 36,  97 => 24,  70 => 19,  34 => 8,  84 => 24,  81 => 23,  77 => 20,  23 => 2,  161 => 63,  146 => 44,  134 => 54,  129 => 14,  124 => 12,  114 => 31,  104 => 55,  100 => 39,  65 => 37,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 199,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 164,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 143,  341 => 105,  337 => 103,  322 => 101,  314 => 115,  312 => 124,  309 => 97,  305 => 113,  298 => 120,  294 => 90,  285 => 89,  283 => 106,  278 => 106,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 90,  229 => 85,  220 => 81,  214 => 83,  177 => 65,  169 => 60,  140 => 58,  132 => 15,  128 => 49,  107 => 36,  61 => 13,  273 => 96,  269 => 102,  254 => 92,  243 => 88,  240 => 95,  238 => 94,  235 => 74,  230 => 91,  227 => 90,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 63,  159 => 61,  143 => 56,  135 => 53,  119 => 40,  102 => 40,  71 => 19,  67 => 24,  63 => 15,  59 => 14,  38 => 6,  94 => 28,  89 => 44,  85 => 23,  75 => 17,  68 => 13,  56 => 9,  87 => 34,  21 => 2,  26 => 6,  93 => 28,  88 => 6,  78 => 21,  46 => 13,  27 => 3,  44 => 12,  31 => 4,  28 => 5,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 62,  156 => 58,  151 => 59,  142 => 59,  138 => 19,  136 => 41,  121 => 50,  117 => 32,  105 => 34,  91 => 25,  62 => 14,  49 => 14,  24 => 4,  25 => 1,  19 => 1,  79 => 18,  72 => 16,  69 => 38,  47 => 9,  40 => 8,  37 => 11,  22 => 2,  246 => 93,  157 => 56,  145 => 46,  139 => 42,  131 => 52,  123 => 42,  120 => 33,  115 => 43,  111 => 47,  108 => 36,  101 => 32,  98 => 28,  96 => 37,  83 => 33,  74 => 16,  66 => 15,  55 => 16,  52 => 10,  50 => 24,  43 => 12,  41 => 7,  35 => 6,  32 => 5,  29 => 3,  209 => 82,  203 => 73,  199 => 67,  193 => 71,  189 => 71,  187 => 84,  182 => 66,  176 => 63,  173 => 65,  168 => 61,  164 => 59,  162 => 59,  154 => 60,  149 => 45,  147 => 54,  144 => 49,  141 => 51,  133 => 35,  130 => 46,  125 => 51,  122 => 43,  116 => 39,  112 => 42,  109 => 28,  106 => 27,  103 => 32,  99 => 31,  95 => 27,  92 => 17,  86 => 28,  82 => 22,  80 => 32,  73 => 20,  64 => 23,  60 => 10,  57 => 9,  54 => 8,  51 => 14,  48 => 23,  45 => 10,  42 => 19,  39 => 6,  36 => 5,  33 => 4,  30 => 3,);
    }
}
