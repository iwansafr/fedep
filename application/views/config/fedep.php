<?php

$form = new Zea();
$form->init('param');
$form->setTable('config');
$form->setParamName('fedep');

$form->addInput('fedep','text');
$form->setType('fedep','number');

$form->addInput('phone','text');
$form->setType('phone','number');

$form->addInput('email','text');
$form->setType('email','email');

$form->addInput('faximile','text');
$form->setType('faximile','number');

$form->setEnableDeleteParam(false);
$form->form();