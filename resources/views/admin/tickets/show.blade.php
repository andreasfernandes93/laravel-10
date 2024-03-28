<h1>Detalhes do Ticket {{ $ticket->id }} </h1>
<ul>
    <li>Assunto: {{ $ticket->subject }} </li>
    <li>Status: {{ $ticket->status }} </li>
    <li>Mensagem: {{ $ticket->message }} </li>
    <li>Criado em: {{ $ticket->created_at }} </li>
    <li>Atualizado em: {{ $ticket->updated_at }} </li>
</ul>

<a href="{{ route('tickets.index') }}">Voltar</a>

<form action="{{route('tickets.destroy', $ticket->id)}}" method="POST">
    @csrf
    @method('DELETE')
    <button type="submit">Deletar</button>
</form>
