<?php

$form = new Zea();

$form->init('edit');
$form->setHeading('Kelengkapan Platform Kelembagaan PEL');
$form->setEditStatus(false);
$form->setTable('pel_kelembagaan');

$form->addInput('visi_misi','file');
$form->setLabel('visi_misi','Visi, Misi, Tujuan Program dan Kegiatan (foto)');
$form->addInput('dok_sk','file');
$form->setLabel('dok_sk','Dokumentasi surat keputusan sejak awal berdiri hingga saat ini yang menjelaskan tentang struktur organisasi, pembagian tugas tenaga kerja, aturan main pelaksanaan, jangka waktu kepengurusan (foto)');

$form->form();