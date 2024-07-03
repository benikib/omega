<?php

namespace App\Http\Controllers;

use App\Models\Autre;
use App\Models\Formation;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth ;
use App\Models\Reserver;
use Illuminate\Support\Facades\DB;
use App\Models\Resultat;

class AutreController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(){

        $autres = Autre::all();

        //dd($formations);
        $i = 0;
        return view("activites.jeux",compact("autres","i"));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }
    public function reserver_store(Request $request)
    {
        $request->validate([
        'formation_id' => 'required',
            ]);
            $user = Reserver::create([
                'user_id'=>$request->user_id,
                'formation_id'=>$request->formation_id,
            ]);

            $user_id= Auth::user()->id;

            return  redirect()->back()->with('success', 'creation avec success');;

    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $questionnaires= [];
        $jeux = Autre::find($id);
        $id_quiz =$id;
        $re_alreadys= DB::table('resultats')->where('user_id',Auth::user()->id)->where('autre_id',$id)->get();
        $questions = DB::table('quizzes')
        ->where('id_quiz',$id_quiz)
        ->get();

    foreach ($questions as $key => $question) {
    $questionnaires [] = json_decode($question->question);
}

//dd($questionnaires);
        $i=0;

        if( DB::table('resultats')->where('autre_id',$id)->where('user_id',Auth::user()->id)->exists()){
            $re_already =$re_alreadys[0];
            return view("pages.resultat",compact("questionnaires","re_already",'jeux'));
        }



        return view("activites.jeux",compact("questionnaires","id"));
    }
    public function reserver($id)
    {

        $formation = Formation::find($id);
        $re_already= DB::table('reservers')->where('formation_id',$id)->where('user_id',Auth::user()->id)->exists();



        return view("pages.reserver",compact("formation","re_already"));
    }
    public function resultat_store(Request $request)
    {

        try {


        $end_time = microtime(true);
        $elapsed_seconds = floor($end_time - $request->time);
            $score =0;
            $questions = DB::table('quizzes')
        ->where('id_quiz',$request->id)
        ->get();
        $re_already= DB::table('resultats')->where('autre_id',$request->id)->where('user_id',Auth::user()->id)->exists();
        if(!$re_already){
    foreach ($questions as $key => $question) {
     $questionnaire= json_decode($question->question);
    $questionnaires  = array(
        "questionnaires" => $questionnaire,
        "reponse" =>$request[$questionnaire->question],

    );

if($questionnaire->correct ==$request[$questionnaire->question] ){
         $score ++;
    }

}

           $resultat = new Resultat;
            $resultat->user_id = $request->id_user;
            $resultat->autre_id = $request->id;
            $resultat->score = $score;
            $resultat->timeout = $elapsed_seconds;
            $resultat->questionnaires = json_encode($questionnaires);
            $resultat->save();
            if ($resultat) {
                return response()->json(['message' => 'Les resultat a ete envoyer avec succes'], 201);
            }
//dd($request->all());


        return response()->json(['message' => $elapsed_seconds], 201);
        }
        return response()->json(['message' => $re_already], 201);
    }catch (\Throwable $th) {
            return response()->json(['message' => $th->getMessage()], 500);
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Autre $autre)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Autre $autre)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Autre $autre)
    {
        //
    }
}
