<h1>Professors list</h1>


<br>
<br>


@isset($profs) 
    @foreach ($profs as $profs)
        
        Professor: {{$profs['nome']}}
        <br>
        Status: {{$profs['status']}}
        <br>
        Cnpj: {{$profs['cnpj']}}
        <br>
        Telefone: ({{$profs['ddd'] ?? ''}}) {{$prof['telefone'] ?? 'Não informado'}}
        <br>
        <br>
        <hr>
      Total: {{$loop->count}}     
    @endforeach
@endisset
    






@if (count($profs) > 0)
    <h1>There is some professors</h1>
@else
    <h1>Array is empty</h1>    
@endif