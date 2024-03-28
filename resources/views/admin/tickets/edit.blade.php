<h1>Editar Ticket {{ $ticket->id }}</h1>
<form action="{{ route('tickets.update', $ticket->id) }}" method="POST">
 {{-- <input type="hidden" value="{{ csrf_token() }}" name="_token"> --}}
 @csrf
@method('PUT')
<input type="text" placeholder="Assunto" name="subject" value="{{ $ticket->subject }}">
<textarea name="message" cols="30" rows="10" placeholder="Mensagem">{{ $ticket->message }}</textarea>
<button type="submit">Editar</button>
<a href="{{ route('tickets.index') }}">Voltar</a>
</form>