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
 * Strings for component 'enrol_imsenterprise', language 'pt_br', version '3.11'.
 *
 * @package     enrol_imsenterprise
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['aftersaving...'] = 'Depois de salvar as suas opções, é possível que você queira';
$string['allowunenrol'] = 'Permitir que o IMS data <strong>cancele a inscrição</strong> de estudantes e professores';
$string['allowunenrol_desc'] = 'Se habilitado, inscrições no curso serão removidas quando especificado nos dados do Enterprise.';
$string['basicsettings'] = 'Configuração básica';
$string['categoryidnumber'] = 'Permitir idnumber da categoria';
$string['categoryidnumber_desc'] = 'Se esta configuração estiver ativa, o IMS Enterprise vai criar uma categoria com o idnumber';
$string['categoryseparator'] = 'Caractere separador da categoria';
$string['categoryseparator_desc'] = 'Obrigatório quando a opção "idnumber da categoria" estiver ativa. Caracter para separar o idnumber e o nome da categoria.';
$string['coursesettings'] = 'Opções de dados do curso';
$string['createnewcategories'] = 'Criar novas categorias de cursos (ocultas) se não forem encontradas no Moodle';
$string['createnewcategories_desc'] = 'Se o elemento &lt;org&gt;&lt;orgunit&gt; estiver presente nos dados vindos do curso, seu conteúdo será usado para especificar a categoria se o curso for criado do zero. O plugin não irá re-categorizar os cursos existentes.

Se nenhuma categoria existir com o nome desejado, então uma categoria oculta será criada.';
$string['createnewcourses'] = 'Criar novos cursos (ocultos) se não forem encontrados no Moodle';
$string['createnewcourses_desc'] = '<p>O plugin de inscrição IMS Enterprise pode criar novos cursos para qualquer um que ele encontrar nos dados do IMS, mas não no banco de dados do Moodle, se essa configuração estiver ativada</p>

<p>Primeiro os cursos são pesquisados pelo seu número de id - um campo alfa-numérico na tabela de cursos do Moodle, que pode especificar o código usado para identificar o curso no Sistema de Informações do Estudante (por exemplo). Se isso não for encontrado, na tabela de cursos procura-se por "descrição curta", que no Moodle é o nome breve de cursos. (Em alguns sistemas esses dois campos podem ser idênticos). Apenas quando essa procura falhar, o plugin cria novos cursos.</p>

<p>Quaisquer cursos recém-gerados são OCULTOS quando criados. Isso para prevenir a possibilidade de estudantes vagando em cursos completamente vazios dos quais o professor possa não estar ciente.</p>';
$string['createnewusers'] = 'Criar novas contas de usuários se ainda não forem registrados no Moodle';
$string['createnewusers_desc'] = '<p>Os dados de inscrição do IMS Enterprise tipicamente descrevem um grupo de usuários. Se essa configuração for ativada, contas podem ser criadas para quaisquer usuários que não tenham sido encontrados no banco de dados do Moodle.</p>

<p>Primeiro os usuários são pesquisados pelo seu número de id e em um segundo momento pelo nome seu "username" no Moodle.</p>


<p>As senhas não são importadas pelo plugin IMS Enterprise. Nós recomendamos usar plugins de autenticação do Moodle para autenticar os usuários.</p>';
$string['cronfrequency'] = 'Freqüência de processamento';
$string['deleteusers'] = 'Cancelar contas de usuários quando especificado em IMS data';
$string['deleteusers_desc'] = '<p>Dados de inscrição IMS Enterprise podem especificar a remoção de contas de usuários (se o indicador "recstatus" é igual a 3, o que representa remoção de uma conta), se esta configuração estiver ativa.</p>

<p>Como é padrão no Moodle, o registro do usuário não é realmente removido do banco de dados do Moodle, mas um indicador é ativado para marcar a conta como removida.</p>';
$string['doitnow'] = 'fazer importação IMS Enterprise imediatamente';
$string['emptyattribute'] = 'Deixar vazio';
$string['filelockedmail'] = 'O arquivo de texto que você está usando para inscrições baseadas em IMS ({$a}) não pode ser excluído pelo processo cron. Isto significa que as autorizações do arquivo estão configuradas em modo errado. Por favor, corrija as permissões para que o Moodle possa excluir arquivo. Assim você evita que o arquivo seja processado repetidamente.';
$string['filelockedmailsubject'] = 'Erro importante no arquivo de inscrição';
$string['fixcasepersonalnames'] = 'Mudar primeira letra de nomes pessoais para maiúsculas';
$string['fixcaseusernames'] = 'Converter "usernames" para minúsculas';
$string['ignore'] = 'ignorar';
$string['importimsfile'] = 'Importar arquivo IMS Enterprise';
$string['imsenterprise:config'] = 'Configurar inscrever instâncias IMS Enterprise';
$string['imsenterprisecrontask'] = 'Processando arquivo de Inscrição';
$string['imsrolesdescription'] = 'A especificação IMS Enterprise inclui 8 tipos de papéis distintos. Por favor, escolha como você quer que eles sejam atribuídos no Moodle, incluindo se algum deles deve ser ignorado.';
$string['location'] = 'Endereço do arquivo';
$string['logtolocation'] = 'Endereço do arquivo log output (deixar em branco se não há arquivo de log)';
$string['mailadmins'] = 'Notificar administradores por email';
$string['mailusers'] = 'Notificar usuários por email';
$string['messageprovider:imsenterprise_enrolment'] = 'Mensagem de inscrição do IMS Enterprise';
$string['miscsettings'] = 'Miscelânea';
$string['nestedcategories'] = 'Permitir categorias aninhadas';
$string['nestedcategories_desc'] = 'Se ativado, IMS Enterprise criará categorias aninhadas';
$string['pluginname'] = 'Arquivo IMS Enterprise';
$string['pluginname_desc'] = 'Este método irá verificar repetidamente e processar um arquivo de texto especialmente formatado no local que você especificar. O arquivo deve seguir as especificações IMS Enterprise, contendo pessoa, grupo e os elementos de adesão XML.';
$string['privacy:metadata'] = 'O plugin de inscrição Arquivo IMS ENterprise não armazena nenhum dado pessoal.';
$string['processphoto'] = 'Acrescentar imagem do usuário ao perfil';
$string['processphotowarning'] = 'Aviso: O processamento de imagens pode causar empenho exagerado do servidor. Não ative esta opção quando processar um número muito grande de usuários.';
$string['restricttarget'] = 'Processar os dados apenas se o seguinte objetivo for especificado';
$string['restricttarget_desc'] = '<p>Um arquivo de dados IMS Enterprise pode ser direcionado para "alvos" múltiplos - LMS diferentes, ou sistemas diferentes dentro de uma escola/universidade. É possível especificar no arquivo Enterprise se os dados serão usados em um ou mais sistemas alvo, nomeando-os nas tags &lt;target&gt; dentro da tag &lt;properties&gt; .</p>

<p>Em muitos casos você não precisa se preocupar com isso. Deixe a configuração em branco e o Moodle sempre processará o arquivo de dados, sem controlar se o alvo está especificado ou não. Caso contrário, preencha com o nome exato que está nas tags &lt;target&gt; .
</p>';
$string['roles'] = 'Papéis';
$string['settingfullname'] = 'A descrição do tag IMS para o nome do curso completo';
$string['settingfullnamedescription'] = 'O nome completo é um campo de curso obrigatório para que você tem que definir a tag descrição selecionada em seu arquivo IMS Enterprise';
$string['settingshortname'] = 'Descrição do tag IMS para o nome curto do curso';
$string['settingshortnamedescription'] = 'O nome curto do curso é um campo obrigatório, portanto você precisa definir a descrição do tag no seu arquvo IMS enterprise';
$string['settingsummary'] = 'Tag de descição IMS para o sumário do curso';
$string['settingsummarydescription'] = 'É um campo opcional, selecione \'Deixar vazio\' se você não quiser especificar um sumário do curso.';
$string['sourcedidfallback'] = 'Use "sourcedid" como identificador de um usuário se o campo "userid" não for encontrado';
$string['sourcedidfallback_desc'] = 'Em ISM data, o campo <sourcedid>
representa o código ID persistente de uma pessoa, como o utilizado no sistema de origem. O campo <userid> é um campo separado que deve conter o código ID utilizado pelo seu usuário para fazer seu login. Em muitos casos estes dois códigos serão o mesmo, mas não sempre.

Alguns sistemas de informação de estudantes falham ao imprimir o campo <userid>. Se este for o caso, você deve habilitar esta configuração para permitir a utilização do <sourcedid> como o ID do usuário do Moodle. Caso contrário, deixe esta opção desabilitada.';
$string['truncatecoursecodes'] = 'Reduzir códigos de curso para este tamanho';
$string['truncatecoursecodes_desc'] = '<p>Em algumas situações você pode ter códigos de curso que deseje reduzir para um tamanho específico antes de processar. Se assim desejar, insira o número de caracteres nesse box. Caso contrário, deixe esse box <strong>em branco</strong> e nenhuma redução ocorrerá.</p>';
$string['updatecourses'] = 'Atualizar curso';
$string['updatecourses_desc'] = 'Se ativado, o plugin de inscrição IMS Enterprise pode atualizar os nomes completo e breve do curso (se a propriedade "recstatus" estiver com o valor 2, que representa uma atualização).';
$string['updateusers'] = 'Atualizar as contas de usuário quando especificado nos dados do IMS';
$string['updateusers_desc'] = 'Se esta configuração estiver ativa, o módulo de inscrição IMS Enterprise pode especificar alterações nas contas de usuário se isso for especificado nos dados IMS (campo "recstatus" = 2).';
$string['usecapitafix'] = 'Selecione este box se usar "Capita" (o formato XML deles é um pouco diferente)';
$string['usecapitafix_desc'] = '<p>Os sistemas de dados de estudantes produzidos pelo Capita possuem um pequeno erro no código XML. Se você está usando Capita, deve habilitar essa opção. Em caso contrário deixe-a desmarcada.</p>';
$string['usersettings'] = 'Opções de dados de usuários';
$string['zeroisnotruncation'] = '0 (zero) indica ausência de redução';
