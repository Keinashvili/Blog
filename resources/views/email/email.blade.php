<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Welcome!</div>
                <div class="card-body">
                    {{ $request->input('fullName') }}
                    {{ $request->input('email') }}
                    {{ $request->input('topic') }}
                    {{ $request->input('message') }}
                </div>
            </div>
        </div>
    </div>
</div>
