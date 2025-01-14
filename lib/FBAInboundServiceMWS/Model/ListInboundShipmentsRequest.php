<?php
/*******************************************************************************
 * Copyright 2009-2014 Amazon Services. All Rights Reserved.
 * Licensed under the Apache License, Version 2.0 (the "License"); 
 *
 * You may not use this file except in compliance with the License. 
 * You may obtain a copy of the License at: http://aws.amazon.com/apache2.0
 * This file is distributed on an "AS IS" BASIS, WITHOUT WARRANTIES OR 
 * CONDITIONS OF ANY KIND, either express or implied. See the License for the 
 * specific language governing permissions and limitations under the License.
 *******************************************************************************
 * PHP Version 5
 * @category Amazon
 * @package  FBA Inbound Service MWS
 * @version  2010-10-01
 * Library Version: 2014-09-30
 * Generated: Fri Nov 21 18:21:09 GMT 2014
 */

/**
 *  @see FBAInboundServiceMWS_Model
 */

require_once(dirname(__FILE__) . '/../Model.php');


/**
 * FBAInboundServiceMWS_Model_ListInboundShipmentsRequest
 * 
 * Properties:
 * <ul>
 * 
 * <li>SellerId: string</li>
 * <li>MWSAuthToken: string</li>
 * <li>Marketplace: string</li>
 * <li>ShipmentStatusList: FBAInboundServiceMWS_Model_ShipmentStatusList</li>
 * <li>ShipmentIdList: FBAInboundServiceMWS_Model_ShipmentIdList</li>
 * <li>LastUpdatedBefore: string</li>
 * <li>LastUpdatedAfter: string</li>
 *
 * </ul>
 */

 class FBAInboundServiceMWS_Model_ListInboundShipmentsRequest extends FBAInboundServiceMWS_Model {

    public function __construct($data = null)
    {
    $this->_fields = array (
    'SellerId' => array('FieldValue' => null, 'FieldType' => 'string'),
    'MWSAuthToken' => array('FieldValue' => null, 'FieldType' => 'string'),
    'Marketplace' => array('FieldValue' => null, 'FieldType' => 'string'),
    'ShipmentStatusList' => array('FieldValue' => null, 'FieldType' => 'FBAInboundServiceMWS_Model_ShipmentStatusList'),
    'ShipmentIdList' => array('FieldValue' => null, 'FieldType' => 'FBAInboundServiceMWS_Model_ShipmentIdList'),
    'LastUpdatedBefore' => array('FieldValue' => null, 'FieldType' => 'string'),
    'LastUpdatedAfter' => array('FieldValue' => null, 'FieldType' => 'string'),
    );
    parent::__construct($data);
    }

    /**
     * Get the value of the SellerId property.
     *
     * @return String SellerId.
     */
    public function getSellerId()
    {
        return $this->_fields['SellerId']['FieldValue'];
    }

    /**
     * Set the value of the SellerId property.
     *
     * @param string sellerId
     * @return this instance
     */
    public function setSellerId($value)
    {
        $this->_fields['SellerId']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if SellerId is set.
     *
     * @return true if SellerId is set.
     */
    public function isSetSellerId()
    {
                return !is_null($this->_fields['SellerId']['FieldValue']);
            }

    /**
     * Set the value of SellerId, return this.
     *
     * @param sellerId
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withSellerId($value)
    {
        $this->setSellerId($value);
        return $this;
    }

    /**
     * Get the value of the MWSAuthToken property.
     *
     * @return String MWSAuthToken.
     */
    public function getMWSAuthToken()
    {
        return $this->_fields['MWSAuthToken']['FieldValue'];
    }

    /**
     * Set the value of the MWSAuthToken property.
     *
     * @param string mwsAuthToken
     * @return this instance
     */
    public function setMWSAuthToken($value)
    {
        $this->_fields['MWSAuthToken']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if MWSAuthToken is set.
     *
     * @return true if MWSAuthToken is set.
     */
    public function isSetMWSAuthToken()
    {
                return !is_null($this->_fields['MWSAuthToken']['FieldValue']);
            }

    /**
     * Set the value of MWSAuthToken, return this.
     *
     * @param mwsAuthToken
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withMWSAuthToken($value)
    {
        $this->setMWSAuthToken($value);
        return $this;
    }

    /**
     * Get the value of the Marketplace property.
     *
     * @return String Marketplace.
     */
    public function getMarketplace()
    {
        return $this->_fields['Marketplace']['FieldValue'];
    }

    /**
     * Set the value of the Marketplace property.
     *
     * @param string marketplace
     * @return this instance
     */
    public function setMarketplace($value)
    {
        $this->_fields['Marketplace']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if Marketplace is set.
     *
     * @return true if Marketplace is set.
     */
    public function isSetMarketplace()
    {
                return !is_null($this->_fields['Marketplace']['FieldValue']);
            }

    /**
     * Set the value of Marketplace, return this.
     *
     * @param marketplace
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withMarketplace($value)
    {
        $this->setMarketplace($value);
        return $this;
    }

    /**
     * Get the value of the ShipmentStatusList property.
     *
     * @return ShipmentStatusList ShipmentStatusList.
     */
    public function getShipmentStatusList()
    {
        return $this->_fields['ShipmentStatusList']['FieldValue'];
    }

    /**
     * Set the value of the ShipmentStatusList property.
     *
     * @param FBAInboundServiceMWS_Model_ShipmentStatusList shipmentStatusList
     * @return this instance
     */
    public function setShipmentStatusList($value)
    {
        $this->_fields['ShipmentStatusList']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if ShipmentStatusList is set.
     *
     * @return true if ShipmentStatusList is set.
     */
    public function isSetShipmentStatusList()
    {
                return !is_null($this->_fields['ShipmentStatusList']['FieldValue']);
            }

    /**
     * Set the value of ShipmentStatusList, return this.
     *
     * @param shipmentStatusList
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withShipmentStatusList($value)
    {
        $this->setShipmentStatusList($value);
        return $this;
    }

    /**
     * Get the value of the ShipmentIdList property.
     *
     * @return ShipmentIdList ShipmentIdList.
     */
    public function getShipmentIdList()
    {
        return $this->_fields['ShipmentIdList']['FieldValue'];
    }

    /**
     * Set the value of the ShipmentIdList property.
     *
     * @param FBAInboundServiceMWS_Model_ShipmentIdList shipmentIdList
     * @return this instance
     */
    public function setShipmentIdList($value)
    {
        $this->_fields['ShipmentIdList']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if ShipmentIdList is set.
     *
     * @return true if ShipmentIdList is set.
     */
    public function isSetShipmentIdList()
    {
                return !is_null($this->_fields['ShipmentIdList']['FieldValue']);
            }

    /**
     * Set the value of ShipmentIdList, return this.
     *
     * @param shipmentIdList
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withShipmentIdList($value)
    {
        $this->setShipmentIdList($value);
        return $this;
    }

    /**
     * Get the value of the LastUpdatedBefore property.
     *
     * @return XMLGregorianCalendar LastUpdatedBefore.
     */
    public function getLastUpdatedBefore()
    {
        return $this->_fields['LastUpdatedBefore']['FieldValue'];
    }

    /**
     * Set the value of the LastUpdatedBefore property.
     *
     * @param string lastUpdatedBefore
     * @return this instance
     */
    public function setLastUpdatedBefore($value)
    {
        $this->_fields['LastUpdatedBefore']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if LastUpdatedBefore is set.
     *
     * @return true if LastUpdatedBefore is set.
     */
    public function isSetLastUpdatedBefore()
    {
                return !is_null($this->_fields['LastUpdatedBefore']['FieldValue']);
            }

    /**
     * Set the value of LastUpdatedBefore, return this.
     *
     * @param lastUpdatedBefore
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withLastUpdatedBefore($value)
    {
        $this->setLastUpdatedBefore($value);
        return $this;
    }

    /**
     * Get the value of the LastUpdatedAfter property.
     *
     * @return XMLGregorianCalendar LastUpdatedAfter.
     */
    public function getLastUpdatedAfter()
    {
        return $this->_fields['LastUpdatedAfter']['FieldValue'];
    }

    /**
     * Set the value of the LastUpdatedAfter property.
     *
     * @param string lastUpdatedAfter
     * @return this instance
     */
    public function setLastUpdatedAfter($value)
    {
        $this->_fields['LastUpdatedAfter']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if LastUpdatedAfter is set.
     *
     * @return true if LastUpdatedAfter is set.
     */
    public function isSetLastUpdatedAfter()
    {
                return !is_null($this->_fields['LastUpdatedAfter']['FieldValue']);
            }

    /**
     * Set the value of LastUpdatedAfter, return this.
     *
     * @param lastUpdatedAfter
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withLastUpdatedAfter($value)
    {
        $this->setLastUpdatedAfter($value);
        return $this;
    }

}
