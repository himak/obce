<header class="header">
	<nav class="navbar navbar-default" role="navigation">
		<div class="container">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
					<span class="sr-only">MENU</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="{{ url('/')}}">
					<img src="{{ asset('assets/img/logo.png') }}" alt="LOGO">
				</a>
			</div>

			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse navbar-ex1-collapse">

				<form class="navbar-form navbar-right visible-xs" role="search">
					<div class="input-group">
						<input type="text" class="form-control" placeholder="Vyhľadaj ...">
						<span class="input-group-btn">
							<button class="btn btn-default" type="button"><span class="glyphicon glyphicon-search" aria-hidden="true"></span><span class="sr-only">Vyhľadaj</span></button>
						</span>
					</div><!-- /input-group -->
				</form>

				<ul class="nav navbar-nav navbar-right visible-xs">
					<li><a href="#">O nás</a></li>
					<li><a href="#">Zoznam miest</a></li>
					<li><a href="#">Inšpekcia</a></li>
					<li><a href="#">Kontakt</a></li>
				</ul>

				<ul class="nav navbar-nav navbar-rightv visible-xs">
					<li><a href="#"><strong class="text-info">Kontakty a čísla na oddelenia</strong></a></li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">EN <b class="caret"></b></a>
						<ul class="dropdown-menu">
							<li><a href="#">EN</a></li>
							<li><a href="#">SK</a></li>
						</ul>
					</li>
				</ul>

				<button type="button" class="btn btn-success navbar-btn navbar-right">Prihlásenie</button>

				<form class="navbar-form navbar-right hidden-xs" role="search">
					<div class="input-group">
						<input type="text" class="form-control" placeholder="Vyhľadaj ...">
						<span class="input-group-btn">
							<button class="btn btn-default" type="button"><span class="glyphicon glyphicon-search" aria-hidden="true"></span><span class="sr-only">Vyhľadaj</span></button>
						</span>
					</div><!-- /input-group -->
				</form>

				<ul class="nav navbar-nav navbar-right hidden-xs">
					<li><a href="#"><strong class="text-info">Kontakty a čísla na oddelenia</strong></a></li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">EN <b class="caret"></b></a>
						<ul class="dropdown-menu">
							<li><a href="#">EN</a></li>
							<li><a href="#">SK</a></li>
						</ul>
					</li>
				</ul>
			</div>
		</div>
	</nav>

	<div class="container hidden-xs">
		<ul class="nav nav-pills">
		  <li role="presentation"><a href="#">O nás</a></li>
		  <li role="presentation"><a href="#">Zoznam miest</a></li>
		  <li role="presentation"><a href="#">Inšpekcia</a></li>
		  <li role="presentation"><a href="#">Kontakt</a></li>
		</ul>
	</div>
</header>