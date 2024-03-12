<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\NovoEmail;
use Illuminate\Support\Facades\Mail;

class EmailController extends Controller
{
    public function enviarEmail(Request $request)
{
    // Valide os dados do formulário se necessário
    // Selecionar os campos do formulário que você deseja incluir no e-mail
    $dadosFormulario = $request->only(['nome', 'email', 'empresa','qtd','telefone','mensagem']);

    Mail::to('comercial@mental4care.com.br')->send(new NovoEmail($dadosFormulario));

    // Retorne uma resposta adequada após o envio do e-mail, como redirecionar de volta ao formulário
    return redirect()->back()->with('success', 'E-mail enviado com sucesso!');
}
}
