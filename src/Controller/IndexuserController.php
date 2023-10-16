<?php

namespace App\Controller;

use DateTime;
use App\Entity\Concours;
use App\Entity\Epreuves;
use App\Entity\Categorie;
use App\Entity\Participants;
use App\Repository\UsersRepository;
use App\Repository\ConcoursRepository;
use App\Repository\EpreuvesRepository;
use App\Repository\CategorieRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\Security;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class IndexuserController extends AbstractController
{
    #[Route('/indexuser', name: 'app_indexuser')]
    public function index(ConcoursRepository $concoursRepository): Response
    {
        return $this->render('indexuser/index.html.twig', [
            'concours' => $concoursRepository->findAll(),
        ]);

    }

    
    
}
