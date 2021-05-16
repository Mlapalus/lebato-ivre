<?php

namespace App\Controller\Admin;

use App\Entity\WhiteWine;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class WhiteWineCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return WhiteWine::class;
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
