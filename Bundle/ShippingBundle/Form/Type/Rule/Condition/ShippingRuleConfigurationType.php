<?php

namespace CoreShop\Bundle\ShippingBundle\Form\Type\Rule\Rule\Condition;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Validator\Constraints\NotBlank;

final class ShippingRuleConfigurationType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('shippingRule', TextType::class, [ //TODO: Should be ShippingRuleChoiceType, but would't save ID to database, instead it saves the whole object
                'constraints' => [
                    new NotBlank(['groups' => ['coreshop']])
                ]
            ])
        ;
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'coreshop_shipping_rule_condition_shipping_rule';
    }
}