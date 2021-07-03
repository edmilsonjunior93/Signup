@extends('main')

@section("main-content")
    <section class="section">
        <table class="highlight">
            <thead>
                <tr>
                    <th>Nome Completo</th>
                    <th>E-mail</th>
                    <th>Data de Nascimento</th>
                    {{-- <th class="right-align">Options</th> --}}
                </tr>
            </thead>
            <tbody>
                @forelse ($names as $name)
                    <tr>
                        <td>{{$name->name}}</td>
                        <td>{{$name->email}}</td>
                        <td class="dd mm yyyy">{{$name->birthday}}</td>
                        {{-- <td class="right-align">Excluir - Remover</td> --}}
                    </tr>
                @empty
                    <tr>
                        <td colspan="2">Não existem cadastros.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>

        <div class="fixed-action-btn">
            <a class="btn-floating btn-large waves-effect waves-light" href="{{route("form")}}">
                <i class="large material-icons">add</i>
            </a>
        </div>
    </section>
@endsection
