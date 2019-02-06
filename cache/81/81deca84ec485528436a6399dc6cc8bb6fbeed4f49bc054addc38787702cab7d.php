<?php

/* index.html */
class __TwigTemplate_f01277d029f4a6dbed650c686b668eeb31abe79942001d9f299fac1ac2bd781e extends Twig_Template
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
    <ul>
      <li><a href=\"/\">главная</a></li>
      <li><a href=\"/doctor\">Доктора</a></li>
      <li><a href=\"/doctor/list\">Список докторов</a></li>
    </ul>
    <p>";
        // line 14
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
        return array (  38 => 14,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "index.html", "D:\\xampp\\htdocs\\serv\\templates\\index.html");
    }
}
