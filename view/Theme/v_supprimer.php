<div id="accueil">
    <h2>Gestion application Margo 2.0</h2>
</div>
<div class="row">
    <div class="col-md-12">
        <h3>Êtes-vous sûr de vouloir supprimer le Thème 1 ?</h3>
        <form role="form" class="form-inline marge-b">
            <a href="index.php?uc=theme&action=supprimer" class="btn btn-danger">Supprimer</a>
            <a href="index.php?uc=theme&action=modifier" class="btn btn-default">Annuler</a>
        </form>
        <div class="panel panel-info">
            <div class="panel-heading">Gérer les thèmes</div>          
            <div class="panel-body">
                <div class="dataTable_wrapper">
                    <table class="table table-striped table-bordered table-hover" id="dataTables">
                        <thead>
                            <tr>                    
                                <th class="col-md-3">Thème</th>  
                                <th class="col-md-3">Mots</th>  
                                <th class="col-md-2">Durée en sec</th>
                                <th class="col-md-2">Nombre de mots</th>  
                                <th class="col-md-2">Action</th> 
                            </tr>
                        </thead>  
                        <tbody>
                            <tr>                        
                                <td>Thème 1</td>
                                <td>mot1, mot2, mot3, mot4</td>
                                <td>30</td>
                                <td>4</td>
                                <td>
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                            Gérer <span class="caret"></span>
                                        </button>
                                        <ul class="dropdown-menu" role="menu">
                                            <li><a href="index.php?uc=mot&action=ajouter">Ajouter un mot</a>
                                            </li>
                                            <li><a href="index.php?uc=mot&action=gerer">Gérer les mots</a>
                                            </li>
                                            <li><a href="index.php?uc=theme&action=modifier">Modifier le thème</a>
                                            </li>
                                            <li><a href="index.php?uc=theme&action=supprimer">Supprimer le thème</a>
                                            </li>
                                        </ul>
                                    </div>
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
