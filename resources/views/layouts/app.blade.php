<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kasir | @yield('title')</title>
    @vite('resources/css/app.css')
</head>

<body>
    <div class="flex h-dvh bg-gray-100">
        @include('layouts.components.newSideBar')
        <div class="w-screen p-4 xl:py-8">
            @include('layouts.components.navbar')
            <div>
                @yield('content')
            </div>
        </div>
    </div>
</body>
<script>
    document.addEventListener('DOMContentLoaded', function() {
    const sidebar = document.getElementById('sidebar');
    const overlay = document.getElementById('overlay');
    const toggleBtn = document.getElementById('sidebarToggle');

    // Toggle sidebar
    function toggleSidebar() {
        if (sidebar.classList.contains('-translate-x-full')) {
            // Open sidebar
            sidebar.classList.remove('-translate-x-full');
            overlay.classList.add('opacity-50');
            overlay.classList.remove('pointer-events-none');
        } else {
            // Close sidebar
            sidebar.classList.add('-translate-x-full');
            overlay.classList.remove('opacity-50');
            overlay.classList.add('pointer-events-none');
        }
    }

    // Event listeners
    toggleBtn.addEventListener('click', toggleSidebar);
    overlay.addEventListener('click', toggleSidebar);
});
</script>
</html>
