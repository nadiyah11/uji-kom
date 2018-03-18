@extends('tampilan.tampilan')
@section('content')
@foreach($tampil as $data)
<div class="col-lg-6 col-md-6 box" data-aos="fade-left">
		
				<img src="{{asset('img/'.$data->logo.'')}}" class="img-responsive" alt="">
		<a href="#"><p>{{ $data->Kategori->kategori }} Type :  {{ $data->type }}</p></a>
		<br><p> Tersedia : {{ $data->stock }}</p>
</div>
@endforeach


@endsection
@section('contentt')
    @foreach($supplier as $dataa)
          <div class="col-md-2">
               <img src="{{asset('img/'.$dataa->logo_per.'')}}" alt=""  data-aos="fade-up">
          </div>
    @endforeach
@endsection


@section('kategori')

@foreach($filter as $filter)
<center>
	<h1>Kategori {{$filter->Kategori->kategori}}</h1>
</center>
<h1><img src="{{asset('img/'.$filter->logo.'')}}" class="img-responsive" alt=""></h1>
<p>Type Barang : {{$filter->type}}</p>
<p>Brand : {{$filter->Brand->brand}}</p>
<p>Harga : Rp.{{number_format($filter->harga,0,",",".").",-"}}</p>
@endforeach
@endsection