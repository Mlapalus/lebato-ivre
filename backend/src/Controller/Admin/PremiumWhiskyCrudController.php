<?php

namespace App\Controller\Admin;

use App\Entity\PremiumWhisky;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class PremiumWhiskyCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return PremiumWhisky::class;
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
