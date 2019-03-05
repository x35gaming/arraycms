<!DOCTYPE html>
<?php include('config.php');
       ?>
<html>
	<head>
		<script src="https://cdn.jsdelivr.net/gh/leonardosnt/mc-player-counter/dist/mc-player-counter.min.js"></script>
		<title><?php echo $sitename ?></title>
		<meta name="apple-mobile-web-app-capable" content="yes" />
		<style>
			#header {
			    background-color  : <?php echo $headcolor ?>;
		    	border            : 1px solid black  ;
		    	padding           : 5px              ;
			    margin            : 5px              ;
	    		text-align        : center           ;
			}
			
			#navbar {
			    background-color  : <?php echo $navcolor ?> ;
			/*  height            : 200px            ;  */
			    width             : 90%              ;
			    float             : center           ;
			    border            : 1px solid black  ;
			    padding           : 5px              ;
			    margin            : auto             ;
	    		text-align        : left             ;
			}
			
			#content {
				background-color  : <?php echo $contcolor ?>;
		        height            : 400px            ; 
		    	width             : 90%              ;  
				float             : center           ;
				border            : 1px solid black  ;
			    padding           : 5px              ;
			    margin            : auto             ;
	    		text-align        : left             ;
                overflow          : auto             ;
	    	}
	    	
	    	#footer {
	    	    background-color  : <?php echo $ftrcolor ?>;
	    	    clear             : both             ;
	    	    border            : 1px solid black  ;
			    padding           : 5px              ;
			    margin            : 5px              ;
	    		text-align        : center           ;
	    	}
	    	
            body {
				margin-left       : auto             ;
				margin-right      : auto             ;
			}
			
            img {
                
                height            : 50%              ;
            }
	    	/* easier to read? */
		</style>
	</head>
	<body>
    
		<div id="header"><h1><?php echo $sitename ?></h1><p><?php echo $sitedesc ?></p> </div>
		<div>
        <div id="navbar">
			<a href="/">home</a>
			<a href="/?page=whitelist">whitelist</a>
			<p> There are <span data-playercounter-ip="<?php echo $ip?>">0</span>  players online on <?php echo $ip ?> </p>
            
        </div>
        
        </div>
		<div id="content"><?php 
		include("cms/formatextensions.php");
function h($msg) {
return "<h2>" . $msg . "</h2>" ;
};
function b($msg) {
return "<b>" . $msg . "</b>" ;
};
function hyperlink($name,$link) {
return "<a href=\"" . $link . "\" >" . $name . "</a>";
};
function img($url) {
return "<img src=\"" . $url . "\"/>" ;
};
include( "pages" . "/" . "n" . $_GET["page"] . ".php" ); 








if (empty($blog)) {
	
  $blog = array('error:', 'the page may be missing or invalid', 'ERR_MISSING_PAGE');
  foreach ($blog as $i) 
  {
	  print(implode('', array('<b><span style="color:','darkred','">',$i,'</span></b>','<br>')));
  }
	
} 
    else 
{
	
foreach ($blog as $value) {
  echo "$value <br>";
	
}
		
};









include ("cms/extensions.php");
echo "<p>this page was made with ❤ using <a href=\"http://x35gaminghub.rf.gd/?page=arraycms\"><b>arraycms</b></a>...</p>"
?>  </div>
		<div id="footer">
		© <?php echo $owner ?>
		<br><?php echo hyperlink($webmstremail, "mailto:" . $webmstremail ) ?>
		</div>
		
	</body>
</html>
