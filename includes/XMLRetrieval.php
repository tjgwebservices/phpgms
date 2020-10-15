<?php


class XMLRetrieval {
    function createDocument($documentPath) {
        $doc = new DOMDocument();
        $doc->load($documentPath);
        
        $heading = $doc->getElementsByTagName("heading")->item(0)->nodeValue;
        $headingtitle = $doc->getElementsByTagName("headingtitle")->item(0)->item(0)->nodeValue;
        $headingdescription = $doc -> getElementsByTagName("headingdescription") ->item(0)->nodeValue;
                
    }
    
    function getElementItem($tagname) {
        $elementitem = $doc->getElementsByTagName($tagname)->item(0)->nodeValue;
        return $elementitem;
    }

    function getLinksAndUrl($linktype,$linkurl) {
        $l = array();
        $links = $doc->getElementsByTagName($linktype)->item(0)->getElementsByTagName( "
link" );
        foreach( $links as $link )
        {
                $ahref = $link->nodeValue;
                array_push($l, $ahref);
        }
        return $l;

    }
}

class DocumentStructure {
    var $docobj;
    
    function createDocument(){
        $docobj = XMLRetrieval();
        $heading = $docobj->getElementItem("heading");
        $headingtitle = $docobj->getElementItem("headingtitle");
        $headingdescription = $docobj->getElementItem("headingdescription");
        
    }
    
}



class DocumentArrays {
    var $articles = array();
    var $links = array();
    var $topics = array();
    var $sessions = array();
    var $trainingsessions = array();
    var $additionallinks = array();
    var $sitelinks = array();        
}

