<!DOCTYPE html>
<html>
<head>
	<title>M347</title>
	<style>
		.friends-list-container {

		}
			.friends-list-container li {

			}
				.friends-list-container li div {
					display: inline-block;
				}
		.old-friends-list-container .marked-as-met,
			.old-friends-list-container .marked-as-met a {
			color: #555;
		}
			.marked-as-met button.mark-as-met {
				opacity: .4;
			}

		.new-friends-list-container button.mark-as-met {
			display: none;
		}

	</style>
</head>
<body>
<div class="container">
	<h1>m347</h1>
	<div class="nav">
		@if (Auth::check())
		<ul>
			<li>{{ HTML::linkAction('logout', 'Logout (' . Auth::user()->username . ')') }}</li>
		</ul>
		@endif
	</div>

	@if(Session::has('flash_notice'))
	<div class="flash_notice">{{ Session::get('flash_notice') }}</div>
	@endif

	@yield('content')

</div>

<script src="bower_components/jquery/dist/jquery.js"></script>
<script src="bower_components/component-knockout-passy/knockout.js"></script>
<script src="assets/js/app.js"></script>
</body>
</html>