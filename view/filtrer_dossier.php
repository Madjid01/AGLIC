<div class="page-body" id="app_dos">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                    
                                            

                                                <div class="card">
                                               
                                                    <div class="card-header">
                                                    

                                                        <div class="card-header-right">
                                                            <ul class="list-unstyled card-option">
                                                                <li><i class="icofont icofont-simple-left "></i></li>
                                                                <li><i class="icofont icofont-maximize full-card"></i></li>
                                                                <li><i class="icofont icofont-minus minimize-card"></i></li>
                                                                <li><i class="icofont icofont-refresh reload-card"></i></li>
                                                                <li><i class="icofont icofont-error close-card"></i></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="input-group mb-3">
                                                     <input type="text" class="form-control" placeholder="Search" aria-label="Search" aria-describedby="button-addon2" name="search">
                                                        <button class="btn btn-outline-secondary" type="button" id="button-addon2" name="btn_search"  onclick="go('view/filtrer_dossier.php');">Search</button>
                                                        </div>
                                                    <div class="card-block table-border-style">
                                                        <div class="table-responsive">
                                                            <table class="table table-hover">
                                                                <thead>
                                                                    <tr>
                                                                        <th>id_dossier</th>
                                                                        <th>libelle dossier</th>
                                                                        <th>etat dossier</th>
                                                                        <th>date creation dossier</th>
                                                                        <th></th>
                                                                        <th></th>
                                                                        <th></th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <?php 
                                                        
                                                    
                                                      //  foreach ($list_dos as $key){

                                                        ?>

                                                                    <tr v-for="item in displayedItems" :key="item.id">


                                                                        <th scope="row">{{ item.id_dos }} </th>
                                                                        <td>{{ item.lib_dos }}</td>
                                                                        <td>{{ item.etat_dos }}</td>
                                                                        <td>{{ item.date_crea_dos }} </td>
                                                                        <td><a href="" class="m-2"> <i class="fa-solid fa-pen-to-square" style="font-size:28px;color:blue"></i></a></td>
                                                                        <td><i class="fa-solid fa-trash" style="font-size:28px;color:red" data-bs-toggle="modal" data-bs-target=""> </i></td>
                                                                        <td><button type="button" class="btn btn-primary" onclick="go('view/list_lot.php');">voir lots</button></td>
                                                                    </tr>




                                                                    <?php

                                                         //   }

                                                        ?>
                                                                </tbody>
                                                            </table>
                                                        </div>







                                                    </div>
                                                    <div class="card-block">
                                                        <nav>
                                                            <div class="d-flex justify-content-center">
                                                                <button class="btn btn-primary me-2" :disabled="currentPage === 1" @click="currentPage--">Prev</button>
                                                                <span v-if="showLeftDots" class="align-self-center me-2">...</span>
                                                                <button v-for="n in pages" class="btn btn-primary me-2" :class="{ 'active': n === currentPage }" @click="currentPage = n">{{ n }}</button>
                                                                <span v-if="showRightDots" class="align-self-center me-2">...</span>
                                                                <button class="btn btn-primary ms-2" :disabled="currentPage === totalPages" @click="currentPage++">Next</button>
                                                            </div>
                                                        </nav>
                                                        <button type="button" class="btn btn-success" onclick="go('cree_dossier.php');">ajouter</button>


                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </div>