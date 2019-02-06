<?php

/* index.html */
class __TwigTemplate_b202b7add2d24e9fc74f0f984dc9b25f9b7ca7c74eb81c3c00b08a8ce677d6f5 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "
<!DOCTYPE html>
<html lang=\"en\" dir=\"ltr\">
  <head>
    <meta charset=\"utf-8\">
    <title></title>
  </head>
  <body>
    <p>";
        // line 9
        echo twig_escape_filter($this->env, ($context["the"] ?? null), "html", null, true);
        echo "</p>

  </body>
</html>
";
    }

    public function getTemplateName()
    {
        return "index.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 9,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "index.html", "D:\\xampp\\htdocs\\serv\\templates\\index.html");
    }
}
