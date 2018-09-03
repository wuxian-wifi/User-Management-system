<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\BirthdayType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;

class UserListAddType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('username', null, array(
                'label' => 'user_infos.username',
                'attr' => array(
                    'placeholder' => 'user_infos.username',
                ),
                'translation_domain' => 'ums'))
            ->add('firstname', null, array(
                'label' => 'user_infos.firstname',
                'attr' => array(
                    'placeholder' => 'user_infos.firstname',
                ),
                'translation_domain' => 'ums'))
            ->add('lastname', null, array(
                'label' => 'user_infos.lastname',
                'attr' => array(
                    'placeholder' => 'user_infos.lastname',
                ),
                'translation_domain' => 'ums'))
            ->add('sex', ChoiceType::class, array(
                'choices' => [
                    'user_infos.sex.1' => true,
                    'user_infos.sex.0' => false
                ],
                'label' => 'user_infos.sex.title',
                'translation_domain' => 'ums'))
            ->add('email', EmailType::class, array(
                'label' => 'user_infos.email',
                'attr' => array(
                    'placeholder' => 'user_infos.email',
                ),
                'translation_domain' => 'ums'))
            ->add('id_card', null, array(
                'label' => 'user_infos.id_card',
                'attr' => array(
                    'placeholder' => 'user_infos.id_card',
                ),
                'translation_domain' => 'ums'))
            ->add('date_birth', BirthdayType::class, array(
                'label' => 'user_infos.date_birth',
                'translation_domain' => 'ums'))
            ->add('phone', null, array(
                'label' => 'user_infos.phone',
                'attr' => array(
                    'placeholder' => 'user_infos.phone',
                ),
                'translation_domain' => 'ums'))
            ->add('wechat', null, array(
                'label' => 'user_infos.wechat',
                'attr' => array(
                    'placeholder' => 'user_infos.wechat',
                ),
                'translation_domain' => 'ums'))
            ->add('address', null, array(
                'label' => 'user_infos.address',
                'attr' => array(
                    'placeholder' => 'user_infos.address',
                ),
                'translation_domain' => 'ums'))
            ->add('region', ChoiceType::class, array(
                'choices' => [
                    'region.11' => '11',
                    'region.12' => '12',
                    'region.13' => '13',
                    'region.14' => '14',
                    'region.15' => '15',
                    'region.21' => '21',
                    'region.22' => '22',
                    'region.23' => '23',
                    'region.31' => '31',
                    'region.32' => '32',
                    'region.33' => '33',
                    'region.34' => '34',
                    'region.35' => '35',
                    'region.36' => '36',
                    'region.37' => '37',
                    'region.41' => '41',
                    'region.42' => '42',
                    'region.43' => '43',
                    'region.44' => '44',
                    'region.45' => '45',
                    'region.46' => '46',
                    'region.50' => '50',
                    'region.51' => '51',
                    'region.52' => '52',
                    'region.53' => '53',
                    'region.54' => '54',
                    'region.61' => '61',
                    'region.62' => '62',
                    'region.63' => '63',
                    'region.64' => '64',
                    'region.65' => '65',
                    'region.81' => '81',
                    'region.82' => '82',
                    'region.71' => '71',
                    'region.99' => '99'
                ],
                'label' => 'user_infos.region',
                'attr' => array(
                    'placeholder' => 'user_infos.region',
                ),
                'translation_domain' => 'ums'))
            ->add('plainPassword', PasswordType::class, array(
                'label' => 'user_infos.plain_pwd',
                'attr' => array(
                    'placeholder' => 'user_infos.plain_pwd',
                ),
                'translation_domain' => 'ums'))
            ->add('enabled', ChoiceType::class, array(
                'choices' => [
                    'user_infos.enabled.1' => true,
                    'user_infos.enabled.0' => false
                ],
                'label' => 'user_infos.enabled.title',
                'translation_domain' => 'ums'))
            ->add('roles', ChoiceType::class, array(
                'choices' => array(
                    'user_infos.roles.ROLE_SELLER' => 'ROLE_SELLER',
                    'user_infos.roles.ROLE_ADMIN' => 'ROLE_ADMIN'
                ),
                'expanded' => false,
                'multiple' => true,
                'label' => 'user_infos.roles.title',
                'translation_domain' => 'ums'))
        ;
    }

    public function getBlockPrefix()
    {
        return 'app_userList_add';
    }
}