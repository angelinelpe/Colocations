<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use \Symfony\Component\Form\Extension\Core\Type\TextType;
use \Symfony\Component\Form\Extension\Core\Type\DateType;

class RechercheType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
                ->add('vill', TextType::class, array('label' => 'form.ville'))

                ->add('dateDebut', DateType::class, array('widget'=>'single_text', 'format'=>'dd/MM/yyyy', 'data'=>new \DateTime()), array('label' => 'form.dateDebut'))

                ->add('dateFin', DateType::class, array('widget'=>'single_text', 'format'=>'dd/MM/yyyy', 'data'=>new \DateTime()), array('label' => 'form.dateFin'));
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $this->getParent();
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'recherche_annonces';
    }

}
