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
 * Strings for component 'quiz_statistics', language 'pt_br', version '3.11'.
 *
 * @package     quiz_statistics
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['actualresponse'] = 'Resposta atual';
$string['allattempts'] = 'todas as tentativas';
$string['allattemptsavg'] = 'Nota média de todas as tentativas';
$string['allattemptscount'] = 'Número total de tentativas avaliadas';
$string['analysisnameonly'] = '"{$a->name}"';
$string['analysisno'] = '({$a->number}) "{$a->name}"';
$string['analysisnovariant'] = '({$a->number}) "{$a->name}" variante {$a->variant}';
$string['analysisofresponses'] = 'Análise das respostas';
$string['analysisofresponsesfor'] = 'Análise das respostas para {$a}.';
$string['analysisvariant'] = '"{$a->name}" variante {$a->variant}';
$string['attempts'] = 'Tentativas';
$string['attemptsall'] = 'todas as tentativas';
$string['attemptsfirst'] = 'primeira tentativa';
$string['backtoquizreport'] = 'Retornar para a página principal de estatísticas.';
$string['calculatefrom'] = 'Calcular estatísticas de';
$string['calculatingallstats'] = 'Calculando estatísticas para questionário, questões e analisando os dados de resposta';
$string['cic'] = 'Coeficiente de consistência interna (para {$a})';
$string['completestatsfilename'] = 'Status';
$string['count'] = 'Número';
$string['counttryno'] = 'Contagem de tentativa {$a}';
$string['coursename'] = 'Nome do curso';
$string['detailedanalysis'] = 'Análise mais detalhada das respostas para esta questão';
$string['detailedanalysisforvariant'] = 'Uma análise mais detalhada das respostas à variante {$a} desta questão';
$string['discrimination_index'] = 'Índice de discriminação';
$string['discriminative_efficiency'] = 'Eficiência de discriminação';
$string['downloadeverything'] = 'Baixar relatório completo como';
$string['duration'] = 'Abrir para';
$string['effective_weight'] = 'Peso efetivo';
$string['errordeleting'] = 'Erro excluindo {$a} antigos registros.';
$string['errormedian'] = 'Erro ao buscar mediana';
$string['errorpowerquestions'] = 'Erro ao buscar dados para calcular a variância para os graus de interrogação';
$string['errorpowers'] = 'Erro ao buscar dados para calcular variância para notas do questionário';
$string['errorrandom'] = 'Erro obtendo dados de sub-item';
$string['errorratio'] = 'Taxa de erro (para {$a})';
$string['errorstatisticsquestions'] = 'Erro ao buscar dados para calcular estatísticas para notas da questão';
$string['facility'] = 'Índice de facilidade';
$string['firstattempts'] = 'primeira tentativa';
$string['firstattemptsavg'] = 'Nota média das primeiras tentativas';
$string['firstattemptscount'] = 'Quantidade de primeiras tentativas avaliadas';
$string['frequency'] = 'Frequência';
$string['highestattempts'] = 'tentativa com nota mais alta';
$string['highestattemptsavg'] = 'Média das notas das tentativas como maior nota';
$string['intended_weight'] = 'Peso planejado';
$string['kurtosis'] = 'Pontuação de distribuição curtose (para {$a})';
$string['lastattempts'] = 'última tentativa';
$string['lastattemptsavg'] = 'Média das notas das últimas tentativas';
$string['lastcalculated'] = 'Último cálculo {$a->lastcalculated} anterior onde houve {$a->count} tentativas desde então.';
$string['maximumfacility'] = 'Facilidade máxima';
$string['median'] = 'Nota mediana (para {$a})';
$string['medianfacility'] = 'Facilidade Mediana';
$string['minimumfacility'] = 'Facilidade mínima';
$string['modelresponse'] = 'Resposta do modelo';
$string['nameforvariant'] = 'Variante {$a->variant} de {$a->name}';
$string['negcovar'] = 'Covariância negativa da nota com a nota total da tentativa';
$string['negcovar_help'] = 'A nota desta questão para esse conjunto de tentativas no questionário varia de maneira oposta a  nota geral da tentativa. Isso significa que a nota de todas as tentativas tende a ficar abaixo da média quando a nota para esta questão está acima da média e vice-versa.

Nossa equação de peso efetivo da questão não pode ser calculada neste caso. Os cálculos de peso efetivo da questão para as outras questões neste questionário são o peso efetivo da questão para estas questões se as questões em destaque com uma covariância negativa são dadas para uma avaliação máxima de zero.

Se você editar um questionário e atribuir a esta(s) questões(s) com covariância negativa uma nota máxima de zero, o peso efetivo das questões será zero e o peso efetivo real das questões será calculado agora.';
$string['nogradedattempts'] = 'Nenhuma tentativa foi realizada neste questionário, ou todas as tentativas têm questões que precisam de atribuição de nota manual.';
$string['nostudentsingroup'] = 'Ainda não há estudantes no grupo';
$string['optiongrade'] = 'Crédito parcial';
$string['partofquestion'] = 'Parte da questão';
$string['pluginname'] = 'Estatísticas';
$string['position'] = 'Posição';
$string['positions'] = 'Posição(ões)';
$string['questioninformation'] = 'Informação da questão';
$string['questionname'] = 'Nome da questão';
$string['questionnumber'] = 'Q#';
$string['questionstatistics'] = 'Estatísticas da questão';
$string['questionstatsfilename'] = 'Status da questão';
$string['questiontype'] = 'Tipo de questão';
$string['quizinformation'] = 'Informação do questionário';
$string['quizname'] = 'Nome do questionário';
$string['quizoverallstatistics'] = 'Teste estatísticas globais';
$string['quizstatisticscleanuptask'] = 'Limpar registros antigos do cache de estatísticas do questionário';
$string['quizstructureanalysis'] = 'Análise da estrutura do questionário';
$string['random_guess_score'] = 'Pontuação aleatória estimada';
$string['rangebetween'] = '{$a->min} − {$a->max}';
$string['rangeofvalues'] = 'Intervalo de estatísticas para essas questões';
$string['recalculatenow'] = 'Recalcular agora';
$string['reportsettings'] = 'Configurações de cálculo estatística';
$string['response'] = 'Resposta';
$string['skewness'] = 'Assimetría da distribuição de puntuação (para {$a})';
$string['slotstructureanalysis'] = 'A análise estrutural para a questão de número {$a}';
$string['standarddeviation'] = 'Desvio padrão (para {$a})';
$string['standarddeviationq'] = 'Desvio padrão ';
$string['standarderror'] = 'Erro padrão (para {$a})';
$string['statistics'] = 'Estatísticas';
$string['statistics:view'] = 'Ver relatório de estatísticas';
$string['statisticsreport'] = 'Relatório de estatísticas';
$string['statisticsreportgraph'] = 'Estatísticas de posições da questão';
$string['statsfor'] = 'Quiz de estatísticas (por {$a})';
$string['variant'] = 'Variante';
$string['viewanalysis'] = 'Ver detalhes';
$string['whichtries'] = 'Analisar as respostas para';
