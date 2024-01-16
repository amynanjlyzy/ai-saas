@extends('layouts.app')

@section('page-header')
	<!-- PAGE HEADER -->
	<div class="page-header mt-5-7">
		<div class="page-leftheader">
			<h4 class="page-title mb-0">{{ __('Checkout') }}</h4>
			<ol class="breadcrumb mb-2">
				<li class="breadcrumb-item"><a href="{{ route('user.dashboard') }}"><i class="fa-solid fa-box-circle-check mr-2 fs-12"></i>{{ __('User') }}</a></li>
				<li class="breadcrumb-item active" aria-current="page"><a href="{{ route('user.plans') }}"> {{ __('Pricing Plans') }}</a></li>
				<li class="breadcrumb-item active" aria-current="page"><a href="{{url('#')}}"> {{ __('Checkout') }}</a></li>
			</ol>
		</div>
	</div>
	<!-- END PAGE HEADER -->
@endsection

@section('content')	
	<div class="row">
		<div class="col-md-6">
			<div class="card border-0 pt-2">
				<div class="card-body">			
					<div class="text-center">
						<i class="mdi mdi-approval fs-45 text-info mb-4"></i>
						<h4 class="checkout-success">{{ __('Congratulations') }}!</h4>
						<div class="text-center mb-6">
							<p class="mt-5 fs-14">{{ __('You have successfully subscribed to') }} <span class="text-info font-weight-bold">{{ $plan->plan_name }}</span> {{ __(' subscription plan') }}.</p>
						</div>						
					
						<div class="text-center pt-2 pb-4">
							<a href="{{ route('user.payments.invoice', $order_id) }}" id="invoice-button" class="btn btn-primary pl-6 pr-6 mr-2">{{ __('Get Invoice') }}</a>
							<a href="{{ route('user.dashboard') }}" id="payment-button" class="btn btn-primary pl-6 pr-6">{{ __('Start Usage') }}</a>							
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection



