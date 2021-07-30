<!DOCTYPE HTML>
<?php
	//includes
	include './db_con.php';
?>
<html>
	<head>
		<title>Ronald Database</title>
	</head>
<body>
<?php 
		//call for database configuration
		$highest_salary_pdo = db_config();
		
		//prepare for SELECT query
		$highest_salary_sql = $highest_salary_pdo->prepare("SELECT salary.salary,employees.name, employees.salary_id, salary.id".
															" FROM employees ".
																"INNER JOIN salary ".
																	"ON employees.salary_id = salary.id WHERE salary.salary = (SELECT MAX(salary) AS salary FROM salary)");
		
		//execute the query
		$highest_salary_sql->execute();
		
		//return value of rowCount
		$highest_salary_count = $highest_salary_sql->rowCount();
		
		//fetch all data and return into associative array
		$highest_salary_post = $highest_salary_sql->fetchALL();
		echo "Top highest paid employee<br>";
		echo "name &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;salary<br>";
		
		//check existing rows
		if( $highest_salary_count > 0 )
		{
			//loop over array
			foreach( $highest_salary_post as $highest_salary_viewpost )
			{
				echo $highest_salary_viewpost->name."&nbsp;&nbsp;&nbsp;".$highest_salary_viewpost->salary."<br>";
			}
		}
//-------------------------------------------------------------------------------------------------------------------
		echo "<br><br><br><br>";
		echo "employee from 2017-2018";
		
		//call for database configuration
		$employee_hired_pdo = db_config();
		
		//prepare for SELECT query
		$employee_hired_sql = $employee_hired_pdo->prepare("SELECT employees.date_hired,salary.salary,employees.name, employees.salary_id, salary.id".
															" FROM employees ".
																"INNER JOIN salary ".
																	"ON employees.salary_id = salary.id WHERE date_hired >= 2012  && date_hired <= 2018 ORDER BY date_hired ASC");
		
		//execute the query
		$employee_hired_sql->execute();
		
		//return value of rowCount
		$employee_hired_count = $employee_hired_sql->rowCount();
		
		//fetch all data and return into associative array
		$employee_hired_post = $employee_hired_sql->fetchALL();
		echo "Top highest paid employee<br>";
		echo "name &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Date hired<br>";
		
		//check existing rows
		if( $employee_hired_count > 0 )
		{
			//loop over array
			foreach( $employee_hired_post as $employee_hired_viewpost )
			{
				echo $employee_hired_viewpost->name."&nbsp;&nbsp;&nbsp;".$employee_hired_viewpost->date_hired."<br>";
			}
		}
//-------------------------------------------------------------------------------------------------------------------
		echo "<br><br><br><br>";
		echo "employee date hired from 2018 onwards<br>";
		
		//call for database configuration
		$employee_belong_to_pdo = db_config();
		
		//prepare for SELECT query
		$employee_belong_to_pdo_sql = $employee_belong_to_pdo->prepare("SELECT employees.date_hired, employees.name, employees.department_id, departments.id, departments.department".
															" FROM employees ".
																"INNER JOIN departments ".
																	"ON employees.department_id = departments.id WHERE departments.department = :department  && employees.date_hired >= :date_hired");
		
		//execute the query
		$employee_belong_to_pdo_sql->execute(array('department'=>"IT",'date_hired'=>"2018"));
		
		//return value of rowCount
		$employee_belong_to_pdo_count = $employee_belong_to_pdo_sql->rowCount();
		
		//fetch all data and return into associative array
		$employee_belong_to_pdo_post = $employee_belong_to_pdo_sql->fetchALL();
		echo "name &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Date hired&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Department<br>";
		
		//check existing rows
		if( $employee_belong_to_pdo_count > 0 )
		{
			//loop over array
			foreach( $employee_belong_to_pdo_post as $employee_belong_to_pdo_viewpost )
			{
				echo $employee_belong_to_pdo_viewpost->name."&nbsp;&nbsp;&nbsp;".$employee_belong_to_pdo_viewpost->date_hired."&nbsp;&nbsp;&nbsp;".$employee_belong_to_pdo_viewpost->department."<br>";
			}
		}
?>
</body>
</html>