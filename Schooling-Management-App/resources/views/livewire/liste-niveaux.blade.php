<div class="mt-5">
    <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-4">
        <!-- Titre et bouton créer -->

        <div class="flex justify-between items-center">
            <div class="w-1/3">
                <input type="text" class="block mt-1 rounded-md border-gray-300 w-full" placeholder="Rechercher"
                wire:model="search">
            </div>
            
            <a href="{{route('settings.create_levels')}}" class="bg-blue-500 rounded-md p-2 text-sm text-white">Ajouter niveau</a>
        </div>

        <!-- Message qui apparaîtra après opération -->

        @if (Session::get('success'))
            <div class="p-5">
                <div class="block p-2 bg-green-500 text-white rounded-sm shadow-sm mt-2">{{ Session::get('success') }}</div>
            </div>
        @endif

        <!-- Styliser le tableau -->

        <div class="overflow-x-auto">
            <div class="py-4 inline-block min-w-full">
                <div class="overflow-hidden">
                    <table class="min-w-full text-center">

                        <thead class="border-b bg-gray-50">
                            <tr>
                                <th class="text-sm font-medium text-gray-900 px-6 py-6">Id</th>
                                <th class="text-sm font-medium text-gray-900 px-6 py-6">Code</th>
                                <th class="text-sm font-medium text-gray-900 px-6 py-6">Libellé</th>
                                <th class="text-sm font-medium text-gray-900 px-6 py-6">Montant Scolarité</th>
                                <th class="text-sm font-medium text-gray-900 px-6 py-6">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($levels as $item)
                                <tr class="border-b-2 border-gray-100">
                                    <td class="text-sm font-medium text-gray-900 px-6 py-6">{{ $item->id }}</td>
                                    <td class="text-sm font-medium text-gray-900 px-6 py-6">{{ $item->code }}</td>
                                    <td class="text-sm font-medium text-gray-900 px-6 py-6">{{ $item->libelle }}</td>
                                    <td class="text-sm font-medium text-gray-900 px-6 py-6">{{ $item->scolarite }}</td>
                                    <td class="flex">
                                        <a href="{{route('settings.edit_level', $item->id)}}" class="text-sm bg-blue-500 p-1 text-white rounded-sm">Modifier</a>
                                        <div wire:click="delete({{$item->id}})" class="text-sm bg-red-500 p-1 text-white rounded-sm">Supprimer</div>
                                    </td>
                                </tr>
                            @empty
                                <tr class="w-full">
                                    <td class="flex-1 w-full items-center justify-center" colspan="5">
                                        <div>
                                            <p class="flex justify-center content-center p-4">
                                                <img src="{{ asset('storage/empty.svg') }}" alt="" class="w-20 h-20">
                                                <div>Aucun élément trouvé !</div>
                                            </p>
                                        </div>
                                    </td>
                                </tr>
                            @endforelse
                            
                        </tbody>
                    </table>

                    <div class="mt-3">
                        {{ $levels -> links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>