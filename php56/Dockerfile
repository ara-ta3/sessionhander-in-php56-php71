FROM centos:centos6
RUN yum install -y epel-release
RUN yum install -y http://rpms.famillecollet.com/enterprise/remi-release-6.rpm
RUN yum update -y
RUN yum install -y --enablerepo=remi,remi-php56 php php-common httpd
RUN service httpd stop
RUN ln -sf /dev/stderr /var/log/httpd/error_log
