<?php
$link = fbsql_pconnect("localhost", "root", "")
    or die("Could not connect");
$sql = "SELECT content FROM paper";
$rs = fbsql_query($sql, $link);
$row_data = fbsql_fetch_row($rs);
// $row_data[0] will now contain the blob data for the first row
fbsql_free_result($rs);

$rs = fbsql_query($sql, $link);
fbsql_set_lob_mode($rs, FBSQL_LOB_HANDLE);
$row_data = fbsql_fetch_row($rs);
// $row_data[0] will now contain a handle to the BLOB data in the first row
$blob_data = fbsql_read_blob($row_data[0]);
fbsql_free_result($rs);

?>