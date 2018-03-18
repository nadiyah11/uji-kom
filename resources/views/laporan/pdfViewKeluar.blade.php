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
			<table>
					<thead>
							<tr>
								<th>No </th>
								<th>Tanggal Keluar</th>
								<th>Pencatat</th>
								<th>Type Barang</th>
								<th>Harga Barang</th>
								<th>Jumlah Keluar</th>
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
							<td>{{ $data->Barang->type }}</td>
							<td>Rp.{{number_format($data->Barang->harga,0,",",".").",-"}}</td>
							<td>{{ $data->jumlahk }} Barang</td>
							<td>Rp.{{number_format($data->totalk,0,",",".").",-"}}</td>
							<td></td>
							</tr>
							@endforeach
							
					</tbody>
			</table>
</body>
</html>