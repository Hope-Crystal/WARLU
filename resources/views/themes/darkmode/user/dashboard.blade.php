@extends($theme.'layouts.user')
@section('title',trans('Dashboard'))
@section('content')


    @include($theme.'partials.banner')
    <div id="wrapper">
 
  <!--Start sidebar-wrapper-->
    <section class="privacy pt-100 pb-100 section--bg overflow-hidden content-wrapper" >
        <div class="container-fluid">
            <div class="row">

                <div class="col-md-4">
                    <div class="card-counter primary">
                        <i class="las la-wallet"></i>
                        <span
                            class="count-numbers">{{trans(config('basic.currency_symbol'))}}{{getAmount($walletBalance)}}</span>
                        <span class="count-name">{{trans('Balance')}}</span>
                    </div>
                </div>


                <!-- <div class="col-md-3">
                    <div class="card-counter success">
                        <i class="las la-money-bill"></i>
                        <span
                            class="count-numbers">{{trans(config('basic.currency_symbol'))}}{{getAmount($totalDeposit)}}</span>
                        <span class="count-name">{{trans('Total Deposit')}}</span>
                    </div>
                </div> -->

                <div class="col-md-4">
                    <div class="card-counter danger">
                        <i class="las la-hand-holding-usd"></i>
                        <span
                            class="count-numbers">{{trans(config('basic.currency_symbol'))}}{{getAmount($totalPayout)}}</span>
                        <span class="count-name">{{trans('Total Payout')}}</span>
                    </div>
                </div>

                 <div class="col-md-4">
                    <div class="card-counter info">
                        <i class="las la-spinner"></i>
                        <span
                            class="count-numbers">{{trans(config('basic.currency_symbol'))}}{{getAmount($escrow['PendingAmount'])}}</span>

                        @if(isset($escrow['Pending']) && 0 < $escrow['Pending'])
                            <span class="count-subtitle"> {{$escrow['Pending']}} {{trans('Times')}}</span>
                        @endisset
                        <span class="count-name">{{trans('Pending Escrow')}}</span>
                    </div>
                </div>

                <!-- <div class="col-md-3">
                    <div class="card-counter fluorescent">
                        <i class="las la-times-circle"></i>
                        <span
                            class="count-numbers">{{trans(config('basic.currency_symbol'))}}{{getAmount($escrow['RejectedAmount'])}}</span>

                        @if(isset($escrow['Rejected']) && 0 < $escrow['Rejected'])
                            <span class="count-subtitle">{{$escrow['Rejected']}} {{trans('Times')}}</span>
                        @endisset
                        <span class="count-name">{{trans('Rejected Escrow')}}</span>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card-counter pumkin">
                        <i class="las la-lock"></i>
                        <span
                            class="count-numbers">{{trans(config('basic.currency_symbol'))}}{{getAmount($escrow['HoldAmount'])}}</span>

                        @if(isset($escrow['PaymentHold']) && 0 < $escrow['PaymentHold'])
                            <span class="count-subtitle">{{$escrow['PaymentHold']}} {{trans('Times')}}</span>
                        @endisset
                        <span class="count-name">{{trans('Payment Hold')}}</span>
                    </div>
                </div>


                <div class="col-md-3">
                    <div class="card-counter splash">
                        <i class="las la-check-circle"></i>
                        <span
                            class="count-numbers">{{trans(config('basic.currency_symbol'))}}{{getAmount($escrow['CompleteAmount'])}}</span>

                        @if(isset($escrow['PaymentComplete']) && 0 < $escrow['PaymentComplete'])
                            <span class="count-subtitle">{{$escrow['PaymentComplete']}} {{trans('Times')}}</span>
                        @endisset
                        <span class="count-name">{{trans('Completed Escrow')}}</span>
                    </div>
                </div>


                <div class="col-md-3">
                    <div class="card-counter purple">
                        <i class="las la-hand-holding-usd"></i>
                        <span
                            class="count-numbers">{{trans(config('basic.currency_symbol'))}}{{getAmount($escrow['ReleaseAmount'])}}</span>

                        @if(isset($escrow['PaymentRelease']) && 0 < $escrow['PaymentRelease'])
                            <span class="count-subtitle">{{$escrow['PaymentRelease']}} {{trans('Times')}}</span>
                        @endisset
                        <span class="count-name">{{trans('Release Escrow')}}</span>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card-counter purple2">
                        <i class="las la-wallet"></i>
                        <span
                            class="count-numbers">{{trans(config('basic.currency_symbol'))}}{{getAmount($escrow['ReceivedAmount'])}}</span>

                        @if(isset($escrow['PaymentReceived']) && 0 < $escrow['PaymentReceived'])
                            <span class="count-subtitle">{{$escrow['PaymentReceived']}} {{trans('Times')}}</span>
                        @endisset
                        <span class="count-name">{{trans('Received Payment')}}</span>
                    </div>
                </div>


                <div class="col-md-3">
                    <div class="card-counter pink">
                        <i class="las la-people-carry"></i>
                        <span
                            class="count-numbers">{{trans(config('basic.currency_symbol'))}}{{getAmount($escrow['DisputedAmount'])}}</span>

                        @if(isset($escrow['Disputed']) && 0 < $escrow['Disputed'])
                            <span class="count-subtitle">{{$escrow['Disputed']}} {{trans('Times')}}</span>
                        @endisset
                        <span class="count-name">{{trans('Disputed Amount')}}</span>


                    </div>
                </div>


                <div class="col-md-3">
                    <div class="card-counter celestial">
                        <i class="las la-hands-helping"></i>
                        <span
                            class="count-numbers">{{trans(config('basic.currency_symbol'))}}{{getAmount($escrow['ResolvedAmount'])}}</span>
                        @if(isset($escrow['ResolvedByAdmin']) && 0 < $escrow['ResolvedByAdmin'])
                            <span class="count-subtitle">{{$escrow['ResolvedByAdmin']}} {{trans('Times')}}</span>
                        @endisset
                        <span class="count-name">{{trans('Resolved Payment')}}</span>

                    </div>
                </div>


                <div class="col-md-3">
                    <div class="card-counter liberty">
                        <i class="la la-ticket"></i>
                        <span class="count-numbers">{{$ticket}}</span>
                        <span class="count-name">{{trans('Support Ticket')}}</span>
                    </div>
                </div>  -->

            </div>
        </div>
    </section>

    <section class="privacy pt-100 pb-100 section--bg overflow-hidden content-wrapper" style="margin-top: -40px;">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="card secbg form-block p-0 br-4">
                        <div class="card-body">

                            <form action="{{ route('user.transaction.search') }}" method="get">
                                <div class="row justify-content-between">
                                    <div class="col-md-6  col-lg-3 mb-2">
                                    <div class="form-group">
                                            <input type="text" name="transaction_id"
                                                   value="{{@request()->transaction_id}}"
                                                   class="form-control"
                                                   placeholder="@lang('Search for Transaction ID')">
                                        </div>
                                    </div>

                                    <div class="col-md-6  col-lg-3 mb-2">
                                        <div class="form-group">
                                            <input type="text" name="remark" value="{{@request()->remark}}"
                                                   class="form-control"
                                                   placeholder="@lang(' Search Transactions by Remark')">
                                        </div>
                                    </div>

                                    <div class="col-md-6 col-lg-3  mb-2">
                                        <div class="form-group">
                                            <input type="date" class="form-control" name="datetrx" id="datepicker"/>
                                        </div>
                                    </div>


                                    <div class="col-md-6 col-lg-3 mb-2">
                                        <div class="form-group">
                                            <button type="submit" class="cmn-btn w-100">
                                                <i class="las la-search"></i> @lang('Search')</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row mt-5">
                <div class="col-md-12">
                    <div class="card secbg ">
                        <div class="card-body ">
                            <div class="table-responsive">
                            <table class="table table-light table-striped text-dark" id="service-table">
                                    <thead>
                                    <tr>
                                        <th>@lang('SL No.')</th>
                                        <th>@lang('Transaction ID')</th>
                                        <th>@lang('Amount')</th>
                                        <th>@lang('Charge')</th>
                                        <th>@lang('Remarks')</th>
                                        <th>@lang('Time')</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @forelse($transactions as $transaction)
                                        <tr>
                                            <td data-label="@lang('SL No.')">{{loopIndex($transactions) + $loop->index}}</td>
                                            <td data-label="@lang('Transaction ID')">@lang($transaction->trx_id)</td>
                                            <td data-label="@lang('Amount')">
                                        <span
                                            class="font-weight-bold text-{{($transaction->trx_type == "+") ? 'success': 'danger'}}"> {{getAmount($transaction->amount)}} {{trans(config('basic.currency'))}}</span>
                                            </td>

                                            <td data-label="@lang('Charge')">
                                        <span
                                            class="font-weight-bold ">{{getAmount($transaction->charge)}} {{trans(config('basic.currency_symbol'))}}</span>
                                            </td>
                                            <td data-label="@lang('Remarks')"> @lang($transaction->remarks)</td>
                                            <td data-label="@lang('Time')">
                                                {{ dateTime($transaction->created_at, 'd M Y h:i A') }}
                                            </td>
                                        </tr>
                                    @empty

                                        <tr class="text-center">
                                            <td colspan="100%">{{__('No Data Found!')}}</td>
                                        </tr>
                                    @endforelse
                                    </tbody>
                                </table>

                            </div>

                            {{ $funds->appends($_GET)->links($theme.'partials.pagination') }}


                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>


	<!--start overlay-->
    <div class="overlay toggle-menu"></div>
		<!--end overlay-->
		

    </section>



    

@endsection


@push('script')
@endpush


