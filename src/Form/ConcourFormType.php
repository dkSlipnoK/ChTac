<?php   

namespace App\Form;

use App\Entity\Concours;
use App\Entity\Users;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\Length;

class ConcourFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder

            ->add('date', DateTimeType::class,[
                'constraints' => [
                    new NotBlank([
                        'message' => 'Veuillez saisir une date.'
                    ]),
                ],
            ])
            ->add('nom', TextType::class, [
                'constraints' => [
                    new NotBlank([
                        'message' => 'Veuillez saissir un nom.',
                        'normalizer' => 'trim'
                    ]),
                    new Length([
                        'min' => 3,
                        'minMessage' => 'Le nom doit contenir minimum {{ limit }} charactéres.',
                        'max' => 30,
                    ]),
                ],
            ])
            ->add('lieu', TextType::class, [
                'constraints' => [
                    new NotBlank([
                        'message' => 'Veuillez saissir un lieu',
                    ])
                ]
            ])
            ->add('club', TextType::class, [
                'class' => Users::class,
                'choice_label' => 'club',
                'constraints' => [
                    new NotBlank([
                        'message' => 'Veuillez saissir le club',
                    ])
                ]
            ])
            ->add('type', EntityType::class, [
                'class' => Concours::class,
                'choice_label' => 'name',
                'constraints' => [
                    new NotBlank([
                        'message' => 'Please enter a type',
                    ])
                ]
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Resource::class,
        ]);
    }
}
