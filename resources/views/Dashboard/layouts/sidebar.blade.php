<!-- Tambahkan ini di bagian head HTML untuk memuat Tailwind CSS -->
<link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

<!-- Bagian body HTML -->
<nav id="sidebarMenu" class="col-md-3 col-lg-2 md:block bg-light">
    <div class="sticky top-3">
        <ul class="flex flex-col">
            <li class="nav-item">
                <a class="nav-link {{ request()->is('dashboard') ? 'active' : '' }}" aria-current="page" href="/dashboard">
                    <span data-feather="home"></span>
                    Dashboard
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ request()->is('dashboard/posts*') ? 'active' : '' }}" href="/dashboard/posts">
                    <span data-feather="file-text"></span>
                    My Posts
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
