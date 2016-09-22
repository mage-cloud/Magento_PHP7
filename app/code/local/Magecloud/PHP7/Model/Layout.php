<?php
/**
 * @author Thomas Schmickler (www.schmickler.de)
 * @copyright Magecloud GmbH & Co.KG (www.magecloud.de)
 */ 
class Magecloud_PHP7_Model_Layout extends Mage_Core_Model_Layout
{
    public function getOutput()
    {
        $out = '';
        if (!empty($this->_output)) {
            foreach ($this->_output as $callback) {
                $out .= $this->getBlock($callback[0])->{$callback[1]}();
            }
        }
        return $out;
    }
}