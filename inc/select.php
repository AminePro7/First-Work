<?php


//The query to select all datas from database
        $sql='SELECT * FROM users ORDER BY RAND() LIMIT 1';
        //Execute the query : all datas gotten from the query are sticked in $result
        $result= mysqli_query($conn,$sql);
        //Get all datas from reuslt in users in the form of array (MYSQLI_ASSOC)
        $users =mysqli_fetch_all($result,MYSQLI_ASSOC);
        //And we print all the data
        //like for ($user in $users)
