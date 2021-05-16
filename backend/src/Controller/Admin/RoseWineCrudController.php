<?php

namespace App\Controller\Admin;

use App\Entity\RoseWine;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class RoseWineCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return RoseWine::class;
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
