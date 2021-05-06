<?php

namespace App\Controller\Admin\CRUD;

use App\Entity\DraftBeer;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class DraftBeerCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return DraftBeer::class;
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