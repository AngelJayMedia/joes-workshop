<x-app-layout>

    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Vehicles') }}
        </h2>
    </x-slot>

    <x-slot name="nav">
        <div class="space-x-4">
            {{-- Index --}}
            <x-jet-nav-link href="{{ route('admin.vehicles.index') }}" :active="request()->routeIs('admin.vehicles.index')">
                {{ __('Index') }}
            </x-jet-nav-link>

            {{-- With Vehicles --}}
            <x-jet-nav-link href="{{ route('admin.vehicles.withVehicles') }}" :active="request()->routeIs('admin.vehicles.withVehicles')">
                {{ __('Customers with vehicles') }}
            </x-jet-nav-link>

            {{-- Without Vehicles --}}
            <x-jet-nav-link href="{{ route('admin.vehicles.withoutVehicles') }}" :active="request()->routeIs('admin.vehicles.withoutVehicles')">
                {{ __('Customers without vehicles') }}
            </x-jet-nav-link>

        </div>
    </x-slot>

    <table class="w-full divide-y divide-gray-200">

        <thead class="font-bold text-gray-500 bg-indigo-200">
            <tr>
                <th class="px-2 py-3 text-xs tracking-wider text-left uppercase">
                </th>

                <th class="px-2 py-3 text-xs tracking-wider text-left uppercase">
                    Vehicle Owner
                </th>

                <th class="px-2 py-3 text-xs tracking-wider text-left uppercase">
                    Vehicle Make
                </th>

                <th class="px-2 py-3 text-xs tracking-wider text-left uppercase">
                    Vehicle Body Type
                </th>

                <th class="px-2 py-3 text-xs tracking-wider text-left uppercase">
                    Vehicle Color
                </th>
            </tr>
        </thead>

        <tbody class="text-xs divide-y divide-gray-200 bg-indigo-50">
            @foreach ($vehicles as $vehicle)
            <tr>
                <td class="px-2 py-4 whitespace-nowrap">
                </td>

                <td class="px-2 py-4 whitespace-nowrap">
                    {{ $vehicle->user->name }}
                </td>

                <td class="px-2 py-4 whitespace-nowrap">
                    {{ $vehicle->make }}
                </td>

                <td class="px-2 py-4 whitespace-nowrap">
                    {{ $vehicle->body_type }}
                </td>

                <td class="px-2 py-4 whitespace-nowrap">
                    {{ $vehicle->color }}
                </td>

            </tr>

            @endforeach
        </tbody>
    </table>

    <div class="p-5 bg-blue-200">
        {{ $vehicles->render() }}
    </div>

</x-app-layout>
