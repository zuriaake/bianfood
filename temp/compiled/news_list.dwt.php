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
				    <li><a href="/news">资讯中心</a> <span class="divider">/</span></li>
					<li class="active"><?php echo $this->_var['current_cat']['page_name_cn']; ?></li>
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
					<ul class="list-hd">
						<li class="active"><?php echo $this->_var['current_cat']['page_name_cn']; ?></li>
					</ul>
					<ul class="article-list">
					<?php $_from = $this->_var['artciles_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'article');if (count($_from)):
    foreach ($_from AS $this->_var['article']):
?>
						<li> <a href="/article.php?id=<?php echo $this->_var['article']['id']; ?>" >【<?php echo $this->_var['article']['add_time']; ?>】 <?php echo sub_str($this->_var['article']['short_title'],55); ?></a></li>
					<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
					</ul>
					<?php echo $this->fetch('library/pages.lbi'); ?>
				</div>
			</div>
		</div>
    </div>
<?php echo $this->fetch('library/page_footer.lbi'); ?>
</body>
</html>
