<?php

namespace App\Http\Controllers;

use App\Models\VoitureModel;
use Illuminate\Http\Request;

class DisplayController extends Controller
{
    public function ShowDb(){
        $underFourThousand = VoitureModel::where('prix', '<' , 4000)->get();
        $aboveFourThousand = VoitureModel::where('prix', '>' , 4000)->get();
        // $reduction = VoitureModel::where('reduction','==' ,20)->get();

        return view('frontend.pages.display',compact('underFourThousand','aboveFourThousand'));
    }

    public function destroy($id){
        $destroy = VoitureModel::find($id);
        $destroy->delete();
        return redirect()->back();
    }
}
