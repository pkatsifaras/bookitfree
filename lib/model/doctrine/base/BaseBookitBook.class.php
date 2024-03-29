<?php

/**
 * BaseBookitBook
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $category_id
 * @property string $title
 * @property string $secondary_title
 * @property string $author
 * @property string $short_description
 * @property string $description
 * @property string $logo
 * @property string $isbn
 * @property string $url
 * @property string $pages
 * @property string $dimensions
 * @property string $weight
 * @property string $position
 * @property string $location
 * @property string $how_to_apply
 * @property boolean $is_public
 * @property boolean $is_activated
 * @property string $email
 * @property timestamp $expires_at
 * @property string $token
 * @property BookitCategory $BookitCategory
 * 
 * @method integer        getCategoryId()        Returns the current record's "category_id" value
 * @method string         getTitle()             Returns the current record's "title" value
 * @method string         getSecondaryTitle()    Returns the current record's "secondary_title" value
 * @method string         getAuthor()            Returns the current record's "author" value
 * @method string         getShortDescription()  Returns the current record's "short_description" value
 * @method string         getDescription()       Returns the current record's "description" value
 * @method string         getLogo()              Returns the current record's "logo" value
 * @method string         getIsbn()              Returns the current record's "isbn" value
 * @method string         getUrl()               Returns the current record's "url" value
 * @method string         getPages()             Returns the current record's "pages" value
 * @method string         getDimensions()        Returns the current record's "dimensions" value
 * @method string         getWeight()            Returns the current record's "weight" value
 * @method string         getPosition()          Returns the current record's "position" value
 * @method string         getLocation()          Returns the current record's "location" value
 * @method string         getHowToApply()        Returns the current record's "how_to_apply" value
 * @method boolean        getIsPublic()          Returns the current record's "is_public" value
 * @method boolean        getIsActivated()       Returns the current record's "is_activated" value
 * @method string         getEmail()             Returns the current record's "email" value
 * @method timestamp      getExpiresAt()         Returns the current record's "expires_at" value
 * @method string         getToken()             Returns the current record's "token" value
 * @method BookitCategory getBookitCategory()    Returns the current record's "BookitCategory" value
 * @method BookitBook     setCategoryId()        Sets the current record's "category_id" value
 * @method BookitBook     setTitle()             Sets the current record's "title" value
 * @method BookitBook     setSecondaryTitle()    Sets the current record's "secondary_title" value
 * @method BookitBook     setAuthor()            Sets the current record's "author" value
 * @method BookitBook     setShortDescription()  Sets the current record's "short_description" value
 * @method BookitBook     setDescription()       Sets the current record's "description" value
 * @method BookitBook     setLogo()              Sets the current record's "logo" value
 * @method BookitBook     setIsbn()              Sets the current record's "isbn" value
 * @method BookitBook     setUrl()               Sets the current record's "url" value
 * @method BookitBook     setPages()             Sets the current record's "pages" value
 * @method BookitBook     setDimensions()        Sets the current record's "dimensions" value
 * @method BookitBook     setWeight()            Sets the current record's "weight" value
 * @method BookitBook     setPosition()          Sets the current record's "position" value
 * @method BookitBook     setLocation()          Sets the current record's "location" value
 * @method BookitBook     setHowToApply()        Sets the current record's "how_to_apply" value
 * @method BookitBook     setIsPublic()          Sets the current record's "is_public" value
 * @method BookitBook     setIsActivated()       Sets the current record's "is_activated" value
 * @method BookitBook     setEmail()             Sets the current record's "email" value
 * @method BookitBook     setExpiresAt()         Sets the current record's "expires_at" value
 * @method BookitBook     setToken()             Sets the current record's "token" value
 * @method BookitBook     setBookitCategory()    Sets the current record's "BookitCategory" value
 * 
 * @package    bookitfree
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseBookitBook extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('bookit_book');
        $this->hasColumn('category_id', 'integer', null, array(
             'type' => 'integer',
             'notnull' => true,
             ));
        $this->hasColumn('title', 'string', 255, array(
             'type' => 'string',
             'length' => 255,
             ));
        $this->hasColumn('secondary_title', 'string', 255, array(
             'type' => 'string',
             'length' => 255,
             ));
        $this->hasColumn('author', 'string', 255, array(
             'type' => 'string',
             'notnull' => true,
             'length' => 255,
             ));
        $this->hasColumn('short_description', 'string', 4000, array(
             'type' => 'string',
             'notnull' => true,
             'length' => 4000,
             ));
        $this->hasColumn('description', 'string', 4000, array(
             'type' => 'string',
             'notnull' => true,
             'length' => 4000,
             ));
        $this->hasColumn('logo', 'string', 255, array(
             'type' => 'string',
             'length' => 255,
             ));
        $this->hasColumn('isbn', 'string', 255, array(
             'type' => 'string',
             'notnull' => true,
             'length' => 255,
             ));
        $this->hasColumn('url', 'string', 255, array(
             'type' => 'string',
             'length' => 255,
             ));
        $this->hasColumn('pages', 'string', 255, array(
             'type' => 'string',
             'length' => 255,
             ));
        $this->hasColumn('dimensions', 'string', 255, array(
             'type' => 'string',
             'length' => 255,
             ));
        $this->hasColumn('weight', 'string', 255, array(
             'type' => 'string',
             'length' => 255,
             ));
        $this->hasColumn('position', 'string', 255, array(
             'type' => 'string',
             'notnull' => true,
             'length' => 255,
             ));
        $this->hasColumn('location', 'string', 255, array(
             'type' => 'string',
             'notnull' => true,
             'length' => 255,
             ));
        $this->hasColumn('how_to_apply', 'string', 4000, array(
             'type' => 'string',
             'notnull' => true,
             'length' => 4000,
             ));
        $this->hasColumn('is_public', 'boolean', null, array(
             'type' => 'boolean',
             'notnull' => true,
             'default' => 1,
             ));
        $this->hasColumn('is_activated', 'boolean', null, array(
             'type' => 'boolean',
             'notnull' => true,
             'default' => 0,
             ));
        $this->hasColumn('email', 'string', 255, array(
             'type' => 'string',
             'notnull' => true,
             'length' => 255,
             ));
        $this->hasColumn('expires_at', 'timestamp', null, array(
             'type' => 'timestamp',
             'notnull' => true,
             ));
        $this->hasColumn('token', 'string', 255, array(
             'type' => 'string',
             'notnull' => true,
             'unique' => true,
             'length' => 255,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('BookitCategory', array(
             'local' => 'category_id',
             'foreign' => 'id',
             'onDelete' => 'CASCADE'));

        $timestampable0 = new Doctrine_Template_Timestampable();
        $this->actAs($timestampable0);
    }
}