@extends('layouts.app')
@section('content')
<main class="content">
	<div class="container-fluid p-0">
		<div class="row">
			<div class="col-md-4 col-xl-3">
				<div class="card mb-3">
					<div class="card-header p-0 position-relative">
						@if(file_exists($model->page_pic))
						<img src="{{$model->page_pic}}" class="card-img-top" style="height: 200px; object-fit: cover;">
						@else
						<img src="/img/avatars/no.jpg"  class="card-img-top" style="height: 200px; object-fit: cover;">
						@endif
						<div class="carousel-caption text-left px-4" style="bottom:0; z-index: 999999; width: 100%; left:0;">
							@if(file_exists($model->page_pic))
							<img src="{{$model->page_pic}}" class="rounded-circle">
							@else
							<img src="/img/avatars/nopage.jpg" class="rounded-circle float-left mr-3" style="width: 45px; height: 45px; object-fit: cover;">
							@endif
							<h3 class="font-weight-bold mb-0 text-white"> {{$model->page_name}} </h3>
							<div> Хуудас • {{$model->page_likes}} хүнд таалагдсан</div>
						</div>
						<div class="carousel-caption bg-opacity rounded"></div>
						
					</div>
					<div class="card-body text-center">
						<div class="text-muted mb-2"><span data-feather="navigation"></span>  {{$model->page_geo}}, {{$model->page_dist}}</div>
						<div>
							<a class="btn btn-primary btn-sm disabled rounded-pill" href="#">{{$model->page_category}}</a>
							<a class="btn btn-primary btn-sm disabled rounded-pill" href="#">{{$model->page_sub_category}}</a>
						</div>
					</div>
				</div>
				<div class="card mb-3">
					<div class="card-body">
						
					</div>
				</div>
			</div>
			
			<div class="col-md-8 col-xl-9">
				<div class="row">
					<div class="col-sm-3">
						<div class="card">
							<div class="card-body">
								<h5 class="card-title mb-4 font-weight-bold">Хуудасны нийтлэл</h5>
								<h1 class="mt-1 mb-3"> {{number_format($posts)}} </h1>
								
							</div>
						</div>
					</div>
					<div class="col-sm-3">
						<div class="card">
							<div class="card-body">
								<h5 class="card-title mb-4 font-weight-bold">Сэтгэгдэл</h5>
								<h1 class="mt-1 mb-3"> {{number_format($comment)}} </h1>
								
							</div>
						</div>
					</div>
					<div class="col-sm-3">
						<div class="card">
							<div class="card-body">
								<h5 class="card-title mb-4 font-weight-bold">Reactions</h5>
								<h1 class="mt-1 mb-3"> {{number_format($reaction)}} </h1>
								
							</div>
						</div>
					</div>
					<div class="col-sm-3">
						<div class="card">
							<div class="card-body">
								<h5 class="card-title mb-4 font-weight-bold">Хуваалцсан</h5>
								<h1 class="mt-1 mb-3"> {{number_format($shares)}} </h1>
								
							</div>
						</div>
					</div>
				</div>

				{{$model->reac}}

				<div class="card">
					<div class="card-header">
						<h5 class="card-title mb-0 font-weight-bold text-uppercase">Шилдэг 10 нийтлэл</h5>
					</div>
					<div class="card-body h-100">
						@foreach($post as $tops)
						<div class="d-flex align-items-start">
							@if(file_exists($tops->page->page_pic))
							<img src="{{$tops->page->page_pic}}" style="width:36px; height: 36px; object-fit: cover;" class="rounded-circle mr-2" >
							@else
							<img src="/img/avatars/nopage.jpg" style="width:36px; height: 36px; object-fit: cover;" class="rounded-circle mr-2" >
							@endif
							<div class="flex-grow-1">
								
								<div><a href="/page/{{$tops->page->page_id}}">{{$tops->page->page_name ?? $tops->profile->profile_name ?? ''}} </a></div>
								<small>{{$tops->post_title}}</small>
								<small class="text-muted pr-3">{{$tops->post_message}}</small><br>
								<div class="clearfix"></div>
								<div class="pt-2">
									<button class="btn btn-outline-primary btn-sm rounded align-middle"><i class="align-middle" data-feather="thumbs-up"></i>  {{$tops->post_reactions}} </button>
									<button class="btn btn-outline-primary btn-sm rounded align-middle"><i class="align-middle" data-feather="message-square"></i> {{$tops->post_comments}} </button>
									<button class="btn btn-outline-primary btn-sm rounded align-middle"><i class="align-middle" data-feather="share"></i> {{$tops->post_post_shares ?? '0'}} </button>
									<button class="btn btn-outline-primary btn-sm rounded align-middle"><i class="align-middle" data-feather="clock"></i> <span data-livestamp="{{strtotime($tops->post_inserted_date)}}"></span> </button>
								</div>
							</div>
							<div class="float-right">
								@if(file_exists($tops->post_pic))
								<img src="{{$tops->post_pic}}" style="width: 100px; height: 100px; object-fit: cover;">
								@else
								<img src="/img/avatars/notfound.png" style="width: 100px; height: 100px; object-fit: cover;">
								@endif
							</div>
						</div>
						<hr>
						@endforeach
					</div>
				</div>
			</div>
		</div>
	</div>
</main>
@endsection