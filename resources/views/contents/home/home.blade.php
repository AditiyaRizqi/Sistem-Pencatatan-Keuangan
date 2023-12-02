@extends('layout.master')

@section('title',$title)

@section('content')
	<h4 style="text-align: center">Dashboard</h4>
	<div class="row" style="margin-top: 30px;">
		<div class="col-md-4 box">
			<h6>Saldo :</h6>
			<hr>
			<p class="text-right">Rp <strong>{{number_format($saldo,0,'.','.')}}</strong></p>
		</div>
		<div class="col-md-4 box">
			<h6>Total Pengeluaran :</h6>
			<hr>
			<p class="text-right">Rp <strong>{{number_format($pengeluaran,0,'.','.')}}</strong></p>
		</div>
		<div class="col-md-4 box">
			<h6>Total Pemasukan :</h6>
			<hr>
			<p class="text-right">Rp <strong>{{number_format($pemasukan,0,'.','.')}}</strong></p>
		</div>
	</div>
	<style>
body {
    -webkit-animation: colorchange 40s infinite; 
    animation: colorchange 40s infinite;
}
@-webkit-keyframes colorchange {
    10%%  {background:#E0FFFF;}
    25%  {background: #00FA9A;}
    50%  {background: #48D1CC;}
    75%  {background: #FFDEAD;}
    100% {background: #87CEFA;}
}
@keyframes colorchange {
     10%  {background:#E0FFFF;}
    25%  {background: #00FA9A;}
    50%  {background: #48D1CC;}
    75%  {background: #FFDEAD;}
    100% {background: #87CEFA;}
}   
</style>
<img src="images/aditiyarz.png" style="display:block; margin:auto;">
@endsection