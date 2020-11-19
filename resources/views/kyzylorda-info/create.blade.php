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
            <form action="{{ route('kyzylorda-info.store') }}" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div style="margin: 40px 20px;">
                    <div class="col-md-12 row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label">Название (КЗ)</label>
                                <div class="col-lg-9">
                                    <input type="text" class="form-control" name="namekz" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label">Название (РУ)</label>
                                <div class="col-lg-9">
                                    <input type="text" class="form-control" name="nameru" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label">Адрес (КЗ)</label>
                                <div class="col-lg-9">
                                    <input type="text" class="form-control" name="addresskz" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label">Адрес (РУ)</label>
                                <div class="col-lg-9">
                                    <input type="text" class="form-control" name="addressru" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label">Период (КЗ)</label>
                                <div class="col-lg-9">
                                    <input type="text" class="form-control" name="periodkz" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label">Период (РУ)</label>
                                <div class="col-lg-9">
                                    <input type="text" class="form-control" name="periodru" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label">Территория (КЗ)</label>
                                <div class="col-lg-9">
                                    <input type="text" class="form-control" name="territoriakz" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label">Территория (РУ)</label>
                                <div class="col-lg-9">
                                    <input type="text" class="form-control" name="territoriaru" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label">ФИО Руководителя</label>
                                <div class="col-lg-9">
                                    <input type="text" class="form-control" name="fioruk" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label">Направление (КЗ)</label>
                                <div class="col-lg-9">
                                    <input type="text" class="form-control" name="napravleniekz" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label">Направление (РУ)</label>
                                <div class="col-lg-9">
                                    <input type="text" class="form-control" name="napravlenieru" required>
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
