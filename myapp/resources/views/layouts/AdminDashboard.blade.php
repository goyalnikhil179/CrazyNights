@php
$admindata=session()->get('AdminData')
@endphp
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="{{asset('css/Dashboard.css')}}" >
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
      integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Dashboard|Home</title>
  </head>
  <body>
    <div class="layout">
      <a class="header" href="#0">
        <i class="fa fa-bars"></i>
        <div class="header-user">
          <i class="fas fa-user-circle icon"></i>Hello {{ $admindata['AdminName']}}
        </div>
      </a>

      <div class="sidebar">
        <ul>
          <li>
            <a class="sidebar-list-item active" href="#0">
              <i class="fas fa-home icon"></i><em>Dashboard</em></a
            >
          </li>
          <li>
            <a class="sidebar-list-item" href="#0">
              <i class="fas fa-user icon"></i><em>My Profile</em></a
            >
          </li>
          <li>
            <a class="sidebar-list-item" href="{{URL::to('/myproperties')}}">
              <i class="fas fa-tasks icon"></i><em>My Products
              </em></a
            >
          </li>
          <li>
          <a class="sidebar-list-item" href="{{URL::to('/enquiry')}}">
              <i class="fas fa-comments icon"></i><em>Add Products</em></a
            >
           
          </li>
           <li>
            <a class="sidebar-list-item" href="{{URL::to('/myreviews')}}">
              <i class="fas fa-lightbulb icon"></i><em>My Customers</em></a
            >
          </li>
           <li>
            <a class="sidebar-list-item" href="{{URL::to('/addphotos')}}">
            <i class="fa-solid fa-camera"></i><em>Orders</em></a
            >
          </li>
          
          <li>
          <a class="sidebar-list-item" href="{{URL::to('/ourbookings')}}">
              <i class="fas fa-calendar icon"></i><em>Booking </em></a
            >
          </li>
        <li>
            <a class="sidebar-list-item" href="#0">
              <i class="fas fa-toolbox icon"></i><em>Billing</em></a
            >
          </li>
          <li>
            <a class="sidebar-list-item" href="{{URL::to('/')}}">
              <i class="fa-solid fa-right-from-bracket"></i><em>Log Out</em></a
            >
          </li>
        </ul>
      </div>

      <main class="content">
       @yield('Dashcontent')

      </main>
    </div>
    <script src="{{asset('js/Dashboard.js')}}"></script>
  </body>
</html>
