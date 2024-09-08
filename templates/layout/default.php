<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 * @var \App\View\AppView $this
 */
$title = 'HouseLooking';
?>

<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?>: <?= $this->fetch('title') ?></title>
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- DataTables CSS -->
    <link href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css" rel="stylesheet">
    
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    
    <?= $this->Html->meta('icon', 'house-door-fill.ico') ?>
    <?= $this->Html->css(['default']) ?>

    <!-- Icons -->
    <?= $this->Html->css('https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css') ?>
    <?= $this->Html->css('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css') ?>

    <!-- DataTables CSS -->
    <?= $this->Html->css('https://cdn.datatables.net/2.1.5/css/dataTables.dataTables.css') ?>
    <?= $this->Html->css('https://cdn.datatables.net/keytable/2.12.1/css/keyTable.dataTables.css') ?>

    <!-- DataTables JS -->
    <?= $this->Html->script('https://code.jquery.com/jquery-3.7.1.js') ?>
    <?= $this->Html->script('https://cdn.datatables.net/2.1.5/js/dataTables.js') ?>
    <?= $this->Html->script('https://cdn.datatables.net/keytable/2.12.1/js/dataTables.keyTable.js') ?>
    <?= $this->Html->script('https://cdn.datatables.net/keytable/2.12.1/js/keyTable.dataTables.js') ?>



    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"><i class="fas fa-chart-line me-2"></i>HouseLooking</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#"><i class="fas fa-home me-1"></i>Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="fas fa-tachometer-alt me-1"></i>Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="fas fa-cog me-1"></i>Settings</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container mt-4">
        <?= $this->Flash->render() ?>
        <div class="row">
            <div class="col-md-12 mb-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Welcome to HouseLooking</h5>
                    </div>
                </div>
            </div>
        </div>
        <?= $this->fetch('content') ?>
    </div>

    <footer class="footer mt-auto py-3">
        <div class="footer container text-center">
            <span>HouseLooking &copy; <?= date('Y') ?> | <i class="fas fa-code"></i> with <i class="fas fa-heart"></i> by Your Team</span>
        </div>
    </footer>
    
</body>
</html>