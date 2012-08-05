<?php

/**
 * BookitBook form base class.
 *
 * @method BookitBook getObject() Returns the current form's model object
 *
 * @package    bookitfree
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseBookitBookForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                => new sfWidgetFormInputHidden(),
      'category_id'       => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('BookitCategory'), 'add_empty' => false)),
      'title'             => new sfWidgetFormInputText(),
      'secondary_title'   => new sfWidgetFormInputText(),
      'author'            => new sfWidgetFormInputText(),
      'short_description' => new sfWidgetFormTextarea(),
      'description'       => new sfWidgetFormTextarea(),
      'logo'              => new sfWidgetFormInputText(),
      'isbn'              => new sfWidgetFormInputText(),
      'url'               => new sfWidgetFormInputText(),
      'pages'             => new sfWidgetFormInputText(),
      'dimensions'        => new sfWidgetFormInputText(),
      'weight'            => new sfWidgetFormInputText(),
      'position'          => new sfWidgetFormInputText(),
      'location'          => new sfWidgetFormInputText(),
      'how_to_apply'      => new sfWidgetFormTextarea(),
      'is_public'         => new sfWidgetFormInputCheckbox(),
      'is_activated'      => new sfWidgetFormInputCheckbox(),
      'email'             => new sfWidgetFormInputText(),
      'expires_at'        => new sfWidgetFormDateTime(),
      'token'             => new sfWidgetFormInputText(),
      'created_at'        => new sfWidgetFormDateTime(),
      'updated_at'        => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'                => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'category_id'       => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('BookitCategory'))),
      'title'             => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'secondary_title'   => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'author'            => new sfValidatorString(array('max_length' => 255)),
      'short_description' => new sfValidatorString(array('max_length' => 4000)),
      'description'       => new sfValidatorString(array('max_length' => 4000)),
      'logo'              => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'isbn'              => new sfValidatorString(array('max_length' => 255)),
      'url'               => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'pages'             => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'dimensions'        => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'weight'            => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'position'          => new sfValidatorString(array('max_length' => 255)),
      'location'          => new sfValidatorString(array('max_length' => 255)),
      'how_to_apply'      => new sfValidatorString(array('max_length' => 4000)),
      'is_public'         => new sfValidatorBoolean(array('required' => false)),
      'is_activated'      => new sfValidatorBoolean(array('required' => false)),
      'email'             => new sfValidatorString(array('max_length' => 255)),
      'expires_at'        => new sfValidatorDateTime(),
      'token'             => new sfValidatorString(array('max_length' => 255)),
      'created_at'        => new sfValidatorDateTime(),
      'updated_at'        => new sfValidatorDateTime(),
    ));

    $this->validatorSchema->setPostValidator(
      new sfValidatorDoctrineUnique(array('model' => 'BookitBook', 'column' => array('token')))
    );

    $this->widgetSchema->setNameFormat('bookit_book[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'BookitBook';
  }

}
