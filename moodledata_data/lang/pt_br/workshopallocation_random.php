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
 * Strings for component 'workshopallocation_random', language 'pt_br', version '3.11'.
 *
 * @package     workshopallocation_random
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addselfassessment'] = 'Adicionar auto-avaliações';
$string['allocationaddeddetail'] = 'Nova avaliação a ser realizada: <strong> {$a->reviewername} </strong> é avaliador de <strong>{$a->authorname}</strong>';
$string['allocationdeallocategraded'] = 'Impossível desalocar avaliação já avaliada: avaliador <strong>{$a->reviewername}</strong>, autor do envio: <strong>{$a->authorname}</strong>';
$string['allocationreuseddetail'] = 'Avaliação reutilizada: <strong>{$a->reviewername}</strong> tido como avaliador de <strong>{$a->authorname}</strong>';
$string['allocationsettings'] = 'Configurações da alocação';
$string['assessmentdeleteddetail'] = 'Avaliação desalocada: <strong>{$a->reviewername}</strong> não é mais avaliador de <strong>{$a->authorname}</strong>';
$string['assesswosubmission'] = 'Participantes podem avaliar sem ter enviado nada';
$string['confignumofreviews'] = 'Número padrão de envios a ser alocado aleatoriamente';
$string['excludesamegroup'] = 'Evite revisões por colegas do mesmo grupo';
$string['noallocationtoadd'] = 'Nenhuma alocação para adicionar';
$string['nogroupusers'] = '<p>Aviso: Se o workshop estiver no modo \'grupos visíveis\' ou no modo \'grupos separados\', então os usuários DEVEM fazer parte de pelo menos um grupo para que recebam avaliações de colegas, que serão alocadas por esta ferramenta. Usuários sem grupo ainda podem receber novas auto-avaliações ou ter suas avaliações existentes removidas.</p>
<p>Esses usuários não estão alocados em um grupo: {$a}</p>';
$string['numofdeallocatedassessment'] = 'Desalocando {$a} avaliações';
$string['numofrandomlyallocatedsubmissions'] = 'Atribuindo aleatoriamente {$a} alocações';
$string['numofreviews'] = 'Número de avaliações';
$string['numofselfallocatedsubmissions'] = 'Auto-alocando {$a} envio(s)';
$string['numperauthor'] = 'por envio';
$string['numperreviewer'] = 'por avaliador';
$string['pluginname'] = 'Alocação aleatória';
$string['privacy:metadata'] = 'O plugin de atribuição aleatória não armazena nenhum dado pessoal. Dados pessoais reais sobre quem vai avaliar quem são armazenados pelo próprio módulo do Workshop e eles formam uma base para exportar os detalhes das avaliações.';
$string['randomallocationdone'] = 'Alocação aleatória concluída';
$string['removecurrentallocations'] = 'Remover alocações atuais';
$string['resultnomorepeers'] = 'Não há mais colegas disponíveis';
$string['resultnomorepeersingroup'] = 'Não há mais colegas disponíveis neste grupo separado';
$string['resultnotenoughpeers'] = 'Não há colegas suficientes disponíveis';
$string['resultnumperauthor'] = 'Tentando alocar {$a} avaliador(es) por autor';
$string['resultnumperreviewer'] = 'Tentando alocar {$a} avaliação(ões) por revisor';
$string['stats'] = 'Estatísticas da alocação atual';
