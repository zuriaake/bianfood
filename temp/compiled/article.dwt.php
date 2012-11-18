<!DOCTYPE html>
<html lang="zh">
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
	<link href="/<?php echo $this->_var['ecs_css_path']; ?>" rel="stylesheet" type="text/css" />
	<script src="http://lib.sinaapp.com/js/jquery/1.7.2/jquery.min.js"></script>
	<script src="/assets/js/bootstrap.js"></script>
	<script src="/assets/js/core.js"></script>
    
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
</head>
<body>
<?php echo $this->fetch('library/page_header.lbi'); ?>
    <div id="content">
		<div class="container">
			<div class="breadcrumb-box">
				<ul class="breadcrumb">
					<li><a href="/">首页</a> <span class="divider">/</span></li>
				    <li><a href="/">资讯中心</a> <span class="divider">/</span></li>
					<li class="active"><?php echo $this->_var['article']['title']; ?></li>
				</ul>
			</div>
			<div class="article-list-page clearfix">
				<div class="sidebar">
					<div class="sidebar-box">
						<div class="sidebar-hd">
						</div>
						<div class="sidebar-body">
							<h2>资讯中心</h2>
							<ul>
								<li><a href="/news/company.html">公司动态</a></li>
								<li><a href="/news/industry.html">行业资讯</a></li>
								<li><a href="/news/media.html">媒体关注</a></li>
							</ul>
						</div>
						<div class="sidebar-footer"></div>
					</div>
				</div>
				<div class="main">
					<div class="article-content">
						<div class="article-hd">
							<h2><?php echo htmlspecialchars($this->_var['article']['title']); ?></h2>
						</div>
						<div class="article-bd">
							<?php if ($this->_var['article']['content']): ?>
								<?php echo $this->_var['article']['content']; ?>
						    <?php endif; ?>
						</div>
					</div>
				</div>
			</div>
		</div>
    </div>
<?php echo $this->fetch('library/page_footer.lbi'); ?>
</body>
</html>
