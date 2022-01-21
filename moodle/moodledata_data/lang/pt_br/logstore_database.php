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
 * Strings for component 'logstore_database', language 'pt_br', version '3.11'.
 *
 * @package     logstore_database
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['buffersize'] = 'Tamanho do buffer';
$string['buffersize_help'] = 'Número de entradas de log inseridas em uma única operação em lote, o que melhora o desempenho.';
$string['conectexception'] = 'Não pode se conectar à base de dados.';
$string['create'] = 'Criar';
$string['databasecollation'] = '"Collation" da base de dados';
$string['databasehandlesoptions'] = 'O banco de dados controla as opções';
$string['databasehandlesoptions_help'] = 'O banco de dados remoto controla suas próprias opções.';
$string['databasepersist'] = 'Conexões persistentes da base de dados';
$string['databaseschema'] = 'Esquema da base de dados';
$string['databasesettings'] = 'Configuração da base de dados';
$string['databasesettings_help'] = 'Detalhes da conexão para a base de dados externa de logs: {$a}';
$string['databasetable'] = 'Tabela da base de dados';
$string['databasetable_help'] = 'Nome da tabela onde os logs serão armazenados. Esta tabela deverá ter uma estrutura idêntica àquela usada pelo logstore_standard (mdl_logstore_standard_log).';
$string['filters'] = 'Filtros de log';
$string['filters_help'] = 'Hablitar filtros que excluem algumas ações de serem registradas.';
$string['includeactions'] = 'Incluir ações destes tipos';
$string['includelevels'] = 'Incluir ações com estes níveis educacionais';
$string['jsonformat'] = 'Formato JSON';
$string['jsonformat_desc'] = 'Use o formato JSON padrão em vez dos dados serializados PHP no campo \'other\' do banco de dados.';
$string['logguests'] = 'Registrar ações de convidados';
$string['other'] = 'Outro';
$string['participating'] = 'Participando';
$string['pluginname'] = 'Log em base de dados externa';
$string['pluginname_desc'] = 'Um  plugin de log que armazena as entradas de log em uma tabela externa.';
$string['privacy:metadata:log'] = 'Um conjunto de eventos passados';
$string['privacy:metadata:log:anonymous'] = 'Se o evento foi sinalizado como anônimo';
$string['privacy:metadata:log:eventname'] = 'O nome do evento';
$string['privacy:metadata:log:ip'] = 'O endereço IP usado no momento da ação';
$string['privacy:metadata:log:origin'] = 'A origem do evento';
$string['privacy:metadata:log:other'] = 'Informação adicional sobre o evento';
$string['privacy:metadata:log:realuserid'] = 'O ID do usuário real por trás do evento, quando um usuário estiver com outro .';
$string['privacy:metadata:log:relateduserid'] = 'O ID de um usuário relacionado a este evento';
$string['privacy:metadata:log:timecreated'] = 'O horário em que o evento ocorreu';
$string['privacy:metadata:log:userid'] = 'O ID do usuário que disparou este evento';
$string['read'] = 'Ler';
$string['tablenotfound'] = 'A tabela especificada não foi encontrada';
$string['teaching'] = 'Ensinando';
$string['testingsettings'] = 'Configurações de base de dados de testes...';
$string['testsettings'] = 'Conexão de teste';
$string['update'] = 'Atualizar';
