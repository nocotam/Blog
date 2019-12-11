<?php


namespace App\Controller;


use App\MyServices;
use App\SMSSender;
use App\Stronka;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends AbstractController
{
     /**
      * @Route("")
      */
    public function index()
     {
         $numberObject = new Stronka();
        echo 1;
         echo $numberObject->number(2);
         die;
         return new Response('ok');
     }

     /**
      * @Route("/uslugi")
      */
    public function mojeUslugiasdlasdhkgasdgajsd()
    {
        $services = new MyServices();
        $data = $services->getData();

        $smsSender = new SMSSender();
        $smsSender->sendSMSTO(1123112312);

        return $this->render('services.html.twig', [
            'servicesXYZ' => $data
        ]);
    }
}
