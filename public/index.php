<?php

$form = [
    [
        'fieldset' => 'Customer_details',
        'elements' => [
            ['name' => 'Customer', 'type' => 'text'],
            ['name' => 'Contact', 'type' => 'text'],
            ['name' => 'Telephone', 'type' => 'text'],
            ['name' => 'Email', 'type' => 'text'],
            ['name' => 'Hostname', 'type' => 'text'],
            ['name' => 'Server_functions', 'type' => 'text']
        ]
    ],
    [
        'fieldset' => 'Hardware',
        'elements' => [
            ['name' => 'Type', 'type' => 'text'],
            ['name' => 'CPU', 'type' => 'text'],
            ['name' => 'RAM', 'type' => 'text'],
            ['name' => 'Disk', 'type' => 'text'],
            ['name' => 'RAID', 'type' => 'text'],
            ['name' => 'UUID', 'type' => 'text'],
            ['name' => 'Serial_number', 'type' => 'text'],
            ['name' => 'Supplier', 'type' => 'text'],
            ['name' => 'Owner', 'type' => 'text'],
            ['name' => 'Power_consumption', 'type' => 'text'],
            ['name' => 'RAID_set_configured', 'type' => 'checkbox'],
            ['name' => 'BIOS_poweron_after_failure', 'type' => 'checkbox']
        ]
    ],
    [
        'fieldset' => 'VPS',
        'elements' => [
            ['name' => 'Type', 'type' => 'text'],
            ['name' => 'Cores', 'type' => 'text'],
            ['name' => 'RAM', 'type' => 'text'],
            ['name' => 'Disk', 'type' => 'text'],
            ['name' => 'VPS_parent', 'type' => 'text'],
            ['name' => 'Fixed_mac_address', 'type' => 'checkbox'],
            ['name' => 'Auto_start_after_reboot server', 'type' => 'checkbox'],
            ['name' => 'Reboot_after_failure', 'type' => 'checkbox']
        ]
    ],
    [
        'fieldset' => 'Management',
        'elements' => [
            ['name' => 'Type', 'type' => 'select', 'options' => [
                    'None',
                    'Basic',
                    'Advanced',
                    'Premium'
                ]],
            ['name' => 'Details', 'type' => 'text']
        ]
    ],
    [
        'fieldset' => 'Network',
        'elements' => [
            ['name' => 'Location', 'type' => 'text'],
            ['name' => 'IP_Address', 'type' => 'text'],
            ['name' => 'Mac_Address', 'type' => 'text'],
            ['name' => 'Gateway', 'type' => 'text'],
            ['name' => 'Netmask', 'type' => 'text'],
            ['name' => 'DNS', 'type' => 'text'],
            ['name' => 'ILO_IP_Address', 'type' => 'text'],
            ['name' => 'Duplex_Setting', 'type' => 'text'],
            ['name' => 'ifcfg_MAC_Removed', 'type' => 'text'],
            ['name' => 'ifcfg_aliases_at_init', 'type' => 'text']
        ]
    ],
    [
        'fieldset' => 'OS',
        'elements' => [
            ['name' => 'OS_type', 'type' => 'text'],
            ['name' => 'OS_version', 'type' => 'text'],
            ['name' => 'Install_date', 'type' => 'text'],
            ['name' => 'Update', 'type' => 'text'],
            ['name' => 'Kernel_options', 'type' => 'text']
        ]
    ],
    [
        'fieldset' => 'Default_software',
        'elements' => [
            ['name' => 'Sudo', 'type' => 'checkbox'],
            ['name' => 'Puppet_client', 'type' => 'checkbox'],
            ['name' => 'pakiti_client', 'type' => 'checkbox'],
            ['name' => 'cronolog', 'type' => 'checkbox'],
            ['name' => 'Apache', 'type' => 'checkbox'],
            ['name' => 'PHP', 'type' => 'checkbox'],
            ['name' => 'Php.ini', 'type' => 'checkbox'],
            ['name' => 'my.cnf', 'type' => 'checkbox']
        ]
    ],
    [
        'fieldset' => 'Miscellaneous',
        'elements' => [
            ['name' => 'LDAP_configuration', 'type' => 'checkbox'],
            ['name' => 'CSF_configured', 'type' => 'checkbox'],
            ['name' => 'CSF_check_SNMP', 'type' => 'checkbox'],
            ['name' => 'Yum_Proxy', 'type' => 'checkbox'],
            ['name' => 'OMD_host_configured', 'type' => 'checkbox'],
            ['name' => 'Management_Users_Created', 'type' => 'checkbox'],
            ['name' => 'Testaccounts_Removed.ini', 'type' => 'checkbox'],
            ['name' => 'mySSH_PermitRootLogin_disabledcnf', 'type' => 'checkbox'],
            ['name' => 'Backup_configured', 'type' => 'checkbox'],
            ['name' => 'FTP_backup', 'type' => 'checkbox'],
            ['name' => 'rcimgbackup', 'type' => 'checkbox'],
            ['name' => 'MySQL_Backup', 'type' => 'checkbox'],
            ['name' => 'Rebootnotify', 'type' => 'checkbox'],
            ['name' => 'Firewall_ipv4_postconfig', 'type' => 'checkbox'],
            ['name' => 'Firewall_ipv6_postconfig', 'type' => 'checkbox'],
            ['name' => 'ClientExec', 'type' => 'checkbox'],
            ['name' => 'Created_DNS_Entry', 'type' => 'checkbox'],
            ['name' => 'Created_Reverse_DNS_Entry', 'type' => 'checkbox'],
            ['name' => 'NTP_Configured', 'type' => 'checkbox'],
            ['name' => 'Connectivity_Checked', 'type' => 'checkbox'],
            ['name' => 'LDAP_Timeout_Tested', 'type' => 'checkbox'],
            ['name' => 'Outgoing_Email_Tested', 'type' => 'checkbox'],
            ['name' => 'Dokuwiki_Entry', 'type' => 'checkbox'],
            ['name' => 'Racktables_Entry', 'type' => 'checkbox'],
            ['name' => 'Customer_Maintenance_Mailing_Subscription', 'type' => 'checkbox'],
            ['name' => 'Startup_checked', 'type' => 'checkbox'],
            ['name' => 'fstab_checked', 'type' => 'checkbox'],
            ['name' => 'Reboot_tested', 'type' => 'checkbox'],
            ['name' => 'yum_autoupdates', 'type' => 'checkbox'],
            ['name' => 'yum_priorities', 'type' => 'checkbox'],
            ['name' => 'Package_Installation_complete', 'type' => 'checkbox']
        ]
    ],
    [
        'fieldset' => 'cPanel',
        'elements' => [
            ['name' => 'CSF_Frontend_Option', 'type' => 'checkbox'],
            ['name' => 'cPanel_Backup', 'type' => 'checkbox'],
            ['name' => 'Skeleton_Backup', 'type' => 'checkbox'],
            ['name' => 'Apache_Logrotation', 'type' => 'checkbox'],
            ['name' => 'cPanel_Logrotation', 'type' => 'checkbox'],
            ['name' => 'Exim_RBLs_Enabled', 'type' => 'checkbox'],
            ['name' => 'Secure_HTTPS_Login_Only', 'type' => 'checkbox'],
            ['name' => 'Password_Policy_Strength', 'type' => 'checkbox'],
            ['name' => 'Mod_Security_Enabled', 'type' => 'checkbox'],
            ['name' => 'MalwareD_Installed', 'type' => 'checkbox'],
            ['name' => 'OldScriptsFinder_Installed', 'type' => 'checkbox'],
            ['name' => 'EximCheck_Enabled', 'type' => 'checkbox'],
            ['name' => 'Add__Spamexperts_Antispamservers_to_trustedhosts', 'type' => 'checkbox'],
            ['name' => 'DNSCluster_Added', 'type' => 'checkbox'],
            ['name' => 'Server_Signature_Off', 'type' => 'checkbox'],
            ['name' => 'Product_Only', 'type' => 'checkbox'],
            ['name' => 'FileETag_None', 'type' => 'checkbox']
        ]
    ],
    [
        'fieldset' => 'Windows_configuration',
        'elements' => [
            ['name' => 'Racktables_Licensing_on_SPLA', 'type' => 'checkbox'],
            ['name' => 'WSUS_Enabled', 'type' => 'checkbox'],
            ['name' => 'Remote_Ping_Allow_netsh_firewall_set_icmpsetting_8', 'type' => 'checkbox']
        ]
    ],
    [
        'fieldset' => 'HP_Hardware',
        'elements' => [
            ['name' => 'ILO_geconfigureerd', 'type' => 'checkbox'],
            ['name' => 'HP_Hardware_agents', 'type' => 'checkbox']
        ]
    ],
    [
        'fieldset' => 'HPS_Hardware',
        'elements' => [
            ['name' => 'KVM_geconfigureerd', 'type' => 'checkbox'],
            ['name' => 'RAID_agents', 'type' => 'checkbox'],
            ['name' => 'IPMI_hardware_monitoring', 'type' => 'checkbox']
        ]
    ],
    [
        'fieldset' => 'Monitoring',
        'elements' => [
            ['name' => 'Xenconsoled_snmp_proces_monitor', 'type' => 'checkbox'],
            ['name' => 'Monit_installatie', 'type' => 'checkbox'],
            ['name' => 'Xenconsoled_proces_monitor_via_monit', 'type' => 'checkbox'],
            ['name' => 'Monit_snmp_proces_monitor', 'type' => 'checkbox']
        ]
    ],
    [
        'fieldset' => 'Check',
        'elements' => [
            ['name' => 'Checked by', 'type' => 'text'],
            ['name' => 'Date', 'type' => 'text']
        ]
    ]
];

define('APP_ROOT', realpath(__DIR__ . '/../'));

require_once APP_ROOT . '/vendor/autoload.php';

$tpl = new \stdClass();
$tpl->loader = new \Twig_Loader_Filesystem(APP_ROOT . '/views');
$tpl->enviroment = new \Twig_Environment($tpl->loader, [
    'cache' => APP_ROOT . '/cache'
        ]
);

$db = new \stdClass();
$db->instance = new \FileStore\DB(APP_ROOT . '/db');
$db->servers = $db->instance->table('servers');

$router = new \Link\Router();
$router->add(
        [
            $router->get('/', function($sections) use ($tpl, $db) {
                        $servers = [];
                        foreach ($db->servers->keys() as $key) {
                            array_push($servers, $db->servers->get($key));
                        }
                        echo $tpl->enviroment->render('server_list.php', ['title' => 'Servers | Inventory', 'servers' => $servers]);
                    }),
                    $router->get('/server/new', function ($sections) use ($tpl, $db, $form) {
                        echo $tpl->enviroment->render('server_form.php', ['title' => 'New server | Inventory', 'form' => $form]);
                    }),
                    $router->get('/server/show/(.*)', function ($sections) use ($tpl, $db) {
                        $server = [$db->servers->get($sections[1])];
                        echo $tpl->enviroment->render('server_view.php', ['title' => 'View server | Inventory', 'server' => $server]);
                    }),
                    $router->get('/server/edit/(.*)', function ($sections) use ($tpl, $db, $form) {
                        $server = $db->servers->get($sections[1]);
                        echo $tpl->enviroment->render('server_form.php', ['title' => 'Edit server | Inventory', 'server' => $server, 'form' => $form]);
                    }),
                    $router->get('/server/delete/(.*)', function ($sections) use ($router, $tpl, $db) {
                        $server = $db->servers->del($sections[1]);
                        $router->redirect('/');
                    }),
                    $router->post('/server/save', function ($sections) use ($tpl, $db, $router) {
                        $server_name = $_POST['Customer_details']['Customer'] . '-' . $_POST['Customer_details']['Hostname'];
                        $db->servers->set($server_name, $_POST);
                        $server = [$db->servers->get($server_name)];
                        file_put_contents('/tmp/' . $server_name . '.html', $tpl->enviroment->render('pdf.php', ['title' => 'Edit server | Inventory', 'server' => $server]));
                        $command = "/usr/local/bin/wkhtmltopdf  /tmp/{$server_name}.html " . APP_ROOT . "/public/pdf/{$server_name}.pdf";
                        exec($command);
                        $router->redirect('/server/show/' . $server_name);
                    }),
                    $router->get('/server/test', function ($sections) use ($tpl, $db) {
                        $server = [$db->servers->get('sthdxrth-srhtrdhdr')];
                        echo $tpl->enviroment->render('pdf.php', ['server' => $server]);
                    })
        ]);

        $router->run();
        