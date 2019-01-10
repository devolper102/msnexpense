<!DOCTYPE html>
<html lang="en">
<!-- BEGIN HEAD -->
@include('layout.section-head')
<!-- END HEAD -->

<!-- BEGIN BODY -->
<body class="m-page--fluid m--skin- m-content--skin-light2 m-header--fixed m-header--fixed-mobile m-aside-left--enabled m-aside-left--skin-dark m-aside-left--offcanvas m-footer--push m-aside--offcanvas-default" >
	<div class="m-grid m-grid--hor m-grid--root m-page">
		@include('layout.section-top-navigation')
		<div class="m-grid__item m-grid__item--fluid m-grid m-grid--ver-desktop m-grid--desktop m-body">
			@include('layout.section-left-navigation')
			<div class="m-grid__item m-grid__item--fluid m-wrapper" id="app">
				@yield('page-content')
			</div>
		</div>		
		@include('layout.section-footer')
	</div>
	<!-- begin::Scroll Top -->
	<div id="m_scroll_top" class="m-scroll-top">
		<i class="la la-arrow-up"></i>
	</div>
	<!-- end::Scroll Top -->
	<script src="/js/app.js" type="text/javascript"></script>
	<script src="{{asset('theme/vendors.bundle.js')}}" type="text/javascript"></script>
	<script src="{{asset('theme/scripts.bundle.js')}}" type="text/javascript"></script>
	@yield('page-script')
</body>
<!-- END BODY -->
</html>