<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css"/>
    <title>Financial Imobiliario</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-primary sticky-top">
        <div class="container">
            <a href="index.php" class="navbar-brand">
                <img src="img/logo.svg" alt="Logo marca Financial Imobiliaria" class="img-fluid">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item mx-2">
                        <a href="#topo" class="nav-link font-16 color-secondary" aria-current="page">Topo</a>
                    </li>
                    <li class="nav-item mx-2">
                        <a href="#sobre" class="nav-link font-16 color-secondary">Sobre</a>
                    </li>
                    <li class="nav-item mx-2">
                        <a href="#lotes" class="nav-link font-16 color-secondary">Lotes</a>
                    </li>
                    <li class="nav-item mx-2">
                        <a href="#diferenciais" class="nav-link font-16 color-secondary">Diferenciais</a>
                    </li>
                    <li class="nav-item mx-2">
                        <a href="#descricao-tecnica" class="nav-link font-16 color-secondary">Descrição Técnica</a>
                    </li>
                    <li class="nav-item mx-2">
                        <a href="#andamento-obra" class="nav-link font-16 color-secondary">Andamento da Obra</a>
                    </li>
                    <li class="nav-item mx-2">
                        <a href="#localizacao" class="nav-link font-16 color-secondary">Localização</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div id="topo" class="header-page" style="background-image: url('img/bg-header.png');">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 my-5 ms-auto">
                    <div class="bg-primary text-center rounded py-5 px-4">
                        <h1 class="font-28 color-light fw-bold">Ligamos para você</h1>
                        <p class="font-16 color-light">Preencha corretamente os dados abaixo</p>
                    
                        <form action="">
                            <div class="input-group my-3">
                                <input type="text" class="form-control font-15" placeholder="Nome *">
                            </div>
                            <div class="input-group my-3">
                                <input type="text" class="form-control font-15" placeholder="Telefone *">
                            </div>
                            <div class="input-group my-3">
                                <input type="email" class="form-control font-15" placeholder="E-mail *">
                            </div>
                            <button class="btn bg-secondary font-16 color-primary fw-bold text-uppercase w-100">Enviar</button>
                            <p class="font-15 color-light mt-3">Ou chame pelo WhatsApp</p>
                            <a href="#" class="btn font-16 color-light fw-bold text-uppercase w-100" style="background-color: #00CC69 !important;"><i class="bi bi-whatsapp me-2"></i>WhatsApp</a>
                            <div class="form-check mt-4">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                <label class="form-check-label font-12 color-secondary text-start" for="flexCheckDefault">Autorizo a coleta de meus dados pessoais mediante neste formulário para que a Financial Imobiliária entre em contato comigo para sanar minhas dúvidas e responder aos meus questionamentos. Acesse nossos termos de uso e privacidade para saber mais sobre como tratamos seus dados pessoais alinhados à Lei Nº 13.709/2018.</label>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div id="sobre" class="session pb-0">
        <div class="container">
            <div class="row g-3 align-items-center">
                <div class="col-lg-4">
                    <img src="img/royal-park.png" alt="Royal Park Loteamento em Construção" class="img-fluid rounded shadow my-4">
                </div>
                <div class="col-lg-8">
                    <h1 class="font-40 color-primary fw-bold">Loteamento Royal Park</h1>
                    <p class="font-25 color-primary">Chapadão do Sul · MS</p>

                    <p class="font-17 color-primary">Chapadão do Sul/MS, município a 330 km da Capital Campo Grande, é conhecido pela sua prosperidade e desenvolvimento. Desejando fazer parte da história desse município, a Financial Imobiliária implementa o Loteamento Royal Park, um empreendimento com conceitos de urbanização inovadores.</p>
                    <p class="font-17 color-primary">Um loteamento pensado e projetado para contribuir com o desenvolvimento urbano de Chapadão do Sul, entregue com ruas e avenidas largas e asfaltadas, drenagem de águas pluviais, rede de água potável, rede de esgoto coletora e principal, rede de energia elétrica e iluminação pública com LED.</p>
                    <p class="font-17 color-primary">Infraestrutura que permite início imediato das construções de residências e comércios no local.</p>
                </div>
            </div>
        </div>
    </div>

    <div id="lotes" class="session">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="font-40 color-primary fw-bold">Número de Lotes: 302</h1>
                    <p class="font-17 color-primary">Tamanho mínimo: 350.00 m2 | Tamanho máximo: 1.640,00 m2<br>R.4/12.154 Registro de Imóveis de Chapadão do Sul</p>
                    <img src="img/img-home.png" alt="Área de lazer" class="img-fluid">
                </div>
            </div>
        </div>
    </div>

    <div id="diferenciais" class="session session-img" style="background-image: linear-gradient(0deg, rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url('img/bg-session.png');">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="font-40 color-secondary-alternative fw-bold">Diferenciais</h1>
                    <p class="font-17 color-secondary">Pensando no convívio social no Loteamento Royal Park, a Financial Imobiliária projetou um Parque Linear equipado com Espaço de Convivência, Espaço Kids, Espaço Pet, Academia ao Ar Livre e Pista de Caminhada. Garantindo o lazer para toda a família. Além disso, o loteamento Royal Park oferecerá mais qualidade de vida, com o projeto de arborização do loteamento, que compete no plantio de mudas de árvores frutíferas nos passeios públicos e canteiros centrais, que também contará com ciclovias integradas com o sistema viário já existente.</p>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-3 my-3">
                    <div class="card">
                        <img src="img/parque-linear.png" alt="Parque Linear" class="img-fluid">
                        <div class="card-img-overlay">
                            <p class="font-20 mb-0">Parque Linear</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 my-3">
                    <div class="card">
                        <img src="img/academia-ar-livre.png" alt="Academia ao ar Livre" class="img-fluid">
                        <div class="card-img-overlay">
                            <p class="font-20 mb-0">Academia ao ar Livre</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 my-3">
                    <div class="card">
                        <img src="img/espaco-kids.png" alt="Espaço Kids" class="img-fluid">
                        <div class="card-img-overlay">
                            <p class="font-20 mb-0">Espaço Kids</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 my-3">
                    <div class="card">
                        <img src="img/pomar.png" alt="Pomar" class="img-fluid">
                        <div class="card-img-overlay">
                            <p class="font-20 mb-0">Pomar</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 my-3">
                    <div class="card">
                        <img src="img/espaco-pet.png" alt="Espaço Pet" class="img-fluid">
                        <div class="card-img-overlay">
                            <p class="font-20 mb-0">Espaço Pet</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 my-3">
                    <div class="card">
                        <img src="img/ciclovia.png" alt="Ciclovia" class="img-fluid">
                        <div class="card-img-overlay">
                            <p class="font-20 mb-0">Ciclovia</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 my-3">
                    <div class="card">
                        <img src="img/pista-caminhada.png" alt="Pista de Caminhada" class="img-fluid">
                        <div class="card-img-overlay">
                            <p class="font-20 mb-0">Pista de Caminhada</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 my-3">
                    <div class="card">
                        <img src="img/espaco-convivencia.png" alt="Espaço de Convivência" class="img-fluid">
                        <div class="card-img-overlay">
                            <p class="font-20 mb-0">Espaço de Convivência</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="session bg-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="font-40 color-primary fw-bold">Sobre a Localização</h1>
                    <p class="font-17 color-primary">Confira como o Loteamento Royal Park está próximo de tudo o que você precisa para morar bem ou investir em Chapadão do Sul/MS.</p>
                </div>
            </div>

            <div class="row">
                <div class="col-6 col-lg-3 my-3">
                    <div class="card-icon bg-gray justify-content-center text-center py-4 px-5">
                        <img src="img/hospital-municipal.png" alt="Hospital Municipal" class="img-fluid">
                        <p class="font-17 color-primary mt-3 fw-bold">Hospital Municipal</p>
                    </div>
                </div>
                <div class="col-6 col-lg-3 my-3">
                    <div class="card-icon bg-gray rounded text-center py-4 px-5">
                        <img src="img/instituicoes-ensinos.png" alt="Instituições de Ensinos" class="img-fluid">
                        <p class="font-17 color-primary mt-3 fw-bold">Instituições de Ensinos</p>
                    </div>
                </div>
                <div class="col-6 col-lg-3 my-3">
                    <div class="card-icon bg-gray rounded text-center py-4 px-5">
                        <img src="img/terminal-rodoviario.png" alt="Terminal Rodoviário" class="img-fluid">
                        <p class="font-17 color-primary mt-3 fw-bold">Terminal Rodoviário</p>
                    </div>
                </div>
                <div class="col-6 col-lg-3 my-3">
                    <div class="card-icon bg-gray rounded text-center py-4 px-5">
                        <img src="img/supermercados.png" alt="Supermercados" class="img-fluid">
                        <p class="font-17 color-primary mt-3 fw-bold">Supermercados</p>
                    </div>
                </div>
                <div class="col-6 col-lg-3 my-3">
                    <div class="card-icon bg-gray rounded text-center py-4 px-5">
                        <img src="img/centro-comercial.png" alt="Centro Comercial" class="img-fluid">
                        <p class="font-17 color-primary mt-3 fw-bold">Centro Comercial</p>
                    </div>
                </div>
                <div class="col-6 col-lg-3 my-3">
                    <div class="card-icon bg-gray rounded text-center py-4 px-5">
                        <img src="img/policia-civil.png" alt="Polícia Civil" class="img-fluid">
                        <p class="font-17 color-primary mt-3 fw-bold">Polícia Civil</p>
                    </div>
                </div>
                <div class="col-6 col-lg-3 my-3">
                    <div class="card-icon bg-gray rounded text-center py-4 px-5">
                        <img src="img/corpo-bombeiros.png" alt="Corpo de Bombeiros" class="img-fluid">
                        <p class="font-17 color-primary mt-3 fw-bold">Corpo de Bombeiros</p>
                    </div>
                </div>
                <div class="col-6 col-lg-3 my-3">
                    <div class="card-icon bg-gray rounded text-center py-4 px-5">
                        <img src="img/universidade.png" alt="UFMS Chapadão do Sul" class="img-fluid">
                        <p class="font-17 color-primary mt-3 fw-bold">UFMS Chapadão do Sul</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="descricao-tecnica" class="session">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="font-40 color-primary fw-bold">Descrição Técnica</h1>
                    <p class="font-17 color-primary">Projetado para contribuir com o desenvolvimento urbano de Chapadão do Sul, o Loteamento Royal Park será entregue com infraestrutura que permite início imediato das construções de residências e comércios no local.</p>
                </div>
            </div>

            <div class="row">
                <div class="col-6 col-lg-3 my-3">
                    <div class="card-icon bg-gray rounded text-center py-4 px-5">
                        <img src="img/pavimentacao-asfaltica.png" alt="Pavimentação Asfáltica" class="img-fluid">
                        <p class="font-17 color-primary mt-3 fw-bold">Pavimentação Asfáltica</p>
                    </div>
                </div>
                <div class="col-6 col-lg-3 my-3">
                    <div class="card-icon bg-gray rounded text-center py-4 px-5">
                        <img src="img/rede-drenagem.png" alt="Rede de Drenagem" class="img-fluid">
                        <p class="font-17 color-primary mt-3 fw-bold">Rede de Drenagem</p>
                    </div>
                </div>
                <div class="col-6 col-lg-3 my-3">
                    <div class="card-icon bg-gray rounded text-center py-4 px-5">
                        <img src="img/rede-agua.png" alt="Rede de Água" class="img-fluid">
                        <p class="font-17 color-primary mt-3 fw-bold">Rede de Água</p>
                    </div>
                </div>
                <div class="col-6 col-lg-3 my-3">
                    <div class="card-icon bg-gray rounded text-center py-4 px-5">
                        <img src="img/pcd.png" alt="Acessibilidade PCD" class="img-fluid">
                        <p class="font-17 color-primary mt-3 fw-bold">Acessibilidade PCD</p>
                    </div>
                </div>
                <div class="col-6 col-lg-3 my-3">
                    <div class="card-icon bg-gray rounded text-center py-4 px-5">
                        <img src="img/rede-esgoto.png" alt="Rede de Esgoto" class="img-fluid">
                        <p class="font-17 color-primary mt-3 fw-bold">Rede de Esgoto</p>
                    </div>
                </div>
                <div class="col-6 col-lg-3 my-3">
                    <div class="card-icon bg-gray rounded text-center py-4 px-5">
                        <img src="img/rede-energia.png" alt="Rede de Energia" class="img-fluid">
                        <p class="font-17 color-primary mt-3 fw-bold">Rede de Energia</p>
                    </div>
                </div>
                <div class="col-6 col-lg-3 my-3">
                    <div class="card-icon bg-gray rounded text-center py-4 px-5">
                        <img src="img/iluminacao-publica.png" alt="Iluminação Pública" class="img-fluid">
                        <p class="font-17 color-primary mt-3 fw-bold">Iluminação Pública</p>
                    </div>
                </div>
                <div class="col-6 col-lg-3 my-3">
                    <div class="card-icon bg-gray rounded text-center py-4 px-5">
                        <img src="img/combate-incendio.png" alt="Sis. de Combate à Incêndio" class="img-fluid">
                        <p class="font-17 color-primary mt-3 fw-bold">Sis. de Combate à Incêndio</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="andamento-obra" class="session bg-primary-alternative">
        <div class="container">
            <div class="row g-4 align-items-center">
                <div class="col-lg-6 my-4">
                    <h1 class="font-40 color-secondary-alternative fw-bold">Andamento da Obra</h1>
                    <p class="font-17 color-secondary">Acompanhe o andamento da obra do Loteamento Royal Park</p>
                    <div class="row g-3">
                        <div class="col-lg-6">
                            <div class="card">
                                <img src="img/video.png" alt="Vídeos" class="img-fluid">
                                <div class="card-img-overlay">
                                    <p class="font-20 mb-0">Vídeo</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="card">
                                <img src="img/galeria-fotos.png" alt="Galeria de Fotos" class="img-fluid">
                                <div class="card-img-overlay">
                                    <p class="font-20 mb-0">Galeria de Fotos</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="progress my-2">
                        <div class="progress-bar" role="progressbar" style="width: 100%;" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">REDE DE ÁGUA - 100%</div>
                    </div>
                    <div class="progress my-2">
                        <div class="progress-bar" role="progressbar" style="width: 80%;" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100">REDE DE ESGOTO - 80%</div>
                    </div>
                    <div class="progress my-2">
                        <div class="progress-bar" role="progressbar" style="width: 89%;" aria-valuenow="89" aria-valuemin="0" aria-valuemax="100">REDE DE DRENAGEM - 89%</div>
                    </div>
                    <div class="progress my-2">
                        <div class="progress-bar" role="progressbar" style="width: 80%;" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100">REDE DE ÁGUA - 80%</div>
                    </div>
                    <div class="progress my-2">
                        <div class="progress-bar" role="progressbar" style="width: 5%;" aria-valuenow="5" aria-valuemin="0" aria-valuemax="100">TERRA PLANAGEM - 5%</div>
                    </div>
                    <div class="progress my-2">
                        <div class="progress-bar" role="progressbar" style="width: 50%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">PAVIMENTAÇÃO - 50%</div>
                    </div>
                    <div class="progress my-2">
                        <div class="progress-bar" role="progressbar" style="width: 0%;" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">REDE DE ENERGIA - NÃO INICIADA</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="session bg-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="font-40 color-primary fw-bold">Projeções do Loteamento em 3D</h1>
                    <p class="font-17 color-primary">Confira as projeções em 3D para o Loteamento Royal Park, com lotes ideais para quem deseja investir na construção de comércios e empresas de variados segmentos, em avenidas largas integradas ao sistema viário existente ou em frente à MS-306. Além de comportar a construção de casas de médio e alto padrão, realizando o sonho de sua família, na melhor localização de Chapadão do Sul.</p>
                </div>
            </div>

            <div class="row">
                <?php for ($i = 1; $i < 18; $i++) { ?>
                <div  class="col-lg-3 my-3">
                    <div  class="card">
                        <a data-fancybox="gallery">
                            <img  src="img/projecoes-3d/projecao-<?php echo $i; ?>.jpg" alt="Parque Linear" class="img-fluid rounded">
                        </a>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
    </div>

    <div id="localizacao" class="session">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="font-40 color-primary fw-bold">Localização</h1>
                    <p class="font-17 color-primary">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam at leo dignissim, aliquam magna id, </p>
                </div>
            </div>
            <div class="row">
                <img src="img/maps.png" alt="Mapa da localização" class="img-fluid mt-4">
            </div>
        </div>
    </div>

    <div class="session bg-secondary p-5">
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col-lg-12">
                    <h1 class="font-40 color-primary fw-bold">Dúvidas? Fale conosco.</h1>
                    <p class="font-15 color-primary mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam at leo dignissim, aliquam magna</p>
                    <a href="#" class="btn bg-primary font-16 color-secondary text-uppercase my-4">Contato</a>
                </div>
            </div>
        </div>
    </div>
    <div class="session bg-primary p-5">
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col-lg-2">
                    <a href="index.php">
                        <img src="img/logo-footer.svg" alt="Logo marca Financial Imobiliaria" class="img-fluid">
                    </a>
                </div>
            </div>
            <div class="row justify-content-center text-center">
                <div class="col-lg-9 mt-3">
                    <p class="font-15 color-secondary mb-0"><strong>Endereço:</strong> Rua Hélio Yoshiaki Ikeziri, 34, Edifício Evidence - Lj.01 Bairro Royal Park • Campo Grande - MS <strong>Horário de Atendimento:</strong> Segunda à Sexta de 8:00 às 11:00 e 13:00 às 17:00 <strong>Telefone:</strong> (67) 3312.4000</p>
                </div>
            </div>
        </div>
    </div>

    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/script.js"></script>
</body>
</html>