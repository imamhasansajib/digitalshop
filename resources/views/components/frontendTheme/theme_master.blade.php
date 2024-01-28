<!DOCTYPE html>
<html lang="en">

<x-frontendTheme.home.head/>

<body class="home-page home-01 ">

	<!-- mobile menu -->
    <div class="mercado-clone-wrap">
        <div class="mercado-panels-actions-wrap">
            <a class="mercado-close-btn mercado-close-panels" href="#">x</a>
        </div>
        <div class="mercado-panels"></div>
    </div>

	<!--header-->
    <x-frontendTheme.home.header/>

	<main id="main">
		{{ $slot }}
	</main>

	<x-frontendTheme.home.footer/>

	<x-frontendTheme.home.script/>
</body>
</html>
