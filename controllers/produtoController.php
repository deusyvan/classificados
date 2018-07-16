<?php 

class produtoController extends controller{
    
    public function index(){
        
    }
    
    public function abrir($id){
        
        $a = new Anuncios();
        $u = new Usuarios();
        
        if(empty($id)){
            header("Location: ".BASE_URL);
            exit;
           } 
        
        $info = $a->getAnuncio($id);
        
        
    }
}