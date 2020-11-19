@extends('layouts.main')

@section('title', 'Средства массовой информации Кызылординской области')

@section('content')

    <!-- Topbar -->
    <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">


    </nav>
    <!-- End of Topbar -->

    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Средства массовой информации Кызылординской области</h1>
        <p class="mb-4">
            В данном наборе содержится информация о средствах массовой информации Кызылординской области
        </p>

        <div class="col-md-12 row" style="margin: 20px auto;">
            <div style="display: block;">
                <div style="display: inline-block;">
                    <a class="col-lg-offset-5 btn btn-success" href="{{ route('kyzylorda-info.create') }}">
                        Создать
                    </a>
                </div>
            </div>
        </div>

        <!-- DataTales Example -->
        <div class="col-md-12 row">
            {{ csrf_field() }}
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary"></h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <p>
                            Найдено: <span id="search_count">{{ $data->count() }}</span> из
                            <span id="total">{{ $data->count() }}</span>
                        </p>
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>№</th>
                                    <th>Язык</th>
                                    <th>Название (КЗ)</th>
                                    <th>Название (РУ)</th>
                                    <th>Адрес (КЗ)</th>
                                    <th>Адрес (РУ)</th>
                                    <th>Период (КЗ)</th>
                                    <th>Период (РУ)</th>
                                    <th>Территория (КЗ)</th>
                                    <th>Территория (РУ)</th>
                                    <th>ФИО Руководителя</th>
                                    <th>Направление (РУ)</th>
                                    <th>Направление (РУ)</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>№</th>
                                    <th>Язык</th>
                                    <th>Название (КЗ)</th>
                                    <th>Название (РУ)</th>
                                    <th>Адрес (КЗ)</th>
                                    <th>Адрес (РУ)</th>
                                    <th>Период (КЗ)</th>
                                    <th>Период (РУ)</th>
                                    <th>Территория (КЗ)</th>
                                    <th>Территория (РУ)</th>
                                    <th>ФИО Рук</th>
                                    <th>Направление (РУ)</th>
                                    <th>Направление (РУ)</th>
                                    <th></th>
                                </tr>
                            </tfoot>
                            <tbody>
                                <tr>
                                    <th></th>
                                    <th></th>
                                    <th><input id="name_kz_search"></th>
                                    <th><input id="name_ru_search"></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                </tr>
                            </tbody>
                            <tbody id="table-body">
                                @foreach($data as $row)
                                    <tr>
                                        <td>{{ $loop->index+1 }}</td>
                                        <td>{{ $row->{ \App\Contracts\Entities\KyzylordaInfoContract::FIELD_YAZIK } }}</td>
                                        <td>{{ $row->{ \App\Contracts\Entities\KyzylordaInfoContract::FIELD_NAME_KZ } }}</td>
                                        <td>{{ $row->{ \App\Contracts\Entities\KyzylordaInfoContract::FIELD_NAME_RU } }}</td>
                                        <td>{{ $row->{ \App\Contracts\Entities\KyzylordaInfoContract::FIELD_ADDRESS_KZ } }}</td>
                                        <td>{{ $row->{ \App\Contracts\Entities\KyzylordaInfoContract::FIELD_ADDRESS_RU } }}</td>
                                        <td>{{ $row->{ \App\Contracts\Entities\KyzylordaInfoContract::FIELD_PERIOD_KZ } }}</td>
                                        <td>{{ $row->{ \App\Contracts\Entities\KyzylordaInfoContract::FIELD_PERIOD_RU } }}</td>
                                        <td>{{ $row->{ \App\Contracts\Entities\KyzylordaInfoContract::FIELD_TERRITORIA_KZ } }}</td>
                                        <td>{{ $row->{ \App\Contracts\Entities\KyzylordaInfoContract::FIELD_TERRITORIA_RU } }}</td>
                                        <td>{{ $row->{ \App\Contracts\Entities\KyzylordaInfoContract::FIELD_FIO_RUK } }}</td>
                                        <td>{{ $row->{ \App\Contracts\Entities\KyzylordaInfoContract::FIELD_NAPRAVLENIE_KZ } }}</td>
                                        <td>{{ $row->{ \App\Contracts\Entities\KyzylordaInfoContract::FIELD_NAPRAVLENIE_RU } }}</td>
                                        <td>
                                            <a style="display: inline" href="http://project.test/kyzylorda-info/{{ $row->id  }}/edit">
                                                <span class="fa fa-edit"></span>
                                            </a>
                                            <a style="display: inline" href="http://project.test/kyzylorda-info/{{ $row->id  }}/delete">
                                                <span class="fa fa-trash"></span>
                                            </a>
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
    <!-- /.container-fluid -->

@endsection

@section('footerSection')
    <script>
        $(document).ready(function () {
            $('#name_kz_search').on('change', function () {
                search();
            });
            $('#name_ru_search').on('change', function () {
                search();
            });
            function search()
            {
                var kz_val = $('#name_kz_search').val();
                var ru_val = $('#name_ru_search').val();

                $.ajax({
                    url: "{{ route('kyzylorda-info.search') }}",
                    method: 'GET',
                    data: {
                        name_kz: kz_val,
                        name_ru: ru_val,
                        _token: $('input[name="_token"]').val()
                    },
                    dataType: 'json',
                    success: function (data) {
                        $('#table-body').html(data.data);
                        $('#search_count').html(data.search_count);
                        $('#total').html(data.total);
                    }
                });
            }
        });
    </script>
@endsection
