<?php

namespace App\Controller\Admin;

use App\Entity\PremiumTequila;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class PremiumTequilaCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return PremiumTequila::class;
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
