<?php

namespace App\Http\Controllers;

use App\Models\Elected;
use Illuminate\Http\Request;
class ElectedController extends Controller
{
    public function getAllElcated($electio_id)
    {
        $elecate = Elected::with('user')->where('election_id', $electio_id)->get();
        dd($elecate);
        return view('elecate', ['elecate' => $elecate]);
    }
}
