<?php
/**
 * Created by PhpStorm.
 * User: LENOVO
 * Date: 19.03.2018
 * Time: 16:58
*/

?>
<div>
    <table class="table-bordered table">
        <tr>
            <th>№</th>
            <th>Person Name</th>
            <th>Person Addres</th>
        </tr>

        <?php foreach ($company as $row):?>
            <tr>
                <td><?php echo $row->id;?></td>
                <td><?php echo $row->person_name;?></td>
                <td><?php echo $row->person_address;?></td>
            </tr>
        <?php endforeach;?>
    </table>
</div>
