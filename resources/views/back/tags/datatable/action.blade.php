<div class="btn-group" role="group" aria-label="Action">
    <a class="btn btn-outline-primary" href="/back/tags/{{ $id }}">{{ __('Show') }}</a>
    <a class="btn btn-outline-primary" href="/back/tags/{{ $id }}/edit">{{ __('Edit') }}</a>
    <a class="btn btn-outline-primary" href="/back/tags/{{ $id }}"
        onclick="event.preventDefault(); if (!confirm('Are you sure?')) {return};  document.getElementById('delete-form-{{ $id }}').submit();">
        {{ __('Delete') }}
    </a>
</div>

<form id="delete-form-{{ $id }}" action="/back/tags/{{ $id }}" method="POST" style="display: none;">
    @method('delete')
    @csrf
</form>
