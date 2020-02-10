<div class="btn-group" role="group" aria-label="Action">
    <a class="btn btn-outline-primary" href="/back/users/{{ $id }}">{{ __('Show') }}</a>
    <a class="btn btn-outline-primary" href="/back/users/{{ $id }}/edit">{{ __('Edit') }}</a>
    <a class="btn btn-outline-primary" href="/back/users/{{ $id }}"
        onclick="event.preventDefault(); document.getElementById('delete-form-{{ $id }}').submit();">
        {{ __('Delete') }}
    </a>
</div>

<form id="delete-form-{{ $id }}" action="/back/users/{{ $id }}" method="POST" style="display: none;">
    @method('delete')
    @csrf
</form>
