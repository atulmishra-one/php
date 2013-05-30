<?php

mysql_connect("localhost", "root", "" );

mysql_select_db("flatscom_21flats");

/*$sql = mysql_query("SELECT *
					projects 
					CASE project_name 
					WHEN project_name
					LIKE '%kk%' THEN 
					project_name LIKE '%aarcity%'
					END
					") or die( mysql_error() );*/
					

//$sql = mysql_query("SELECT * , CASE WHEN project_name LIKE '%-%' THEN project_name REGEXP '[^-]' END as info  FROM projects  ") or die( mysql_error() );
/*$name= 'aarcity-regency-park-sector-16c';

$sql = mysql_query("SELECT * , REPLACE('$name', '-', ' ') as info  FROM projects WHERE project_name = projects.info  ") or die( mysql_error() );

while( $exe = mysql_fetch_array($sql) )
{
	echo $exe['info'];
}*/

/*
$name= 'aarcity-regency-park-sector-16c';

$sql = mysql_query("SELECT * , CASE WHEN project_name REGEXP '[-]' THEN project_name NOT REGEXP '[-]'
					 END as info  FROM projects  ") or die( mysql_error() );
					 
		*/			 

/*$sql = mysql_query("SELECT *, 
CASE project_name
WHEN project_name
NOT REGEXP  '[-]'
THEN  REPLACE(project_name, '-', ' ')
END AS info
FROM projects
LIMIT 0 , 30 ") or die( mysql_error() );

while( $exe = mysql_fetch_array($sql) )
{
	echo  $exe['info']. "<br />";
}*/
			
			
//$name = 'atu7l-misha';


		
/*$sql = mysql_query("
		SELECT * FROM
		projects WHERE project_name = CASE project_name
		WHEN project_name REGEXP '[-]'
		THEN  REPLACE('aarcity-regency-park-sector-16c', '-', ' ')
		ELSE project_name = aarcity-regency-park-sector-16c
		END
	   ") 
		or die(mysql_error());			 
					 */
					 
					 
	/*

SELECT * 
FROM projects
WHERE project_name = 
CASE project_name
WHEN  'aarcity-regency-park-sector-16c'
REGEXP  '[-]'
THEN REPLACE(  'aarcity-regency-park-sector-16c',  '-',  ' ' ) 
ELSE  'aarcity-regency-park-sector-16c'
END 
LIMIT 0 , 30 

*/			 	 
					 
					 
					 
					 
					 
