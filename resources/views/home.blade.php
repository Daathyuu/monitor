@extends('layouts.app')
@section('content')
<main class="content">
    <div class="container-fluid p-0">
        <div class="row mb-2 mb-xl-3">
            <div class="col-auto d-none d-sm-block">
                <h3><strong>Тавтай морил! </strong> {{Auth::user()->name}}</h3>
            </div>
            <div class="col-auto ml-auto text-right mt-n1">
                <div><i class="align-middle" data-feather="calendar"></i>  {{now()->format('Y')}} оны {{now()->format('m')}} сарын {{now()->format('d')}}</div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-6 col-xxl-5 d-flex">
                <div class="w-100">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title mb-4 font-weight-bold">Хуудасны нийтлэл</h5>
                                    <h1 class="mt-1 mb-3"> {{number_format($page)}}</h1>
                                    
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title mb-4 font-weight-bold">Бүлгэмийн нийтлэл</h5>
                                    <h1 class="mt-1 mb-3">{{number_format($group)}}</h1>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title mb-4 font-weight-bold">Сэтгэгдэл</h5>
                                    <h1 class="mt-1 mb-3">{{number_format($comment)}}</h1>
                                    
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title mb-4 font-weight-bold">Reactions</h5>
                                    <h1 class="mt-1 mb-3">{{number_format($reaction)}}</h1>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-xxl-7">
                <div class="card flex-fill w-100">
                    <div class="card-header">
                        <h5 class="card-title mb-0 font-weight-bold">Сүүлийн 14 хоног</h5>
                    </div>
                    <div class="card-body py-3">
                        <div class="chart chart-sm">
                            <canvas id="chartjs-dashboard-line"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-6 col-xxl-3 d-flex order-2 order-xxl-3">
                <div class="card flex-fill w-100">
                    <div class="card-header">
                        <ul class="nav nav-pills card-header-pills pull-right text-uppercase" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="tab" href="#tab-4">Төрөл</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#tab-5">Reactions</a>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="tab-4" role="tabpanel">
                                <div class="align-self-center w-100">
                                    <div class="py-3">
                                        <div class="chart chart-xs">
                                            <canvas id="chartjs-dashboard-pie"></canvas>
                                        </div>
                                    </div>
                                    <table class="table mb-0 font-weight-bold">
                                        <tbody>
                                            <tr>
                                                <td>Статус</td>
                                                <td class="text-right">{{$status}}</td>
                                            </tr>
                                            <tr>
                                                <td>Видео</td>
                                                <td class="text-right">{{$video}}</td>
                                            </tr>
                                            <tr>
                                                <td>Линк</td>
                                                <td class="text-right">{{$link}}</td>
                                            </tr>
                                            <tr>
                                                <td>Зураг</td>
                                                <td class="text-right">{{$photo}}</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="tab-5" role="tabpanel">
                                
                                <div class="align-self-center w-100">
                                    <div class="py-3">
                                        <div class="chart chart-xs">
                                            <canvas id="reactions"></canvas>
                                        </div>
                                    </div>
                                    <table class="table mb-0 font-weight-bold">
                                        <tbody>
                                            <tr>
                                                <td>Таалагдлаа</td>
                                                <td class="text-right">{{$like}}</td>
                                            </tr>
                                            <tr>
                                                <td>Зүрх</td>
                                                <td class="text-right">{{$love}}</td>
                                            </tr>
                                            <tr>
                                                <td>Халамж</td>
                                                <td class="text-right">{{$care}}</td>
                                            </tr>
                                            <tr>
                                                <td>Хаха</td>
                                                <td class="text-right">{{$haha}}</td>
                                            </tr>
                                            <tr>
                                                <td>Ваав</td>
                                                <td class="text-right">{{$wow}}</td>
                                            </tr>
                                            <tr>
                                                <td>Гунигтай</td>
                                                <td class="text-right">{{$sad}}</td>
                                            </tr>
                                            <tr>
                                                <td>Ууртай</td>
                                                <td class="text-right">{{$angry}}</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            
                        </div>
                        
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-12 col-xxl-6 d-flex order-3 order-xxl-2">
                <div class="card flex-fill w-100">
                    <div class="card-header">
                        <h5 class="card-title mb-0 font-weight-bold">Газрын зураг</h5>
                    </div>
                    <div class="card-body px-4">
                        <div id="mongolia" style="height:350px;"></div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-xxl-3 d-flex order-1 order-xxl-1">
                <div class="card flex-fill">
                    <div class="card-header">
                        <h5 class="card-title mb-0 font-weight-bold">Календар</h5>
                    </div>
                    <div class="card-body d-flex">
                        <div class="align-self-center w-100">
                            <div class="chart">
                                <div id="datetimepicker-dashboard"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <div class="card flex-fill h-100">
                    <div class="card-header">
                        <h5 class="card-title mb-0 font-weight-bold"><i class="align-middle" data-feather="star"></i> TOP 10 </h5>
                    </div>
                    <div class="card-body">
                        @foreach($top as $tops)
                        <div class="d-flex align-items-start">
                            @if(file_exists($tops->page->page_pic))
                            <img src="{{$tops->page->page_pic}}" style="width:36px; height: 36px; object-fit: cover;" class="rounded-circle mr-2" >
                            @else
                            <img src="/img/avatars/nopage.jpg" style="width:36px; height: 36px; object-fit: cover;" class="rounded-circle mr-2" >
                            @endif
                            <div class="flex-grow-1">
                                
                                <div><a href="/page/{{$tops->page->page_id}}">{{$tops->page->page_name ?? $tops->profile->profile_name ?? ''}} </a></div>
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
            <div class="col-lg-6">
                <div class="card flex-fill h-100">
                    <div class="card-header">
                        <h5 class="card-title mb-0 font-weight-bold float-left"> <i class="align-middle" data-feather="star"></i> Аймаг топ </h5>
                        <div class="float-right">
                            <form id="selectForm">
                                <div class="row">
                                    <label class="col-form-label col text-sm-right"> Аймаг: </label>
                                    <select class="form-control col" id="city" name="country">
                                        @foreach($city as $city)
                                        <option value="{{$city->name}}" @if($item == $city->name) selected @endif > {{$city->name}} </option>
                                        @endforeach
                                    </select>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="card-body">
                        @foreach($country as $tops)
                        <div class="d-flex align-items-start">
                            @if(file_exists($tops->page->page_pic))
                            <img src="{{$tops->page->page_pic}}" style="width:36px; height: 36px; object-fit: cover;" class="rounded-circle mr-2" >
                            @else
                            <img src="/img/avatars/nopage.jpg" style="width:36px; height: 36px; object-fit: cover;" class="rounded-circle mr-2" >
                            @endif
                            <div class="flex-grow-1">
                                
                                <div><a href="">{{$tops->page->page_name ?? $tops->profile->profile_name ?? ''}} </a></div>
                                <small class="text-muted pr-3">{{Str::limit($tops->post_message,255)}}</small><br>
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
@section('javascript')
<link rel="stylesheet" type="text/css" href="/map/jquery-jvectormap-2.0.5.css">
<script type="text/javascript" src="/map/jquery-jvectormap-2.0.5.min.js"></script>
<script type="text/javascript">
$('#city').change(function(){
$('#selectForm').submit();
})
</script>
<script>
document.addEventListener("DOMContentLoaded", function() {
var ctx = document.getElementById("chartjs-dashboard-line").getContext("2d");
var gradient = ctx.createLinearGradient(0, 0, 0, 225);
gradient.addColorStop(0, "rgba(0, 0, 0, 1)");
gradient.addColorStop(1, "rgba(215, 227, 244, 1)");
var label = [];
// Line chart
new Chart(document.getElementById("chartjs-dashboard-line"), {
type: "bar",
data: {
labels: [
@foreach($posts as $post)
"{{$post->date}}",
@endforeach
],
datasets: [{
label: "Нийтлэл",
fill: true,
backgroundColor: gradient,
borderColor: window.theme.primary,
data: [
@foreach($posts as $post)
"{{$post->total}}",
@endforeach
]
}]
},
options: {
maintainAspectRatio: false,
legend: {
display: false
},
tooltips: {
intersect: false
},
hover: {
intersect: true
},
plugins: {
filler: {
propagate: false
}
},
scales: {
xAxes: [{
reverse: true,
gridLines: {
color: "rgba(0,0,0,0.0)"
}
}],
yAxes: [{
ticks: {
stepSize: 1000
},
display: true,
borderDash: [3, 3],
gridLines: {
color: "rgba(0,0,0,0.0)"
}
}]
}
}
});
});
</script>
<script>
document.addEventListener("DOMContentLoaded", function() {
// Pie chart
new Chart(document.getElementById("chartjs-dashboard-pie"), {
type: "pie",
data: {
labels: ["Статус", "Видео", "Линк","Зураг"],
datasets: [{
data: [{{$status}}, {{$video}}, {{$link}},{{$photo}}],
backgroundColor: [
window.theme.primary,
window.theme.warning,
window.theme.danger,
window.theme.info
],
borderWidth: 5
}]
},
options: {
responsive: !window.MSInputMethodContext,
maintainAspectRatio: false,
legend: {
display: false
},
cutoutPercentage: 75
}
});
});
</script>
<script>
document.addEventListener("DOMContentLoaded", function() {
// Pie chart
new Chart(document.getElementById("reactions"), {
type: "pie",
data: {
labels: ["Таалагдлаа", "Зүрх", "Халамжлах","Хаха","Ваав","Гуниглах","Уурлах"],
datasets: [{
data: [{{$like}}, {{$love}}, {{$care}}, {{$haha}} , {{$wow}} , {{$sad}} , {{$angry}} ],
backgroundColor: [
window.theme.primary,
window.theme.danger,
window.theme.success,
window.theme.info,
window.theme.secondary,
window.theme.warning,
window.theme.danger,
],
borderWidth: 5
}]
},
options: {
responsive: !window.MSInputMethodContext,
maintainAspectRatio: false,
legend: {
display: false
},
cutoutPercentage: 75
}
});
});
</script>
<script>
document.addEventListener("DOMContentLoaded", function() {
document.getElementById("datetimepicker-dashboard").flatpickr({
inline: true,
prevArrow: "<span class=\"fas fa-chevron-left\" title=\"Өмнөх сар\"></span>",
nextArrow: "<span class=\"fas fa-chevron-right\" title=\"Дараах сар\"></span>",
});
});
</script>
@endsection