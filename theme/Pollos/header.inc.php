<div id="over"></div>
	<header>
		<?php if( !$detect->isMobile() AND !$detect->isTablet() ) : ?>
			<div>
				<div class="container">
					<div class="col-md-6">
						<p><?php echo get_component('header-phone'); ?></p>
					</div>
					<div class="col-md-6">
						<div class="header-right"><?php echo get_component('header-social'); ?></div>
					</div>
				</div>
			</div>
			<div>
				<div class="container">
					<div class="col-sm-4 col-md-3">
						<div class="logo">
							<?php echo get_component('header-logo'); ?>
						</div>
					</div>
					<div class="col-sm-8 col-md-9">
						<!-- topmenu -->
						<nav class="navbar navbar-default">
							<div class="navbar-collapse" id="navbar-collapse">
							   	<ul class="nav menu navbar-nav" id="topmenu">
			      				   <?php get_i18n_navigation(return_page_slug(),0,1,I18N_SHOW_MENU);  ?>
			      				</ul>
							</div>
						</nav>
						<!-- /topmenu -->
					</div>
				</div>
			</div>
		<?php else: ?>
			<!-- topmenu -->
			<nav class="navbar navbar-default">
				<div class="navbar-header">
			    	<button type="button" class="navbar-toggle">
			        	<span class="sr-only">Navegação</span>
			        	<i class="fa fa-bars" aria-hidden="true"></i>
			      	</button>
				    <a class="navbar-brand visible-xs-block" href="#"><?php echo get_site_name(); ?></a>
				</div>
				<div class="navbar-collapse">
				    <ul class="nav menu navbar-nav" id="topmenu">
      				   <?php get_i18n_navigation(return_page_slug(),0,1,I18N_SHOW_MENU);  ?>
      				</ul>
				</div>
			</nav>
			<!-- /topmenu -->
		<?php endif; ?>
	</header>