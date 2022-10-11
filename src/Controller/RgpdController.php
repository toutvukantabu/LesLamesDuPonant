<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class RgpdController extends AbstractController

{
    /**
     * @Route("/rgpd", name="rgpd")
     */
    public function rgpd()
    {
        return $this->render('rgpd/rgpd.html.twig', [
            'rgpd' => 'rgpd',
        ]);
    }
    
    /**
     * @route ("/mentions-legales", name="mentions_legale")
     */
          public function politiquedeconf()
        {
            return $this->render('rgpd/mentions_legales.html.twig', [
               
            ]);
        }
    /**
     * @route ("/site-map", name="site_map")
     */
          public function siteMap()
        {
            return $this->render('rgpd/site_map.html.twig', [
              
            ]);
        }
    
}




