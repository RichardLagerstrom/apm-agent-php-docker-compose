<?php
    header("HTTP/1.0 500 Internal Server Error");
?>
This is a "HTTP/1.0 500 Internal Server Error".<br>
<br>
This creates an APM <i>transaction</i>, but where is the <i>error</i>... <a href="http://localhost:5601/app/apm/services/php-project" target="_blank">Kibana APM dashboard</a>.<br>
<br>
What am I missing?
