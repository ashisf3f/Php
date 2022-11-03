<body>

	<nav class="relative px-4 py-4 flex justify-between items-center  dark:bg-gray-800 bg-white">
		<a class="text-3xl font-bold font-serif text-white leading-none" href="welcome.php">
			<span class="flex flex-row">
				<div class="rotate-[7deg]">A</div>
				<div class="rotate-[-23deg] text-red-600">S</div>
				<div class="">K</div>
			</span>
		</a>
		<div class="lg:hidden">
			<button class="navbar-burger flex items-center text-blue-600 p-3">
				<svg class="block h-4 w-4 fill-current" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
					<title>Mobile menu</title>
					<path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"></path>
				</svg>
			</button>
		</div>
		<ul class="hidden absolute top-1/2 left-1/2 font-bold transform -translate-y-1/2 -translate-x-1/2 lg:flex lg:mx-auto lg:flex lg:items-center lg:w-auto lg:space-x-6">
			<li><a class="text-sm text-gray-400 hover:text-gray-500" href="#home">Home</a></li>
			<li class="text-gray-300">
				<svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" class="w-4 h-4 current-fill" viewBox="0 0 24 24">
					<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 5v0m0 7v0m0 7v0m0-13a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z" />
				</svg>
			</li>
			<li><a class="text-sm text-gray-400 hover:text-gray-500 font-bold" href="#gallery">Gallery</a></li>
			<li class="text-gray-300">
				<svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" class="w-4 h-4 current-fill" viewBox="0 0 24 24">
					<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 5v0m0 7v0m0 7v0m0-13a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z" />
				</svg>
			</li>
			<li><a class="text-sm text-gray-400 hover:text-gray-500" href="#blogs">Blogs</a></li>
			<li class="text-gray-300">
				<svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" class="w-4 h-4 current-fill" viewBox="0 0 24 24">
					<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 5v0m0 7v0m0 7v0m0-13a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z" />
				</svg>
			</li>
			<li><a class="text-sm text-gray-400 hover:text-gray-500" href="#about-us">About us</a></li>
			<li class="text-gray-300">
				<svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" class="w-4 h-4 current-fill" viewBox="0 0 24 24">
					<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 5v0m0 7v0m0 7v0m0-13a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z" />
				</svg>
			</li>
			<li><a class="text-sm text-gray-400 hover:text-gray-500" href="#contact-us">Contact</a></li>
		</ul>
		<!-- <a class="hidden lg:inline-block lg:ml-auto lg:mr-3 py-2 px-6 bg-gray-50 hover:bg-gray-100 text-sm text-gray-900 font-bold  rounded-xl transition duration-200" href="#">Sign In</a> -->
		<span id="logout" class="hidden lg:inline-block cursor-pointer py-2 px-6 bg-blue-500 hover:bg-blue-600 text-sm text-white font-bold rounded-xl transition duration-200">Log Out</span>
	</nav>
	<div class="navbar-menu relative z-50 hidden">
		<div class="navbar-backdrop fixed inset-0 bg-gray-800 opacity-25"></div>
		<nav class="fixed top-0  dark:bg-gray-800 left-0 bottom-0 flex flex-col w-5/6 max-w-sm py-6 px-6 bg-white  overflow-y-auto">
			<div class="flex items-center mb-8">
				<a class="mr-auto text-3xl text-white font-bold font-serif leading-none" href="welcome.php">
					<span class="flex flex-row">
						<div class="rotate-[7deg]">A</div>
						<div class="rotate-[-23deg] text-red-600">S</div>
						<div class="">K</div>
					</span>
				</a>
				<button class="navbar-close">
					<svg class="h-6 w-6 text-gray-400 cursor-pointer hover:text-gray-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
						<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
					</svg>
				</button>
			</div>
			<hr class="w-full ">
			<div>
				<ul>
					<li class="mb-1">
						<a class="block p-4 mt-1 text-sm font-semibold text-gray-400 hover:bg-blue-50 hover:text-blue-600 rounded-md" href="#">Home</a>
					</li>
					<hr>
					<li class="mb-1">
						<a class="block p-4  mt-1  text-sm font-semibold text-gray-400 hover:bg-blue-50 hover:text-blue-600 rounded" href="#gallery">Gallery</a>
					</li>
					<hr>
					<li class="mb-1">
						<a class="block p-4  mt-1 text-sm font-semibold text-gray-400 hover:bg-blue-50 hover:text-blue-600 rounded" href="#blogs">Blogs</a>
					</li>
					<hr>
					<li class="mb-1">
						<a class="block p-4 mt-1  text-sm font-semibold text-gray-400 hover:bg-blue-50 hover:text-blue-600 rounded" href="#about-us">About Us</a>
					</li>
					<hr>
					<li class="mb-1">
						<a class="block p-4 mt-1  text-sm font-semibold text-gray-400 hover:bg-blue-50 hover:text-blue-600 rounded" href="#contact-us">Contact</a>
					</li>
					<hr>
					
					
				</ul>
				<div class="mt-16">

					<span id="logout1" class="block px-4 py-3 mb-2 cursor-pointer text-xs text-center text-white font-semibold bg-blue-600 hover:bg-blue-700  rounded-xl" >Log Out</span>
				
					
				</div>
				<p class="my-4 text-xs text-center text-gray-400">
					<span>Copyright © 2022</span>
				</p>
			</div>

	</div>
	</nav>
	</div>

<script>
let onme =document.getElementById("logout");
let onm1 = document.getElementById("logout1");
onm1.onclick = openLog1;
function openLog1() {
    window.open("actions/logout.php", "_self"); 
}
onme.onclick = openLog;
function openLog(){
window.open("actions/logout.php", "_self")
}
</script>
	<script src="js/navbar.js"></script>