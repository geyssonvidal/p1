<x-app-layout>
    
    <div class="flex flex-row ">
        <div class="w-60 bg-slate-700 p-2">
            <div class="flex flex-col  p-2 m-2 h-screen">
                <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                    {{ __('dashboard') }}
                </x-nav-link>
                <x-nav-link :href="route('nosotros')" :active="request()->routeIs('nosotros')">
                    {{ __('nosotros') }}
                </x-nav-link>
                <x-nav-link :href="route('contactenos')" :active="request()->routeIs('contactenos')">
                    {{ __('contactenos') }}
                </x-nav-link>
                <div class="w-full" x-data="{open: false,get isShow() { return this.open },show() { this.open = ! this.open },}">
                    <div class="w-full flex  cursor-pointer text-sm text-gray-500 px-1 pt-1" @click="show()">                            
                        que hacemos?
                    </div>
                    <div class="flex flex-col w-full  " x-show="isShow">
            
                        <x-nav-link :href="route('asesoramiento')" :active="request()->routeIs('asesoramiento')">
                            {{ __('- asesoramiento') }}
                        </x-nav-link>
                        <x-nav-link :href="route('venta')" :active="request()->routeIs('venta')">
                            {{ __('- venta') }}
                        </x-nav-link>
                    </div>
                </div>
            </div>
        </div>
        <div class=" sm:px-6 lg:px-8 bg-white">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg h-screen">
                <div class=" text-gray-900 flex flex-row">
                    
                    
                    <div class="w-full">
                        @yield('contenido')
                    </div>
                </div>
            </div>
        </div>
    </div>

    
</x-app-layout>
