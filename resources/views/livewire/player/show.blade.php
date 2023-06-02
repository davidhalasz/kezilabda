<div class="p-6 mx-auto">
    <table class="table table-bordered p-6 mx-auto">
        <tr class="p-6">
            <th class="text-left py-2 px-6">Jatekosok</th>
            <th class="text-center py-2 px-6"></th>
        </tr>
        @foreach ($players as $player)
        <tr>
            <td class="py-2 px-6">{{ $player->name }}</td>
            <td class="py-2 px-6 text-center">
                <button class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded-full">Törlés</button>
            </td>
        </tr>
        @endforeach
      </table>
</div>