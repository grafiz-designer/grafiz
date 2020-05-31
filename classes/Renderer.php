<?php
namespace Classes;

class Renderer
{
   /**
     * Affiche la vue demandée dans $path en injectant les variables contenues dans $variables
     *
     * @param string $path
     * @param array $variables
     *
     * @return void
     */
    public function render(string $path, array $variables): void
    {
      ob_start();
      require VIEW . $path . ".html.php";
      $content = ob_get_clean();
      require VIEW  . 'template.html.php';
    }
}