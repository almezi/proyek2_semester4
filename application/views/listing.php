<?php

    $this->table->set_heading(
                              'kolom1',
                              'kolom2',
                              'kolom3',
                              'edit',
                              'hapus');
    foreach($hasil->result() as row){
        $this->table->add_row(
                              $row->kolom1,
                              $row->kolom2,
                              $row->kolom3,
                              anchor('welcome/edit/',$row->primarykey,'edit'),
                              anchor('welcome/hapus/',$row->primarykey,'hapus'),
                              );
    }
    echo $this->table->generate();
    echo "<br>";echo anchor('welcome/tambah','tambah');

?>
