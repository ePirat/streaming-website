<?php

echo $tpl->render(array(
	'page' => 'multiview',
	'title' => 'Stream-Übersicht',

	'rooms' => Room::rooms(),
	'selection' => @$_GET['selection'],
));
