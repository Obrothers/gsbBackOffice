    <div id="accueil">
        <h2>Gestion application Margo 2.0 - <small>Modifier le mot1</small></h2>
    </div>

    <form class="form-inline marge-b" role="form">
        <label>Modifier mot1 :</label>
        <div class="form-group">
            <div class="col-md-4">
                <input type="text" class="form-control" id="ajoutMot" value="mot1">
            </div>
        </div>
        <div class="form-group">
            <div class="col-md-4">
                <input type="text" class="form-control" id="ajoutDuree" value="10">
            </div>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-success">Valider</button>
        </div>
    </form>

    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-info">
                <div class="panel-heading clearfix">Gérer les mots du thème 1 </div>
                <div class="panel-body">
                    <div class="dataTable_wrapper">
                        <table class="table table-striped table-bordered table-hover" id="dataTables">
                            <thead>
                                <tr>               
                                    <th class="col-md-3">Mot</th>  
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