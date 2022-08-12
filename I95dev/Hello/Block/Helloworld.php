<?php
namespace I95dev\Hello\Block;

use Magento\Framework\View\Element\Template;
use Magento\Framework\View\Element\Template\Context;
use Magento\Framework\App\Config\ScopeConfigInterface;

class Helloworld extends \Magento\Framework\View\Element\Template
{        
     protected $scopeConfig;

 

   /**
   * Recipient email config path
   */
   const PATH_SURVEY_IS_VISIBLE_ON_CHECKOUT_PAGE = 'helloworld/general/display_text';

 

   public function __construct(\Magento\Framework\App\Config\ScopeConfigInterface $scopeConfig)
   {
      $this->scopeConfig = $scopeConfig;
   }
    
    /*
     * @return bool
     */
  
    public function getDisplayText()
    {
        return $this->scopeConfig->getValue(
self::PATH_SURVEY_IS_VISIBLE_ON_CHECKOUT_PAGE
);


        
    }        
} 
