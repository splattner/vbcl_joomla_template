	  

	<div id="fb-root"></div>
	<script>(function(d, s, id) {
	  var js, fjs = d.getElementsByTagName(s)[0];
	  if (d.getElementById(id)) return;
	  js = d.createElement(s); js.id = id;
	  js.src = "//connect.facebook.net/de_DE/sdk.js#xfbml=1&version=v2.5&appId=427775360718547";
	  fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));</script>
	

	<!-- CONTENT -->
	<div class="container whitebackground">
    	<div class="row">
			<div class="col-lg-12 col-xs-12">
				<img class="img-responsive" src="<?php echo $tpath; ?>/images/header_01.jpg" />
			</div>
		</div>
		
		<div class="row">

		
			<!-- navigation -->
			<div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
				 <jdoc:include type="modules" name="navbar" />
			</div>

			<div class="col-lg-10 col-md-9 col-sm-9 col-xs-12">

				<div class="row">
					<!-- breadcrumbs -->
					<div class="col-lg-offset-8 col-lg-4">
						<jdoc:include type="modules" name="breadcrumbs" />
					</div>

					<!-- content -->
					<div class="col-lg-9 col-xs-12 col-sm-12 ">
						<jdoc:include type="message" />
						<jdoc:include type="modules" name="intro" />
						<jdoc:include type="component" />		
					</div>

					<!-- sidebar -->
					<div class="col-lg-3 hidden-xs hidden-sm">
						<jdoc:include type="modules" name="sidebar" />
					</div>
				</div>
			</div>

    	</div>

		<div class="row">
			<div class="col-lg-12">
				<p class=" straubsport">
					<img class="img-responsive center-block" src="<?php echo $tpath; ?>/images/straubsport.jpg" />
				</p>
			</div>
		</div>

		<div class="row">
			<div class="col-lg-12 col-xs-12">
				<jdoc:include type="modules" name="footer" />	
			</div>
		</div>
	</div>

	<!-- FOOTER -->
	<div class="container footer whitebackground">
		<p class="text-right">
			VBC Langenthal | Postfach 1034 | 4900 Langenthal <br />
			info@vbclangenthal.ch | www.vbclangenthal.ch
		</p>
	</div>
