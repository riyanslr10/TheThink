<!-- Tambahkan ini di bagian head HTML untuk memuat Tailwind CSS -->
<link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

<!-- Bagian body HTML -->
<nav id="sidebarMenu" class="col-md-3 col-lg-2 md:block bg-stone-400">
    <div class="sticky top-3">
        <ul class="flex flex-col">
            <li class="nav-item">
                <a href="/dashboard" class="nav-link {{ request()->is('dashboard') ? 'active' : '' }} block py-2 px-3 text-blue-200 bg-blue-900 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 mt-5" aria-current="page">
                    Dashboard
                </a>
            </li>
            <li class="nav-item">
                <a href=".dashboard/profile" class="nav-link {{ request()->is('dashboard/profile*') ? 'active' : '' }} block py-2 px-3 text-blue-200 bg-blue-900 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 mt-2">
                    Profile
                </a>
            </li>
            <li class="nav-item">
                <a href="/dashboard/posts" class="nav-link {{ request()->is('dashboard/posts*') ? 'active' : '' }} block py-2 px-3 text-blue-200 bg-blue-900 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 mt-2">
                    Book
                </a>
            </li>
        </ul>

        {{-- admin --}}
        @can('admin')
        <h6 class="sidebar-heading flex justify-between items-center px-3 mt-4 mb-1 text-muted">
            <span>Administrator</span>
        </h6>
        <ul class="flex flex-col">
            <li class="nav-item">
                <a class="nav-link {{ request()->is('dashboard/categories*') ? 'active' : '' }}" href="/dashboard/categories">
                    <span data-feather="grid"></span>
                    Categories
                </a>
            </li>
        </ul>
        @endcan
    </div>
</nav>


<!-- Tambahkan ini di akhir file untuk memuat script Tailwind CSS -->
<script src="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.js"></script>
