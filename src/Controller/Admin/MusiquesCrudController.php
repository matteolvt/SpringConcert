<?php

namespace App\Controller\Admin;

use App\Entity\Musiques;
use CallbackFilterIterator;
use Doctrine\ORM\Mapping\Id;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Field\CollectionField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class MusiquesCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Musiques::class;
    }


    public function configureFields(string $pageName): iterable
    {
        return [

            IdField::new('id'),
            AssociationField::new('id_artistes', 'artistes')
                ->autocomplete(),
            TextField::new('playlist'),
        ];
    }
}