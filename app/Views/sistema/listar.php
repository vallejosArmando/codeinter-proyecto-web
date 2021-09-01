<?= $header ?>
                    <h1 class="mt-4">Tables</h1>
                    <a href="<?= base_url('agregar');?>"class=" btn btn-primary " >Crear</a>
                 
                    <div class="card mb-4">
                        <div class="card-header">
                            <i class="fas fa-table me-1"></i> Tabla Sistema
                        </div>
                        <div class="card-body">
                            <table id="datatablesSimple">
                                <thead>
                                    <tr>
                                    <th>id</th>
                                        <th>Nombre del sistema</th>
                                        <th>Nombre del creador</th>
                                        <th>Logo</th>
                                        <th>Acciones</th>
                                    </tr>
                                </thead>
                            
                                <tbody>
                                <?php foreach($sistema as $dato): ?>
                                    <tr>
                                        <td><?= $dato['id'];  ?></td>
                                        <td><?= $dato['nombre'];  ?></td>
                                        <td><?= $dato['nombre_creador'];  ?></td>
                                        <td>
                                        <img  class="img-thumbnail" src=" <?= base_url()?>/fotos/<?= $dato['logo'];  ?> " alt="" width="60">
                                        </td>
                                        <td>
                                        <a href="<?= base_url('editar/'.$dato['id']);  ?>" class="btn btn-primary" type="button" >Editar</a>/ 
                                        <a href="<?= base_url('borrar/'.$dato['id']);  ?>" class="btn btn-danger" type="button" >Borrar</a>
                                        </td>
                                    </tr>
                                   
                              <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
<?= $footer?>