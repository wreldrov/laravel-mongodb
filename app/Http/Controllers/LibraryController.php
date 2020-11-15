<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Library;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LibraryController extends Controller
{
    public function index()
    {
//        Library::create(
//            [
//                "name_kz"                => "«Ғ. Сланов атындағы Атырау облыстық ғылыми әмбебап кітапхана» КММ",
//                "contact_telefon"        => "8/7122/ 209291",
//                "address"                => "г.Атырау, мкр. Нурсая,  пр. Абилхайр хана, 52",
//                "geoposition"            => "47.11083062927132,\n51.84545874595642\n",
//                "f.n.o_rukovoditelya_kz" => "Жеке және заңды тұлғаларға тегін кітапханалық, анықтамалық-библиографиялық және ақпараттық қызметтер көрсетіледі.",
//                "schedule_kz"             => "Дс-Жc:10:00-19:00\nДемалыс күні: Жм",
//                "vidy_uslug_kz"          => "Ізмұханбетова Сара Салахединқызы",
//                "address_kz"             => "Атырау қаласы, Нұрсая ы/а, Әбілхайыр хан даңғылы, 52",
//                "f.n.o_rukovoditelya"    => "Частным и юридическим лицам оказываются  бесплатные библиотечные, справочно – библиографические и информационные услуги ",
//                "name"                   => "КГУ «Атырауская областная универсальная научная библиотека им. Г.Сланова  Атырауской области»",
//                "schedule"               => "Пн-Вс: 10:00-19:00\nВыходной день: Пт",
//                "email"                 => "atyraulib@list.ru",
//                "official_site"          => "www.atyraulib.kz",
//                "vidy_uslug"             => "Измұханбетова Сара\nСалахединқызы\n",
//            ]
//        );

        $libraries = Library::all();

        return view('libraries', compact('libraries'));
    }
}
