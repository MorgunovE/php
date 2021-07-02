<?php

/**
 * Model for table (categories)
 */

/**
 * get child form cat
 * @param $catId id child Int
 * @return mixed array child
 */
function getChildrenForCat($catId)
{
	$sql = "SELECT * FROM categories WHERE parent_id = '{$catId}' ";


	$dblocation = 'localhost';
	$dbname = 'my_shop';
	$dbuser = 'root';
	$dbpasswd = '';

	$mysqli = new mysqli($dblocation, $dbuser, $dbpasswd, $dbname);

	$rs = mysqli_query($mysqli, $sql);

	return createSmartyRsArray($rs);

}

/**
 * Get main categories
 * @return array with categories
 */
function getAllMainCatsWithChildren()
{
	$sql = 'select * 
					from categories 
					where parent_id = 0';

	$dblocation = 'localhost';
	$dbname = 'my_shop';
	$dbuser = 'root';
	$dbpasswd = '';

	$mysqli = new mysqli($dblocation, $dbuser, $dbpasswd, $dbname);

	$rs = mysqli_query($mysqli, $sql);

	$smartyRs = array();

	while ($row = mysqli_fetch_assoc($rs))
	{
		$rsChildren = getChildrenForCat($row['id']);

		if ($rsChildren)
		{
			$row['children'] = $rsChildren;
		}

		$smartyRs[] = $row;
	}

	return $smartyRs;
}

/**
 * @param $catId id category
 * @return array|false|string[]|null string of category
 */
function getCatById($catId)
{
	$catId = intval($catId);
	$sql = "select * 
					from categories 
					where id = '{$catId}'";

	$dblocation = 'localhost';
	$dbname = 'my_shop';
	$dbuser = 'root';
	$dbpasswd = '';

	$mysqli = new mysqli($dblocation, $dbuser, $dbpasswd, $dbname);

	$rs = mysqli_query($mysqli, $sql);
	return mysqli_fetch_assoc($rs);
}
