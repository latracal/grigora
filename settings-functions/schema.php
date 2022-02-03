<?php

function grg_get_schema_tag($type){
    if ($type=="footer"){
        return array(
            "itemtype" => "https://schema.org/WPFooter",
            "itemscope" => "itemscope"
        );
    }
    elseif($type=="sidebar"){
        return array(
            "itemtype" => "https://schema.org/WPSideBar",
            "itemscope" => "itemscope"
        );
    }
    elseif($type=="header"){
        return array(
            "itemtype" => "https://schema.org/WPHeader",
            "itemscope" => "itemscope"
        );
    }
    elseif($type=="navigation"){
        return array(
            "itemtype" => "https://schema.org/SiteNavigationElement",
            "itemscope" => "itemscope"
        );
    }
    elseif($type=="author"){
        return array(
            "itemtype" => "https://schema.org/Person",
            "itemscope" => "itemscope",
            "itemprop" => "author",
            "class" => "vcard author",
        );
    }
    elseif($type=="organization"){
        return array(
            "itemtype" => "https://schema.org/Organization",
            "itemscope" => "itemscope",
        );
    }
    elseif($type=="creativework"){
        return array(
            "itemtype" => "https://schema.org/CreativeWork",
            "itemscope" => "itemscope",
        );
    }
    elseif($type=="body"){
        if(is_home() || is_archive() || is_attachment() || is_tax() || is_single()){
            return array(
                "itemtype" => "https://schema.org/Blog",
                "itemscope" => "itemscope",
            );
        }
        elseif(is_search()){
            return array(
                "itemtype" => "https://schema.org/SearchResultsPage",
                "itemscope" => "itemscope",
            );
        }
        else{
            return array(
                "itemtype" => "https://schema.org/WebPage",
                "itemscope" => "itemscope",
            );
        }

    }
}

// todo itemprops