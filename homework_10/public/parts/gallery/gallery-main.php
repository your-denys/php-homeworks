<?php if (strpos($_SERVER['REQUEST_URI'], 'admin') !== false): ?>
    <a href="gallery/create">Create</a>
<?php endif; ?>
<table>
    <tr>
        <th>
            id
        </th>
        <th>
            title
        </th>
        <th>
            image
        </th>
        <th>
            Category name
        </th>
        <th>
            Category Id
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
    <?php foreach ($data as $galeryItem): ?>
        <tr>
            <td>
                <?= $galeryItem['id'] ?>
            </td>
            <td>
                <?= $galeryItem['title'] ?>
            </td>
            <td>
                <?= $galeryItem['image'] ?>
            </td>
            <td>
                <?= $galeryItem['category_name'] ?>
            </td>
            <td>
                <?= $galeryItem['category_id'] ?>
            </td>
            <?php if (strpos($_SERVER['REQUEST_URI'], 'admin') !== false): ?>
                <td>
                    <!-- Передача данных методом GET -->
                    <a href="gallery/update?id=<?= $galeryItem['id'] ?>">Update</a>
                </td>
                <td>
                    <a href="gallery/delete?id=<?= $galeryItem['id'] ?>">Delete</a>
                </td>
            <?php endif; ?>
        </tr>
    <?php endforeach; ?>
</table>