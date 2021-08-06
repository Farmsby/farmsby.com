<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link
			href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css"
			rel="stylesheet"
		/>
		<link rel="stylesheet" href="./css/main.css" />
		<link rel="stylesheet" href="./css/custom.css" />
		<title>Farmsby</title>
	</head>

	<body class="relative">
		<nav
			class="navbar-fixed-top fixed py-8 top-0 w-full z-50 flex justify-between items-center lg:px-20 px-8"
		>
			<div>
				<img src="./images/image 3.png" class="w-3/4" alt="" />
			</div>
			<div class="lg:inline hidden">
				<a href="https://app.farmsby.com/login">
					<button
						class="__button biotif tracking-wider text-white text-base px-12 py-3 rounded-md cursor-pointer focus:outline-none effect01"
					>
						Get Started
					</button>
				</a>
			</div>
		</nav>
		<div class="lg:pt-48 pt-40 text-center lg:px-0 px-4">
			<h5 class="__about lg:mx-auto lg:w-3/4 w-full biotif-semibold">
				Farmsby affords you the opportunity to grow you and your loved ones' finances, 
				by helping you invest in one of the most important and lucrative sectors of the 
				economy -- Agriculture.
			</h5>
			<p class="mx-auto lg:w-1/2 w-3/4 text-lg biotif text-black tracking-wide">
				We have the vision to build capacity in small farmers by helping them
				expand and adopt mechanized farming for increased production. Our crops
				are fully insured to minimise the risk of losses. At Farmsby, our
				guarantee is as strong as the land we farm on
			</p>
		</div>
		<div class="lg:flex hidden items-start justify-between mt-16 px-10">
			<div class="w-1/3">
				<img src="./images/farmsby.svg" class="__width w-full mx-auto" alt="" />
			</div>
			<div class="w-2/3 flex-grow">
				<div class="flex flex-col relative">
					<div class="flex space-x-4 items-center mx-auto relative z-50">
						<div>
							<a href="https://farmsby.com/">
								<button
									class="cursor-pointer border effect02 text-base font-semibold tracking-wider py-4 px-12 focus:outline-none rounded-md biotif"
								>
									View Our Website
								</button>
							</a>
						</div>
						<div>
							<a href="https://app.farmsby.com/login">
								<button
									class="cursor-pointer effect01 text-base font-semibold py-4 px-12 tracking-wider focus:outline-none rounded-md biotif"
								>
									Get Started
								</button>
							</a>
						</div>
					</div>
					<div class="absolute z-50 __max left-0 right-0">
						<div class="flex space-x-8 justify-center items-center">
							<a
								href="https://www.facebook.com/FarmsbyHQ"
								class="cursor-pointer"
							>
								<img src="./images/Vector.svg" alt="" />
							</a>
							<a href="http://instagram.com/farmsbyhq" class="cursor-pointer">
								<img src="./images/Vector (1).svg" alt="" />
							</a>
							<a href="http://twitter.com/FarmsbyHQ" class="cursor-pointer">
								<img src="./images/Vector (2).svg" alt="" />
							</a>
						</div>
					</div>
				</div>
			</div>
			<div class="w-1/3">
				<img src="./images/farmsbyy.svg" class="max-w-md w-full mx-auto" alt="" />
			</div>
		</div>
		<div class="mt-8 py-8 flex flex-col items-center lg:hidden block __small">
			<div class="relative z-50">
				<a href="https://app.farmsby.com/login">
					<button
						class="effect01 text-base font-semibold py-4 px-12 tracking-wider focus:outline-none rounded-md biotif"
					>
						Get Started
					</button>
				</a>
			</div>
			<div class="mt-16">
				<img src="./images/farmsby.svg" class="__width w-full mx-auto" alt="" />
			</div>
			<div class="my-12">
				<div class="flex space-x-8 justify-center items-center relative z-50">
					<a href="https://www.facebook.com/FarmsbyHQ" class="cursor-pointer">
						<img src="./images/Vector.svg" alt="" />
					</a>
					<a href="http://instagram.com/farmsbyhq" class="cursor-pointer">
						<img src="./images/Vector (1).svg" alt="" />
					</a>
					<a href="http://twitter.com/FarmsbyHQ" class="cursor-pointer">
						<img src="./images/Vector (2).svg" alt="" />
					</a>
				</div>
			</div>
		</div>

		<div class="bg_heart"></div>
		<div class="absolute top-8 right-0 lg:inline hidden">
			<img src="./images/swirl.svg" alt="" />
		</div>
	</body>
	<script
		src="https://code.jquery.com/jquery-3.5.1.min.js"
		integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
		crossorigin="anonymous"
	></script>
	<script>
		$(function () {
			$(document).scroll(function () {
				var $nav = $(".navbar-fixed-top");
				$nav.toggleClass("scrolled", $(this).scrollTop() > $nav.height());
			});
		});
		var love = setInterval(function () {
			var r_num = Math.floor(Math.random() * 40) + 1;
			var r_size = Math.floor(Math.random() * 65) + 10;
			var r_left = Math.floor(Math.random() * 100) + 1;
			var r_bg = Math.floor(Math.random() * 25) + 100;
			var r_time = Math.floor(Math.random() * 5) + 5;

			$(".bg_heart").append(
				"<div class='heart' style='width:" +
					r_size +
					"px;height:" +
					r_size +
					"px;left:" +
					r_left +
					"%;background:rgba(255," +
					(r_bg - 25) +
					"," +
					r_bg +
					",1);-webkit-animation:love " +
					r_time +
					"s ease;-moz-animation:love " +
					r_time +
					"s ease;-ms-animation:love " +
					r_time +
					"s ease;animation:love " +
					r_time +
					"s ease'></div>"
			);

			$(".bg_heart").append(
				"<div class='heart' style='width:" +
					(r_size - 10) +
					"px;height:" +
					(r_size - 10) +
					"px;left:" +
					(r_left + r_num) +
					"%;background:rgba(255," +
					(r_bg - 25) +
					"," +
					(r_bg + 25) +
					",1);-webkit-animation:love " +
					(r_time + 5) +
					"s ease;-moz-animation:love " +
					(r_time + 5) +
					"s ease;-ms-animation:love " +
					(r_time + 5) +
					"s ease;animation:love " +
					(r_time + 5) +
					"s ease'></div>"
			);

			$(".heart").each(function () {
				var top = $(this)
					.css("top")
					.replace(/[^-\d\.]/g, "");
				var width = $(this)
					.css("width")
					.replace(/[^-\d\.]/g, "");
				if (top <= -100 || width >= 150) {
					$(this).detach();
				}
			});
		}, 500);
	</script>
</html>
