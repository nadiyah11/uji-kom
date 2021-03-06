@extends('tampilan.tampilan')
@section('content')
@foreach($tampil as $data)
<div class="col-lg-6 col-md-6 box" data-aos="fade-left">
		
		<img src="{{asset('img/'.$data->logo.'')}}" class="img-responsive" alt="" width="300px" height="200px">
		<a href="#"><p>{{ $data->Kategori->kategori }} Type :  {{ $data->type }}</p></a>
		<br><p> Tersedia : {{ $data->stock }}</p>
</div>
@endforeach


@endsection

@section('ketper')
	<div class="col-lg-6 content" data-aos="fade-left">
            <h2>Klik n Klik</h2>
            <p>
            	@foreach($contact as $contactper)
            		<font face="Kristen ITC">{!! $contactper->ketper !!}</font>
              	@endforeach
            </p>
          </div>
@endsection
@section('contact')

          <div class="col-lg-4 col-md-4">
            <div class="contact-about">
              <h3>Klik n Klik</h3>
              <p>@foreach($contact as $contact)
              	
              </p>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="info">
              <div>
                <i class="ion-ios-location-outline"></i>
                <p>
              		<font face="Kristen ITC"> Telp :{{$contact->conper}}</font></p>
              <div>
                <i class="ion-ios-telephone-outline"></i>
                <p>
              		<font face="Kristen ITC"> Alamat :{{$contact->alamat}}</font></p>
              	@endforeach
              </div>
            </div>
          </div>
@endsection

@section('contentt')
    @foreach($supplier as $dataa)
          <div class="col-md-2">
               <img src="{{asset('img/'.$dataa->logo_per.'')}}" alt="" width="300px" height="200px"  data-aos="fade-up">
          </div>
    @endforeach
@endsection


@section('kategori')

@foreach($filter as $filter)
<div class="modal fade" id="edit{{$filter->id}}">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title"></h4>
              </div>
              <div class="modal-body">
                <img src="{{asset('img/'.$filter->logo.'')}}" class="img-responsive" alt="" width="300px" height="200px"><br>
                  <p>Type Barang : {{$filter->type}} <br> Brand : {{$filter->Brand->brand}} <br> Harga : Rp.{{number_format($filter->harga,0,",",".").",-"}}<br> Spesifikasi : {!! $filter->keterangan !!}</p>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
              </div>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->
        <div class="col-lg-3 col-md-3 box" data-aos="fade-right">
        	 <a data-toggle="modal" href="#edit{{$filter->id}}" ><img src="{{asset('img/'.$filter->logo.'')}}" class="img-responsive" alt="" width="300px" height="200px"></a>
           <p>Type Barang : {{$filter->type}} <br> Brand : {{$filter->Brand->brand}} <br></p>
        	
        </div>
@endforeach
@endsection