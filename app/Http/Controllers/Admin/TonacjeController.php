<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\Models\Tonacje;
use Illuminate\Http\Request;

class TonacjeController extends Controller
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
            $tonacje = Tonacje::where('nazwaTonacji', 'LIKE', "%$keyword%")
                ->orWhere('stopien1', 'LIKE', "%$keyword%")
                ->orWhere('stopien2', 'LIKE', "%$keyword%")
                ->orWhere('stopien3', 'LIKE', "%$keyword%")
                ->orWhere('stopien4', 'LIKE', "%$keyword%")
                ->orWhere('stopien5', 'LIKE', "%$keyword%")
                ->orWhere('stopien6', 'LIKE', "%$keyword%")
                ->orWhere('stopien7', 'LIKE', "%$keyword%")
                ->orWhere('transpozycjaGoraCdur', 'LIKE', "%$keyword%")
                ->orWhere('transpozycjaDolCdur', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $tonacje = Tonacje::latest()->paginate($perPage);
        }

        return view('admin\Tonacje.tonacje.index', compact('tonacje'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin\Tonacje.tonacje.create');
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
        
        Tonacje::create($requestData);

        return redirect('admin/tonacje')->with('flash_message', 'Tonacje added!');
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
        $tonacje = Tonacje::findOrFail($id);

        return view('admin\Tonacje.tonacje.show', compact('tonacje'));
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
        $tonacje = Tonacje::findOrFail($id);

        return view('admin\Tonacje.tonacje.edit', compact('tonacje'));
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
        
        $tonacje = Tonacje::findOrFail($id);
        $tonacje->update($requestData);

        return redirect('admin/tonacje')->with('flash_message', 'Tonacje updated!');
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
        Tonacje::destroy($id);

        return redirect('admin/tonacje')->with('flash_message', 'Tonacje deleted!');
    }
}
