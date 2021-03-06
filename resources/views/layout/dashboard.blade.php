<html>
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="{{url('css/bitnesia-dashboard.css')}}">
	<link rel="stylesheet" href="{{url('css/bootstrap.min.css')}}">
	<link rel="stylesheet" href="{{url('css/ionicons.min.css')}}">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	@yield('header')
</head>
<body>
	<div class="header">
		<div class="navigation position-fixed">
			<div class="logo">
				<img src="{{asset('assets/image/bitcoin.png')}}" alt="">
			</div>
			<div class="menu">
				<div class="item">Akun</div>
			</div>
		</div>
	</div>
	<div class="sidebar">
		<div class="profile">
			<div class="img">
				<img src="http://via.placeholder.com/140x140" class="rounded mx-auto d-block" alt="...">
			</div>
			<span class="profile-name">Dimas Adi Satria</span>
			<span class="profile-id">@dim.as</span>
		</div>
		<div class="list">
			<div class="item-block">
				<div class="item">
					<i class="icon-bitnesia ion-stats-bars"></i><span>Market</span>
				</div>
			</div>
			<div class="item-block">
				<div class="item">
					<i class="icon-bitnesia ion-card"></i><span>Wallet</span>
				</div>
			</div>
			<div class="item-block">
				<div class="item">
					<i class="icon-bitnesia ion-cash"></i><span>Investasi</span>
				</div>
			</div>
			<a href="{{url('store/user')}}" class="item-block">
				<div class="item">
					<i class="icon-bitnesia ion-cash"></i><span>Toko</span>
				</div>
			</a>
		</div>
	</div>
	{{-- CONTENT HERE --}}
	@yield('content')
	{{-- ENDING CONTENT HERE --}}
</body>
<script src="{{url('js/jquery-3.2.1.min.js')}}"></script>
<script src="{{url('js/retina.min.js')}}"></script>
<script src="{{url('js/chart.min.js')}}"></script>
<script src="{{url('js/highstock.min.js')}}"></script>
<script src="{{url('js/numeral.min.js')}}"></script>
<script src="{{url('js/ihr.min.js')}}"></script>
<script>
var ctx = document.getElementById("myChart");
var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ["Red", "Blue", "Yellow", "Green", "Purple", "Orange"],
        datasets: [{
            label: '# of Votes',
            data: [12, 19, 3, 5, 2, 3],
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)'
            ],
            borderColor: [
                'rgba(255,99,132,1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero:true
                }
            }]
        }
    }
});
</script>
@yield('footer')
</html>