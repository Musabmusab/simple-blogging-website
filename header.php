<nav class="bg-red-600 w-full p-4 mb-9">
    <div class="container mx-auto flex justify-between items-center">
        <div class="text-lg font-bold">
           VERY SIMPLE BLOGGING WEBSITE
        </div>
        <div class="block lg:hidden">
            <button id="menu-button" class="text-white focus:outline-none">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
                </svg>
            </button>
        </div>
        <ul id="menu" class="hidden lg:flex space-x-4">
            <li><a href="index.php" class="block p-2">HOME</a></li>
            <li><a href="add.php" class="block p-2">ADD POST</a></li>
            <!-- <li><a href="user.php" class="block p-2">USER</a></li> -->
        </ul>
    </div>
    <div id="mobile-menu" class="lg:hidden hidden">
        <ul class="flex flex-col space-y-2">
             <li><a href="index" class="block p-2">HOME</a></li>
            <li><a href="add.php" class="block p-2">ADD POST</a></li>
            <li><a href="user.php" class="block p-2">USER</a></li>
        </ul>
    </div>
</nav>
<script>
    const menuButton = document.getElementById('menu-button');
    const menu = document.getElementById('menu');
    const mobileMenu = document.getElementById('mobile-menu');

    menuButton.addEventListener('click', () => {
        mobileMenu.classList.toggle('hidden');
    });
</script>