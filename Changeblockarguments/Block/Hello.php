<?php

namespace I95dev\Changeblockarguments\Block;

/*
 * I95dev Hello Block
 */

class Hello extends \Magento\Framework\View\Element\Template
{
    /**
     * @return $this
     */
    protected function _prepareLayout()
    {
        return parent::_prepareLayout();
    }

    /**
     * getContentForDisplay
     * @return string
     */
   
    public function getContent()
    {
        return __("hi hello bye");
    }
 
}
?>
