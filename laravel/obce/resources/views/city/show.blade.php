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
										<td>{{ $city->mayor }}</td>
									</tr>
									<tr>
										<td>Adresa obecného úradu:</td>
										<td>{{ $city->address }}</td>
									</tr>
									<tr>
										<td>Telefón:</td>
										<td>{{ $city->phone }}</td>
									</tr>
									<tr>
										<td>Fax:</td>
										<td>{{ $city->fax }}</td>
									</tr>
									<tr>
										<td>Email:</td>
										<td>{{ $city->email }}</td>
									</tr>
									<tr>
										<td>Web:</td>
										<td>{{ $city->web }}</td>
									</tr>
									<tr>
										<td>Zemepisné súradnice:</td>
										<td></td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
					<div class="city-info">
						<div class="city-info-data">
							<img src="{{ $city->image }}" alt="{{ $city->name }}" class="city-image">
							<h1 class="city-name">{{ $city->name }}</h1>
						</div>
					</div>
				</div>
			</div>
		</div>
	</main>

@endsection
