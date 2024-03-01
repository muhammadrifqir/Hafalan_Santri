<?php
CREATE TABLE `data_santri`(
`id` INT NOT NULL AUTO_INCREMENT ,
`nis` INT NOT NULL ,
`nama` VARCHAR(100) NOT NULL ,
`tempat lahir` VARCHAR(100) NOT NULL ,
`tanggal lahir` date NOT NULL ,
`alamat` text NOT NULL ,
'status aktif' int(100) NOT NULL,
'hp' varchar(100) NOT NULL,
'email' varchar(100) NOT NULL,
'foto' varchar(100) NOT NULL,
'kelompok_id' int(100) NOT NULL,
PRIMARY KEY (`id`)
) ENGINE = InnoDB;