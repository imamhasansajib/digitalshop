<!DOCTYPE html>
<html lang="en">

<x-backendTheme.partials.head/>

<body>
	<div class="wrapper">

		<x-backendTheme.partials.sidebar/>

		<div class="main">
			
			<x-backendTheme.partials.topbar/>

			<main class="content">
				{{ $slot }}
			</main>

			<x-backendTheme.partials.footer/>			
		</div>
	</div>

	<x-backendTheme.partials.script/>

</body>

</html>