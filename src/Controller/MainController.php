<?php

namespace App\Controller;

use App\Repository\CategorieRepository;
use App\Repository\ConcoursRepository;
use App\Repository\EpreuvesRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Twig\Environment;

class MainController extends AbstractController
{
    #[Route('/', name: 'app_main')]
    public function index(ConcoursRepository $concoursRepository): Response
    {
        $concours = $concoursRepository->findAll();
        
        // dd ($concours);

        return $this->render('main/index.html.twig', [
            'concours' => $concours,
        ]);
    }
    #[Route('/infoConc/{id}', name: 'infoConc')]
    public function info(ConcoursRepository $concoursRepository, CategorieRepository $categorieRepository, EpreuvesRepository $epreuvesRepository, $id): Response
    {
        $concours = $concoursRepository->findBy(['id'=>$id]);
        if (!$concours) {
            throw $this->createNotFoundException('Concours non trouvé pour l\'id '.$id);
        }
        
        $categories = $categorieRepository->findBy(['id'=>$concours]);
        $epreuves = $epreuvesRepository->findBy(['id'=>$categories]);
        
        return $this->render('main/infoConc.html.twig', [
            'infoConc'=> $concours,
            'categories'=> $categories,
            'epreuves'=> $epreuves,
        ]);
        
    
    }
}
