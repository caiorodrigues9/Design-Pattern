<?php

namespace Caio\DesignPattern;

use Caio\DesignPattern\EstadosOrcamento\Finalizado;
use Caio\DesignPattern\Http\HttpAdapter;

class RegistroOrcamento
{
    private HttpAdapter $httpAdapter;
    
    public function __construct(HttpAdapter $adapter)
    {
        $this->httpAdapter = $adapter;
    }
    
    public function registrar(Orcamento $orcamento)
    {
        if (!$orcamento->estadoAtual instanceof Finalizado){
            throw new \DomainException(
                'Apenas orçamentos finalizados podem ser registrados na API'
            );
        }
        
        $this->httpAdapter->post('http://api.registrar.orcamento',[
            'valor'=>$orcamento->valor,
            'quantidadeItens'=>$orcamento->quantidadeItens
        ]);
    }
}