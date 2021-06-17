<x-app-layout>

    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Bookings') }}
        </h2>
    </x-slot>

    <x-slot name="nav">
        <div class="space-x-4">
            {{-- Index --}}
            <x-jet-nav-link href="{{ route('customer.bookings.index') }}" :active="request()->routeIs('customer.bookings.index')">
                {{ __('Index') }}
            </x-jet-nav-link>

            {{-- Create --}}
            <x-jet-nav-link href="{{ route('customer.bookings.create') }}" :active="request()->routeIs('customer.bookings.create')">
                {{ __('Create') }}
            </x-jet-nav-link>
        </div>
    </x-slot>


    <div class="py-12">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-xl sm:rounded-lg">

                <div class="p-6">

                    <x-form action="{{ route('customer.bookings.store') }}" has-files>
                        <div class="space-y-6">

                            {{-- Schedule --}}
                            <div>
                                <x-jet-label for="booking_date" value="{{ __('Booking Date') }}" />
                                <x-pikaday class="w-full border border-gray-200 focus:border-gray-400" name="booking_date" format="YYYY-MM-DD" />
                                <x-jet-input-error for="booking_date" class="mt-2" />
                            </div>

                            {{-- Model --}}
                            <div>
                                <x-jet-label for="vehicle_id" value="{{ __('Car Model') }}" />
                                <select name="vehicle_id" class="w-full border border-gray-200 focus:border-gray-400" name="" id="">
                                    <option value="">Select a Vehicle</option>
                                    @foreach($vehicles as $vehicle)
                                    <option value="{{ $vehicle->id }}">{{ $vehicle->make() }}</option>
                                    @endforeach
                                </select>
                                <x-jet-input-error for="vehicle_id" class="mt-2" />
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
