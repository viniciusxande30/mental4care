<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class NovoEmail extends Mailable
{
    use Queueable, SerializesModels;

    public $dados;

    public function __construct($dados)
    {
        $this->dados = $dados;
    }

    public function build()
    {
        return $this->from($this->dados['email'])
                    ->subject('Nova mensagem do formulário de contato')
                    ->view('nosso-programa')
                    ->with(['dados' => $this->dados]);
    }
}