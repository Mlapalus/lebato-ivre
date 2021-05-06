<?php

namespace App\Controller\Admin\CRUD;

use App\Entity\Soft;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class SoftCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Soft::class;
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