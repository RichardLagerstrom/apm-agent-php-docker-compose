<p>
    <h3>Great success!</h3>
    You just requested a PHP script (index.php).<br>
    <br>
    This in turn triggered the <a href="https://github.com/elastic/apm-agent-php" target="_blank">apm-agent-php</a> to do its magic and create an APM <i>transaction</i>.<br>
    <br>
    Have a look at <a href="http://localhost:5601/app/apm/services/php-project" target="_blank">Kibana APM dashboard</a> to see the APM dashboard for <b>php-project</b>
</p>
<h3>Trigger some errors</h3>
<ul>
    <li>Hit <a href="/error.php">this</a> to request a page that triggers HTTP 500 Internal Server Error.</li>
    <li>Hit <a href="?throw-exception">this</a> to throw a PHP exception that <u>should</u> end up on the APM dashboard, under <i>errors</i>.</li>
</ul>
<?php
    if (isset($_GET['throw-exception'])) {
        throw new Exception("Why am I not ending up on the APM dashboard for errors?");
    }
?>
