<?php

namespace App\Http\Controllers;

use App\Contracts\Entities\InfoContract;
use App\Info;
use Illuminate\Http\Request;

class LibraryController extends Controller
{
    protected $type = InfoContract::TYPE_LIBRARY;

    public function index()
    {
        $libraries = Info
            ::query()
            ->where(InfoContract::FIELD_TYPE, $this->type)
            ->get()
        ;

        return view('library.index', compact('libraries'));
    }

    public function create()
    {
        return view('library.create');
    }

    public function store(Request $request)
    {
        Info::create(array_only($request->all(), InfoContract::FIELD_LIST));

        return redirect()->route('library.index');
    }

    public function edit(Info $library)
    {
        return view('library.edit', compact('library'));
    }

    public function update(Info $library, Request $request)
    {
        $library->update(array_only($request->all(), InfoContract::FIELD_LIST));

        return redirect()->route('library.index');
    }

    public function delete(Info $info)
    {
        $info->delete();

        return redirect()->route('library.index');
    }

    public function search(Request $request)
    {
        $name_kz = $request->get('name_kz');
        $name_ru = $request->get('name_ru');

        $libraries = Info
            ::query()
            ->where(InfoContract::FIELD_TYPE, $this->type)
            ->when($name_kz, function ($query) use ($name_kz)
                {
                    $query->where(InfoContract::FIELD_NAME_KZ, 'LIKE', '%' . $name_kz . '%');
                }
            )
            ->when($name_ru, function ($query) use ($name_ru)
                {
                    $query->where(InfoContract::FIELD_NAME, 'LIKE', '%' . $name_ru . '%');
                }
            )
            ->get()
        ;

        $data = '';
        foreach ($libraries as $key => $row) {
            $data .= '<tr>' .
                     '<td>'. ($key+1) .'</td>' .
                     '<td>'. $row->{ InfoContract::FIELD_NAME_KZ } .'</td>' .
                     '<td>'. $row->{ InfoContract::FIELD_NAME } .'</td>' .
                     '<td>'. $row->{ InfoContract::FIELD_ADDRESS_KZ } .'</td>' .
                     '<td>'. $row->{ InfoContract::FIELD_ADDRESS } .'</td>' .
                     '<td>'. $row->{ InfoContract::FIELD_RUKOVODITEL_KZ } .'</td>' .
                     '<td>'. $row->{ InfoContract::FIELD_RUKOVODITEL } .'</td>' .
                     '<td>'. $row->{ InfoContract::FIELD_SCHEDULE_KZ } .'</td>' .
                     '<td>'. $row->{ InfoContract::FIELD_SCHEDULE } .'</td>' .
                     '<td>'. $row->{ InfoContract::FIELD_VIDY_USLUG_KZ } .'</td>' .
                     '<td>'. $row->{ InfoContract::FIELD_VIDY_USLUG } .'</td>' .
                     '<td>'. $row->{ InfoContract::FIELD_EMAIL } .'</td>' .
                     '<td>'. $row->{ InfoContract::FIELD_OFFICIAL_SITE } .'</td>' .
                     '<td>'. $row->{ InfoContract::FIELD_CONTACT_TELEFON } .'</td>' .
                     '<td>' .
                     '<a style="display: inline" href="http://project.test/library/'. $row->{ InfoContract::FIELD_ID } .'/edit">' .
                     '<span class="fa fa-edit"></span>' .
                     '</a>' .
                     '<a style="display: inline" href="http://project.test/library/'. $row->{ InfoContract::FIELD_ID } .'/delete">' .
                     '<span class="fa fa-trash"></span>' .
                     '</a>' .
                     '</td>'.
                     '</tr>';
        }

        return response()->json(
            [
                'data'         => $data,
                'search_count' => $libraries->count(),
                'total'        => Info::query()
                                      ->where(InfoContract::FIELD_TYPE, $this->type)
                                      ->count(),
            ]
        );
    }
}
