<?php

foreach ($soal as $s) {
    echo $s->soal_id . "====" . $s->soal_detail  . "<a href=" . base_url() . 'index.php/manager/cek/koreksi/' . $s->soal_id .' target="_blank">Koreksi</a>"' ."<br>";
}