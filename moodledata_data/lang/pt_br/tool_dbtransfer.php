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
 * Strings for component 'tool_dbtransfer', language 'pt_br', version '3.11'.
 *
 * @package     tool_dbtransfer
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['clidriverlist'] = 'Drivers de banco de dados disponíveis para a migração';
$string['cliheading'] = 'Migração de banco de dados - certifique-se que ninguém está acessando o servidor durante a migração!';
$string['climigrationnotice'] = 'Migração de banco de dados em andamento, aguarde até que a migração seja concluída e administrador do servidor de configuração de atualizações exclua o arquivo  $CFG->dataroot/climaintenance.html.';
$string['convertinglogdisplay'] = 'Convertendo log de ações de exibição';
$string['dbexport'] = 'Exportação do banco de dados';
$string['dbtransfer'] = 'Transferência do banco de dados';
$string['enablemaintenance'] = 'Ativar o modo de manutenção';
$string['enablemaintenance_help'] = 'Esta opção ativa modo de manutenção durante e após a migração do banco de dados, que impede o acesso de todos os usuários, até a conclusão da migração. Por favor, note que o administrador tem que apagar manualmente o arquivo $CFG->dataroot/climaintenance.html, depois atualizar as configurações no config.php para retomar a operação normal.';
$string['exportdata'] = 'Exportar dados';
$string['notargetconectexception'] = 'Desculpe, não foi possível conectar ao banco de dados alvo.';
$string['options'] = 'Opções';
$string['pluginname'] = 'Transferência de banco de dados';
$string['privacy:metadata'] = 'O plugin Transferência de banco de dados não armazena nenhum dado pessoal.';
$string['targetdatabase'] = 'Banco de dados destino';
$string['targetdatabasenotempty'] = 'Banco de dados de destino não contem nenhuma tabela com prefixo informado!';
$string['transferdata'] = 'Transferir dados';
$string['transferdbintro'] = 'Este script irá transferir todo o conteúdo desse banco de dados para outro servidor de banco de dados. É freqüentemente utilizado para migrar dados para diferentes tipos de banco de dados.';
$string['transferdbtoserver'] = 'Transferir este banco de dados Moodle para outro servidor';
$string['transferringdbto'] = 'Transferindo a base {$a->dbtypefrom} para {$a->dbtype} banco de dados {$a->dbname} em {$a->dbhost}';
