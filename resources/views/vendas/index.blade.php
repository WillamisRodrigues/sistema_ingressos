@extends('template.app')
@section('titulo','Sistema de Venda de Ingressos')
@section('conteudo')
<main>
		<div class="container">
			<div class="row">
                <h2 class="mt-4">Lista de vendas</h2>
            <table class="table table-striped table-bordered mt-4">
                <thead>
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">Código</th>
                    <th scope="col">Vendedor</th>
                    <th scope="col">Ação</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td><button class="btn btn-danger"> <i class="pe-7s-trash"></i> Excluir </button></td>
                    </tr>
                </tbody>
                </table>
            </div>
        </div>
</main>
@endsection