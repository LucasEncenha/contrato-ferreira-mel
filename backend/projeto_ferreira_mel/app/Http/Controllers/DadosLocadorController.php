<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\DadosLocador;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Log;
use Carbon\Carbon;
use Throwable;

class DadosLocadorController extends Controller
{
    public function store(Request $param) {
        try {
            $validate = $param->validate([
                'dl_valor' => 'required|numeric',
                'dl_valor_comprometido' => 'required|numeric',
                'dl_data_entrada' => 'required|date',
                'dl_data_saida' => 'required|date',
                'dl_hora_entrada' => ['required', 'regex:/^\d{2}:\d{2}$/'],
                'dl_hora_saida' => ['required', 'regex:/^\d{2}:\d{2}$/'],

            ]);

            $dados = new DadosLocador;
            $dados->fill($validate);
            $dados->dl_token = Str::random(40);
            $dados->save();
    
            return redirect()->route('paginaLink', ['token' => $dados->dl_token]);
    
        } catch (Throwable $th) {
            return response()->json([
                'error' => true,
                'message' => $th->getMessage()
            ], 500);
        }
    }
    

    public function buscaToken($token){
        try {
            $dados = DadosLocador::where('dl_token', $token)->first();

            if (!$dados) {
                return response()->json([
                    'error' => true,
                    'message' => 'Token inválido ou dados não encontrados.'
                ], 404);
            }

            $dadosArray = $dados->toArray();
            $dadosArray['dl_data_entrada'] = Carbon::parse($dados->dl_data_entrada)->format('d/m/Y');
            $dadosArray['dl_data_saida'] = Carbon::parse($dados->dl_data_saida)->format('d/m/Y');
            $dadosArray['dl_hora_entrada'] = Carbon::parse($dados->dl_hora_entrada)->format('H:i');
            $dadosArray['dl_hora_saida'] = Carbon::parse($dados->dl_hora_saida)->format('H:i');

            return response()->json([
                'success' => true,
                'data' => $dadosArray
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'error' => true,
                'message' => 'Erro interno ao buscar dados.'
            ], 500);
        }
    }

    public function deleteToken(Request $param, $token) {
        try {
            Log::info("try");
            Log::info($token);
            $dados = DadosLocador::where('dl_token', $token)->first();
            Log::info($dados);

            $dados->dl_token = "";
            Log::info($dados);
            $dados->save();

            return response()->json([
                'success' => true,
                'message' => 'Token atualizado com sucesso.'
            ]);

        } catch (\Exception $e) {
            Log::info("catch");
            Log::info($e);
            return response()->json([
                'error' => true,
                'message' => 'Erro interno ao buscar dados.'
            ], 500);
        }
    }
}
