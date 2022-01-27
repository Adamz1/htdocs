<?php
$title = "我是ZhangHezhuo。"
?>

<?php
$article = [
	[
		// 'title' => 'php中文网原创视频：《天龙八部》公益php培训系列课程汇总！',
		'img' => 'https://img.php.cn/upload/course/000/000/001/5d242759adb88970.jpg',
		// 'content' => 'PHP中文网因专业的讲师水平和高效的视频质量，推出的各种视频课程系列一直以来都深受大家喜爱。特别是《天龙八部》系列、《独孤九贱》系列、《玉女心经》系列的原创课程在行业内更是具有强大的影响力，好评不断！为了让大家能更快速方便的寻找到相关教程资源，我们在这篇文章中特意将《天龙八部》系列课程整理出来供大家有针对性得学习！',
		'date' => '2021-02-18',
		'class' => 'PHP'
	],
	[
		'title' => 'php中文网《玉女心经》公益PHP WEB培训系列课程汇总',
		'img' => 'https://img.php.cn/upload/course/000/126/153/5aa23f0ded921649.jpg',
		'content' => 'php中文网近期推出的《独孤九贱》系列、《天龙八部》系列、《玉女心经》原创视频课程，好评如潮！由于《玉女心经》系列课程没有做成专题，所以大家找起来有点费劲，为了更好的服务广大php中文网粉丝们，特把课程整理汇总给大家！',
		'date' => '2021-02-11',
		'class' => 'PHP'
	],
	[
		'title' => 'html5中submit是按钮么',
		'img' => '',
		'content' => 'html5中submit是按钮，它是button的一个特例，它把提交这个动作自动集成了。submit会自动将表单的数据提交，使用submit时需要验证要加return true或false。',
		'date' => '2021-02-10',
		'class' => '前端'
	],
	[
		'title' => 'css如何去除下划线',
		'img' => '',
		'content' => 'css去除下划线的方法：首先创建一个HTML示例文件；然后在body中定义一个a标签；最后通过css属性为“a{text-decoration:none}”去除下划线即可。',
		'date' => '2021-02-01',
		'class' => '前端'
	],
	[
		'title' => 'linux如何查看进程',
		'img' => 'https://img.php.cn/upload/article/202102/24/2021022409272725770.jpg',
		'content' => 'windows defender是windows系统自带的一款杀毒软件，对于很多人来说，这款软件不仅没有起到保护电脑的作用，还增加了很多不必要的麻烦。比如我们安装了一些破解版软件，windows defender就会杀这些破解软件，很让人讨厌。',
		'date' => '2021-02-01',
		'class' => '服务器'
	],
	[
		'title' => 'Ubuntu20.04/18.04下安装或更新至PHP8',
		'img' => 'https://img.php.cn/upload/article/000/000/020/2c02ff679ec7afab974a691aac09d535-0.png',
		'content' => '本指南让你了解如何安装最新的 php 版本 8，并在你的任何 VPS、云服务器、专用主机上的 Ubuntu 20.0 或 18.04 系统中升级到最新版本，并将其配置为 Apache 和 Nginx。',
		'date' => '2021-02-01',
		'class' => 'PHP'
	],
	[
		'title' => 'PHP 8新特性之JIT对PHP应用性能的影响',
		'img' => '',
		'content' => '即将发布的 PHP 8 最受大家关注的新特性就是引入了对 JIT 的支持，我已经简单介绍了 JIT 是什么，以及与 Opcache 的区别',
		'date' => '2021-02-01',
		'class' => 'PHP'
	]
];
?>
<!DOCTYPE html>
<html lang="zh-CN">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>首页 - 欧阳克个人博客</title>
	<meta name="keywords" content="博客,个人博客,欧阳克个人博客,PHP" />
	<meta name="description" content="欧阳克是PHP中文网的讲师，愿意把知识分享给大家。" />
	<link rel="stylesheet" id="twentytwelve-style-css" href="static/css/index.css" type="text/css" media="all" />
	<style type="text/css" id="custom-background-css">
		body.custom-background {
			background-color: #e6e6e6;
		}

		input.btn-default:focus,
		input.no-border:focus {
			outline: none;
		}

		input.no-border {
			font-size: 15px;
		}
	</style>
	<script type="text/javascript" src="static/js/jquery.js"></script>
	<script type="text/javascript" src="static/js/nav.js"></script>
</head>

<body class="home blog custom-background custom-font-enabled single-author">
	<div id="page" class="hfeed site">
		<header id="masthead" class="site-header" role="banner">
			<hgroup>
				<h1 class="site-title">
					<a href="/" title="欧阳克个人博客" rel="home">欧阳克个人博客</a>
				</h1>
				<h2 class="site-description">
					<?php echo $title; ?>
				</h2>
			</hgroup>
			<nav id="site-navigation" class="main-navigation" role="navigation">
				<ul class="nav-menu">
					<?php
					$menu = [
						"首页",
						"服务器",
						"php",
						"front end",
						"back end",
						"sql",
						"mini vue"
					]
					?>
					<?php
					foreach ($menu as $name) {
					?>
						<li>
							<a href="/index.html?cate=1">
							<?php echo $name;
						} ?>
							</a>
						</li>
				</ul>
			</nav>
		</header>

		<div id="main" class="wrapper">
			<div id="primary" class="site-content">
				<div id="content" role="main">
					<?php
					foreach ($article as $article_v) {
					?>
						<article>
							<header class="entry-header">
								<h1 class="entry-title">
									<a href="/details.html" title=<?php $article_v['title'] ?> rel="bookmark">
										<?php
										if ($article_v['title']) {
											echo $article_v['title'];
										};
										?>
									</a>
								</h1>
							</header>
							<?php 
								if(!empty($article_v['img'])){
									echo '<img style="width:200px;height:100px;" src="'.$$article_v['img'].'" alt="" />';
								}
							?>
							<img style="width:200px;height:100px;" src="https://img.php.cn/upload/course/000/000/001/5d242759adb88970.jpg" alt="" />
							<div class="entry-content"><?php if (isset($article_v['content'])) {
															echo $article_v['content'];
														} ?></div>
							<footer class="entry-meta">
								发布于
								<a href="/index.html?time=2021-02-18" title="2021-02-18" rel="bookmark">
									<time class="entry-date" datetime="2021-02-18"><?php echo $article_v['date'] ?></time>
								</a>。 属于
								<a href="/index.html?cate=2" title="查看 PHP中的全部文章" rel="category"><?php echo $article_v['class'] ?></a> 分类
							</footer>
						</article>
					<?php } ?>
				</div>
				<div class="page">
					<nav>
						<ul class="pagination">
							<li class="page-item disabled" aria-disabled="true" aria-label="&laquo; 上一页">
								<span class="page-link" aria-hidden="true">&lsaquo;</span>
							</li>
							<li class="page-item active" aria-current="page">
								<span class="page-link">1</span>
							</li>
							<li class="page-item">
								<a class="page-link" href="/index.html?page=2">2</a>
							</li>
							<li class="page-item">
								<a class="page-link" href="/index.html?page=2" rel="next" aria-label="下一页 &raquo;">&rsaquo;</a>
							</li>
						</ul>
					</nav>
				</div>
			</div>

			<div id="secondary" class="widget-area" role="complementary">
				<aside id="search-2" class="widget widget_search">
					<form role="search" id="searchform" action="" method="POST">
						<div>
							<label class="screen-reader-text" for="s">搜索：</label>
							<input placeholder="搜索" type="text" class="no-border" name="keywords" id="s" />
							<input type="submit" class="btn btn-default" id="searchsubmit" value="搜索" />
						</div>
					</form>
					<script type="text/javascript">
						$(function() {
							$("#searchsubmit").click(function() {
								if ($("#s").val() != '') {
									location.href = "/index.html?s=" + $("#s").val();
								}
								return false;
							});
						});
					</script>
				</aside>

				<aside id="recent-posts-2" class="widget widget_recent_entries">
					<h3 class="widget-title">热门文章</h3>
					<?php
					foreach ($article as $subAr) {
						foreach ($subAr as $sub) {
							echo '<a href="/details.html?id=20" title="构建Nginx和PHP镜像">' . $sub['title'] . '</a>';
						};
					};

					?>
					<ul>
						<li>
							<font style="color:#7a7a7a;">[0]</font>&nbsp;
							<a href="/details.html?id=20" title="构建Nginx和PHP镜像">构建Nginx和PHP镜像</a>
						</li>
						<li>
							<font style="color:#7a7a7a;">[1]</font>&nbsp;
							<a href="/details.html?id=10" title="Mysql 触发器基础">Mysql 触发器基础</a>
						</li>
					</ul>
				</aside>

				<aside class="widget widget_recent_entries">
					<h3 class="widget-title">最近更新</h3>
					<ul>
						<li>
							<font style="color:#7a7a7a;">[0]</font>&nbsp;
							<a href="/details.html?id=20" title="构建Nginx和PHP镜像">构建Nginx和PHP镜像</a>
						</li>
						<li>
							<font style="color:#7a7a7a;">[1]</font>&nbsp;
							<a href="/details.html?id=10" title="PHP常见的魔术常量">PHP常见的魔术常量</a>
						</li>
					</ul>
				</aside>

				<aside id="archives-2" class="widget widget_archive">
					<h3 class="widget-title">文章归档</h3>
					<ul>
						<li><a href="/index.html?time=2020-10" title="2020-10">2020年10月</a>&nbsp;<font style="color:#7a7a7a;">(1)</font>
						</li>
						<li><a href="/index.html?time=2020-09" title="2020-09">2020年09月</a>&nbsp;<font style="color:#7a7a7a;">(4)</font>
						</li>
						<li><a href="/index.html?time=2020-08" title="2020-08">2020年08月</a>&nbsp;<font style="color:#7a7a7a;">(2)</font>
						</li>
						<li><a href="/index.html?time=2020-07" title="2020-07">2020年07月</a>&nbsp;<font style="color:#7a7a7a;">(1)</font>
						</li>
						<li><a href="/index.html?time=2020-06" title="2020-06">2020年06月</a>&nbsp;<font style="color:#7a7a7a;">(2)</font>
						</li>
						<li><a href="/index.html?time=2020-05" title="2020-05">2020年05月</a>&nbsp;<font style="color:#7a7a7a;">(1)</font>
						</li>
						<li><a href="/index.html?time=2020-04" title="2020-04">2020年04月</a>&nbsp;<font style="color:#7a7a7a;">(1)</font>
						</li>
						<li><a href="/index.html?time=2020-03" title="2020-03">2020年03月</a>&nbsp;<font style="color:#7a7a7a;">(3)</font>
						</li>
						<li><a href="/index.html?time=2020-02" title="2020-02">2020年02月</a>&nbsp;<font style="color:#7a7a7a;">(3)</font>
						</li>
						<li><a href="/index.html?time=2020-01" title="2020-01">2020年01月</a>&nbsp;<font style="color:#7a7a7a;">(2)</font>
						</li>
					</ul>
				</aside>
			</div>
		</div>

		<footer id="colophon" role="contentinfo">
			<div class="site-info">
				<span>友情链接：</span>
				<a href="https://www.php.cn" target="_blank">PHP中文网</a>
			</div>
		</footer>

		<footer role="contentinfo" style="margin-top:0;">
			<div class="site-info" style="text-align:center;">
				<span>
					<a href="https://beian.miit.gov.cn" target="_blank">苏ICP备2020058653号-1</a>
				</span>
			</div>
		</footer>
	</div>
</body>

</html>