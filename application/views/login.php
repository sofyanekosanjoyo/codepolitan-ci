<?php $this->load->view('partials/header'); ?>

        <!-- Page Header-->
        <header class="masthead" style="background-image: url('<?= base_url(); ?>/assets/assets/img/home-bg.jpg')">
            <div class="container position-relative px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7">
                        <div class="site-heading">
                            <h1>Silahkan Login</h1>
                            <span class="subheading">Website diary Sofyan Eko Sanjoyo</span>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        
        <!-- Main Content-->
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-md-6 col-lg-8 col-xl-7">

                <?= $this->session->flashdata('message'); ?>

                <?= form_open(); ?>
                
                <div class="form-group">
                    <label for="username">Username</label>
                    <input class="form-control" type="text" name="username" id="username">
                </div>

                <div class="form-group">
                    <label for="password">Password</label>
                    <input class="form-control mb-2" type="password" name="password" id="password">
                </div>

                <button class="btn btn-primary" type="submit">Login</button>
                </form>

                </div>    
            </div>
        </div>

<?php $this->load->view('partials/footer'); ?>