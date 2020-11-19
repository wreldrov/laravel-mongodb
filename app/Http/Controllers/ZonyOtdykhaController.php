<?php

namespace App\Http\Controllers;


use App\Contracts\Entities\ZonyOtdykhaContract;
use App\ZonyOtdykha;
use Illuminate\Http\Request;

class ZonyOtdykhaController extends Controller
{
    public function index()
    {
        $data = ZonyOtdykha
            ::query()
            ->get()
        ;

        return view('zony-otdykha.index', compact('data'));
    }

    public function create()
    {
        return view('zony-otdykha.create');
    }

    public function store(Request $request)
    {
        ZonyOtdykha::create(array_only($request->all(), ZonyOtdykhaContract::FIELD_LIST));

        return redirect()->route('zony-otdykha.index');
    }

    public function edit(ZonyOtdykha $zonyOtdykha)
    {
        return view('zony-otdykha.edit', compact('zonyOtdykha'));
    }

    public function update(ZonyOtdykha $zonyOtdykha, Request $request)
    {
        $zonyOtdykha->update(array_only($request->all(), ZonyOtdykhaContract::FIELD_LIST));

        return redirect()->route('zony-otdykha.index');
    }

    public function delete(ZonyOtdykha $zonyOtdykha)
    {
        $zonyOtdykha->delete();

        return redirect()->route('zony-otdykha.index');
    }

    public function search(Request $request)
    {
        $name_kz = $request->get('name_kz');
        $name_ru = $request->get('name_ru');

        $zonyOtdykha = ZonyOtdykha
            ::query()
            ->when($name_kz, function ($query) use ($name_kz)
                {
                    $query->where(ZonyOtdykhaContract::FIELD_NAME_KZ, 'LIKE', '%' . $name_kz . '%');
                }
            )
            ->when($name_ru, function ($query) use ($name_ru)
                {
                    $query->where(ZonyOtdykhaContract::FIELD_NAME_RU, 'LIKE', '%' . $name_ru . '%');
                }
            )
            ->get()
        ;

        $data = '';
        foreach ($zonyOtdykha as $key => $row) {
            $data .= '<tr>' .
                     '<td>'. ($key+1) .'</td>' .
                     '<td>'. $row->{ ZonyOtdykhaContract::FIELD_SEZON } .'</td>' .
                     '<td>'. $row->{ ZonyOtdykhaContract::FIELD_NAME_KZ } .'</td>' .
                     '<td>'. $row->{ ZonyOtdykhaContract::FIELD_NAME_RU } .'</td>' .
                     '<td>'. $row->{ ZonyOtdykhaContract::FIELD_RAIGOR_KZ } .'</td>' .
                     '<td>'. $row->{ ZonyOtdykhaContract::FIELD_RAIGOR_RU } .'</td>' .
                     '<td>'. $row->{ ZonyOtdykhaContract::FIELD_ADDRESS_KZ } .'</td>' .
                     '<td>'. $row->{ ZonyOtdykhaContract::FIELD_ADDRESS_RU } .'</td>' .
                     '<td>'. $row->{ ZonyOtdykhaContract::FIELD_REJIM_KZ } .'</td>' .
                     '<td>'. $row->{ ZonyOtdykhaContract::FIELD_REJIM_RU } .'</td>' .
                     '<td>'. $row->{ ZonyOtdykhaContract::FIELD_USLUGI_KZ } .'</td>' .
                     '<td>'. $row->{ ZonyOtdykhaContract::FIELD_USLUGI_RU } .'</td>' .
                     '<td>'. $row->{ ZonyOtdykhaContract::FIELD_FIO_RUK } .'</td>' .
                     '<td>'. $row->{ ZonyOtdykhaContract::FIELD_GOD } .'</td>' .
                     '<td>' .
                     '<a style="display: inline" href="http://project.test/zony-otdykha/'. $row->{ ZonyOtdykhaContract::FIELD_ID } .'/edit">' .
                     '<span class="fa fa-edit"></span>' .
                     '</a>' .
                     '<a style="display: inline" href="http://project.test/zony-otdykha/'. $row->{ ZonyOtdykhaContract::FIELD_ID } .'/delete">' .
                     '<span class="fa fa-trash"></span>' .
                     '</a>' .
                     '</td>'.
                     '</tr>';
        }

        return response()->json(
            [
                'data'         => $data,
                'search_count' => $zonyOtdykha->count(),
                'total'        => ZonyOtdykha::query()->count(),
            ]
        );
    }
}
