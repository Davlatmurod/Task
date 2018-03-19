<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\CompaniesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */
;

?>
<p>
    <?= Html::a('Create Company', ['create'], ['class' => 'btn btn-success']) ?>
</p>
<div class="companies-index">

<div class="row">
    <table class="table table-bordered">
        <tr>
            <th>id</th>
            <th>Name</th>
        </tr>
        <?php
        foreach ($company as $list):?>
        <tr>
            <td><?php echo $list->id;?></td>
            <td><a href="/web/companies/list/<?php echo $list->id; ?>"><?php echo $list->company_name; ?></td></a>
        </tr>
        <?php endforeach; ?>
    </table>
</div>

</div>
