    <div id="accueil">
        <h2>Gestion application Margo 2.0 - <small>Gérer les mots du Thème 1</small></h2>
    </div>
    <div class="row">
        <div class="col-md-12">
            <a href="index.php?uc=mot&action=ajouter" class="btn btn-success pull-right marge-b">
                <span class="glyphicon glyphicon-plus-sign"></span> Ajouter un mot
            </a>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-info">
                <div class="panel-heading">Gérer les mots du thème 1</div>                
                <div class="panel-body">
                    <div class="dataTable_wrapper">
                        <table class="table table-striped table-bordered table-hover" id="dataTables">
                            <thead>
                                <tr>               
                                    <th class="col-md-3">Mots</th>  
                                    <th class="col-md-2">Durée en sec</th>   
                                    <th class="col-md-2">Actions</th>  
                                </tr>
                            </thead>  
                            <tbody>
                                    <tr>                 
                                        <td>mot1</td>
                                        <td>10</td>
                                        <td>
                                            <a href="index.php?uc=mot&action=modifier" class="btn btn-default"><span class="glyphicon glyphicon-plus-sign"></span> Modifier</a>
                                            <a href="index.php?uc=mot&action=supprimer" class="btn btn-danger"><span class="glyphicon glyphicon-plus-sign"></span> Supprimer</a>
                                        </td>
                                    </tr>
                            </tbody>  
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
