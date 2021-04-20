<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreEnderecoRequest;
use App\Models\Endereco;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Log;

class EnderecoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index(Request $request)
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * @param StoreEnderecoRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(StoreEnderecoRequest $request)
    {
        try {
            Endereco::create($request->validated());

            return response()->json([
                'message' => 'Endereço cadastrado com sucesso!'
            ]);
        } catch (\Throwable $e) {
            Log::error($e->getMessage());

            return response()->json([
                'error' => 'Endereço não pode ser cadastrado!'
            ]);
        }
    }

    /**
     * Display the specified resource.
     *
     *
     * @param int $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function show(int $id)
    {
        try {
            $endereco = Endereco::find($id);

            return response()->json($endereco);
        } catch (\Throwable $e) {
            return response()->json(['error' => 'Endereço não pode ser encontrado!']);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
