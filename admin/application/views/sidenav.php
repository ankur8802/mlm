    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar" style="background-image: linear-gradient(180deg,#061749 10%,#030b25 100%);">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= base_url()?>">
        <div class="sidebar-brand-icon rotate-n-15">
        </div>
        <div class="sidebar-brand-text mx-3"> Admin </div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" href="<?= base_url()?>">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">


      <!-- Heading -->
      <div class="sidebar-heading">
        Services
      </div>



      <!-- Nav Item - Tables -->
     <!--  <li class="nav-item">
        <a class="nav-link" href="<?= base_url('Welcomelogin/')?>">
          <i class="fas fa-fw fa-table"></i>
          <span>Payout Report</span></a>
      </li> -->

      <li class="nav-item">
        <a class="nav-link" href="<?= base_url('Welcomelogin/package')?>">
          <i class="fas fa-fw fa-table"></i>
          <span>Package</span></a>
      </li>

       <li class="nav-item">
        <a class="nav-link" href="<?= base_url('Welcomelogin/paymentrequest')?>">
          <i class="fas fa-fw fa-table"></i>
          <span>Payment</span></a>
      </li>


          <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#bvmanage" aria-expanded="true" aria-controls="bvmanage">
          <i class="fas fa-fw fa-folder"></i>
          <span>Manage B V</span>
        </a>
        <div id="bvmanage" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="<?= base_url('Welcomelogin/bvlavel')?>">BV Level</a> 
            <a class="collapse-item" href="<?= base_url('Welcomelogin/bvredeem')?>">BV Redeem Request</a> 
<!--             <a class="collapse-item" href="<?= base_url('Welcomelogin/payoutreport')?>">Payout Report</a> 
 -->          </div>
        </div>
      </li>

        <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#productsmenu" aria-expanded="true" aria-controls="productsmenu">
          <i class="fas fa-fw fa-folder"></i>
          <span>Products</span>
        </a>
        <div id="productsmenu" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="<?= base_url('Products/addproducts')?>">Add Products</a> 
            <a class="collapse-item" href="<?= base_url('Products/addcategory')?>">Add Category</a> 
          </div>
        </div>
      </li>




          <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#ordermanage" aria-expanded="true" aria-controls="ordermanage">
          <i class="fas fa-fw fa-folder"></i>
          <span>Order</span>
        </a>
        <div id="ordermanage" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="<?= base_url('Products/orderdetail')?>">Order Detail</a> 
            <a class="collapse-item" href="<?= base_url('Products/orderproductdetail')?>">Order Product Detail</a> 
          </div>
        </div>
      </li>



        <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages2" aria-expanded="true" aria-controls="collapsePages2">
          <i class="fas fa-fw fa-folder"></i>
          <span>Member Zone</span>
        </a>
        <div id="collapsePages2" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="<?= base_url('Welcomelogin/allmembers')?>">All Members</a> 
          </div>
        </div>
      </li>

         <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages3" aria-expanded="true" aria-controls="collapsePages3">
          <i class="fas fa-fw fa-folder"></i>
          <span>KYC Request</span>
        </a>
        <div id="collapsePages3" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="<?= base_url('Welcomelogin/idproofrequest')?>">Id Proof Request</a> 
            <a class="collapse-item" href="<?= base_url('Welcomelogin/pancardrequest')?>">Pan Card Request</a> 
            <a class="collapse-item" href="<?= base_url('Welcomelogin/bankdetailrequest')?>">Bank Detail Request</a> 
            <a class="collapse-item" href="<?= base_url('Welcomelogin/electricityrequest')?>">Electricity Bill Request</a> 
          </div>
        </div>
      </li>

        <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages4" aria-expanded="true" aria-controls="collapsePages4">
          <i class="fas fa-fw fa-folder"></i>
          <span> Message </span>
        </a>
        <div id="collapsePages4" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="<?= base_url('Welcomelogin/sendmsgforall')?>">Send Message All Members </a> 
            <a class="collapse-item" href="<?= base_url('Welcomelogin/sendmsgforindividual')?>">Send Message Individual</a> 
            <a class="collapse-item" href="<?= base_url('Welcomelogin/usercomplain')?>">User Complain Message</a> 
          </div>
        </div>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#managewebsite" aria-expanded="true" aria-controls="managewebsite">
          <i class="fas fa-fw fa-folder"></i>
          <span> Manage Website </span>
        </a>
        <div id="managewebsite" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="<?= base_url('Gallery/gallery')?>">Gallery </a> 
            <a class="collapse-item" href="<?= base_url('Welcomelogin/contactus')?>">Contact Us </a> 
          </div>
        </div>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->