<?php

namespace App\Controller\Admin;

use App\Entity\Users;
use EasyCorp\Bundle\EasyAdminBundle\Config\KeyValueStore;
use EasyCorp\Bundle\EasyAdminBundle\Context\AdminContext;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Dto\EntityDto;
use EasyCorp\Bundle\EasyAdminBundle\Field\ChoiceField;
use EasyCorp\Bundle\EasyAdminBundle\Field\EmailField;
use EasyCorp\Bundle\EasyAdminBundle\Field\Field;
use EasyCorp\Bundle\EasyAdminBundle\Field\FormField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;


class UsersCrudController extends AbstractCrudController
{
    private UserPasswordHasherInterface $passwordEncoder;

    public function __construct( UserPasswordHasherInterface $passwordEncoder ) {
        $this->passwordEncoder = $passwordEncoder;
    }


    public static function getEntityFqcn(): string
    {
        return Users::class;
    }
    
    public function configureFields(string $pageName): iterable
    {
        yield FormField::addPanel( 'User data' )->setIcon( 'fa fa-user' );
        yield EmailField::new( 'email' )->onlyWhenUpdating()->setDisabled();
        yield EmailField::new( 'email' )->onlyWhenCreating();
        yield TextField::new( 'email' )->onlyOnIndex();
        yield TextField::new('username')->onlyWhenUpdating()->setDisabled();
        yield TextField::new('username')->onlyWhenCreating();
        yield TextField::new('username')->onlyOnIndex();
        yield TextField::new('nom')->onlyWhenUpdating()->setDisabled();
        yield TextField::new('nom')->onlyWhenCreating();
        yield TextField::new('nom')->onlyOnIndex();
        yield TextField::new('prenom')->onlyWhenUpdating()->setDisabled();
        yield TextField::new('prenom')->onlyWhenCreating();
        yield TextField::new('prenom')->onlyOnIndex();
        $roles = [ 'ROLE_SUPER_ADMIN', 'ROLE_ADMIN', 'ROLE_ORGA', 'ROLE_JURY', 'ROLE_USER' ];
        yield ChoiceField::new( 'roles' )
                         ->setChoices( array_combine( $roles, $roles ) )
                         ->allowMultipleChoices()
                         ->renderAsBadges();
        yield FormField::addPanel( 'Change password' )->setIcon( 'fa fa-key' );
        yield Field::new( 'plainPassword', 'New password' )->onlyWhenCreating()->setRequired( true )
                   ->setFormType( RepeatedType::class )
                   ->setFormTypeOptions( [
                       'type'            => PasswordType::class,
                       'first_options'   => [ 'label' => 'New password' ],
                       'second_options'  => [ 'label' => 'Repeat password' ],
                       'error_bubbling'  => true,
                       'invalid_message' => 'The password fields do not match.',
                   ] );
        yield Field::new( 'plainPassword', 'New password' )->onlyWhenUpdating()->setRequired( false )
                   ->setFormType( RepeatedType::class )
                   ->setFormTypeOptions( [
                       'type'            => PasswordType::class,
                       'first_options'   => [ 'label' => 'New password' ],
                       'second_options'  => [ 'label' => 'Repeat password' ],
                       'error_bubbling'  => true,
                       'invalid_message' => 'The password fields do not match.',
                   ] );
    }
    
    public function createEditFormBuilder( EntityDto $entityDto, KeyValueStore $formOptions, AdminContext $context ): FormBuilderInterface {
        //$plainPassword = $entityDto->getInstance()?->getPassword();
        $formBuilder   = parent::createEditFormBuilder( $entityDto, $formOptions, $context );
        $this->addEncodePasswordEventListener( $formBuilder );
        
        return $formBuilder;
    }

    public function createNewFormBuilder( EntityDto $entityDto, KeyValueStore $formOptions, AdminContext $context ): FormBuilderInterface {
        $formBuilder = parent::createNewFormBuilder( $entityDto, $formOptions, $context );
        $this->addEncodePasswordEventListener( $formBuilder );

        return $formBuilder;
    }

    protected function addEncodePasswordEventListener( FormBuilderInterface $formBuilder ): void {
        
        $formBuilder->addEventListener( FormEvents::SUBMIT, function ( FormEvent $event ) {
            /** @var User $user */
            $users = $event->getData();
            if ( $users->getPlainPassword() !== null ) {
                $users->setPassword( $this->passwordEncoder->hashPassword( $users, $users->getPlainPassword() ) );
            }
        } );
    }

    /*
    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id'),
            TextField::new('title'),
            TextEditorField::new('description'),
        ];
    }
    */
}
