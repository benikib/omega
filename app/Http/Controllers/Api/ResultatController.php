<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\ResultatResource;
use App\Models\Resultat;

use Illuminate\Support\Facades\Auth;
class ResultatController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $resultat = Resultat::all();
        return ResultatResource::collection($resultat);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            $resultat = new Resultat;
            $resultat->user_id = $request->user_id;
            $resultat->autre_id = $request->autre_id;
            $resultat->score = $request->score;
            //$resultat->timeout = "timeout";
            $resultat->save();
            if ($resultat) {
                return response()->json(['message' => 'Les resultat a ete envoyer avec succes'], 201);
            }
        } catch (\Throwable $th) {
            return response()->json(['message' => $th->getMessage()], 500);
        }
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
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
