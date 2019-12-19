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
      * @Route("/uslugi")
      */
    public function uslugi()
    {
        $services = new MyServices();
        $data = $services->getData();

        $smsSender = new SMSSender();
        $smsSender->sendSMSTO(1123112312);

        return $this->render('services.html.twig', [
            'servicesXYZ' => $data
        ]);
    }
        /**
         * @Route("/o-nas")
         */
        public function ONas()
{
    return $this->render("O nas.html.twig");
}

    /**
     * @Route("/nasza-oferta")
     */
    public function naszaoferta()
    {
        return $this->render("nasza-oferta.html.twig");
    }
    /**
     * @Route("/pomniki")
     */
    public function pomniki()
    {
        return $this->render("pomniki.html.twig");
    }




}
