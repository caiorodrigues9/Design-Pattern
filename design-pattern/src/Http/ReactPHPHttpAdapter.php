<?php

namespace Caio\DesignPattern\Http;

class ReactPHPHttpAdapter implements HttpAdapter
{
    public function post(string $url, array $data = []): void
    {
        //instacia REACT PHP
        //prepara os dados
        //faz requisão
        echo "React PHP";

    }
}