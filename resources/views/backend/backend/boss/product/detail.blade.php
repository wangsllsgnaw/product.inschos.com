@extends('backend.layout.base')
@section('content')
    <meta name="_token" content="{{ csrf_token() }}"/>
    <div id="content-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <div class="row">
                    <div class="col-lg-12">
                        <ol class="breadcrumb">
                            <li><a href="{{ url('/backend') }}">主页</a></li>
                            <li class="active"><span>产品统计</span></li>
                        </ol>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="main-box clearfix" style="min-height: 1100px;">
                            <div class="tabs-wrapper tabs-no-header">
                                <ul class="nav nav-tabs">
                                    <li class="active"><a href="{{ url('/backend/claim/get_detail/') }}">详细信息</a></li>
                                    <li><a href="{{ url('/backend/claim/operation/') }}">操作</a></li>
                                    <li><a href="{{ url('/backend/claim/get_record/') }}" >操作记录</a></li>
                                </ul>
                                <div class="tab-content">
                                    @include('backend.layout.alert_info')
                                    <div class="tab-pane fade in active" id="tab-accounts">
                                        <h3><p>产品</p></h3>
                                        <div class="panel-group accordion" id="account">
                                            <div class="panel panel-default">
                                                <table id="user" class="table table-hover" style="clear: both">
                                                    <tbody>

                                                    <tr>
                                                        <td width="15%">产品名称</td>
                                                        <td width="65%">
                                                            {{ $product_detail->product_name }}
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td width="15%">产品分类</td>
                                                        <td width="65%">
                                                            @foreach($product_detail->product_label as $value)
                                                                {{ $value->name }},
                                                            @endforeach
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>所属公司</td>
                                                        <td>
                                                            $product_detail->company_name
                                                        </td>
                                                    </tr>
                                                    {{--@if( $detail->account_type == 1 )--}}
                                                        {{--<tr>--}}
                                                            {{--<td>开户银行</td>--}}
                                                            {{--<td>--}}
                                                                {{--{{ $detail->bank_name }}--}}
                                                            {{--</td>--}}
                                                        {{--</tr>--}}
                                                    {{--@endif--}}
                                                    {{--<tr>--}}
                                                        {{--<td>收款账号</td>--}}
                                                        {{--<td>--}}
                                                            {{--{{ $detail->account }}--}}
                                                        {{--</td>--}}
                                                    {{--</tr>--}}
                                                    {{--<tr>--}}
                                                        {{--<td>真实姓名</td>--}}
                                                        {{--<td>--}}
                                                            {{--{{ $detail->claim_claim_rule->user->real_name }}--}}
                                                        {{--</td>--}}
                                                    {{--</tr>--}}
                                                    {{--<tr>--}}
                                                        {{--<td>联系电话</td>--}}
                                                        {{--<td>--}}
                                                            {{--{{ $detail->phone }}--}}
                                                        {{--</td>--}}
                                                    {{--</tr>--}}
                                                    {{--<tr>--}}
                                                        {{--<td>身份证号</td>--}}
                                                        {{--<td>--}}
                                                            {{--{{ $detail->claim_claim_rule->user->code }}--}}
                                                        {{--</td>--}}
                                                    {{--</tr>--}}
                                                    {{--<tr>--}}
                                                        {{--<td>申请时间</td>--}}
                                                        {{--<td>--}}
                                                            {{--{{ $detail->created_at }}--}}
                                                        {{--</td>--}}
                                                    {{--</tr>--}}
                                                    {{--<tr>--}}
                                                        {{--<td>理赔状态</td>--}}
                                                        {{--<td>--}}
                                                            {{--@if( $detail->status == 0 )--}}
                                                               {{--尚未处理--}}
                                                            {{--@else--}}
                                                               {{--{{ $detail->status_name }}--}}
                                                            {{--@endif--}}
                                                        {{--</td>--}}
                                                    {{--</tr>--}}
                                                    {{--<tr>--}}
                                                        {{--<td>订单编号</td>--}}
                                                        {{--<td>--}}
                                                            {{--{{ $detail->claim_claim_rule->order->order_code }}--}}
                                                        {{--</td>--}}
                                                    {{--</tr>--}}
                                                    {{--<tr>--}}
                                                        {{--<td>产品名称</td>--}}
                                                        {{--<td>--}}
                                                            {{--{{ $detail->claim_claim_rule->order->order_code }}--}}
                                                        {{--</td>--}}
                                                    {{--</tr>--}}
                                                    {{--<tr>--}}
                                                        {{--<td>支付时间</td>--}}
                                                        {{--<td>--}}
                                                            {{--{{ $detail->claim_claim_rule->order->pay_time }}--}}
                                                        {{--</td>--}}
                                                    {{--</tr>--}}
                                                    {{--<tr>--}}
                                                        {{--<td>订单费用</td>--}}
                                                        {{--<td>--}}
                                                            {{--{{ $detail->claim_claim_rule->order->premium }}--}}
                                                        {{--</td>--}}
                                                    {{--</tr>--}}
                                                    {{--<tr>--}}
                                                        {{--<td>保障开始时间</td>--}}
                                                        {{--<td>--}}
                                                            {{--{{ $detail->claim_claim_rule->order->start_time }}--}}
                                                        {{--</td>--}}
                                                    {{--</tr>--}}
                                                    {{--<tr>--}}
                                                        {{--<td>保障结束时间</td>--}}
                                                        {{--<td>--}}
                                                            {{--{{ $detail->claim_claim_rule->order->end_time }}--}}
                                                        {{--</td>--}}
                                                    {{--</tr>--}}
                                                    </tbody>
                                                </table>
                                                </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <footer id="footer-bar" class="row">
                <p id="footer-copyright" class="col-xs-12">
                    &copy; 2014 <a href="http://www.adbee.sk/" target="_blank">Adbee digital</a>. Powered by Centaurus Theme.
                </p>
            </footer>
        </div>
    </div>


                            </div>
                        </div>
                    </div>
                    <footer id="footer-bar" class="row">
                        <p id="footer-copyright" class="col-xs-12">
                            &copy; 2014 <a href="http://www.adbee.sk/" target="_blank">Adbee digital</a>. Powered by Centaurus Theme.
                        </p>
                    </footer>
                </div>
            </div>
        </div>
    </div>
    <script src="/js/jquery-3.1.1.min.js"></script>
@stop

