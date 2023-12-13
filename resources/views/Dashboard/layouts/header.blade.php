<!-- Tambahkan script Alpine.js -->
<script src="https://cdn.jsdelivr.net/npm/alpinejs@2.8.2/dist/alpine.min.js" defer></script>

<!-- Bagian body HTML -->
<header x-data="{ isOpen: false }" class="navbar navbar-dark navbar-expand-lg sticky top-0 bg-dark flex-md-nowrap p-1 shadow">
    <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="/dashboard">TheThink</a>
    <button @click="isOpen = !isOpen" class="navbar-toggler position-absolute d-md-none collapsed" type="button" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div :class="{ 'block': isOpen, 'hidden': !isOpen }" class="w-full md:flex md:items-center md:justify-end">
        <input class="form-control form-control-dark w-50 md:w-auto" type="text" placeholder="Search" aria-label="Search">
        <ul class="navbar-nav ms-auto">
        @auth
        <li x-data="{ isOpen: false }" @click.away="isOpen = false" class="relative nav-item dropdown px-5">
            <a @click="isOpen = !isOpen" class="nav-link dropdown-toggle cursor-pointer" role="button" aria-haspopup="true" :aria-expanded="isOpen ? 'true' : 'false'">
                Welcome, {{ auth()->user()->name }}
            </a>
            <ul x-show="isOpen" @click.away="isOpen = false" class="absolute right-0 mt-2 w-48 bg-white border border-gray-200 rounded-md shadow-lg">
                <li><a class="block px-4 py-2 text-sm text-gray-700" href="/"><span data-feather="home"></span> Home</a></li>
                <li class="border-t border-gray-200"></li>
                <li>
                    <form action="/logout" method="post">
                        @csrf
                        <button type="submit" class="block px-4 py-2 text-sm text-gray-700 shadow-lg">
                            <span data-feather="log-out"></span> Logout
                        </button>
                    </form>
                </li>
            </ul>
        </li>
        @else
        <li class="nav-item">
            <a href="/login" class="nav-link"><i class="bi bi-box-arrow-in-right"></i> Login</a>
        </li>
        @endauth
    </ul>
</header>
