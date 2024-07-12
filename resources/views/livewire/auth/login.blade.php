@section('title', 'Sign in to your account')

<div>
    <div class="flex items-center justify-center min-h-screen bg-gray-100">
        <div class="relative flex flex-col m-6 space-y-8 bg-white shadow-2xl rounded-2xl md:flex-row md:space-y-0">
            <!-- left side -->
            <form wire:submit.prevent="authenticate">
                <div class="flex flex-col justify-center p-8 md:p-14">
                    <span class="mb-3 text-4xl font-bold text-center"><i class="fa-solid fa-user"></i> Login</span>
                    <div class="py-4">
                        <label for = "email" class="mb-2 text-md">Email address</label>
                        <input wire:model.lazy="email" required autofocus
                        type="text"
                        class="w-full p-2 border border-gray-300 rounded-md placeholder:font-light placeholder:text-gray-500 @error('email') border-red-300 text-red-900 placeholder-red-300 focus:border-red-300 focus:ring-red @enderror"
                        name="email"
                        id="email"
                        />
                        @error('email')
                            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                </div>

                <div class="py-4">
                    <label for = "email" class="mb-2 text-md">Password</label>
                    <input wire:model.lazy="password"
                    type="password"
                    name="password"
                    id="pass"
                    class="w-full p-2 border border-gray-300 rounded-md placeholder:font-light placeholder:text-gray-500 @error('password') border-red-300 text-red-900 placeholder-red-300 focus:border-red-300 focus:ring-red @enderror"
                    />

                    @error('password')
                        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <div class="flex justify-between w-full py-4">
                    <div class="mr-24">
                        <input wire:model.lazy="remember" type="checkbox" name="remember" id="remember" class="mr-2" />
                        <label for  class="text-md">Remember</label>
                    </div>
                    <a href="{{ route('password.request') }}" class="font-bold text-md">Forgot password?</a>
                </div>

                <button class= "w-full bg-black text-white p-2 rounded-lg mb-6 hover:bg-white hover:text-black hover:border hover:border-gray-300">
                    Login
                </button>
            </form>
            <!-- <button
                class="w-full border border-gray-300 text-md p-2 rounded-lg mb-6 hover:bg-black hover:text-white"
            > -->
                <!-- <img src="google.svg" alt="img" class="w-6 h-6 inline mr-2" />
                Sign in with Google
            </button> -->
            <!-- <div class="text-center text-gray-400">
                Dont'have an account?
                <span class="font-bold text-black">Sign up for free</span>
            </div> -->
            </div>
            <!-- {/* right side */} -->
            <div class="relative">
                <img
                src="{{ asset('assets/image/login.png') }}"
                alt="img"
                class="w-[400px] h-full hidden rounded-r-2xl md:block object-cover"
                />
            </div>
        </div>
    </div>
</div>
