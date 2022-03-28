@section('path-navigation')
<a class="breadcrumb-item" href="{{ route('panel.user.plans.list') }}">Plans</a>
<span class="breadcrumb-item active">{{ $plan->name }}</span>
@endsection

@section('custom-css')
<style>
    .bg-white {
        background-color: white;
    }
</style>
@endsection

<x-app.app-layout title="Plan Details">
    <div class="container-fluid">
        <div class="row bg-white p-4">
            <div class="col-12">
                <h1>{{ $plan->name }}</h1>
                <p>{{ $plan->shortDescription }}</p>
                <label class="font-weight-bolder" style="font-size: large;">${{ $plan->price }}</label>
                <br>
                <a href="{{ route('panel.user.plans.buy', $plan->id) }}" class="btn btn-primary">Buy now</a>
                <div class="mt-5">
                    {!! $plan->longDescription !!}
                </div>
            </div>
        </div>
    </div>
</x-app.app-layout>