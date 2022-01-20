<?php
// This file is part of Moodle - https://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <https://www.gnu.org/licenses/>.

/**
 * Strings for component 'block_rss_client', language 'pt_br', version '3.11'.
 *
 * @package     block_rss_client
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addfeed'] = 'Adicionar URL do alimentador de notícias:';
$string['addheadlineblock'] = 'Adicionar título do bloco RSS';
$string['addnew'] = 'Adicionar Novo';
$string['addnewfeed'] = 'Adicionar um novo feed';
$string['cannotmakemodification'] = 'Você não tem permissão para modificar este RSS feed.';
$string['choosefeedlabel'] = 'Escolher os alimentadores que devem estar disponíveis neste bloco:';
$string['clientchannellink'] = 'Site original...';
$string['clientnumentries'] = 'O número predefinido de itens mostrados em cada alimentador.';
$string['clientshowchannellinklabel'] = 'Mostrar link ao site de origem? (Se o alimentador de notícias não fornecer o link, ele não estará disponível) :';
$string['clientshowimagelabel'] = 'Mostrar imagem do canal, se disponível :';
$string['configblock'] = 'Configurar este bloco';
$string['couldnotfindfeed'] = 'Nenhum alimentador encontrado com este id';
$string['couldnotfindloadrssfeed'] = 'Não foi possível encontrar ou carregar o feed RSS.';
$string['customtitlelabel'] = 'Título padrão (deixar em branco para usar o título fornecido pelo alimentador):';
$string['deletefeedconfirm'] = 'Tem certeza que deseja excluir este alimentador?';
$string['disabledrssfeeds'] = 'Feeds RSS estão desabilitados.';
$string['displaydescriptionlabel'] = 'Mostrar todas as descrições dos links?';
$string['editafeed'] = 'Editar um feed';
$string['editfeeds'] = 'Editar, assinar ou cancelar assinatura de alimentadores de notícias RSS/Atom';
$string['editnewsfeeds'] = 'Editar alimentadores de notícias';
$string['editrssblock'] = 'Editar título do bloco RSS';
$string['enableautodiscovery'] = 'Ativar auto-descoberta de feeds?';
$string['enableautodiscovery_help'] = 'Se habilitado, feeds em páginas da web são localizados automaticamente. Por exemplo,  se  o endereço http://docs.moodle.org for informado, então http://docs.moodle.org/en/index.php?title=Special:RecentChanges&feed=rss seria encontrado.';
$string['failedfeed'] = 'Falha ao fazer download do Feed - Nova tentativa depois de {$a}';
$string['failedfeeds'] = 'Um ou mais feeds RSS falharam';
$string['feed'] = 'Alimentador';
$string['feedadded'] = 'Alimentador de notícias adicionado';
$string['feeddeleted'] = 'Alimentador de notícias excluído';
$string['feeds'] = 'Alimentadores de notícias';
$string['feedsaddedit'] = 'Adicionar/editar alimentadores de notícias';
$string['feedsconfigurenewinstance'] = 'Clique aqui para configurar este bloco e mostrar alimentadores RSS.';
$string['feedsconfigurenewinstance2'] = 'Clique no ícone acima para configurar esse bloco para exibição de feeds RSS.';
$string['feedupdated'] = 'Alimentador de notícias atualizado';
$string['feedurl'] = 'Feed URL';
$string['findmorefeeds'] = 'Procurar mais alimentadores RSS';
$string['managefeeds'] = 'Gerenciar todos os meus alimentadores';
$string['nofeeds'] = 'Nenhum alimentador RSS definido neste site.';
$string['numentries'] = 'Itens por alimentador de notícias';
$string['pickfeed'] = 'Selecionar um alimentador de notícias';
$string['pluginname'] = 'Alimentadores RSS remotos';
$string['privacy:metadata:block_rss_client:description'] = 'A descrição do feed RSS.';
$string['privacy:metadata:block_rss_client:preferredtitle'] = 'O título preferido (personalizado) do feed RSS.';
$string['privacy:metadata:block_rss_client:shared'] = 'Se o feed RSS está disponível para todos os cursos.';
$string['privacy:metadata:block_rss_client:skiptime'] = 'O tempo definido em segundos que o cron deve esperar entre as tentativas para tentar novamente os feeds RSS com falha.';
$string['privacy:metadata:block_rss_client:skipuntil'] = 'O tempo máximo definido em que o cron tentará abrir feeds RSS com falha.';
$string['privacy:metadata:block_rss_client:tableexplanation'] = 'As informações do bloco RSS são armazenadas aqui.';
$string['privacy:metadata:block_rss_client:title'] = 'O título do feed RSS.';
$string['privacy:metadata:block_rss_client:url'] = 'URL do feed RSS.';
$string['privacy:metadata:block_rss_client:userid'] = 'O ID do usuário que adicionou o feed RSS.';
$string['refreshfeedstask'] = 'Atualizar tarefa de feeds RSS';
$string['remotenewsfeed'] = 'Alimentador de notícias remoto';
$string['rss_client:addinstance'] = 'Adicionar um novo bloco de feeds de RSS remoto';
$string['rss_client:createprivatefeeds'] = 'Criar canais RSS privados';
$string['rss_client:createsharedfeeds'] = 'Criar canais RSS compartilhados';
$string['rss_client:manageanyfeeds'] = 'Gerenciar qualquer canal RSS';
$string['rss_client:manageownfeeds'] = 'Gerenciar os próprios canais RSS';
$string['rss_client:myaddinstance'] = 'Adicionar um novo bloco de feeds RSS remotos ao Painel';
$string['seeallfeeds'] = 'Mostrar todos os alimentadores';
$string['sharedfeed'] = 'RSS compartilhado';
$string['shownumentrieslabel'] = 'Número máximo de itens mostrados em cada bloco.';
$string['submitters'] = 'Quem pode definir novos alimentadores RSS? Os alimentadores definidos serão disponibilizados em todas as páginas do site.';
$string['submitters2'] = 'Solicitantes';
$string['timeout'] = 'Tempo em minutos antes que a cache do alimentador termine. Este é o tempo mínimo. O RSS será atualizado na próxima execução do cron. Escolha um valor superior a 30 min.';
$string['timeout2'] = 'Tempo limite';
$string['timeoutdesc'] = 'Duração em minutos do alimentador RSS na cache.';
$string['updatefeed'] = 'Atualizar URL do alimentador de notícias :';
$string['viewfeed'] = 'Ver feed';
