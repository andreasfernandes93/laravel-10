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

    public function show(string|int $id)
    {
        $ticket = Ticket::find($id);
        if (!$ticket) {
            return redirect()->back();
        }
        
        return view('admin.tickets.show', compact('ticket'));
    }

    public function edit(Ticket $ticket, string|int $id)
    {
        $ticket = $ticket->where('id', $id)->first();
        if (!$ticket) {
            return redirect()->back();
        }
        
        return view('admin.tickets.edit', compact('ticket'));
    }   

    public function update(Request $request, Ticket $ticket, string|int $id)
    {
        $ticket = $ticket->where('id', $id)->first();
        if (!$ticket) {
            return redirect()->back();
        }
        
        $data = $request->only(
            'subject',
            'message',
        );
        $ticket->update($data);
        
        return redirect()->route('tickets.index');
    }

    public function destroy(Ticket $ticket, string|int $id)
    {
        $ticket = $ticket->where('id', $id)->first();
        if (!$ticket) {
            return redirect()->back();
        }
        
        $ticket->delete();
        
        return redirect()->route('tickets.index');
    }
}
