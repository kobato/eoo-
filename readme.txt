Control panel:http://yoursite.com/admin
usr&pass:admin
db_conn_file:inc_eoo/conn_index.php
----------------
to disable pseudo static 
edit blog.php
replace:
eoo<?=$row[id]?>.html
to:
eoo.php?id=<?=$row[id]?>
