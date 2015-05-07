@extends('layouts.master')

@section('content')
	<div class="row">

		<div class="col-md-10 col-md-offset-1">

			<div class="panel panel-default">
				<div class="panel-heading">Dashboard Edit</div>

				<div class="panel-body" align="center">
					Описание отеля

				</div>


				<div class="panel-body">
					{!! Form::model($hotel, ['url'=> 'dashboard/update/' . $hotel->id, 'method'=>'PATCH']) !!}

					<div class="form-group"> 

					{!! Form::text('title', null, ['class'=> 'form-control']) !!}
					</div>
					<div class="form-group"> 

					{!! Form::textarea('description', null, ['class'=> 'form-control']) !!}
					</div>
					<div class="form-group"> 

					{!! Form::text('image', null, ['class'=> 'form-control']) !!} 
					</div>

					<div class="form-group" align="right">
					{!! Form::submit('Изменить', ['class'=> 'btn btn-primary'])!!}
					{!! Form::submit('Добавить отель', ['class'=> 'btn btn-primary'])!!}
					</div>

					{!! Form::close() !!}
					
				</div>
			</div><!-- panel -->

		</div><!-- col-md-10 -->

	</div><!-- row -->
@endsection