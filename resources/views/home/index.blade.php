@extends('template.app')
@section('titulo','Sistema de Venda de Ingressos')
@section('conteudo')
<main>
		<div id="form_container">
			<div class="row">
				<div class="col-lg-5">
					<div id="left_form">
						<figure><img src="{{asset('assets/img/reserve_bg.svg')}}" alt=""></figure>
						<h2>Vendas de ingressos</h2>
						<p>Preencha as informações ao lado para gerar o ingresso.</p>
						<a href="#0" id="more_info" data-toggle="modal" data-target="#more-info"><i class="pe-7s-info"></i></a>
					</div>
				</div>
				<div class="col-lg-7">

					<div id="wizard_container">
						<div id="top-wizard">
							<div id="progressbar"></div>
						</div>
						<!-- /top-wizard -->
						<form name="example-1" id="wrapped" method="POST">
							<input id="website" name="website" type="text" value="">
							<!-- Leave for security protection, read docs for details -->
							<div id="middle-wizard">
								<div class="step">
									<h3 class="main_question"> <i class="pe-7s-id"></i> Bilheteria</h3>
									<div class="row">
										<div class="col-md-8">
											<div class="form-group">
												<input type="text" name="firstname" class="form-control required" placeholder="Código">
											</div>
										</div>
										<div class="col-md-8">
											<div class="form-group">
												<input type="text" name="firstname" class="form-control required" value="{{auth()->user()->name}}" placeholder="Vendedor">
											</div>
										</div>
										<div class="col-md-8">
											<div class="form-group">
												<input class="form-control required" type="text" name="check_in" id="check_in" placeholder="Check in" value="{{ date('d/m/Y') }}">
											</div>
										</div>
										
									</div>
									<button class="btn btn-success">
									<i class="pe-7s-angle-right"></i>	
									Vender</button>
									<!-- /row -->
								</div>
								<!-- /step-->
							</div>
							<!-- /middle-wizard -->
							
							<!-- /bottom-wizard -->
						</form>
					</div>
					<!-- /Wizard container -->
				</div>
			</div><!-- /Row -->
		</div><!-- /Form_container -->
	</main>
@endsection