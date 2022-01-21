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
 * Strings for component 'gradingform_guide', language 'pt_br', version '3.11'.
 *
 * @package     gradingform_guide
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addcomment'] = 'Adicionar';
$string['addcriterion'] = 'Adicionar critério';
$string['additionalcomments'] = 'Comentários adicionais';
$string['alwaysshowdefinition'] = 'Mostrar definição do guia para estudantes';
$string['backtoediting'] = 'Voltar para edição';
$string['clicktocopy'] = 'Clique para copiar este texto no feedback do critério';
$string['clicktoedit'] = 'Clique para editar';
$string['clicktoeditname'] = 'Click para editar nome do critério';
$string['comment'] = 'Comentário';
$string['comments'] = 'Comentários frequentemente utilizados';
$string['commentsdelete'] = 'Apagar comentário';
$string['commentsempty'] = 'Clique para editar comentário';
$string['commentsmovedown'] = 'Mover para baixo';
$string['commentsmoveup'] = 'Mover para cima';
$string['confirmdeletecriterion'] = 'Você tem certeza que quer apagar este item?';
$string['confirmdeletelevel'] = 'Você tem certeza que quer apagar este nível?';
$string['criterion'] = 'Nome do critério';
$string['criteriondelete'] = 'Apagar critério';
$string['criterionempty'] = 'Clique para editar critério';
$string['criterionmovedown'] = 'Mover para baixo';
$string['criterionmoveup'] = 'Mover para cima';
$string['criterionname'] = 'Nome do critério';
$string['criterionremark'] = 'Comentário do critério {$a}';
$string['definemarkingguide'] = 'Definir avaliação da guia';
$string['description'] = 'Descrição';
$string['descriptionmarkers'] = 'Descrição para avaliadores';
$string['descriptionstudents'] = 'Descrição para estudantes';
$string['err_maxscoreisnegative'] = 'A pontuação máxima não é válida, não são permitidos valores negativos';
$string['err_maxscorenotnumeric'] = 'Pontuação máxima do critério precisa ser numérica';
$string['err_nocomment'] = 'Comentário não pode ficar vazia';
$string['err_nodescription'] = 'Descrição do estudante não pode ficar vazia';
$string['err_nodescriptionmarkers'] = 'Descrição do avaliador não pode ficar vazia';
$string['err_nomaxscore'] = 'Pontuação máxima do critério não pode ficar vazia';
$string['err_noshortname'] = 'Nome do critério não pode ficar vazio';
$string['err_scoreinvalid'] = 'A pontuação dada no \'{$a->criterianame}\' não é válida pois a pontuação máxima é: {$a->maxscore}';
$string['err_scoreisnegative'] = 'A pontuação atribuída a \'{$a->criterianame}\' não é válida, não são permitidos valores negativos';
$string['err_shortnametoolong'] = 'Critério de Nome deve ser inferior a 256 caracteres';
$string['gradingof'] = '{$a} avaliação';
$string['guide'] = 'Guia de marcação';
$string['guidemappingexplained'] = 'AVISO: Seu guia de avaliação tem um máximo de <b>{$a->maxscore} pontos</b> mas a nota máxima configurada na atividade é {$a->modulegrade}. A nota máxima configurada no seu guia de avaliação será ajustada à nota máxima da atividade.<br />
Notas intermediarias será convertidas respectivamente e arredondadas para a avaliação disponível mais próxima.';
$string['guidenotcompleted'] = 'Por favor insira uma nota válida para cada critério';
$string['guideoptions'] = 'Opções do guia de avaliação';
$string['guidestatus'] = 'Status atual do guia de avaliação';
$string['hidemarkerdesc'] = 'Ocultar a descrição do critério de avaliação';
$string['hidestudentdesc'] = 'Ocultar as descrições dos critérios do estudante';
$string['insertcomment'] = 'Inserir comentário utilizado com frequência';
$string['maxscore'] = 'Nota máxima';
$string['name'] = 'Nome';
$string['needregrademessage'] = 'As definições da aba de avaliação foram alteradas depois que o estudante foi avaliado. O estudante não pode ver esta aba de avaliação até que ela seja verificada e a nota atualizada.';
$string['pluginname'] = 'Guia de avaliação';
$string['previewmarkingguide'] = 'Guia de avaliação anterior';
$string['privacy:metadata:instanceid'] = 'Um identificador para uma nota usada por uma atividade.';
$string['privacy:metadata:score'] = 'Uma pontuação para este critério de avaliação.';
$string['regrademessage1'] = 'Você está prestes a salvar alterações em um guia de avaliação que já foi utilizado para avaliação. Por favor indique se as avaliações existentes precisam ser revisadas. Se você marcar essa opção o guia de avaliação será ocultado para os estudantes até que sejam atualizados.';
$string['regrademessage5'] = 'Você está prestes a salvar alterações significativas em um guia que já foi utilizado para avaliação. O valor no livro de notas permanecerá inalterado mas o guia de avaliação será ocultada dos estudantes até que seus itens sejam reavaliados.';
$string['regradeoption0'] = 'Não marcar para reavaliação';
$string['regradeoption1'] = 'Marcar para reavaliação';
$string['restoredfromdraft'] = 'NOTA: A última tentativa de avaliar esta pessoa não foi salva corretamente, portanto um rascunho da avaliação foi restaurado. Se você preferir descartar essas alterações, clique no botão \'Cancelar\' abaixo.';
$string['save'] = 'Salvar';
$string['saveguide'] = 'Salvar guia de avaliação e torná-lo pronto';
$string['saveguidedraft'] = 'Salvar como racunho';
$string['score'] = 'pontos';
$string['score_help'] = 'Digite uma pontuação para {$a->criterion} entre 0 e {$a->maxscore}.';
$string['scoreforcriterion'] = 'Pontuação de {$a}';
$string['showmarkerdesc'] = 'Mostrar descrição dos critérios de avaliação';
$string['showmarkspercriterionstudents'] = 'Mostrar avaliação por critérios aos estudantes';
$string['showstudentdesc'] = 'Mostrar descrição dos critérios aos estudantes';
