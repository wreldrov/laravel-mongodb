@extends('layouts.main')

@section('title', 'Данные о библиотеках')

@section('content')

    <!-- Topbar -->
    <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">


    </nav>
    <!-- End of Topbar -->

    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Данные о библиотеках</h1>
        <p class="mb-4">
            В данном наборе содержится данные о библиотеках,
            график работы, адрес, контактные телефоны, виды услуг,
            геокоординаты, электронная почта и ФИО руководителей библиотек.
        </p>

        <div class="col-md-12 row" style="margin: 20px auto;">
            <div style="display: block;">
                <div style="display: inline-block;">
                    <a class="col-lg-offset-5 btn btn-success" href="{{ route('library.create') }}">
                        Создать
                    </a>
                </div>
            </div>
        </div>

        <!-- DataTales Example -->
        <div class="col-md-12 row">
            {{ csrf_token() }}
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary"></h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>№</th>
                                    <th>Название (КЗ)</th>
                                    <th>Название (РУ)</th>
                                    <th>Адрес (КЗ)</th>
                                    <th>Адрес (РУ)</th>
                                    <th>ФНО (КЗ)</th>
                                    <th>ФНО (РУ)</th>
                                    <th>Режим работы (КЗ)</th>
                                    <th>Режим работы (РУ)</th>
                                    <th>Виды услуг (КЗ)</th>
                                    <th>Виды услуг (РУ)</th>
                                    <th>E-mail</th>
                                    <th>Официальный сайт</th>
                                    <th>Телефон</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>№</th>
                                    <th>Название (КЗ)</th>
                                    <th>Название (РУ)</th>
                                    <th>Адрес (КЗ)</th>
                                    <th>Адрес (РУ)</th>
                                    <th>ФНО (КЗ)</th>
                                    <th>ФНО (РУ)</th>
                                    <th>Режим работы (КЗ)</th>
                                    <th>Режим работы (РУ)</th>
                                    <th>Виды услуг (КЗ)</th>
                                    <th>Виды услуг (РУ)</th>
                                    <th>E-mail</th>
                                    <th>Официальный сайт</th>
                                    <th>Телефон</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                <tr>
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
                                @foreach($libraries as $row)
                                    <tr>
                                        <td>{{ $loop->index+1 }}</td>
                                        <td>{{ $row->{ \App\Contracts\Entities\LibraryContract::FIELD_NAME_KZ } }}</td>
                                        <td>{{ $row->{ \App\Contracts\Entities\LibraryContract::FIELD_NAME } }}</td>
                                        <td>{{ $row->{ \App\Contracts\Entities\LibraryContract::FIELD_ADDRESS_KZ } }}</td>
                                        <td>{{ $row->{ \App\Contracts\Entities\LibraryContract::FIELD_ADDRESS } }}</td>
                                        <td>{{ $row->{ \App\Contracts\Entities\LibraryContract::FIELD_RUKOVODITEL_KZ } }}</td>
                                        <td>{{ $row->{ \App\Contracts\Entities\LibraryContract::FIELD_RUKOVODITEL } }}</td>
                                        <td>{{ $row->{ \App\Contracts\Entities\LibraryContract::FIELD_SCHEDULE_KZ } }}</td>
                                        <td>{{ $row->{ \App\Contracts\Entities\LibraryContract::FIELD_SCHEDULE } }}</td>
                                        <td>{{ $row->{ \App\Contracts\Entities\LibraryContract::FIELD_VIDY_USLUG_KZ } }}</td>
                                        <td>{{ $row->{ \App\Contracts\Entities\LibraryContract::FIELD_VIDY_USLUG } }}</td>
                                        <td>{{ $row->{ \App\Contracts\Entities\LibraryContract::FIELD_EMAIL } }}</td>
                                        <td>{{ $row->{ \App\Contracts\Entities\LibraryContract::FIELD_OFFICIAL_SITE } }}</td>
                                        <td>{{ $row->{ \App\Contracts\Entities\LibraryContract::FIELD_CONTACT_TELEFON } }}</td>
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

                var kz_val = $('#name_kz_search').val();
                var ru_val = $('#name_ru_search').val();

                $.ajax({
                    url: "{{ route('library.search') }}",
                    method: 'GET',
                    data: {
                        name_kz: kz_val,
                        name_ru: ru_val,
                        _token: $('input[name="_token"]').val()
                    },
                    dataType: 'json',
                    success: function (data) {
                        $('#table-body').html(data);
                    }
                });
            });
        });
    </script>
@endsection
