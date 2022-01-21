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
 * Strings for component 'group', language 'pt_br', version '3.11'.
 *
 * @package     group
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addedby'] = 'Adicionado por {$a}';
$string['addgroup'] = 'Adicionar usuário ao grupo';
$string['addgroupstogrouping'] = 'Adicionar grupo ao agrupamento';
$string['addgroupstogroupings'] = 'Adicionar/remover grupos';
$string['adduserstogroup'] = 'Adicionar/remover usuários';
$string['allocateby'] = 'Distribuir membros';
$string['anygrouping'] = '[Qualquer agrupamento]';
$string['autocreategroups'] = 'Criar vários grupos';
$string['backtogroupings'] = 'Voltar aos agrupamentos';
$string['backtogroups'] = 'Voltar aos grupos';
$string['badnamingscheme'] = 'Deve conter exatamente um \'@\' ou um \'#\'';
$string['byfirstname'] = 'Alfabeticamente por primeiro nome, último nome';
$string['byidnumber'] = 'Alfabeticamente por ID interno';
$string['bylastname'] = 'Alfabeticamente por último nome, primeiro nome';
$string['createautomaticgrouping'] = 'Criar agrupamento automático';
$string['creategroup'] = 'Criar grupo';
$string['creategrouping'] = 'Criar agrupamento';
$string['creategroupinselectedgrouping'] = 'Criar grupo no agrupamento';
$string['createingrouping'] = 'Vincular grupos ao agrupamento';
$string['createorphangroup'] = 'Criar grupo órfão';
$string['csvdelimiter'] = 'Delimitador CSV';
$string['databaseupgradegroups'] = 'A versão dos grupos agora é {$a}';
$string['defaultgrouping'] = 'Agrupamento padrão';
$string['defaultgroupingname'] = 'Agrupamento';
$string['defaultgroupname'] = 'Grupo';
$string['deleteallgroupings'] = 'Excluir todos os agrupamentos';
$string['deleteallgroups'] = 'Excluir todos os grupos';
$string['deletegroupconfirm'] = 'Você realmente deseja excluir o grupo \'{$a}\'?';
$string['deletegrouping'] = 'Excluir agrupamento';
$string['deletegroupingconfirm'] = 'Você realmente deseja excluir o agrupamento \'{$a}\'? (Grupos no agrupamento não são excluídos.)';
$string['deletegroupsconfirm'] = 'Você realmente deseja excluir os grupos abaixo?';
$string['deleteselectedgroup'] = 'Excluir grupo(s) selecionado(s)';
$string['editgroupingsettings'] = 'Editar configurações de agrupamentos';
$string['editgroupsettings'] = 'Editar configurações do grupo';
$string['editusersgroupsa'] = 'Editar grupos para "{$a}"';
$string['enablemessaging'] = 'Mensagens de grupo';
$string['enablemessaging_help'] = 'Se ativada, os membros do grupo podem enviar mensagens para os outros membros do grupo por meio da gaveta de mensagens.';
$string['encoding'] = 'Codificação';
$string['enrolmentkey'] = 'Código de inscrição';
$string['enrolmentkey_help'] = 'O uso de um código de inscrição em grupo habilita o usuário que o conheça a ter acesso ao curso, ao mesmo tempo que o inscreve automaticamente no grupo correspondente.

Para esta opção ter efeito é necessário habilitar o \'método de autoinscrição\' no curso e nele selecionar a opção \'Usar códigos de inscrição de grupo\' e, também, definir um \'código de inscrição\' para o curso em si (este código habilita acesso ao curso, sem inscrever o usuário em grupos). Apesar de serem definidos dois códigos de inscrição distintos, o usuário precisa conhecer apenas um deles, conforme a intenção do professor (apenas inscrever no curso ou simultaneamente inscrevê-lo num grupo).';
$string['enrolmentkeyalreadyinuse'] = 'Este código de inscrição já está sendo utilizado para outro grupo.';
$string['erroraddremoveuser'] = 'Erro ao adicionar/remover usuário {$a} no grupo';
$string['erroreditgroup'] = 'Erro ao criar/atualizar grupo {$a}';
$string['erroreditgrouping'] = 'Erro ao criar/atualizar agrupamento {$a}';
$string['errorinvalidgroup'] = 'Erro, grupo inválido: {$a}';
$string['errorremovenotpermitted'] = 'Você não tem permissão para remover membro do grupo automaticamente adicionado {$a}';
$string['errorselectone'] = 'Selecionar um grupo antes de escolher esta opção';
$string['errorselectsome'] = 'Selecionar um ou mais grupos antes de escolher esta opção';
$string['evenallocation'] = 'Nota: Para distribuir os membros em modo homogeneo, o atual número de membros por grupo difere do número especificado.';
$string['eventgroupcreated'] = 'Grupo criado';
$string['eventgroupdeleted'] = 'Grupo apagado';
$string['eventgroupingcreated'] = 'Agrupamento criado';
$string['eventgroupingdeleted'] = 'Agrupamento apagado';
$string['eventgroupinggroupassigned'] = 'Grupo atribuído ao agrupamento';
$string['eventgroupinggroupunassigned'] = 'Grupo não atribuído ao agrupamento';
$string['eventgroupingupdated'] = 'Agrupamento atualizado';
$string['eventgroupmemberadded'] = 'Membro adcionado ao grupo';
$string['eventgroupmemberremoved'] = 'Membro removido do grupo';
$string['eventgroupupdated'] = 'Grupo atualizado';
$string['existingmembers'] = 'Grupos atuais: {$a}';
$string['filtergroups'] = 'Filtrar grupos por:&nbsp;';
$string['group'] = 'Grupo';
$string['groupaddedsuccesfully'] = 'Grupo {$a} adicionado com sucesso';
$string['groupaddedtogroupingsuccesfully'] = 'Grupo {$a->groupname} adicionado com sucesso ao agrupamento {$a->groupingname}';
$string['groupby'] = 'Critério para definição dos grupos';
$string['groupdescription'] = 'Descrição do grupo';
$string['groupinfo'] = 'Informações sobre o grupo selecionado';
$string['groupinfomembers'] = 'Informações sobre os membros selecionados';
$string['groupinfopeople'] = 'Informações sobre as pessoas selecionadas';
$string['grouping'] = 'Agrupamento';
$string['grouping_help'] = 'O agrupamento é uma coleção de grupos dentro de um curso. Se um agrupamento é selecionado, os estudantes associados aos grupos desse agrupamento poderão trabalhar juntos.';
$string['groupingaddedsuccesfully'] = 'Agrupamento {$a} adicionado com sucesso';
$string['groupingdescription'] = 'Descrição do agrupamento';
$string['groupingname'] = 'Nome do agrupamento';
$string['groupingnameexists'] = 'O nome do agrupamento \'{$a}\' já existe nesse curso, por favor escolha outro.';
$string['groupings'] = 'Agrupamentos';
$string['groupingsection'] = 'Permitir acesso somente ao agrupamento';
$string['groupingsection_help'] = 'Um agrupamento é uma coleção de grupos em um curso. Se um agrupamento for selecionado aqui, somente estudantes membros de grupos que fazem parte desse agrupamento terão acesso a esse tópico.';
$string['groupingsonly'] = 'Apenas agrupamentos';
$string['groupmember'] = 'Membro do grupo';
$string['groupmemberdesc'] = 'Papel padrão para um membro de um grupo.';
$string['groupmembers'] = 'Membros do grupo';
$string['groupmemberssee'] = 'Ver membros do grupo';
$string['groupmembersselected'] = 'Membros do grupo selecionado';
$string['groupmode'] = 'Modalidade grupo';
$string['groupmode_help'] = 'Esta configuração possui 3 opções:

* Nenhum grupo
* Grupos separados - Cada membro de grupo pode ver apenas seu próprio grupos, os outros são invisíveis
* Grupos visíveis - Cada membro do grupo trabalha no seu próprio grupo mas pode também ver outros grupos

O tipo de grupo definido no nível do curso é o padrão para todas as atividades do curso. Cada atividade que suporta grupos pode também definir seu próprio tipo de grupo, mas, se o tipo de grupo é forçado no nível do curso, o tipo de grupo para cada atividade é ignorado.';
$string['groupmodeforce'] = 'Forçar modalidade grupo';
$string['groupmodeforce_help'] = 'Se o modo de grupo é forçado, então o modo de grupo do curso é aplicado a todas as atividades do curso. Configurações do modo de grupo de cada atividade serão ignoradas.';
$string['groupmy'] = 'Meu grupo';
$string['groupname'] = 'Nome do grupo';
$string['groupnameexists'] = 'O nome de grupo \'{$a}\' já existe nesse curso, por favor escolha outro.';
$string['groupnotamember'] = 'Sinto muito, você não é membro desse grupo';
$string['groups'] = 'Grupos';
$string['groupscount'] = 'Grupos ({$a})';
$string['groupsettingsheader'] = 'Grupos';
$string['groupsgroupings'] = 'Grupos e agrupamentos';
$string['groupsinselectedgrouping'] = 'Grupos em:';
$string['groupsnone'] = 'Nenhum grupo';
$string['groupsonly'] = 'Apenas grupos';
$string['groupspreview'] = 'Prévia dos grupos';
$string['groupsseparate'] = 'Grupos separados';
$string['groupsvisible'] = 'Grupos visíveis';
$string['grouptemplate'] = 'Grupo @';
$string['hidepicture'] = 'Esconder imagem';
$string['importgroups'] = 'Importar grupos';
$string['importgroups_help'] = 'Grupos podem ser importados a partir de um arquivo de texto. O formato do arquivo deve ser conforme abaixo:

* Cada linha do arquivo deve conter dados de apenas um grupo
* Cada linha é composta por uma série de dados (colunas) separados por vírgulas
* A primeira linha deve conter a lista de nomes dos campos, ou seja, o nome de cada coluna
* Na primeira linha é obrigatório haver uma coluna nomeada \'groupname\' (nome do grupo)
* Os campos opcionais são \'description\' (descrição), \'enrolmentkey\' (código de inscrição), \'groupingname\' (nome do agrupamento) e \'enablemessaging\' (habilitar mensagem)';
$string['importgroups_link'] = 'group/import';
$string['includeonlyactiveenrol'] = 'Incluir matrículas única ativas';
$string['includeonlyactiveenrol_help'] = 'Se ativado, os usuários suspensos não serão incluídos em grupos.';
$string['javascriptrequired'] = 'Essa página precisa do JavaScript para ser ativada.';
$string['memberofgroup'] = 'Membro do grupo: {$a}';
$string['members'] = 'Membros por grupo';
$string['membersofselectedgroup'] = 'Membros de:';
$string['mygroups'] = 'Meus grupos';
$string['namingscheme'] = 'Esquema de nomes';
$string['namingscheme_help'] = 'Os símbolos arroba (@) e cerquilha (#) podem ser usados para criar grupos com nomes diferenciados por letras ou números, respectivamente.
Por exemplo, o esquema "Grupo @" resulta na criação de grupos com nomes "Grupo A", "Grupo B", "Grupo C", etc. Por sua vez, o esquema "Grupo #" irá gerar grupos com nomes "Grupo 1", "Grupo 2", etc.';
$string['newgrouping'] = 'Novo agrupamento';
$string['newpicture'] = 'Nova imagem';
$string['newpicture_help'] = 'Selecione uma imagem nos formatos PNG ou JPG. A imagem será cortada como um quadrado e redimensionada para 100x100 pixels.';
$string['noallocation'] = 'Não distribuir';
$string['nogroup'] = 'Nenhum grupo';
$string['nogrouping'] = 'Sem agrupamento';
$string['nogroups'] = 'Ainda não há grupos definidos nesse curso';
$string['nogroupsassigned'] = 'Nenhum grupo atribuído';
$string['nopermissionforcreation'] = 'Impossível criar grupo "{$a}" pois você não tem as permissões necessárias';
$string['nosmallgroups'] = 'Evitar o último grupo pequeno';
$string['notingroup'] = 'Ignorar usuários já inscritos em grupos';
$string['notingrouping'] = 'Em nenhum agrupamento';
$string['notingrouplist'] = 'Em nenhum grupo';
$string['nousersinrole'] = 'Não há usuários possíveis no papel selecionado';
$string['number'] = 'Número de grupos/membros';
$string['numgroups'] = 'Número de grupos';
$string['nummembers'] = 'Número de membros por grupo';
$string['othergroups'] = 'Outros grupos';
$string['overview'] = 'Visão geral';
$string['potentialmembers'] = 'Grupos potenciais: {$a}';
$string['potentialmembs'] = 'Membros em potencial';
$string['printerfriendly'] = 'Versão para impressão';
$string['privacy:metadata:core_message'] = 'As conversas em grupo';
$string['privacy:metadata:groups'] = 'Um registro de associação ao grupo.';
$string['privacy:metadata:groups:groupid'] = 'O ID do grupo.';
$string['privacy:metadata:groups:timeadded'] = 'O registro de data e hora indicando quando o usuário foi adicionado ao grupo.';
$string['privacy:metadata:groups:userid'] = 'O ID do usuário que está associado ao grupo.';
$string['random'] = 'Aleatoriamente';
$string['removefromgroup'] = 'Remover usuário do grupo {$a}';
$string['removefromgroupconfirm'] = 'Você deseja realmente remover o usuário "{$a->user}" do grupo "{$a->group}"?';
$string['removegroupfromselectedgrouping'] = 'Remover grupo do agrupamento';
$string['removegroupingsmembers'] = 'Remover todos os grupos dos agrupamentos';
$string['removegroupsmembers'] = 'Remover todos os membros do grupo';
$string['removeselectedusers'] = 'Remover usuários selecionados';
$string['selectfromgroup'] = 'Selecionar apenas membros do grupo';
$string['selectfromgrouping'] = 'Selecionar apenas membros do agrupamento';
$string['selectfromrole'] = 'Selecionar apenas membros com papel';
$string['showgroupsingrouping'] = 'Mostrar grupos nos agrupamentos';
$string['showmembersforgroup'] = 'Mostrar membros do grupo';
$string['toomanygroups'] = 'Usuários insuficientes para preencher o número de grupos: há apenas {$a} usuários no papel escolhido.';
$string['usercount'] = 'Número de usuários';
$string['usercounttotal'] = 'Número de usuários ({$a})';
$string['usergroupmembership'] = 'Grupos do usuário selecionado:';
