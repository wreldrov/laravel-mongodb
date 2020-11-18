<?php

namespace App\Http\Controllers;


use App\Contracts\Entities\LibraryContract;
use App\Library;
use Illuminate\Http\Request;

class LibraryController extends Controller
{
    public function index()
    {
        $libraries = Library::all();

        return view('library.index', compact('libraries'));
    }

    public function create()
    {
        $libraries = Library::all();

        return view('library.create', compact('libraries'));
    }

    public function store(Request $request)
    {
        Library::create(array_only($request->all(), LibraryContract::FIELD_LIST));

        return redirect()->route('library.index');
    }

    public function search(Request $request)
    {
        $name_kz = $request->get('name_kz');
        $name_ru = $request->get('name_ru');

        $libraries = Library::query()
            ->when($name_kz, function ($query) use ($name_kz) {
                $query->where(LibraryContract::FIELD_NAME_KZ, 'LIKE', '%'. $name_kz .'%');
            })
            ->when($name_ru, function ($query) use ($name_ru) {
                $query->where(LibraryContract::FIELD_NAME, 'LIKE', '%'. $name_ru .'%');
            })
            ->get()
        ;

        $data = '';
        foreach ($libraries as $key => $row) {
            $data .= '<tr>' .
                     '<td>'. ($key+1) .'</td>' .
                     '<td>'. $row->{ LibraryContract::FIELD_NAME_KZ } .'</td>' .
                     '<td>'. $row->{ LibraryContract::FIELD_NAME } .'</td>' .
                     '<td>'. $row->{ LibraryContract::FIELD_ADDRESS_KZ } .'</td>' .
                     '<td>'. $row->{ LibraryContract::FIELD_ADDRESS } .'</td>' .
                     '<td>'. $row->{ LibraryContract::FIELD_RUKOVODITEL_KZ } .'</td>' .
                     '<td>'. $row->{ LibraryContract::FIELD_RUKOVODITEL } .'</td>' .
                     '<td>'. $row->{ LibraryContract::FIELD_SCHEDULE_KZ } .'</td>' .
                     '<td>'. $row->{ LibraryContract::FIELD_SCHEDULE } .'</td>' .
                     '<td>'. $row->{ LibraryContract::FIELD_VIDY_USLUG_KZ } .'</td>' .
                     '<td>'. $row->{ LibraryContract::FIELD_VIDY_USLUG } .'</td>' .
                     '<td>'. $row->{ LibraryContract::FIELD_EMAIL } .'</td>' .
                     '<td>'. $row->{ LibraryContract::FIELD_OFFICIAL_SITE } .'</td>' .
                     '<td>'. $row->{ LibraryContract::FIELD_CONTACT_TELEFON } .'</td>' .
                     '</tr>';
        }

        return response()->json($data);
    }
}
