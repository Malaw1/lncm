<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Reactif;
use Illuminate\Http\Request;

class ReactifsController extends Controller
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
            $reactifs = Reactif::where('idReactifs', 'LIKE', "%$keyword%")
                ->orWhere('designation', 'LIKE', "%$keyword%")
                ->orWhere('conditionnement', 'LIKE', "%$keyword%")
                ->orWhere('lot', 'LIKE', "%$keyword%")
                ->orWhere('fabriquant', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $reactifs = Reactif::latest()->paginate($perPage);
        }

        return view('reactifs.index', compact('reactifs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('reactifs.create');
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
        
        Reactif::create($requestData);

        return redirect('admin/reactifs')->with('flash_message', 'Reactif added!');
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
        $reactif = Reactif::findOrFail($id);

        return view('reactifs.show', compact('reactif'));
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
        $reactif = Reactif::findOrFail($id);

        return view('reactifs.edit', compact('reactif'));
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
        
        $reactif = Reactif::findOrFail($id);
        $reactif->update($requestData);

        return redirect('admin/reactifs')->with('flash_message', 'Reactif updated!');
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
        Reactif::destroy($id);

        return redirect('admin/reactifs')->with('flash_message', 'Reactif deleted!');
    }
}
