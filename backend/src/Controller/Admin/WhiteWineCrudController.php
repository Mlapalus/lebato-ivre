<?php

namespace App\Controller\Admin;

use App\Entity\WhiteWine;
use EasyCorp\Bundle\EasyAdminBundle\Field\SlugField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\MoneyField;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class WhiteWineCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return WhiteWine::class;
    }

    public function configureFields(string $pageName): iterable
    {
        return [
            TextField::new('name'),
            SlugField::new('slug')
            ->setTargetFieldName('name'),
            MoneyField::new('glassPrice')
            ->setCurrency('EUR'),
            MoneyField::new('bottlePrice')
            ->setCurrency('EUR'),
            TextField::new('color'),

        ];
    }
}
