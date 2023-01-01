@include('backend.include.style-script')

	<body class="main-body app sidebar-mini">

		<!-- Loader -->
		<div id="global-loader">
			<img src="{{asset('backend')}}/assets/img/loader.svg" class="loader-img" alt="Loader">
		</div>
		<!-- /Loader -->

		<!-- Page -->
		<div class="page">

			<!-- main-sidebar -->
            @include('backend.include.main-sidebar')

			<!-- main-sidebar -->

			<!-- main-content -->
			<div class="main-content app-content">

				<!-- main-header -->
                @include('backend.include.top-header')

				<!-- /main-header -->

				<!-- container -->
                @yield('content')

				<!-- /Container -->
			</div>
			<!-- /main-content -->

            @include('backend.include.right-sidebar-modal')

	@include('backend.include.footer')
