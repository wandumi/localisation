<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('login', app()->getLocale() ) }}">
            @csrf

            <!-- Select in Tailwind -->
            <div class="block ">
               

                
                <label class="block">
                    <span class="text-gray-700">Language</span>
                    <select class="block w-full mt-1">
                       @foreach (App\Models\locale::LOCALES as $locale => $label)
                           <option value="{{ $locale }}">
                                {{ $label }}
                            </option>
                       @endforeach
                    </select>
                </label>

            </div>

            <div class="flex items-center justify-end mt-4">
                

                <x-button class="ml-3">
                    {{ __('form.Choose') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
