<?php
namespace AppBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

/*
 *
 *   This file is part of the Data Catalog project.
 *   Copyright (C) 2016 NYU Health Sciences Library
 *
 *   This program is free software: you can redistribute it and/or modify
 *   it under the terms of the GNU General Public License as published by
 *   the Free Software Foundation, either version 3 of the License, or
 *   (at your option) any later version.
 *
 *   This program is distributed in the hope that it will be useful,
 *   but WITHOUT ANY WARRANTY; without even the implied warranty of
 *   MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *   GNU General Public License for more details.
 *
 *   You should have received a copy of the GNU General Public License
 *   along with this program.  If not, see <http://www.gnu.org/licenses/>.
 */
class AwardType extends AbstractType {

  public function buildForm(FormBuilderInterface $builder, array $options) {
    $builder->add('award','text',array(
      'label'=>'Grant Number',
    ));
    $builder->add('award_funder','text',array(
      'label'=>'Funding Agency',
    ));
    $builder->add('funder_type','choice',array(
      'label'=>'Funder Type',
      'choices'=>array('Federal, NIH'    => 'Federal, NIH',
                       'Federal, non-NIH'=> 'Federal, non-NIH',
                       'Non-federal'     => 'Non-federal'),
    ));
    $builder->add('award_url', 'text',array(
      'required'=>false,
      'label'=>'NIH Reporter URL',
    ));
    $builder->add('save','submit',array('label'=>'Submit'));
  }

  public function setDefaultOptions(OptionsResolverInterface $resolver) {
    $resolver->setDefaults(array(
      'data_class' => 'AppBundle\Entity\Award'
    ));
  }

  public function getName() {
    return 'award';
  }

}

