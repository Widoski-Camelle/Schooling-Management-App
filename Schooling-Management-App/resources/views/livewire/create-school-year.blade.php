<div class="p-3 bg-white shadow-sm">

    <form method="post" wire:submit.prevent="store">
        @csrf
        @method('post')

        @if (Session::get('error'))
            <div class="p-5">
                <div class="p-4 border-red-500 bg-red-400 animate-bounce text-white">{{ Session::get('error') }}</div>
            </div>
        @endif

        <div class="p-5">
            <x-label value="{{__('Libellé de l année scolaire')}}" />
            <input type="text" class="block mt-1 rounded-md border-gray-300 @error('libelle') border-red-500 bg-red-100 animate-bounce @enderror w-full"
                wire:model="libelle">

            @error('libelle')
                <div class="text text-red-500 mt-1">*Le champ libellé est requis.</div>
            @enderror
        </div>

        <div class="p-5 flex justify-between items-center">
            <button class="bg-red-600 p-3 rounded-sm text-white text-sm">Annuler</button>
            <button type="submit" class="bg-green-600 p-3 rounded-sm text-white text-sm">Ajouter</button>
        </div>
    </form>

</div>
