<?php
/**
 * Created by PhpStorm.
 * User: SysProd
 * Date: 12.03.17
 * Time: 22:37
 */

namespace SysProd\grid;


class GridViewAsset extends \yii\web\AssetBundle
{
    public $sourcePath = '@vendor/SysProd/AdminLteStyle/plugins/datatables';
    public $css = [
        'dataTables.bootstrap.css',
    ];
    public $js = [];
    public $depends = [
        'app\assets\AppAsset',
    ];
}
