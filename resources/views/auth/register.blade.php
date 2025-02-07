<x-layout>
    <x-slot:heading>
        Register
    </x-slot:heading>

    <form method="POST" action="/register" class="flex justify-center">
        @csrf
        <div class="flex min-h-full flex-col justify-center my-12 w-1/2 bg-white rounded-3xl shadow-2xl">
            <div class=" py-10 ">
                <div class="sm:mx-auto sm:w-full sm:max-w-sm">
                    <img class="mx-auto h-10 w-auto"
                        src="https://tailwindui.com/plus/img/logos/mark.svg?color=indigo&shade=600" alt="Your Company">
                    <h2 class="mt-10 text-center text-2xl/9 font-bold tracking-tight text-gray-900">Create a new account
                    </h2>
                </div>

                <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
                    <div class="flex justify-between gap-4">
                        <div>
                            <label for="first name" class="mt-2 text-sm/6 font-medium text-gray-900">First
                                name</label>
                            <div class="">
                                <input type="first name" name="first name" id="first name" autocomplete="first name"
                                    required
                                    class="w-full rounded-md bg-gray-100 border border-gray-300 px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
                            </div>
                        </div>
                        @error('first name')
                            <p class="text-red-600 font-semibold text-xs mt-1 ml-1">{{ $message }}</p>
                        @enderror

                        <div>
                            <label for="last name" class="mt-2 text-sm/6 font-medium text-gray-900">Last
                                name</label>
                            <div class="">
                                <input type="last name" name="last name" id="last name" autocomplete="last name"
                                    required
                                    class="w-full rounded-md bg-gray-100 border border-gray-300 px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
                            </div>
                        </div>
                        @error('last name')
                            <p class="text-red-600 font-semibold text-xs mt-1 ml-1">{{ $message }}</p>
                        @enderror
                    </div>
                    <div>
                        <label for="email" class="mt-2 block text-sm/6 font-medium text-gray-900">Email
                            address</label>
                        <div class="">
                            <input type="email" name="email" id="email" autocomplete="email" required
                                class="block w-full rounded-md bg-gray-100 border border-gray-300 px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
                        </div>
                    </div>
                    @error('email')
                        <p class="text-red-600 font-semibold text-xs mt-1 ml-1">{{ $message }}</p>
                    @enderror

                    <div>

                        <label for="password" class="mt-2 block text-sm/6 font-medium text-gray-900">Password</label>

                        <div class="">
                            <input type="password" name="password" id="password" autocomplete="current-password"
                                required
                                class="block w-full rounded-md bg-gray-100 px-3 border border-gray-300 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
                        </div>
                    </div>
                    @error('password')
                        <p class="text-red-600 font-semibold text-xs mt-1 ml-1">{{ $message }}</p>
                    @enderror

                    <div>

                        <label for="password_confirmation" class="mt-2 block text-sm/6 font-medium text-gray-900">Confirm Password</label>

                        <div class=" mb-6">
                            <input type="password_confirmation" name="password_confirmation" id="password_confirmation"
                                required
                                class="block w-full rounded-md bg-gray-100 px-3 border border-gray-300 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
                        </div>
                    </div>
                    @error('password_confirmation')
                        <p class="text-red-600 font-semibold text-xs mt-1 ml-1">{{ $message }}</p>
                    @enderror

                    <div>
                        <button type="submit"
                            class="flex w-1/2 mx-auto justify-center rounded-md bg-indigo-600 px-3 py-1.5 text-sm/6 font-semibold text-white shadow-xs hover:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Sign
                            up</button>
                    </div>
                </div>
                <p class="mt-10 text-center text-sm/6 text-gray-500">
                    Already have an account?
                    <a href="/login" class="font-semibold text-indigo-600 hover:text-indigo-500">Sign in</a>
                </p>
            </div>
            
        </div>

    </form>
</x-layout>
