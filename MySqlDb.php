<?php

class MySqlDb
{

  protected $_mysql;
  protected $_query;

	public function __construct($hostname, $username, $password, $db)
	{
		echo "im running here. wow", "<br>";
		$this->_mysql = new mysqli($hostname, $username, $password, $db ) or die("there is a problem connecting to the database(((");
	}

	public function query($query)
	{
    $this->_query = filter_var($query, FILTER_SANITIZE_STRING); 
    $stmt = $this->_prepareQuery();
    $stmt->execute();
    $results = $this->_dynamicBindResults($stmt);
    return $results;
	} 

	public function get($tableName, $nubRows = null)
	{

	}

	public function insert($tableName, $insertData)
	{

	}

	public function update($tableName, $updateData)
	{

	}

	public function dalete($tableName)
	{

	}

	public function where($whereProp, $whereVal)
	{

	}

	protected function _dynamicBindResults($stmt)
	{
    $parameters = array(); 
    $results = array();

    $meta = $stmt->result_metadata();

    while($field = $meta->fetch_field()){
    	$parameters[] = &$row[$field->name];
    }

    call_user_func_array( array($stmt, 'bind_result'), $parameters);

    while ( $stmt->fetch() ) {
    	$x = array();
    	foreach ($row as $key => $val) {
    		$x[$key] = $val;
    	}
    	$results[] = $x;
    }

    return $results;

	}

	protected function _prepareQuery()
	{
	  if( !$stmt = $this->_mysql->prepare($this->_query)){
      trigger_error('Problem preparing some query', E_USER_ERROR);
	  }	
	  return $stmt;
	}

	public function __destruct()
	{

	}

}