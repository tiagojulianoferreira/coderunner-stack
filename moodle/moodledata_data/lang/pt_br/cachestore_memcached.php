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
 * Strings for component 'cachestore_memcached', language 'pt_br', version '3.11'.
 *
 * @package     cachestore_memcached
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['bufferwrites'] = 'Escritas no buffer';
$string['bufferwrites_help'] = 'Habilita ou desabilita o buffer do I/O. Habilitar o buffer do I/O faz com que os comandos de armazenamento sejam guardados no buffer ao invés de serem enviados. Qualquer ação que busque informação faz com que esse buffer seja enviado para uma conexão remota. Cancelando ou fechando  a conexão também fará com que as informações que estão no buffer sejam enviadas para a conexão remota.';
$string['clustered'] = 'Ativar servidores em cluster';
$string['clustered_help'] = 'Esta é usada para permitir uma leitura, "set-multifuncionalidade". O caso de uso pretendido é criar um armazenameno melhorado para configurações de balanceamento de carga. A reserva buscará a partir de um servidor (normalmente localhost), mas configurado para muitos (todos os servidores no pool de balanceamento de carga). Para caches com leitura muito alta pode se definir proporções, isso economiza uma quantidade significativa de sobrecarga da rede. Quando essa configuração está ativada, os servidores listados acima serão utilizados para buscar.';
$string['clusteredheader'] = 'Dividir Servidores';
$string['hash'] = 'Método Hash';
$string['hash_crc'] = 'CRC';
$string['hash_default'] = 'Padrão (one-at-a-time)';
$string['hash_fnv1_32'] = 'FNV1_32';
$string['hash_fnv1_64'] = 'FNV1_64';
$string['hash_fnv1a_32'] = 'FNV1A_32';
$string['hash_fnv1a_64'] = 'FNV1A_64';
$string['hash_help'] = 'Especifica os algoritmos de hashing usado para os itens chave. Cada algoritmo de hashing tem suas vantagens e desvantagens. Siga com o padrão se você não souber.';
$string['hash_hsieh'] = 'Hsieh';
$string['hash_md5'] = 'MD5';
$string['hash_murmur'] = 'Murmur';
$string['isshared'] = 'Cache compartilhado';
$string['isshared_help'] = 'O seu servidor memcached também está sendo utilizado por outras aplicações?

Se o cache é compartilhado por outras aplicações, então cada chave será excluída individualmente para garantir que apenas são excluídos os dados pertencentes a essa aplicação (o que deixará os dados do cache da aplicação externa inalterados). Isto pode provocar uma diminuição de desempenho quando limpar a cache, dependendo da configuração do seu servidor.

Se o cache for dedicado para esta aplicação, então o cache pode ser esvaziado seguramente sem qualquer risco de destruição de dados de cache de outra aplicação. Isto deve resultar num aumento de desempenho quando limpar o cache.';
$string['pluginname'] = 'Memcached';
$string['prefix'] = 'Tecla de prefixo';
$string['prefix_help'] = 'Isso pode ser usado para se criar um "domínio" para os seus itens chave, permitindo que você crie múltiplos depósitos de "memcached" em uma única instalação de  "memcached". Não pode ser maior do que 16 caracteres para se garantir de que não haverá problemas de comprimento de chave.';
$string['prefixinvalid'] = 'Prefixo inválido. Você só pode usar a-z A-Z 0-9-_.';
$string['privacy:metadata:memcached'] = 'O plugin de armazenamento em cache Memcached armazena dados temporariamente como parte de sua funcionalidade de armazenamento em cache. Esses dados são armazenados em um servidor Memcache onde os dados são removidos regularmente.';
$string['privacy:metadata:memcached:data'] = 'Os diferentes dados armazenados no cache';
$string['serialiser_igbinary'] = 'O serializador igbinary.';
$string['serialiser_json'] = 'O serializador JSON.';
$string['serialiser_php'] = 'O serializador PHP.';
$string['servers'] = 'Servidores';
$string['servers_help'] = 'Isso define os servidores que devem ser utilizados por este adaptador memcached.
Os servidores devem ser definidos um por linha, onde cada linha é constituída por um endereço de servidor e, opcionalmente, uma porta e um peso.
Se nenhuma porta for fornecida, a porta padrão (11211) é utilizada.

Por exemplo:
<pre>
server.url.com
ipaddress:port
servername:port:weight
</pre>

Se * Habilitar servidores em cluster * estiver habilitado a seguir, deve haver apenas um servidor listado aqui. Isso normalmente seria um nome que sempre aponta para a maquina local, como 127.0.0.1 ou localhost.';
$string['serversclusterinvalid'] = 'Exatamente um servidor é necessário quando o agrupamento é ativado.';
$string['sessionhandlerconflict'] = 'Aviso: Um exemplo memcache ({$a}) tem que ser configurado para usar o mesmo servidor memcached como sessões. Limpar todos os caches levará a sessões igualmente limpas.';
$string['setservers'] = 'Definir servidores';
$string['setservers_help'] = 'Esta é a lista de servidores que serão atualizados quando os dados forem modificados no cache. Geralmente o nome completo de cada servidor no pool.
Ela **deve** incluir o servidor listado em *Servidores* acima, mesmo que com um nome de host diferente.
Os servidores devem ser definidos um por linha, que é composta por um endereço de servidor e, opcionalmente, uma porta.
Se nenhuma porta é fornecida será utilizada a porta padrão (11211).

Por exemplo:
<pre>
server.url.com
ipaddress:port
</pre>';
$string['testservers'] = 'Servidores de teste';
$string['testservers_desc'] = 'Uma ou mais strings de conexão para testar servidores memchached comparativamente. Se um servidor de teste for especificado, o desempenho do memcached pode ser testado na página de performance de teste do cache no bloco de administração.
Como por exemplo: 127.0.0.1:11211';
$string['upgrade200recommended'] = 'Recomendamos que atualize a extensão PHP Memcached para a versão 2.0.0 ou superior.
A versão da extensão PHP Memcached em uso não fornece a funcionalidade que o Moodle utiliza para garantir o uso do cache de modo seguro (sandboxed). Até atualizar, recomendamos que não configure quaisquer outras aplicações para utilizar os mesmos servidores de Memcached tal como o Moodle está configurado para usar.';
$string['usecompression'] = 'Usar compressão';
$string['usecompression_help'] = 'Habilita e desabilita e compressão do "payload". Quando habilitado, itens com valores maiores que um certo limite (atualmente 100 bytes) serão comprimidos durante o armazenamento e descomprimidos durante o retorno, de forma transparente.';
$string['useserialiser'] = 'Usar serializador';
$string['useserialiser_help'] = 'Especifica serializador para serialização de valores não escalares. Os serializadores válidos são Memcached::SERIALIZER_PHP ou Memcached::SERIALIZER_IGBINARY. O último é suportado apenas quando o mecached é configurado com a opção --enable-memcached-igbinary e a extensão igbinary estiver carregada.';
