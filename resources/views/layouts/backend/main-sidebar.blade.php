<div class="side-menu-fixed">
    <div class="scrollbar side-menu-bg">
     <ul class="nav navbar-nav side-menu" id="sidebarnav">
       <!-- menu item Dashboard-->
       <li>
         <a href="javascript:void(0);" data-toggle="collapse" data-target="#dashboard">
           <div class="pull-left"><i class="ti-home"></i><span class="right-nav-text">Dashboard</span></div>
           <div class="pull-right"><i class="ti-plus"></i></div><div class="clearfix"></div>
         </a>
         <ul id="dashboard" class="collapse" data-parent="#sidebarnav">
           <li><i class="ti-home"></i> <a href="{{ url('admin') }}">Dashboard</a> </li>
         </ul>
       </li>
       <!-- Catigory -->

       <li>
         <a href="javascript:void(0);" data-toggle="collapse" data-target="#elements">
           <div class="pull-left"><i class="ti-palette"></i><span class="right-nav-text">Catigory</span></div>
           <div class="pull-right"><i class="ti-plus"></i></div><div class="clearfix"></div>
         </a>
         <ul id="elements" class="collapse" data-parent="#sidebarnav">
           <li><a href="{{ route('catigories.index') }}">Catigory Show</a></li>
         </ul>
       </li>


       <!-- Product -->
       <li>
         <a href="javascript:void(0);" data-toggle="collapse" data-target="#calendar-menu">
           <div class="pull-left"><i class="ti-calendar"></i><span class="right-nav-text">Products</span></div>
           <div class="pull-right"><i class="ti-plus"></i></div><div class="clearfix"></div>
         </a>
         <ul id="calendar-menu" class="collapse" data-parent="#sidebarnav">
           <li> <a href="{{ route('products.index') }}">Products Show</a> </li>
         </ul>
       </li>


       <!-- sliders -->
       <li>
         <a href="javascript:void(0);" data-toggle="collapse" data-target="#chart">
           <div class="pull-left"><i class="ti-pie-chart"></i><span class="right-nav-text">sliders</span></div>
           <div class="pull-right"><i class="ti-plus"></i></div><div class="clearfix"></div>
         </a>
         <ul id="chart" class="collapse" data-parent="#sidebarnav">
           <li> <a href="{{ route('sliders.index') }}">HomeSlider</a> </li>

         </ul>
       </li>


       <!-- orders  -->
       <li>
         <a href="javascript:void(0);" data-toggle="collapse" data-target="#Form">
           <div class="pull-left"><i class="ti-files"></i><span class="right-nav-text">orders</span></div>
           <div class="pull-right"><i class="ti-plus"></i></div><div class="clearfix"></div>
         </a>
         <ul id="Form" class="collapse" data-parent="#sidebarnav">
           <li> <a href="{{ route('orders.index') }}">orders show</a></li>
         </ul>
       </li>
       <!-- contact us -->
       <li>
         <a href="javascript:void(0);" data-toggle="collapse" data-target="#table">
           <div class="pull-left"><i class="ti-layout-tab-window"></i><span class="right-nav-text">contact-us</span></div>
           <div class="pull-right"><i class="ti-plus"></i></div><div class="clearfix"></div>
         </a>
         <ul id="table" class="collapse" data-parent="#sidebarnav">
           <li> <a href="{{ route('contact-us.index') }}">contacts Show</a> </li>

         </ul>
       </li>


       <!-- settings -->
       <li>
         <a href="javascript:void(0);" data-toggle="collapse" data-target="#custom-page">
           <div class="pull-left"><i class="ti-file"></i><span class="right-nav-text"> seetings </span></div>
           <div class="pull-right"><i class="ti-plus"></i></div><div class="clearfix"></div>
         </a>
         <ul id="custom-page" class="collapse" data-parent="#sidebarnav">
           <li> <a href="{{ route('setting.create') }}">settings</a> </li>
         </ul>
       </li>


   </ul>
 </div>
</div>
