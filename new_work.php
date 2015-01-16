<?php
$films =array(
     array(
         'title'=>'Funny Movie 3',
         'genre'=>'comedy',
         'stars'=>array(
                       'leading actress',
                        'leading actor',
                         'expendable dude',
                         'somebody else'


         )



     ),

    array(
        'title'=>'Funny Movie 4',
        'genre'=>'comedy',
        'stars'=>array(
            ' actress',
            ' actor',
            ' dude',
            'somebody'


        )



    ),


);
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<table border="2" style="width:100%">
    <tr>
        <td>title</td>
        <td>genre</td>
        <td>stars</td>

    </tr>
    <?php
        foreach ($films as $row){

    ?>
    <tr>
        <td><?php echo $row['title']?></td>
        <td><?php echo $row['genre']?></td>
        <td>
            <ul><?php

            foreach($row['stars'] as $stars_new){


            ?>

            <li><?php
            echo $stars_new;

            }
            ?>
            </li>
            </ul>
        </td>







    </tr>

        <?php
    }
    ?>


</table>
</body>
</html>