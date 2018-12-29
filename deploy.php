<?php
namespace Deployer;

require 'recipe/common.php';

// Project name
set('application', 'styleguide');

// Project repository
set('repository', 'https://github.com/Schreglmann/styleguide');

// [Optional] Allocate tty for git clone. Default value is false.
set('git_tty', false); 

// Shared files/dirs between deploys 
//set('shared_files', ['wp-config.php']);
//set('shared_dirs', ['wp-content/uploads']);

// Writable dirs by web server 
//set('writable_mode', 'chown');
//set('writable_dirs', ['wp-content/uploads']);
set('allow_anonymous_stats', false);

// Hosts

host('root@37.120.187.53')
    ->set('deploy_path', '/var/www/{{application}}');    


// Composer
set('composer_action', false);
  

// Tasks

desc('Deploy your project');
task('deploy', [
    'deploy:info',
    'deploy:prepare',
    'deploy:lock',
    'deploy:release',
    'deploy:update_code',
    'deploy:shared',
    'deploy:writable',
    'deploy:clear_paths',
    'deploy:symlink',
    'deploy:unlock',
    'cleanup',
    'success'
]);

// [Optional] If deploy fails automatically unlock.
after('deploy:failed', 'deploy:unlock');
