<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Ticket;
use Illuminate\Http\Request;

class TicketController extends Controller
{
   
    public function create()
    {
        return view('admin.tickets.create');
    }

    public function store(Request $request, Ticket $ticket)
    {
        // pegando todos os dados do formulário
       $data = $request->all();
       // definindo o status do ticket como open
       $data['status'] = 'open';

       // criando um novo ticket com os dados do formulário no banco de dados
       $ticket->create($data);

       // redirecionando para a página de tickets
       return redirect()->route('tickets.index');
    }
    
    public function index(Ticket $ticket)
    {
        $tickets = $ticket->all();
        
        // return view('admin.tickets.index', ['tickets' => $tickets]); // opt2
        return view('admin.tickets.index', compact('tickets'));

    }
}
