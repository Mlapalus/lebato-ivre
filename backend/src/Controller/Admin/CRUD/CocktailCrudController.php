<?php

namespace App\Controller\Admin\CRUD;

use App\Entity\Cocktail;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class CocktailCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Cocktail::class;
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