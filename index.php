<?php
if((isset($_GET["postDwnId"])) && (!empty($_GET["postDwnId"]))){
$post_id = $_GET["postDwnId"];
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Subscribe | Javadomain.in</title>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="http://getbootstrap.com/dist/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="http://getbootstrap.com/assets/js/ie10-viewport-bug-workaround.js"></script>
	
    <!-- Bootstrap core CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootswatch/3.3.4/flatly/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="navbar-fixed-top.css" rel="stylesheet">
	
	
	<!-- FeedEk css -->
    <link href="css/FeedEk.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    
	<!--[if lt IE 9]><script src="http://getbootstrap.com/assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="http://getbootstrap.com/assets/js/ie-emulation-modes-warning.js"></script>

	<!-- loading js -->
	<script src="http://malsup.github.io/jquery.blockUI.js"></script>
	
	
	
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
	
<!-- Script to display page rank--> 	
 <input type="hidden" id="postIdforDL" value="<?php echo $post_id ?>" /> 
 <script type="text/javascript">
 function getInstantDownloadLink(){
var searchN = $('#InputEmail_existing').val();
var post_id = $('#postIdforDL').val();




if(searchN !=""){
        $.ajax( {
type: "POST",
url: "getDownloadLink.php",
data:{Email_ID: searchN,Post_ID :post_id},
 beforeSend: function() {
        $.blockUI({ css: { 
            border: 'none', 
            padding: '15px', 
            backgroundColor: '#000', 
            '-webkit-border-radius': '10px', 
            '-moz-border-radius': '10px', 
            opacity: .5, 
            color: '#fff' 
        } }); 
    },
success:function(htmlResp) {
              $('div.DownloadLink').html(htmlResp);
			  $.unblockUI();
            }
        });
		}
}
    
 </script>

 

	<style type="text/css">
	
	@media (max-width: 480px) { 
		body {
  padding-bottom: 40px;
}

.carousel {
  height: 200px !important;
  margin-bottom: 60px;
}
.carousel .item {
  height: 200px !important;
  background-color: #777;
}
.carousel-inner > .item > img {
  position: absolute;
  top: 0;
  left: 0;
  min-width: 100%;
  height: 200px !important;
}
.search {
	margin-top: -25%;
}
.search .form-section{
	background:rgba(0,0,0,0.6);
	border: 2px solid #414141;
	border-radius: 5px;
	padding: 10px;
}
	
	}
	
	body {
  padding-bottom: 40px;
}

.carousel {
  height: 400px;
  margin-bottom: 60px;
}
.carousel .item {
  height: 400px;
  background-color: #777;
}
.carousel-inner > .item > img {
  position: absolute;
  top: 0;
  left: 0;
  min-width: 100%;
  height: 400px;
}
.search {
	margin-top: -25%;
}
.search .form-section{
	background:rgba(0,0,0,0.6);
	border: 2px solid #414141;
	border-radius: 5px;
	padding: 10px;
}


 
	</style>
	
  </head>

  <body>

    <!-- Fixed navbar -->
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Subscribe Menu</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <!--<a class="navbar-brand active" href="http://pagerank.javadomain.in">Page Rank</a>-->
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li><a href="http://www.javadomain.in">Javadomain.in</a></li>         
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

 
	
	
	  <div id="myCarousel" class="carousel slide" data-ride="carousel">
 
      
    </div>
    <div class="search">
        <div class="container">
          <div class="row">
            <div class="col-md-10 col-md-offset-1 search-header">
              
                <div class="row">
                  
                      <div class="col-md-6 col-xs-12 col-sm-6 col-lg-6">
					  
	  
	  
	  
<form action="http://feedburner.google.com/fb/a/mailverify" method="post" target="popupwindow" onsubmit="window.open(" http:="" feedburner.google.com="" fb="" a="" mailverify?uri="javadomainin'," 'popupwindow',="" 'scrollbars="yes,width=300,height=220');return" true'="">  <label for="InputEmail_existing">I'm new ? <br/> Want to subscribe</label>
	<div class="form-group">
	<input type="text" class="form-control" name="email"><input type="hidden" value="Javadomainin" name="uri"><input type="hidden" name="loc" value="en_US">   </div><button type="submit" class="btn btn-default btn-info" onclick="feedback()">Subscribe to get download access</button></form>
	  
	  
                      </div>
                     
					
                      <div class="col-md-6 col-xs-12 col-sm-6 col-lg-6">
					  
                        				<div class="form-group">
        <label for="InputEmail_existing">Already Subscribed ? <br/> Enter your subscribed email id to get the download link instantly</label>
        <div class="input-group">
          <input type="email" class="form-control" id="InputEmail_existing" name="InputEmail_existing" placeholder="Enter Your Email" required  >
          <span class="input-group-addon"><i class="glyphicon glyphicon-ok form-control-feedback"></i></span></div>
      </div>
	  <button type="submit" class="btn btn-default btn-info" onclick="getInstantDownloadLink();">Get Instant Download Link</button>
	 
                      </div>
                </div>
             
            </div>
          </div>
        </div>
      </div>


	  
	  <div class="container" style="margin-top:50px;">
  <div class="row">    
    <div class="col-md-offset-3 col-md-12" style="margin-top:20px;padding-top:30px;"> 
	<div class="DownloadLink text-center col-md-6" style="background-color:#3498db;color:white;height:100px;padding-top:15px;">
	
	</div>
	  </div>
  </div>
</div>
<br/>
<br/>
<br/>
<hr/>

  <div class="row"> 
  <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- Single post - 2 (www.javadomain.in) -->
<ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-1630317480583873"
     data-ad-slot="1031934524"
     data-ad-format="auto"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
  </div> 
  
    <div class="row"> 
  <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- Single post - 2 (www.javadomain.in) -->
<ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-1630317480583873"
     data-ad-slot="1031934524"
     data-ad-format="auto"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
  </div> 
  
  
    <div class="row"> 
  <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- Single post - 2 (www.javadomain.in) -->
<ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-1630317480583873"
     data-ad-slot="1031934524"
     data-ad-format="auto"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
  </div> 
	  
	  <br/>
	  <br/>
	 
	  <div class="footer navbar-default" style="margin-top:140px;">
 <div class="container">
    <div class="row" style="color:white;"><div class="col-md-12 text-center"><h4><a href="http://www.mirthbees.com" target="_blank">Mirthbees</a> Release with <a href="http://www.javadomain.in" target="_blank">Javadomain.in</a></h4></div></div>

</div>
</div>
  </body>
</html>