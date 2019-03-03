<!DOCTYPE html>
<?php include('config.php') ?>
<html>
	<head>
		<script src="https://cdn.jsdelivr.net/gh/leonardosnt/mc-player-counter/dist/mc-player-counter.min.js"></script>
		<title><?php echo $sitename ?></title>
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
function h($msg) {
return "<h2>" . $msg . "</h2>" ;
};
function b($msg) {
return "<b>" . $msg . "</b>" ;
};
function img($url) {
return "<img src=\"" . $url . "\"/>" ;
};
require( "pages" . "/" . "n" . $_GET["page"] . ".php" ); 

foreach ($blog as $value) {
  echo "$value <br>";
};
echo "<p>this page was made with ❤ using <a href=\"http://x35gaminghub.rf.gd/?page=arraycms\"><b>arraycms</b></a>...</p>"
?>  </div>
		<div id="footer">
		© <?php echo $owner ?>
		</div>
		
	</body>
</html>
