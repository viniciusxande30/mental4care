<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\NovoEmail;
use Illuminate\Support\Facades\Mail;

class EmailController extends Controller
{
    public function enviarEmail(Request $request)
{
    // // Valide os dados do formulário se necessário
    // // Selecionar os campos do formulário que você deseja incluir no e-mail
    // $dadosFormulario = $request->only(['nome', 'email', 'empresa','qtd','telefone','mensagem']);

    // Mail::to('comercial@mental4care.com.br')->send(new NovoEmail($dadosFormulario));

    // // Retorne uma resposta adequada após o envio do e-mail, como redirecionar de volta ao formulário
    // return redirect()->back()->with('success', 'E-mail enviado com sucesso!');





    $destinatarios = [
        'comercial@mental4care.com.br' => 'Nome Destinatário 1',
    ];
    
    // Validação dos dados do formulário
    $request->validate([
        'nome' => 'required|string|max:255',
        'email' => 'required|email|max:255',
        'mensagem' => 'required|string',
    ]);

    // Envio do e-mail
    $dadosEmail = [
        'nome' => $request->nome,
        'email' => $request->email,
        'empresa' => $request->email,
        'qtd' => $request->email,
        'telefone' => $request->email,
        'mensagem' => $request->mensagem,
    ];

    foreach ($destinatarios as $email => $nome) {
        Mail::to($email, $nome)->send(new NovoEmail($dadosEmail));
    }


    return redirect()->back()->with('mensagem', 'E-mail enviado com sucesso!');
}
}
