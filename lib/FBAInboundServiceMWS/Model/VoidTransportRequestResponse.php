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
 * FBAInboundServiceMWS_Model_VoidTransportRequestResponse
 * 
 * Properties:
 * <ul>
 * 
 * <li>VoidTransportRequestResult: FBAInboundServiceMWS_Model_VoidTransportRequestResult</li>
 * <li>ResponseMetadata: FBAInboundServiceMWS_Model_ResponseMetadata</li>
 * <li>ResponseHeaderMetadata: FBAInboundServiceMWS_Model_ResponseHeaderMetadata</li>
 *
 * </ul>
 */

 class FBAInboundServiceMWS_Model_VoidTransportRequestResponse extends FBAInboundServiceMWS_Model {

    public function __construct($data = null)
    {
    $this->_fields = array (
    'VoidTransportRequestResult' => array('FieldValue' => null, 'FieldType' => 'FBAInboundServiceMWS_Model_VoidTransportRequestResult'),
    'ResponseMetadata' => array('FieldValue' => null, 'FieldType' => 'FBAInboundServiceMWS_Model_ResponseMetadata'),
    'ResponseHeaderMetadata' => array('FieldValue' => null, 'FieldType' => 'FBAInboundServiceMWS_Model_ResponseHeaderMetadata'),
    );
    parent::__construct($data);
    }

    /**
     * Get the value of the VoidTransportRequestResult property.
     *
     * @return VoidTransportRequestResult VoidTransportRequestResult.
     */
    public function getVoidTransportRequestResult()
    {
        return $this->_fields['VoidTransportRequestResult']['FieldValue'];
    }

    /**
     * Set the value of the VoidTransportRequestResult property.
     *
     * @param FBAInboundServiceMWS_Model_VoidTransportRequestResult voidTransportRequestResult
     * @return this instance
     */
    public function setVoidTransportRequestResult($value)
    {
        $this->_fields['VoidTransportRequestResult']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if VoidTransportRequestResult is set.
     *
     * @return true if VoidTransportRequestResult is set.
     */
    public function isSetVoidTransportRequestResult()
    {
                return !is_null($this->_fields['VoidTransportRequestResult']['FieldValue']);
            }

    /**
     * Set the value of VoidTransportRequestResult, return this.
     *
     * @param voidTransportRequestResult
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withVoidTransportRequestResult($value)
    {
        $this->setVoidTransportRequestResult($value);
        return $this;
    }

    /**
     * Get the value of the ResponseMetadata property.
     *
     * @return ResponseMetadata ResponseMetadata.
     */
    public function getResponseMetadata()
    {
        return $this->_fields['ResponseMetadata']['FieldValue'];
    }

    /**
     * Set the value of the ResponseMetadata property.
     *
     * @param FBAInboundServiceMWS_Model_ResponseMetadata responseMetadata
     * @return this instance
     */
    public function setResponseMetadata($value)
    {
        $this->_fields['ResponseMetadata']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if ResponseMetadata is set.
     *
     * @return true if ResponseMetadata is set.
     */
    public function isSetResponseMetadata()
    {
                return !is_null($this->_fields['ResponseMetadata']['FieldValue']);
            }

    /**
     * Set the value of ResponseMetadata, return this.
     *
     * @param responseMetadata
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withResponseMetadata($value)
    {
        $this->setResponseMetadata($value);
        return $this;
    }

    /**
     * Get the value of the ResponseHeaderMetadata property.
     *
     * @return ResponseHeaderMetadata ResponseHeaderMetadata.
     */
    public function getResponseHeaderMetadata()
    {
        return $this->_fields['ResponseHeaderMetadata']['FieldValue'];
    }

    /**
     * Set the value of the ResponseHeaderMetadata property.
     *
     * @param FBAInboundServiceMWS_Model_ResponseHeaderMetadata responseHeaderMetadata
     * @return this instance
     */
    public function setResponseHeaderMetadata($value)
    {
        $this->_fields['ResponseHeaderMetadata']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if ResponseHeaderMetadata is set.
     *
     * @return true if ResponseHeaderMetadata is set.
     */
    public function isSetResponseHeaderMetadata()
    {
                return !is_null($this->_fields['ResponseHeaderMetadata']['FieldValue']);
            }

    /**
     * Set the value of ResponseHeaderMetadata, return this.
     *
     * @param responseHeaderMetadata
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withResponseHeaderMetadata($value)
    {
        $this->setResponseHeaderMetadata($value);
        return $this;
    }
    /**
     * Construct FBAInboundServiceMWS_Model_VoidTransportRequestResponse from XML string
     * 
     * @param $xml
     *        XML string to construct from
     *
     * @return FBAInboundServiceMWS_Model_VoidTransportRequestResponse 
     */
    public static function fromXML($xml)
    {
        $dom = new DOMDocument();
        $dom->loadXML($xml);
        $xpath = new DOMXPath($dom);
        $response = $xpath->query("//*[local-name()='VoidTransportRequestResponse']");
        if ($response->length == 1) {
            return new FBAInboundServiceMWS_Model_VoidTransportRequestResponse(($response->item(0))); 
        } else {
            throw new Exception ("Unable to construct FBAInboundServiceMWS_Model_VoidTransportRequestResponse from provided XML. 
                                  Make sure that VoidTransportRequestResponse is a root element");
        }
    }
    /**
     * XML Representation for this object
     * 
     * @return string XML for this object
     */
    public function toXML() 
    {
        $xml = "";
        $xml .= "<VoidTransportRequestResponse xmlns=\"http://mws.amazonaws.com/FulfillmentInboundShipment/2010-10-01/\">";
        $xml .= $this->_toXMLFragment();
        $xml .= "</VoidTransportRequestResponse>";
        return $xml;
    }

}
