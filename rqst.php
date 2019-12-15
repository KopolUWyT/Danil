<?php
$little_link=$_GET['search'];
$l_link=explode('l=',$little_link);
if(count($l_link)== 1){
    $link=$l_link[0];
}
else{
$link=$l_link[1];
}
include("config.php");
$dbconn3 = pg_connect("host=$host port=5432 dbname=$db user=$user password=$pass");
$coun= "SELECT coun, date  from relinks where small_link='$link'"; 
$res = pg_query($dbconn3, $coun);
$data = pg_fetch_array($res);
$pure_date=date("Y.m.d H:i:s",strtotime($data["date"]));

$info='        <div class="uk-card uk-card-default uk-card-hover uk-card-body uk-width-1-3" uk-tooltip="title: Дата последнего перехода:     '.$pure_date.' ;pos: bottom">
<h3 class="uk-card-title">Количество переходов:</h3>
<p><h1>'.$data['coun'].'</h1></p>
</div>';

$nope='        <div class="uk-card uk-card-secondary uk-card-hover uk-card-body uk-light  uk-width-1-3" uk-tooltip="title: Такой ссылки нет ;pos: bottom">
<h3 class="uk-card-title" >ERROR</h3>
</div>';

if($data){
echo $info;
}
else{
echo $nope;
};
?>
