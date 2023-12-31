@extends('admin.layout.layout')
@section('content')
 <!--main content start-->
    <section class="wrapper">
      <div class="row">
        <div class="col-lg-12">
          <h3 class="page-header"><i class="fa fa-files-o"></i> Form Validation</h3>
          <ol class="breadcrumb">
            <li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
            <li><i class="icon_document_alt"></i>Forms</li>
            <li><i class="fa fa-files-o"></i>Form Validation</li>
          </ol>
        </div>
      </div>
      <!-- Form validations -->
      <div class="row">
        <div class="col-lg-12">
          <section class="panel">
            <header class="panel-heading">
              Form validations
            </header>
            <div class="panel-body">
              <div class="form">
                <form class="form-validate form-horizontal" id="feedback_form" method="get" action="">
                 
                  <div class="form-group ">
                    <label for="cemail" class="control-label col-lg-2">Question<span class="required">*</span></label>
                    <div class="col-lg-10">
                      <input class="form-control " id="cemail" type="email" name="email" required />
                    </div>
                  </div>
                 
                 
                  <div class="form-group ">
                    <label for="ccomment" class="control-label col-lg-2">answer<span class="required">*</span></label>
                    <div class="col-lg-10">
                      <textarea class="form-control " id="ccomment" name="comment" required></textarea>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-lg-offset-2 col-lg-10">
                      <button class="btn btn-primary" type="submit">Save</button>
                    </div>
                  </div>
                </form>
              </div>

            </div>
          </section>
        </div>
      </div>







      
      <!-- page end-->
    </section>
  </section>
  <!--main content end-->
@endsection