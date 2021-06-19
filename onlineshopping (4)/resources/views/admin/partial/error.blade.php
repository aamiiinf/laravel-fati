@if ($errors->any())
<div class="alert alert-danger">
    <ul style="direction: rtl;">
        <li>{{ $errors->first() }}</li>
    </ul>
</div>
@endif