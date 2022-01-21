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
 * Strings for component 'book', language 'pt_br', version '3.11'.
 *
 * @package     book
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addafter'] = 'Adicionar novo capítulo';
$string['addafterchapter'] = 'Adicionar novo capítulo após "{$a->title}"';
$string['book:addinstance'] = 'Adicionar novo livro';
$string['book:edit'] = 'Editar capítulos de livros';
$string['book:read'] = 'Ver livro';
$string['book:viewhiddenchapters'] = 'Visualizar capítulos ocultos de livros';
$string['chapterandsubchaptersdeleted'] = 'O capítulo "{$a->title}" e os seus subcapítulos {$a->subchapters} foram excluídos';
$string['chapterdeleted'] = 'O capítulo "{$a->title}" foi excluído';
$string['chapters'] = 'Capítulos';
$string['chaptertitle'] = 'Título do capítulo';
$string['confchapterdelete'] = 'Você quer mesmo apagar este capítulo?';
$string['confchapterdeleteall'] = 'Você quer mesmo excluir este capítulo e todos seus subcapítulos?';
$string['content'] = 'Conteúdo';
$string['customtitles'] = 'Títulos personalizados';
$string['customtitles_help'] = 'Normalmente, o título do capítulo é exibido na tabela de conteúdos (TOC) E como um título acima do conteúdo.

Se a caixa de seleção "títulos personalizados" está marcada, o título do capítulo não é exibido como um cabeçalho acima do conteúdo. Um título diferente (talvez mais do que o título do capítulo) pode ser inserido como parte do conteúdo.';
$string['deletechapter'] = 'Excluir capítulo "{$a}"';
$string['editchapter'] = 'Editar capítulo "{$a}"';
$string['editingchapter'] = 'Edição de capítulo';
$string['errorchapter'] = 'Erro ao ler capítulo de livro.';
$string['eventchaptercreated'] = 'Capítulo criado';
$string['eventchapterdeleted'] = 'Capítulo excluído';
$string['eventchapterupdated'] = 'Capítulo atualizado';
$string['eventchapterviewed'] = 'Capítulo visualizado';
$string['hidechapter'] = 'Ocultar capítulo "{$a}"';
$string['indicator:cognitivedepth'] = 'Indicador cognitivo do Livro';
$string['indicator:cognitivedepth_help'] = 'Este indicador baseia-se na profundidade cognitiva alcançada pelo estudante em um recurso Livro.';
$string['indicator:cognitivedepthdef'] = 'Livro cognitivo';
$string['indicator:cognitivedepthdef_help'] = 'O participante alcançou este percentual de engajamento cognitivo oferecido pelas atividades Livro durante este intervalo de análise (Níveis = Sem visualização, Visualização)';
$string['indicator:socialbreadth'] = 'Indicador social do Livro';
$string['indicator:socialbreadth_help'] = 'Este indicador baseia-se na amplitude social alcançada pelo estudante em um recurso Livro.';
$string['indicator:socialbreadthdef'] = 'Livro social';
$string['indicator:socialbreadthdef_help'] = 'O participante alcançou esse percentual de engajamento social oferecido pelas atividades Livro durante este intervalo de análise (Níveis = Sem participação, Participante único)';
$string['modulename'] = 'Livro';
$string['modulename_help'] = 'O módulo livro permite que professores criem um recurso com diversas páginas em formato de livro, com capítulos e subcapítulos. Livros podem conter arquivos de mídia bem como textos e são úteis para exibir grande quantidade de informação que pode ficar organizada em seções.

Um livro pode ser usado

*Para exibir material de leitura para um módulo de estudo individual
*Como um manual departamental
*Como um portfólio para apresentação do trabalho do estudante';
$string['modulename_link'] = 'mod/book/view';
$string['modulenameplural'] = 'Livros';
$string['movechapterdown'] = 'Mover capítulo para baixo "{$a}"';
$string['movechapterup'] = 'Mover capítulo para cima "{$a}"';
$string['navexit'] = 'Sair do livro';
$string['navimages'] = 'Imagens';
$string['navnext'] = 'Próximo';
$string['navnexttitle'] = 'Próximo: {$a}';
$string['navoptions'] = 'Opções disponíveis para links de navegação';
$string['navoptions_desc'] = 'Opções para a exibição do registro de navegação';
$string['navprev'] = 'Anterior';
$string['navprevtitle'] = 'Anterior: {$a}';
$string['navstyle'] = 'Estilo de navegação';
$string['navstyle_help'] = '* Imagens - Ícones que são utilizados na navegação
* Texto - Títulos dos capítulos que são usados na navegação';
$string['navtext'] = 'Texto';
$string['navtoc'] = 'Somente TOC';
$string['nocontent'] = 'Nenhum conteúdo foi adicionado a esse livro até agora.';
$string['numbering'] = 'Formatação de capítulo';
$string['numbering0'] = 'Nada';
$string['numbering1'] = 'Números';
$string['numbering2'] = 'Bolinhas';
$string['numbering3'] = 'Indentado';
$string['numbering_help'] = '* Nenhum - títulos de capítulos e sub-capítulos não são formatados
* Números - capítulos e sub-capítulos são numerados (1, 1.1, 1.2, 2, ...)
* Marcadores - sub-capítulos são indentados, com marcadores (bullets)
* Indentado - sub-capítulos são indentados';
$string['numberingoptions'] = 'Opções disponíveis para formatação de capítulo';
$string['numberingoptions_desc'] = 'Selecione as opções de numeração que deverão estar disponíveis ao criar novos livros.';
$string['page-mod-book-x'] = 'Qualquer página do módulo Livro';
$string['pluginadministration'] = 'Administração de livros';
$string['pluginname'] = 'Livro';
$string['previouschapter'] = 'Capítulo anterior';
$string['privacy:metadata'] = 'O módulo de atividade Livro não armazena nenhum dado pessoal.';
$string['removeallbooktags'] = 'Remova todas as tags do livro';
$string['search:activity'] = 'Livro - informações sobre o recurso';
$string['search:chapter'] = 'Livro - capítulos';
$string['showchapter'] = 'Mostrar capítulo "{$a}"';
$string['subchapter'] = 'Sub-capítulo';
$string['subchapternotice'] = '(Apenas disponível uma vez que o primeiro capítulo foi criado)';
$string['subplugintype_booktool'] = 'Ferramenta livro';
$string['subplugintype_booktool_plural'] = 'Ferramentas do livro';
$string['tagarea_book_chapters'] = 'Capítulos do livro';
$string['tagsdeleted'] = 'As tags do livro foram excluídas';
$string['toc'] = 'Índice';
$string['top'] = 'topo';
