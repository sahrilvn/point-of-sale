 <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?php echo site_url('administrator/berhasil')?>">Aplikasi Retail</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                <!--dropdown
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" title="Transaksi"><span class="fa fa-shopping-cart" aria-hidden="true"></span> Transaksi</a>
                        <ul class="dropdown-menu">
                            <li><a href=""><span class="fa fa-shopping-bag" aria-hidden="true"></span> Penjualan</a></li> 
                            <li><a href=""><span class="fa fa-cubes" aria-hidden="true"></span> Pembelian</a></li> 
                        </ul>
                    </li>
                    ending dropdown-->
                     <li>
                        <a href="<?php echo site_url('Pengguna/index')?>"><span class="fa fa-user"></span> Users</a>
                    </li>
                     <!-- <li>
                        <a href="<?php echo site_url('Suplier/index')?>"><span class="fa fa-truck"></span> Supplier</a>
                    </li> -->
                     <!-- <li>
                        <a href="<?php echo site_url('Costumer/index')?>"><span class="fa fa-users"></span> Costumer</a>
                    </li> -->
                     <li>
                        <a href="<?php echo site_url('administrator/logout')?>"><span class="fa fa-sign-out"></span> Logout</a>
                    </li>
                </ul>


            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>