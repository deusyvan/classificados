<?php 
class homeController extends controller{
    
    public function index(){
        $dados = array();
        $a = new Anuncios();
        $u = new Usuarios();
        $c = new Categorias();
        
        $filtros = array(
            'categoria' => '',
            'preco' => '',
            'estado' => ''
        );
        
        if (isset($_GET['filtros'])) {
            $filtros = $_GET['filtros'];
        }
        
        $total_anuncios = $a->getTotalAnuncios($filtros);
        $total_usuarios = $u->getTotalUsuarios();
        
        $p = 1;
        if (isset($_GET['p']) && !empty($_GET['p'])){
            $p = addslashes($_GET['p']);
        }
        
        $por_pagina = 2;
        $total_paginas = ceil($total_anuncios / $por_pagina);
        
        $anuncios = $a->getUltimosAnuncios($p, $por_pagina, $filtros);
        $categorias = $c->getLista();
      
        $this->loadTemplate('home', $dados);
        
    }
   
}

?>