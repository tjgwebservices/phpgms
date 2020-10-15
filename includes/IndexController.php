<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of IndexController
 *
 * @author Tamaro Green
 */
class IndexController {

    function createIndexPage(){
        $doc = new DOMDocument();
        $doc->load( 'xml/catalog.xml' );
        $heading = $doc->getElementsByTagName( "heading" )->item(0)->nodeValue;
        $headingtitle = $doc->getElementsByTagName( "headingtitle" )->item(0)->nodeValue;
        $headingdescription = $doc->getElementsByTagName( "headingdescription" )->item(0)->nodeValue;

        $a = array();
        $l = array();
        $f = array();
        $t = array();
        $s = array();
        $ses = array();
        $trains = array();
        $addl = array();
        $sitel = array();

        $links = $doc->getElementsByTagName( "links" )->item(0)->getElementsByTagName( "link" );
        $additionallinks = $doc->getElementsByTagName( "additionallinks" )->item(0)->getElementsByTagName( "link" );
        $sitelinks = $doc->getElementsByTagName( "sitelinks" )->item(0)->getElementsByTagName( "link" );
        foreach( $links as $link )
        {
                $ahref = $link->nodeValue;
                array_push($l, $ahref);
        }
        foreach( $additionallinks as $addlink )
        {
                $addhref = $addlink->nodeValue;
                array_push($addl, $addhref);
        }
        foreach( $sitelinks as $slink )
        {
                $shref = $slink->nodeValue;
                array_push($sitel, $shref);
        }
        $topics = $doc->getElementsByTagName( "topics" )->item(0)->getElementsByTagName( "topic" );
        foreach( $topics as $topic )
        {
                $et = array();
                $subject = $topic->getElementsByTagName( "subject" )->item(0)->nodeValue;
                $description = $topic->getElementsByTagName( "description" )->item(0)->nodeValue;
                array_push($et, $subject, $description);
                array_push($t, $et);
        }
        $services = $doc->getElementsByTagName( "services" )->item(0)->getElementsByTagName( "service" );
        foreach( $services as $service )
        {
                $es = array();
                $title = $service->getElementsByTagName( "title" )->item(0)->nodeValue;
                $description = $service->getElementsByTagName( "description" )->item(0)->nodeValue;
                array_push($es, $title, $description);
                array_push($s, $es);
        }
        $analyses = $doc->getElementsByTagName( "analyses" )->item(0)->getElementsByTagName( "analysis" );
        foreach( $analyses as $analysis )
        {
                $ea = array();
                $title = $analysis->getElementsByTagName( "title" )->item(0)->nodeValue;
                $description = $analysis->getElementsByTagName( "description" )->item(0)->nodeValue;
                array_push($ea, $title, $description);
                array_push($ses, $ea);
        }
        $sessions = $doc->getElementsByTagName( "sessions" )->item(0)->getElementsByTagName( "session" );
        foreach( $sessions as $session )
        {
                $es = array();
                $course = $session->getElementsByTagName( "course" )->item(0)->nodeValue;
                $description = $session->getElementsByTagName( "description" )->item(0)->nodeValue;
                array_push($es, $course, $description);
                array_push($trains, $es);
        }
        $figures = $doc->getElementsByTagName( "figures" )->item(0)->getElementsByTagName( "figure" );
        foreach( $figures as $figure )
        {
                $ef = array();
                $title = $figure->getElementsByTagName( "title" )->item(0)->nodeValue;
                $description = $figure->getElementsByTagName( "title" )->item(0)->nodeValue;
                $list = $figure->getElementsByTagName( "list" )->item(0)->getElementsByTagName( "element" );
                $listarray = array();
                foreach ($list as $element) {
                        array_push($listarray, $element->nodeValue);
                }
                array_push($ef, $title, $description, $listarray);
                array_push($f, $ef);
        }
        $articles = $doc->getElementsByTagName( "article" );
        foreach( $articles as $article )
        {
                $ea = array();
                $titles = $article->getElementsByTagName( "title" );
                $title = $titles->item(0)->nodeValue;

                $sections = $article->getElementsByTagName( "section" );
                $section = $sections->item(0)->nodeValue;
                array_push($ea, $title, $section);
                array_push($a, $ea);
        }
        
        
    }
}
