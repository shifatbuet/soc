<?php

/* C:\xampp\htdocs\CakePHP-BoilerPlate\vendor\cakephp\bake\src\Template\Bake\Plugin\config\routes.php.twig */
class __TwigTemplate_e7463045b36fcbd7b8f33df2ef8395ff7e4d8630ef140afa5829232300f3025f extends Twig_Template
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
        // line 16
        echo "<?php
use Cake\\Routing\\RouteBuilder;
use Cake\\Routing\\Router;
use Cake\\Routing\\Route\\DashedRoute;

Router::plugin(
    '";
        // line 22
        echo twig_escape_filter($this->env, ($context["plugin"] ?? null), "html", null, true);
        echo "',
    ['path' => '/";
        // line 23
        echo twig_escape_filter($this->env, ($context["routePath"] ?? null), "html", null, true);
        echo "'],
    function (RouteBuilder \$routes) {
        \$routes->fallbacks(DashedRoute::class);
    }
);
";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\CakePHP-BoilerPlate\\vendor\\cakephp\\bake\\src\\Template\\Bake\\Plugin\\config\\routes.php.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 23,  27 => 22,  19 => 16,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @since         2.0.0
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
#}
<?php
use Cake\\Routing\\RouteBuilder;
use Cake\\Routing\\Router;
use Cake\\Routing\\Route\\DashedRoute;

Router::plugin(
    '{{ plugin }}',
    ['path' => '/{{ routePath }}'],
    function (RouteBuilder \$routes) {
        \$routes->fallbacks(DashedRoute::class);
    }
);
", "C:\\xampp\\htdocs\\CakePHP-BoilerPlate\\vendor\\cakephp\\bake\\src\\Template\\Bake\\Plugin\\config\\routes.php.twig", "C:\\xampp\\htdocs\\CakePHP-BoilerPlate\\vendor\\cakephp\\bake\\src\\Template\\Bake\\Plugin\\config\\routes.php.twig");
    }
}
