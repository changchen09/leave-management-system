
//Java code for serial number to rows of table...

<script>
    var tables = document.getElementsByTagName('table');
    var table = tables[tables.length - 1];
    var rows = table.rows;
    for(var i = 0, td; i < rows.length; i++){
        td = document.createElement('td');
        td.appendChild(document.createTextNode(i + 0));
        rows[i].insertBefore(td, rows[i].firstChild);
    }
</script>