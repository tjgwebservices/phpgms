<?php
include_once("includes/DocumentLayout.php");    
include_once("includes/FormController.php");    
include_once("includes/IndexController.php");    
include_once("includes/IntroController.php");  
$dl=new DocumentLayout;
echo $dl->createHeading($heading,$heading,$heading);
echo $dl->createBodyNavigation($heading);
echo $dl->createBodyMainAside($l,$addl,$sitel,$t,$s,$ses,$trains);
echo $dl->createBodyHeader($headingtitle,$headingdescription,$f);
?>
<div>
</div>
<?php
echo $dl->createArticles($a, $trains, $ses);
echo $dl->createFooter();
?>
