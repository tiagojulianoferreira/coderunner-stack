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
 * Strings for component 'tool_recyclebin', language 'pt_br', version '3.11'.
 *
 * @package     tool_recyclebin
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['alertdeleted'] = '\'{$a->name}\' foi excluído.';
$string['alertemptied'] = 'A lixeira foi esvaziada.';
$string['alertrestored'] = '\'{$a->name}\' foi restaurado.';
$string['autohide'] = 'Ocultar automaticamente';
$string['autohide_desc'] = 'Automaticamente esconde a lixeira quando a mesma está vazia.';
$string['categorybinenable'] = 'Habilita lixeira para categorias';
$string['categorybinexpiry'] = 'Tempo de duração do curso';
$string['categorybinexpiry_desc'] = 'Por quanto tempo um curso excluído deve permanecer na lixeira?';
$string['coursebinenable'] = 'Habilita lixeira para cursos';
$string['coursebinexpiry'] = 'Tempo de vida do item';
$string['coursebinexpiry_desc'] = 'Por quanto tempo um item excluído deve permanecer na lixeira?';
$string['datedeleted'] = 'Data de exclusão';
$string['deleteall'] = 'Excluir tudo';
$string['deleteallconfirm'] = 'Você tem certeza que quer excluir todos os itens da lixeira?';
$string['deleteconfirm'] = 'Você tem certeza que quer excluir os itens selecionados da lixeira?';
$string['deleteexpirywarning'] = 'Os conteúdos serão excluídos permanentemente após {$a}.';
$string['eventitemcreated'] = 'Item criado';
$string['eventitemcreated_desc'] = 'Item criado com o ID {$a->objectid}.';
$string['eventitemdeleted'] = 'Item excluído';
$string['eventitemdeleted_desc'] = 'Item com ID {$a->objectid} excluído.';
$string['eventitemrestored'] = 'Item restaurado';
$string['eventitemrestored_desc'] = 'O item com o ID {$a->objectid} foi restaurado.';
$string['invalidcontext'] = 'Contexto fornecido inválido.';
$string['noitemsinbin'] = 'Não há itens na lixeira.';
$string['notenabled'] = 'Desculpe, mas a lixeira foi desabilitada pelo administrador.';
$string['pluginname'] = 'Lixeira';
$string['privacy:metadata'] = 'O plugin da lixeira não armazena nenhum dado pessoal.';
$string['recyclebin:deleteitems'] = 'Excluir itens da lixeira';
$string['recyclebin:restoreitems'] = 'Restaurar itens da lixeira';
$string['recyclebin:viewitems'] = 'Visualizar itens da lixeira';
$string['taskcleanupcategorybin'] = 'Limpar a lixeira da categoria';
$string['taskcleanupcoursebin'] = 'Limpar a lixeira do curso';
