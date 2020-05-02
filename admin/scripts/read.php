<?php

function getAll()
{
    $pdo = Database::getInstance()->getConnection();
    $queryAll = 'SELECT * FROM `tbl_items`';
    $results = $pdo->query($queryAll);

    if ($results) {
        return $results;
    } else {
        return 'There was a problem accessing this info';
    }
}

function getSingleItem($id)
{
    //TODO: finish the function based on getAll, this time only return
    // one movie's fields

    $pdo = Database::getInstance()->getConnection();
    // $query = 'SELECT * FROM '.$tbl.' WHERE '$col' = '.$id;
    $query = "SELECT * FROM `tbl_items` WHERE ID = $id";
    $results = $pdo->query($query);

    if ($results) {
        return $results;
    } else {
        return 'There was a problem accessing this info';
    }

}

function getItemsByFilter($filter)
{
    $pdo = Database::getInstance()->getConnection();

    $filter_stmt = 'SELECT * FROM `tbl_items` WHERE item_type = :filter' ;
    $filter_query = $pdo->prepare($filter_stmt);
    $results = $filter_query->execute(
        array(
            ':filter'=>$filter
        )
        );
        
    if ($results) {
        return $filter_query;
    } else {
        return 'There was a problem accessing this info';
    }
}
