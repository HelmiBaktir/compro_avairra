<!DOCTYPE html>
<html lang="en">

<head>
	<title>
		@hasSection ('title')
		@yield('title') - 
		@endif
        Content Management
	</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="shortcut icon" href="{{ asset('assets/icon/logo.png') }}" />
	<link href="{{ asset('jeremia-assets/plugins/global/plugins.bundle.css') }}" rel="stylesheet" type="text/css" />
	<link href="{{ asset('jeremia-assets/css/style.bundle.css') }}" rel="stylesheet" type="text/css" />
	<link href="{{ asset('jeremia-assets/plugins/custom/datatables/datatables.bundle.css')}}" rel="stylesheet" type="text/css" />

	@yield('styles')
</head>

<body id="kt_app_body" data-kt-app-layout="dark-sidebar" data-kt-app-header-fixed="true" data-kt-app-sidebar-enabled="true" data-kt-app-sidebar-fixed="true" data-kt-app-sidebar-hoverable="true" data-kt-app-sidebar-push-header="true" data-kt-app-sidebar-push-toolbar="true" data-kt-app-sidebar-push-footer="true" data-kt-app-toolbar-enabled="true" class="app-default">
	<div class="d-flex flex-column flex-root app-root" id="kt_app_root">
		<div class="app-page flex-column flex-column-fluid" id="kt_app_page">
			@include('admin.components.header')
			<div class="app-wrapper flex-column flex-row-fluid" id="kt_app_wrapper">
				@include('admin.components.sidebar')
				<div class="app-main flex-column flex-row-fluid" id="kt_app_main">
					<div class="d-flex flex-column flex-column-fluid">
						@yield('toolbar')
						<div id="kt_app_content" class="app-content flex-column-fluid">
							<div id="kt_app_content_container" class="app-container container-fluid">
								@yield('content')
							</div>
						</div>
					</div>
					@include('admin.components.footer')
				</div>
			</div>
		</div>
	</div>
	<div id="kt_scrolltop" class="scrolltop" data-kt-scrolltop="true">
		<i class="ki-duotone ki-arrow-up">
			<span class="path1"></span>
			<span class="path2"></span>
		</i>
	</div>

	<script src="{{ asset('jeremia-assets/plugins/global/plugins.bundle.js') }}"></script>
	<script src="{{ asset('jeremia-assets/js/scripts.bundle.js') }}"></script>
	<script src="{{ asset('jeremia-assets/plugins/custom/datatables/datatables.bundle.js')}}"></script>
	<script src="{{ asset('jeremia-assets/plugins/custom/datatables/datatables.bundle.js')}}"></script>
	<script src="{{ asset('jeremia-assets/plugins/custom/tinymce/tinymce.bundle.js') }}"></script>
	<script src="{{ asset('jeremia-assets/plugins/custom/formrepeater/formrepeater.bundle.js') }}"></script>
	@stack('scripts')
	@yield('scripts')
</body>

</html>
