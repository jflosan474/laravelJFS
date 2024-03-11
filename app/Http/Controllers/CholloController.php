<?php
namespace App\Http\Controllers;
use App\Models\Chollo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect as FacadesRedirect;
class CholloController extends Controller
{
   

    public function destacados()
    {
        // Lógica para obtener los chollos destacados
        $chollosDestacados = Chollo::orderBy('created_at', 'desc')->take(3)->get();

        return view('chollos.destacados', ['chollosDestacados' => $chollosDestacados]);
    }


    public function destroy(Chollo $chollo)
    {
        $chollo->delete();
        return Redirect::to('/chollos');
    }



    public function show(Chollo $chollo)
    {
        return view('chollos.show', compact('chollo'));
    }
    



    public function index()
    {
        $chollos = Chollo::all();
       // dd($chollos);
        return view('chollos.index', ['chollos' => $chollos]);
    }

    public function create()
    {
        return view('chollos.create');
    }

    public function store(Request $request)
    {
        Chollo::create($request->all());
        return redirect()->route('chollos.index');
    }

    public function edit(Chollo $chollo)
    {
        return view('chollos.edit', compact('chollo'));
    }

    public function update(Request $request, Chollo $chollo)
    {
        $chollo->update($request->all());
        return redirect()->route('chollos.index');
    }
}