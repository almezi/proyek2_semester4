<?php
    echo form_open('welcome/simpan');
    echo form_label('nip','nip');
    echo form_input('nip','');
    echo form_label('nama','nama');
    echo form_input('nama','');
    echo "<br>";
    echo form_label('jenkel','jenkel');
    $status=array('laki-laki','perempuan');
    echo form_dropdown('status',$status,'large');
    echo "<br>";
    //echo form_label('status',$status,'large');
    echo "<br>";
    echo form_label('status','status');
    echo form_checkbox('checkbox1','laki-laki',true);
    echo form_checkbox('checkbox2','perempuan',false);
    echo form_submit('kirim','kirim data');
    echo form_close();
?>
