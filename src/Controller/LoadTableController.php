<?php

namespace App\Controller;

use App\Entity\Resultat;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class LoadTableController extends AbstractController
{
    #[Route('/load/table', name: 'app_load_table')]
    public function index(Request $request)
    {
        
        $param1 = $request->query->get('param1');
        $param2 = $request->query->get('param2');
        $i = $param1.$param2;
        
        // condition pour savoir quels tableau afficher
        switch ($i){
            case "":
                return $this->render('load_table/index.html.twig');
                break;
            case '1A':
                return $this->render('load_table/tables/CE_tower.html.twig');
                break;
            case '1B':
                return $this->render('load_table/tables/CE_raid.html.twig');
                break;
            case '1C':
                return $this->render('load_table/tables/CE_polonaise.html.twig');
                break;
            case '1D':
                return $this->render('load_table/tables/CE_skirmish.html.twig');
                break;
            case '2A':
            case '3A':
                return $this->render('load_table/tables/C1_P1_tower.html.twig');
                break;
            case '2B':
            case '3B':
                return $this->render('load_table/tables/C1_P1_raid.html.twig');
                break;
            case '2C':
            case '3C':
                return $this->render('load_table/tables/C1_P1_polonaise.html.twig');
                break;
            case '4A':
            case '5A':
            case '6A':
                return $this->render('load_table/tables/C2_P2_PA1_tower.html.twig');
                break;
            case '4B':
            case '5B':
            case '6B':
                return $this->render('load_table/tables/C2_P2_PA1_raid.html.twig');
                break;
            case '4C':
            case '5C':
            case '6C':
                return $this->render('load_table/tables/C2_P2_PA1_polonaise.html.twig');
                break;
            case '7A':
            case '8A':
                return $this->render('load_table/tables/P3_tower.html.twig');
                break;
            case '7C':
            case '8C':
                return $this->render('load_table/tables/P3_polonaise.html.twig');
                break;
            default:
                return $this->render('load_table/erreur.html.twig');
                break;
        };
        
    }
    #[Route('/saveCont', name: 'app_saveCont', methods: ['POST'])]
    public function saveContest(Request $request, EntityManagerInterface $entityManager)
    {
        // envoie des résultat à la DB
        if (!empty ($_POST)){
            $resultat = new Resultat();
            $resultat->setRawData($_POST);
            $entityManager->persist($resultat);
            $entityManager->flush();
        }
        return $this->render('load_table/index.html.twig');
    }

}
