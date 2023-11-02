<?php

namespace App\Http\Controllers\aiCarRecord;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class record extends Controller
{
    public function test(Request $request)
    {
        return response()->apiResponse(101, $request->all());
    }
    public function testSql(Request $request)
    {
        try {
            $query = DB::select("SELECT * FROM DISTRICT");
            return response()->apiResponse(101, $query);
        } catch (\Throwable $e) {
            return response()->apiResponse(400, $e->getMessage());
        }
    }
    public function testUpdata(Request $request)
    {
        try {
            $fileName = $request->file->getClientOriginalName();
            Storage::disk('public')->putFileAs('image', $request->file, $fileName);
            return Storage::disk('public')->url('image/' . $fileName);
        } catch (\Throwable $e) {
            return response()->apiResponse(400, $e->getMessage());
        }
    }
}
