############################################
# Setup Server
############################################

set :stage, :production
set :stage_url, "http://www.emily.vc"
server "buttermere-01.mixd.co.uk", user: "mixdsftpuser", roles: %w{web app db}
set :deploy_to, "/var/www/vhosts/emily.vc/httpdocs"

############################################
# Setup Git
############################################

set :branch, "master"

############################################
# Extra Settings
############################################

#specify extra ssh options:

#set :ssh_options, {
#    auth_methods: %w(password),
#    password: 'password',
#    user: 'username',
#}

#specify a specific temp dir if user is jailed to home
#set :tmp_dir, "/path/to/custom/tmp"
