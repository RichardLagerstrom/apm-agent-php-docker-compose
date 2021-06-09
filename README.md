# Elastic APM + Kibana + A simple PHP project
Elastic APM & Kibana dev environment with a simple PHP project to test apm-agent-php.

Running this project you'll end with a local dev environment as such:

- Kibana: http://localhost:5601/
- A simple PHP project to test APM integration: http://localhost/
- Edit web root files in `public/` to see it live on http://localhost/

## Prerequisites

**APM Agent for PHP**

Get `apm-agent-php_1.1_all.deb` to be installed as a PHP extension during `docker-compose (build,up)`.
```shell
# fetch the Elastic apm-agent-php deb package
wget https://github.com/elastic/apm-agent-php/releases/download/v1.1/apm-agent-php_1.1_all.deb
```

## Get running!
```shell
docker-compose up
```

Now, visit http://localhost to see the `index.php`.

Assuming all went well you'll see the simple PHP project `php-project` service on

http://localhost:5601/app/apm/services?rangeFrom=now-15m&rangeTo=now

### Side note
The `docker-compose.yml` was copied from https://www.elastic.co/guide/en/apm/get-started/current/quick-start-overview.html.
Then I added `php` service, for testing APM on a simple PHP project.
