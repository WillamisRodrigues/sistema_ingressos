	
	<div id="preloader">
		<div data-loader="circle-side"></div>
	</div><!-- /Preload -->
	
	<div id="loader_form">
		<div data-loader="circle-side-2"></div>
	</div><!-- /loader_form -->

	<header>
		<div class="container-fluid">
		    <div class="row">
                <div class="col-3">
                    <div id="logo_home">
                        <h1><a href="index.html">Sistema de Validação Ingressos</a></h1>
                    </div>
                </div>
            </div>
		</div>
		 <!-- /social -->
		 <nav>
                        <ul class="cd-primary-nav">
							<li><a href="/home" class="animated_link">Home</a></li>
							<li><a href="/vendas" class="animated_link">Minhas Vendas</a></li>
							<li><a class="animated_link" href="{{ route('logout') }}"
									onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
										Sair
									</a>	
				   </li>
				   <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: one;">
    {{ csrf_field() }}
</form>

                        </ul>
                    </nav>
		<!-- container -->
	</header>
	<!-- End Header -->
