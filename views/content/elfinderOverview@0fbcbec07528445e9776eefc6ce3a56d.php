<script type="text/javascript">
  
  $().ready(function() {
  var serveraddr = $('#serveraddr').val();
    var elf = $('#elfinder').elfinder({
      // set your elFinder options here
      url: 'http://'+ serveraddr +'/index.php/elfinderController/elfinder_/overview'  // connector URL
    }).elfinder('instance');      
  });
  
  
  
  
</script>
<link REL="STYLESHEET" TYPE="text/css" HREF="<?php echo base_url('/assets/stylesheets/bankreconv2.css')?>" media="all"/> 


	</head>
	<body>
	<div id="MainMenu">

<div id="transcashlogodivision">

<img id="transcashlogo" src="<?php echo base_url('/assets/images/logo.png')?>" />

<input type='hidden' id="serveraddr" value="<?php echo $_SERVER['SERVER_ADDR'] ?>" />
</div>
<ul id="heading">

<li class="listitemtittleleft"> <p class="paddtittle"><a href="<?php echo site_url('Main')?>"><img src="<?php echo base_url('/assets/images/home.png')?>" alt="" class="imgheader" ></a>  </p></li>

<li class="listitemtittleright"> <p class="paddtittle"><a href="<?php echo site_url('Login/logout')?>"><img src="<?php echo base_url('/assets/images/logout.png')?>" alt="" class="imgheader" ></a>  </p></li>






</ul>

</div>
<div id="mainContainer">
		<!-- Element where elFinder will be created (REQUIRED) -->
		<div id="elfinder"></div>
		
		</div>

	</body>
</html>

