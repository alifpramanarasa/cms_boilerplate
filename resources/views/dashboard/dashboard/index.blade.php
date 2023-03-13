@extends('dashboard.partials.app')

{{-- Card with tailwind --}}
@section('content')    
    <div class="text-3xl pl-2 pb-4">
        Dashboard
    </div>
    <div class="flex flex-row">        
        <div class="bg-white shadow-md rounded-lg basis-1/4 p-4 m-2 w-1/3">
            <div class="flex flex-row items-center">
                <div class="p-3 rounded-full bg-green-600 bg-opacity-75">
                    <svg class="h-8 w-8 text-white" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                        <path d="M5 13l4 4L19 7"></path>
                    </svg>
                </div>
                <div class="flex flex-col justify-center ml-3">
                    <div class="font-medium text-md text-gray-700">Total Completed Orders</div>
                    <div class="font-medium text-2xl text-gray-700">1,245</div>
                </div>
            </div>
        </div>
        <div class="bg-white shadow-md rounded-lg basis-1/4 p-4 m-2 w-1/3">
            <div class="flex flex-row items-center">
                <div class="p-3 rounded-full bg-red-600 bg-opacity-75">                    
                    <svg class="h-8 w-8 text-white" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                        <path d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                </div>
                <div class="flex flex-col justify-center ml-3">
                    <div class="font-medium text-md text-gray-700">Total Canceled Orders</div>
                    <div class="font-medium text-2xl text-gray-700">245</div>
                </div>
            </div>
        </div>
        <div class="bg-white shadow-md rounded-lg basis-1/4 p-4 m-2 w-1/3">
            <div class="flex flex-row items-center">
                <div class="p-3 rounded-full bg-blue-600 bg-opacity-75">                                   
                    <svg class="h-8 w-8 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M21 12a2.25 2.25 0 00-2.25-2.25H15a3 3 0 11-6 0H5.25A2.25 2.25 0 003 12m18 0v6a2.25 2.25 0 01-2.25 2.25H5.25A2.25 2.25 0 013 18v-6m18 0V9M3 12V9m18 0a2.25 2.25 0 00-2.25-2.25H5.25A2.25 2.25 0 003 9m18 0V6a2.25 2.25 0 00-2.25-2.25H5.25A2.25 2.25 0 003 6v3" />
                    </svg>
                </div>
                <div class="flex flex-col justify-center ml-3">
                    <div class="font-medium text-md text-gray-700">Total Revenue</div>
                    <div class="font-medium text-2xl text-gray-700">Rp. 12.000.000</div>
                </div>
            </div>
        </div>
        <div class="bg-white shadow-md rounded-lg basis-1/4 p-4 m-2 w-1/3">
            <div class="flex flex-row items-center">
                <div class="p-3 rounded-full bg-yellow-600 bg-opacity-75">
                    <svg class="h-8 w-8 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 00-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 00-16.536-1.84M7.5 14.25L5.106 5.272M6 20.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zm12.75 0a.75.75 0 11-1.5 0 .75.75 0 011.5 0z" />
                    </svg>
                </div>
                <div class="flex flex-col justify-center ml-3">
                    <div class="font-medium text-md text-gray-700">Total Expense</div>
                    <div class="font-medium text-2xl text-gray-700">1,245</div>
                </div>
            </div>
        </div>
    </div>
@endsection                    