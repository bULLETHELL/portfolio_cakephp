<h1>Projects</h1>
<table>
    <tr>
        <th>Name</th>
    </tr>

    <?php foreach ($projects as $project): ?>
    <tr>
        <td>
            <?= $this->Html->link($project->name, ['action' => 'view', $project->slug]) ?>
        </td>
    </tr>
    <?php endforeach; ?>
</table>