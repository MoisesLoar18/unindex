@extends('layout.admin')
@section('ad_sugerencias')

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->

        <!-- Main content -->
        <section class="content">

          <div class="row">

            <div class="col-md-3">
              <!-- DIRECT CHAT DANGER -->

            </div><!-- /.col -->
          </div><!-- /.row -->

          <h2 class="page-header">Sugerencias</h2>

          

          <div class="row">
            @foreach($users as $su)
            @if(isset($su->sugerencias[0]))

            <div class="col-md-6">
              <!-- Box Comment -->
              <div class="box box-widget">
                <div class='box-header with-border'>  
                    <span class='username'>{{$su->nombre}}</span><br>
                    <span class='description'>{{$su->correo}}</span>
                  <div class='box-tools'>
                    <button class='btn btn-box-tool' data-toggle='tooltip' title='Mark as read'><i class='fa fa-circle-o'></i></button>
                    <button class='btn btn-box-tool' data-widget='collapse'><i class='fa fa-minus'></i></button>
                    <button class='btn btn-box-tool' data-widget='remove'><i class='fa fa-times'></i></button>
                  </div><!-- /.box-tools -->
                </div><!-- /.box-header -->
                <div class='box-body'>
                  <!-- post text -->
                  
                  @for($i=0;$i<100;$i++)
                  @if(isset($su->sugerencias[$i]))
                  <span>* {{$su->sugerencias[$i]['descripcion']}}</span><br>
                  @endif
                  @endfor
                </div><!-- /.box-body -->
                <div class="box-footer">

                </div><!-- /.box-footer -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          @endif
          @endforeach
          </div><!-- /.row -->

        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->s
      <!-- Add the sidebar's background. This div must be placed
           immediately after the control sidebar -->
      <div class="control-sidebar-bg"></div>

@endsection