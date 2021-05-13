<?php

namespace App\Controller\Admin\CRUD;

use App\Entity\Soft;
use EasyCorp\Bundle\EasyAdminBundle\Field\SlugField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\MoneyField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IntegerField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextareaField;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class SoftCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Soft::class;
    }

    public function configureFields(string $pageName): iterable
    {
        return [
            TextField::new('name'),
            SlugField::new('slug')
            ->setTargetFieldName('name'),
            TextareaField::new('description'),
            IntegerField::new('quantity'),
            MoneyField::new('price')
            ->setCurrency('EUR'),
        ];
    }
}