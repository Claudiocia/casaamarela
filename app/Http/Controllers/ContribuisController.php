<?php

namespace App\Http\Controllers;

use App\Models\Contribui;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ContribuisController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $contribuis = Contribui::orderBy('lida', 'DESC')->paginate(7);
        return view('redat.contribuis.index', compact('contribuis'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('contribui');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        //dd($data);

        if($data['user'] == null){
            Validator::make($data, [
                'name' => ['required', 'string', 'max:255'],
                'email' => ['required', 'email', 'max:255'],
                'tema' =>  ['required'],
                'contribui' => ['required'],
                ],
                [
                    'name.required' => 'Favor informar seu nome',
                    'email.required' => 'Favor informar o seu email',
                    'tema.required' => 'Favor selecionar um tema',
                    'contribui.required' => 'Faltou a sua ideia!',
                ])->validate();
        }else{
            Validator::make($data, [
                'tema' =>  ['required'],
                'contribui' => ['required'],
            ],
                [
                    'tema.required' => 'Favor selecionar um tema',
                    'contribui.required' => 'Faltou a sua ideia!',
                ])->validate();
            $data['name'] = \Auth::user()->name;
            $data['email'] = \Auth::user()->email;
            $data['phone'] = \Auth::user()->celular;
            $data['user_id'] = \Auth::user()->id;
        }
        //dd($data);
        Contribui::create($data);
        $request->session()->flash('msg', 'Mensagem cadastrada com sucesso!');
        return redirect()->back();

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Contribui  $contribui
     * @return \Illuminate\Http\Response
     */
    public function show(Contribui $contribui)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Contribui  $contribui
     * @return \Illuminate\Http\Response
     */
    public function edit(Contribui $contribui)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Contribui  $contribui
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Contribui $contribui)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Contribui  $contribui
     * @return \Illuminate\Http\Response
     */
    public function destroy(Contribui $contribui)
    {
        //
    }
}