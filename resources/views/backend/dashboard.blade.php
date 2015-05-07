@extends('layouts.master')

@section('content')
	<div class="row">

		<div class="col-md-10 col-md-offset-1">

			<div class="panel panel-default">
				<div class="panel-heading">Dashboard</div>

				<div class="panel-body" align="center">
					Список отелей

				</div>

				<div class="panel-body">
				<table class="table table-hover">
				<thead>
					<tr>
						<td>Название</td> 
						<td>Изменить</td> 
						<td>Удалить</td>
					</tr>
				</thead>

				<tbody>
				@foreach ($hotel as $htl )
					<tr>
						<td>{{$htl->title}}</td>
						<td></td>
						<td></td>

					<td><a href="dashboard/edit/{{$htl->id}}">Изменить</a></td>
						<td><a href="dashboard/del/{{$htl->id}}">Удалить</a></td> 
					</tr>
				@endforeach	
				</tbody>	
				</table>
				</div>
			</div><!-- panel -->

		</div><!-- col-md-10 -->

	</div><!-- row -->
@endsection