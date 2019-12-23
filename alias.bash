alias doc-up="docker-compose up -d"
alias doc-stop="docker-compose stop"
alias doc-restart="doc-stop && doc-up"

alias env-build="docker-compose build"
alias env-pull="docker-compose pull"
alias env-rebuild="env-build && env-restart && permissions"
alias env-logs="docker-compose logs"
alias env-destroy="docker-compose down -v --remove-orphans"