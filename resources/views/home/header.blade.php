<header style="position: fixed;top: 0;left: 0;" class="fixed top-0 left-0 w-full bg-blue-600 z-50 py-3">
    <div class="flex grid-cols-2 gap-4 text-white">
        <!-- logo + atalhos -->
        <div class="w-1/2 flex grid-cols-5 justify-center align-middle gap-5">
            <img class="flex" src="{{ asset('images/logo.png') }}" alt="logo the web site" width="140">
            <ul class="hidden md:flex gap-4 justify-items-center align-baseline py-2">
                <li><a class="@if ($content=='home') text-amber-400 @endif font-bold hover:text-yellow-300" href="{{ route('home') }}">Home</a></li>
                <li><a class="@if ($content=='newsletter') text-amber-400 @endif font-bold hover:text-yellow-300" href="#formNewsletter" onclick="scrollToId('formNewsletter'); return false;">Newsletter</a></li>
                <li><a class="@if ($content=='about') text-amber-400 @endif font-bold hover:text-yellow-300" href="#" onclick="scrollToId('#'); return false;">About</a></li>
                <li><a class="@if ($content=='contact') text-amber-400 @endif font-bold hover:text-yellow-300" href="#formNewContact" onclick="scrollToId('formNewContact'); return false;">Contact</a></li>
                <li><a class="@if ($content=='blog') text-amber-400 @endif font-bold hover:text-yellow-300" href="#social" onclick="scrollToId('#social'); return false;">Social</a></li>
            </ul>
        </div>

        <!-- botões -->
        <div class="w-1/2 flex grid-cols-2 gap-3 justify-center align-middle z-50">
            <a href="#" class="inline-block text-white py-2 px-4 hover:text-yellow-300 hover:font-bold">
                Login
            </a>
            <a href="#" class="border-2 rounded-2xl border-white py-2 px-4 hover:border-amber-400 hover:bg-amber-400 ">
                Register here
            </a>
        </div>
    </div>
</header>










