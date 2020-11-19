<?php

namespace App\Http\Controllers;

use App\Contracts\Entities\KyzylordaInfoContract;
use App\KyzylordaInfo;
use Illuminate\Http\Request;

class KyzylordaInfoController extends Controller
{
    public function index()
    {
        $data = KyzylordaInfo
            ::query()
            ->get()
        ;

        return view('kyzylorda-info.index', compact('data'));
    }

    public function create()
    {
        return view('kyzylorda-info.create');
    }

    public function store(Request $request)
    {
        KyzylordaInfo::create(array_only($request->all(), KyzylordaInfoContract::FIELD_LIST));

        return redirect()->route('kyzylorda-info.index');
    }

    public function edit(KyzylordaInfo $kyzylordaInfo)
    {
        return view('kyzylorda-info.edit', compact('kyzylordaInfo'));
    }

    public function update(KyzylordaInfo $kyzylordaInfo, Request $request)
    {
        $kyzylordaInfo->update(array_only($request->all(), KyzylordaInfoContract::FIELD_LIST));

        return redirect()->route('kyzylorda-info.index');
    }

    public function delete(KyzylordaInfo $kyzylordaInfo)
    {
        $kyzylordaInfo->delete();

        return redirect()->route('kyzylorda-info.index');
    }

    public function search(Request $request)
    {
        $name_kz = $request->get('name_kz');
        $name_ru = $request->get('name_ru');

        $kyzylordaInfo = KyzylordaInfo
            ::query()
            ->when($name_kz, function ($query) use ($name_kz)
                {
                    $query->where(KyzylordaInfoContract::FIELD_NAME_KZ, 'LIKE', '%' . $name_kz . '%');
                }
            )
            ->when($name_ru, function ($query) use ($name_ru)
                {
                    $query->where(KyzylordaInfoContract::FIELD_NAME_RU, 'LIKE', '%' . $name_ru . '%');
                }
            )
            ->get()
        ;

        $data = '';
        foreach ($kyzylordaInfo as $key => $row) {
            $data .= '<tr>' .
                     '<td>'. ($key+1) .'</td>' .
                     '<td>'. $row->{ KyzylordaInfoContract::FIELD_YAZIK } .'</td>' .
                     '<td>'. $row->{ KyzylordaInfoContract::FIELD_NAME_KZ } .'</td>' .
                     '<td>'. $row->{ KyzylordaInfoContract::FIELD_NAME_RU } .'</td>' .
                     '<td>'. $row->{ KyzylordaInfoContract::FIELD_ADDRESS_KZ } .'</td>' .
                     '<td>'. $row->{ KyzylordaInfoContract::FIELD_ADDRESS_RU } .'</td>' .
                     '<td>'. $row->{ KyzylordaInfoContract::FIELD_PERIOD_KZ } .'</td>' .
                     '<td>'. $row->{ KyzylordaInfoContract::FIELD_PERIOD_RU } .'</td>' .
                     '<td>'. $row->{ KyzylordaInfoContract::FIELD_TERRITORIA_KZ } .'</td>' .
                     '<td>'. $row->{ KyzylordaInfoContract::FIELD_TERRITORIA_RU } .'</td>' .
                     '<td>'. $row->{ KyzylordaInfoContract::FIELD_FIO_RUK } .'</td>' .
                     '<td>'. $row->{ KyzylordaInfoContract::FIELD_NAPRAVLENIE_KZ } .'</td>' .
                     '<td>'. $row->{ KyzylordaInfoContract::FIELD_NAPRAVLENIE_RU } .'</td>' .
                     '<td>' .
                     '<a style="display: inline" href="http://project.test/kyzylorda-info/'. $row->{ KyzylordaInfoContract::FIELD_ID } .'/edit">' .
                     '<span class="fa fa-edit"></span>' .
                     '</a>' .
                     '<a style="display: inline" href="http://project.test/kyzylorda-info/'. $row->{ KyzylordaInfoContract::FIELD_ID } .'/delete">' .
                     '<span class="fa fa-trash"></span>' .
                     '</a>' .
                     '</td>'.
                     '</tr>';
        }

        return response()->json(
            [
                'data'         => $data,
                'search_count' => $kyzylordaInfo->count(),
                'total'        => KyzylordaInfo::query()->count(),
            ]
        );
    }
}
