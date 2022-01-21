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
 * Strings for component 'quizaccess_seb', language 'pt_br', version '3.11'.
 *
 * @package     quizaccess_seb
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addtemplate'] = 'Adicionar novo template';
$string['allowedbrowserkeysdistinct'] = 'As chaves devem ser todas diferentes.';
$string['cachedef_config'] = 'Cache de configuração SEB';
$string['cachedef_configkey'] = 'Cache da chave de configuração SEB';
$string['cachedef_quizsettings'] = 'Cache de configurações do questionário SEB';
$string['cantdelete'] = 'O template não pode ser excluído porque foi usado em um ou mais questionários.';
$string['cantedit'] = 'O template não pode ser editado porque foi usado em um ou mais questionários.';
$string['confirmtemplateremovalquestion'] = 'Tem certeza de que deseja excluir este modelo?';
$string['confirmtemplateremovaltitle'] = 'Confirma a exclusão do modelo?';
$string['conflictingsettings'] = 'Você não tem permissão para atualizar as configurações existentes do Safe Exam Browser.';
$string['content'] = 'Modelo';
$string['description'] = 'Descrição';
$string['disabledsettings'] = 'Configurações desabilitadas.';
$string['disabledsettings_help'] = 'As configurações do questionário do Safe Exam Browser não podem ser alteradas se existe tentativa realizada no questionário. Para alterar uma configuração, todas as tentativas do questionário devem ser excluídas antes.';
$string['downloadsebconfig'] = 'Baixar arquivo de configuração SEB';
$string['duplicatetemplate'] = 'Já existe um template com o mesmo nome.';
$string['edittemplate'] = 'Editar template';
$string['enabled'] = 'Ativado';
$string['event:accessprevented'] = 'O acesso ao questionário foi impedido';
$string['event:templatecreated'] = 'Template SEB foi criado';
$string['event:templatedeleted'] = 'Template SEB foi deletado';
$string['event:templatedisabled'] = 'Template SEB foi desativado';
$string['event:templateenabled'] = 'O template SEB foi ativado';
$string['event:templateupdated'] = 'O template SEB foi atualizado';
$string['exitsebbutton'] = 'Sair do Safe Exam Browser';
$string['filemanager_sebconfigfile'] = 'Carregar arquivo de configuração do Safe Exam Browser';
$string['filenotpresent'] = 'Por favor, carregue um arquivo de configuração SEB.';
$string['httplinkbutton'] = 'Baixar configuração';
$string['invalid_browser_key'] = 'Chave SEB inválida';
$string['invalid_config_key'] = 'Chave de configuração SEB inválida';
$string['invalidtemplate'] = 'Template de configuração SEB inválido';
$string['manage_templates'] = 'Templates do Safe Exam Browser';
$string['managetemplates'] = 'Gerenciar templates';
$string['missingrequiredsettings'] = 'Estão faltando alguns valores obrigatórios nas definições de configuração.';
$string['name'] = 'Nome';
$string['newtemplate'] = 'Novo template';
$string['not_seb'] = 'Safe Exam Browser não está sendo usado.';
$string['notemplate'] = 'Sem template';
$string['passwordnotset'] = 'As configurações atuais requerem que questionários usando o Safe Exam Browser tenham uma senha de questionário definida.';
$string['pluginname'] = 'Regras de acesso do Safe Exam Browser';
$string['privacy:metadata:quizaccess_seb_quizsettings:timecreated'] = 'Unix time em que as configurações foram criadas.';
$string['privacy:metadata:quizaccess_seb_quizsettings:timemodified'] = 'Unix time em que as configurações foram modificadas pela última vez.';
$string['privacy:metadata:quizaccess_seb_quizsettings:usermodified'] = 'ID do usuário que criou ou modificou as configurações pela última vez.';
$string['privacy:metadata:quizaccess_seb_template:timecreated'] = 'Unix time em que o template foi criado.';
$string['privacy:metadata:quizaccess_seb_template:timemodified'] = 'Unix time em que o template foi modificado pela última vez.';
$string['privacy:metadata:quizaccess_seb_template:usermodified'] = 'ID do usuário que criou ou modificou o modelo pela última vez.';
$string['quizsettings'] = 'Configurações do questionário';
$string['restoredfrom'] = '{$a->name} (restaurao via cmid {$a->cmid})';
$string['seb'] = 'Safe Exam Browser';
$string['seb:manage_filemanager_sebconfigfile'] = 'Alterar a configuração SEB do questionário: Selecione o arquivo de configuração SEB';
$string['seb:manage_seb_allowreloadinexam'] = 'Alterar configuração do questionário SEB: Permitir recarregar';
$string['seb:manage_seb_allowspellchecking'] = 'Alterar configuração do questionário SEB: Habilitar verificação ortográfica';
$string['seb:manage_seb_allowuserquitseb'] = 'Alterar configuração do questionário SEB: Permitir fechar';
$string['seb:manage_seb_enableaudiocontrol'] = 'Alterar configuração do questionário SEB: Habilitar controle de áudio';
$string['seb:manage_seb_expressionsallowed'] = 'Alterar a configuração SEB do questionário: Expressões simples permitidas';
$string['seb:manage_seb_expressionsblocked'] = 'Alterar a configuração SEB do questionário: Expressões simples bloqueadas';
$string['seb:manage_seb_filterembeddedcontent'] = 'Alterar a configuração SEB do questionário: Filtrar conteúdo incorporado';
$string['seb:manage_seb_linkquitseb'] = 'Alterar a configuração SEB do questionário: Sair do link';
$string['seb:manage_seb_muteonstartup'] = 'Alterar configuração do questionário SEB: Mudo na inicialização';
$string['seb:manage_seb_quitpassword'] = 'Alterar configuração do questionário SEB: Senha para fechar';
$string['seb:manage_seb_regexallowed'] = 'Alterar configuração do questionário SEB: Expressões regulares permitidas';
$string['seb:manage_seb_regexblocked'] = 'Alterar configuração do questionário SEB: Expressões regulares bloqueadas';
$string['seb:manage_seb_requiresafeexambrowser'] = 'Alterar configuração do questionário SEB: Safe Exam Browser necessário';
$string['seb:manage_seb_showkeyboardlayout'] = 'Alterar a configuração SEB do questionário: Mostrar layout do teclado';
$string['seb:manage_seb_showreloadbutton'] = 'Alterar configuração do questionário SEB: Mostrar botão de recarregar';
$string['seb:manage_seb_showsebdownloadlink'] = 'Alterar configuração do questionário SEB: Mostrar link de baixar';
$string['seb:manage_seb_showsebtaskbar'] = 'Alterar a configuração SEB do questionário: Mostrar barra de tarefas';
$string['seb:manage_seb_showtime'] = 'Alterar configuração do questionário SEB: Mostrar tempo';
$string['seb:manage_seb_showwificontrol'] = 'Alterar a configuração SEB do questionário: Mostrar controle de Wi-Fi';
$string['seb:manage_seb_templateid'] = 'Alterar a configuração SEB do questionário: Selecione o modelo SEB';
$string['seb:manage_seb_userconfirmquit'] = 'Alterar configuração do questionário SEB: Confirmar ao fechar';
$string['seb:managetemplates'] = 'Gerenciar templates de configuração SEB';
$string['seb_activateurlfiltering'] = 'Habilitar filtro de URL';
$string['seb_allowreloadinexam'] = 'Habilitar recarregar no exame';
$string['seb_allowspellchecking'] = 'Habilitar verificação ortográfica';
$string['seb_enableaudiocontrol'] = 'Habilitar controles de áudio';
$string['seb_expressionsallowed'] = 'Expressões permitidas';
$string['seb_expressionsblocked'] = 'Expressões bloqueadas';
$string['seb_filterembeddedcontent'] = 'Filtrar também conteúdo incorporado';
$string['seb_help'] = 'Configurar questionário para usar o Safe Exam Browser.';
$string['seb_linkquitseb'] = 'Mostrar botão Sair do Safe Exam Browser, configurado com este link de saída';
$string['seb_managetemplates'] = 'Gerenciar templates do Safe Exam Browser';
$string['seb_muteonstartup'] = 'Mudo ao inicializar';
$string['seb_muteonstartup_help'] = 'Se habilitado, o áudio é silenciado ao iniciar o SEB.';
$string['seb_quitpassword'] = 'Senha para fechar';
$string['seb_regexallowed'] = 'Regex permitidas';
$string['seb_regexblocked'] = 'Regex bloqueadas';
$string['seb_requiresafeexambrowser'] = 'Necessário o uso do Safe Exam Browser';
$string['seb_showkeyboardlayout'] = 'Mostrar layout do teclado';
$string['seb_showreloadbutton'] = 'Mostrar botão de recarregar';
$string['seb_showsebdownloadlink'] = 'Mostrar o botão de baixar o Safe Exame Browser';
$string['seb_showsebdownloadlink_help'] = 'Se habilitado, um botão para baixar o Safe Exam Browser será mostrado na página inicial do questionário.';
$string['seb_showsebtaskbar'] = 'Mostrar barra de tarefas SEB';
$string['seb_showtime'] = 'Mostrar tempo';
$string['seb_showtime_help'] = 'Se habilitado, a hora atual é exibida na barra de tarefas SEB.';
$string['seb_showwificontrol'] = 'Mostrar o controle do Wi-Fi';
$string['seb_templateid'] = 'Template de configuração do Safe Exam Browser';
$string['seb_use_client'] = 'Sim - Usar a configuração do cliente SEB';
$string['seb_use_manually'] = 'Sim - Configurar manualmente';
$string['seb_use_template'] = 'Sim - Usar um template existente';
$string['seb_use_upload'] = 'Sim - Carregar minha própria configuração';
$string['sebdownloadbutton'] = 'Baixar Safe Exam Browser';
$string['seblinkbutton'] = 'Iniciar o Safe Exam Browser';
$string['sebrequired'] = 'Este questionário foi configurado para que os estudantes possam fazer uma tentativa, somente se estiverem usando o Safe Exam Browser.';
$string['setting:autoreconfigureseb'] = 'Auto-configurar o SEB';
$string['setting:displayblockswhenfinished'] = 'Exibir blocos após terminar o questionário';
$string['setting:displayblockswhenfinished_desc'] = 'Se habilitado, os blocos serão exibidos depois que o usuário terminar a tentativa do questionário.';
$string['setting:downloadlink'] = 'Link para baixar o Safe Exam Browser';
$string['setting:downloadlink_desc'] = 'URL para baixar o Safe Exam Browser';
$string['setting:quizpasswordrequired'] = 'Senha do questionário necessária';
$string['setting:quizpasswordrequired_desc'] = 'Se habilitado, todos os questionários que requerem o Safe Exam Browser devem ter uma senha de questionário definida.';
$string['setting:showhttplink'] = 'Mostrar http:// link';
$string['setting:showseblink'] = 'Mostrar seb:// link';
$string['setting:supportedversions'] = 'Observe que as seguintes versões mínimas do cliente Safe Exam Browser são necessárias para usar o recurso de chave de configuração: macOS - 2.1.5pre2, Windows - 3.0, iOS - 2.1.14.';
$string['unknown_reason'] = 'Motivo desconhecido';
$string['used'] = 'Em uso';
