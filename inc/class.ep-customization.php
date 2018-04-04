<?php

class EPC_Class {

    public function __construct() {      
     

        add_filter( 'woocommerce_api_order_response', array($this, 'EPC_wc_api_order_response'), 10, 1 ); 


    }

    public function EPC_wc_api_order_response( $order_data ) {
         $subscriptions_ids = wcs_get_subscriptions_for_order( $order_data['id'] );
        // We get the related subscription for this order
        foreach( $subscriptions_ids as $subscription_id => $subscription_obj ){
            
                $order_data['subscription_id'] = $subscription_id;


                $subscriptions = $subscription_obj->get_related_orders();

                $order_data['no_of_orders'] = sizeof($subscriptions);
                return $order_data;
           
        }

        $order_data['subscription_id'] = "";
        $order_data['no_of_subscriptions']  = 0;
        return $order_data;
    }
    
    
}
