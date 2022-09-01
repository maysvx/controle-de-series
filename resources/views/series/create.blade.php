<x-layout title="Nova Serie">
    <a href="/series" class="btn btn-secondary mb-2">Voltar</a>
    <a href="/series" class="btn btn-success mb-2">Adicionar</a>

    <form action="/series/save" method="POST">
        @csrf
        <div class="mb-3">
            <label for="nome" class="form-label">Nome</label>
            <input type="text" class="form-control" id="nome" aria-describedby="nome" name="nome">

        </div>
    </form>

</x-layout>