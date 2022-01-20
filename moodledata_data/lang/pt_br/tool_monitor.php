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
 * Strings for component 'tool_monitor', language 'pt_br', version '3.11'.
 *
 * @package     tool_monitor
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addrule'] = 'Adicionar nova regra';
$string['allevents'] = 'Todos os eventos';
$string['allmodules'] = 'Todas as instâncias';
$string['area'] = 'Área';
$string['areatomonitor'] = 'Área para monitorar';
$string['cachedef_eventsubscriptions'] = 'Este armazena a lista de assinaturas de eventos para cursos individuais';
$string['contactadmin'] = 'Contate o seu administrador para habilitá-lo.';
$string['core'] = 'Núcleo';
$string['currentsubscriptions'] = 'Suas assinaturas atuais';
$string['defaultmessagetemplate'] = 'Nome da regra: {rulename}
Descrição: {description}
Nome do evento: {eventname}';
$string['deleterule'] = 'Apagar regra';
$string['deletesubscription'] = 'Excluir assinatura';
$string['description'] = 'Descrição:';
$string['disablefieldswarning'] = 'Alguns campos não podem ser editados pois esta regra já tem assinaturas.';
$string['duplicaterule'] = 'Duplicar regra';
$string['editrule'] = 'Editar regra';
$string['enablehelp'] = 'Habilitar/desabilitar o monitoramento de eventos';
$string['enablehelp_help'] = 'O monitoramento de eventos deve estar habilitado para que você possa criar e assinar as regras. Note que habilitar o monitoramento de eventos pode afetar o desempenho do seu site.';
$string['errorincorrectevent'] = 'Por favor selecione um evento relacionado ao plugin selecionado';
$string['event'] = 'Evento';
$string['eventnotfound'] = 'Evento não encontrado';
$string['eventrulecreated'] = 'Regra criada';
$string['eventruledeleted'] = 'Regra apagada';
$string['eventruleupdated'] = 'Regra atula';
$string['eventsubcreated'] = 'Assinatura criada';
$string['eventsubcriteriamet'] = 'Critério de assinatura atingido';
$string['eventsubdeleted'] = 'Assinatura apagada';
$string['freqdesc'] = '{$a->freq} vez(es) em {$a->mins} minuto(s)';
$string['frequency'] = 'Limite para notificação';
$string['frequency_help'] = 'O número de eventos dentro de um determinado período de tempo necessário para que uma mensagem de notificação seja enviada.';
$string['inminutes'] = 'em minutos';
$string['invalidmodule'] = 'Módulo inválido';
$string['manage'] = 'Gerenciar';
$string['managerules'] = 'Regras de monitoramento de eventos';
$string['manageruleslink'] = 'Você pode gerenciar regras a partir página {$a}.';
$string['managesubscriptions'] = 'Monitoramento de eventos';
$string['managesubscriptionslink'] = 'Você pode se inscrever para as regras da página {$a}.';
$string['messageprovider:notification'] = 'Notificações de assinaturas de regras';
$string['messagetemplate'] = 'Mensagem de notificação';
$string['messagetemplate_help'] = 'Uma mensagem de notificação é enviada aos assinantes assim que o limite de notificação for atingido. Ela pode  incluir qualquer um ou todos os seguintes espaços reservados:

* Link para o local do evento {link}
* Link para o módulo do evento {modulelink}
* Nome da regra {rulename}
* Descrição {description}
* Nome do evento {eventname}';
$string['messagetemplate_link'] = 'admin/tool/monitor/managerules';
$string['moduleinstance'] = 'Instância';
$string['monitor:managerules'] = 'Gerenciar regras do monitor de eventos';
$string['monitor:managetool'] = 'Habilitar/desabilitar o monitoramento de eventos';
$string['monitor:subscribe'] = 'Assinar regras de monitoramento de eventos';
$string['monitordisabled'] = 'Monitoramento de eventos está desabilitado.';
$string['monitorenabled'] = 'Monitoramento de eventos está habilitado.';
$string['norules'] = 'Não há regras de monitoramento de eventos.';
$string['pluginname'] = 'Monitor de eventos';
$string['privacy:createdrules'] = 'Regras do monitor de eventos que criei';
$string['privacy:metadata:description'] = 'Descrição da regra';
$string['privacy:metadata:eventname'] = 'Nome completo do evento';
$string['privacy:metadata:frequency'] = 'Freqüência de notificações';
$string['privacy:metadata:historysummary'] = 'Armazena o histórico das notificações de mensagens enviadas';
$string['privacy:metadata:inactivedate'] = 'Período de tempo, em dias, após o qual uma assinatura inativa será removida completamente';
$string['privacy:metadata:lastnotificationsent'] = 'Quando uma notificação foi enviada pela última vez para esta inscrição.';
$string['privacy:metadata:messagesummary'] = 'As notificações são enviadas para o sistema de mensagens.';
$string['privacy:metadata:name'] = 'Nome da regra';
$string['privacy:metadata:plugin'] = 'Nome Frankenstlye do plugin';
$string['privacy:metadata:rulessummary'] = 'Isso armazena as regras do monitor.';
$string['privacy:metadata:subscriptionssummary'] = 'Armazena assinaturas de usuários para várias regras';
$string['privacy:metadata:template'] = 'Modelo de mensagem';
$string['privacy:metadata:timecreatedrule'] = 'Quando esta regra foi criada';
$string['privacy:metadata:timecreatedsub'] = 'Quando esta assinatura foi criada';
$string['privacy:metadata:timemodifiedrule'] = 'Quando esta regra foi modificada pela última vez';
$string['privacy:metadata:timesent'] = 'Quando a mensagem foi enviada';
$string['privacy:metadata:timewindow'] = 'Janela de tempo em segundos';
$string['privacy:metadata:userid'] = 'O ID do usuário que criou a regra.';
$string['privacy:metadata:useridhistory'] = 'O ID do usuário a quem esta notificação foi enviada';
$string['privacy:metadata:useridsub'] = 'O ID do assinante.';
$string['privacy:subscriptions'] = 'Minhas assinaturas do monitor de eventos';
$string['processevents'] = 'Processar eventos';
$string['ruleareyousure'] = 'Tem certeza de que deseja excluir a regra "{$a}"?';
$string['ruleareyousureextra'] = 'Existem {$a} assinaturas a esta regra que também serão excluídas.';
$string['rulecopysuccess'] = 'Regra duplicada com sucesso';
$string['ruledeletesuccess'] = 'Regra excluída com sucesso';
$string['rulehelp'] = 'Detalhes da regra';
$string['rulehelp_help'] = 'Esta regra de escuta para o tempo em que o evento \'{$a->eventname}\' em \'{$a->eventcomponent}\' tenha sido acionado {$a->frequency} vez(es) em {$a->minutes} minuto(s).';
$string['rulename'] = 'Nome da regra';
$string['rulenopermission'] = 'Você não tem permissão para se inscrever em qualquer evento.';
$string['rulenopermissions'] = 'Você não tem permissões para "{$a} uma regra"';
$string['rulescansubscribe'] = 'Regras que você pode assinar';
$string['selectacourse'] = 'Escolher um curso';
$string['selectcourse'] = 'Visite este relatório no nível curso para obter uma lista de possíveis módulos';
$string['subareyousure'] = 'Tem certeza de que deseja excluir a assinatura para a regra "{$a}"?';
$string['subcreatesuccess'] = 'Assinatura criada com sucesso';
$string['subdeletesuccess'] = 'Assinatura excluída com sucesso';
$string['subhelp'] = 'Detalhes da assinatura';
$string['subhelp_help'] = 'Esta subscrição escuta quando o evento \'{$a->eventname}\' foi desencadeada no tempo {$a->frequency} \'{$a->moduleinstance}\' (s) em {$a->minutes} minuto (s).';
$string['subscribeto'] = 'Assinar regra "{$a}"';
$string['taskchecksubscriptions'] = 'Ativar/desativar assinaturas em regras inválidas.';
$string['taskcleanevents'] = 'Remove eventos do monitor de eventos';
$string['unsubscribe'] = 'Cancelar assinatura';
