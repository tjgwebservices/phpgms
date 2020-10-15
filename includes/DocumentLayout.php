<?php


class DocumentLayout {
    
    public $xdoc;
    public $heading;
    public $body;
    public $footer;
    
    function createDocument(){
        $xdoc = new XMLRetrieval;
    }
    function createHeading($heading,$description,$author){
        $headingtext = "";
        $headingtext .="<!DOCTYPE html>\n";
        $headingtext .="<html>\n";
        $headingtext .="<head>\n";
        $headingtext .="<meta http-equiv=\"content-type\" content=\"text/html; charset=UTF-8\">\n";
        $headingtext .="<meta charset=\"utf-8\">\n";
        $headingtext .="<title>".$heading."</title>\n";
        $headingtext .="<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">\n";
        $headingtext .="<meta name=\"description\" content=\"".$description."\">\n";
        $headingtext .="<meta name=\"author\" content=\"".$author."\">\n";
        $headingtext .="<link href=\"css/main.css?v=0.0.0.6\" rel=\"stylesheet\">\n";
        $headingtext .="</head>\n";
        return $headingtext;
    }
    
    function createBodyNavigation($heading){
        $bodynavtext = "";
        $bodynavtext .="";
        $bodynavtext .="<body>\n";
        $bodynavtext .="<nav>\n";
	$bodynavtext .="<a href=\"#\">".$heading."</a>\n";
	$bodynavtext .="<button>".$heading."</button>\n";
        $bodynavtext .="<div>\n";
        $bodynavtext .="<ul>\n";
        $bodynavtext .="<li><a href=\"#\">Home</a></li>\n";
        $bodynavtext .="<li><a href=\"#about\">About</a></li>\n";
        $bodynavtext .="<li><a href=\"#contact\">Contact</a></li>\n";
        $bodynavtext .="</ul>\n";
        $bodynavtext .="</div>\n";
        $bodynavtext .="</nav>\n";
        return $bodynavtext;
    }

    function createBodyMainAside($l,$addl,$sitel,$t,$s,$ses,$trains) {
        $mainaside = "";
        $mainaside .="<main>";
        $mainaside .="<aside>";
        $mainaside .="<ul>";
        $mainaside .="<li>Menu</li>";
        foreach($l as $ref)
        {
            $mainaside .="<li><a href='//".$ref."' target='_parent'>".$ref."</a></li>\n";
        } 
        $mainaside .="<li>Additional References</li>";
        foreach($addl as $ref)
        {
            $mainaside .="<li><a href='//".$ref."' target='_parent'>".$ref."</a></li>\n";
        } 
        $mainaside .="<li>Sites</li>";
        foreach($sitel as $ref)
        {
            $mainaside .="<li><a href='//".$ref."' target='_parent'>".$ref."</a></li>\n";
        } 
        $mainaside .="</ul>";
        $mainaside .="<section>";
        $mainaside .="<h3>Topics</h3>";
        foreach($t as $topic)
        {
            $mainaside .="<p>".$topic[0]."</p><p>".$topic[1]."</p><br/>\n";
        } 
        $mainaside .="</section>";
        $mainaside .="<section>";
        $mainaside .="<h3>Services</h3>";
        foreach($s as $service)
        {
            $mainaside .="<p>".$service[0]."</p><p>".$service[1]."</p><br/>\n";
        } 
        $mainaside .="</section>";
        $mainaside .="<section>";
        $mainaside .="<h3>Analytics Services</h3>";
        foreach($ses as $analysis)
        {
            $mainaside .="<p>".$analysis[0]."</p><p>".$analysis[1]."</p><br/>\n";
        } 
        $mainaside .="</section>";
        $mainaside .="<section>";
        $mainaside .="<h3>Training Sessions</h3>";
        foreach($trains as $session)
        {
            $mainaside .="<p>".$session[0]."</p><p>".$session[1]."</p><br/>\n";
        }
        $mainaside .="</section>";
        $mainaside .="</aside>";
        return $mainaside;
    }

    function createBodyHeader($headingtitle,$headingdescription,$f){
		$bodyheader = "";
		$bodyheader .="<div>";
		$bodyheader .="<header>";
		$bodyheader .="<h1>".$headingtitle."</h1>";
		$bodyheader .="<p>".$headingdescription."</p>";
		$bodyheader .="<p><a href=\"#\">Learn more »</a></p>";
		$bodyheader .="<span>";
		$bodyheader .="<ol>";
		$bodyheader .="<li></li>";
		$bodyheader .="<li></li>";
		$bodyheader .="<li></li>";
		$bodyheader .="</ol>";
		foreach($f as $fig)
		{
			$bodyheader .="<figure>";
			$bodyheader .="    <h1>".$fig[0]."</h1>\n";
			$bodyheader .="    <p>".$fig[1]."</p>\n";
			$bodyheader .="    <ul>";
			foreach ($fig[2] as $fig1)
			{
				$bodyheader .="<li>".$fig1."</li>";
			}
			$bodyheader .="    </ul>";
			$bodyheader .="</figure>";
			$bodyheader .="</span>";
			$bodyheader .="</header>";
		}
        return $bodyheader;
    }
    
    function createArticles($a, $trains, $ses) {
        $articlestext = "";
        $articlestext .="<article>\n";

        $i=0;
        foreach($a as $text)
          {
          $i++;
        $articlestext .="<section><h2>".$text[0]."</h2><p>".$text[1]."</p><p><a href='//tjgwebser
        vices.com/' target='_parent'>View details »</a></p></section>\n";
                  if ($i==3) {
                        $articlestext .="</article><article>\n";
                        $i=0;
                  }
          }
        $articlestext .="</article>\n";
        $articlestext .="<article>\n";  
        $articlestext .="<h2>Training Sessions</h2>";
        $articlestext .="</article>\n";
        $articlestext .="<article>\n";
        $i=0;
        foreach($trains as $session)
        {
        $i++;
        $articlestext .="<section><h2>".$session[0]."</h2><p>".$session[1]."</p><p><a href='//tjg
        webservices.com/' target='_parent'>View details »</a></p></section>\n";
                if ($i==3) {
                      $articlestext .="</article><article>\n";
                      $i=0;
                }
        }
        $articlestext .="</article>\n";
        $articlestext .="<article>\n";  
        $articlestext .="<h2>Services</h2>";
        $articlestext .="</article>\n";
        $articlestext .="<article>\n";
        $i=0;
        foreach($ses as $service)
        {
            $i++;
            $articlestext .="<section><h2>".$service[0]."</h2><p>".$service[1]."</p><p><a href='//tjg
            webservices.com/' target='_parent'>View details »</a></p></section>\n";
            if ($i==3) {
                  $articlestext .="</article><article>\n";
                  $i=0;
            }
        }
        $articlestext .="</article>\n";
        $articlestext .="</div>";
        $articlestext .="</main>";
		return $articlestext;
    }
    
    function createFooter() {
        $footertext = "";
        $footertext .="";
    
        $footertext .="<footer>";
        $footertext .="<p>© TJG Web Services, LLC 2019</p>";
        $footertext .="<p>Please review our <a href=\"//www.tjgwebservices.com/privacy/\"
 target=\"_parent\">Privacy Policy</a>, <a href=\"//www.tjgwebservices.com/terms/\">
Terms of Service</a>, and <a href=\"//www.tjgwebservices.com/cookies/\">Cookies Po
licy</a>.</p>";
        $footertext .="</footer>";
        $footertext .="</body>";
        $footertext .="<script src=\"js/script.js?v=0.0.2\"></script>";
        $footertext .="</html>";
		return $footertext;
        
    }
}