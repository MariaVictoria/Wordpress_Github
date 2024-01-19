<?php

    $digital_books_theme_css= "";

    /*--------------------------- Scroll to top -------------------*/

    $digital_books_scroll_position = get_theme_mod( 'digital_books_scroll_top_position','Right');
    if($digital_books_scroll_position == 'Right'){
        $digital_books_theme_css .='#button{';
            $digital_books_theme_css .='right: 20px;';
        $digital_books_theme_css .='}';
    }else if($digital_books_scroll_position == 'Left'){
        $digital_books_theme_css .='#button{';
            $digital_books_theme_css .='left: 20px;';
        $digital_books_theme_css .='}';
    }else if($digital_books_scroll_position == 'Center'){
        $digital_books_theme_css .='#button{';
            $digital_books_theme_css .='right: 50%;left: 50%;';
        $digital_books_theme_css .='}';
    }

    /*--------------------------- Slider Opacity -------------------*/

    $digital_books_theme_lay = get_theme_mod( 'digital_books_slider_opacity_color','');
    if($digital_books_theme_lay == '0'){
        $digital_books_theme_css .='#top-slider img{';
            $digital_books_theme_css .='opacity:0';
        $digital_books_theme_css .='}';
        }else if($digital_books_theme_lay == '0.1'){
        $digital_books_theme_css .='#top-slider img{';
            $digital_books_theme_css .='opacity:0.1';
        $digital_books_theme_css .='}';
        }else if($digital_books_theme_lay == '0.2'){
        $digital_books_theme_css .='#top-slider img{';
            $digital_books_theme_css .='opacity:0.2';
        $digital_books_theme_css .='}';
        }else if($digital_books_theme_lay == '0.3'){
        $digital_books_theme_css .='#top-slider img{';
            $digital_books_theme_css .='opacity:0.3';
        $digital_books_theme_css .='}';
        }else if($digital_books_theme_lay == '0.4'){
        $digital_books_theme_css .='#top-slider img{';
            $digital_books_theme_css .='opacity:0.4';
        $digital_books_theme_css .='}';
        }else if($digital_books_theme_lay == '0.5'){
        $digital_books_theme_css .='#top-slider img{';
            $digital_books_theme_css .='opacity:0.5';
        $digital_books_theme_css .='}';
        }else if($digital_books_theme_lay == '0.6'){
        $digital_books_theme_css .='#top-slider img{';
            $digital_books_theme_css .='opacity:0.6';
        $digital_books_theme_css .='}';
        }else if($digital_books_theme_lay == '0.7'){
        $digital_books_theme_css .='#top-slider img{';
            $digital_books_theme_css .='opacity:0.7';
        $digital_books_theme_css .='}';
        }else if($digital_books_theme_lay == '0.8'){
        $digital_books_theme_css .='#top-slider img{';
            $digital_books_theme_css .='opacity:0.8';
        $digital_books_theme_css .='}';
        }else if($digital_books_theme_lay == '0.9'){
        $digital_books_theme_css .='#top-slider img{';
            $digital_books_theme_css .='opacity:0.9';
        $digital_books_theme_css .='}';
        }

    /*--------------------------- Woocommerce Product Sale Positions -------------------*/

    $digital_books_product_sale = get_theme_mod( 'digital_books_woocommerce_product_sale','Right');
    if($digital_books_product_sale == 'Right'){
        $digital_books_theme_css .='.woocommerce ul.products li.product .onsale{';
            $digital_books_theme_css .='left: auto; right: 15px;';
        $digital_books_theme_css .='}';
    }else if($digital_books_product_sale == 'Left'){
        $digital_books_theme_css .='.woocommerce ul.products li.product .onsale{';
            $digital_books_theme_css .='left: 15px; right: auto;';
        $digital_books_theme_css .='}';
    }else if($digital_books_product_sale == 'Center'){
        $digital_books_theme_css .='.woocommerce ul.products li.product .onsale{';
            $digital_books_theme_css .='right: 50%;left: 50%;';
        $digital_books_theme_css .='}';
    }