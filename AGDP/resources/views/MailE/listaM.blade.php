@extends('layouts.main')

@section('main')
<div class="right_col" role="main">
   <div class="clearfix"></div>
   <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
         <div class="x_panel">
            <div class="x_title">
               <h2>Correspondencia <small>Enviada</small></h2>
               <ul class="nav navbar-right panel_toolbox">
                  <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                  </li>
                  
               </ul>
               <div class="clearfix"></div>
            </div>
            <div class="x_content">
               
               <div class="col-md-12 col-sm-12 col-xs-12">
                  
                     
                     <div class="x_content">
                        <table id="datatable-responsive" class="treetable table  table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                           <thead>
                              <tr>
                                 
                                 <th>Consecutivo </th>
                                 
                                 <th>Fecha</th>
                                 <th>Asunto</th>
                                 <th >Proyecto</th>
                                 <th >Cliente</th>

                                 <th>Opciones</th>
                              </tr>
                           </thead>
                           <tbody>
                           
                              <tr data-tt-id="2" class="branch ">
                                 
                                 <td >101011</td>
                                 <td >01/01/18</td>
                                 <td class="subject">
                                    <span class="indenter">
                                       <a href="#" title="Collapse">&nbsp;</a></span>
                                       Node 1: Click on the icon in front of me to expand this branch.
                                 </td>
                                 <td >Proyecto</td>
                                 <td >Cliente</td>
                                 <td >
                                    <div class="dropdown">
                                       <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                          <i class="fa fa-ellipsis-v"></i>
                                       </button>
                                       <div class="dropdown-menu" aria-labelledby="dropdownMenu1">
                                          <li><a href="#">Ver</a></li>
                                          <li><a href="#">Modificar</a></li>
                                       </div>
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
</div>
@endsection