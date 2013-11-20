<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

	<head>

		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<title>WASD STORE</title>

		<link rel="stylesheet" href="css/defaut.css" type="text/css" />
		<script type="text/javascript" src="js/scroll.js"></script>
		<script type="text/javascript" src="js/jquery.js"></script>
		<script type="text/javascript" src="js/superfish.js"></script>
		<script type="text/javascript" src="js/hover.js"></script>
		<script type="text/javascript" src="js/innerfade.js"></script>
		<script type="text/javascript" src="js/faded.js"></script>

		<script type="text/javascript">
			$(document).ready(function() {
				$(' .navigation ul  ').superfish({
					delay : 800,
					animation : {
						opacity : 'show',
						height : 'show'
					},
					speed : 'normal',
					autoArrows : false,
					dropShadows : false
				});
			});
		</script>

		<script type="text/javascript">
			$(document).ready(function() {
				$('#news').innerfade({
					animationtype : 'slide',
					speed : 750,
					timeout : 2000,
					type : 'random',
					containerheight : '1em'
				});
			});
		</script>

	</head>
	<body>
		<div id="content">
			<div class="pagewidth">
				<div id="sitename">
					<a href="index.php"> <img src="images/logo.png" width="845" height="111" alt="logotype" /> </a>
				</div>
				<div class="pagewidth2">
					<div id="content-top">
						<div id="topmenu">
							<div class="navigation">

								<ul class="menu">
									<li class="item-435 current active">
										<a href="index.php">Home Page</a>
									</li>
									<li class="item-294 deeper parent">
										<a href="index.php">Site Map</a>
										<ul>
											<li class="item-290">
												<a href="index.php" >Articles</a>
											</li>
											<li class="item-438">
												<a href="index.php" >Weblinks</a>
											</li>
											<li class="item-439 deeper parent">
												<a href="index.php" >Contacts</a>
												<ul>
													<li class="item-445">
														<a href="index.php" >globbersthemes</a>
													</li>
													<li class="item-446">
														<a href="index.php" > templates</a>
													</li>
												</ul>
											</li>
											<li class="item-448">
												<a href="index.php" target="_blank" >Administrator</a>
											</li>
										</ul>
									</li>
									<li class="item-233">
										<a href="index.php" >Login</a>
									</li>
									<li class="item-238">
										<a href="index.php" >Sample Sites</a>
									</li>
									<li class="item-455">
										<a href="index.php" >Example Pages</a>
									</li>
									<li class="item-486">
										<a href="index.php" >free templates joomla</a>
									</li>
									<li class="item-487">
										<a href="index.php" >about globbers</a>
									</li>
								</ul>

							</div>
						</div>
						<div id="content-bottom">
							<div id="hightlight-t">
								HOT NEWS:
							</div>
							<div id="hightlight-b">
								<ul id="news">
									<li>
										<a href="#n1">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent faucibus semper. </a>
									</li>
									<li>
										<a href="#n2">Maecenas a accumsan felis. Praesent scelerisque volutpat egestas.</a>
									</li>
									<li>
										<a href="#n3">Pellentesque varius, tortor nec ultricies pretium, odio est gravida dolor, et rutrum erat. </a>
									</li>
								</ul>
							</div>
							<div id="search">
								<form action="/joomla1.7/index.php" method="post" class="inline">

									<div class="search">
										<input name="searchword" id="mod-search-searchword" maxlength="20" class="inputbox" type="text" size="20" value="search!!!"  onblur="if (this.value=='') this.value='search!!!';" onfocus="if (this.value=='search!!!') this.value='';" />
										<input type="hidden" name="task" value="search" />
										<input type="hidden" name="option" value="com_search" />
										<input type="hidden" name="Itemid" value="435" />
									</div>
								</form>

							</div>
						</div>
					</div>
					<div id="slideshow">
						<!-- slider begin -->
						<div id="faded">
							<ul class="contenu">
								<li>
									<!-- slider1 -->
									<img src="images/slide1.jpg" alt="slide1" />
								</li>
								<li>
									<!-- slider2 -->
									<img src="images/slide2.jpg" alt="slide2" />
								</li>
								<li>
									<!-- slider3 -->
									<img src="images/slide3.jpg" alt="slide3" />
								</li>
								<li>
									<!-- slider4 -->
									<img src="images/slide4.jpg"  alt="slide4" />
								</li>
								<li>
									<!-- slider5 -->
									<img src="images/slide5.jpg"  alt="slide5" />
								</li>
							</ul>
							<ul class="pagination">
								<li>
									<a href="#" rel="0">01.latest news N.york </a>
								</li>
								<li>
									<a href="#" rel="1">02.History</a>
								</li>
								<li>
									<a href="#" rel="2">03.sport new york</a>
								</li>
								<li>
									<a href="#" rel="3">04.gallery images</a>
								</li>
								<li>
									<a href="#" rel="4">05.spectacles</a>
								</li>
							</ul>
						</div>
						<script type="text/javascript">
							$(function() {
								$("#faded").faded({
									speed : 4000,
									crossfade : true,
									autoplay : 5000,
									autorestart : 500,
									autopagination : false
								});
							});
						</script><!-- slider end -->
					</div>
					<div id="pathway-w">
						<div id="pathway">
							<div id="pathway-b">

								<div class="breadcrumbs">
									<span class="showHere">You are here : </span><span>Home Page | basketball template</span>
								</div>

							</div>
							<div id="datetime">
								09 -February -2012 - 18:51
							</div>
						</div>
					</div>
					<div id="wrapper">

						<div id="wrapper-box">
							<div class="box">
								<div class="moduletable">
									<h3>Articles Most Read</h3>

									<ul class="mostread">
										<li>
											<a href="index.php"> Site Map</a>
										</li>
										<li>
											<a href="index.php"> Weblinks Module</a>

										</li>
										<li>
											<a href="index.php"> Getting Help</a>
										</li>
										<li>
											<a href="index.php"> about website!!!</a>

										</li>
										<li>
											<a href="index.php"> Latest Articles Module</a>
										</li>
										<li>
											<a href="index.php"> Wrapper Module</a>

										</li>
										<li>
											<a href="index.php"> Custom HTML Module</a>
										</li>
										<li>
											<a href="index.php"> Menu Module</a>

										</li>
										<li>
											<a href="index.php"> Articles Category Module</a>
										</li>
									</ul>
								</div>

							</div>
							<div class="box">
								<div class="moduletable">

									<h3>Latest News</h3>
									<ul class="latestnews">
										<li>
											<a href="index.php"> Administrator Components</a>
										</li>
										<li>
											<a href="index.php"> Beginners</a>
										</li>
										<li>
											<a href="index.php"> Archive Module</a>
										</li>
										<li>
											<a href="index.php"> Banner Module</a>
										</li>
										<li>
											<a href="index.php"> Article Categories Module</a>
										</li>
										<li>
											<a href="index.php"> Articles Category Module</a>
										</li>
										<li>
											<a href="index.php"> Authentication</a>
										</li>
										<li>
											<a href="index.php"> Australian Parks </a>
										</li>
										<li>
											<a href="index.php"> Contacts</a>
										</li>
									</ul>
								</div>

							</div>
							<div class="box">
								<div class="moduletable">

									<div class="custom"  >
										<p><img src="images/deco1.jpg" border="0" alt="" width="180" height="84" align="left" />"lipsum Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus dictum euismod nunc, et malesuada tortor facilisis rhoncus..."
										</p>
									</div>
								</div>

							</div>
							<div class="box-f">
								<div class="moduletable">
									<h3>news flash</h3>

									<div class="custom"  >
										<p>
											"Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem"
										</p>
									</div>
								</div>

							</div>
						</div>

						<div id="main">
							<div class="blog-featured">

								<div class="items-leading">
									<div class="leading-0">

										<h2><a href="index.php"> about website!!!</a></h2>

										<dl class="article-info">
											<dt class="article-info-term">
												Détails
											</dt>
											<dd class="create">
												Créé le samedi 1 janvier 2011 00:00
											</dd>
										</dl>

										<p><img src="images/deco2.jpg" border="0" alt="" align="left" />Joomla! 1.7 continues development of the Joomla Framework and CMS as a powerful and flexible way to bring your vision of the web to reality. With the administrator now fully MVC, the ability to control its look and the management of extensions is now complete.
										</p>
										<p>
											Working with multiple template styles and overrides for the same views, creating the design you want is easier than it has ever been. Limiting support to PHP 5.2.4 and above and ending legacy support for Joomla 1.0 extensions makes Joomla! lighter and faster than ever. Languages files can now be overridden without having your changes lost during an upgrade.  With the proper xml your users update extensions with a single click.
										</p>

										<div class="item-separator"></div>
									</div>
								</div>

								<div class="items-row cols-2 row-0">
									<div class="item column-1">

										<h2><a href="index.php"> Beginners</a></h2>

										<dl class="article-info">
											<dt class="article-info-term">
												Détails
											</dt>

											<dd class="create">
												Créé le samedi 1 janvier 2011 00:00
											</dd>
										</dl>

										<p><img src="images/deco3.jpg" border="0" alt="" width="179" height="170" align="left" />If this is your first Joomla site or your first web site, you have come to the right place. Joomla will help you get your website up and running quickly and easily.
										</p>
										<p>
											Start off using your site by logging in using the administrator account you created when you installed Joomla!.
										</p>
										<p>
											Explore the articles and other resources right here on your site data to learn more about how Joomla works.(When you're done reading, you can delete or archive all of this.) You will also probably want to visit the beginners' ...
										</p>

										<div class="item-separator"></div>

									</div>
									<span class="row-separator"></span>
								</div>

							</div>

						</div>
						<div id="colonne">
							<div id="right">
								<div class="moduletable_menu">
									<h3>About Joomla!</h3>

									<ul class="menu">
										<li class="item-437">
											<a href="index.php" >Getting Started</a>
										</li>
										<li class="item-280 parent">
											<a href="index.php" >Using Joomla!</a>
										</li>
										<li class="item-278">
											<a href="index.php" >The Joomla! Project</a>
										</li>
										<li class="item-279">
											<a href="index.php" >The Joomla! Community</a>
										</li>
									</ul>
								</div>
								<div class="moduletable_menu">
									<h3>This Site</h3>

									<ul class="menu">
										<li class="item-435 current active">
											<a href="index.php" >Home Page</a>
										</li>
										<li class="item-294 parent">
											<a href="index.php" >Site Map</a>
										</li>
										<li class="item-233">
											<a href="index.php" >Login</a>
										</li>
										<li class="item-238">
											<a href="index.php" >Sample Sites</a>
										</li>
										<li class="item-455">
											<a href="index.php" >Example Pages</a>
										</li>
										<li class="item-486">
											<a href="index.php" >free templates joomla</a>
										</li>
										<li class="item-487">
											<a href="index.php" >about globbers</a>
										</li>
									</ul>

								</div>
								<div class="moduletable">
									<h3>Latest Park Blogs</h3>
									<ul class="latestnews">
										<li>
											<a href="index.php"> Administrator Components</a>
										</li>

										<li>
											<a href="index.php"> Beginners</a>
										</li>
										<li>
											<a href="index.php"> Archive Module</a>
										</li>

										<li>
											<a href="index.php"> Banner Module</a>
										</li>
										<li>
											<a href="index.php"> Article Categories Module</a>
										</li>

									</ul>
								</div>
								<div class="moduletable">
									<h3>Who's Online</h3>

									<p>
										Nous avons 2&#160;invités et aucun membre en ligne
									</p>

								</div>

							</div>
						</div>

					</div>

					<div id="footer">
						<div class="ftb">
							Copyright&copy; 2012 nyc .&nbsp;design by globbers for <a target=" _blank"  href= "index.php" > globbersthemes.com</a>
						</div>
						<div id="top">
							<div class="top_button">

								<a href="#" onclick="scrollToTop();return false;"> <img src="images/top.png" width="30" height="30" alt="top" /></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<script type="text/javascript">
			var _gaq = _gaq || [];
			_gaq.push(['_setAccount', 'UA-4636970-6']);
			_gaq.push(['_trackPageview']);
			(function() {
				var ga = document.createElement('script');
				ga.type = 'text/javascript';
				ga.async = true;
				ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
				var s = document.getElementsByTagName('script')[0];
				s.parentNode.insertBefore(ga, s);
			})();
		</script>

	</body>

</html>