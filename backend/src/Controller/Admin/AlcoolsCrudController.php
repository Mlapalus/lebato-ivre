<?php

namespace App\Controller\Admin;

use App\Entity\Alcools;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class AlcoolsCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Alcools::class;
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