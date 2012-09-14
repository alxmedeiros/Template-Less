
<!doctype html>
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="pt-BR"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="pt-BR"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="pt-BR"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="pt-BR"> <!--<![endif]-->
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title>Vertical Engenharia</title>
  <meta name="description" content="">
  <meta name="author" content="">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <!-- CSS concatenated and minified via ant build script-->
  <link rel="stylesheet" href="js/mylibs/ui.selectcustom.css" />
  <link rel="stylesheet" href="style.css">
  <!-- end CSS-->
  <script src="js/libs/modernizr.js"></script>
</head>
<!-- colocar essa class se tiver na parte de imovel ativo  class="bg_imovel_ativo" -->
<body>
	<div id="wrap">
        <header class="expose1">
            <div class="centraliza">
              <section class="trabalhe_conosco none">
                  <a href="javascript:void(0);" title="Fechar" class="bt_fechar_trabalhe fontface_bold">Fechar</a>
                  <div class="esq_text">
                    <h1 class="fontface_bold">Trabalhe Conosco</h1>
                    <h3 class="fontface_bold">Suspendisse fermentum vulputate laoreet. Etiam bibendum elementum euismod. Aliquam sed leo nunc. </h3>
                  </div>
                  <form action="" method="" class="form_trabalhe">
                    <fieldset>
                      <div class="esq_form">
                        <div class="in">
                            <label for="">Nome:</label>
                            <input type="text" id="" name="" placeholder="Ex.: Carlos da Silva" />
                        </div>
                        <div class="in">
                            <label for="">Telefone Móvel:</label>
                            <input type="text" id="" name="" placeholder="(XX)_____-____" />
                        </div>
                        <div class="in select_cargo">
                            <label for="">Cargo:</label>
                            <select id="filter" name="filter" class="selStyle">
                              <option value="">Selecione</option>
                              <option value="">Advogado</option>
                              <option value="">Eng. Ambiental</option>
                            </select>
                        </div>
                        <div class="in">
                            <label for="">Escolher arquivo:</label>
                            <!-- input type="file" id="" name="" / -->
                            <div id="div-input-file">
                              <input name="file-original" type="file" size="30" id="file-original"  onchange="document.getElementById('file-falso').value = this.value;"/>
                              <div id="div-input-falso"><input name="file-falso"  type="text" id="file-falso" value="nenhum arquivo selecionado" /></div>
                            </div>
                        </div>
                      </div>
                      <div class="dir_form">
                          <div class="in">
                            <label for="">Email:</label>
                            <input type="text" id="" name="" placeholder="seuemail@email.com" />
                          </div>
                          <div class="in">
                            <label for="">Telefone Fixo:</label>
                            <input type="text" id="" name="" placeholder="(XX)_____-____" />
                          </div>
                          <div class="in">
                            <label for="">Área de interesse::</label>
                            <select id="filter2" name="filter2" class="selStyle">
                              <option value="">Selecione...</option>
                              <option value="">Advogado</option>
                              <option value="">Advogado</option>
                              <option value="">Advogado</option>
                            </select>
                          </div>
                          <div class="in select_sexo">
                            <label for="">Sexo</label>
                            <select id="filter3" name="filter3" class="selStyle">
                              <option value="">Selecione...</option>
                              <option value="">Masculino</option>
                              <option value="">Feminino</option>
                            </select>
                          </div>
                      </div>
                      <div class="fim_atendimento">
                          <button type="button" class="bt_enviadados fontface_bold">Enviar Dados</button>
                          <input type="reset" class="bt_limpardados fontface_bold" value="OU LIMPAR CAMPOS">
                      </div>
                    </fieldset>
                  </form>
              </section>

              <section class="area_restrita none">
                  <a href="javascript:void(0);" title="Fechar" class="bt_fechar_area fontface_bold">Fechar</a>
                  <div class="esq_text">
                    <h1 class="fontface_bold">Área Restrita</h1>
                    <h3 class="fontface_bold">Suspendisse fermentum vulputate laoreet. </h3>
                  </div>
                  <form action="" method="" class="form_restrita" >
                    <fieldset>
                      <h3 class="fontface_bold">Já sou cadastrado</h3>
                      <div class="in"><label for="">Login:</label> <input type="text" id="" name="" class="text" placeholder="Digite seu email ou nome do usuário" /></div>
                      <div class="in"><label for="">Senha:</label> <input type="text" id="" name="" class="text" placeholder="Digite sua senha" /></div>
                      <ul>
                        <li><a href="" title="Esqueci minha senha" class="bt_esqueci">Esqueci minha senha </a></li>
                        <li><input type="submit" id="" name="" class="bt_entrar_area borda5" value="Entrar" /></li>
                      </ul>
                    </fieldset>
                  </form>

                  <form action="" method="" class="form_restrita" >
                    <fieldset>
                      <h3 class="fontface_bold">Primeiro acesso? Confirme seus dados:</h3>
                      <div class="in"><label for="">CPF:</label> <input type="text" id="" name="" class="text" placeholder="Apenas numeros" /></div>
                      <div class="in"><label for="">Código de ativação:</label> <input type="text" id="" name="" class="text" placeholder="Digite o código" /></div>
                      <ul class="l_prosseguir">
                        <li><a href="" title="Perdi meu código de ativação" class="bt_esqueci">Perdi meu código de ativação</a></li>
                        <li><input type="submit" id="" name="" class="bt_entrar_area borda5" value="Prosseguir" /></li>
                      </ul>
                    </fieldset>
                  </form>
              </section>
              <div class="topo">
                <nav class="menu_top sprite">
                  <ul>
                    <li><a href="javascript:void(0);" title="Trabalhe Conosco" class="bt_trabalhe">Trabalhe Conosco</a></li>
                    <li><a href="javascript:void(0);" title="Área Restrita" class="bt_arearestrita">ÁREA RESTRITA</a></li>
                  </ul>
                  <form action="" method="" class="form_busca">
                    <fieldset>
                      <input type="text" id="" name="" placeholder="digite aqui o que procura">
                      <button class="fontface_bold">BUSCAR</button>
                    </fieldset>
                  </form>
                </nav><!-- /menu_top -->
                <div class="esq_logo sprite">
                  <h1 class="logo indent"><a href="index.php" title="Vertical Engenharia">Vertical Engenharia</a> </h1> 
                </div><!-- /esq_logo -->
                <!-- bgm_sobre - bgm_imoveis - bgm_blog - bgm_faleconosco -->
                
                <nav class="menu_princ">
                    <ul>
                      <!-- o link do menu ativo colocar essa class = bt_home_ativo -->
                      <li><a href="index.php" title="Home" class="bt_home bt_home_ativo indent">Home</a></li>
                      <li><a href="sobre.php" title="Sobre a Vertical" class="l_sobre">SOBRE A VERTICAL</a></li>
                      <li><a title="Imóveis" class="bt_imovel">Imóveis</a></li>
                      <li><a href="blog.php" title="Blog">Blog</a></li>
                      <li><a href="fale-conosco.php" title="Fale Conosco">Fale Conosco</a></li>
                    </ul>
                </nav><!-- /menu_princ -->
                <div class="menu_imovel none">
                  <span class="seta_imo sprite"></span>
                  <a href="#" title="Fechar" class="bt_fecharexpose sprite indent">Fechar</a>
                  <ul class="m_imovel">
                    <li><a href="" title="Lançamento">Lançamento</a></li>
                    <li><a href="" title="Pronto para morar">Pronto para <br /> morar</a></li>
                    <li><a href="" title="Em Construção">Em <br /> Construção </a></li>
                    <li><a href="" title="Revenda">Revenda</a></li>
                    <li class="semborda"><a href="" title="Portfolio">Portfolio</a></li>
                  </ul>
                  <form action="" method="" class="form_filtro">
                    <fieldset>
                      <p>ou use os filtros:</p>
                      <select>
                        <option value="">Todas as Cidades</option>
                        <option value="">João Pessoa</option>
                        <option value="">Cabedelo</option>
                      </select>
                      <select>
                        <option value="">Todos os Bairros</option>
                        <option value="">Pedro Gondim</option>
                        <option value="">Torre</option>
                      </select>
                      <select>
                        <option value="">Todos os Quartos</option>
                        <option value="">2</option>
                        <option value="">3</option>
                      </select>
                      <button type="button" class="bt_busca fontface_bold">Buscar</button>
                    </fieldset>
                  </form>
                </div><!-- /topo -->
              </div><!-- /topo -->
            </div><!-- /centraliza -->
        </header><!-- /header -->
        <!-- colocar essa a class "comp_imoveis qnd for nas paginas = imoveis.php, buscas.php  -->
        <!-- colocar essa a class "comp_sobre" qnd for nas paginas = sobre.php  -->
        <!-- colocar essa a class "comp_blog" qnd for nas paginas = blog.php  -->
        <!-- colocar essa a class "comp_imovel" qnd for nas paginas = imovel.php  -->
        <!-- colocar essa a class "comp_imovel_inativo" qnd for nas paginas = imovel_inativo.php  -->
        <!-- colocar essa a class "comp_faleconosco" qnd for nas paginas = imovel_inativo.php  -->
        <div class="compartilha comp_sobre expose2">
          <div class="centraliza">
            <div class="redes">
              <h5 class="fontface_bold verde sprite">GOSTOU?</h5>
              <div class="bg_dir_com sprite">
                <h5 class="fontface_bold">COMPARTILHE</h5>
                <figure> 
                  <div class="bt_twitter">
                    <a href="https://twitter.com/share" class="twitter-share-button" data-lang="pt">Tweetar</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
                  </div>
                  
                  <div class="bt_facebook">
                    <div id="fb-root"></div>
                    <script>(function(d, s, id) {
                      var js, fjs = d.getElementsByTagName(s)[0];
                      if (d.getElementById(id)) return;
                      js = d.createElement(s); js.id = id;
                      js.src = "//connect.facebook.net/pt_BR/all.js#xfbml=1";
                      fjs.parentNode.insertBefore(js, fjs);
                    }(document, 'script', 'facebook-jssdk'));</script>
                    <div class="fb-like" data-send="false" data-layout="button_count" data-width="450" data-show-faces="true" data-action="recommend"></div>
                  </div>
                </figure>
                <a title="Atendimento Online" class="atendimento sprite fontface_bold">Atendimento Online</a>
                <div class="bloco_atendimento sprite none">
                  <h3 class="fontface_bold">ATENDIMENTO ONLINE</h3>
                  <small>Fale em tempo real com <br /> um de nossos atendentes</small>
                  <a href="fale-conosco.php" title="Entrar no chat" class="fontface_bold bt_chat">Entrar no chat</a>
                </div><!-- /bg_dir_com -->
              </div><!-- /bg_dir_com -->
            </div><!-- /redes -->
          </div><!-- /centraliza -->
        </div><!-- /compartilha -->
        <div id="main">