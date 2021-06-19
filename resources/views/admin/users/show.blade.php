@extends('layouts.casaamarela')

@section('conteudo')
<div class="p-6 sm:px-20 bg-white border-b border-gray-200">
    <div id="admin-content">
        <div class="container-admin">
            <div class="row">
                <div class="col-md-12">
                    <div class="w-auto p-3">
                        <div class="panel-heading-admin">
                            <h5>Perfil do usuário {{ $user->name }}</h5>
                        </div>
                        <div class="panel-body">
                            <div class="row btn-new-reset">
                                {!! Button::primary('Voltar')->asLinkTo(route('admin.users.index')) !!}
                                {!! Button::primary('Editar')->asLinkTo(route('admin.users.edit', ['user' => $user->id])) !!}
                                {!! Button::danger('Delete')
                                        ->asLinkTo(route('admin.users.destroy', ['user' => $user->id]))
                                        ->addAttributes(['onclick' => 'event.preventDefault();document.getElementById("form-delete").submit();'])
                             !!}
                                <?php $formDelete = FormBuilder::plain([
                                    'id' => 'form-delete',
                                    'route' => ['admin.users.destroy', 'user' => $user->id],
                                    'method' => 'DELETE',
                                    'style' => 'display:none',
                                ]); ?>
                                {!! form($formDelete) !!}
                            </div>
                            <div class="row">
                                <div id="register-show">
                                    <div class="row bloco-div-show desk">
                                        <div class="nome">
                                            <h6 class="block font-medium text-sm text-gray-700 label-show">Nome</h6>
                                            <div class="texto-show">
                                                {{ $user->name }}
                                            </div>
                                        </div>
                                        <div class="nome">
                                            <h6 class="block font-medium text-sm text-gray-700 label-show">Nome Social</h6>
                                            <div class="texto-show">
                                                {{ $user->nome_social }}
                                            </div>
                                        </div>
                                        <div class="nome">
                                            <h6 class="block font-medium text-sm text-gray-700 label-show">E-mail</h6>
                                            <div class="texto-show">
                                                {{ $user->email }}
                                            </div>
                                        </div>
                                        <div class="nome">
                                            <h6 class="block font-medium text-sm text-gray-700 label-show">Telefone</h6>
                                            <div class="texto-show">
                                                {{ $user->celular }}
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row bloco-div-show desk">
                                        <div class="nome dt-nasc">
                                            <h6 class="block font-medium text-sm text-gray-700 label-show">Matrícula</h6>
                                            <div class="texto-show">
                                                {{ $user->matricula }}
                                            </div>
                                        </div>
                                        <div class="nome dt-nasc">
                                            <h6 class="block font-medium text-sm text-gray-700 label-show">Identidade de Genero</h6>
                                            <div class="texto-show">
                                                @switch($user->genero)
                                                    @case('m')
                                                    Masculino
                                                    @break
                                                    @case('f')
                                                    Feminino
                                                    @break
                                                @endswitch
                                            </div>
                                        </div>
                                        <div class="nome dt-nasc">
                                            <h6 class="block font-medium text-sm text-gray-700 label-show">Associado?</h6>
                                            <div class="texto-show">
                                                {{ $user->matricula }}
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row bloco-div-show desk">
                                        <div class="nome dt-nasc">
                                            <h6 class="block font-medium text-sm text-gray-700 label-show">Ex-Aluno?</h6>

                                            <div class="texto-show">
                                                 Sim
                                            </div>

                                        </div>
                                        <div class="nome dt-nasc">
                                            <h6 class="block font-medium text-sm text-gray-700 label-show">Telefone</h6>
                                                <div class="texto-show">
                                                    {{ $user->celular }}
                                                </div>
                                        </div>
                                        <div class="nome dt-nasc">
                                            <h6 class="block font-medium text-sm text-gray-700 label-show">RG</h6>

                                                <div class="texto-show">
                                                 Não informado
                                                </div>
                                        </div>
                                    </div>
                                    <hr/>
                                    <div class="row bloco-div-show desk">
                                        <div class="nome">
                                            <h6 class="block font-medium text-sm text-gray-700 label-show">Endereço</h6>
                                            <div class="texto-show">
                                                {{ $user->matricula }}
                                            </div>
                                        </div>
                                        <div class="nome">
                                            <h6 class="block font-medium text-sm text-gray-700 label-show">Complemento</h6>
                                            <div class="texto-show">
                                                {{ $user->matricula }}
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row bloco-div-show desk" style="justify-content: left !important;">
                                        <div class="nome">
                                            <h6 class="block font-medium text-sm text-gray-700 label-show">Bairro</h6>
                                            <div class="texto-show">
                                                {{ $user->matricula }}
                                            </div>
                                        </div>
                                        <div class="nome dt-nasc rd_soc" style="margin-left: 35px !important;">
                                            <h6 class="block font-medium text-sm text-gray-700 label-show">CEP</h6>
                                            <div class="texto-show">
                                                {{ $user->matricula }}
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row bloco-div-show desk">
                                        <div class="nome endere">
                                            <h6 class="block font-medium text-sm text-gray-700 label-show">Cidade</h6>
                                            <div class="texto-show">
                                                {{ $user->matricula }}
                                            </div>
                                        </div>
                                    </div>
                                    <hr/>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
