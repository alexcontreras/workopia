<header class="bg-blue-900 text-white p-4" x-data="{ open: false }">
    <div class="container mx-auto flex justify-between items-center">
        <h1 class="text-3xl font-semibold">
            <a href="{{ url('/') }}">Workopia</a>
        </h1>
        <nav class="hidden md:flex items-center space-x-4">
            <x-nav-link url="/" title="Homepage" :active="request()->is('/') ? 'text-yellow-500 font-bold' : ''">Home</x-nav-link>
            <x-nav-link url="/jobs" title="All Jobs" :active="request()->is('jobs') ? 'text-yellow-500 font-bold' : ''">All Jobs</x-nav-link>
            <x-nav-link url="/jobs/saved" title="Saved Jobs" :active="request()->is('jobs/saved') ? 'text-yellow-500 font-bold' : ''">Saved Jobs</x-nav-link>
            <x-nav-link url="/login" title="Login" :active="request()->is('login') ? 'text-yellow-500 font-bold' : ''">Login</x-nav-link>
            <x-nav-link url="/register" title="Register" :active="request()->is('register') ? 'text-yellow-500 font-bold' : ''">Register</x-nav-link>
            <x-nav-link url="/dashboard" title="Dashboard" :active="request()->is('dashboard') ? 'text-yellow-500 font-bold' : ''" icon="gauge">Dashboard</x-nav-link>
            <x-button-link url="/jobs/create" icon="edit">Create Job</x-button-link>
        </nav>
        <button @click="open = !open" id="hamburger" class="text-white md:hidden flex items-center">
            <i class="fa fa-bars text-2xl"></i>
        </button>
    </div>
    <!-- Mobile Menu -->
    <nav x-show="open" @click.away="open = false" id="mobile-menu"
        class="md:hidden bg-blue-900 text-white mt-5 pb-4 space-y-2">
        <x-nav-link url="/jobs" title="All Jobs" :active="request()->is('jobs') ? 'text-yellow-500 font-bold' : ''" :mobile="true">All Jobs</x-nav-link>
        <x-nav-link url="/jobs/saved" title="Saved Jobs" :active="request()->is('jobs/saved') ? 'text-yellow-500 font-bold' : ''" :mobile="true">Saved Jobs</x-nav-link>
        <x-nav-link url="/login" title="Login" :active="request()->is('login') ? 'text-yellow-500 font-bold' : ''" :mobile="true">Login</x-nav-link>
        <x-nav-link url="/register" title="Register" :active="request()->is('register') ? 'text-yellow-500 font-bold' : ''" :mobile="true">Register</x-nav-link>
        <x-nav-link url="/dashboard" title="Dashboard" :active="request()->is('dashboard') ? 'text-yellow-500 font-bold' : ''" icon="gauge"
            :mobile="true">Dashboard</x-nav-link>
        <x-button-link url="/jobs/create" icon="edit" :block="true">Create Job</x-button-link>
    </nav>
</header>
