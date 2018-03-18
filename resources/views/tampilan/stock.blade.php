@extends('tampilan.tampilan')
@section('content')
@foreach($tampil as $data)
<div class="col-lg-6 col-md-6 box" data-aos="fade-left">
		
				<img src="{{asset('img/'.$data->logo.'')}}" class="img-responsive" alt="">
		<a href="#"><p>{{ $data->Kategori->kategori }}  Type :  {{ $data->type }}</p></a>
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