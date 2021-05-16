<?php

namespace App\Controller\Admin;

use App\Entity\RedWine;
use EasyCorp\Bundle\EasyAdminBundle\Field\SlugField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\MoneyField;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextareaField;

class RedWineCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return RedWine::class;
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
            ->setCurrency('EUR')
        ];
    }
}
