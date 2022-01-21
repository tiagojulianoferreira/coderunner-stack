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
 * Strings for component 'tool_dynamicrule', language 'pt_br_wp', version '3.11'.
 *
 * @package     tool_dynamicrule
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['active'] = 'Ativo';
$string['activerules'] = 'Regras ativas';
$string['addcondition'] = 'Adicionar condição';
$string['addconditions'] = 'Adicione condições a esta regra';
$string['addoutcome'] = 'Adicionar ação';
$string['addoutcomes'] = 'Adicione ações a esta regra';
$string['after'] = 'Em ou depois';
$string['archive'] = 'Arquivar';
$string['archived'] = 'Arquivado';
$string['archivedrules'] = 'Regras arquivadas';
$string['archiverule'] = 'Regra de arquivamento \'{$a}\\';
$string['availableplaceholders'] = 'Marcadores de posição disponíveis';
$string['before'] = 'Antes';
$string['body'] = 'Corpo';
$string['broken'] = 'Quebrado';
$string['cachedef_eventsubscriptions'] = 'Isso armazena a lista de inscrições de eventos para condições da regra.';
$string['cannotenablecomponentrule'] = 'Não é possível habilitar a regra \'{$a}\' a menos que ela tenha ações e não contenha erros.';
$string['cannotenablerule'] = 'Não é possível habilitar a regra \'{$a}\' a menos que ela tenha condições, ações e não contenha erros.';
$string['cohort'] = 'Coorte';
$string['conditioncohortmember'] = 'O usuário é membro da coorte';
$string['conditioncohortmemberdescription'] = 'Usuários que são membros da coorte \'{$a}\\';
$string['conditioncohortmemberdescriptionwithdate'] = 'Usuários que são membros da coorte \'{$a->name}\' <br/>
Adicionado à coorte em ou após: \'{$a->conditiondate}\\';
$string['conditioncohortnotmember'] = 'O usuário não é membro da coorte';
$string['conditioncohortnotmemberdescription'] = 'Usuários que não são membros da coorte \'{$a}\\';
$string['conditioncoursecompleted'] = 'Curso concluído';
$string['conditioncoursecompleteddescription'] = 'Usuários que concluíram o curso \'{$a}\\';
$string['conditioncoursecompleteddescriptionwithdate'] = 'Usuários que concluíram o curso \'{$a->coursename}\' <br />
Data de conclusão em ou \'{$a->datetype}\': \'{$a->conditiondate}\\';
$string['conditioncoursenotcompleted'] = 'Curso não concluído';
$string['conditioncoursenotcompleteddescription'] = 'Usuários que não concluíram o curso \'{$a}\\';
$string['conditionisbroken'] = 'Esta condição contém um erro.';
$string['conditionisnotavailable'] = 'Esta condição não está disponível.';
$string['conditionnotsaved'] = 'A condição não foi salva.';
$string['conditions'] = 'Condições';
$string['conditionuserenrolled'] = 'Usuário inscrito';
$string['conditionuserenrolleddescription'] = 'Usuários que estão matriculados no curso \'{$a->course}\' <br/>
Método de inscrição: \'{$a->matricula}\\';
$string['conditionuserenrolleddescriptionwithdate'] = 'Usuários que estão inscritos no curso \'{$a->course}\' <br/>
Método de inscrição: \'{$a->matricula}\' <br/>
Data de início da inscrição em ou após: \'{$a->conditiondate}\\';
$string['conditionuserlastlogin'] = 'Último login do usuário';
$string['conditionuserlastlogindescriptionbefore'] = 'Usuários que fizeram login pela última vez há mais de {$a}';
$string['conditionuserlastlogindescriptionever'] = 'Usuários que fizeram login pelo menos uma vez';
$string['conditionuserlastlogindescriptioninlast'] = 'Usuários que se conectaram durante os últimos {$a}';
$string['conditionuserlastlogindescriptionnever'] = 'Usuários que nunca fizeram login';
$string['conditionusernotenrolled'] = 'Usuário não inscrito';
$string['conditionusernotenrolleddescription'] = 'Usuários que não estão inscritos no curso \'{$a->course}\' <br/>
Método de inscrição: \'{$a->matricula}\\';
$string['conditionusernotenrolleddescriptionwithenrol'] = 'Usuários que não estão matriculados no curso \'{$a->course}\' com o método de inscrição \'{$a->matricula}\\';
$string['conditionuserprofilefield'] = 'Campo de perfil de usuário';
$string['conditionuserprofilefielddescription'] = 'Usuários cujo valor para o campo de perfil \'{$a->fieldname}\' é \'{$a->fieldvalue}\\';
$string['conditionuserprofilefielddescriptiontext'] = 'Usuários cujo valor para o campo de perfil \'{$a->fieldname}\' {$a->fieldvalue}';
$string['confirmarchiverule'] = 'Tem certeza que deseja arquivar a regra \'{$a}\'? As regras dinâmicas arquivadas ainda estarão disponíveis para relatórios atuais e futuros.';
$string['confirmdeletecondition'] = 'Tem certeza de que deseja excluir a condição \'{$a}\' e todos os dados associados? Essa ação não pode ser desfeita.';
$string['confirmdeleteoutcome'] = 'Tem certeza de que deseja excluir a ação \'{$a}\' e todos os dados associados? Essa ação não pode ser desfeita.';
$string['confirmdeleterule'] = 'Tem certeza de que deseja excluir a regra \'{$a}\' e todos os dados associados? Essa ação não pode ser desfeita.';
$string['confirmdisableruleforedit'] = 'Esta regra será automaticamente desabilitada para edição.';
$string['confirmduplicaterule'] = 'Tem certeza que deseja duplicar a regra \'{$a}\'?';
$string['confirmeditrule'] = 'Como alguns usuários correspondiam a essa regra no passado, você só poderá editar as ações da regra. Você pode considerar duplica-la para modificar suas condições';
$string['confirmenablecomponentrule'] = 'Tem certeza de que deseja ativar esta regra? Ativá-lo afetará {$a} usuários.';
$string['confirmenablerule'] = 'As condições serão bloqueadas quando pelo menos um usuário for afetado por esta regra. Tem certeza de que deseja ativar esta regra?';
$string['countmatchingusers'] = '{$a} correspondências totais';
$string['coursecompletiondate'] = 'Data de conclusão';
$string['courseinternalid'] = 'ID do curso interno usado em URLs';
$string['courseurl'] = 'URL do curso';
$string['datetypeever'] = 'Sempre';
$string['datetypeinlast'] = 'Por último';
$string['datetypenever'] = 'Nunca';
$string['datetypenone'] = 'Não configurado';
$string['datetypepast'] = 'Sobre';
$string['deletecondition'] = 'Excluir condição';
$string['deleteoutcome'] = 'Excluir ação';
$string['deleterule'] = 'Excluir regra \'{$a}\\';
$string['details'] = 'Detalhes';
$string['disablerule'] = 'Desativar regra \'{$a}\\';
$string['duplicate'] = 'Duplicado';
$string['duplicaterule'] = 'Regra duplicada \'{$a}\\';
$string['during'] = 'durante';
$string['dynamicrule:manage'] = 'Gerenciar regras dinâmicas';
$string['editactions'] = 'Editar ações da regra \'{$a}\\';
$string['editanyway'] = 'Edite mesmo assim';
$string['editcondition'] = 'Editar condição';
$string['editdetails'] = 'Editar detalhes da regra \'{$a}\\';
$string['editdetailsbutton'] = 'Editar Detalhes';
$string['editoutcome'] = 'Editar ação';
$string['editrule'] = 'Editar regra \'{$a}\\';
$string['editrulename'] = 'Editar o nome da regra \'{$a}\\';
$string['enable'] = 'Habilitar';
$string['enablehelp'] = 'regra de habilitação';
$string['enablehelp_help'] = 'Uma regra requer que pelo menos uma condição e uma ação sejam ativadas. Além disso, as condições ou ações não devem conter erros.';
$string['enablehelpmodal'] = 'regra de habilitação';
$string['enablehelpmodal_help'] = 'Uma regra requer que pelo menos uma ação seja habilitada.';
$string['enablerule'] = 'Habilitar regra \'{$a}\\';
$string['errorbadgehasextracriteria'] = 'Este emblema tem outro critério obrigatório, além da emissão manual, portanto, não pode haver problemas por regra dinâmica';
$string['errorbadgenopermission'] = 'Você não tem função exigida para emitir este emblema';
$string['errorcannotcreate'] = 'Você não tem permissão para criar regras';
$string['errorcannotmanage'] = 'Você não tem permissão para gerenciar esta regra';
$string['errorcannotmanagecondition'] = 'Você não tem permissão para gerenciar esta condição';
$string['errorcannotmanageoutcome'] = 'Você não tem permissão para gerenciar esta ação';
$string['errorcompletionnotenabled'] = 'A conclusão não está habilitada para este curso';
$string['errorinvalidbadge'] = 'Emblema inválido';
$string['errorinvalidbody'] = 'Corpo de notificação inválido';
$string['errorinvalidcohort'] = 'Coorte inválida';
$string['errorinvalidcompetency'] = 'Competência inválida';
