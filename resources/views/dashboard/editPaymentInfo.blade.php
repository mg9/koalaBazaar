@extends('dashboard.mainSupplier')

@section('title','Odeme Bilgisi Düzenle')
@endsection

@section('page_level_content')

    @if($errors->has())
        @foreach ($errors->all() as $error)
            <div class="alert alert-danger">
                <i class="icon-remove-sign"></i>{{ $error }}
            </div>
        @endforeach
    @endif

    @if(\Illuminate\Support\Facades\Session::has('success'))
        @foreach (\Illuminate\Support\Facades\Session::pull('success') as $success)
            <div class="alert alert-success">
                <i class="icon-remove-sign"></i>{{ $success }}
            </div>
        @endforeach
    @endif
    <div class="row">
        <div class="portlet box blue">
            <div class="portlet-title">
                <div class="caption">
                    <i class="fa fa-gift"></i>Ödeme Bilginizi Düzenleyin
                </div>
                <div class="tools">
                    <a href="javascript:;" class="collapse" data-original-title="" title="">
                    </a>
                    <a href="#portlet-config" data-toggle="modal" class="config" data-original-title="" title="">
                    </a>
                    <a href="javascript:;" class="reload" data-original-title="" title="">
                    </a>
                    <a href="javascript:;" class="remove" data-original-title="" title="">
                    </a>
                </div>
            </div>
            <div class="portlet-body form">
                <!-- BEGIN FORM-->
                <form  action="{{action('Dashboard\PaymentInfoController@update',$paymentInfo->id)}}" method="post"class="horizontal-form">
                    <div class="form-body">
                        <h3 class="form-section">Ödeme Bilgisi</h3>

                        <div class="row">
                            <div class="col-md-4 ">
                                <div class="form-group">
                                    <label>Ödeme Bilgisi Adı</label>
                                    <input type="text" class="form-control" name="title" value="{{ $paymentInfo->title }}">
                                </div>
                            </div>

                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="control-label">Detayları</label>
                                    <textarea class="form-control" rows="3" name="detail" > {{ $paymentInfo->detail }}</textarea>
                                </div>
                            </div>

                        </div>
                        <!--/row-->
                        <div class="row"></div>
                    </div>
                    <div class="form-actions right">
                        <button type="submit" class="btn blue"><i class="fa fa-check"></i> Adresi Düzenle</button>
                    </div>
                </form>
                <!-- END FORM-->
            </div>
        </div>

    </div>


    @endsection