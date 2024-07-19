<div class="card p-4 mb-4">
    <div class="card p-2 mb-4 bg-light">
        <h5>{{ $title }}</h5>
    </div>

    <div class="p-2">
        @include('livewire.admin.crud.table.message')
    </div>

    <form wire:submit.prevent="{{ isset($data['id']) ? ($type == 'update' ? 'update' : 'destroy') : 'store' }}">
        @include($form)

        <div class="text-center">
            @if (isset($data['id']))
                @if ($type == 'update')
                    <button type="submit" class="btn btn-primary btn-block"><i class="fas fa-edit"></i> ATUALIZAR</button>
                @endif
                @if ($type == 'delete')
                    <button type="submit" class="btn btn-danger btn-block"><i class="fas fa-times"></i> REMOVER</button>
                @endif
            @else
                <button type="button" wire:click="store" class="btn btn-primary btn-block"><i class="fa fa-save"></i> SALVAR</button>
            @endif
            <button data-bs-dismiss="modal" wire:click="$emit('closeFormCrud')" type="button" class="btn btn-secondary btn-block"><i
                    class="fas fa-times"></i> CANCELAR</button>
        </div>
    </form>

    {{-- <div>
        <div>
            <label for="nome">documento:</label>
            <input type="text" wire:model.defer="documento_provab" id="documento_provab">
            @error('documento_provab')
                {{ $message }}
            @enderror
    
            <br>
    
            <label for="imagem">imagem</label>
            <input type="file" wire:model="documento_provab" id="">
            @error('nome')
                {{ $message }}
            @enderror
    
    
            <button wire:submit.prevent="salvar">Salvar</button>
        </div>
        <hr>
    
       
    
        <table>
            @forelse ($documentos as $documento)
                <tr>
                    <td>{{ $documento->user_id }}</td>
                    <td>{{ $documento->id }}</td>
                    <td>
                        <h1>{{ $documento->documento_provab }}</h1>
                        <h1>{{ $documento->documento_solicitacao_isencao }}</h1>
                        <h1>{{ $documento->documento_ampla_concorrencia }}</h1>
                    </td>
                    <td>
                        @if ($documento->getFirstMedia('images'))
                            <img src="{{ asset('storage/' . $documento->getFirstMedia('images')->id . '/' . $documento->getFirstMedia('images')->file_name) }}"
                                alt="Imagem do Documento">
                        @else
                            <span>Sem imagem</span>
                        @endif
                    </td>
                    <td>
                        <button wire:click="editar({{ $documento->id }})">Editar registro</button>
                        <button wire:click="excluirImagem({{ $documento->id }})">Apagar Imagem</button>
                        <button wire:click="excluir({{ $documento->id }})">Apagar registro</button>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="4">
                        <h1>sem nada</h1>
                    </td>
                </tr>
            @endforelse
        </table>
    </div> --}}
    
</div>
