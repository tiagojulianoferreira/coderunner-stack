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
 * Strings for component 'glossary', language 'pt_br', version '3.11'.
 *
 * @package     glossary
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addcategory'] = 'Adicionar categoria';
$string['addcomment'] = 'Inserir comentário';
$string['addentry'] = 'Inserir novo item';
$string['addingcomment'] = 'Inserir um comentário';
$string['alias'] = 'Palavra chave';
$string['aliases'] = 'Outras palavras que serão linkadas ao mesmo item';
$string['aliases_help'] = '<p>Cada item do glossário pode ser associado a uma lista de palavras-chave (ou aliases).</p>
<p><strong>Escreva cada alias em uma nova linha</strong> (sem separar com vírgulas).</p>
<p>Estas palavras-chave podem ser usadas como referências alternativas ao item associado. Por exemplo, todas estas palavras chave serão linkadas automaticamente ao mesmo item do glossário em caso de criação automática de links (filtro auto-linking).</p>';
$string['allcategories'] = 'Todas as categorias';
$string['allentries'] = 'Todos';
$string['allowcomments'] = 'Permitir comentários';
$string['allowcomments_help'] = 'Se habilitado, todos os participantes com permissão para criar comentários estarão hábeis a comentar nas entradas de glossário.';
$string['allowduplicatedentries'] = 'Permitir itens duplicados';
$string['allowduplicatedentries_help'] = '<p>Se você habilitar esta opção, poderão ser criados diversos itens com o mesmo nome.</p>';
$string['allowprintview'] = 'Permitir visualizar impressão';
$string['allowprintview_help'] = 'Se habilitado, é fornecido um link aos estudantes para uma versão para impressão do glossário. O link é sempre visível para os professores.';
$string['andmorenewentries'] = 'e mais {$a} entradas novas.';
$string['answer'] = 'Resposta';
$string['approvaldisplayformat'] = 'Formato da exibição de aprovação';
$string['approvaldisplayformat_help'] = 'Quando aprovando itens do glossário você pode querer usar um formato de exibição diferente';
$string['approve'] = 'Aprovar';
$string['areaattachment'] = 'Anexos';
$string['areaentry'] = 'Definições';
$string['areyousuredelete'] = 'Tem certeza que quer excluir este item?';
$string['areyousuredeletecomment'] = 'Tem certeza que quer excluir este comentário?';
$string['areyousureexport'] = 'Tem certeza que quer exportar este item para';
$string['ascending'] = 'crescente';
$string['attachment'] = 'Anexo';
$string['attachment_help'] = '<p>Você tem a opção de anexar um arquivo do seu computador a um item do glossário. Este arquivo é carregado no servidor e anexado ao item correspondente.</p>

<p>Isto é útil, por exemplo, quando você quer disponibilizar uma imagem ou um documento Word.</p>

<p>Todos os formatos de arquivos são permitidos, mas preste atenção no nome dado ao arquivo. Estes nomes devem conter as 3 letras finais que definem o formato como .doc em um documento Word, .jpg ou .png em imagens, etc. Isto facilita a visualização dos documentos nos navegadores dos outros usuários.</p>

<p>Se você modificar um item e substituir o anexo, os documentos anteriores serão cancelados.</p>

<p>Se você modificar um item que contém um anexo, deixe o campo do anexo em branco para conservar o anexo original.</p>';
$string['author'] = 'autor';
$string['authorview'] = 'Por autor';
$string['back'] = 'Voltar';
$string['cachedef_concepts'] = 'Ligação de conceito';
$string['cantinsertcat'] = 'Não é possível inserir uma categoria';
$string['cantinsertrec'] = 'Não é possível inserir um registro';
$string['cantinsertrel'] = 'Não é possível inserir uma relação categoria-item';
$string['casesensitive'] = 'Item sensível à distinção entre maiúsculas e minúsculas';
$string['casesensitive_help'] = '<P>Esta opção define se a criação automática de links a estes itens do glossário deve estabelecer uma correspondência exata entre as palavras, considerando as diferenças entre maiúsculas e minúsculas.</p>

<p>Por exemplo: se esta opção for habilitada, uma palavra como "html" em uma mensagem do fórum
   NÃO será linkada a um item do glossário chamado "HTML".</p>';
$string['cat'] = 'cat';
$string['categories'] = 'Categorias';
$string['category'] = 'Categoria';
$string['categorydeleted'] = 'Categoria cancelada';
$string['categoryview'] = 'Por categoria';
$string['changeto'] = 'Mude para {$a}';
$string['cnfallowcomments'] = 'Indicar como padrão a aceitação de comentários aos itens do glossário';
$string['cnfallowdupentries'] = 'Indicar como padrão a aceitação de itens duplicados';
$string['cnfapprovalstatus'] = 'Indicar como padrão a aprovação de um item enviado por um estudante';
$string['cnfcasesensitive'] = 'Definir se a distinção entre maiúsculas e minúsculas ´o padrão dos itens linkados';
$string['cnfdefaulthook'] = 'Escolher o formato de visualização padrão';
$string['cnfdefaultmode'] = 'Escolher o frame de visualização padrão.';
$string['cnffullmatch'] = 'Definir se um item tem como opção predefinida do link, a exata correspondência com maiúsculas ou minúsculas no texto destinatário';
$string['cnflinkentry'] = 'Indicar como opção padrão o link automático de um item';
$string['cnflinkglossaries'] = 'Indicar como opção predefinida o link automático de um glossário';
$string['cnfrelatedview'] = 'Selecionar o formato de visualização dos links automáticos e dos itens.';
$string['cnfshowgroup'] = 'Definir se a separação de grupos deve ser mostrada ou não.';
$string['cnfsortkey'] = 'Escolher o critério de ordenação padrão.';
$string['cnfsortorder'] = 'Escolher a sequência de ordenação padrão.';
$string['cnfstudentcanpost'] = 'Definir a opção padrão para que os estudantes possam ou não possam criar novos itens';
$string['cnftabs'] = 'Selecione guias visíveis para este formato de glossário';
$string['comment'] = 'Comentário';
$string['commentdeleted'] = 'O comentário foi excluído.';
$string['comments'] = 'Comentários';
$string['commentson'] = 'Comentários sobre';
$string['commentupdated'] = 'O comentário foi atualizado.';
$string['completiondetail:entries'] = 'Criar entradas: {$a}';
$string['completionentries'] = 'Estudante deve criar entradas:';
$string['completionentriesdesc'] = 'O estudante deve criar pelo menos {$a} item/itens';
$string['completionentriesgroup'] = 'Requer entradas';
$string['concept'] = 'Conceito';
$string['concepts'] = 'Conceitos';
$string['configenablerssfeeds'] = 'Este parâmetro autoriza a criação de feeds RSS em todos os glossários. É necessário configurar cada glossário para que sejam criados os feeds RSS.';
$string['current'] = 'Critério de ordenação atual: {$a}';
$string['currentglossary'] = 'Este glossário';
$string['date'] = 'data';
$string['dateview'] = 'por data de inserção';
$string['defaultapproval'] = 'Aprovação imediata de novos itens';
$string['defaultapproval_help'] = '<p>Esta configuração permite que o professor defina se novos itens acrescentados pelos estudantes serão automaticamente disponibilizados para todos, ou se é necessária a aprovação do professor para a publicação de cada item.</p>';
$string['defaulthook'] = 'Gancho padrão';
$string['defaultmode'] = 'Modo padrão';
$string['defaultsortkey'] = 'Critério padrão';
$string['defaultsortorder'] = 'Ordem padrão';
$string['definition'] = 'Definição';
$string['definitions'] = 'Definições';
$string['deletecategory'] = 'Excluir categoria';
$string['deleteentry'] = 'Excluir item';
$string['deleteentrya'] = 'Excluir item: {$a}';
$string['deletenotenrolled'] = 'Excluir os itens criados por usuários não inscritos';
$string['deletingcomment'] = 'Excluindo comentário';
$string['deletingnoneemptycategory'] = 'O cancelamento desta categoria não provoca o cancelamento dos itens que ela contém. Estes serão classificados como não incluídos em nenhuma categoria';
$string['descending'] = 'decrescente';
$string['destination'] = 'Destino das entradas importadas';
$string['destination_help'] = '<P>Você pode especificar para onde quer importar os itens:</p>
<ul>
<li><strong>Glossário Ativo:</strong> Agrega os itens importados ao glossário que está aberto.</li>
<li><strong>Novo Glossário:</strong> Cria um novo glossário baseado nas informação contidas no arquivo que está sendo importado e insere os itens importados neste novo glossário.</li>
</ul>';
$string['disapprove'] = 'Desfazer aprovação';
$string['displayformat'] = 'Formato de visualização';
$string['displayformat_help'] = '<p>Esta configuração define o modo em que cada item será visualizado no glossário. Os formatos predefinidos são:</p>

<dl>
<dt><strong>Dicionário simples</strong>:</dt>
<dd>Um dicionário convencional com os itens separados; os autores não são indicados e os anexos são mostrados como links.</dd>
<dt><strong>Contínuo sem autor</strong>:</dt>
<dd>Mostra os itens um após o outro sem qualquer tipo de separação além dos ícones de edição.</dd>
<dt><strong>Completo com Autor</strong>:</dt>
<dd>Visualiza os itens com o mesmo formato de um fórum, incluindo os dados do autor; os anexos são mostrados como links.</dd>
<dt><strong>Completo sem Autor</strong>:</dt>
<dd>Visualiza os itens com o mesmo formato de um fórum, sem os dados do autor; os anexos são mostrados como links.</dd>
<dt><strong>Enciclopédia</strong>:</dt>
<dd>Mesmas características do formato \'Completo com Autor\' mas as imagens anexadas são visualizadas no texto.</dd>
<dt><strong>Lista de itens</strong>:</dt>
<dd>Lista os conceitos como links.</dd>
<dt><strong>FAQ</strong>:</dt>
<dd>Edita items como listas de Perguntas Frequentes (FAQ) e anexa as palavras PERGUNTA e RESPOSTA respectivamente ao conceito e à definição.</dd>
</dl>

<hr />
<p>Os Administradores podem criar novos formatos de visualização seguindo as instruções presentes no arquivo <strong>mod/glossary/formats/README.txt</strong>.</p>';
$string['displayformatcontinuous'] = 'Contínuo sem autor';
$string['displayformatdefault'] = 'Padrão para o mesmo formato de exibição';
$string['displayformatdictionary'] = 'Simples, estilo dicionário';
$string['displayformatencyclopedia'] = 'Enciclopédia';
$string['displayformatentrylist'] = 'Lista de itens';
$string['displayformatfaq'] = 'FAQ';
$string['displayformatfullwithauthor'] = 'Completo com autor';
$string['displayformatfullwithoutauthor'] = 'Completo sem autor';
$string['displayformats'] = 'Mostrar formatos';
$string['displayformatssetup'] = 'Mostrar configuração de formatos';
$string['duplicatecategory'] = 'Duplicar categoria';
$string['duplicateentry'] = 'Duplicar item';
$string['editalways'] = 'Sempre permitir edição';
$string['editalways_help'] = '<p>Esta opção define se os estudantes são autorizados a editar os seus itens a qualquer momento os textos.</p>

<p>Você pode selecionar:</p>

<ul>
<li><strong>Sim:</strong> Os itens sempre são editáveis.</li>
<li><strong>Não:</strong> Os itens só são editáveis durante o período definido.</li>
</ul>';
$string['editcategories'] = 'Editar categorias';
$string['editcategory'] = 'Editar categoria';
$string['editentry'] = 'Editar item';
$string['editentrya'] = 'Editar item: {$a}';
$string['editingcomment'] = 'Editando comentário';
$string['entbypage'] = 'Número de itens mostrados em cada página';
$string['entries'] = 'Itens';
$string['entrieswithoutcategory'] = 'Itens não catalogados';
$string['entry'] = 'Item';
$string['entryalreadyexist'] = 'Este item já existe';
$string['entryapproved'] = 'Este item foi aprovado';
$string['entrydeleted'] = 'Item excluído';
$string['entryexported'] = 'Item exportado com sucesso';
$string['entryishidden'] = '(este item está escondido)';
$string['entryleveldefaultsettings'] = 'Configurações padrão dos registros';
$string['entrylink'] = 'Link do registro: {$a}';
$string['entrynotapproved'] = 'Registro não aprovado';
$string['entrysaved'] = 'Este item foi salvo';
$string['entryupdated'] = 'Este item foi atualizado';
$string['entryusedynalink'] = 'Link automático';
$string['entryusedynalink_help'] = 'Se os links automáticos no nível do site estiverem habilitados e esta checkbox for marcada, a entrada será automaticamente linkada em qualquer lugar que as palavras e frases deste conceito aparecerem durante o restante do curso.';
$string['errcannoteditothers'] = 'Você não pode editar itens criados por outras pessoas.';
$string['errconceptalreadyexists'] = 'Este conceito já existe. Não é permitida a criação de outras versões.';
$string['errdeltimeexpired'] = 'Você não pode excluir isto. Tempo expirou!';
$string['erredittimeexpired'] = 'O tempo de edição deste conceito terminou.';
$string['errorparsingxml'] = 'Ocorreram erros: verifique o código do arquivo XML.';
$string['eventcategorycreated'] = 'Categoria foi criada';
$string['eventcategorydeleted'] = 'Categoria foi excluída';
$string['eventcategoryupdated'] = 'Categoria foi atualizada';
$string['evententryapproved'] = 'Entrada foi aprovada';
$string['evententrycreated'] = 'Entrada foi criada';
$string['evententrydeleted'] = 'Entrada foi excluída';
$string['evententrydisapproved'] = 'Entrada foi reprovada';
$string['evententryupdated'] = 'Entrada foi atualizada';
$string['evententryviewed'] = 'Entrada foi visualizada';
$string['explainaddentry'] = 'Adicionar um novo item.<br />Conceito e definição são campos obrigatórios.';
$string['explainall'] = 'Mostrar todos os itens em uma página';
$string['explainalphabet'] = 'Navegar usando este índice';
$string['explainexport'] = 'Foi criado um novo arquivo.<br /> Baixe o arquivo em um espaço seguro. Você pode importar este arquivo neste curso ou em um outro curso quando você quiser.';
$string['explainimport'] = 'Você deve definir o arquivo a ser importado e os critérios de importação.<br /> Faça o envio e controle os resultados.';
$string['explainspecial'] = 'Mostrar itens que não iniciam com letras';
$string['exportedentry'] = 'Exportar item';
$string['exportentries'] = 'Exportar itens';
$string['exportentriestoxml'] = 'Exportar itens em formato XML';
$string['exportfile'] = 'Exportar itens';
$string['exportglossary'] = 'Exportar glossário';
$string['exporttomainglossary'] = 'Exportar glossário principal';
$string['filetoimport'] = 'Arquivo a ser importado';
$string['filetoimport_help'] = '<P>Selecione no seu computador o arquivo XML que contém os itens que você quer importar.</p>';
$string['fillfields'] = 'Conceito e definição são campos obrigatórios.';
$string['filtername'] = 'Links automáticos do glossário';
$string['fullmatch'] = 'Criar links apenas a partir de palavras inteiras';
$string['fullmatch_help'] = '<p>Se ativada, esta opção estabelece que os links criados automaticamente devem ser associados apenas a palavras inteiras</p>

<p>Por exemplo: um item chamado "carro" não dará origem a um link incluído na palavra "carroça".</p>';
$string['glossary:addinstance'] = 'Adicionar novo glossário';
$string['glossary:approve'] = 'Aprovar e reverter itens aprovados';
$string['glossary:comment'] = 'Criar comentários';
$string['glossary:export'] = 'Exportar itens';
$string['glossary:exportentry'] = 'Exportar única entrada';
$string['glossary:exportownentry'] = 'Exportar suas entradas únicas';
$string['glossary:import'] = 'Importar itens';
$string['glossary:managecategories'] = 'Gerenciar categorias';
$string['glossary:managecomments'] = 'Gerenciar comentários';
$string['glossary:manageentries'] = 'Gerenciar itens';
$string['glossary:rate'] = 'Avaliar itens';
$string['glossary:view'] = 'Ver glossário';
$string['glossary:viewallratings'] = 'Visualizar todas as avaliações enviadas por indivíduos';
$string['glossary:viewanyrating'] = 'Ver avaliação total que todos receberam';
$string['glossary:viewrating'] = 'Ver as suas avaliações';
$string['glossary:write'] = 'Criar novos itens';
$string['glossaryleveldefaultsettings'] = 'Configurações padrão do glossário';
$string['glossarytype'] = 'Tipo de glossário';
$string['glossarytype_help'] = 'Um glossário principal é um glossário onde os itens de glossários secundários podem ser importados. Só pode existir um glossário principal em um curso. Se a importação de itens de glossários não for necessária, todos os glossários no curso podem ser glossários secundários.';
$string['guestnoedit'] = 'Visitantes não tem permissão para editar glossários';
$string['importcategories'] = 'Importar categorias';
$string['importedcategories'] = 'Categorias importadas';
$string['importedentries'] = 'Itens importados';
$string['importentries'] = 'Importar itens';
$string['importentriesfromxml'] = 'Importar itens do arquivo XML';
$string['includegroupbreaks'] = 'Incluir separação de grupos';
$string['indicator:cognitivedepth'] = 'Indicador cognitivo do Glossário';
$string['indicator:cognitivedepth_help'] = 'Este indicador baseia-se na profundidade cognitiva alcançada pelo estudante em uma atividade Glossário.';
$string['indicator:cognitivedepthdef'] = 'Glossário cognitivo';
$string['indicator:cognitivedepthdef_help'] = 'O participante alcançou este percentual de engajamento cognitivo oferecido pelas atividades Glossário durante este intervalo de análise (Níveis = Sem visualização, Visualização, Envio)';
$string['indicator:socialbreadth'] = 'Indicador social do Glossário';
$string['indicator:socialbreadth_help'] = 'Este indicador baseia-se na amplitude social alcançada pelo estudante em uma atividade Glossário.';
$string['indicator:socialbreadthdef'] = 'Glossário social';
$string['indicator:socialbreadthdef_help'] = 'O participante alcançou este percentual de engajamento social oferecido pelas atividades Glossário durante este intervalo de análise (Níveis = Sem participação, Participante único)';
$string['isglobal'] = 'Selecionar o box para definir o glossário como glossário global';
$string['isglobal_help'] = '<p>Apenas os Administradores e usuários com capacidades ilimitadas no site podem configurar um glossário como global.</p>

<p>Estes glossários podem ser utilizados em todos os cursos.</p>

<p>Os links automáticos criados a partir dos itens de um glossário global incluem todas as páginas do site enquanto os links automáticos criados a partir de um glossário normal são presentes apenas nas páginas do curso específico associado àquele glossário</p>';
$string['letter'] = 'letra';
$string['linkcategory'] = 'Fazer o link automático desta categoria';
$string['linkcategory_help'] = '<P>Você pode definir se os nomes das categorias, como os itens, geram links automaticamente ou não.</p>

<p>Os links que levam às categorias são sensíveis às diferenças entre maiúsculas e minúsculas, e consideram apenas palavras inteiras.</p>';
$string['linking'] = 'Auto-link';
$string['mainglossary'] = 'Glossário principal';
$string['maxtimehaspassed'] = 'Sinto muito, mas o período de edição deste comentário ({$a}) terminou!';
$string['modulename'] = 'Glossário';
$string['modulename_help'] = 'O módulo de atividade de glossário permite aos participantes criar e manter uma lista de definições, como um dicionário, ou coletar e organizar recursos ou informações.

Um professor pode permitir que arquivos sejam anexados aos termos do glossário. As imagens anexadas são exibidas no termo. Os termos do glossário podem ser pesquisados ou listados alfabeticamente ou por categoria, data ou autor. Os termos podem por padrão serem aprovados  ou depender da aprovação de um professor antes de serem visualizadas por alguém.

Se o filtro de auto-ligação do glossário estiver ativado, os termos do glossário serão automaticamente vinculados quando as palavras e/ou frases do conceito aparecerem no curso, .

Um professor pode permitir comentários nos termos do glossário. Os termos também podem ser avaliados por professores ou estudantes (avaliação por pares). Avaliações também podem ser agregadas para formar a nota final que será registrada no livro de notas.

Glossários tem muitos usos, como por exemplo:

* Um banco colaborativo de termos chaves
* Um espaço "apresente-se" onde novos estudantes adicionam seus nomes e informações pessoais
* Centralização de dicas ou melhores práticas sobre algum item
* Uma área de compartilhamento de vídeos, imagens ou arquivos de som
* Como recurso de revisão de fatos a serem lembrados';
$string['modulename_link'] = 'mod/glossary/view';
$string['modulenameplural'] = 'Glossários';
$string['newentries'] = 'Novos itens';
$string['newglossary'] = 'Novo glossário';
$string['newglossarycreated'] = 'Novo glossário criado.';
$string['newglossaryentries'] = 'Novos itens:';
$string['nocomment'] = 'Nenhum comentário disponível';
$string['nocomments'] = '(Nenhum comentário a este item)';
$string['noconceptfound'] = 'Nenhum conceito ou definição encontrados.';
$string['noentries'] = 'Nenhum item disponível nesta seção';
$string['noentry'] = 'Nenhum item disponível.';
$string['nopermissiontodelcomment'] = 'Você não pode excluir comentários de outras pessoas!';
$string['nopermissiontodelinglossary'] = 'Você não tem permissão para comentar neste glossário!';
$string['nopermissiontoviewresult'] = 'Você só pode pesquisar resultados de seus próprios registros';
$string['notapproved'] = 'Entrada no glossário não está ainda aprovada.';
$string['notcategorised'] = 'Não catalogados';
$string['numberofentries'] = 'Número de itens';
$string['onebyline'] = '(um por linha)';
$string['page-mod-glossary-edit'] = 'Página de entrada para adicionar/editar Glossário';
$string['page-mod-glossary-view'] = 'Visualizar página de edição do glossário';
$string['page-mod-glossary-x'] = 'Qualquer página de módulo do glossário';
$string['pluginadministration'] = 'Administração do glossário';
$string['pluginname'] = 'Glossário';
$string['popupformat'] = 'Formato popup';
$string['print'] = 'Imprimir';
$string['printerfriendly'] = 'Versão para impressão';
$string['printviewnotallowed'] = 'A versão para impressão não é permitida';
$string['privacy'] = 'Privacidade de resultados';
$string['privacy:metadata:core_comments'] = 'Os comentários feitos nas definições do glossário são armazenados usando o sistema core_comment';
$string['privacy:metadata:core_files'] = 'Os arquivos vinculados às definições do glossário são armazenados usando o sistema core_files';
$string['privacy:metadata:core_tag'] = 'Tags adicionadas às definições do glossário são armazenadas usando o core_tag do sistema';
$string['privacy:metadata:glossary_entries'] = 'Informações sobre os itens do usuário para uma determinada atividade do glossário';
$string['privacy:metadata:glossary_entries:attachment'] = 'O anexo do item que o usuário adicionou';
$string['privacy:metadata:glossary_entries:concept'] = 'O conceito do item que o usuário adicionou';
$string['privacy:metadata:glossary_entries:definition'] = 'A definição do item que o usuário adicionou';
$string['privacy:metadata:glossary_entries:glossaryid'] = 'O ID da atividade glossário';
$string['privacy:metadata:glossary_entries:timemodified'] = 'Data e hora indicando quando a entrada do glossário foi modificada pelo usuário';
$string['privacy:metadata:glossary_entries:userid'] = 'O ID do usuário que está adicionando este item do glossário';
$string['question'] = 'Questão';
$string['rejectedentries'] = 'Itens rejeitados';
$string['rejectionrpt'] = 'Relatório de rejeição';
$string['removeallglossarytags'] = 'Excluir todas as tags do glossário';
$string['resetglossaries'] = 'Cancele itens de';
$string['resetglossariesall'] = 'Cancele itens de todos os glossários';
$string['rssarticles'] = 'Número de artigos RSS recentes';
$string['rssarticles_help'] = '<P>Esta configuração permite que você selecione o número de artigos
   a serem incluídos no feed RSS.</p>

<P>Um número entre 5 e 20 é considerado apropriado para a maioria dos
   glossários. Aumente este número se o glossário for constantemente atualizado.</p>';
$string['rsssubscriberss'] = 'Mostrar \'{$a}\' conceitos no feed RSS';
$string['rsstype'] = 'RSS feed para esta atividade';
$string['rsstype_help'] = '<p>Esta opção permite que sejam criados alimentadores RSS neste glossário.</p>

<p>Você pode escolher dois tipos de Feeds:</p>

<ul>
<li><strong>Com autor -</strong> os alimentadores criados incluem
       o nome do autor em cada artigo.</li>

<li><strong>Sem autor -</strong> os alimentadores criados não incluem
       o nome do autor em nenhum artigo.</li>
</ul>';
$string['search:activity'] = 'Glossário - informações da atividade';
$string['search:entry'] = 'Glossário - termos';
$string['searchindefinition'] = 'Buscar em todo o texto';
$string['secondaryglossary'] = 'Glossário secundário';
$string['showall'] = 'Mostrar o link \'TODOS\'';
$string['showall_help'] = '<P>A navegação e a pesquisa estão sempre disponíveis em um glossário. Para configurar as características de navegação do glossário, é possível definir os seguintes parâmetros:</p>

<p><b>Mostrar \'ESPECIAL\' :</b> Habilita ou desabilita o menu de navegação por caracteres especiais tais como @, #, etc.</p>

<p><b>Mostrar \'ALFABETO\':</b> Habilita ou desabilita o menu de navegação por letras do alfabeto.</p>

<p><b>Mostrar \'TODOS\' :</b> Habilita ou desabilita a navegação de todos os itens de uma só vez.</p>';
$string['showalphabet'] = 'Mostrar alfabeto em links';
$string['showalphabet_help'] = '<P>A navegação e a pesquisa estão sempre disponíveis em um glossário. Para configurar as características de navegação do glossário, é possível definir os seguintes parâmetros:</p>

<p><b>Mostrar \'ESPECIAL\' :</b> Habilita ou desabilita o menu de navegação por caracteres especiais tais como @, #, etc.</p>

<p><b>Mostrar \'ALFABETO\':</b> Habilita ou desabilita o menu de navegação por letras do alfabeto.</p>

<p><b>Mostrar \'TODOS\' :</b> Habilita ou desabilita a navegação de todos os itens de uma só vez.</p>';
$string['showspecial'] = 'Mostrar link \'ESPECIAL\'';
$string['showspecial_help'] = '<P>A navegação e a pesquisa estão sempre disponíveis em um glossário. Para configurar as características de navegação do glossário, é possível definir os seguintes parâmetros:</p>

<p><b>Mostrar \'ESPECIAL\' :</b> Habilita ou desabilita o menu de navegação por caracteres especiais tais como @, #, etc.</p>

<p><b>Mostrar \'ALFABETO\':</b> Habilita ou desabilita o menu de navegação por letras do alfabeto.</p>

<p><b>Mostrar \'TODOS\' :</b> Habilita ou desabilita a navegação de todos os itens de uma só vez.</p>';
$string['sortby'] = 'Ordenar por';
$string['sortbycreation'] = 'Por data de criação';
$string['sortbylastupdate'] = 'Por data de atualização';
$string['sortchronogically'] = 'Por ordem cronológica';
$string['special'] = 'Especial';
$string['standardview'] = 'Por ordem alfabética';
$string['studentcanpost'] = 'Estudantes podem adicionar itens';
$string['tagarea_glossary_entries'] = 'Itens do Glossário';
$string['tagsdeleted'] = 'As tags do glossário foram excluídas';
$string['totalentries'] = 'Total de itens';
$string['usedynalink'] = 'Fazer o link automático dos itens';
$string['usedynalink_help'] = '<P>Esta opção habilita a criação automática de links que levam aos itens do glossário sempre que
   as palavras ou frases definidas como itens estiverem presentes nos textos do curso. Isto inclui as mensagens do fórum, materiais do curso, sumários das semanas, diários, etc.</p>

<p>Se você não quiser que um texto tenha links, você deve adicionar os tags  &lt;nolink> e &lt;/nolink> ao redor do texto.</p>

<p>Os nomes das categorias também dão origem a links nos textos.</p>';
$string['visibletabs'] = 'Guias visíveis';
$string['waitingapproval'] = 'Itens pendentes';
$string['warningstudentcapost'] = '(Não é aplicável ao glossário principal)';
$string['withauthor'] = 'Conceitos com autor';
$string['withoutauthor'] = 'Conceitos sem autor';
$string['writtenby'] = 'por';
$string['youarenottheauthor'] = 'Apenas o autor do comentário pode editá-lo.';
