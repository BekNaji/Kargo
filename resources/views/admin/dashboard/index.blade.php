@extends('layouts.admin')
@section('header_js')
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js" ></script>
@endsection
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <i class="fa fa-hashtag" aria-hidden="true"></i> Dashboard
                <hr>
                <div class="row">
                    <div class="col-xl-3 col-md-6">
                        <div class="card bg-primary text-white mb-4">
                            <div class="card-body">Toplam Kargo Adetı <br>
                                <h2>{{$cargoCount}}</h2>
                            </div>
                            <div class="card-footer d-flex align-items-center justify-content-between">
                                <a class="small text-white stretched-link" href="#">Listeye git</a>
                                <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6">
                        <div class="card bg-warning text-white mb-4">
                            <div class="card-body">Toplam Kullanıcı sayısı <br>
                            <h2>{{$userCount}}</h2></div>
                            <div class="card-footer d-flex align-items-center justify-content-between">
                                <a class="small text-white stretched-link" href="#">Listeye git</a>
                                <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6">
                        <div class="card bg-success text-white mb-4">
                            <div class="card-body">Toplam Kayıtlı Gönderici sayısı <br><h2>{{$senderCount}}</h2></div>
                            <div class="card-footer d-flex align-items-center justify-content-between">
                                <a class="small text-white stretched-link" href="#">Listeye git</a>
                                <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6">
                        <div class="card bg-danger text-white mb-4">
                            <div class="card-body">Toplam Alıcı Sayısı
                            <br><h2>{{$receiverCount}}</h2></div>
                            <div class="card-footer d-flex align-items-center justify-content-between">
                                <a class="small text-white stretched-link" href="#">Listeye git</a>
                                <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
var ctx = document.getElementById('myChart').getContext('2d');
var chart = new Chart(ctx, {
// The type of chart we want to create
type: 'bar',
// The data for our dataset
data: {
labels: ['Jun','Jul'],
datasets: [{
label: 'Aylık kargo',
data: [4],
backgroundColor: 'rgba(36, 104, 240, 1)',
borderColor: 'rgb(255, 99, 132)',
}],
},
// Configuration options go here
options: {
responsive: false
}
});
</script>
@endsection