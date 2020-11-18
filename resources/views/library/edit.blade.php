@extends('layouts.main')

@section('title', 'Данные о библиотеках')

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
            <form action="{{ route('library.update', $library->_id) }}" method="POST" enctype="multipart/form-data">
                {{ method_field('PUT') }}
                {{ csrf_field() }}
                <div style="margin: 40px 20px;">
                    <div class="col-md-12 row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label">Название (КЗ)</label>
                                <div class="col-lg-9">
                                    <input type="text" class="form-control" name="name_kz" value="{{ $library->name_kz }}" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label">Название (РУ)</label>
                                <div class="col-lg-9">
                                    <input type="text" class="form-control" name="name" value="{{ $library->name }}" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label">Адрес (КЗ)</label>
                                <div class="col-lg-9">
                                    <input type="text" class="form-control" name="address_kz" value="{{ $library->address_kz }}" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label">Адрес (РУ)</label>
                                <div class="col-lg-9">
                                    <input type="text" class="form-control" name="address" value="{{ $library->address }}" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label">ФНО (КЗ)</label>
                                <div class="col-lg-9">
                                    <input type="text" class="form-control" name="rukovoditelya_kz" value="{{ $library->rukovoditelya_kz }}" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label">ФНО (РУ)</label>
                                <div class="col-lg-9">
                                    <input type="text" class="form-control" name="rukovoditelya" value="{{ $library->rukovoditelya }}" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label">Режим работы (КЗ)</label>
                                <div class="col-lg-9">
                                    <input type="text" class="form-control" name="schedule_kz" value="{{ $library->schedule_kz }}" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label">Режим работы (РУ)</label>
                                <div class="col-lg-9">
                                    <input type="text" class="form-control" name="schedule" value="{{ $library->schedule }}" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label">Виды услуг (КЗ)</label>
                                <div class="col-lg-9">
                                    <input type="text" class="form-control" name="vidy_uslug_kz" value="{{ $library->vidy_uslug_kz }}" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label">Виды услуг (РУ)</label>
                                <div class="col-lg-9">
                                    <input type="text" class="form-control" name="vidy_uslug" value="{{ $library->vidy_uslug }}" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label">E-mail</label>
                                <div class="col-lg-9">
                                    <input type="text" class="form-control" name="email" value="{{ $library->email }}" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label">Официальный сайт</label>
                                <div class="col-lg-9">
                                    <input type="text" class="form-control" name="official_site" value="{{ $library->official_site }}" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label">Телефон</label>
                                <div class="col-lg-9">
                                    <input type="text" class="form-control" name="contact_telefon" value="{{ $library->contact_telefon }}" required>
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
