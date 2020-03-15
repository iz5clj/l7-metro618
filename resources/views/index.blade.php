<!DOCTYPE html>
<html lang="en">

	<!-- begin::Head -->
	@include('partials.head')
	<!-- end::Head -->

	<!-- begin::Body -->
	<body class="kt-quick-panel--right kt-demo-panel--right kt-offcanvas-panel--right kt-header--fixed kt-header-mobile--fixed kt-subheader--enabled kt-subheader--fixed kt-subheader--solid kt-aside--enabled kt-aside--fixed kt-page--loading">

		<!-- begin:: Page -->

		<!-- begin:: Header Mobile -->
		@include('partials.headerMobile')
		<!-- end:: Header Mobile -->

		<div class="kt-grid kt-grid--hor kt-grid--root">
			<div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--ver kt-page">

				<!-- begin:: Aside -->
				@include('partials.aside')
				<!-- end:: Aside -->

				<div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor kt-wrapper" id="kt_wrapper">

					<!-- begin:: Header -->
					<div id="kt_header" class="kt-header kt-grid__item  kt-header--fixed ">

						<!-- begin:: Header Menu -->
						@include('partials.headerMenu')
						<!-- end:: Header Menu -->

						<!-- begin:: Header Topbar -->
						@include('partials.headerTopBar')
						<!-- end:: Header Topbar -->
						
					</div>
					<!-- end:: Header -->

					<div class="kt-content  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" id="kt_content">

						<!-- begin:: Content Head -->
						@include('partials.contentHead')
						<!-- end:: Content Head -->

						<!-- begin:: Content -->
						<div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">

							<!--Begin::Dashboard 1-->
							@include('partials.dashboard')
							<!--End::Dashboard 1-->

						</div>
						<!-- end:: Content -->

					</div>

					<!-- begin:: Footer -->
					@include('partials.footer')
					<!-- end:: Footer -->

				</div>
			</div>
		</div>

		<!-- end:: Page -->

		<!-- begin::Quick Panel -->
		@include('partials.quickPanel')
		<!-- end::Quick Panel -->

		<!-- begin::Scrolltop -->
		<div id="kt_scrolltop" class="kt-scrolltop">
			<i class="fa fa-arrow-up"></i>
		</div>
		<!-- end::Scrolltop -->

		<!-- begin::Sticky Toolbar -->
		@include('partials.stickyToolbar')
		<!-- end::Sticky Toolbar -->

		<!-- begin::Demo Panel -->
		@include('partials.demoPanel')
		<!-- end::Demo Panel -->

		<!--Begin:: Chat-->
		@include('partials.chat')
		<!--ENd:: Chat-->

		@include('partials.javascript')
        
	</body>
	<!-- end::Body -->
	
</html>