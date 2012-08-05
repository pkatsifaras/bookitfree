<?php

/**
 * BookitBook form.
 *
 * @package    bookitfree
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class BookitBookForm extends BaseBookitBookForm
{

  public function configure()
  {
    $this->removeFields();

    $this->useFields(array(
        'category_id', 'title', 'secondary_title', 'author', 'short_description',
        'description', 'logo', 'isbn', 'url', 'pages', 'dimensions',
        'weight', 'position', 'location', 'how_to_apply', 'is_public',
//        'is_activated',
        'email'
    ));

    $this->widgetSchema->setLabels(array(
        'category_id' => 'Category',
        'is_public' => 'Public?',
        'how_to_apply' => 'How to apply?',
    ));

    $this->validatorSchema['email'] = new sfValidatorAnd(array(
                $this->validatorSchema['email'],
                new sfValidatorEmail(),
            ));

    $this->widgetSchema['logo'] = new sfWidgetFormInputFile(array(
                'label' => 'Book cover',
            ));

    $this->validatorSchema['logo'] = new sfValidatorFile(array(
                'required' => false,
                'path' => sfConfig::get('sf_uploads_dir') . '/books',
                'mime_types' => 'web_images',
            ));
  }

  protected function removeFields()
  {
    unset(
            $this['created_at'], 
            $this['updated_at'], 
            $this['expires_at'], 
//            $this['is_activated'], 
            $this['token']
    );
  }

}
