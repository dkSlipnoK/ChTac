<?php

namespace App\Service;

use App\Entity\Participants;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\String\Slugger\SluggerInterface;

class FileUploader
{
    private $targetDirectory;

    public function __construct($targetDirectory)
    {
        $this->targetDirectory = $targetDirectory;
    }

    public function upload($file)
    {
        $fileName = md5(uniqid()).'.'.$file->guessExtension();

        $file->move($this->getTargetDirectory(), $fileName);

        $csvFile = $this->getTargetDirectory().'/'.$fileName;

        $handle = fopen($csvFile, 'r');

        if ($handle !== false) {
            while (($data = fgetcsv($handle, 0, ';')) !== false) {
                $participant = new Participants();
                $participant->setNom(trim($data[7])); // Modifier en fonction de votre structure CSV
                $participant->setPrenom(trim($data[8])); // Modifier en fonction de votre structure CSV
                $participant->setClub(trim($data[9])); // Modifier en fonction de votre structure CSV
                $participant->setéquidé(trim($data[11])); // Modifier en fonction de votre structure CSV
                
                // Insérer le participant dans la base de données
            }
        
            fclose($handle);
        }
        
    }

    public function getTargetDirectory()
    {
        return $this->targetDirectory;
    }
}

    
//     public function __construct(
//         private $targetDirectory,
//         private SluggerInterface $slugger,
//     ) {
//     }

//     public function upload(UploadedFile $file): string
//     {
//         $originalFilename = pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME);
//         $safeFilename = $this->slugger->slug($originalFilename);
//         $fileName = $safeFilename.'-'.uniqid().'.'.$file->guessExtension();

//         try {
//             $file->move($this->getTargetDirectory(), $fileName);
//         } catch (FileException $e) {
//             // ... handle exception if something happens during file upload
//         }
//         $this->insertDataFromFile($this->targetDirectory.'/'.$fileName);
//         return $fileName;
//     }

//     public function getTargetDirectory(): string
//     {
//         return $this->targetDirectory;
//     }
//     private function insertDataFromFile(string $filePath): void
//     {
//         $xml = simplexml_load_file($filePath);

//         foreach ($xml->Participant as $xmlParticipant) {
//             $participant = new Participants();
//             $participant->setNom($xmlParticipant->nom);
//             $participant->setPrenom($xmlParticipant->prenom);

//             // Insert the participant into the database
//         }
//     }

// class FileUploader
// {
//     private string $uploadsDirectory;

//     public function __construct(string $uploadsDirectory)
//     {
//         $this->uploadsDirectory = $uploadsDirectory;
//     }

//     public function upload(UploadedFile $file): void
//     {
//         $fileName = $this->generateUniqueFileName().'.'.$file->guessExtension();

//         try {
//             $file->move($this->uploadsDirectory, $fileName);
//         } catch (FileException $e) {
//             // handle the exception here
//         }

//         $this->insertDataFromFile($this->uploadsDirectory.'/'.$fileName);
//     }

//     private function generateUniqueFileName(): string
//     {
//         return md5(uniqid());
//     }

//     private function insertDataFromFile(string $filePath): void
//     {
//         $xml = simplexml_load_file($filePath);

//         foreach ($xml->Participant as $xmlParticipant) {
//             $participant = new Participants();
//             $participant->setNom($xmlParticipant->nom);
//             $participant->setPrenom($xmlParticipant->prenom);

//             // Insert the participant into the database
//         }
//     }
// }
