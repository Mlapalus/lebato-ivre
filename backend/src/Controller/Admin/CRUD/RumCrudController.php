<?php

namespace App\Controller\Admin\CRUD;

use App\Entity\Rum;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class RumCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Rum::class;
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