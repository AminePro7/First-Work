<?php
        //And we finish by freeing the result and closing the connection to the DB
        mysqli_free_result($result);
        mysqli_close($conn);