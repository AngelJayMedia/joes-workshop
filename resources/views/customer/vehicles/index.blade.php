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

    <table class="w-full divide-y divide-gray-200">

        <thead class="font-bold text-gray-500 bg-indigo-200">
            <tr>
                <th class="px-2 py-3 text-xs tracking-wider text-left uppercase">
                </th>

                <th class="px-2 py-3 text-xs tracking-wider text-left uppercase">
                    Car Make
                </th>

                <th class="px-2 py-3 text-xs tracking-wider text-left uppercase">
                    Car Color
                </th>

                <th class="px-2 py-3 text-xs tracking-wider text-left uppercase">
                    Car License
                </th>

                <th class="px-2 py-3 text-xs tracking-wider text-left uppercase">
                    Car VIN Number
                </th>
            </tr>
        </thead>

        <tbody class="text-xs divide-y divide-gray-200 bg-indigo-50">
            @foreach ($vehicles as $vehicle)
            <tr>
                <td class="px-2 py-4 whitespace-nowrap">
                </td>

                <td class="px-2 py-4 whitespace-nowrap">
                    {{ $vehicle->make() }}
                </td>

                <td class="px-2 py-4 whitespace-nowrap">
                    {{ $vehicle->color }}
                </td>

                <td class="px-2 py-4 whitespace-nowrap">
                    {{ $vehicle->reg_number}}
                </td>

                <td class="px-2 py-4 whitespace-nowrap">
                    {{ $vehicle->VIN_number}}
                </td>
            </tr>

            @endforeach

        </tbody>
    </table>



</x-app-layout>
