@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1 class="text-center">Painel de Controle</h1>
@stop

@section('content')
    <div class="container my-4">
        <div class="alert alert-info text-center">
            <h2>Bem-vindo ao Sistema de Gerenciamento de Alunos e Cursos!</h2>
            <p>Estamos felizes em tê-lo aqui. Este sistema foi desenvolvido para facilitar o gerenciamento de informações relacionadas a alunos e cursos, proporcionando uma experiência simples e eficiente para todos os usuários. Explore as funcionalidades disponíveis e, se precisar de ajuda, nossa equipe estará à disposição para auxiliar. Esperamos que tenha uma excelente experiência utilizando o sistema!</p>
            <strong>Seja bem-vindo!</strong>
        </div>
    </div>
@stop

@section('footer')
    <div class="text-center py-3">
        <p>&copy; Desenvolvido by ENCDev 2024.</p>
    </div>
@stop

@section('css')
    {{-- Add here extra stylesheets --}}
    {{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
@stop

@section('js')
    <script> console.log("Hi, I'm using the Laravel-AdminLTE package!"); </script>
@stop

