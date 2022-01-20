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
 * Strings for component 'tool_filetypes', language 'pt_br', version '3.11'.
 *
 * @package     tool_filetypes
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addfiletypes'] = 'Adicionar um novo tipo de arquivo';
$string['corestring'] = '"String" de idiomas alternativos';
$string['corestring_help'] = 'Essa configuração pode ser usada para selecionar uma sequência de idiomas diferentes do arquivo de idioma mimetypes.php principal. Geralmente ela deve ser deixada em branco. Para os tipos personalizados, use o campo de descrição.';
$string['defaulticon'] = 'Ícone padrão para o tipo MIME';
$string['defaulticon_help'] = 'Se houver várias extensões de arquivo com o mesmo tipo MIME, selecione essa opção para uma das extensões de modo que seu ícone seja usado para determinar um ícone do tipo MIME.';
$string['delete_confirmation'] = 'Você tem certeza absoluta de que deseja remover <strong>{$a}</strong>?';
$string['deletea'] = 'Excluir {$a}';
$string['deletefiletypes'] = 'Excluir um tipo de arquivo';
$string['description'] = 'Descrição personalizada';
$string['description_help'] = 'Descrição simples do tipo de arquivo, por exemplo, \'Kindle ebook\'. Se o seu site oferece suporte a vários idiomas e utilizar o filtro multi-idioma, você pode inserir tags multilíngues neste campo para fornecer uma descrição em diferentes idiomas.';
$string['descriptiontype'] = 'Tipo de descrição';
$string['descriptiontype_custom'] = 'Descrição personalizada especificada neste formulário';
$string['descriptiontype_default'] = 'Padrão (tipo MIME ou correspondente sequência de idioma, se disponível)';
$string['descriptiontype_help'] = 'Há três possíveis maneiras de especificar uma descrição.

* O comportamento padrão usa o tipo MIME. Se existe uma "string" de idioma em mimetypes.php correspondente a esse tipo MIME, ela vai ser usada; caso contrário, o tipo MIME em si será exibido para os usuários.
* Você pode especificar uma descrição personalizada neste formulário.
* Você pode especificar o nome da "string" de idioma em mimetypes.php para usar em vez do tipo MIME.';
$string['descriptiontype_lang'] = 'String de idioma alternativa (de mimetypes.php)';
$string['displaydescription'] = 'Descrição';
$string['editfiletypes'] = 'Editar um tipo de arquivo existente';
$string['emptylist'] = 'Não existem tipos de arquivo definidos.';
$string['error_addentry'] = 'A extensão do tipo de arquivo, descrição, tipo MIME e ícone não devem conter quebra de linha e caracteres ponto-e-vírgula.';
$string['error_defaulticon'] = 'Outra extensão de arquivo com o mesmo tipo MIME já está marcada como ícone padrão.';
$string['error_extension'] = 'O extensão do tipo de arquivo {$a} já existe ou é inválida. As extensões dos arquivos devem ser únicas e não devem conter caracteres especiais.';
$string['error_notfound'] = 'O tipo de arquivo com extensão {$a} não pôde ser encontrado.';
$string['extension'] = 'Extensão';
$string['extension_help'] = 'Extensão do arquivo sem o ponto, por exemplo "mobi"';
$string['groups'] = 'Grupos de tipos';
$string['groups_help'] = 'Lista opcional de grupos de tipos de arquivo ao qual esse tipo pertence. Estas são categorias genéricas, como \'documento\' e \'imagem\'.';
$string['icon'] = 'Ícone do arquivo';
$string['icon_help'] = 'Nome do arquivo do ícone.

A lista de ícones é tomada a partir do diretório /pix/f dentro de sua instalação Moodle. Você pode adicionar ícones personalizados nesta pasta, se necessário.';
$string['mimetype'] = 'Tipo MIME';
$string['mimetype_help'] = 'Tipo MIME associado a este tipo de arquivo, por exemplo, \'application/x-mobipocket-ebook\'';
$string['pluginname'] = 'Tipos de arquivos';
$string['privacy:metadata'] = 'O plugin Tipos de arquivo não armazena nenhum dado pessoal.';
$string['revert'] = 'Restaurar {$a} para os padrões do Moodle';
$string['revert_confirmation'] = 'Tem certeza de que deseja restaurar {$a} para os padrões do Moodle, descartando as alterações?';
$string['revertfiletype'] = 'Restaurar um tipo de arquivo';
$string['source'] = 'Tipo';
$string['source_custom'] = 'Personalizado';
$string['source_deleted'] = 'Excluído';
$string['source_modified'] = 'Modificado';
$string['source_standard'] = 'Padrão';
