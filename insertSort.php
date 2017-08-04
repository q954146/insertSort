<?php
/**
 * Created by PhpStorm.
 * User: zimo
 * Date: 2017/8/4
 * Time: 13:06
 */

/**
 * @param array $array
 * @return mixed
 */

function insertSort(&$array){

    //默认有序区域为空，无序区域为整个数组
    //从0开始扫描数组，数组分为有序区域 无序区域，i指向有序区域的最后一个元素
    for ($i = 0;$i < count($array)-1;$i++){
        //将数组的第一个值默认放在有序区域
        $j = $i+1;//j为无序区域的第一个元素，该元素将插入到有序区域内
        $k = $i;//k为有序区域的元素指针
        //从有序区域的最后一个元素开始，比较待插入元素与其的大小，若待插入元素较小，则二者互换位置，并将j，k指针一次前移
        while ($array[$j] < $array[$k]) {
            swap($array, $k, $j);
            $j--;
            if ($k > 0){
                $k--;
            }
        }
    }
    return $array;
}

/**
 * 交换函数
 * @param $array
 * @param $k
 * @param $j
 */
function swap(&$array,$k,$j){
    $temp = $array[$k];
    $array[$k] = $array[$j];
    $array[$j] = $temp;
}

$array = [2,6,1,4,3,7,9,8,6,6];

print_r(insertSort($array));
