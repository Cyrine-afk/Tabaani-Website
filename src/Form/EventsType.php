<?php

namespace App\Form;

use App\Entity\Events;
use App\Entity\Themes;
use Doctrine\DBAL\Types\DateTimeType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\BirthdayType;
use Symfony\Component\Form\Extension\Core\Type\LocaleType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\DomCrawler\Field\TextareaFormField;
use Symfony\Component\Form\Extension\Core\Type\FormType;



class EventsType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('eventname')
            ->add('nbrmaxpart')
            ->add('imageevent', FileType::class ,array('data_class'=> null,'label' => 'Choose an Image for your Event'))
            //->add('img_hbrg', FileType::class,array('data_class'=> null, 'label' => 'Image'))
            //->add('imageevent', FileType::class, array('data_class' => null))
            //->add('imageevent', FileType::class, array('data_class' => null,'required' => false))
            //->add('file',FileType::class ,array('attr' => array('class' => 'form-control'), 'label' => 'Choose an Image for your Event      '))
            ->add('description')
            ->add('eventdate')
            ->add('eventaddress')
            ->add('eventtheme', EntityType::class,['class'=>Themes::class])

            ->add('org',  null ,array('attr' => array('class' => 'form-control')))

        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Events::class,
        ]);
    }
}
