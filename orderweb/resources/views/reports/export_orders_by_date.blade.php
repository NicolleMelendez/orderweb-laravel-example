@extends('templates.base_reports')
@section('header', 'Reporte de órdenes')
@section('content')
    <section id="results">
        @if (count($orders) != 0)
            <h4>Reporte de órdenes</h3>
            <table id="reportTableInfo">
                <thead>
                    <tr>
                        <th>Fecha Inicial</th>
                        <th>Fecha Final</th>
                        <th>Total de Órdenes</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>{{ $start_date }}</td>
                        <td>{{ $end_date }}</td>
                        <td>{{ count($orders) }}</td>
                    </tr>
                </tbody>
            </table>

            <br><hr>

            <h4>Órdenes encontradas</h4>
            <table id="reportTable">
                <thead>
                        <th>Id</th>
                        <th>Fecha de legalización</th>
                        <th>Dirección</th>
                        <th>Ciudad</th>
                        <th>Causa</th>
                        <th>Observación</th>
                </thead>
                <tbody>
                    @foreach ($orders as $order)
                        <tr>
                            <td>{{ $order->id }}</td>
                            <td>{{ $order->legalization_date }}</td>
                            <td>{{ $order->address }}</td>
                            <td>{{ $order->city }}</td>
                            <td>{{ $order->causal->description }}</td>
                            <td>{{ $order->observation->description }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @else
            <p><strong>No existen resultados en el reporte</strong></p>
        @endif
    </section>


@endsection
