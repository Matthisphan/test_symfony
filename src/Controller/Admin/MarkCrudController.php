<?php

namespace App\Controller\Admin;

use App\Entity\Mark;
use App\Entity\Student;
use App\Repository\StudentRepository;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\NumberField;

class MarkCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Mark::class;
    }

    public function configureFields(string $pageName): iterable
    {
        return [
            AssociationField::new('student')
            ->formatValue(function ($value, $entity) {
                return $value instanceof Student ? $value->getFirstname().' '.$value->getLastname() : '';
            }),
            TextField::new('matiere'),
            TextField::new('nom_controle'),
            NumberField::new('note')->setLabel('Note'),
            NumberField::new('coefficient')->setLabel('Coefficient'),
        ];
    }
}