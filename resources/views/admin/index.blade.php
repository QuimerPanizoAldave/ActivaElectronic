@extends('layouts.admin')
@section('content')
@include('alerts.errors')
    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3>Usuarios</h3>

              
            </div>
            <div class="icon">
              <i class="ion ion-bag"></i>
            </div>
            <a href="#" class="small-box-footer">Ver Usuarios<i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3>Productos<sup style="font-size: 20px"></sup></h3>

             
            </div>
            <div class="icon">
              <i class="ion ion-stats-bars"></i>
            </div>
            <a href="#" class="small-box-footer">Ver Productos<i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3>Sliders</h3>

            
            </div>
            <div class="icon">
              <i class="ion ion-person-add"></i>
            </div>
            <a href="" class="small-box-footer">Ver Sliders <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->

      </div>
      <!-- /.row -->
      <!-- Main row -->
      <div class="row">
        <!-- Left col -->
        <section class="col-lg-7 connectedSortable" >
                 <a href="{!!URL::to('/')!!}"><img src="images" alt="" ></a>
                 
          
                  
        </section>
        <!-- /.Left col -->
        <!-- right col (We are only adding the ID to make the widgets sortable)-->
        <section class="col-lg-5 connectedSortable">


        </section>
        <!-- right col -->
      </div>
      <!-- /.row (main row) -->

    </section>
    <!-- /.content -->
@stop