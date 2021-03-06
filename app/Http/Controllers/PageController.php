<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Equipe;
use App\Models\Groupe;
use App\Models\Matche;
use App\Models\article;
use App\Models\Pronostic;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Collection;
use RealRashid\SweetAlert\Facades\Alert;

class PageController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $groupesName = Groupe::all();
        //alert()->success('Title', 'Lorem Lorem Lorem');
        return view('pages.rank', compact('groupesName'))->with('add', 'add');
    }
    public function liste()
    {
        /*$article = article::all();
        //$user = User::get();
        //$artz = article::find(1)->user();
        // $teams = ""; // Equipe::with('matchesD')->with('matchesE')->get();
        // $groups = Groupe::find(1)->equipes();
        // $matches = Matche::with('equipesD')->with('equipesE')->get();
        // $matcheUn =  Matche::where('id', '=', 3)->with('equipesD')->with('equipesE')->get();
        // $groupes = Groupe::all();
        // $groupes =  Groupe::with('matches')->get();
        // $groupesNE = Groupe ;
        // dd($groupes);
        // $users = \DB::select("SELECT DISTINCT nom FROM groupes as g , matches as m WHERE g.id = m.groupe_id ")->with('matches')->get();*/
        $users = DB::table('groupes')
            ->join('matches', 'groupes.id', '=', 'matches.groupe_id')
            ->select('groupes.id')
            ->distinct()->get();
        $groupesName = Groupe::all();
        /*$groupes = Groupe::with(['matches' => function ($query) {
            $query->where('groupe_id',  [1, 2]);
        }])->get();*/
        //dd($users);
        $grp = [];
        //$us = $users;
        foreach ($users as $u => $key) {
            array_push($grp, collect($key));
        }
        $groupes = Groupe::whereIn('id', $grp)->with('matches')->get();
        //Alert::success('Success Title', 'Success Message');
        return view('pages.showGroupe', compact('groupes', 'groupesName'));
    }

    // public function pronoliste()
    // {
    //     $groupesName = Groupe::all();
    //     // $users = DB::table('matches')
    //     //     ->join('groupes', 'groupes.id', '=', 'matches.groupe_id')
    //     //     ->join('matches', 'groupes.id', '=', 'matches.groupe_id')
    //     //     ->select('groupes.id')
    //     //     ->distinct()->get();
    //     $matchesPronostic = Pronostic::where('user_id', auth()->id())->with('matche')->get();
    //     $matchesDone = [];
    //     foreach ($matchesPronostic as $key => $value) {
    //         array_push($matchesDone, collect($value->matche_id));
    //     }
    //     // $prono = $matchesPronostic->diff(DB::table('matches')
    //     //     ->where('groupe_id', 1)
    //     //     ->whereNotIn('id', $matchesDone)
    //     //     ->get());
    //     // dd($prono);
    //     // $matchesNonjouer = DB::table('matches')
    //     //     ->where('groupe_id', 1)
    //     //     ->whereNotIn('id', $matchesDone)
    //     //     ->get();
    //     $matchesNonjouer = Matche::whereNotIn('id', $matchesDone)->orderBy('date_matche')->get();
    //     // initialisement c sa $matchesNonjouer = Matche::where('groupe_id', 1)->whereNotIn('id', $matchesDone)->get();
    //     //$prono = $matchesPronostic->diff(Matche::where('groupe_id', 1)->with('pronosticss')->get());
    //     //                                                              matchesPronostic  matchesNonjouer
    //     return view('prono.showAllProno', compact('groupesName', 'matchesNonjouer', 'matchesPronostic'));
    // }
    // public function prono($id)
    // {
    //     $groupesName = Groupe::all();
    //     $matchesPronostic = Pronostic::where('user_id', auth()->id())->with('matche')->get();
    //     $matchesDone = [];
    //     foreach ($matchesPronostic as $key => $value) {
    //         array_push($matchesDone, collect($value->matche_id));
    //     }
    //     $matchesNonjouer = Matche::where('groupe_id', $id)->whereNotIn('id', $matchesDone)->get();
    //     return view('prono.show', compact('groupesName', 'matchesNonjouer', 'matchesPronostic'));
    // }

    public function groupe($id)
    {
        $groupes = Groupe::whereId($id)->with('matches')->get();

        $groupesName = Groupe::all();
        //alert()->success('Title', 'Lorem Lorem Lorem');
        return view('pages.showGroupe', compact('groupes', 'groupesName'));
    }
}