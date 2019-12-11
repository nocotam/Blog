<?php


namespace App\Controller;


use App\Stronka;
use Symfony\Component\HttpFoundation\Response;

class DefaultController
{
 public function index()
 {
     $numberObject = new Stronka();
    echo 1;
     echo $numberObject->number(2);
     die;
     return new Response('ok');
 }
}