<!DOCTYPE html>
<html>
<head>
	<title>Cargando..</title>
	@include('shared.css')
	<link rel="icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">
	@include('shared.jsDir')
</head>
<body class="page-body login-page">
	<div id="app" style="height: 100%;">
		<div v-if="logged" style="height: 100%;" class="page-fade">
			<div class="page-container">
				<admin-menu ref="menu"></admin-menu>
				<div class="main-content">
					<vue-topprogress ref="loadingBar" color="blue" :height="4"></vue-topprogress>
					<admin-header ref="header"></admin-header>
					<hr>
					<messages ref="messages" :vclass="alert.class" :msg="alert.msg"></messages>
					<router-view ref="view"></router-view>

					<admin-footer ref="footer"></admin-footer>
				</div>
			</div>
		</div>
		<div v-else>
			<login></login>
		</div>
	</div>
	<script type="text/javascript" src="public/js/admin.js"></script>
	@include('shared.js')
</body>
</html>
