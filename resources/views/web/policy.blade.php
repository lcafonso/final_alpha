
@extends('layouts.main')

{{--Section Head--}}
@section('head')
    {{-- Another scripts and styles in head--}}

    <style>

        body{
            background: -webkit-linear-gradient(left, #393e42, #fff);
        }

        terms-page {
            display: block;
            min-height: 100vh;
            padding: 68px 10px;
            text-align: center;
            background-color: #fff;
            font-size: 0;
            line-height: 1;
        }
        .terms-page-wrap {
            overflow: hidden;
            max-width: 1000px;
            margin: 0 auto;
            text-align: left;
            line-height: 1.5;
        }
        terms-page h1 {
            margin: 40px 0;
            padding: 0 15px;
            font-size: 26px;
            font-weight: 600;
        }
        terms-page h2 {
            position: absolute;
            top: 25px;
            left: 10px;
            display: inline-block;
            max-width: 240px;
            text-align: left;
            vertical-align: top;
            color: #555;
            font-size: 18px;
            font-weight: 600;
        }
        terms-page p {
            display: inline-block;
            margin: 15px;
            padding: 0;
            color: #555;
            font-size: 14px;
            font-weight: 400;
        }
        terms-page section {
            position: relative;
            display: block;
            padding: 20px 10px 20px 250px;
            border-top: 1px solid #DDD;
        }
    </style>


@endsection

{{--Section footer--}}
@section('content')
    {{-- conteiner body --}}
    <terms-page>
        <div class="terms-page-wrap">
            <h1>Digital Landscape -  Política de Privacidade Regras gerais</h1>
            <p></p>

            <section>
                <p>
                    <strong>A Digitalandscap não compartilha informações pessoais de qualquer tipo com ninguém. </strong>
                     Não venderemos ou alugaremos seu nome ou informações pessoais a terceiros. Não vendemos, alugamos ou
                     fornecemos acesso externo à nossa lista de endereçamento ou a quaisquer dados que armazenamos. Todos
                     os dados que um usuário armazena por meio de nossas instalações são de propriedade total desse usuário
                     ou empresa. A qualquer momento, um usuário ou empresa é livre para pegar seus dados e sair ou
                     simplesmente excluir seus dados de nossas instalações.
                </p>
                <p>
                     A Digitalandscap coleta apenas as informações pessoais necessárias para você acessar e usar nossos
                    serviços. Essas informações pessoais incluem, sem limitação, nome e sobrenome, endereço de e-mail.
                </p>
                <p>
                    A Digitalandscap pode divulgar informações pessoais se for exigida por lei, mandado de busca, intimação,
                    ordem judicial ou investigação de fraude. Também podemos usar as informações pessoais de uma maneira
                    que não o identifique especificamente nem permita que você seja contatado, mas identifica determinados
                    critérios sobre os usuários do nosso Site em geral (como podemos informar terceiros sobre o número de
                    usuários registrados, número de usuários únicos). visitantes e as páginas mais procuradas.
                </p>
            </section>

            <section>
                <h2>Alterações sobre privacidade</h2>
                <p>
                    Se alterarmos nossos termos de uso, publicaremos essas alterações nesta página. Os usuários registrados
                    receberão um e-mail descrevendo as alterações feitas nos termos de uso.
                </p>

            </section>


        </div>
    </terms-page>

@endsection

{{--Section footer--}}
@section('footer')

    {{-- Another scripts and styles in footer --}}


@endsection








