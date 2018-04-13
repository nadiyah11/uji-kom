<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
	table{
	width: 100%;
	border:1px solid black;
	}
	td, th{
	border:1px solid black;
	}

	</style>
</head>
<body>
			<center><h4>Total Uang Pembayaran Dari Tanggal {{$from}} Sampai {{$to}}: Rp.{{number_format($sum)}},-</h4></center>
						<table>
						<tr>
							
								<th>No </th>
								<th>Tanggal Masuk</th>
								<th>Pencatat</th>
								<th>Supplier</th>
								<th>Type Barang</th>
								<th>Harga Barang</th>
								<th>Jumlah Masuk</th>
								<th>Total Pembayaran</th>
								<th colspan="3"></th>
							</tr>
						</thead>
						@php $no=1; @endphp
						<tbody>
							
							@foreach($laporan as $data)
							<tr>

							<td>{{$no++}}</td>
							<td>{{ $data->created_at }}</td>
							<td>{{ $data->User->name }}</td>
							<td>{{ $data->Supplier->nama_per }}</td>
							<td>{{ $data->Barang->type }}</td>
							<td>Rp.{{number_format($data->Barang->harga,0,",",".").",-"}}</td>
							<td>{{ $data->jumlahs }} Barang</td>
							<td>Rp.{{number_format($data->totals,0,",",".").",-"}}</</td>
							<td></td>
							</tr>
							@endforeach
							
						</tbody>
	</table>
</body>
</html>