# Created by Cody Hill-Boss
# to update webpages every 24 hrs

# go to git directory
cd ./public_html/Advanced-Web-Programming/
# update Repo on file run
echo "Updating WebPages" | git pull
# pit pull every 24 hrs
while sleep 86400; do echo "Updating WebPages" | git pull; done
# leave running with:
# ctr+z
# bg
# disown

# to kill
# ps -A | grep update.sh
# kill {pid of update.sh}
# do:
# ps -A
# kill {pid of sleep 86400}
