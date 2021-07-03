@extends('main')

@section('main-content')
    <section class="section">
        <form action="{{route('add')}}" method="POST">
            @csrf
            <div class="input-field">
                <input type="text" name="name" id="name"/>
                <label for="name">Nome Completo</label>
                @error('name')
                    <span class="red-text text-accent-3"><small>{{$message}}</small></span>
                @enderror
            </div>
            <div class="input-field">
                <input type="email" name="email" id="email"/>
                <label for="email">E-mail</label>
                @error('email')
                    <span class="red-text text-accent-3"><small>{{$message}}</small></span>
                @enderror
            </div>
            <div class="input-field">
                <input type="date" name="birthday" id="birthday" class="datepicker">
                <label for="birthday">Data de Nascimento</label>
                @error('birthday')
                    <span class="red-text text-accent-3"><small>{{$message}}</small></span>
                @enderror
            </div>
            <div class="input-field">
                <input type="password" name="password" id="password"/>
                <label for="password">Senha</label>
                @error('password')
                    <span class="red-text text-accent-3"><small>{{$message}}</small></span>
                @enderror
            </div>
            <div class="right-align">
                <a class="btn-flat waves-effect" href="{{url()->previous()}}">Cancelar</a>
                <button class="btn waves-effect waves-light" type="submit">Salvar</button>
            </div>
        </form>
    </section>
@endsection
