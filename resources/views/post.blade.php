@extends('layouts.app')
@section('content')

<main class="content">
	<div class="container-fluid p-0">
		<div class="row justify-content-center">	
			<div class="col-lg-8">
				<div class="card">
					<div class="card-header border-bottom">
						<div class="float-left">
							@if(file_exists($model->page->page_pic))

							@else
							<img src="/img/avatars/nopage.jpg" class="rounded-circle mr-2" style="width:40px; height: 40px; object-fit: cover;">
							@endif
						</div>
						<div > 
							<h4 class="mb-0"> {{$model->page->page_name}} </h4>
							<small> Хуудас -  <span data-livestamp="{{strtotime($model->post_inserted_date)}}"></span> - @if($model->post_type == 'photo') Зураг @elseif($model->post_type == 'video') Бичлэг @elseif($model->post_type == 'link') Линк @else Статус @endif	</small>
						</div>
					</div>
					<div class="card-body">
						<p> {{$model->post_message}} </p>
						{!! $model->post_desc !!}
					</div>
				</div>

				<div class="card">
					<div class="card-header border-bottom">
						<h5 class="font-weight-bold"> Сэтгэгдэл </h5>
					</div>
					<div class="card-body">
					</div>
				</div>
			</div>
		</div>
	</div>
</main>

@endsection