<x-layout>
    <x-slot:heading>
        Register
    </x-slot:heading>

    <form method="POST" action="/login" class="flex justify-center">
        @csrf
        <div class="flex min-h-full flex-col justify-center my-12 w-1/2 bg-white rounded-3xl shadow-2xl">
            <div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
                <div class="sm:mx-auto sm:w-full sm:max-w-sm">
                    <img class="mx-auto h-20 w-auto"
                        src="{{asset('logo.png')}}" alt="Your Company">
                    <h2 class="mt-10 text-center text-2xl/9 font-bold tracking-tight text-gray-900">Sign in to your
                        account
                    </h2>
                </div>

                <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
                    <div>
                        <label for="email" class="mt-2 block text-sm/6 font-medium text-gray-900">Email
                            address</label>
                        <div class="">
                            <input type="email" name="email" id="email" value="{{old('email')}}" autocomplete="email" required
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
                        <button type="submit"
                            class="flex w-1/2 mt-4 mx-auto justify-center rounded-md bg-indigo-600 px-3 py-1.5 text-sm/6 font-semibold text-white shadow-xs hover:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Sign
                            in</button>
                    </div>
                    

                    <p class="mt-6 text-center text-sm/6 text-gray-500">
                        Not a member?
                        <a href="/register" class="font-semibold text-indigo-600 hover:text-indigo-500">Join our
                            family</a>
                    </p>
                </div>
            </div>

        </div>

    </form>
</x-layout>
