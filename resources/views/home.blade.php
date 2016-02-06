@extends('layouts.maintemplate')

@section('content')

    <table class="data-table">
        <thead>
        <tr class="data-table__selectable-row">
            <th></th>
            <th>Dessert (100g serving)</th>
            <th>Calories</th>
            <th>Fat (g)</th>
            <th class="data-table__sortable-cell data-table__sortable-cell--desc">Carbs (g)</th>
            <th>Protein (g)</th>
            <th>Sodium (mg)</th>
            <th>
                <i class="mdi mdi-comment-text"></i>
                <span>Comments</span>
            </th>
        </tr>
        </thead>

        <tbody>
        <tr class="data-table__selectable-row data-table__selectable-row--is-selected">
            <td></td>
            <td>Frozen yogurt</td>
            <td>159</td>
            <td>6.0</td>
            <td>24</td>
            <td>4.0</td>
            <td>87</td>
            <td>Lorem ipsum</td>
        </tr>

        <tr class="data-table__selectable-row">
            <td></td>
            <td>Ice cream sandwich</td>
            <td>237</td>
            <td>9.0</td>
            <td>37</td>
            <td>4.3</td>
            <td>129</td>
            <td>Lorem ipsum</td>
        </tr>
        </tbody>
    </table>
@endsection
