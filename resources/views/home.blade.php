<!DOCTYPE html>
<html lang="pt_BR">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>MyDashboard - {{ $title }}</title>
        
        <link href="{{ asset('css/app.css') }}" rel="stylesheet" />

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900" rel="stylesheet">
    </head>
    <body class="bg-blue-500 grid justify-items-center">
        @include('home.header')
        @include('home.content')
        @yield($content)
        @include('home.tools')
        @include('home.contact')
        @include('home.footer')
  
        <script>
            const corosselContainer = document.getElementsByClassName("carossel-Container");
            for (let index = 0; index < corosselContainer.length; index++) {
                let corosselItems = corosselContainer[index];
                
                let btnBack = document.getElementById('btnBack')
                let btnNext = document.getElementById('btnNext')
                let itens = corosselItems.getElementsByClassName('item')

                let posicaoAnterior = 0
                let mover = posicaoAnterior + 100
                
                
                btnNext.addEventListener('click', ()=>{
                    mover = posicaoAnterior + 100
                    if (mover < 200){
                        for(let c = 0; c < itens.length; c++ ){
                        itens[c].style.right = mover + '%'
                        posicaoAnterior = mover
                        }
                    }else{
                        for(let c = 0; c < itens.length; c++ ){
                            itens[c].style.right = '0%'
                            posicaoAnterior = 0
                            mover = 0
                        }
                    }
                })

                
                btnBack.addEventListener('click', ()=>{
                    mover = posicaoAnterior - 100
                    if (mover > 0){
                        for(let c = 0; c < itens.length; c++ ){
                        itens[c].style.right = mover + '%'
                        posicaoAnterior = mover
                        }
                    }else{
                        for(let c = 0; c < itens.length; c++ ){
                            itens[c].style.right = '0%'
                            posicaoAnterior = 0
                            mover = 0
                        }
                    }
                })
            }
            function scrollNext() {
                carousel.scrollBy({
                    left: carousel.offsetWidth,
                    behavior: 'smooth'
                });
            }
        </script>
    </body>
</html>
