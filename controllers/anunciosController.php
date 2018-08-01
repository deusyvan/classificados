<?php
class anunciosController extends controller{
    
    public function index(){
      $dados = array();
     
      if (empty($_SESSION['cLogin'])){
          header("Location: ".BASE_URL."login");
          exit;
      } 
      
      $a = new Anuncios();
      $anuncios = $a->getMeusAnuncios();
      $dados['anuncios'] = $anuncios;
      
      $this->loadTemplate('anuncios', $dados);
    }
    
    public function add(){
        $dados = array();
        
        if(empty($_SESSION['cLogin'])) {
            header("Location: ".BASE_URL."login");
            exit;
        }
        
        $a = new Anuncios();
        if(isset($_POST['titulo']) && !empty($_POST['titulo'])) {
            $titulo = addslashes($_POST['titulo']);
            $categoria = addslashes($_POST['categoria']);
            $valor = addslashes($_POST['valor']);
            $descricao = addslashes($_POST['descricao']);
            $estado = addslashes($_POST['estado']);
            
            $a->addAnuncio($titulo, $categoria, $valor, $descricao, $estado);
            $dados['msg'] = '<div class="alert alert-success">
                                Produto adicionado com sucesso!
                             </div>';
        }
        
        $c = new Categorias();
        $categorias = $c->getLista();
        $dados['categorias'] = $categorias;
        
        $this->loadTemplate('add',$dados);
   }
   
   public function editar($id){
       $dados = array();
       
       if (empty($_SESSION['cLogin'])){
           header("Location: ".BASE_URL."login");
           exit;
       } 
       
   }
}