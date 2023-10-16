<?php

namespace App\Controller;

use DateTime;
use PSpell\Config;
use App\Entity\Concours;
use App\Entity\Epreuves;
use App\Entity\Categorie;
use App\Entity\Participants;
use App\Service\FileUploader;
use App\Repository\ConcoursRepository;
use App\Repository\EpreuvesRepository;
use App\Repository\CategorieRepository;
use Doctrine\ORM\EntityManagerInterface;
use App\Repository\ParticipantsRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Contracts\Translation\TranslatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

#[Route('/resources', name:'resources_')]
class CreaconcController extends AbstractController
{
    #[Route('/creaconc', name: 'creaconc')]
    public function index(): Response
    {
        
        return $this->render('creaconc/index.html.twig', [
            'controller_name' => 'CreaconcController',
        ]);
    }
    #[Route('/edit/{id<\d+>?0}', name: 'create')]
    public function edit(int $id, Request $request, ConcoursRepository $concoursRepo, CategorieRepository $categories, EpreuvesRepository $epreuves, EntityManagerInterface $entityManager, TranslatorInterface $translator): Response
    {
        // dd($_POST);
        $successEdit = false;
        $errors = [];
        $user = $this->getUser();
        
        if(!empty($id)){
            $create = false;
            $concours = $concoursRepo->findOneBy(['id' => $id]);
            if(empty($concours)){
                return $this->redirectToRoute('resources_creaconc');
            }
        } else {
            $create = true;
            $concours = new Concours();
        }


        if(empty($_POST)) {
            $resourceContent = $concours->getContent($request);
            $contentErrors = [];
            $concours->setNom("");
            $concours->setClub("");
            $concours->setLocation("");
            
            $dateD= new DateTime();
            $concours->setDateD($dateD);
        } else {
            switch($concours->getType()) {
                default:
                    $submittedContent = $this->buildQuizzContentArray($translator);
            }
            $resourceContent = $submittedContent['content'];
            // $resourceContent = json_decode($resourceContent, true);
            
            // dd($resourceContent);
            foreach ($resourceContent['q'] as $cat => $catData ){
                $catText = $catData['q'];
                $maxEpId = $catData['max_a_id'];
                $ep = $catData['a'];

                $categories = new Categorie();
                $categories->setNom($catText);

                $concours->addCategory($categories);

                foreach ($ep as $epId => $epData) {
                    $epText = $epData['t'];

                    $epreuves = new Epreuves();
                    $epreuves->setNom($epText);

                    $categories->addEpreuve($epreuves);
                    $entityManager->persist($epreuves);

                }
                $entityManager->persist($categories);
            }
            
            $resourceContent = json_encode($submittedContent['content']);
        

            $contentErrors = $submittedContent['error'];
            
            $dateD = $request->request->get('dateD');
            $nom = $request->request->get('nom');
            $club = $request->request->get('club');
            $locations = $request->request->get('locations');

            $dateD = new DateTime($dateD);

            if(empty($concours->getOrga())) $concours->setOrga($user);
            $concours->setDateD($dateD);
            $concours->setNom($nom);
            $concours->setClub($club);
            $concours->setLocation($locations);
            $concours->setContent($resourceContent);
    
            $entityManager->persist($concours);
            $entityManager->flush();


        }
        
        // $resourceContent = '{"max_q_id":3,"q":{"q1":{"q":"Club 1","max_a_id":2,"a":{"1":{"t":"tabla"},"2":{"t":"raid"}}}}}';
        return $this->render('creaconc/index.html.twig', [
            'quizzContent' => json_decode($resourceContent, true),
            'concours' => $concours,
            'contentError' => $contentErrors,
            'formErrors' => $errors,
            'creation' => $create,
            'formSuccess' => $successEdit
        ]);
    }
    private function buildQuizzContentArray(TranslatorInterface $translator) : array {
        $quizzContent = ['content' => [], 'error' => []];
        if(!empty($_POST) && !empty($_POST['quizz_q_nb']) && intval($_POST['quizz_q_nb']) > 0) {
            $quizzContent['content']['max_q_id'] = intval($_POST['quizz_q_nb']);
            for($i=1; $i<=$_POST['quizz_q_nb']; $i++) {
                if(!isset($_POST['q_'.$i])) continue; //deleted question
                
                // Question text
                if( empty( $_POST['q_'.$i] ) ) { 
                    $quizzContent['error'][] = $translator->trans('Question of item %idQuizzQuestion% needs a text', ['%idQuizzQuestion%' => $i]);
                } else {
                    $quizzContent['content']['q']['q'.$i]['q'] = $_POST['q_'.$i];
                }

                
                //Questions answers
                if(!empty($_POST['quizz_q_'.$i.'_a_nb']) && intval($_POST['quizz_q_'.$i.'_a_nb']) > 0) {
                    if($_POST['quizz_q_'.$i.'_a_nb'] < 2) {
                        $quizzContent['error'][] = $translator->trans('Question %idQuizzQuestion% needs at least 2 answers', ['%idQuizzQuestion%' => $i]);
                    }
                    $quizzContent['content']['q']['q'.$i]['max_a_id'] = intval($_POST['quizz_q_'.$i.'_a_nb']);
                    for($j=1; $j<=$_POST['quizz_q_'.$i.'_a_nb']; $j++) {
                        if(!isset($_POST['q_'.$i.'_a_'.$j.'_t'])) continue; //deleted answer;

                        if(empty($_POST['q_'.$i.'_a_'.$j.'_t'])) {
                            $quizzContent['error'][] = $translator->trans('All answers of item %idQuizzQuestion% needs text', ['%idQ%' => $i]);
                        } else {
                            $quizzContent['content']['q']['q'.$i]['a'][$j]['t'] = $_POST['q_'.$i.'_a_'.$j.'_t'];
                        }
                        if(!empty($_POST['q_'.$i.'_a_'.$j.'_v'])) $quizzContent['content']['q']['q'.$i]['a'][$j]['v'] = true;

                    }
                }
            }
        } else {
            $quizzContent['error'][] = $translator->trans('Invalid params provided');
        }

        if(!empty($quizzContent['error'])) {
            $quizzContent['error'] = array_unique($quizzContent['error']);
        }
    
        return $quizzContent;
    }
    #[Route('/info/{id}', name: 'info')]
    public function info(ConcoursRepository $concoursRepository, CategorieRepository $categorieRepository, EpreuvesRepository $epreuvesRepository, $id): Response
    {
        $concours = $concoursRepository->findBy(['id'=>$id]);
        if (!$concours) {
            throw $this->createNotFoundException('Concours non trouvé pour l\'id '.$id);
        }
        
        $categories = $categorieRepository->findBy(['id'=>$concours]);
        $epreuves = $epreuvesRepository->findBy(['id'=>$categories]);
        
        return $this->render('indexuser/infConc.html.twig', [
            'infoConc'=> $concours,
            'categories'=> $categories,
            'epreuves'=> $epreuves,
        ]);
    }
    
    #[Route('/insertPart/{id}', name: 'insertPart')]
    public function insertPart(Request $request, ConcoursRepository $concoursRepository,int $id, EntityManagerInterface $entityManager, CategorieRepository $categorieRepository, ParticipantsRepository $participantsRepository):Response
    {
        $concours = $concoursRepository->findBy(['id'=>$id]);
        if (!$concours) {
            throw $this->createNotFoundException('Concours non trouvé pour l\'id '.$id);
        }
        $participant = new Participants;
        
        
        
        // dd ($nom);
        
        if (empty($_POST)){
            $participant->setNom("");
            $participant->setPrenom("");
            $participant->setClub("");
            $participant->setéquidé("");
            $participant->setGroupe("");
        } else {
            
            $Oconcours = $concoursRepository->findOneBy(['id'=>$id]);
            
            // if (!empty($_POST)){
            //     dd($_POST["participants"]);
            // }
            $cats = $Oconcours->getCategories();
            var_dump($cats);
            die;
            foreach ($_POST["participants"] as $part => $datapart){
                $participant = new Participants;

                $nom = $datapart["nom"];
                $prenom =  $datapart["prenom"];
                $club = $datapart["club"];
                $equide = $datapart["cheval"]; 
                $groupe= $datapart["groupe"];
                
                $participant->setNom($nom);
                $participant->setPrenom($prenom);
                $participant->setClub($club);
                $participant->setéquidé($equide);
                $participant->setGroupe($groupe);
                
                foreach ($cats as $cat) {
                    if ($cat->getNom() == $datapart["categorie"]) 
                        $participant->addCategorie($cat);
                        
                }
                dd($participant);

                $entityManager->persist($participant);
                $entityManager->flush();
                die; 
            }

        }

        return $this->render('part/index.html.twig', [
            'concours' => $concours
        ]);
    }
}