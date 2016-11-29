<?php

add_filter('woocommerce_get_myaccount_page_permalink','rcl_edit_wc_page_myaccount');
function rcl_edit_wc_page_myaccount($permalink){
    global $user_LK;
    $url = rcl_format_url(get_author_posts_url($user_LK),'wc-account');
    return $url;
}

add_action('woocommerce_get_endpoint_url','rcl_edit_wc_endpoint_url',10,4);
function rcl_edit_wc_endpoint_url($url, $endpoint, $value, $permalink){
    global $user_LK,$rcl_options;
    
    if(isset($rcl_options['view_user_lk_rcl'])&&$rcl_options['view_user_lk_rcl']) 
        $user_url = get_permalink($rcl_options['lk_page_rcl']);
    else 
        $user_url = get_author_posts_url($user_LK);
    
    if($user_url!=$permalink&&!$value) return $url;
    
    $accurl = rcl_format_url($user_url,'wc-account');
    
    if($value) $accurl .= '&'.$endpoint.'='.$value;
    else $accurl .= '&'.$endpoint.'='.$user_LK;
    
    return $accurl;
}

add_action('init','add_wc_account_tab');
function add_wc_account_tab(){
    if(!class_exists('WC_Shortcode_My_Account')) return false;
    rcl_tab('wc-account','wc_account_tab','WC Аккаунт',array('class'=>'fa-shopping-bag','public'=>1));
}
function wc_account_tab($user_LK){
    
    ob_start();
    
    $tab_url = rcl_format_url(get_author_posts_url($user_LK),'wc-account');
    
    $protocol  = @( $_SERVER["HTTPS"] != 'on' ) ? 'http://':  'https://';
    $current_url = $protocol.$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'];
    
    if($tab_url!=$current_url) echo '<p align="right"><a class="recall-button" href="'.$tab_url.'"><i class="fa fa-share"></i><span>Вернуться</span></a></p>';
    
    $acc = new WC_Shortcode_My_Account();
    
    if(isset($_GET['view-order'])){    
        
        echo $acc->get(array('view-order'=>$_GET['view-order']));
        
    }else if(isset($_GET['edit-address'])){   

        echo $acc->get(array('edit-address'=>$_GET['edit-address']));
        
    }else{
        
        echo $acc->get(array('my_account'));
        
    }

    $content = ob_get_contents();
    ob_end_clean();
        
     return $content;
}