<?php 

namespace App\EventSubscriber;

use App\Entity\PremiumDigestif;
use App\Entity\User;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use EasyCorp\Bundle\EasyAdminBundle\Event\BeforeEntityUpdatedEvent;
use EasyCorp\Bundle\EasyAdminBundle\Event\BeforeEntityPersistedEvent;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Symfony\Component\String\Slugger\SluggerInterface;

class EasyAdminSubscriber implements EventSubscriberInterface
{
    private EntityManagerInterface $entityManager;
    private UserPasswordEncoderInterface $passwordEncoder;
    private $slugger;

    public function __construct(
        SluggerInterface $slugger,
        EntityManagerInterface $entityManager, 
        UserPasswordEncoderInterface $passwordEncoder
        ) {
        $this->slugger = $slugger;
        $this->entityManager = $entityManager;
        $this->passwordEncoder = $passwordEncoder;
    }

    public static function getSubscribedEvents()
    {
        return [
            BeforeEntityPersistedEvent::class => ['addUser'],
            BeforeEntityUpdatedEvent::class => ['updateUser'],

            BeforeEntityPersistedEvent::class => ['setDigestifSlug'],
        ];
    }

    public function setDigestifSlug(BeforeEntityPersistedEvent $event)
    {
        $entity = $event->getEntityInstance();

        if(!($entity instanceof PremiumDigestif))
        {
            return;
        }

        $slug = $this->slugger->slug($entity->getName());
        $entity->setSlug($slug);
    }

    public function updateUser(BeforeEntityUpdatedEvent $event)
    {
        $entity = $event->getEntityInstance();

        if (!($entity instanceof User))
        {
            return;
        }
        $this->setPassword($entity);
    }

    public function addUser(BeforeEntityPersistedEvent $event)
    {
        $entity = $event->getEntityInstance();

        if (!($entity instanceof User))
        {
            return ;
        }
        $this->setPassword($entity);
    }

    public function setPassword(User $entity) : void
    {
        $password = $entity->getPassword();

        $entity->setPassword(
                $this->passwordEncoder->encodePassword(
                        $entity,
                        $password
                )
        );

        $this->entityManager->persist($entity);
        $this->entityManager->flush();
    }

}