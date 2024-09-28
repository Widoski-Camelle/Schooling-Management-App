<div class="mt-5">
    <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-4">
        <!-- Titre et bouton créer -->

        <div class="flex justify-between items-center">
            <h4>Liste des années scolaires</h4>
            <a href="{{route('settings.create_school_year')}}" class="bg-blue-500 rounded-md p-2 text-sm text-white">Nouvelle Année Scolaire</a>
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
                                <th class="text-sm font-medium text-gray-900 px-6 py-6">Année Scolaire</th>
                                <th class="text-sm font-medium text-gray-900 px-6 py-6">Statut</th>
                                <th class="text-sm font-medium text-gray-900 px-6 py-6">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($schoolYearList as $item)
                                <tr class="border-b-2 border-gray-100">
                                    <td class="text-sm font-medium text-gray-900 px-6 py-6">{{ $item->id }}</td>
                                    <td class="text-sm font-medium text-gray-900 px-6 py-6">{{ $item->school_year }}</td>
                                    <td class="text-sm font-medium text-gray-900 px-6 py-6">
                                        @if ($item->active >= 1)
                                            <span class="p-1 text-sm bg-green-400 text-white rounded-sm">Actif</span>
                                        @else
                                            <span class="p-1 text-sm bg-red-400 text-white rounded-sm">Inactif</span>
                                        @endif
                                    </td>
                                    <td class="text-sm font-medium text-gray-900 px-6 py-6">
                                        @if ($item->active >= 1)
                                            <button class="p-2 text-white bg-red-400 text-sm rounded-sm">Rendre inactif</button>
                                        @else
                                            <button class="p-2 text-white bg-green-400 text-sm rounded-sm">Rendre actif</button>
                                        @endif
                                    </td>
                                </tr>
                            @empty

                            @endforelse
                            
                        </tbody>
                    </table>

                    <div class="mt-3">
                        {{ $schoolYearList -> links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>