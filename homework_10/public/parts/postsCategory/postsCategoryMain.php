<?php if (strpos($_SERVER['REQUEST_URI'], 'admin') !== false): ?>
    <a href="postcategory/create">Create</a>
<?php endif; ?>
<table>
    <tr>
        <th>
            id
        </th>
        <th>
            name
        </th>
        <th>
            image
        </th>
        <?php if (strpos($_SERVER['REQUEST_URI'], 'admin') !== false): ?>
            <th>
                Update
            </th>
            <th>
                Delete
            </th>
        <?php endif; ?>
    </tr>
    <?php foreach ($data as $postCategory): ?>
        <tr>
            <td>
                <?= $postCategory['id'] ?>
            </td>
            <td>
                <?= $postCategory['name'] ?>
            </td>
            <td>
                <?= $postCategory['image'] ?>
            </td>
            <?php if (strpos($_SERVER['REQUEST_URI'], 'admin') !== false): ?>
                <td>
                    <!-- Передача данных методом GET -->
                    <a href="postcategory/update?id=<?= $postCategory['id'] ?>">Update</a>
                </td>
                <td>
                    <a href="postcategory/delete?id=<?= $postCategory['id'] ?>">Delete</a>
                </td>
            <?php endif; ?>
        </tr>
    <?php endforeach; ?>
</table>