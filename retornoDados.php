<?php

/*
 * DataTables example server-side processing script.
 *
 * Please note that this script is intentionally extremely simple to show how
 * server-side processing can be implemented, and probably shouldn't be used as
 * the basis for a large complex system. It is suitable for simple use cases as
 * for learning.
 *
 * See http://datatables.net/usage/server-side for full details on the server-
 * side processing requirements of DataTables.
 *
 * @license MIT - http://datatables.net/license_mit
 */
  
/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *

* Easy set variables
 */
  
// DB tabela do banco
$table = 'vendedores';
  
// Table's primary key
$primaryKey = 'id';
  
// Array of database columns which should be read and sent back to DataTables.
// The `db` parameter represents the column name in the database, while the `dt`
// parameter represents the DataTables column identifier. In this case simple
// indexes

$columns = array(
    array( 'db' => 'nome',  'dt' => 0 ),
    array( 'db' => 'email', 'dt' => 1 ),
    array( 'db' => 'cep', 'dt' => 2 ),
    array( 'db' => 'rua', 'dt' => 3 ),
    array( 'db' => 'bairro', 'dt' => 4 ),
    array( 'db' => 'cidade', 'dt' => 5),
    array( 'db' => 'estado', 'dt' => 6 ),
    array( 'db' => 'numero', 'dt' => 7 ),
    array( 'db' => 'complemento',  'dt' => 8 )   
);
  
// SQL server connection information
$sql_details = array(
    'user' => 'root',
    'pass' => '',
    'db'   => 'bdcrud',
    'host' => '127.0.0.1:3307'
);
  
  
/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
 * If you just want to use the basic configuration for DataTables with PHP
 * server-side, there is no need to edit below this line.
 */
  
require( 'ssp.php' );

//$query = 'select num_rma, cliente, num_serie, notaFiscal, data, s.situacao from itens i, status s where i.id_status = s.id';

//$where = "id_status = 2";
  
echo json_encode(
    SSP::simple( $_GET, $sql_details, $table, $primaryKey, $columns)
);


?>