<?php

namespace App\Controller\Admin\CRUD;

use App\Entity\Shot;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class ShotCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Shot::class;
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