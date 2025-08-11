<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Tenants') }}
            <x-btn-link class="float-end" href="{{route('tenants.create')}}">Add Tenant</x-btn-link>
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="p-6 text-gray-900">
    <h2 class="text-xl font-semibold mb-4">Tenants List</h2>

    <table class="w-full border border-gray-300">
        <thead>
            <tr class="bg-gray-100">
                <th class="py-2 px-4 border-b">Name</th>
                <th class="py-2 px-4 border-b">Email</th>
                <th class="py-2 px-4 border-b">Domain</th>
                <th class="py-2 px-4 border-b">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($tenants as $tenant)
                <tr>
                    <td class="py-2 px-4 border-b">{{ $tenant->name }}</td>
                    <td class="py-2 px-4 border-b">{{ $tenant->email }}</td>
                    <td class="py-2 px-4 border-b">
                        @foreach ($tenant->domains as $domain)
                            {{ $domain->domain }}<br>
                        @endforeach
                    </td>
                    <td class="py-2 px-4 border-b">
                        <a href="{{ route('tenants.edit', $tenant->id) }}" class="text-blue-600 hover:underline">Edit</a>
                        |
                        <form action="{{ route('tenants.destroy', $tenant->id) }}" method="POST" class="inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-red-600 hover:underline"
                                    onclick="return confirm('Are you sure?')">
                                Delete
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

                    
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
