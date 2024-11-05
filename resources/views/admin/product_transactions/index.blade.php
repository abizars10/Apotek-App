<x-app-layout>
    <x-slot name="header">
        <div class="flex flex-row items-center justify-between w-full">
            <h2 class="text-xl font-semibold leading-tight text-gray-800">
                {{ Auth::user()->hasRole('owner') ? __('Apotek Orders') : __('My Transactions') }}
            </h2>

        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-5xl mx-auto sm:px-6 lg:px-8">
            <div class="flex flex-col p-10 overflow-hidden bg-white shadow-sm gap-y-5 sm:rounded-lg">
                <div class="flex flex-row items-center justify-between item-card">
                    <div class="flex flex-row items-center gap-x-3">
                        <div>
                            <h3 class="text-base text-slate-500">Total Transaction</h3>
                            <p class="text-xl font-bold text-indigo-950 ">Rp 10.000.000</p>
                        </div>
                    </div>
                    <div>
                        <p class="text-base text-slate-500">Date</p>
                        <h3 class="text-xl font-bold text-indigo-950">23 January 2025</h3>
                    </div>
                    <span class="px-3 py-1 bg-orange-500 rounded-full">
                        <p class="text-sm font-bold text-white">PENDING</p>
                    </span>
                    <div class="flex flex-row items-center gap-x-3">
                        <a href="#" class="px-5 py-3 font-bold text-white bg-indigo-700 rounded-full">View
                            Details</a>
                    </div>
                </div>
                <hr class="my-3">
            </div>
        </div>
    </div>
</x-app-layout>
