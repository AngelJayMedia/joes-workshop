<x-app-layout>

    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Vehicles') }}
        </h2>
    </x-slot>

    <x-slot name="nav">
        <div class="space-x-4">
            {{-- Index --}}
            <x-jet-nav-link href="{{ route('customer.vehicles.index') }}" :active="request()->routeIs('customer.vehicles.index')">
                {{ __('Index') }}
            </x-jet-nav-link>

            {{-- Create --}}
            <x-jet-nav-link href="{{ route('customer.vehicles.create') }}" :active="request()->routeIs('customer.vehicles.create')">
                {{ __('Create') }}
            </x-jet-nav-link>
        </div>
    </x-slot>


    <div class="py-12">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-xl sm:rounded-lg">

                <div class="p-6">

                    <x-form action="{{ route('customer.vehicles.store') }}" has-files>
                        <div class="space-y-6">
                            {{-- Make--}}
                            <div>
                                <x-jet-label for="make" value="{{ __('Car Make') }}" />
                                <x-jet-input id="make" class="block w-full mt-1" type="text" name="make" :value="old('make')" autofocus autocomplete="make" />
                                <x-jet-input-error for="make" class="mt-2" />
                            </div>

                            {{-- Color --}}
                            <div>
                                <x-jet-label for="color" value="{{ __('Car Color') }}" />
                                <x-jet-input id="color" class="block w-full mt-1" type="text" name="color" :value="old('color')" autofocus autocomplete="color" />
                                <x-jet-input-error for="color" class="mt-2" />
                            </div>

                            {{-- Registration Number --}}
                            <div>
                                <x-jet-label for="reg_number" value="{{ __('Car Registration Number') }}" />
                                <x-jet-input id="reg_number" class="block w-full mt-1" type="text" name="reg_number" :value="old('reg_number')" autofocus autocomplete="reg_number" />
                                <x-jet-input-error for="reg_number" class="mt-2" />
                            </div>

                            {{-- VIN Number --}}
                            <div>
                                <x-jet-label for="VIN_number" value="{{ __('Car VIN Number') }}" />
                                <x-jet-input id="VIN_number" class="block w-full mt-1" type="text" name="VIN_number" :value="old('VIN_number')" autofocus autocomplete="VIN_number" />
                                <x-jet-input-error for="VIN_number" class="mt-2" />
                            </div>
                        </div>

                        <x-jet-button class="mt-12">
                            {{ __('Create') }}
                        </x-jet-button>

                    </x-form>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
