<?php
/*
 +--------------------------------------------------------------------+
 | CiviCRM version 4.4                                                |
 +--------------------------------------------------------------------+
 | Copyright CiviCRM LLC (c) 2004-2013                                |
 +--------------------------------------------------------------------+
 | This file is a part of CiviCRM.                                    |
 |                                                                    |
 | CiviCRM is free software; you can copy, modify, and distribute it  |
 | under the terms of the GNU Affero General Public License           |
 | Version 3, 19 November 2007 and the CiviCRM Licensing Exception.   |
 |                                                                    |
 | CiviCRM is distributed in the hope that it will be useful, but     |
 | WITHOUT ANY WARRANTY; without even the implied warranty of         |
 | MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.               |
 | See the GNU Affero General Public License for more details.        |
 |                                                                    |
 | You should have received a copy of the GNU Affero General Public   |
 | License and the CiviCRM Licensing Exception along                  |
 | with this program; if not, contact CiviCRM LLC                     |
 | at info[AT]civicrm[DOT]org. If you have questions about the        |
 | GNU Affero General Public License or the licensing of CiviCRM,     |
 | see the CiviCRM license FAQ at http://civicrm.org/licensing        |
 +--------------------------------------------------------------------+
*/

/**
 *
 * @package CRM
 * @copyright CiviCRM LLC (c) 2004-2013
 *
 * Generated from xml/schema/CRM/Contribute/Widget.xml
 * DO NOT EDIT.  Generated by CRM_Core_CodeGen
 */

namespace Civi\Contribute;

require_once 'Civi/Core/Entity.php';

use Doctrine\ORM\Mapping as ORM;
use Civi\API\Annotation as CiviAPI;
use JMS\Serializer\Annotation as JMS;

/**
 * Widget
 *
 * @CiviAPI\Entity("Widget")
 * @CiviAPI\Permission()
 * @ORM\Table(name="civicrm_contribution_widget", indexes={@ORM\Index(name="FK_civicrm_contribution_widget_contribution_page_id", columns={"contribution_page_id"})})
 * @ORM\Entity
 *
 */
class Widget extends \Civi\Core\Entity {

  /**
   * @var integer
   *
   * @JMS\Type("integer")
   * @ORM\Column(name="id", type="integer", nullable=false, options={"unsigned":true} )
   * @ORM\Id
   * @ORM\GeneratedValue(strategy="AUTO")
   */
  private $id;
    
  /**
   * @var \Civi\Contribute\ContributionPage
   *
   * 
   * @ORM\ManyToOne(targetEntity="Civi\Contribute\ContributionPage")
   * @ORM\JoinColumns({@ORM\JoinColumn(name="contribution_page_id", referencedColumnName="id", onDelete="CASCADE")})
   */
  private $contributionPage;
  
  /**
   * @var boolean
   *
   * @JMS\Type("boolean")
   * @ORM\Column(name="is_active", type="boolean", nullable=true)
   * 
   */
  private $isActive;
  
  /**
   * @var string
   *
   * @JMS\Type("string")
   * @ORM\Column(name="title", type="string", length=255, nullable=true)
   * 
   */
  private $title;
  
  /**
   * @var string
   *
   * @JMS\Type("string")
   * @ORM\Column(name="url_logo", type="string", length=255, nullable=true)
   * 
   */
  private $urlLogo;
  
  /**
   * @var string
   *
   * @JMS\Type("string")
   * @ORM\Column(name="button_title", type="string", length=255, nullable=true)
   * 
   */
  private $buttonTitle;
  
  /**
   * @var text
   *
   * @JMS\Type("text")
   * @ORM\Column(name="about", type="text", length=65535, nullable=true)
   * 
   */
  private $about;
  
  /**
   * @var string
   *
   * @JMS\Type("string")
   * @ORM\Column(name="url_homepage", type="string", length=255, nullable=true)
   * 
   */
  private $urlHomepage;
  
  /**
   * @var string
   *
   * @JMS\Type("string")
   * @ORM\Column(name="color_title", type="string", length=10, nullable=true)
   * 
   */
  private $colorTitle;
  
  /**
   * @var string
   *
   * @JMS\Type("string")
   * @ORM\Column(name="color_button", type="string", length=10, nullable=true)
   * 
   */
  private $colorButton;
  
  /**
   * @var string
   *
   * @JMS\Type("string")
   * @ORM\Column(name="color_bar", type="string", length=10, nullable=true)
   * 
   */
  private $colorBar;
  
  /**
   * @var string
   *
   * @JMS\Type("string")
   * @ORM\Column(name="color_main_text", type="string", length=10, nullable=true)
   * 
   */
  private $colorMainText;
  
  /**
   * @var string
   *
   * @JMS\Type("string")
   * @ORM\Column(name="color_main", type="string", length=10, nullable=true)
   * 
   */
  private $colorMain;
  
  /**
   * @var string
   *
   * @JMS\Type("string")
   * @ORM\Column(name="color_main_bg", type="string", length=10, nullable=true)
   * 
   */
  private $colorMainBg;
  
  /**
   * @var string
   *
   * @JMS\Type("string")
   * @ORM\Column(name="color_bg", type="string", length=10, nullable=true)
   * 
   */
  private $colorBg;
  
  /**
   * @var string
   *
   * @JMS\Type("string")
   * @ORM\Column(name="color_about_link", type="string", length=10, nullable=true)
   * 
   */
  private $colorAboutLink;
  
  /**
   * @var string
   *
   * @JMS\Type("string")
   * @ORM\Column(name="color_homepage_link", type="string", length=10, nullable=true)
   * 
   */
  private $colorHomepageLink;

  /**
   * Get id
   *
   * @return integer
   */
  public function getId() {
    return $this->id;
  }
    
  /**
   * Set contributionPage
   *
   * @param \Civi\Contribute\ContributionPage $contributionPage
   * @return Widget
   */
  public function setContributionPage(\Civi\Contribute\ContributionPage $contributionPage = null) {
    $this->contributionPage = $contributionPage;
    return $this;
  }

  /**
   * Get contributionPage
   *
   * @return \Civi\Contribute\ContributionPage
   */
  public function getContributionPage() {
    return $this->contributionPage;
  }
  
  /**
   * Set isActive
   *
   * @param boolean $isActive
   * @return Widget
   */
  public function setIsActive($isActive) {
    $this->isActive = $isActive;
    return $this;
  }

  /**
   * Get isActive
   *
   * @return boolean
   */
  public function getIsActive() {
    return $this->isActive;
  }
  
  /**
   * Set title
   *
   * @param string $title
   * @return Widget
   */
  public function setTitle($title) {
    $this->title = $title;
    return $this;
  }

  /**
   * Get title
   *
   * @return string
   */
  public function getTitle() {
    return $this->title;
  }
  
  /**
   * Set urlLogo
   *
   * @param string $urlLogo
   * @return Widget
   */
  public function setUrlLogo($urlLogo) {
    $this->urlLogo = $urlLogo;
    return $this;
  }

  /**
   * Get urlLogo
   *
   * @return string
   */
  public function getUrlLogo() {
    return $this->urlLogo;
  }
  
  /**
   * Set buttonTitle
   *
   * @param string $buttonTitle
   * @return Widget
   */
  public function setButtonTitle($buttonTitle) {
    $this->buttonTitle = $buttonTitle;
    return $this;
  }

  /**
   * Get buttonTitle
   *
   * @return string
   */
  public function getButtonTitle() {
    return $this->buttonTitle;
  }
  
  /**
   * Set about
   *
   * @param text $about
   * @return Widget
   */
  public function setAbout($about) {
    $this->about = $about;
    return $this;
  }

  /**
   * Get about
   *
   * @return text
   */
  public function getAbout() {
    return $this->about;
  }
  
  /**
   * Set urlHomepage
   *
   * @param string $urlHomepage
   * @return Widget
   */
  public function setUrlHomepage($urlHomepage) {
    $this->urlHomepage = $urlHomepage;
    return $this;
  }

  /**
   * Get urlHomepage
   *
   * @return string
   */
  public function getUrlHomepage() {
    return $this->urlHomepage;
  }
  
  /**
   * Set colorTitle
   *
   * @param string $colorTitle
   * @return Widget
   */
  public function setColorTitle($colorTitle) {
    $this->colorTitle = $colorTitle;
    return $this;
  }

  /**
   * Get colorTitle
   *
   * @return string
   */
  public function getColorTitle() {
    return $this->colorTitle;
  }
  
  /**
   * Set colorButton
   *
   * @param string $colorButton
   * @return Widget
   */
  public function setColorButton($colorButton) {
    $this->colorButton = $colorButton;
    return $this;
  }

  /**
   * Get colorButton
   *
   * @return string
   */
  public function getColorButton() {
    return $this->colorButton;
  }
  
  /**
   * Set colorBar
   *
   * @param string $colorBar
   * @return Widget
   */
  public function setColorBar($colorBar) {
    $this->colorBar = $colorBar;
    return $this;
  }

  /**
   * Get colorBar
   *
   * @return string
   */
  public function getColorBar() {
    return $this->colorBar;
  }
  
  /**
   * Set colorMainText
   *
   * @param string $colorMainText
   * @return Widget
   */
  public function setColorMainText($colorMainText) {
    $this->colorMainText = $colorMainText;
    return $this;
  }

  /**
   * Get colorMainText
   *
   * @return string
   */
  public function getColorMainText() {
    return $this->colorMainText;
  }
  
  /**
   * Set colorMain
   *
   * @param string $colorMain
   * @return Widget
   */
  public function setColorMain($colorMain) {
    $this->colorMain = $colorMain;
    return $this;
  }

  /**
   * Get colorMain
   *
   * @return string
   */
  public function getColorMain() {
    return $this->colorMain;
  }
  
  /**
   * Set colorMainBg
   *
   * @param string $colorMainBg
   * @return Widget
   */
  public function setColorMainBg($colorMainBg) {
    $this->colorMainBg = $colorMainBg;
    return $this;
  }

  /**
   * Get colorMainBg
   *
   * @return string
   */
  public function getColorMainBg() {
    return $this->colorMainBg;
  }
  
  /**
   * Set colorBg
   *
   * @param string $colorBg
   * @return Widget
   */
  public function setColorBg($colorBg) {
    $this->colorBg = $colorBg;
    return $this;
  }

  /**
   * Get colorBg
   *
   * @return string
   */
  public function getColorBg() {
    return $this->colorBg;
  }
  
  /**
   * Set colorAboutLink
   *
   * @param string $colorAboutLink
   * @return Widget
   */
  public function setColorAboutLink($colorAboutLink) {
    $this->colorAboutLink = $colorAboutLink;
    return $this;
  }

  /**
   * Get colorAboutLink
   *
   * @return string
   */
  public function getColorAboutLink() {
    return $this->colorAboutLink;
  }
  
  /**
   * Set colorHomepageLink
   *
   * @param string $colorHomepageLink
   * @return Widget
   */
  public function setColorHomepageLink($colorHomepageLink) {
    $this->colorHomepageLink = $colorHomepageLink;
    return $this;
  }

  /**
   * Get colorHomepageLink
   *
   * @return string
   */
  public function getColorHomepageLink() {
    return $this->colorHomepageLink;
  }

  /**
   * returns all the column names of this table
   *
   * @access public
   * @return array
   */
  public static $_fields = NULL;

  static function &fields( ) {
    if ( !self::$_fields) {
      self::$_fields = array (
      
              'id' => array(
      
        'name' => 'id',
        'propertyName' => 'id',
        'type' => \CRM_Utils_Type::T_INT,
                        'required' => true,
                                                     
                                    
                          ),
      
              'contribution_page_id' => array(
      
        'name' => 'contribution_page_id',
        'propertyName' => 'contributionPage',
        'type' => \CRM_Utils_Type::T_INT,
                                                             
                                    
                'FKClassName' => 'CRM_Contribute_DAO_ContributionPage',
                          ),
      
              'is_active' => array(
      
        'name' => 'is_active',
        'propertyName' => 'isActive',
        'type' => \CRM_Utils_Type::T_BOOLEAN,
                                                             
                                    
                          ),
      
              'title' => array(
      
        'name' => 'title',
        'propertyName' => 'title',
        'type' => \CRM_Utils_Type::T_STRING,
                'title' => ts('Title'),
                                 'maxlength' => 255,
                                 'size' => \CRM_Utils_Type::HUGE,
                           
                                    
                          ),
      
              'url_logo' => array(
      
        'name' => 'url_logo',
        'propertyName' => 'urlLogo',
        'type' => \CRM_Utils_Type::T_STRING,
                'title' => ts('Url Logo'),
                                 'maxlength' => 255,
                                 'size' => \CRM_Utils_Type::HUGE,
                           
                                    
                          ),
      
              'button_title' => array(
      
        'name' => 'button_title',
        'propertyName' => 'buttonTitle',
        'type' => \CRM_Utils_Type::T_STRING,
                'title' => ts('Button Title'),
                                 'maxlength' => 255,
                                 'size' => \CRM_Utils_Type::HUGE,
                           
                                    
                          ),
      
              'about' => array(
      
        'name' => 'about',
        'propertyName' => 'about',
        'type' => \CRM_Utils_Type::T_TEXT,
                'title' => ts('About'),
                                 'maxlength' => 65535,
                                            
                                    
                          ),
      
              'url_homepage' => array(
      
        'name' => 'url_homepage',
        'propertyName' => 'urlHomepage',
        'type' => \CRM_Utils_Type::T_STRING,
                'title' => ts('Url Homepage'),
                                 'maxlength' => 255,
                                 'size' => \CRM_Utils_Type::HUGE,
                           
                                    
                          ),
      
              'color_title' => array(
      
        'name' => 'color_title',
        'propertyName' => 'colorTitle',
        'type' => \CRM_Utils_Type::T_STRING,
                'title' => ts('Color Title'),
                                 'maxlength' => 10,
                                 'size' => \CRM_Utils_Type::TWELVE,
                           
                                    
                          ),
      
              'color_button' => array(
      
        'name' => 'color_button',
        'propertyName' => 'colorButton',
        'type' => \CRM_Utils_Type::T_STRING,
                'title' => ts('Color Button'),
                                 'maxlength' => 10,
                                 'size' => \CRM_Utils_Type::TWELVE,
                           
                                    
                          ),
      
              'color_bar' => array(
      
        'name' => 'color_bar',
        'propertyName' => 'colorBar',
        'type' => \CRM_Utils_Type::T_STRING,
                'title' => ts('Color Bar'),
                                 'maxlength' => 10,
                                 'size' => \CRM_Utils_Type::TWELVE,
                           
                                    
                          ),
      
              'color_main_text' => array(
      
        'name' => 'color_main_text',
        'propertyName' => 'colorMainText',
        'type' => \CRM_Utils_Type::T_STRING,
                'title' => ts('Color Main Text'),
                                 'maxlength' => 10,
                                 'size' => \CRM_Utils_Type::TWELVE,
                           
                                    
                          ),
      
              'color_main' => array(
      
        'name' => 'color_main',
        'propertyName' => 'colorMain',
        'type' => \CRM_Utils_Type::T_STRING,
                'title' => ts('Color Main'),
                                 'maxlength' => 10,
                                 'size' => \CRM_Utils_Type::TWELVE,
                           
                                    
                          ),
      
              'color_main_bg' => array(
      
        'name' => 'color_main_bg',
        'propertyName' => 'colorMainBg',
        'type' => \CRM_Utils_Type::T_STRING,
                'title' => ts('Color Main Bg'),
                                 'maxlength' => 10,
                                 'size' => \CRM_Utils_Type::TWELVE,
                           
                                    
                          ),
      
              'color_bg' => array(
      
        'name' => 'color_bg',
        'propertyName' => 'colorBg',
        'type' => \CRM_Utils_Type::T_STRING,
                'title' => ts('Color Bg'),
                                 'maxlength' => 10,
                                 'size' => \CRM_Utils_Type::TWELVE,
                           
                                    
                          ),
      
              'color_about_link' => array(
      
        'name' => 'color_about_link',
        'propertyName' => 'colorAboutLink',
        'type' => \CRM_Utils_Type::T_STRING,
                'title' => ts('Color About Link'),
                                 'maxlength' => 10,
                                 'size' => \CRM_Utils_Type::TWELVE,
                           
                                    
                          ),
      
              'color_homepage_link' => array(
      
        'name' => 'color_homepage_link',
        'propertyName' => 'colorHomepageLink',
        'type' => \CRM_Utils_Type::T_STRING,
                'title' => ts('Color Homepage Link'),
                                 'maxlength' => 10,
                                 'size' => \CRM_Utils_Type::TWELVE,
                           
                                    
                          ),
             );
    }
    return self::$_fields;
  }

}
