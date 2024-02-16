

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Legenda Plastik -  Dashboard | @yield('dashboard-title')</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

@vite('resources/css/app.css')


<body class="bg-gray-200">
    <!-- Sidebar -->
    <aside id="sidebar" class="bg-gray-800 text-white w-64 h-full fixed top-0 left-0 overflow-y-auto">
        <!-- Sidebar content -->
        <div class="p-4">
            <h1 class="text-lg text-center font-bold mb-4">Welcome, {{ auth()->user()->username }}</h1>
            <ul class="space-y-2">
                <li>
                    <a href="{{ route('products.index') }}" class="block hover:bg-gray-700 py-2 px-4 rounded transition duration-300">Products</a>
                </li>
                <li>
                    <a href="{{ route('units.index') }}" class="block hover:bg-gray-700 py-2 px-4 rounded transition duration-300">Unit</a>
                </li>
                <li>
                    <a href="{{ route('stockin.index') }}" class="block hover:bg-gray-700 py-2 px-4 rounded transition duration-300">Stock In</a>
                </li>
               
                <li>
                    <a href="{{ route('suppliers.index') }}" class="block hover:bg-gray-700 py-2 px-4 rounded transition duration-300">Suppliers</a>
                </li>
                <li>
                    <a href="{{ route('customers.index') }}" class="block hover:bg-gray-700 py-2 px-4 rounded transition duration-300">Customers</a>
                </li>

                @auth
                <li>
                    <a href="{{ route('logout') }}" class="block hover:bg-gray-700 py-2 px-4 rounded transition duration-300 text-red-500 font-bold"> Log out</a>
                </li>
                @endauth
            </ul>
        </div>
    </aside>

    <!-- Main content -->
    <main id="main-content" class="ml-64 p-4">
        <!-- Button to toggle sidebar -->
        <button id="toggleSidebarBtn" class="fixed top-4 right-4 bg-gray-800 text-white px-4 py-2 rounded focus:outline-none">^</button>
        
        <!-- Content -->
        <div>
            @yield('dashboard-content')
        </div>
    </main>

    <script>
        const toggleSidebarBtn = document.getElementById('toggleSidebarBtn');
        const sidebar = document.getElementById('sidebar');
        const mainContent = document.getElementById('main-content');

        toggleSidebarBtn.addEventListener('click', () => {
            sidebar.classList.toggle('hidden');
            if (sidebar.classList.contains('hidden')) {
                mainContent.classList.remove('ml-64');
            } else {
                mainContent.classList.add('ml-64');
            }
        });
    </script>
</body>

</html>
