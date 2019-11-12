<?php

class MySqlDb
{

  protected $_mysql;
  protected $_query;
  protected $_where = array();
  protected $_paramTypeList;

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

	public function get($tableName, $numRows = null)
	{
    $this->_query = "SELECT * FROM $tableName";
    $stmt = $this->_buildQuery($numRows);
    $stmt->execute();

    $results = $this->_dynamicBindResults($stmt);
    return $results;
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
    $this->_where[$whereProp] = $whereVal;
	}
  
  protected function _buildQuery($numRows = null, $tableData = false)
  {  

    $hasTableData = null;

    if( gettype($tableData) === 'array' ){
    	$hasTableData = true; 
    }
    
    if (!empty($this->_where)){
    	$keys = array_keys($this->_where);
    	$where_prop = $keys[0];
      $where_val = $this->_where[$where_prop]; 
     

        if ($hasTableData){
    	     foreach ($tableData as $prop => $val) {
    		 
           }
          

		    }else{
		    	$this->_paramTypeList = $this->_determineType($where_val);
		    	$this->_query .= " WHERE " . $where_prop . "= ?"  ;
		    }
   }

    if(isset($numRows)){
    	$this->_query .= " LIMIT " . (int)$numRows;
    }
 
    
    $stmt = $this->_prepareQuery();

    # parameters biding 
    if($this->_where){
    	$stmt->bind_param($this->_paramTypeList, $where_val); 
    }

    return $stmt; 

  }
  

  protected function _determineType($item)
  {
  	switch (gettype($item)) {
  		case 'value':
  			$param_type = 's';
  			break;
  		case 'integer':
  			$param_type = 'i';
  			break;
  		case 'blob':
  			$param_type = 'b';
  			break;
  		case 'double':
  			$param_type = 'd';
  			break;
  
  	}

    return $param_type;

  }

	protected function _dynamicBindResults($stmt)
	{
    $parameters = array(); 
    $results = array();

    $meta = $stmt->result_metadata();

    while($field = $meta->fetch_field()){
    	$parameters[] = &$row[$field->name];
    }
    
    // pretty difficult stuff btw :)
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
      trigger_error('Problem preparing the query', E_USER_ERROR);
	  }	
	  return $stmt;
	}

	public function __destruct()
	{

	}

}