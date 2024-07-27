<?php wp_footer(); ?>

<footer class="bg-gray-400 text-white px-12 py-16">
	<div class="container mx-auto px-4 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
		<div>
			<h3 class="text-xl font-semibold mb-4">About Us</h3>
			<p class="text-gray-600">
                We are a company dedicated to providing the best services to 
                our customers. Our mission is to deliver high-quality products 
                and exceptional customer service.
            </p>
		</div>
		<div>
			<h3 class="text-xl font-semibold mb-4">Services</h3>
			<ul>
				<li class="mb-2"><a href="#" class="hover:underline">Software Development</a></li>
				<li class="mb-2"><a href="#" class="hover:underline">Application Services</a></li>
				<li class="mb-2"><a href="#" class="hover:underline">UI/UX Design</a></li>
				<li class="mb-2"><a href="#" class="hover:underline">Content Writing</a></li>
			</ul>
		</div>
		<div>
			<h3 class="text-xl font-semibold mb-4">Company</h3>
			<ul>
				<li class="mb-2"><a href="#" class="hover:underline">About</a></li>
				<li class="mb-2"><a href="#" class="hover:underline">Contact</a></li>
				<li class="mb-2"><a href="#" class="hover:underline">Blogs</a></li>
			</ul>
		</div>
		<div>
			<h3 class="text-xl font-semibold mb-4">Connect</h3>
			<ul>
				<li class="mb-2 flex items-center text-gray-600"><i class="fas fa-phone mr-2"></i> Phone: (123) 456-7890</li>
				<li class="mb-2 flex items-center text-gray-600"><i class="fas fa-envelope mr-2"></i> Email: info@example.com</li>
				<li class="flex space-x-4">
					<a href="#"><i class="fab fa-facebook-f"></i></a>
					<a href="#"><i class="fab fa-twitter"></i></a>
					<a href="#"><i class="fab fa-linkedin-in"></i></a>
					<a href="#"><i class="fab fa-instagram"></i></a>
				</li>
			</ul>
		</div>
	</div>
</footer>

<script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/particles.js"></script>
</body>
</html>