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
 * Strings for component 'chat', language 'pt_br', version '3.11'.
 *
 * @package     chat
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activityoverview'] = 'Você tem sessões de chat se aproximando';
$string['ajax'] = 'Versão usando AJAX';
$string['autoscroll'] = 'Rolagem automática';
$string['beep'] = 'Bip';
$string['bubble'] = 'Bolha';
$string['cantlogin'] = 'Não foi possível logar na sala de chat!!';
$string['chat:addinstance'] = 'Adicionar novo chat';
$string['chat:chat'] = 'Acessar o chat';
$string['chat:deletelog'] = 'Excluir logs do chat';
$string['chat:exportparticipatedsession'] = 'Exportar sessão de chat em que você tenha participado';
$string['chat:exportsession'] = 'Exportar qualquer sessão de chat';
$string['chat:readlog'] = 'Ver logs do chat';
$string['chat:talk'] = 'Bater papo no chat';
$string['chat:view'] = 'Ver atividade Chat';
$string['chatintro'] = 'Descrição';
$string['chatname'] = 'Nome desta sala';
$string['chatreport'] = 'Sessões de chat';
$string['chattime'] = 'Data do próximo chat';
$string['compact'] = 'Compacto';
$string['composemessage'] = 'Compor uma mensagem';
$string['configmethod'] = 'O método de chat AJAX fornece uma interface de chat baseada em AJAX que entra em contato com o servidor regularmente para atualizações. O método normal de chat envolve clientes que entram em contato regularmente com o servidor para obter atualizações. Ele não requer configuração e funciona em qualquer lugar, mas pode criar uma grande carga no servidor se muitos usuários estiverem conversando. O uso de um daemon de servidor requer acesso de shell ao Unix, mas resulta em um ambiente de chat escalável e rápido.';
$string['confignormalupdatemode'] = 'Normalmente a atualização das salas de chat são eficientes quando se utiliza <em>Keep-Alive</em> em HTTP 1.1 mas isto não reduz a sobrecarga do servidor. O melhor método consiste no uso da estratégia <em>Stream</em> para comunicar as atualizações aos usuários. Este método oferece maior escalabilidade, como o método chatd, mas não é compatível com alguns tipos de servidor.';
$string['configoldping'] = 'Depois de quanto tempo de silêncio do usuário temos que considerar que abandonou a sala (em segundos)?';
$string['configrefreshroom'] = 'Qual é o intervalo de atualização da sala do chat (em segundos)? Um intervalo breve faz com que a chat pareça mais veloz mas isto pode aumentar muito a carga de trabalho do servidor quando muitas pessoas estiverem participando. Se você estiver usando atualizações <em>Stream</em>, você pode aumentar a freqüência de atualização escolhendo, por exemplo, o valor 2.';
$string['configrefreshuserlist'] = 'De quanto em quanto tempo a lista dos usuários tem que ser atualizada (em segundos)?';
$string['configserverhost'] = 'O hostname do computador que hospeda o servidor daemon';
$string['configserverip'] = 'O endereço IP correspondente ao hostname acima';
$string['configservermax'] = 'Número máximo de clientes permitido';
$string['configserverport'] = 'Porta do servidor a ser usada pelo daemon';
$string['coursetheme'] = 'Tema do curso';
$string['crontask'] = 'Processamento em segundo plano para o módulo chat';
$string['currentchats'] = 'Sessões de chat ativas';
$string['currentusers'] = 'Usuários atuais';
$string['deletesession'] = 'Excluir esta sessão';
$string['deletesessionsure'] = 'Confirmar a exclusão desta sessão?';
$string['donotusechattime'] = 'Não publicar os horários dos chats';
$string['enterchat'] = 'Clique aqui para entrar no chat agora';
$string['entermessage'] = 'Digite sua mensagem';
$string['errornousers'] = 'Não foi encontrado nenhum usuário!';
$string['eventmessagesent'] = 'Mensagem enviada';
$string['eventsessionsviewed'] = 'Sessões visualizadas';
$string['explaingeneralconfig'] = 'Essas configurações são usadas <strong>sempre</strong>';
$string['explainmethoddaemon'] = 'Essas configurações somente terão efeito se \'Daemon do servidor de chat\' estiver selecionado como método de chat.';
$string['explainmethodnormal'] = 'Essas configurações somente terão efeito se \'Normal\' estiver selecionado como método de chat.';
$string['generalconfig'] = 'Configuração geral';
$string['idle'] = 'Idle';
$string['indicator:cognitivedepth'] = 'Indicador cognitivo do Chat';
$string['indicator:cognitivedepth_help'] = 'Este indicador baseia-se na profundidade cognitiva alcançada pelo estudante em uma atividade Chat.';
$string['indicator:cognitivedepthdef'] = 'Chat cognitivo';
$string['indicator:socialbreadth'] = 'Indicador social do Chat';
$string['indicator:socialbreadth_help'] = 'Este indicador baseia-se na amplitude social alcançada pelo estudante em uma atividade Chat.';
$string['indicator:socialbreadthdef'] = 'Chat social';
$string['indicator:socialbreadthdef_help'] = 'O participante alcançou este percentual de engajamento social oferecido pelas atividades Chat durante este intervalo de análise (Níveis = Sem participação, Participante único, Participante com outros)';
$string['inputarea'] = 'Área de entrada de dados';
$string['invalidid'] = 'Sala de chat não foi encontrada!';
$string['list_all_sessions'] = 'Mostrar todas as sessões.';
$string['list_complete_sessions'] = 'Mostrar apenas sessões completas.';
$string['listing_all_sessions'] = 'Mostrando todas as sessões.';
$string['messagebeepseveryone'] = '{$a}';
$string['messagebeepsyou'] = '{$a} está bipando você!';
$string['messageenter'] = '{$a} entrou no chat';
$string['messageexit'] = '{$a} abandonou este chat';
$string['messages'] = 'Mensagens';
$string['messageyoubeep'] = 'Você chamou {$a}';
$string['method'] = 'Método do Chat';
$string['methodajax'] = 'AJAX';
$string['methoddaemon'] = 'Servidor chat daemon';
$string['methodnormal'] = 'Normal';
$string['modulename'] = 'Chat';
$string['modulename_help'] = 'O módulo de atividade chat permite que os participantes possam conversar em tempo real.

A conversa pode ser uma atividade de uma só vez ou pode ser repetida na mesma hora todos os dias ou todas as semanas. Sessões de chat são salvas e podem ser disponibilizadas para que todos possam visualizar ou restritas a usuários com a capacidade de visualizar os logs de sessão do chat.

Chats são especialmente úteis quando um grupo de bate-papo não é capaz de se encontrar cara-a-cara, como:

* Reuniões regulares dos estudantes participantes de cursos online para que possam compartilhar experiências com outros no mesmo curso, mas em um local diferente
* Um estudante temporariamente impossibilitado de comparecer pessoalmente conversar com seu professor para acompanhar o trabalho
* Estudantes na experiência de trabalho se reúnem para discutir suas experiências entre si e com seu professor
* Crianças mais jovens que usam chat em casa à noite como uma introdução controlada (monitorada) para o mundo das redes sociais
* A sessão de perguntas e respostas com um orador convidado em um local diferente
* Sessões para ajudar os estudantes a se prepararem para testes em que o professor ou outros estudantes, colocariam exemplos de perguntas';
$string['modulename_link'] = 'mod/chat/view';
$string['modulenameplural'] = 'Chats';
$string['neverdeletemessages'] = 'Nunca excluir as mensagens';
$string['nextchattime'] = 'Próximo chat:';
$string['nextsession'] = 'Próxima sessão programada';
$string['no_complete_sessions_found'] = 'Nenhuma sessão completa encontrada.';
$string['nochat'] = 'Nenhum chat encontrado';
$string['noguests'] = 'O chat não pode ser acessado por visitantes';
$string['nomessages'] = 'Nenhuma mensagem ainda';
$string['nopermissiontoseethechatlog'] = 'Você não tem permissão para ver os logs do chat.';
$string['normalkeepalive'] = 'KeepAlive';
$string['normalstream'] = 'Stream';
$string['noscheduledsession'] = 'Nenhuma sessão planejada';
$string['notallowenter'] = 'Você não tem permissão para entrar nesta sala.';
$string['notlogged'] = 'Você não está autenticado!';
$string['oldping'] = 'Tempo para disconecção';
$string['page-mod-chat-x'] = 'Qualquer página de chat';
$string['pastchats'] = 'Sessões encerradas';
$string['pluginadministration'] = 'Administração do chat';
$string['pluginname'] = 'Chat';
$string['privacy:metadata:chat_messages_current'] = 'Sessão do chat atual. Esses dados são temporários e são excluídos após a exclusão da sessão do chat.';
$string['privacy:metadata:chat_users'] = 'Monitora quais usuários estão em quais salas de chat';
$string['privacy:metadata:chat_users:firstping'] = 'Hora do primeiro acesso à sala de chat';
$string['privacy:metadata:chat_users:ip'] = 'IP do usuário';
$string['privacy:metadata:chat_users:lang'] = 'Idioma do usuário';
$string['privacy:metadata:chat_users:lastmessageping'] = 'Hora da última mensagem nesta sala de chat';
$string['privacy:metadata:chat_users:lastping'] = 'Hora do último acesso à sala de chat';
$string['privacy:metadata:chat_users:userid'] = 'O ID do usuário';
$string['privacy:metadata:chat_users:version'] = 'Como o usuário acessou o chat (sockets/basic/ajax/header_js)';
$string['privacy:metadata:messages'] = 'Um registro das mensagens enviadas durante uma sessão de chat';
$string['privacy:metadata:messages:issystem'] = 'Se a mensagem é uma mensagem gerada pelo sistema';
$string['privacy:metadata:messages:message'] = 'A mensagem';
$string['privacy:metadata:messages:timestamp'] = 'A hora que a mensagem foi enviada.';
$string['privacy:metadata:messages:userid'] = 'O ID do usuário autor da mensagem';
$string['refreshroom'] = 'Recarregar o texto';
$string['refreshuserlist'] = 'Recarregar a lista de usuários';
$string['removemessages'] = 'Remover todas as mensagens';
$string['repeatdaily'] = 'Na mesma hora todos os dias';
$string['repeatnone'] = 'Não repetir - publicar apenas o horário especifico';
$string['repeattimes'] = 'Repetir/publicar horário de sessão';
$string['repeatweekly'] = 'No mesmo horário cada semana';
$string['saidto'] = 'disse para';
$string['savemessages'] = 'Salvar as sessões encerradas';
$string['search:activity'] = 'Chat - informações da atividade';
$string['seesession'] = 'Ver esta sessão';
$string['send'] = 'Enviar';
$string['sending'] = 'Enviando';
$string['serverhost'] = 'Nome do servidor';
$string['serverip'] = 'IP do servidor';
$string['servermax'] = 'Máximo de usuários';
$string['serverport'] = 'Porta do Servidor';
$string['sessions'] = 'Sessões de chat';
$string['sessionstart'] = 'A próxima sessão de chat irá começar em {$a->date}, ({$a->fromnow} a partir de agora)';
$string['sessionstartsin'] = 'A próxima sessão do chat começará {$a} a partir de agora.';
$string['strftimemessage'] = '%H:%M';
$string['studentseereports'] = 'Todos podem ver as sessões encerradas';
$string['studentseereports_help'] = 'Se for definido como não, somente os usuários que possuirem a permissão mod/chat:readlog serão capazes de ver as logs de chats
';
$string['talk'] = 'Falar';
$string['updatemethod'] = 'Método de atualização';
$string['updaterate'] = 'porcentagem de atualização:';
$string['userlist'] = 'Lista de usuários';
$string['usingchat'] = 'Usando chat';
$string['usingchat_help'] = 'O módulo Chat tem alguma funcionalidades que tornam o bate-papo um pouco mais agradável.

*Carinhas - Todas as carinhas (emoticons) que você usa nos editores de texto podem ser utilizadas no chat. Por exemplo  :-)
* Links - Endereços web são automaticamente transformados em links
* Emoções - Você pode iniciar uma frase com  "/me" or ":" para representar emoções.  Por exemplo, se o seu nome é Kim e você digita  ":laughs!" or "/me laughs!" todos vão ler "Kim laughs!"
* Bips - Você pode tocar um som para outras pessoas clicando o link  "beep" ao lado do nome delas.  Escrevendo "beep all", todas as pessoas vão ouvir o bip.
* HTML - Você pode usar código html para inserir imagens no texto do chat e mudar a cor e o tamanho das letras.';
$string['viewreport'] = 'Ver sessões encerradas';
