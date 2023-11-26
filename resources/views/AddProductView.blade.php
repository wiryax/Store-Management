<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
    </div>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <h1>Input Product</h1>
            <form action="/product/insert" method="post">
                <div class="mb-4">
                    <label for="name">Name</label>
                    <input type="text" name="name" required>
                </div>
                <div class="mb-4">
                    <label for="name">Description</label>
                    <input type="text" name="description" required>
                </div>
                <div class="mb-4">
                    <label for="name">Stock</label>
                    <input type="number" name="stock" required>
                </div>
                <div class="mb-4">
                    <label for="name">Price</label>
                    <input type="number" name="price" required>
                </div>
                <div class="mb-4">
                    <button style="background: #2563eb" type=" submit " class="lg:px-8 text-white">Submit</button>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>
