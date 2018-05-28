<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Demande;
use Illuminate\Http\Request;

class DemandesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        $keyword = $request->get('search');
        $perPage = 25;

        if (!empty($keyword)) {
            $demandes = Demande::where('Nom du Produit', 'LIKE', "%$keyword%")
                ->orWhere('Date Fab', 'LIKE', "%$keyword%")
                ->orWhere('Date Exp', 'LIKE', "%$keyword%")
                ->orWhere('formeGalenique', 'LIKE', "%$keyword%")
                ->orWhere('client', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $demandes = Demande::latest()->paginate($perPage);
        }

        return view('admin.demandes.index', compact('demandes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.demandes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        
        $requestData = $request->all();
        
        Demande::create($requestData);

        return redirect('admin/demandes')->with('flash_message', 'Demande added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        $demande = Demande::findOrFail($id);

        return view('admin.demandes.show', compact('demande'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $demande = Demande::findOrFail($id);

        return view('admin.demandes.edit', compact('demande'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(Request $request, $id)
    {
        
        $requestData = $request->all();
        
        $demande = Demande::findOrFail($id);
        $demande->update($requestData);

        return redirect('admin/demandes')->with('flash_message', 'Demande updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        Demande::destroy($id);

        return redirect('admin/demandes')->with('flash_message', 'Demande deleted!');
    }
}
