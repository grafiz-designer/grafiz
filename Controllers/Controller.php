<?php
namespace Controllers;





abstract class Controller
{   
    // fichier vue
    protected $file;
    // balise <title>
    protected $title;
    // le nom de la page qui servira a déterminer l'id de la balise <main> pr chaques pages
    protected $page;
    // balise <Meta description>
    protected $metaDescription;
    // la hauteur du Héro est plus haute sur la page d'accueil
    protected $heightHero;
    // le titre dans le héro de la page
    protected $heroTitle;

    protected const TEXT_COMMUN = " | Grafiz - graphic designer Paris";
    
    
    
    
    /**
    * Méthode abstraite correspondant à l'action par défaut
    * Oblige les classes dérivées à implémenter cette action par défaut
    */
    protected abstract function index();
    
    
    
    
    
    /**
    * Définit la hauteur du héro qui est la même sur toutes les pages sauf celle de la 'home'
    * 
    * @return string
    */
    public function generateHeightHero(): string
    {
        return $heightHero = ($this->page == 'Accueil') ? 'is-large' : 'is-medium';
    }
    



    
    public function generateClassCSS()
    {
        
    }
    
    


    /**
    * Définit le titre principal dans le header selon le controlleur en question
    * 
    * @return string
    */
    public function generateHeroTitle(): string
    {

        if($this->page !== 'Accueil'){
            
            // je ne rajoute pas de span 'my' sur le titre 'about' et 'contact'
            if(($this->page == 'Works') || ($this->page == 'Tutos')){
                $span = "<span>my</span>";
            }else{
                $span = null;
                
            }
            
            ob_start();
            ?>
            <div class="container-title">
            <?= $span; ?>
            <h1 class="is-spaced has-text-white separate">
            <?= $this->page; ?>
            </h1>
            </div>
            <!-- <hr class="small"> -->
            <style>.wave-container{display: none;}</style>
            
            <?php
            
            $heroTitle = ob_get_clean();
            
            
            
            // sinon c'est le hero de la page d'accueil
        }else{
            
            ob_start();
            
            ?>
            <div class="columns">
            <div class="column container-logo has-text-centered is-7-tablet">
            <h1 class="is-shakes is-spaced">
            <?php require ROOT . "/assets/img/SVG/logo-grafiz.php";?>
            </h1>
            </div>
            
                <div class="column">
                    <div class="columns container-jobs is-multiline is-gapless">
                        <div class="column is-12 mb-1">
                            <h2 class="jobs subtitle">Motion</h2>
                        </div>
                        <div class="column is-12 mb-1">
                            <h2 class="jobs subtitle">Graphisme</h2>
                        </div>
                        <div class="column is-12 mb-4">
                            <h2 class="jobs subtitle">Illustration</h2>
                        </div>
                    </div>
                </div>
            </div>
            
            <?php
            
            $heroTitle = ob_get_clean();
            
        }
        
        return $heroTitle;
    }
    
    
    

    

    
    
    
    
    
    // crée une fonction qui va générer et afficher la vue de tous les articles
    public function render($data = null){
        $this->heightHero = $this->generateHeightHero();
        $this->heroTitle = $this->generateHeroTitle();
 
        //définir le contenu à envoyer
        $content = $this->generateFile($this->file, $data);
        //template
        $view = $this->generateFile('Views/template.php', array('title' => $this->title, 'content' => $content));
        echo $view;
    }




    // génère la vue sans header et ni footer 
    public function renderSimple($data = null){
        $content = $this->generateFile($this->file, $data);
        //template
        $view = $this->generateFile('Views/templateSimple.php', array('content' => $content));
        echo $view;
    }
    
    


    
    private function generateFile($file, $data = null){
        if (file_exists($file)) {
            if($data != null){
                extract($data);
            }  
        }else{
            throw new \Exception("Fichier ".$file." introuvable", 1);
        }
        //commencer la temporisation
        ob_start();
        require $file;
        //arreter la temporisation
        return ob_get_clean();
    }
    
    


    
    private function generateFileSimple($file){
        if (file_exists($file)) {
            require $file;
        }
        else {
            throw new \Exception("Fichier ".$file." introuvable", 1);
            
        }
    }
    
    
    
    
}