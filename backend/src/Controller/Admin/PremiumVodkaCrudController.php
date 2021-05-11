<?php

namespace App\Controller\Admin;

use App\Entity\PremiumVodka;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class PremiumVodkaCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return PremiumVodka::class;
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
