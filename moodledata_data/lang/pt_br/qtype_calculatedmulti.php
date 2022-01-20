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
 * Strings for component 'qtype_calculatedmulti', language 'pt_br', version '3.11'.
 *
 * @package     qtype_calculatedmulti
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['answeroptions'] = 'Opções de escolha';
$string['answeroptions_help'] = 'A fórmula de escolha sugerida é de ...<strong>{={x}+..}</strong>...';
$string['pluginname'] = 'Múltipla escolha calculada';
$string['pluginname_help'] = 'As questões de múltipla escolha calculada são como questões de múltipla escolha, que em seus elementos de escolha podem ser incluídos os resultados das fórmulas numéricas usando curingas entre chaves que são substituídos por valores individuais quando o questionário é preenchido. Por exemplo, se a questão: "Qual é a área de um retângulo de comprimento {l} e largura {w}?" tem escolha {= {l} * {w}}, onde * denota multiplicação.';
$string['pluginname_link'] = 'question/type/calculatedmulti';
$string['pluginnameadding'] = 'Adicionando uma questão calculada de múltipla escolha.';
$string['pluginnameediting'] = 'Editando uma questão de múltipla escolha calculada';
$string['pluginnamesummary'] = 'As questões de Múltipla escolha calculada são como questões de múltipla escolha, cujos elementos de escolha podem incluir resultados da fórmula com valores numéricos que são selecionados aleatoriamente a partir de um conjunto quando o questionário é preenchido.';
$string['privacy:metadata'] = 'O plugin de tipo de questão Múltipla Escolha não armazena nenhum dado pessoal.';
