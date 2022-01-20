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
 * Strings for component 'resource', language 'pt_br', version '3.11'.
 *
 * @package     resource
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['clicktodownload'] = 'Clique no link {$a} para baixar o arquivo.';
$string['clicktoopen2'] = 'Clique no link {$a} para visualizar o arquivo.';
$string['configdisplayoptions'] = 'Selecione todas as opções que devem ser avaliadas, configurações existentes não são modificadas. Pressione a tecla CTRL para selecionar múltiplos campos';
$string['configframesize'] = 'Quando uma página web ou um arquivo é visualizado em um frame, este valor é a altura, em pixels, do frame que contém a navegação (top frame).';
$string['configparametersettings'] = 'Isto define o valor padrão dos parâmetros do formulário do painel de configuração quando são criados novos recursos. Os parâmetros utilizados podem ser escolhidos em seguida segundo a preferência do usuário.';
$string['configpopup'] = 'A visualização dos recursos em janela popup deve ser o padrão?';
$string['configpopupdirectories'] = 'As janelas popup devem mostrar o diretório de links?';
$string['configpopupheight'] = 'Qual é a altura predefinida das janelas popup?';
$string['configpopuplocation'] = 'As janelas popup devem mostrar a barra de endereço?';
$string['configpopupmenubar'] = 'As janelas popup devem mostrar a barra de menu?';
$string['configpopupresizable'] = 'As janelas popup podem ser redimensionadas?';
$string['configpopupscrollbars'] = 'As janelas popup devem ter a barra de rolagem?';
$string['configpopupstatus'] = 'As janelas popup devem mostrar a barra de status?';
$string['configpopuptoolbar'] = 'As janelas popup devem  mostrar a barra de ferramentas?';
$string['configpopupwidth'] = 'Qual é a largura predefinida das janelas popup?';
$string['contentheader'] = 'Conteúdo';
$string['displayoptions'] = 'Opções de exibição disponíveis';
$string['displayselect'] = 'Exibir';
$string['displayselect_help'] = 'Esta definição, juntamente com o tipo de arquivo e se o navegador permitir incorporação, determina como o arquivo é exibido. As opções são:

Automático - A melhor opção de exibição para o tipo de arquivo é selecionado automaticamente
Incorporar - O arquivo é exibido dentro da página, abaixo da barra de navegação em conjunto com a descrição do arquivo e todos os blocos
Forçar download - O usuário é solicitado a baixar o arquivo
Abrir - o arquivo é exibido sozinho na janela do navegador
Em pop-up - O arquivo é exibido em uma nova janela do navegador, sem menus ou uma barra de endereços
No frame - O arquivo é exibido dentro de um quadro abaixo da barra de navegação e da descrição do arquivo
Nova janela - O arquivo é exibido em uma nova janela do navegador com menus e uma barra de endereços';
$string['displayselect_link'] = 'mod/file/mod';
$string['displayselectexplain'] = 'Escolha o tipo de exibição, infelizmente nem todos os tipos são adequados para todos os arquivos.';
$string['dnduploadresource'] = 'Criar recurso do tipo arquivo';
$string['encryptedcode'] = 'Código cifrado';
$string['filenotfound'] = 'Arquivo não encontrado, desculpe.';
$string['filterfiles'] = 'Usar filtros no conteúdo do arquivo';
$string['filterfilesexplain'] = 'Selecione o tipo de filtragem de conteúdo do arquivo, por favor note que este pode causar problemas para alguns applets Flash e Java. Por favor, certifique-se que todos os arquivos de texto estão em codificação UTF-8.';
$string['filtername'] = 'Link automático aos nomes dos recursos';
$string['forcedownload'] = 'Forçar download';
$string['framesize'] = 'Altura do Frame';
$string['indicator:cognitivedepth'] = 'Indicador cognitivo do Arquivo';
$string['indicator:cognitivedepth_help'] = 'Este indicador é baseado na profundidade cognitiva alcançada pelo estudante em um recurso Arquivo.';
$string['indicator:cognitivedepthdef'] = 'Arquivo cognitivo';
$string['indicator:cognitivedepthdef_help'] = 'O participante alcançou este percentual de engajamento cognitivo oferecido pelos recursos Arquivo durante este intervalo de análise (Níveis = Sem visualização, Visualização)';
$string['indicator:socialbreadth'] = 'Indicador social do Arquivo';
$string['indicator:socialbreadth_help'] = 'Este indicador baseia-se na amplitude social alcançada pelo estudante em um recurso Arquivo.';
$string['indicator:socialbreadthdef'] = 'Arquivo social';
$string['indicator:socialbreadthdef_help'] = 'O participante alcançou este percentual de engajamento social oferecido pelos recursos Arquivo durante este intervalo de análise (Níveis = Sem participação, Participante único)';
$string['legacyfiles'] = 'Migração do arquivo antigo do curso';
$string['legacyfilesactive'] = 'Ativo';
$string['legacyfilesdone'] = 'Terminado';
$string['modifieddate'] = 'Modificado {$a}';
$string['modulename'] = 'Arquivo';
$string['modulename_help'] = 'O módulo de arquivo permite que um professor forneça um arquivo como um recurso do curso. Sempre que possível, o arquivo será exibido na interface do curso, caso contrário, os estudantes serão levados a fazer o download. O arquivo pode incluir arquivos auxiliares, por exemplo uma página HTML pode ter imagens incorporadas.

Note-se que os estudantes precisam ter o software adequado em seus computadores para abrir o arquivo.

Um arquivo pode ser usado

* Para compartilhar apresentações em aula
* Para incluir um mini website como um recurso do curso
* Para fornecer arquivos de rascunho de programas de software para que os estudantes podem editá-los e enviá-los para a avaliação';
$string['modulename_link'] = 'mod/resource/view';
$string['modulenameplural'] = 'Arquivos';
$string['notmigrated'] = 'Este tipo de recurso legado ({$a}) ainda não foi migrado, desculpe.';
$string['optionsheader'] = 'Mostrar opções';
$string['page-mod-resource-x'] = 'Qualquer página do módulo arquivo';
$string['pluginadministration'] = 'Administração do Arquivo';
$string['pluginname'] = 'Arquivo';
$string['popupheight'] = 'Altura do pop-up (em pixels)';
$string['popupheightexplain'] = 'Especifica a altura padrão de janelas pop-up.';
$string['popupresource'] = 'Este recurso deve ser mostrado em uma janela popup.';
$string['popupresourcelink'] = 'Em caso contrário, clicar aqui: {$a}';
$string['popupwidth'] = 'Largura da janela pop-up (em pixels)';
$string['popupwidthexplain'] = 'Especifica a largura padrão de janelas pop-up.';
$string['printintro'] = 'Exibir a descrição dos recursos';
$string['printintroexplain'] = 'Mostrar a descrição do recurso abaixo do conteúdo? Alguns tipos de exibição não podem mostrar a descrição mesmo habilitados.';
$string['privacy:metadata'] = 'O plugin de recurso Arquivo não armazena nenhum dado pessoal.';
$string['resource:addinstance'] = 'Adicionar novo recurso';
$string['resource:exportresource'] = 'Exportar recurso';
$string['resource:view'] = 'Ver recurso';
$string['resourcecontent'] = 'Arquivos e subpastas';
$string['resourcedetails_sizedate'] = '{$a->size} {$a->date}';
$string['resourcedetails_sizetype'] = '{$a->size} {$a->type}';
$string['resourcedetails_sizetypedate'] = '{$a->size} {$a->type} {$a->date}';
$string['resourcedetails_typedate'] = '{$a->type} {$a->date}';
$string['search:activity'] = 'Arquivo';
$string['selectmainfile'] = 'Por favor, selecione o arquivo principal clicando no ícone ao lado do nome do arquivo.';
$string['showdate'] = 'Exibir data de envio/modificação';
$string['showdate_desc'] = 'Exibir data de envio/modificação na página do curso?';
$string['showdate_help'] = 'Exibe a data de envio/modificação ao lado dos links para o arquivo.

Se houver muitos arquivos a data inicial de envio/modificação será exibida.';
$string['showsize'] = 'Mostrar tamanho';
$string['showsize_desc'] = 'Mostrar tamanho do arquivo na página do curso?';
$string['showsize_help'] = 'Exibe o tamanho do arquivo, como \'3,1 MB \', ao lado de links para o arquivo. Se houver vários arquivos neste recurso, o tamanho total de todos os arquivos é exibido.';
$string['showtype'] = 'Mostrar tipo';
$string['showtype_desc'] = 'Exibir o tipo do arquivo (ex. \'Documento word\') na página do curso?';
$string['showtype_help'] = 'Exibir o tipo do arquivo, como exemplo \'Documento Word\' ao lado do link ao arquivo.

Caso haja múltiplos arquivos neste recurso, o tipo do arquivo é exibido.

Caso o tipo de arquivo não é conhecido  ao sistema ele não será exibido';
$string['uploadeddate'] = 'Carregado {$a}';
