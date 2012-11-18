<!DOCTYPE html>
<html>
<head>
<meta name="Generator" content="ECSHOP v2.7.3" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="Keywords" content="<?php echo $this->_var['keywords']; ?>" />
	<meta name="Description" content="<?php echo $this->_var['description']; ?>" />
    <title><?php echo $this->_var['page_title']; ?></title>
	<link rel="shortcut icon" href="favicon.ico" />
	<link rel="icon" href="animated_favicon.gif" type="image/gif" />

    <link type="text/css" rel="stylesheet" href="/assets/css/bootstrap.css">
    <link type="text/css" rel="stylesheet" href="/assets/css/base.css">
	<script src="http://lib.sinaapp.com/js/jquery/1.7.2/jquery.min.js"></script>
	<script src="/assets/js/bootstrap.js"></script>
	<script src="/assets/js/core.js"></script>
    
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
</head>
<body>
<?php echo $this->fetch('library/page_header.lbi'); ?>
    <div id="content" style="background:#fff;">
		<div class="container">
			<div class="index-page">
				<div id="myCarousel" class="carousel slide">
					<div class="carousel-inner">
						<div class="active item">
							<img src="/assets/img/index-banner-2.jpg" width="990px">
						</div>
						<div class="item">
							<img src="/assets/img/index-banner-1.jpg" width="990px">
						</div>
					</div>
					<a class="carousel-control left" href="#myCarousel" data-slide="prev">&lsaquo;</a>
					<a class="carousel-control right" href="#myCarousel" data-slide="next">&rsaquo;</a>
				</div>
			</div>
		</div>
    </div>
<?php echo $this->fetch('library/page_footer.lbi'); ?>
</body>
</html>
