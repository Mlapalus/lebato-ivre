<?php

namespace App\Controller\Admin;

use App\Entity\PremiumRhum;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class PremiumRhumCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return PremiumRhum::class;
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
