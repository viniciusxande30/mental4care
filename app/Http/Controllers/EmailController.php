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

    Mail::to('comercial@mental4care.com.br')->send(new NovoEmail($request->all()));

    // Retorne uma resposta adequada após o envio do e-mail, como redirecionar de volta ao formulário
    return redirect()->back()->with('success', 'E-mail enviado com sucesso!');
}
}
