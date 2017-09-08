<?php

/**
 * @author BitPearl
 * @copyright 2017
 * Class for creating transactions on demand
 */

class BitPearl{
    var $security_token = "";
    var $app_token = "";
    var $currency = "dollar";
    var $price = 1;
    var $payment_description = "";
    var $need_confirmations = 1;
    var $return_url = "";
    var $postback_url = "";
    
    function create_transaction(){
        $result = file_get_contents('https://bitpearl.net/api/?security_token='.$this->security_token.'&app_token='.$this->app_token.'&currency='.$this->currency.'&price='.$this->price.'&payment_description='.urlencode($this->payment_description).'&confirmations='.$this->need_confirmations.'&return_url='.urlencode($this->return_url).'&postback_url='.urlencode($this->postback_url));
        $result = utf8_encode($result);
        return json_decode($result, true);
    }
}


?>