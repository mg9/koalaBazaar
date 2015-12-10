@extends('dashboard.customer.mainCustomer')

@section('title','Sipariş-Ödeme Detayı')
@endsection

@section('page_level_content')
    <form id="billing-form" name="billing-form" class="nobottommargin" action="#" method="post">

        <div class="row">
            <h3 class="page-title">{{$supplier->shop_name}} ile ödeme bekleyen alışverisleriniz</h3>
        </div>

        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="portlet grey-cascade box">
                    <div class="portlet-title">
                        <div class="caption">
                            <i class="fa fa-cogs"></i>Ürünleriniz
                        </div>
                        <div class="actions">
                            <a href="javascript:;" class="btn btn-default btn-sm">
                                <i class="fa fa-pencil"></i> Edit </a>
                        </div>
                    </div>
                    <div class="portlet-body">
                        <div class="table-responsive">
                            <table class="table table-hover table-bordered table-striped">
                                <thead>
                                <tr>
                                    <th>
                                        Ürün Adı
                                    </th>
                                    <th>
                                        Ürün Açıklaması
                                    </th>
                                    <th>
                                        Ürün Resmi
                                    </th>
                                    <th>
                                        Fiyatı
                                    </th>
                                    <th>
                                        Miktarı
                                    </th>
                                    <th>
                                        Toplam Tutar
                                    </th>

                                </tr>
                                </thead>
                                <tbody>
                                @foreach($orders as $order)
                                <tr>
                                    <td>
                                        <a href="{{action('Frontend\ProductController@show',['id'=>$order->product_id])}}" target="_blank">
                                            {{$order->product->title}} </a>
                                    </td>
                                    <td>
                                        {{$order->product->description}}
                                    </td>
                                    <td>
                                        <img class="img-responsive" src="{{$order->product->image}}" style="width: 100px;" alt="">
                                    </td>
                                    <td>
                                        {{$order->product->price}}
                                    </td>
                                    <td>
                                        2
                                    </td>
                                    <td>
                                        2.00$
                                    </td>
                                </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            @foreach($paymentInfos as $paymentInfo)
            <div class="col-md-6 col-sm-12">
                <div class="portlet red-sunglo box">
                    <div class="portlet-title">
                        <div class="caption">
                            <i class="fa fa-cogs"></i>Ödeme Seçeneği
                        </div>
                        <div class="actions">
                            <label>
                                <input type="radio" name="radio1" class="icheck"></label>
                        </div>
                    </div>
                    <div class="portlet-body">
                        <div class="row static-info">
                            <div class="col-md-12 value">
                                {{$paymentInfo->title}}<br>
                               {!! $paymentInfo->detail !!}<br>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

        <div class="row">
            <div class="col-md-12 ">
                <!-- BEGIN Portlet PORTLET-->
                <div class="portlet box blue-hoki">
                    <div class="portlet-title">
                        <div class="caption">
                            <i class="fa fa-gift"></i>Notunuz
                        </div>
                    </div>
                    <textarea class="form-control" rows="9" name="note"> {{ old('note') }}</textarea>
                </div>
            </div>
        </div>

        <div class="row">
            <button type="submit" class="btn blue pull-right"><i class="fa fa-check"></i> Ödemeyi Yapın</button>
        </div>


    </form>
@endsection