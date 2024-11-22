@extends('layouts.templates.metronic.base')

@section('main')

	<!--begin::Body-->
	<body id="kt_body" class="auth-bg bgi-size-cover bgi-position-center bgi-no-repeat">
		<!--begin::Theme mode setup on page load-->
		<script>var defaultThemeMode = "light"; var themeMode; if ( document.documentElement ) { if ( document.documentElement.hasAttribute("data-bs-theme-mode")) { themeMode = document.documentElement.getAttribute("data-bs-theme-mode"); } else { if ( localStorage.getItem("data-bs-theme") !== null ) { themeMode = localStorage.getItem("data-bs-theme"); } else { themeMode = defaultThemeMode; } } if (themeMode === "system") { themeMode = window.matchMedia("(prefers-color-scheme: dark)").matches ? "dark" : "light"; } document.documentElement.setAttribute("data-bs-theme", themeMode); }</script>
		<!--end::Theme mode setup on page load-->
		<!--begin::Main-->
		<!--begin::Root-->
		<div class="d-flex flex-column flex-root">
			<!--begin::Page bg image-->
			<style>body { background-image: url('{{ asset(config('theme.assets.back-office').'/media/auth/bg9.jpg') }}'); background-repeat: repeat-y !important; } [data-bs-theme="dark"] body { background-image: url('{{ asset(config('theme.assets.back-office').'/media/auth/bg7-dark.jpg')  }}'); }</style>
			<!--end::Page bg image-->
			<!--begin::Authentication - Signup Welcome Message -->
			<div class="d-flex flex-column flex-center flex-column-fluid">
				<!--begin::Content-->
				<div class="d-flex flex-column flex-center text-center p-10">
					<!--begin::Wrapper-->
					<div class="card card-flush w-lg-600px pt-5">
						<div class="card-body py-15 py-lg-15">
							<!--begin::Title-->
							<h1 class="fw-bolder fs-2qx text-gray-900 mb-4">No Access</h1>
							<!--end::Title-->
							<!--begin::Text-->
							<div class="fw-semibold fs-6 text-gray-500 mb-7">It seems your account has no access on this site.<br>Please contact administrator</div>
							<!--end::Text-->
							<!--begin::Illustration-->
							<div class="mb-10 mt-5">
								<img src="{{ asset(config('theme.assets.back-office').'/media/illustrations/sigma-1/9-dark.png') }}" class="mw-200px" alt="" />
							</div>
							<!--end::Illustration-->
							<!--begin::Link-->
							<div class="mb-0">
								<form method="POST" action="{{ route('logout') }}">
		                            @csrf

		                            <a class="btn btn-md btn-light-dark px-10 py-4 fs-5 fw-bold" href="javascript:void(0);"
		                                    onclick="event.preventDefault();
		                                                this.closest('form').submit();">
		                                {{ __('Sign Out') }}
		                            </a>
		                        </form>
							</div>
							<!--end::Link-->
						</div>
					</div>
					<!--end::Wrapper-->
				</div>
				<!--end::Content-->
			</div>
			<!--end::Authentication - Signup Welcome Message-->
		</div>
		<!--end::Root-->
		<!--end::Main-->
		<!--begin::Javascript-->
		<script>var hostUrl = "assets/";</script>
		<!--begin::Global Javascript Bundle(mandatory for all pages)-->
		<script src="{{ asset(config('theme.assets.back-office').'/plugins/global/plugins.bundle.js') }}"></script>
		<script src="{{ asset(config('theme.assets.back-office').'/js/scripts.bundle.js') }}"></script>
		<!--end::Global Javascript Bundle-->
		<!--end::Javascript-->
	</body>
	<!--end::Body-->

@endsection