@extends('master')
@section('title', 'Detail obce')

@section('content')

	<main class="page-content">
		<h2 class="page-title">Detail obce</h2>

		<div class="container">
			<div class="well well-default">
					<div class="city-detail">
						<div class="city-info-data">
							<table>
								<tbody>
									<tr>
										<td>Meno starostu:</td>
										<td>Ing. Ivan Patoprstý</td>
									</tr>
									<tr>
										<td>Adresa obecného úradu:</td>
										<td>SNP 65, 900 84 Báhoň</td>
									</tr>
									<tr>
										<td>Telefón:</td>
										<td>0907 325 523</td>
									</tr>
									<tr>
										<td>Fax:</td>
										<td>033 645 5340</td>
									</tr>
									<tr>
										<td>Email:</td>
										<td>starosta@bahon.sk</td>
									</tr>
									<tr>
										<td>Web:</td>
										<td>www.bahon.sk</td>
									</tr>
									<tr>
										<td>Zemepisné súradnice:</td>
										<td>48.1523834, 17.0904241</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
					<div class="city-info">
						<div class="city-info-data">
							<img src="{{ asset('assets/img/logo_city.png') }}" alt="LOGO OBCE" class="city-image">
							<h1 class="city-name">{{ $city->name }}</h1>
						</div>
					</div>
				</div>
			</div>
		</div>
	</main>

@endsection