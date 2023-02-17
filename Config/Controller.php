<?php

class Controller
{
    public $request;  				// Objet Request 
	private $vars     = array();	// Variables à passer à la vue
	public $layout    = 'default';  // Layout à utiliser pour rendre la vue
	private $rendered = false;		// Si le rendu a été fait ou pas ?

    public function render($fichier, $data = [])
    {
        if($this->rendered){ return false; }
		extract($this->vars); 
		if(strpos($view,'/')===0){
			$view = __ROOT__.__DS__.'Template'.$view.'.php';
		}else{
			$view = __ROOT__.__DS__.'Template'.__DS__.$this->request->controller.__DS__.$view.'.php';
		}
		ob_start(); 
		require($view);
		$content_for_layout = ob_get_clean();  
		require __ROOT__.__DS__.'Template'.__DS__.'layout'.__DS__.$this->layout.'.php'; 
		$this->rendered = true;
    }
}