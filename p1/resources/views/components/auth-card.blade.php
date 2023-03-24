<div class="w-full sm:max-w-md mt-6 px-6 py-4 shadow-md overflow-hidden sm:rounded-t-lg bg-indigo-800/75">
    <div class="text-white text-center p-4">
        <h5 class="text-white text-lg">{{$welcome}}</h5>
        <p class="text-gray-300 text-sm">{{$title}}</p>
        <a href="index.html" class="absolute w-20 h-20 bg-white rounded-full border-b-2 border-teal-600 left-0 right-0 m-0 m-auto">
            <img src="assets/images/logo-sm.png" height="24" alt="logo" class="mt-6 ml-6 w-8">
        </a>
    </div>
</div>

<div class="w-full sm:max-w-md px-6 pb-4 pt-11 bg-white shadow-md overflow-hidden sm:rounded-b-lg">
    {{ $slot }}
</div>
<div class="mt-5 text-center my-8">
    <p class="text-gray-500">{{$registerlogin}} </p>
    <p class="mb-0 text-gray-500">© <script>document.write(new Date().getFullYear())</script> Veltrix. Crafted with <i class="mdi mdi-heart text-danger"></i> by Themesbrand</p>
</div>