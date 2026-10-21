<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Resources\BukuResource;
use App\Models\Buku; 

class BukuApiController extends Controller
{
    public function index()
    {
        return BukuResource::collection(Buku::all());
    }
    public function store(Request $request)
    {
        //
    }
    public function show(Buku $buku)
    {
        return new BukuResource($buku);
    }

    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
