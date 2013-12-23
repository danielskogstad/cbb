<?php

/* CbbBundle::pagelayout.html.twig */
class __TwigTemplate_9173dc637f005ab31956721c2134e47c2dc19cab527666a12f7b4a9a8d32abb9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'meta_description' => array($this, 'block_meta_description'),
            'favicon' => array($this, 'block_favicon'),
            'title' => array($this, 'block_title'),
            'navigation' => array($this, 'block_navigation'),
            'slider' => array($this, 'block_slider'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<!--[if lt IE 7 ]><html class=\"ie ie6\" lang=\"en\"> <![endif]-->
<!--[if IE 7 ]><html class=\"ie ie7\" lang=\"en\"> <![endif]-->
<!--[if IE 8 ]><html class=\"ie ie8\" lang=\"en\"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->

<html lang=\"en\">
<head>
    <meta charset=\"utf-8\">
    <meta content=\"width=device-width, initial-scale=1.0\" name=\"viewport\">
    ";
        // line 11
        $this->displayBlock('meta_description', $context, $blocks);
        // line 14
        echo "    ";
        $this->displayBlock('favicon', $context, $blocks);
        // line 19
        echo "    ";
        $this->displayBlock('title', $context, $blocks);
        // line 22
        echo "    
    ";
        // line 23
        $this->env->loadTemplate("CbbBundle::pageassets_top.html.twig")->display($context);
        // line 24
        echo "</head>
<body>
    <header id=\"header\">
        <div class=\"navbar navbar-inverse navbar-fixed-top\" id=\"nav\">
            <div class=\"ribbon-top\"></div>
            <div class=\"container\">
                <div class=\"navbar-header\">
                    <button class=\"navbar-toggle\" data-target=\".navbar-collapse\" data-toggle=\"collapse\" type=\"button\">
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                    </button>
                    <a class=\"navbar-brand\" href=\"/\">
                        ";
        // line 37
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "6f83a0c_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_6f83a0c_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/images/6f83a0c_logo_1.png");
            // line 38
            echo "                            <img alt=\"CrimsonBattleBunnies\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\">
                        ";
        } else {
            // asset "6f83a0c"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_6f83a0c") : $this->env->getExtension('assets')->getAssetUrl("_controller/images/6f83a0c.png");
            echo "                            <img alt=\"CrimsonBattleBunnies\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\">
                        ";
        }
        unset($context["asset_url"]);
        // line 40
        echo "                    </a>
                </div>
                
                <div class=\"navbar-collapse collapse\">
                    ";
        // line 44
        $this->displayBlock('navigation', $context, $blocks);
        // line 47
        echo "                </div>
            </div>
        </div>
    </header>
    
    ";
        // line 52
        $this->displayBlock('slider', $context, $blocks);
        // line 53
        echo "    
    <div id=\"wrapper-content\">
        ";
        // line 55
        $this->displayBlock('content', $context, $blocks);
        // line 56
        echo "    </div>
    
    <footer id=\"footer\">
    
    </footer>
    
    ";
        // line 62
        $this->env->loadTemplate("CbbBundle::pageassets_bottom.html.twig")->display($context);
        // line 63
        echo "</body>
</html>";
    }

    // line 11
    public function block_meta_description($context, array $blocks = array())
    {
        // line 12
        echo "        <meta content=\"\" name=\"description\">
    ";
    }

    // line 14
    public function block_favicon($context, array $blocks = array())
    {
        // line 15
        echo "        ";
        // line 18
        echo "    ";
    }

    // line 19
    public function block_title($context, array $blocks = array())
    {
        // line 20
        echo "        <title>CrimsonBattleBunnies</title>
    ";
    }

    // line 44
    public function block_navigation($context, array $blocks = array())
    {
        // line 45
        echo "                        ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("CbbBundle:Content:mainMenu"));
        echo "
                    ";
    }

    // line 52
    public function block_slider($context, array $blocks = array())
    {
    }

    // line 55
    public function block_content($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "CbbBundle::pagelayout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  161 => 55,  156 => 52,  149 => 45,  146 => 44,  141 => 20,  138 => 19,  134 => 18,  132 => 15,  129 => 14,  124 => 12,  121 => 11,  116 => 63,  114 => 62,  106 => 56,  104 => 55,  100 => 53,  98 => 52,  91 => 47,  89 => 44,  83 => 40,  69 => 38,  65 => 37,  50 => 24,  48 => 23,  45 => 22,  42 => 19,  39 => 14,  37 => 11,  25 => 1,  31 => 4,  28 => 3,);
    }
}
