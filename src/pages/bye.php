<?php

$name = $request->get('name', 'World') ?>

Bye <?= htmlspecialchars($name, ENT_QUOTES, 'UTF-8') ?>

