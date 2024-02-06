<x-selectie._layout>
    <div class="relative md:h-screen flex overflow-hidden">
        <div class="flex flex-col sm:flex-row items-center md:items-start sm:justify-center flex-auto min-w-0 bg-white md:my-0 my-8">
          <div class="md:flex md:items-center md:justify-center w-full  md:h-full sm:rounded-lg md:rounded-none bg-white px-6">
            <div class="max-w-md w-full mx-auto">
    <div class="mb-4 text-sm text-gray-600">
        {{ __('Thanks for signing up! Before getting started, could you verify your email address by clicking on the link we just emailed to you? If you didn\'t receive the email, we will gladly send you another.') }}
    </div>

    @if (session('status') == 'verification-link-sent')
        <div class="mb-4 font-medium text-sm text-green-600">
            {{ __('A new verification link has been sent to the email address you provided during registration.') }}
        </div>
    @endif

    <div class="mt-4 flex-col items-center">
        <form method="POST" action="{{ route('verification.send') }}">
            @csrf

            <div>
                <x-selectie.button>
                    {{ __('Opnieuw versturen') }}
                </x-selectie.button>
            </div>
        </form>

        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit" class="underline text-center text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                {{ __('Log Out') }}
            </button>
            
        </form>
        
    </div>
</div>
</div>
</div>
<div class="hidden md:block md:w-1/2 md:relative">
<img class="absolute inset-0 h-full w-full object-cover" src="https://images.pexels.com/photos/3182750/pexels-photo-3182750.jpeg" alt="hero">
</div>
</div>
</x-selectie._layout>
