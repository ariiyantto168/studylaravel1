<section class="content-header">
        <h1>Items</h1>
        <ol class="breadcrumb">
          <li><a href="{{url('/home')}}"><i class="fa fa-dashboard"></i> Home</a></li>
          <li class="active"><i class="fa fa-inbox"></i> Items</li>
        </ol>
</section>

<section class="content">

    {{-- default box --}}
    <div class="box">
        <div class="box-header with-border">
            <h3 class="box-title">Index</h3>
            <div class="box-tools pull-right">
                <a href="{{url('items/create-new')}}" class="btn btn-box-tool" title="Create New"><i class="fa fa-plus"></i>Create New</a>
            </div>
        </div>
        <div class="box-body table-responsive">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                </thead>
            </table>

        </div>
        <div>
            
    </div>
</section>