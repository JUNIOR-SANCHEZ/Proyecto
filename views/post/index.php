
<h2>Post</h2>
<?php if (isset($this->posts) && count($this->posts)): ?>
<table border="1">
    <thead>
        <tr>
            <th>Titulo</th>
            <th>Cuerpo</th>
        </tr>
    </thead>
    <tbody>
        
            <?php foreach ($this->posts as $datos): ?>
                <tr>
                    <td><?php echo $datos['titulo'] ?></td>
                    <td><?php echo $datos['cuerpo'] ?></td>
                </tr>
            <?php endforeach; ?>

        </tbody>
    </table>
<?php else: ?>
    <div>No se econtraron datos.</div>

<?php endif; ?>