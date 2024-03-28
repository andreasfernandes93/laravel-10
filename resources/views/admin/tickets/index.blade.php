<h1>Listagem dos Tickets</h1>

<a href="{{ route('tickets.create') }}">Criar Ticket</a>

<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Assunto</th>
            <th>Status</th>
            <th>Mensagem</th>
        </tr>
    </thead>
    <tbody>
       @foreach ($tickets as $ticket)
        <tr>
            <td>{{ $ticket->id }}</td>
            <td>{{ $ticket->subject }}</td>
            <td>{{ $ticket->status }}</td>
            <td>{{ $ticket->message }}</td>
            <td>
                <a href="{{ route('tickets.show', $ticket->id) }}">Ver</a>
                <a href="{{ route('tickets.edit', $ticket->id) }}">Editar</a>
            </td>
        </tr>
         @endforeach 
    </tbody>
</table>