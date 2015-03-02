<div id="accueil">
    <h2>Gestion application Margo 2.0 - <small>Supprimer mot1</small></h2>
</div>
<h3>Voulez vous supprimer le mot1 ?</h3>
<form class="form-inline marge-b" role="form">
    <div class="form-group">
        <a href="index.php?uc=mot&action=supprimer" class="btn btn-danger">Supprimer</a>
        <a href="index.php?uc=mot&action=gerer" class="btn btn-default">Annuler</a>
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
                                <th class="col-md-3">Durée en sec</th>  
                                <th class="col-md-3">Action</th> 
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