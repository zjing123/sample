<form action="{{ route('statuses.store') }}" method="post">
    @include('shared._errors')
    {{ csrf_field() }}

    <textarea class="form-control" rows="3" placeholder="聊聊新鲜事儿..." name="text">{{ old('text') }}</textarea>
    <button type="submit" class="btn btn-primary pull-right">发布</button>
</form>