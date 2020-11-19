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
                <h6 class="m-0 font-weight-bold text-primary">Edit</h6>
            </div>
            <form action="{{ route('kyzylorda-info.update', $kyzylordaInfo->_id) }}" method="POST" enctype="multipart/form-data">
                {{ method_field('PUT') }}
                {{ csrf_field() }}
                <div style="margin: 40px 20px;">
                    <div class="col-md-12 row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label">Язык</label>
                                <div class="col-lg-9">
                                    <input type="text" class="form-control" name="yazik" value="{{ $kyzylordaInfo->yazik }}" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label">Название (КЗ)</label>
                                <div class="col-lg-9">
                                    <input type="text" class="form-control" name="namekz" value="{{ $kyzylordaInfo->namekz }}" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label">Название (РУ)</label>
                                <div class="col-lg-9">
                                    <input type="text" class="form-control" name="nameru" value="{{ $kyzylordaInfo->nameru }}" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label">Адрес (КЗ)</label>
                                <div class="col-lg-9">
                                    <input type="text" class="form-control" name="addresskz" value="{{ $kyzylordaInfo->addresskz }}" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label">Адрес (РУ)</label>
                                <div class="col-lg-9">
                                    <input type="text" class="form-control" name="addressru" value="{{ $kyzylordaInfo->addressru }}" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label">Период (КЗ)</label>
                                <div class="col-lg-9">
                                    <input type="text" class="form-control" name="periodkz" value="{{ $kyzylordaInfo->periodkz }}" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label">Период (РУ)</label>
                                <div class="col-lg-9">
                                    <input type="text" class="form-control" name="periodru" value="{{ $kyzylordaInfo->periodru }}" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label">Территория (КЗ)</label>
                                <div class="col-lg-9">
                                    <input type="text" class="form-control" name="territoriakz" value="{{ $kyzylordaInfo->territoriakz }}" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label">Территория (РУ)</label>
                                <div class="col-lg-9">
                                    <input type="text" class="form-control" name="territoriaru" value="{{ $kyzylordaInfo->territoriaru }}" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label">ФИО Руководителя</label>
                                <div class="col-lg-9">
                                    <input type="text" class="form-control" name="fioruk" value="{{ $kyzylordaInfo->fioruk }}" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label">Направление (КЗ)</label>
                                <div class="col-lg-9">
                                    <input type="text" class="form-control" name="napravleniekz" value="{{ $kyzylordaInfo->napravleniekz }}" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label">Направление (РУ)</label>
                                <div class="col-lg-9">
                                    <input type="text" class="form-control" name="napravlenieru" value="{{ $kyzylordaInfo->napravlenieru }}" required>
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
