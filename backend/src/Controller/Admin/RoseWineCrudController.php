<?php

namespace App\Controller\Admin;

use App\Entity\RoseWine;
use EasyCorp\Bundle\EasyAdminBundle\Field\SlugField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\MoneyField;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class RoseWineCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return RoseWine::class;
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
