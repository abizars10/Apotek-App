<x-app-layout>
    <x-slot name="header">
        <div class="flex flex-row items-center justify-between w-full">
            <h2 class="text-xl font-semibold leading-tight text-gray-800">
                {{ __('Details') }}
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
                </div>
                <hr class="my-3">
                <h3 class="text-xl font-bold text-indigo-950">List of Items</h3>
                <div class="grid grid-cols-4 gap-x-10">
                    <div class="flex flex-col col-span-2 gap-y-5">
                        <div class="flex flex-row items-center justify-between item-card">
                            <div class="flex flex-row items-center gap-x-3">
                                <img src="#" alt="" class="w-[50px] h-[50px]">
                                <div>
                                    <h3 class="text-2xl font-bold text-indigo-950">Panadol</h3>
                                    <p class="text-base text-slate-500">Rp 100.000</p>
                                </div>
                            </div>
                            <p class="text-base text-slate-500"> Vitamins</p>
                        </div>
                        <div class="flex flex-row items-center justify-between item-card">
                            <div class="flex flex-row items-center gap-x-3">
                                <img src="#" alt="" class="w-[50px] h-[50px]">
                                <div>
                                    <h3 class="text-2xl font-bold text-indigo-950">Panadol</h3>
                                    <p class="text-base text-slate-500">Rp 100.000</p>
                                </div>
                            </div>
                            <p class="text-base text-slate-500"> Vitamins</p>
                        </div>
                        <div class="flex flex-row items-center justify-between item-card">
                            <div class="flex flex-row items-center gap-x-3">
                                <img src="#" alt="" class="w-[50px] h-[50px]">
                                <div>
                                    <h3 class="text-2xl font-bold text-indigo-950">Panadol</h3>
                                    <p class="text-base text-slate-500">Rp 100.000</p>
                                </div>
                            </div>
                            <p class="text-base text-slate-500"> Vitamins</p>
                        </div>
                        <h3 class="text-xl font-bold text-indigo-950">Details of Delivery</h3>
                        <div class="flex flex-row items-center justify-between item-card">
                            <p class="text-base text-slate-500">Address</p>
                            <h3 class="text-xl font-bold text-indigo-950"> Orchad No 23</h3>
                        </div>
                        <div class="flex flex-row items-center justify-between item-card">
                            <p class="text-base text-slate-500">City</p>
                            <h3 class="text-xl font-bold text-indigo-950">Singapure</h3>
                        </div>
                        <div class="flex flex-row items-center justify-between item-card">
                            <p class="text-base text-slate-500">Post Coded</p>
                            <h3 class="text-xl font-bold text-indigo-950">12379</h3>
                        </div>
                        <div class="flex flex-row items-center justify-between item-card">
                            <p class="text-base text-slate-500">Phone Number</p>
                            <h3 class="text-xl font-bold text-indigo-950">0825237465</h3>
                        </div>
                        <div class="flex flex-col items-start item-card">
                            <p class="text-base text-slate-500">Notes</p>
                            <h3 class="text-lg font-bold text-indigo-950">Sebelah kafe local dekat dengan river of
                                orchard.</h3>
                        </div>
                    </div>
                    <div class="flex flex-col items-end col-span-2 gap-y-5">
                        <h3 class="text-xl font-bold text-indigo-950">Proof of Payment:</h3>
                        <img src="" alt="" class="w-[300px] bg-red-300 h-[400px]">
                    </div>
                </div>
                <hr class="my-3">
                @role('owner')
                    <form method="POST" action="{{ route('product_transactions.update', 1) }}">
                        @csrf
                        @method('PUT')
                        <button class="px-5 py-3 font-bold text-white bg-indigo-700 rounded-full">Approve Order</button>
                    </form>
                @endrole

                @role('buyer')
                    <a href="#" class="px-5 py-3 font-bold text-white bg-indigo-700 rounded-full w-fit">Contact
                        Admin</a>
                @endrole
            </div>
        </div>
    </div>
</x-app-layout>
<x-app-layout>
    <x-slot name="header">
        <div class="flex flex-row items-center justify-between w-full">
            <h2 class="text-xl font-semibold leading-tight text-gray-800">
                {{ __('Details') }}
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
                </div>
                <hr class="my-3">
                <h3 class="text-xl font-bold text-indigo-950">List of Items</h3>
                <div class="grid grid-cols-4 gap-x-10">
                    <div class="flex flex-col col-span-2 gap-y-5">
                        <div class="flex flex-row items-center justify-between item-card">
                            <div class="flex flex-row items-center gap-x-3">
                                <img src="#" alt="" class="w-[50px] h-[50px]">
                                <div>
                                    <h3 class="text-2xl font-bold text-indigo-950">Panadol</h3>
                                    <p class="text-base text-slate-500">Rp 100.000</p>
                                </div>
                            </div>
                            <p class="text-base text-slate-500"> Vitamins</p>
                        </div>
                        <div class="flex flex-row items-center justify-between item-card">
                            <div class="flex flex-row items-center gap-x-3">
                                <img src="#" alt="" class="w-[50px] h-[50px]">
                                <div>
                                    <h3 class="text-2xl font-bold text-indigo-950">Panadol</h3>
                                    <p class="text-base text-slate-500">Rp 100.000</p>
                                </div>
                            </div>
                            <p class="text-base text-slate-500"> Vitamins</p>
                        </div>
                        <div class="flex flex-row items-center justify-between item-card">
                            <div class="flex flex-row items-center gap-x-3">
                                <img src="#" alt="" class="w-[50px] h-[50px]">
                                <div>
                                    <h3 class="text-2xl font-bold text-indigo-950">Panadol</h3>
                                    <p class="text-base text-slate-500">Rp 100.000</p>
                                </div>
                            </div>
                            <p class="text-base text-slate-500"> Vitamins</p>
                        </div>
                        <h3 class="text-xl font-bold text-indigo-950">Details of Delivery</h3>
                        <div class="flex flex-row items-center justify-between item-card">
                            <p class="text-base text-slate-500">Address</p>
                            <h3 class="text-xl font-bold text-indigo-950"> Orchad No 23</h3>
                        </div>
                        <div class="flex flex-row items-center justify-between item-card">
                            <p class="text-base text-slate-500">City</p>
                            <h3 class="text-xl font-bold text-indigo-950">Singapure</h3>
                        </div>
                        <div class="flex flex-row items-center justify-between item-card">
                            <p class="text-base text-slate-500">Post Coded</p>
                            <h3 class="text-xl font-bold text-indigo-950">12379</h3>
                        </div>
                        <div class="flex flex-row items-center justify-between item-card">
                            <p class="text-base text-slate-500">Phone Number</p>
                            <h3 class="text-xl font-bold text-indigo-950">0825237465</h3>
                        </div>
                        <div class="flex flex-col items-start item-card">
                            <p class="text-base text-slate-500">Notes</p>
                            <h3 class="text-lg font-bold text-indigo-950">Sebelah kafe local dekat dengan river of
                                orchard.</h3>
                        </div>
                    </div>
                    <div class="flex flex-col items-end col-span-2 gap-y-5">
                        <h3 class="text-xl font-bold text-indigo-950">Proof of Payment:</h3>
                        <img src="" alt="" class="w-[300px] bg-red-300 h-[400px]">
                    </div>
                </div>
                <hr class="my-3">
                @role('owner')
                    <form method="POST" action="{{ route('product_transactions.update', 1) }}">
                        @csrf
                        @method('PUT')
                        <button class="px-5 py-3 font-bold text-white bg-indigo-700 rounded-full">Approve Order</button>
                    </form>
                @endrole

                @role('buyer')
                    <a href="#" class="px-5 py-3 font-bold text-white bg-indigo-700 rounded-full w-fit">Contact
                        Admin</a>
                @endrole
            </div>
        </div>
    </div>
</x-app-layout>
