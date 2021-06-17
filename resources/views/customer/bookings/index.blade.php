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
    <table class="w-full divide-y divide-gray-200">

        <thead class="font-bold text-gray-500 bg-indigo-200">
            <tr>
                <th class="px-2 py-3 text-xs tracking-wider text-left uppercase">
                </th>

                <th class="px-2 py-3 text-xs tracking-wider text-left uppercase">
                    Status
                </th>

                <th class="px-2 py-3 text-xs tracking-wider text-left uppercase">
                    Vehicle Make
                </th>

                <th class="px-2 py-3 text-xs tracking-wider text-left uppercase">
                    Vehicle Reg No:
                </th>

                <th class="px-2 py-3 text-xs tracking-wider text-left uppercase">
                    Booking Date
                </th>
            </tr>
        </thead>

        <tbody class="text-xs divide-y divide-gray-200 bg-indigo-50">
            @foreach ($bookings as $booking)
            <tr>
                <td class="px-2 py-4 whitespace-nowrap">
                </td>

                <td class="px-2 py-4 whitespace-nowrap">
                    {{ $booking->status() }}
                </td>

                <td class="px-2 py-4 whitespace-nowrap">
                    {{ $booking->vehicle->make() }}
                </td>

                <td class="px-2 py-4 whitespace-nowrap">
                    {{ $booking->vehicle->reg_number }}
                </td>

                <td class="px-2 py-4 whitespace-nowrap">
                    {{ $booking->booking_date }}
                </td>
            </tr>
            @endforeach

        </tbody>
    </table>



</x-app-layout>
