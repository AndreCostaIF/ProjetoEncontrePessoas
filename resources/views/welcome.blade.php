@include('cabecalho')

<div class="mt-5">
    <div class="alert alert-warning" role="alert">
        <h4 class="alert-heading">Ajude o Rio Grande do Sul!</h4>
        <p>
            Este é um site destinado a tentar ajudar as pessoas que estão procurando por parentes e amigos no Rio Grande do Sul. <br>
            Muitas pessoas acabaram se separando de suas familias e ficaram incomuniáveis em abrigos ou lugares de apoio. <br>
            
            Se você ou alguém está em um abrigo mas está sem comunicação com a familia, basta preencher o rápido formulário do site
            informando sua localização, telefone de contato do abrigo ou de alguém responsável e nome da pessoa que busca e torcer pra algum parente ou amigo
            entrar em contato. <br><br>

            Deus abençõe a todos!
        </p>
        <hr>
        <p class="mb-0">Por favor evite informações falsas nesse site, ele não pede cadastro prévio afim de agilizar o registro de pessoas desaparecidas.</p>
      </div>
</div>
<div class="row mt-5">
    <h1 class="text-center">Pessoas que buscam por suas familias</h1>
</div>
<div class="row p-2">
    <div  class="mb-3 d-flex justify-content-center">
        {{ $pessoas->onEachSide(5)->links() }}
    </div>
    


    {{-- INICIO FOREACH EM CADA PESSOA QUE VEIO DO BANCO --}}
    @foreach ($pessoas as $pessoa)
        <div class="col-sm-12 col-md-5 col-lg-4 col-xl-3 d-flex justify-content-center  mt-5 ">
            <div class="card shadow h-100" style="width: 18rem;">
                {{-- FOTO DA PESSOA --}}
                <img src="{{ url('img/fotos/' . $pessoa->foto) }}" height="350" class="card-img-top" alt="...">
                <div class="card-body">
                    {{-- NOME DA PESSOA --}}
                    <h5 class="card-title text-uppercase"> {{ $pessoa->nome }} </h5>
                    {{-- INFO DA PESSOA --}}
                    <div class="card-text">
                        <div>
                            <span class="fw-bold">localidade: </span>
                            @if ($pessoa->abrigo == 1)
                                <span class="fw-bold">Abrigo</span>
                            @elseif($pessoa->abrigo == 2)
                                <span class="fw-bold">Residência Privada / estabelecimento Privado</span>
                            @elseif($pessoa->abrigo == 0)
                            <span class="fw-bold">desaparecido(a)</span>
                            @endif
                        </div>
                        <div> <span class="fw-bold">Endereço: </span> <span>{{ $pessoa->endereco }},</span> Nº<span
                                class="numero">{{ $pessoa->numero }}</span> </div>
                        <div> <span class="fw-bold">Cidade: </span> <span>{{ $pessoa->cidade }} - RS </span></div>
                        <div> <span class="fw-bold">Contato: </span> <span>{{ $pessoa->contato }}</span></div>
                       
                        @if ($pessoa->outros != null)
                        <div class=" mt-3"> <span class="fw-bold">Outras informações: </span> <span>{{ $pessoa->outros }}</span></div>
                        @endif
                    </div>
                </div>
                {{-- BOTAO --}}
                {{-- <div class="botao p-2 text-center">
                <a href="#" class="btn btn-primary">Go somewhere</a>
              </div> --}}
            </div>
        </div>
    {{-- FIM DO FOREACH --}}
    @endforeach
    


</div>
<div  class="mb-3 d-flex justify-content-center">
    {{ $pessoas->links() }}
</div>
@include('rodape')
