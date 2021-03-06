@extends('layouts.admin')
@section('content')
<div class="row">
	<div class="col-md-12">
		<div class="card">
			<div class="card-body">
				
				<i class="fa fa-list" aria-hidden="true"></i> Kargo Listesi&#160;&#160;&#160;
				@csrf
				<button id="create" class="btn btn-success "><i class="fa fa-plus" aria-hidden="true"></i></button>
				&nbsp;
				<button id="filter" type="button" class="btn btn-info"><i class="fa fa-filter" aria-hidden="true"></i></button>
				<button id="change" type="button" class="btn btn-warning"> Seçilen  Kayitların Durumunu Değiştir</button>
				
				
				<hr>
				<table class="table table-bordered" id="dataTable">
					<thead>
						<tr>
							<td style="width:50px;"><input 
								type="checkbox" id="selectAll"></td>
							<td>#</td>
							<td>Takip No</td>
							<td>Durum</td>
							<td>Ödeme</td>
							<td>Göderici</td>
							<td>Alıcı</td>
							<td>Toplam Kg</td>
							<td>Toplam Ücret</td>
							<td>Oluşturma Tarih</td>
							<td>#</td>
						</tr>
					</thead>
					<tbody>
						@foreach($cargos as $cargo)
						<tr>
							<td>
							<input class="cargo" type="checkbox" name="cargo[]" data-id="{{$cargo->id}}">
							</td>
							<td>{{$loop->iteration}}</td>
							<td>{{$cargo->number ?? ''}}</td>
							<td>{{$cargo->cargoStatus->name ?? ''}}</td>
							<td>
								@if($cargo->payment_type == 1)
								Göderici Öder
								@elseif($cargo->payment_type ==2)
								Alıcı Öder
								@endif
							</td>
							<td>{{$cargo->sender->name ?? ''}} {{$cargo->sender->surname ?? ''}}</td>
							<td>{{$cargo->receiver->name ?? ''}} {{$cargo->receiver->surname ?? ''}}</td>
							<td>{{$cargo->total_kg ?? ''}}KG</td>
							<td>{{$cargo->total_price ?? ''}}$</td>
							<td>{{$cargo->created_at->toDateString()}}</td>
							<td>
								<a type="submit" target="_blank" 
									href="{{route('cargo.pdf',$cargo->id)}}" class="btn btn-info"><i class="fa fa-print"></i>
								</a>
								<a type="submit"
									href="{{route('cargo.show',encrypt($cargo->id))}}" class="btn btn-warning"><i class="fa fa-edit"></i>
								</a>
								<a id="delete" data-id="{{$cargo->id}}"
									data-name="{{$cargo->number}}"
								href="#delete" class="btn btn-danger"><i class="fa fa-trash-alt"></i></a>
								
								
							</td>
						</tr>
						@endforeach
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
@include('admin.cargo.deleteModal')
@include('admin.cargo.createModal')
@include('admin.cargo.filterModal')
@include('admin.cargo.changeStatusModal')
@include('admin.cargo.script')

@endsection