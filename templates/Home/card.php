<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link      https://cakephp.org CakePHP(tm) Project
 * @since     0.10.0
 * @license   https://opensource.org/licenses/mit-license.php MIT License
 * @var \App\View\AppView $this
 */
?>



<?= $this->Html->css('cards.css') ?>





<div class="container mt-5">
    <h1 class="mb-4">Clickable Cards</h1>
        
    <!-- Loader -->
    <div class="loader" id="dataLoader"></div>
    <div class="row" id="cardContainer">
        <!-- Cards will be loaded via AJAX -->
    </div>
</div>

<!-- Edit form -->
<div class="edit-form-container">
    <div class="edit-form">
        <h2 class="mb-4">Edit Card</h2>
        <form id="editForm">
            <div class="mb-3">
                <label for="editTitle" class="form-label">Title</label>
                <input type="text" class="form-control" id="editTitle" required>
            </div>
            <div class="mb-3">
                <label for="editDescription" class="form-label">Description</label>
                <textarea class="form-control" id="editDescription" rows="3" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Save Changes</button>
            <button type="button" class="btn btn-secondary ms-2" id="cancelEdit">Cancel</button>
        </form>
    </div>
</div>

<?= $this->Html->script('cards.js')?>

