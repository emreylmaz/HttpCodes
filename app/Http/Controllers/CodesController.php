<?php

namespace App\Http\Controllers;

use App\Models\Codes;
use Illuminate\Http\Request;
use function request as requestAlias;

class CodesController extends Controller
{
    public function index()
    {
        return Codes::all();
    }

    public function test()
    {
        return [
          "name"=>"emre"
        ];
    }

    public function store(Request $request,Codes $codes)
    {
        $request->validate([
            'status' => 'required',
            'code' => 'required'
        ]);

        $success = $codes ->create([
            'status' => request('status'),
            'code' => request('code')
        ]);
        return [
            'success' => $success
        ];
    }

    public function update(Request $request, Codes $codes)
    {
        $request->validate([
            'status' => 'required',
            'code' => 'required'
        ]);

        $success = $codes->update([
            'status' => request('status'),
            'code' => request('code')
        ]);

        return [
            'success' => $success
        ];
    }

    public function destroy(Codes $codes)
    {
        $success = $codes->delete();

        return [
            'success' => $success
        ];
    }

}
