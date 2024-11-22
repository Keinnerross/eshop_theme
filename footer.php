</div><!-- .col-full -->
</div><!-- #content -->



</div><!-- #page -->



<?php wp_footer(); ?>
<div class="">
	<footer class="bg-gray-100 py-8 flex flex-col items-center justify-center">
		<div class="md:w-[80vw]  container mx-auto px-4">

			<div class="grid grid-cols-1 sm:grid-cols-3 lg:grid-cols-4 gap-8 mb-8 text-gray-600">

				<div class='flex justify-center md:block'>
					<h3 class="hidden md:block font-semibold text-gray-800 pb-2 text-xl">Who we are?</h3>
					<p class='text-sm   pb-4 hidden md:block'>Our mission is to enhance security and efficiency of vehicle fleets and mobile assets for businesses and individuals. <a target="_blank" href="https://www.csair.org/"><span class="cursor-pointer text-primary">More Info...</span></a></p>
					<div class="w-[200px] py-2">
						<?php
						if (function_exists('the_custom_logo')) {
							echo '<a href="' . esc_url(home_url('/')) . '">';
							the_custom_logo();
							echo '</a>';
						} else {
							echo '<a href="' . esc_url(home_url('/')) . '"><p>Logotype here</p></a>';
						}
						?>
					</div>
				</div>
				<div class='hidden md:flex flex-col pl-[30%] '>
					<h3 class="font-semibold text-gray-800 text-xl">Menu</h3>
					<p class='text-sm font-medium  pt-2'>
						<a href="/"><li class="text-sm">Home</li></a>
						<a href="/shop"> <li class="text-sm">Shop</li></a>
						<a href="/my-account"><li class="text-sm">My Account</li></a>
						<a href="#"><li class="text-sm">Resoucers</li></a>
						<a href="/"><li class="text-sm">About us</li></a>
						</ul>
				</div>
				<div class='hidden md:block'>
					<h3 class="font-semibold text-gray-800 text-xl">Resources</h3>
					<ul class="text-smtext-gray-600 pt-2">
						<a href='#'>
							<li class="text-sm">FAQ</li>
						</a>
						<a href='#'>
							<li class="text-sm">Terms and conditions</li>
						</a>
					</ul>
				</div>
				<div class='md:block flex justify-center flex-col items-center'>
					<h3 class="font-semibold text-gray-800 text-xl">Contact</h3>
					<ul class="text-sm  text-gray-600 flex flex-col items-center md:items-start gap-2 pt-2">
						<a href='#' class='flex gap-2 items-center'>
							<i class="fa fa-map-marker text-primary" aria-hidden="true"></i>
							<li class="text-sm"> 475 West 250th Street :: Bronx, NY 10471</li>
						</a>
						<a href='#' class='flex gap-2 items-center'>
							<i class="fa fa-envelope text-primary" aria-hidden="true"></i>
							<li class="text-sm">info@csair.org</li>
						</a>
						<a href='#' class='flex gap-2 items-center'>
							<i class="fa fa-phone text-primary" aria-hidden="true"></i>
							<li class="text-sm">718-543-8400 </li>
						</a>




					</ul>
				</div>
			</div>

			<div class="flex justify-center space-x-6 mb-4">
				<h3 class="text-gray-600 text-sm text-center">©2024 All rights reserved. Powered by <a class="font-medium" href="https://keinnerross.github.io/portfolioross/">KeinnerRoss</a> 
				</h3>
			</div>
		</div>
	</footer>
</div>


</body>

</html>