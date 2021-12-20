<?php require '../dashboard_includes/header.php'; require '../db.php'; ?>
<?php 
$id = $_GET['id'];
$select_user = "SELECT * FROM users WHERE id = $id";
$select_user_result = mysqli_query($db_connect, $select_user);
$after_assoc = mysqli_fetch_assoc($select_user_result);
?>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="box-inn-sp">
                                <div class="inn-title">
                                    <h4>View User Details</h4>
                                </div>
                                <div class="tab-inn">
                                    <form>
                                        <div class="row">
                                            <div class="input-field col s12">
                                                <input readonly id="first_name" type="text" value="<?= $after_assoc['name'] ?>">
                                                <label for="first_name">Full Name</label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="input-field col s6">
                                                <input readonly id="password" type="text" value="<?= $after_assoc['password'] ?>">
                                                <label for="password">Password</label>
                                            </div>
                                            <div class="input-field col s6">
                                                <input readonly id="email" type="email" value="<?= $after_assoc['email'] ?>">
                                                <label for="email">Email</label>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--== BOTTOM FLOAT ICON ==-->
    <section>
        <div class="fixed-action-btn vertical">
            <a class="btn-floating btn-large red pulse">
                <i class="large material-icons">mode_edit</i>
            </a>
            <ul>
                <li><a class="btn-floating red"><i class="material-icons">insert_chart</i></a>
                </li>
                <li><a class="btn-floating yellow darken-1"><i class="material-icons">format_quote</i></a>
                </li>
                <li><a class="btn-floating green"><i class="material-icons">publish</i></a>
                </li>
                <li><a class="btn-floating blue"><i class="material-icons">attach_file</i></a>
                </li>
            </ul>
        </div>
    </section>

<?php require '../dashboard_includes/footer.php' ?>
