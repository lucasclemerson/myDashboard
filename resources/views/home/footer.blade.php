<footer id="social" class="w-full justify-items-center text-white bg-blue-600 py-5">
    <div class="w-11/12 grid grid-cols-3 align-middle justify-between">            
        <div class="grid">
            <div class="w-full">
                <h1><strong class="font-bold">MyDashboard</strong></h1>
                <h3 class="py-4">Makes it easy to take control of your finances with clarity and smart design. 
                    Our intuitive platform blends performance and simplicity to deliver a complete financial management 
                    experience — accessible anytime, anywhere. With clear visuals, automated insights, and advanced customization,
                    your money stays in your hands, with confidence.
                </h3>
                <img class="mt-5" src="{{ asset('images/logo.png') }}" alt="logo the web site" width="150">
            </div>
        </div>

        <div class="grid grid-cols-1 items-stretch">
            <h1 class="text-center w-full"><strong class="font-bold">Follow us on social media</strong></h1>
            <div class="grid grid-cols-1 justify-center items-start py-4">
                <ul class="grid w-3/5 mx-auto mb-auto gap-2">
                    <li class="transform transition-transform duration-300 hover:scale-105 shadow-2xl border border-blue-800 px-3 py-2 rounded-2xl bg-blue-800">
                        <a class="gap-3 flex" href="https://www.facebook.com/lucasclemerson"><i class="bi bi-facebook text-3xl"></i><span class="my-auto">Facebook</span></a>
                    </li>
                    <li class="transform transition-transform duration-300 hover:scale-105 shadow-2xl border border-[#0D1117] px-3 py-2 rounded-2xl bg-[#0D1117]">
                        <a target="_blank" class="gap-3 flex" href="https://github.com/lucasclemerson"><i class="bi bi-github text-3xl"></i><span class="my-auto">Github</span></a>
                    </li>
                    <li class="transform transition-transform duration-300 hover:scale-105 shadow-2xl border border-[#ce3f35] px-3 py-2 rounded-2xl bg-[#ce3f35]">
                        <a target="_blank" class="gap-3 flex" href="mailto:clemerson.lucas.oliveira@gmail.com"><i class="bi bi-envelope-at text-3xl"></i><span class="my-auto">Gmail</span></a>
                    </li>
                </ul>
            </div>


            <p class="text-sm text-center mt-auto">All rights reserved &copy; {{ date('Y') }}</p>
        </div>

        <div class="flex justify-end gap-5 mt-auto">
            <p class="text-sm text-center"><a class="underline hover:text-amber-300" href="#">Privacy</a></p>
            <p class="text-sm text-center"><a class="underline hover:text-amber-300" href="#">Terms of service</a></p>
        </div>
    </div>
</footer>