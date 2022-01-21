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
 * Strings for component 'enrol', language 'pt_br', version '3.11'.
 *
 * @package     enrol
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['actenrolshhdr'] = 'Plugins de inscrição em curso disponíveis';
$string['addinstance'] = 'Adicionar método';
$string['addinstanceanother'] = 'Adicionar método e criar outro';
$string['ajaxnext25'] = 'Próximos 25...';
$string['ajaxoneuserfound'] = '1 usuário encontrado';
$string['ajaxxmoreusersfound'] = 'Mais de {$a} usuários encontrados';
$string['ajaxxusersfound'] = '{$a} usuários encontrados';
$string['assignnotpermitted'] = 'Você não tem permissão ou não pode atribuir papéis neste curso.';
$string['bulkuseroperation'] = 'Operação em um conjunto de usuários';
$string['configenrolplugins'] = 'Por favor selecione todos os plugins necessários e organize-os na ordem apropriada.';
$string['custominstancename'] = 'Nome personalizado da instância';
$string['defaultenrol'] = 'Adicionar instância a novos cursos';
$string['defaultenrol_desc'] = 'É possível adcionar este plugin a todos os novos cursos por padrão.';
$string['deleteinstanceconfirm'] = 'Você está prestes a excluir o método de inscrição "{$a->name}". Todos os usuários {$a->users} atualmente inscritos utilizando este método serão descadastrados e todos os dados relacionados ao curso, como notas de usuários, membros de grupo ou assinaturas de fórum serão excluídos. Tem certeza de que quer continuar?';
$string['deleteinstanceconfirmself'] = 'Você tem certeza que deseja excluir instância "{$a->name}", que dá acesso a este curso? É possível que você não seja capaz de acessar este curso, se você continuar.';
$string['deleteinstancenousersconfirm'] = 'Você está prestes a excluir o método de inscrição "{$a->name}". Tem certeza de que quer continuar?';
$string['disableinstanceconfirmself'] = 'Você tem certeza que deseja desativar instância "{$a->name}", que dá acesso a este curso? É possível que você não seja capaz de acessar este curso, se você continuar.';
$string['durationdays'] = '{$a} dias';
$string['editenrolment'] = 'Editar inscrição';
$string['edituserenrolment'] = 'Editar inscrições de {$a}';
$string['enrol'] = 'Inscrever';
$string['enrolcandidates'] = 'Usuários não inscritos';
$string['enrolcandidatesmatching'] = 'Usuários não inscritos encontrados';
$string['enrolcohort'] = 'Inscrever coorte';
$string['enrolcohortusers'] = 'Inscrever usuários';
$string['enroldetails'] = 'Detalhes de inscrições';
$string['enrollednewusers'] = '{$a} novos usuários inscritos com sucesso';
$string['enrolledusers'] = 'Usuários inscritos';
$string['enrolledusersmatching'] = 'Usuários inscritos encontrados';
$string['enrolme'] = 'Faça a minha inscrição neste curso';
$string['enrolmentinstances'] = 'Métodos de inscrição';
$string['enrolmentmethod'] = 'Método de inscrição';
$string['enrolmentnew'] = 'Nova inscrição em {$a}';
$string['enrolmentnewuser'] = '{$a->user} fez a inscrição em "{$a->course}"';
$string['enrolmentoptions'] = 'Opções de inscrição';
$string['enrolments'] = 'Inscrições';
$string['enrolmentupdatedforuser'] = 'A inscrição do usuário "{$a->fullname}" foi atualizada';
$string['enrolnotpermitted'] = 'Você não tem permissão para inscrever alguém neste curso';
$string['enrolperiod'] = 'Período de validade da inscrição';
$string['enroltimecreated'] = 'Inscrição criada';
$string['enroltimeend'] = 'Inscrição termina';
$string['enroltimeendinvalid'] = 'A data de término das inscrições deve ser depois da data de início.';
$string['enroltimestart'] = 'Inscrição começa';
$string['enrolusage'] = 'Instâncias / matrículas';
$string['enrolusers'] = 'Inscrever usuários';
$string['enrolxusers'] = 'Inscrever {$a} usuários';
$string['errajaxfailedenrol'] = 'Falha ao inscrever usuário';
$string['errajaxsearch'] = 'Erro ao procurar usuários';
$string['erroreditenrolment'] = 'Um erro ocorreu enquanto se tentava editar as inscrições dos usuários';
$string['errorenrolcohort'] = 'Erro ao criar uma instância de sincronização de inscrição de coorte neste curso.';
$string['errorenrolcohortusers'] = 'Erro ao inscrever membros do coorte neste curso.';
$string['errorthresholdlow'] = 'Limite de notificação deve ser de pelo menos 1 dia.';
$string['errorwithbulkoperation'] = 'Ocorreu um erro no processamento das alterações no conjunto de inscrições';
$string['eventenrolinstancecreated'] = 'Instância de inscrição criada';
$string['eventenrolinstancedeleted'] = 'Instância de inscrição deletada';
$string['eventenrolinstanceupdated'] = 'Instância de inscrição atualizada';
$string['eventuserenrolmentcreated'] = 'Usuário inscrito no curso';
$string['eventuserenrolmentdeleted'] = 'Usuário removido do curso';
$string['eventuserenrolmentupdated'] = 'Desinscrição de usuário atualizada';
$string['expirynotify'] = 'Notificar Antes da Inscrição expirar';
$string['expirynotify_help'] = 'Esta configuração determina quando as mensagens de notficação de expiramento de inscrição são enviadas.';
$string['expirynotifyall'] = 'Usuários que inscrevem outros e usuários inscritos';
$string['expirynotifyenroller'] = 'Somente quem inscreve usuários';
$string['expirynotifyhour'] = 'Hora para enviar notificações de expiração de inscrição';
$string['expirythreshold'] = 'Limite de notificação';
$string['expirythreshold_help'] = 'Quanto tempo antes de expirar a inscrição os usuários devem ser notificados?';
$string['extremovedaction'] = 'Ação para desinscrição externa';
$string['extremovedaction_help'] = 'Selecionar o que deve ser feito quando a inscrição de usuários desaparece de uma fonte externa de inscrições. Note que alguns dadoss de usuários e configurações são apagadas do curso quando é cancelada a matrícula.';
$string['extremovedkeep'] = 'Manter usuário inscrito';
$string['extremovedsuspend'] = 'Desativar inscrição no curso';
$string['extremovedsuspendnoroles'] = 'Desativar inscrição no curso e remover papéis';
$string['extremovedunenrol'] = 'Desinscrever usuário do curso';
$string['finishenrollingusers'] = 'Concluir a inscrição de usuários';
$string['foundxcohorts'] = 'Encontrados {$a} coortes';
$string['instanceadded'] = 'Método adicionado';
$string['instanceeditselfwarning'] = 'Aviso:';
$string['instanceeditselfwarningtext'] = 'Você está inscrito neste curso através deste método de inscrição, portanto as alterações podem afetar seu acesso a este curso.';
$string['invalidenrolduration'] = 'Duração de inscrição inválida';
$string['invalidenrolinstance'] = 'Instância de inscrição inválida';
$string['invalidrequest'] = 'Solicitação inválida';
$string['invalidrole'] = 'Papel inválido';
$string['manageenrols'] = 'Gerenciar plugins de inscrição';
$string['manageinstance'] = 'Gerenciar';
$string['migratetomanual'] = 'Migrar para inscrições manuais';
$string['nochange'] = 'Nenhuma alteração';
$string['noexistingparticipants'] = 'Nenhum participante existente';
$string['nogroup'] = 'Nenhum grupo';
$string['noguestaccess'] = 'Visitantes não podem acessar este curso. Por favor faça login.';
$string['none'] = 'Nenhum';
$string['notenrollable'] = 'Você não pode se inscrever neste curso.';
$string['notenrolledusers'] = 'Outros usuários';
$string['otheruserdesc'] = 'Os usuários a seguir não estão inscritos neste curso, mas tem papéis herdados ou atribuídos dentro do curso.';
$string['participationactive'] = 'Ativo';
$string['participationnotcurrent'] = 'Não atualmente';
$string['participationstatus'] = 'Estado';
$string['participationsuspended'] = 'Suspenso';
$string['periodend'] = 'até {$a}';
$string['periodnone'] = 'matriculados {$a}';
$string['periodstart'] = 'de {$a}';
$string['periodstartend'] = 'de {$a->start} até {$a->end}';
$string['privacy:metadata:user_enrolments'] = 'Inscrições';
$string['privacy:metadata:user_enrolments:enrolid'] = 'A instância do plugin de inscrição';
$string['privacy:metadata:user_enrolments:modifierid'] = 'O ID do usuário que modificou pela última vez a inscrição do usuário';
$string['privacy:metadata:user_enrolments:status'] = 'O status da inscrição do usuário em um curso';
$string['privacy:metadata:user_enrolments:tableexplanation'] = 'O plugin de inscrição principal armazena usuários inscritos.';
$string['privacy:metadata:user_enrolments:timecreated'] = 'A hora em que a inscrição do usuário foi criada';
$string['privacy:metadata:user_enrolments:timeend'] = 'A hora em que a inscrição do usuário termina';
$string['privacy:metadata:user_enrolments:timemodified'] = 'A hora em que a inscrição do usuário foi modificada';
$string['privacy:metadata:user_enrolments:timestart'] = 'A hora em que a inscrição do usuário é iniciada';
$string['privacy:metadata:user_enrolments:userid'] = 'O ID do usuário';
$string['proceedtocourse'] = 'Ir para o conteúdo do curso';
$string['recovergrades'] = 'Restaurar as notas antigas do usuário se possível';
$string['rolefromcategory'] = '{$a->role} (Herdado da categoria do curso)';
$string['rolefrommetacourse'] = '{$a->role} (Herdado de curso pai)';
$string['rolefromsystem'] = '	
{$a->role} (Atribuído no nível do site)';
$string['rolefromthiscourse'] = '{$a->role} (Atribuído neste curso)';
$string['sendfromcoursecontact'] = 'Do contato da disciplina';
$string['sendfromkeyholder'] = 'Do titular da chave';
$string['sendfromnoreply'] = 'Do endereço de "não responda" (no-reply)';
$string['startdatetoday'] = 'Hoje';
$string['synced'] = 'Sincronizadas';
$string['testsettings'] = 'Testar configurações';
$string['testsettingsheading'] = 'Teste as configurações de inscrição - {$a}';
$string['totalenrolledusers'] = '{$a} usuários inscritos';
$string['totalotherusers'] = '{$a} outros usuários';
$string['totalunenrolledusers'] = '{$a} usuários desinscritos';
$string['unassignnotpermitted'] = 'Você não tem permissão para retirar papéis neste curso';
$string['unenrol'] = 'Cancelar inscrição';
$string['unenrolconfirm'] = 'Você quer mesmo desinscrever o usuário "{$a->user}" (previamente inscrito via "{$a->enrolinstancename}") de "{$a->course}"?';
$string['unenrolleduser'] = 'O usuário "{$a->fullname}" foi retirado do curso';
$string['unenrolme'] = 'Cancelar a minha inscrição no curso {$a}';
$string['unenrolnotpermitted'] = 'Você não tem permissão para desinscrever este usuário deste curso.';
$string['unenrolroleusers'] = 'Cancelar inscrições';
$string['uninstallmigrating'] = 'Migrando &quot;{$a}&quot; inscrições';
$string['unknowajaxaction'] = 'Ação solicitada desconhecida';
$string['unlimitedduration'] = 'Ilimitado';
$string['userremovedfromselectiona'] = 'O usuário "{$a}" foi removido da seleção.';
$string['usersearch'] = 'Busca';
$string['withselectedusers'] = 'Com os usuários selecionados';
$string['youenrolledincourse'] = 'Você está inscrito no curso.';
$string['youunenrolledfromcourse'] = 'Você foi desinscrito do curso "{$a}".';
