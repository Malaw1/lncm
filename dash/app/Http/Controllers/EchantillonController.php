<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\echantillon;

class EchantillonController extends Controller
{
    public function addEchanillon(Request $request){
    	if ($request->isMethod('post')){
    		$data = $request->all();
    		//echo "<pre>"; print_r($data); die;
    		$echantillon = new echantillon;
    		$echantillon->dateRecu = $data['dateRecu'];
    		$echantillon->nomProduit = $data['nomProduit'];
    		$echantillon->formeGalenique = $data['formeGalenique'];
    		$echantillon->quantiteRecu = $data['quantiteRecu'];
    		$echantillon->quantiteLivree = $data['quantiteLivree'];
    		$echantillon->fournisseur = $data['fournisseur'];
    		$echantillon->dateFab = $data['dateFab'];
    		$echantillon->dateExp = $data['dateExp'];
    		$echantillon->save();
            return redirect('/admin/voir-echantillon')->with('flash_message_success','Echantillon  ajouté avec success');

    	}
    	return view('admin.echantillons.add_echan');
    }

    public function modifierEchantillons(Request $resqeust, $id = null){
        $echantillonsDetails = Echantillon::where(['id'=>$id])->first();
        return view('admin.echantillons.modifier_echantillons')->with(compact('echantillonsDetails'));
    }

    public function voirEchantillons(){
        $echantillons = echantillon::get();
        return view('admin.echantillons.voir_echantillons')->with(compact('echantillons'));
    }
}
