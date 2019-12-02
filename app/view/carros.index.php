<div class="container">
    <table class="table table-bordered table-striped text-center">
        <thead>
            <tr>
                <th class="text-center">Modelo</th>
                <th class="text-center">Marca</th>
                <th class="text-center">Ano</th>
                <th class="text-center">Cor</th>
                <th class="text-center"><a href="/add" class="btn btn-success btn-sm"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a></th>
            </tr>
        </thead>
        <tbody>
            <?php
            if ($carros) {
                foreach ($carros as $carro) {
                    ?>
                    <tr>
                        <td><?php echo $carro->model; ?></td>
                        <td><?php echo $carro->year; ?></td>
                        <td><?php echo $carro->color; ?></td>
                        <td><?php echo $carro->brand; ?></td>
                        <td>
                            <a href="/edit/<?php echo $carro->idcar;?>" class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a>
                            <a href="/remove/<?php echo $carro->idcar; ?>" class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></a>
                        </td>
                    </tr>
                    <?php
                }
            } else {
                ?>
                <tr>
                    <td colspan="5">Nenhum registro encontrado</td>
                </tr>
                <?php
            }
            ?>
        </tbody>
    </table>
</div>