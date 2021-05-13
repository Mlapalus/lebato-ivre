<?php

namespace App\Controller\Admin\CRUD;

use App\Entity\DraftBeer;
use EasyCorp\Bundle\EasyAdminBundle\Field\SlugField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\MoneyField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IntegerField;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextareaField;

class DraftBeerCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return DraftBeer::class;
    }

    public function configureFields(string $pageName): iterable
    {
        return [
            TextField::new('name'),
            SlugField::new('slug')
            ->setTargetFieldName('name'),
            MoneyField::new('price')
            ->setCurrency('EUR'),
            MoneyField::new('priceHH')
            ->setCurrency('EUR'),
            IntegerField::new('quantity'),
            TextareaField::new('description')
        ];
    }
}