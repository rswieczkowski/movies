<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* ./base.html.twig */
class __TwigTemplate_e3dcd9747b5ea3aad46629adc9135dfa extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'header' => [$this, 'block_header'],
            'body' => [$this, 'block_body'],
            'footer' => [$this, 'block_footer'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "./base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    <link rel=\"icon\" href=\"data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 128 128%22><text y=%221.2em%22 font-size=%2296%22>⚫️</text></svg>\">
    <script src=\"https://cdn.tailwindcss.com\"></script>
    <script src=\"https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.3.5/dist/alpine.min.js\" defer></script>
</head>
<body class=\"bg-gray-100 h-screen antialiased leading-none font-sans\">
";
        // line 11
        $this->displayBlock('header', $context, $blocks);
        // line 101
        echo "
";
        // line 102
        $this->displayBlock('body', $context, $blocks);
        // line 103
        echo "
";
        // line 104
        $this->displayBlock('footer', $context, $blocks);
        // line 111
        echo "</body>
</html>";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 11
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        // line 12
        echo "    <header>
        <nav
                class=\"flex items-center justify-between flex-wrap p-6 fixed w-full z-10 top-0\"
                x-data=\"{ isOpen: false }\"
                @keydown.escape=\"isOpen = false\"
                :class=\"{ 'shadow-lg bg-gray-600' : isOpen , 'bg-gray-600' : !isOpen}\">

            <div class=\"flex items-center flex-shrink-0 text-white mr-6\">
                <a
                        class=\"text-white no-underline hover:text-white hover:no-underline\"
                        href=\"/\">
            <span class=\"text-2xl pl-2 font-extrabold\">
                Movies
            </span>
                </a>
            </div>

            <button
                    @click=\"isOpen = !isOpen\"
                    type=\"button\"
                    class=\"block lg:hidden px-2 text-gray-500 hover:text-white focus:outline-none focus:text-white\"
                    :class=\"{ 'transition transform-180': isOpen }\">

                <svg
                        class=\"h-6 w-6 fill-current\"
                        xmlns=\"http://www.w3.org/2000/svg\"
                        viewBox=\"0 0 24 24\">

                    <path
                            x-show=\"isOpen\"
                            fill-rule=\"evenodd\"
                            clip-rule=\"evenodd\"
                            d=\"M18.278 16.864a1 1 0 0 1-1.414 1.414l-4.829-4.828-4.828 4.828a1 1 0 0 1-1.414-1.414l4.828-4.829-4.828-4.828a1 1 0 0 1 1.414-1.414l4.829 4.828 4.828-4.828a1 1 0 1 1 1.414 1.414l-4.828 4.829 4.828 4.828z\"
                    />

                    <path
                            x-show=\"!isOpen\"
                            fill-rule=\"evenodd\"
                            d=\"M4 5h16a1 1 0 0 1 0 2H4a1 1 0 1 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2z\"
                    />
                </svg>
            </button>

            <div
                    class=\"w-full flex-grow lg:flex lg:items-center lg:w-auto\"
                    :class=\"{ 'block shadow-3xl': isOpen, 'hidden': !isOpen }\"
                    @click.away=\"isOpen = false\"
                    x-show.transition=\"true\">

                <ul class=\"pt-6 lg:pt-0 list-reset lg:flex justify-end flex-1 items-center\">
                    <li class=\"mr-3\">
                        <a
                                class=\"inline-block text-gray-300 no-underline hover:text-gray-200 hover:text-underline py-2 px-4\"
                                href=\"/\"
                                @click=\"isOpen = false\">
                            Home
                        </a>
                    </li>

                    <li class=\"mr-3\">
                        <a
                                class=\"inline-block text-gray-300 no-underline hover:text-gray-200 hover:text-underline py-2 px-4\"
                                href=\"/movies\"
                                @click=\"isOpen = false\"
                        >Movies
                        </a>
                    </li>

                    <li class=\"mr-3\">
                        <a
                                class=\"inline-block text-gray-300 no-underline hover:text-gray-200 hover:text-underline py-2 px-4\"
                                href=\"/contact\"
                                @click=\"isOpen = false\">
                            Contact
                        </a>
                    </li>
                    <li class=\"mr-3\">
                        <a
                                class=\"inline-block text-gray-300 no-underline hover:text-gray-200 hover:text-underline py-2 px-4\"
                                href=\"/";
        // line 91
        echo ((twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 91, $this->source); })()), "user", [], "any", false, false, false, 91)) ? ("logout") : ("login"));
        echo "\"
                                @click=\"isOpen = false\">
                            ";
        // line 93
        echo ((twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 93, $this->source); })()), "user", [], "any", false, false, false, 93)) ? ("Logout") : ("Login"));
        echo "
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 102
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 104
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        // line 105
        echo "    <footer class=\"bg-gray-600 py-6 mt-20\">
        <p class=\"w-25 w-4/5 text-center pb-3 m-auto text-base text-gray-100 pt-6\">
            Copyright 2021 Code With Dary. All Rights Reserved
        </p>
    </footer>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "./base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  219 => 105,  212 => 104,  200 => 102,  185 => 93,  180 => 91,  99 => 12,  92 => 11,  79 => 5,  71 => 111,  69 => 104,  66 => 103,  64 => 102,  61 => 101,  59 => 11,  50 => 5,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <title>{% block title %}Welcome!{% endblock %}</title>
    <link rel=\"icon\" href=\"data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 128 128%22><text y=%221.2em%22 font-size=%2296%22>⚫️</text></svg>\">
    <script src=\"https://cdn.tailwindcss.com\"></script>
    <script src=\"https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.3.5/dist/alpine.min.js\" defer></script>
</head>
<body class=\"bg-gray-100 h-screen antialiased leading-none font-sans\">
{% block header %}
    <header>
        <nav
                class=\"flex items-center justify-between flex-wrap p-6 fixed w-full z-10 top-0\"
                x-data=\"{ isOpen: false }\"
                @keydown.escape=\"isOpen = false\"
                :class=\"{ 'shadow-lg bg-gray-600' : isOpen , 'bg-gray-600' : !isOpen}\">

            <div class=\"flex items-center flex-shrink-0 text-white mr-6\">
                <a
                        class=\"text-white no-underline hover:text-white hover:no-underline\"
                        href=\"/\">
            <span class=\"text-2xl pl-2 font-extrabold\">
                Movies
            </span>
                </a>
            </div>

            <button
                    @click=\"isOpen = !isOpen\"
                    type=\"button\"
                    class=\"block lg:hidden px-2 text-gray-500 hover:text-white focus:outline-none focus:text-white\"
                    :class=\"{ 'transition transform-180': isOpen }\">

                <svg
                        class=\"h-6 w-6 fill-current\"
                        xmlns=\"http://www.w3.org/2000/svg\"
                        viewBox=\"0 0 24 24\">

                    <path
                            x-show=\"isOpen\"
                            fill-rule=\"evenodd\"
                            clip-rule=\"evenodd\"
                            d=\"M18.278 16.864a1 1 0 0 1-1.414 1.414l-4.829-4.828-4.828 4.828a1 1 0 0 1-1.414-1.414l4.828-4.829-4.828-4.828a1 1 0 0 1 1.414-1.414l4.829 4.828 4.828-4.828a1 1 0 1 1 1.414 1.414l-4.828 4.829 4.828 4.828z\"
                    />

                    <path
                            x-show=\"!isOpen\"
                            fill-rule=\"evenodd\"
                            d=\"M4 5h16a1 1 0 0 1 0 2H4a1 1 0 1 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2z\"
                    />
                </svg>
            </button>

            <div
                    class=\"w-full flex-grow lg:flex lg:items-center lg:w-auto\"
                    :class=\"{ 'block shadow-3xl': isOpen, 'hidden': !isOpen }\"
                    @click.away=\"isOpen = false\"
                    x-show.transition=\"true\">

                <ul class=\"pt-6 lg:pt-0 list-reset lg:flex justify-end flex-1 items-center\">
                    <li class=\"mr-3\">
                        <a
                                class=\"inline-block text-gray-300 no-underline hover:text-gray-200 hover:text-underline py-2 px-4\"
                                href=\"/\"
                                @click=\"isOpen = false\">
                            Home
                        </a>
                    </li>

                    <li class=\"mr-3\">
                        <a
                                class=\"inline-block text-gray-300 no-underline hover:text-gray-200 hover:text-underline py-2 px-4\"
                                href=\"/movies\"
                                @click=\"isOpen = false\"
                        >Movies
                        </a>
                    </li>

                    <li class=\"mr-3\">
                        <a
                                class=\"inline-block text-gray-300 no-underline hover:text-gray-200 hover:text-underline py-2 px-4\"
                                href=\"/contact\"
                                @click=\"isOpen = false\">
                            Contact
                        </a>
                    </li>
                    <li class=\"mr-3\">
                        <a
                                class=\"inline-block text-gray-300 no-underline hover:text-gray-200 hover:text-underline py-2 px-4\"
                                href=\"/{{ app.user ? 'logout' : 'login'  }}\"
                                @click=\"isOpen = false\">
                            {{ app.user ? 'Logout' : 'Login'  }}
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
{% endblock %}

{% block body %}{% endblock %}

{% block footer %}
    <footer class=\"bg-gray-600 py-6 mt-20\">
        <p class=\"w-25 w-4/5 text-center pb-3 m-auto text-base text-gray-100 pt-6\">
            Copyright 2021 Code With Dary. All Rights Reserved
        </p>
    </footer>
{% endblock %}
</body>
</html>", "./base.html.twig", "/home/dezoo/symfony_project/templates/base.html.twig");
    }
}
