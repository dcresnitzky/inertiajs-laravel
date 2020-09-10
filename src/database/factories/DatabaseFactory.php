<?php

use App\JobPosition;
use App\Tag;
use Faker\Generator as Faker;

$jobs = [
    'Analista de',
    'Desenvolvedor',
    'Gerente de',
    'Auxiliar de',
    'Diretor de'
];

$levels = [
    'Junior',
    'Pleno',
    'Senior',
    'Especialista',
];

$functions = [
    'DevOps',
    'Php',
    'RH',
    'Atendimento',
    'Infraestrutura',
    'Sistemas',
    'Javascript',
    'MySql',
    'Apache',
    'VueJs',
    'Lumen',
    'Laravel',
    'Postgres',
    'Certificação Digital',
    'GCP',
    'Novos Negócios',
    'Marketing',
    'Administrativo',
    'Financeiro',
    'Graylog',
    'Git',
    'Gitlab',
    'Agil',
    'Ciências de Dados',
    'Engenharia de Software',
    'Arquitetura',
    'Backend',
    'Fullstack',
    'Frontend',
    'Segurança',
    'Limpeza',
    'Almoxarifado'
];

$description = '<div class="description">
        <div class="flex">
            <div class="share-linkedin pb-1 mr-1">
              <script src="//platform.linkedin.com/in.js" type="text/javascript">lang: en_US</script>
              <span class="IN-widget" data-lnkd-debug="<script type=&quot;IN/Share+init&quot; data-url=&quot;http://viavarejo.gupy.io/jobs/216054?jobBoardSource=gupy_public_page?dt=2020090965402&quot;></script>" style="display: inline-block; line-height: 1; vertical-align: bottom; padding: 0px; margin: 0px; text-indent: 0px; text-align: center;"><span style="padding: 0px !important; margin: 0px !important; text-indent: 0px !important; display: inline-block !important; vertical-align: bottom !important; font-size: 1px !important;"><button class="IN-2bc0215c-7188-4274-b598-1969e06d4d7c-1G9ISYhSF8XoOmdcl0yKDu"><xdoor-icon aria-hidden="true"><svg viewBox="0 0 24 24" width="24px" height="24px" x="0" y="0" preserveAspectRatio="xMinYMin meet">
      <g style="fill: currentColor">
        <rect x="-0.003" style="fill:none;" width="24" height="24"></rect>
        <path style="" d="M20,2h-16c-1.1,0-2,0.9-2,2v16c0,1.1,0.9,2,2,2h16c1.1,0,2-0.9,2-2V4C22,2.9,21.1,2,20,2zM8,19h-3v-9h3V19zM6.5,8.8C5.5,8.8,4.7,8,4.7,7s0.8-1.8,1.8-1.8S8.3,6,8.3,7S7.5,8.8,6.5,8.8zM19,19h-3v-4c0-1.4-0.6-2-1.5-2c-1.1,0-1.5,0.8-1.5,2.2V19h-3v-9h2.9v1.1c0.5-0.7,1.4-1.3,2.6-1.3c2.3,0,3.5,1.1,3.5,3.7V19z"></path>
      </g>
    </svg></xdoor-icon>Share</button></span></span>
            </div>
            <div class="share-facebook pt-1">
              <div class="fb-share-button fb_iframe_widget" data-href="http://viavarejo.gupy.io/jobs/216054?jobBoardSource=gupy_public_page?dt=2020090965402" data-layout="button" data-size="small" data-mobile-iframe="true" fb-xfbml-state="rendered" fb-iframe-plugin-query="app_id=1653588738258091&amp;container_width=37&amp;href=http%3A%2F%2Fviavarejo.gupy.io%2Fjobs%2F216054%3FjobBoardSource%3Dgupy_public_page%3Fdt%3D2020090965402&amp;layout=button&amp;locale=en_US&amp;mobile_iframe=true&amp;sdk=joey&amp;size=small"><span style="vertical-align: bottom; width: 67px; height: 20px;"><iframe name="f9a8a91365b18" width="1000px" height="1000px" data-testid="fb:share_button Facebook Social Plugin" title="fb:share_button Facebook Social Plugin" frameborder="0" allowtransparency="true" allowfullscreen="true" scrolling="no" allow="encrypted-media" src="https://web.facebook.com/v2.8/plugins/share_button.php?app_id=1653588738258091&amp;channel=https%3A%2F%2Fstaticxx.facebook.com%2Fx%2Fconnect%2Fxd_arbiter%2F%3Fversion%3D46%23cb%3Df26f3278cde84ec%26domain%3Dviavarejo.gupy.io%26origin%3Dhttps%253A%252F%252Fviavarejo.gupy.io%252Ffe6ef127e7603%26relation%3Dparent.parent&amp;container_width=37&amp;href=http%3A%2F%2Fviavarejo.gupy.io%2Fjobs%2F216054%3FjobBoardSource%3Dgupy_public_page%3Fdt%3D2020090965402&amp;layout=button&amp;locale=en_US&amp;mobile_iframe=true&amp;sdk=joey&amp;size=small" style="border: none; visibility: visible; width: 67px; height: 20px;" class=""></iframe></span></div>
            </div>
          </div>
      <h2 class="mb-2">Descrição</h2>
      <p><span style="color: rgb(74, 74, 74); background-color: inherit;">Sabemos que tecnologia será o "</span><em style="color: rgb(74, 74, 74); background-color: inherit;">drive</em><span style="color: rgb(74, 74, 74); background-color: inherit;">" de crescimento desta virada e estamos dispostos a investir pesado e com prioridade. Passamos por um&nbsp;</span><em style="color: rgb(74, 74, 74); background-color: inherit;">Follow On</em><span style="color: rgb(74, 74, 74); background-color: inherit;"> recentemente e além de tech, nossos investimentos foram destinados para Logística e Reforço de Caixa.</span><span style="color: rgb(74, 74, 74);">&nbsp;</span></p><p><span style="color: rgb(74, 74, 74); background-color: inherit;">Nosso time não parou de crescer, mesmo durante a pandemia, pois nosso propósito é entregar sonhos para os nossos clientes todos os dias, para isso melhoramos, aprendemos e nos desenvolvemos, sempre em uma direção clara. </span><span style="color: rgb(74, 74, 74);">&nbsp;</span></p><p class="ql-align-justify"><span style="color: rgb(74, 74, 74); background-color: inherit;">E agora ainda temos&nbsp;</span><strong style="color: rgb(74, 74, 74); background-color: inherit;">04</strong><span style="color: rgb(74, 74, 74); background-color: inherit;">&nbsp;posições de&nbsp;</span><strong style="color: rgb(74, 74, 74); background-color: inherit;"><em>Agile&nbsp;Team&nbsp;Leader</em></strong><span style="color: rgb(74, 74, 74); background-color: inherit;">. Topa esse desafio? Você poderá atuar na nossa Matriz em São Caetano do Sul/SP ou trabalho remoto (</span><strong style="color: rgb(74, 74, 74); background-color: inherit;"><em>officeless</em></strong><span style="color: rgb(74, 74, 74); background-color: inherit;">).</span><span style="color: rgb(74, 74, 74);">&nbsp;</span><u>﻿</u></p><p></p>
        <h2>
          Main responsibilities
        </h2>
        <p></p><p><u>Sua contribuição para algo maior é:</u></p><ul><li>Apoiar na solução de escala de times ágeis (backlog, comunicação e entrega)</li><li>Ser agente de mudança e referência da cultura ágil dentro da companhia</li><li>Criar uma cultura de metas por meio de OKRs (as metas certas pelos motivos certos), monitoramento e evolução dentro dos times</li><li>Suportar a criação e evolução de produtos (Product Management, Lean Inception, Design Thinking, Design Sprint...)</li><li>Orientar o time de desenvolvimento com boas práticas de engenharia de software</li><li>Ser um solucionador de problemas nato</li><li>Preparar e aplicar workshops práticos e dinâmicos de técnicas e abordagens ágeis</li><li>Estar sempre comprometido com a entrega de valor</li></ul><p>&nbsp;</p><p><u>Além disso te desafiamos em:</u></p><ul><li>Orientar os times sobre melhores práticas ágeis para o seu contexto</li><li>Suportar, aconselhar e estimular pessoas à melhoria contínua e sua eficiência</li><li>Estar em constante aprendizado trazendo sempre as melhores técnicas e abordagens de mercado</li></ul><p></p>
        <h2>
          Requirements and skills
        </h2>
        <p></p><p><u>Com certeza você tem que ter:</u></p><ul><li>Dominar práticas e abordagens ágeis (Lean, Scrum, Kanban, XP, Design Thinking...)</li><li>Experiência anterior como Agile Coach / Scrum Master / Product Owner</li><li><span style="color: windowtext;">Senso crítico para avaliar a maturidade dos times e propor melhorias</span></li></ul><p><br></p><p><u>Seria muito legal se você tivesse:</u></p><ul><li>Conhecimento no mundo do Varejo</li><li>Vivência na Cultura DevOps</li><li>Conhecer técnicas e ferramentas de qualidade (BDD, TDD...)</li><li>Experiência em formação de times ágeis</li><li>Inglês Avançado</li><li>Conhecimento em Técnicas de Coaching / Mentoring</li><li>Conhecimento de práticas ágeis em escala (Scrum Scale)</li><li>Certificados PSM I/PSPO/CSM e/ou KMP I / KMP II;</li><li>Conhecimento em conceitos de UX/UI</li><li>Experiência com ferramentas JIRA e Confluence</li></ul><p></p>
        <h2>
          Additional information
        </h2>
        <p></p><p class="ql-align-justify"><span style="color: rgb(32, 31, 30); background-color: inherit;">E os benefícios? Vamos te contar, alguns deles:</span><span style="color: rgb(32, 31, 30);">&nbsp;</span></p><p class="ql-align-justify"><span style="color: rgb(23, 78, 134); background-color: inherit;"> </span><span style="color: rgb(23, 78, 134);">&nbsp;</span></p><ul><li class="ql-align-justify"><span style="background-color: inherit;">Assistência médica e odontológica</span>&nbsp;</li><li class="ql-align-justify"><span style="background-color: inherit;">PLR / bônus</span>&nbsp;</li><li class="ql-align-justify"><span style="background-color: inherit;">Licenças maternidade e paternidade estendidas&nbsp;</span>&nbsp;</li><li class="ql-align-justify"><span style="background-color: inherit;">Desconto em produtos</span>&nbsp;</li><li class="ql-align-justify"><span style="background-color: inherit;">Dresscode: seja você!</span>&nbsp;</li><li><span style="background-color: inherit;">E muito&nbsp;mais :D</span></li></ul><p><br></p><p class="ql-align-justify"><span style="background-color: inherit; color: rgb(32, 31, 30);">O que pensamos sobre diversidade?</span><span style="color: rgb(32, 31, 30);">&nbsp;</span></p><p class="ql-align-justify"><span style="color: rgb(23, 78, 134); background-color: inherit;"> </span><span style="color: rgb(23, 78, 134);">&nbsp;</span></p><p class="ql-align-justify"><span style="color: rgb(32, 31, 30); background-color: inherit;">Nós consideramos que as diferentes perspectivas ampliam o olhar e promovem a criação de um ambiente plural, mais rico e desenvolvido culturalmente. Tratamos a todos indistintamente e não toleramos preconceito e discriminação em qualquer relação com o nosso público, sejam clientes, fornecedores, prestadores ou colaboradores.</span><span style="color: rgb(32, 31, 30);">&nbsp;</span></p><p><span style="color: rgb(32, 31, 30); background-color: inherit;">﻿</span></p><p class="ql-align-justify"><strong style="color: rgb(32, 31, 30);">#VEMPRAVIA</strong></p><p></p>
        <h2>
            Conheça mais sobre a Via Varejo
        </h2>
        <div class="description__about">
          <p class="ql-align-justify"><span style="color: black;">Agradecemos seu interesse em fazer parte da transformação da Via Varejo.</span></p><p class="ql-align-justify"><br></p><p><span style="color: black;">Mesmo com o cenário de pandemia do&nbsp;Coronavírus,&nbsp;seguimos contratando.&nbsp;</span></p><p><span style="color: black;">Nossos processos seletivos estão acontecendo de maneira remota, demonstrando o cuidado que temos com nossos clientes e colaboradores.</span></p><p><span style="color: black;">&nbsp;</span></p><p><span style="color: black;">Torcemos para que você esteja bem e seguro.</span></p><p class="ql-align-center"><br></p><p class="ql-align-center"><br></p><p class="ql-align-center"><br></p><p class="ql-align-center"><strong style="color: rgb(32, 31, 30);">Somos a Via Varejo!</strong></p><p><span style="color: black;">Somos uma empresa de gente que tem um propósito gigante: o de realizar o sonho de milhões de clientes. E para chegar onde queremos, estamos fazendo a maior transformação do varejo no Brasil. </span></p><p><span style="color: black;">Operamos marcas que há décadas estão presentes na mente, no coração e na casa dos brasileiros: Casas Bahia, Pontofrio, Extra .com e Móveis Bartira. </span></p><p><span style="color: black;">São mais de 60 anos de história, com mais de mil lojas físicas, e-commerce e 26 Centros de Distribuição e Entrepostos.</span></p><p><span style="color: black;">Estamos presentes em mais de 400 municípios e 20 estados, além do Distrito Federal. Somos líder no varejo de eletroeletrônicos no Brasil, mas sonhamos com muito mais.</span></p><p><span style="color: black;">Por isso, aqui você terá a oportunidade de melhorar, aprender e se desenvolver, sempre em uma direção clara. </span></p><p class="ql-align-center"><br></p><p class="ql-align-center"><br></p><p class="ql-align-center"><br></p><p class="ql-align-center"><strong style="color: rgb(32, 31, 30);">Venha fazer parte do nosso time!</strong></p><p><span style="color: black;">Oferecemos um ambiente de responsabilização, onde cada um dos nossos colaboradores entende que esse negócio é seu e que tudo o que acontece aqui depende da sua atuação. </span></p><p><span style="color: black;">Valorizamos aqueles que inovam, ousam e também erram, pois sabemos que só quem se arrisca pode aprender com os erros e melhorar cada vez mais.</span></p><p><span style="color: black;">Para nós, o cliente é tudo e aqui ele se sente em casa. Assim como os nossos mais de 47 mil colaboradores. </span></p><p><span style="color: black;">Somos uma empresa diversa, com um ambiente acolhedor, onde o respeito é a base das nossas relações. </span></p><p><span style="color: black;">Temos muito o que fazer, mas prezamos por fazer tudo de forma leve, alegre e divertida. Olhamos para cada detalhe, com foco total no cliente e atenção e cuidado aos nossos colaboradores.</span></p><p><span style="color: black;">Agimos para que nosso negócio seja um reflexo da nossa sociedade como um todo. A diversidade aqui é a nossa forma de ser e de fazer negócios.</span></p><p><span style="color: black;">E se você adora desafios, se reinventa, arrisca, muda, se adapta e não abre mão de ser quem você é, aqui é o seu lugar.</span></p>
        </div>
        <h2 id="section-know" class="description__title">
          Conheça mais sobre nós
        </h2>
        <ul class="description__social">
          <li>
            <a target="_blank" href="https://www.trabalhenavia.com.br/">
              <i class="fa fa-globe"></i> Website
            </a>
          </li>
          <li>
            <a target="_blank" href="https://www.linkedin.com/company/viavarejo/life/">
              <i class="fa fa-linkedin"></i> LinkedIn
            </a>
          </li>
          <li>
            <a target="_blank" href="https://www.instagram.com/viavarejo/">
              <i class="fa fa-instagram"></i> Instagram
            </a>
          </li>
        </ul>        <p class="description__button">
          <a href="https://viavarejo.gupy.io/candidates/jobs/216054/apply?jobBoardSource=gupy_public_page">
            Apply!
          </a>
        </p>
      <p>
      </p>
    </div>';

$locations = ['São Paulo', 'Rio de Janeiro'];

/** @var \Illuminate\Database\Eloquent\Factory $factory */

$factory->define(JobPosition::class, function (Faker $faker) use ($jobs, $functions, $description, $levels, $locations) {
    return [
        'title' => $faker->randomElement($jobs).' '.$faker->randomElement($functions).' '.$faker->randomElement($levels),
        'location' => $faker->randomElement($locations),
        'type' => 'Jornada Integral',
        'short_description' => $faker->realText(150),
        'description' => $description,
    ];
});

$factory->define(Tag::class, function (Faker $faker) use ($functions) {
    return [
        'title' => $faker->randomElement($functions),
    ];
});

