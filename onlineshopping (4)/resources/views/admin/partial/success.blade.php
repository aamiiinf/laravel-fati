@if(null !== session('success'))
    <div class="alert alert-success">
        <span>{{ session('success') }}</span>
    </div>
    @endif