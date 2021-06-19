<main id="main">
<!-- ======= Features Section ======= -->
<section id="features" class="features">
    <div class="container hero-my" data-aos="fade-up">
        <!-- Feature Tabs -->
        <div class="row feture-tabs" data-aos="fade-up">
            <div class="col-lg-12">
                <h3>Proposta de Plano de Gestão dentro da matriz SWOT</h3>

                <!-- Tabs -->
                <ul class="nav nav-pills mb-3">
                    @foreach($dimensions as $dimension)
                        <li>
                            <a class="nav-link" data-bs-toggle="pill" href="#{{$dimension->sigla}}">{!! $dimension->sigla !!}</a>
                        </li>
                    @endforeach
                </ul><!-- End Tabs -->

                <!-- Tab Content -->
                <div class="tab-content">
                    @foreach($dimensions as $dimension)
                        @if($dimension->sigla == 'Grad')
                            <div class="tab-pane fade show active" id="{!!$dimension->sigla!!}">
                        @else
                            <div class="tab-pane fade show" id="{!!$dimension->sigla!!}">
                        @endif
                                <?php
                                $linkEditDin = route('redat.dimensions.edit', ['dimension' => $dimension->id]);
                                $linkShowDin = route('redat.dimensions.show', ['dimension' => $dimension->id]);
                                ?>
                                <h6 style="font-weight: bold; color: #0b198f; text-transform: uppercase;">{{$dimension->name. "  "}} {!! \Bootstrapper\Facades\Button::LINK('<i class="fas fa-pencil-alt"></i>')->asLinkTo($linkEditDin)->addClass(['class' => 'my-fa'])." | ".
                                        \Bootstrapper\Facades\Button::LINK('<i class="fas fa-eye"></i>')->asLinkTo($linkShowDin)->addClass(['class' => 'my-fa']); !!}</h6>
                                <p>{!! $dimension->introd !!}</p>
                                <h5>Eixos</h5>
                                <?php

                                $eixos = \App\Models\Eixo::where('dimension_id', '=', $dimension->id)->get();
                                ?>
                                @foreach($eixos as $eixo)
                                    <?php
                                    $linkEdit = route('redat.eixos.edit', ['eixo' => $eixo->id]);
                                    $linkShow = route('redat.eixos.show', ['eixo' => $eixo->id]);
                                    ?>
                                    <div class="d-flex align-items-center mb-2">
                                        <i class="bi bi-check2"></i>
                                        <h4>{{ $eixo->name }}</h4>{!! \Bootstrapper\Facades\Button::LINK('<i class="fas fa-pencil-alt"></i>')->asLinkTo($linkEdit)->addClass(['class' => 'my-fa'])." | ".
                                        \Bootstrapper\Facades\Button::LINK('<i class="fas fa-eye"></i>')->asLinkTo($linkShow)->addClass(['class' => 'my-fa']); !!}
                                    </div>
                                    <div class="d-flex justify-content-between">
                                    <div class="my-eixos">
                                        @if($eixo->forca != 'null')
                                            <h6>Forças / Potencialidades</h6>
                                            <p>Conteúdo Ativo</p>
                                        @else
                                            <h6>Forças / Potencialidades</h6>
                                            <p>Matriz ainda não definida</p>
                                        @endif
                                    </div>
                                    <div class="my-eixos">
                                        @if($eixo->fraqu != 'null')
                                            <h6>Fraquezas / Fragilidades</h6>
                                            <p>Conteúdo Ativo</p>
                                        @else
                                            <h6>Fraquezas / Fragilidades</h6>
                                            <p>Matriz ainda não definida</p>
                                        @endif
                                    </div>
                                    <div class="my-eixos">
                                        @if($eixo->oport != 'null')
                                            <h6>Oportunidades</h6>
                                            <p>Conteúdo Ativo</p>
                                        @else
                                            <h6>Oportunidades</h6>
                                            <p>Matriz ainda não definida</p>
                                        @endif
                                    </div>
                                    <div class="my-eixos">
                                        @if($eixo->ameac != 'null')
                                            <h6>Ameaças</h6>
                                            <p>Proposta ativa</p>
                                        @else
                                            <h6>Ameaças</h6>
                                            <p>Matriz ainda não definida</p>
                                        @endif
                                    </div>
                                    </div>
                                @endforeach
                            </div>
                    @endforeach
                </div><!-- End TabContent -->
        </div><!-- End Feature Tabs -->
    </div>
</section>
</main>
