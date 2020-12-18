<?php

class Paginas extends Controller{
    
    public function index(){
        $dados = [
            'tituloPagina' => 'Pagina Inicial'
        ];
        $this->view('paginas/home',$dados);
    }
    
    public function sobre(){
        $dados = [
            
        'tituloPagina' => 'Pagina Sobre Nós'
        
        ];

        $this->view('paginas/sobre',$dados);
    }
}