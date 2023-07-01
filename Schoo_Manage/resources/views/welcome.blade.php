
@extends('template.template')

@section('main_content')
<div class="container">
    <div class="block-header">
        <div class="row clearfix">
            <div class="col-lg-5 col-md-5 col-sm-12">
                <h2>Stater Page</h2>                    
            </div>            
            <div class="col-lg-7 col-md-7 col-sm-12">
                <ul class="breadcrumb float-md-right padding-0">
                    <li class="breadcrumb-item"><a href="index.html"><i class="zmdi zmdi-home"></i></a></li>
                    <li class="breadcrumb-item"><a href="javascript:void(0);">Pages</a></li>
                    <li class="breadcrumb-item active">Stater Page</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="row clearfix">
        <div class="col-lg-12">
            <div class="card">
                <div class="header">
                    <h2><strong>Blank</strong> Page</h2>                        
                    <ul class="header-dropdown">
                        <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="zmdi zmdi-more"></i> </a>
                            <ul class="dropdown-menu dropdown-menu-right">
                                <li><a href="javascript:void(0);">Action</a></li>
                                <li><a href="javascript:void(0);">Another action</a></li>
                                <li><a href="javascript:void(0);">Something else</a></li>
                                <li><a href="javascript:void(0);" class="boxs-close">Delete</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div class="body">
                    <h4 class="margin-0">Stater page</h4>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection