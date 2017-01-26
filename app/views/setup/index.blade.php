@extends("base")
@section("title")
    <title>Wally's Widgets :: Index</title>
@stop
@section("content")
    <div class="col-lg-12">
        <form class="form-horizontal" method="post" action="/setup/new">
            <div class="form-group">
                <label for="add" class="col-sm-4 control-label">Add package</label>
                <div class="col-sm-8">
                    <input type="number" name="add" placeholder="100" class="form-control"/>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-4 col-sm-8">
                    <button type="submit" class="btn btn-default">Add</button>
                </div>
            </div>
        </form>
    </div>
    </div>
    <div class="row">
    <div class="col-lg-12">
            @foreach($current_packages as $package)
            <form class="form-horizontal" method="post" action="/setup/edit/{{ $package['id'] }}">
                <div class="form-group">
                    <label for="edit" class="col-sm-4 control-label">Edit Package {{ $package['size'] }}</label>
                    <div class="col-sm-8">
                        <input type="number" name="edit" value="{{ $package['size'] }}" class="form-control"/>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-4 col-sm-8">
                        <button type="submit" class="btn btn-default">Edit</button>
                        <a href="/setup/delete/{{ $package['id'] }}" class="btn btn-danger">Delete</a>
                    </div>
                </div>
            </form>
            @endforeach
    </div>
@stop
