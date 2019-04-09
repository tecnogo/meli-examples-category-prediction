<table class="table table-striped">
    <thead class="thead-dark">
    <tr>
        <th></th>
        <th>Id</th>
        <th>Categoría</th>
        <th class="text-right">Probabilidad</th>
    </tr>
    </thead>
    <tbody>
    @foreach($prediction->path()->reverse() as $index => $predictionCategory)
        <tr>
            <td><strong>#{{ $index + 1 }}</strong></td>
            <td>{{ $predictionCategory->id() }}</td>
            <td>
                {{ $predictionCategory->name() }}
            </td>
            <td class="text-right">
                {{ round($predictionCategory->predictionProbability() * 100, 3) }}%
            </td>
        </tr>
    @endforeach
    </tbody>
</table>