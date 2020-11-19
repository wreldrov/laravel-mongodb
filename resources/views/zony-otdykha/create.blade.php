@extends('layouts.main')

@section('title', 'Средства массовой информации Кызылординской области')

@section('content')

    <!-- Topbar -->
    <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">


    </nav>
    <!-- End of Topbar -->

    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Create</h6>
            </div>
            <form action="{{ route('zony-otdykha.store') }}" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div style="margin: 40px 20px;">
                    <div class="col-md-12 row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label">Сезонность</label>
                                <div class="col-lg-9">
                                    <input type="text" class="form-control" name="sezon" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label">Наименование зоны отдыха (КЗ)</label>
                                <div class="col-lg-9">
                                    <input type="text" class="form-control" name="namekz" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label">Наименование зоны отдыха (РУ)</label>
                                <div class="col-lg-9">
                                    <input type="text" class="form-control" name="nameru" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label">Район/город (КЗ)</label>
                                <div class="col-lg-9">
                                    <input type="text" class="form-control" name="raigorkz" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label">Район/город (РУ)</label>
                                <div class="col-lg-9">
                                    <input type="text" class="form-control" name="raigorru" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label">Адрес месторасположения (КЗ)</label>
                                <div class="col-lg-9">
                                    <input type="text" class="form-control" name="addresskz" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label">Адрес месторасположения (РУ)</label>
                                <div class="col-lg-9">
                                    <input type="text" class="form-control" name="addressru" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label">Режим работы (КЗ)</label>
                                <div class="col-lg-9">
                                    <input type="text" class="form-control" name="rejimkz" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label">Режим работы (РУ)</label>
                                <div class="col-lg-9">
                                    <input type="text" class="form-control" name="rejimru" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label">Виды оказываемых услуг (КЗ)</label>
                                <div class="col-lg-9">
                                    <input type="text" class="form-control" name="uslugikz" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label">Виды оказываемых услуг (РУ)</label>
                                <div class="col-lg-9">
                                    <input type="text" class="form-control" name="uslugiru" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label">Ф.И.О. Руководителя</label>
                                <div class="col-lg-9">
                                    <input type="text" class="form-control" name="fioruk" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label">Год ввода в эксплуатацию</label>
                                <div class="col-lg-9">
                                    <input type="number" class="form-control" name="god" required>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="text-right">
                        <button class="btn btn-primary">Отправить</button>
                    </div>
                </div>
            </form>
        </div>

    </div>
    <!-- /.container-fluid -->

@endsection
