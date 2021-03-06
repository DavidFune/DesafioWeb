<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Orcamento;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Illuminate\Pagination\Paginator;
class OrcamentoController extends Controller
{

    protected function validarOrcamento($request){
        $validator = Validator::make($request->all(), [
            "nome"      => "required",
            "vendedor"  => "required",
            "valor"     => "required | numeric",
            "descricao" => "required"
        ]);

        return $validator;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $qtd = $request['qtd'] ?: 10;
        $page = $request['page'] ?: 1;
        $buscaC = $request['buscarC'];
        $buscaV = $request['buscarV'];
        $data1 = $request['data1'];
        $data2 = $request['data2'];
        Paginator::currentPageResolver(function () use ($page){
            return $page;
        });

        if ($data1 && $data2) {
            $orcamentos = DB::table('orcamentos')->whereBetween('updated_at', [$data1, $data2])->orderBy('updated_at', 'desc')->paginate($qtd);
        }
        elseif ($buscaC && $data1 && $data2 && $buscaV) {
            
            $orcamentos = DB::table('orcamentos')->where('nome', '=', $buscaC,
            'vendedor','=',$buscaV)->whereBetween('updated_at', [$data1, $data2])->orderBy('updated_at', 'desc')->paginate($qtd);
        }
        elseif($buscaC){
            $orcamentos = DB::table('orcamentos')->where('nome', '=', $buscaC)->orderBy('updated_at', 'desc')->paginate($qtd);
        }
        elseif($buscaV){
            $orcamentos = DB::table('orcamentos')->where('vendedor', '=', $buscaV)->orderBy('updated_at', 'desc')->paginate($qtd);
        }
        else{
            //dd('test');  
            $orcamentos = DB::table('orcamentos')->orderBy('updated_at', 'desc')->paginate($qtd);
        }

        //$orcamentos = DB::table('orcamentos')->paginate($qtd);
        $orcamentos = $orcamentos->appends(Request::capture()->except('page'));

        //$users = DB::table('orcamentos')->orderBy('updated_at')->get();

        return view('orcamentos.index', compact('orcamentos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('orcamentos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       
        $validator = $this->validarOrcamento($request);
        if ($validator->fails()) {

            return redirect()->back()->withErrors($validator->errors());
        }
        $dados= $request->all();
        Orcamento::create($dados);
        return redirect()->route('orcamento.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $orcamento = Orcamento::find($id);
        return view('orcamentos.show', compact('orcamento'));    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $orcamento = Orcamento::find($id);
        return view('orcamentos.edit',compact('orcamento'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validator = $this->validarOrcamento($request);
        if ($validator->fails()) {

            return redirect()->back()->withErrors($validator->errors());
        }
        $orcamento = Orcamento::find($id);
        $dados = $request->all();
        $orcamento->update($dados);
        return redirect()->route('orcamento.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Orcamento::find($id)->delete();
        return redirect()->route('orcamento.index');
    }

    public function remover($id)
    {
        
        $orcamento = Orcamento::find($id);
        return view('orcamentos.remove',compact('orcamento'));
    }

    public function filter()
    {
        
        return view('orcamentos.search');
    }
}
