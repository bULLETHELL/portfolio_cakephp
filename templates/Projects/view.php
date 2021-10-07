<h1><?= h($project->name) ?></h1>
<p><?= h($project->description) ?></p>
<?= $this->Html->link('<i class="fab fa-github fa-3x" style="margin-top: 2rem;"></i>', $project->link, ['escape' => false]); ?>