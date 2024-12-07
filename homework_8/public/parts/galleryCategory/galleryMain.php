<?php if(strpos($_SERVER['REQUEST_URI'], 'admin') !== false): ?>
    <a href="gallerycategory/create">Create</a>
<?php endif;?>
<table>
    <tr>
        <th>
            id
        </th>
        <th>
            image
        </th>
        <th>
            category name
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
    <?php foreach ($data as $category): ?>
        <tr>
            <td>
                <?= $category['id'] ?>
            </td>
            <td>
                <?= $category['image'] ?>
            </td>
            <td>
                <?= $category['name'] ?>
            </td>
            <?php if (strpos($_SERVER['REQUEST_URI'], 'admin') !== false): ?>
                <td>
                    <!-- Передача данных методом GET -->
                    <a href="gallerycategory/update?id=<?= $category['id'] ?>">Update</a>
                </td>
                <td>
                    <a href="gallerycategory/delete?id=<?= $category['id'] ?>">Delete</a>
                </td>
            <?php endif; ?>
        </tr>
    <?php endforeach; ?>
</table>