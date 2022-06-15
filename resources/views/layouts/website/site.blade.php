<!DOCTYPE html>
<html lang="en">
<head>
@include('layouts.website.head')

</head>
<body class="home-page home-01 ">

	<!-- mobile menu -->
    <div class="mercado-clone-wrap">
        <div class="mercado-panels-actions-wrap">
            <a class="mercado-close-btn mercado-close-panels" href="#">x</a>
        </div>
        <div class="mercado-panels"></div>
    </div>

	<!--header-->
    @include('layouts.website.header')
    <!--header End-->

   	<!--main-->
	   {{ $slot }}
    <!--main End-->

	<!--footer-->
     @livewire('footer-component')
    <!--footer End-->


   <!--script -->
    @include('layouts.website.script')


   <!--script End-->
</body>
</html>

