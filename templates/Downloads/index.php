<h1>Downloads</h1>
<table>
    <tr>
        <th>File</th>
    </tr>

    <?php foreach ($files as $file): ?>
    <tr>
        <td>
        <?= $this->Html->link(strtok($file, '.'), '/files/' . $file, ['download'=> $file ]) ?>
        </td>
    </tr>
    <?php endforeach; ?>
</table>