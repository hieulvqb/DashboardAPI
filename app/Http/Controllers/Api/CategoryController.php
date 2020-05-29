<?php

namespace App\Http\Controllers\Api;

use App\ModelsApi\Categories;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Response;

class CategoryController extends Controller
{

    public function index()
    {
        $cate = Categories::all();
         if ($cate) {
             return Response::json($cate);
         }
         Log::info('Lỗi kết nối, Vui lòng thử lại');
        return Response::json('Lỗi kết nối, Vui lòng thử lại');
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $cate = new Categories();
        $cate->name = $request->name;
        $cate->note = $request->note;
        if ($cate->save()) {
            return Response::json('success');
        }
        return Response::json('error');

    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
