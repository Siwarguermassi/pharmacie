<?php

namespace App\Controller;

use App\Entity\Fiche;
use App\Entity\Pharmacie;
use App\Entity\Medicament;
use App\Repository\MedicamentRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class HomeController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function index(): Response
    {
        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }

    /**
     * @Route("/admin/", name="home1")
     */
    public function index1(): Response
    {
        return $this->render('home/index1.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }

    /**
     * @Route("/search", name="search")
     */
   public function search(Request $request){
    $inp = $request->request->get('inp');
    $pharm = $this->getDoctrine()->getRepository(Pharmacie::class)->findBy(['nom' => $inp]);
    $med = $this->getDoctrine()->getRepository(Medicament::class)->findBy(['nom' => $inp]);
    
        return $this->render("home/show.html.twig",[
            'pharmacies' => $pharm,
            'medicaments' => $med
        ]);
}
}
