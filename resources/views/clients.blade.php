<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Clients') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <p>Clients Page</p>
                    <form action="/oauth/clients" method="POST">
                        @csrf
                        <input type="text" name="name" placeholder="Name" class="my-4"/>
                        <input type="text" name="redirect" placeholder="Redirect URL" class="my-4"/>
                        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Create</button>
                    </form>
                    <div>
                        @foreach($clients as $client)
                            <div class="p-4">
                                <p> ID:{{ $client->id }}</p>
                                <p> Name:{{ $client->name }}</p>
                                <p>Secret: {{ $client->secret }}</p>
                                <p> Redirect: {{ $client->redirect }}</p>
                                <p>State: {{ \Illuminate\Support\Str::random(40) }}</p>
                            </div>
                            <hr class="my-4"/>

                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
