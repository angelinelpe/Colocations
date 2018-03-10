<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\MoneyType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TimeType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;

class AnnonceType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
        
			->add('dateDebut',	DateType::class, array('years'=>range(date('Y'), date('Y')+1)), array('label' => 'form.dateDebut'))

			->add('dateFin',	DateType::class, array('years'=>range(date('Y'), date('Y')+1)), array('label' => 'form.dateFin'))

			->add('ville', TextType::class, array('label' => 'form.ville'))

			->add('duree', TimeType::class, array('label' => 'form.duree'))

			->add('nbPlaceDispo', IntegerType::class, array('label' => 'form.nbPlaceDispo'))

			->add('prixPersonne', MoneyType::class, array('label' => 'form.prixPersonne'))

			->add('description', TextType::class, array('label' => 'form.description'))
             
          ;
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Annonce'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'AppBundle_annonce';
    }


}
