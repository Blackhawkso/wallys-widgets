@extends("base")
@section("title")
    <title>Wally's Widgets :: Index</title>
@stop
@section("content")
    <div class="col-lg-8">
        <form class="form-horizontal" method="post" action="/">
            <div class="form-group">
                <label for="required" class="col-sm-4 control-label">Required Widgets</label>
                <div class="col-sm-8">
                    <input type="number" name="required" placeholder="100" class="form-control"/>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-4 col-sm-8">
                    <button type="submit" class="btn btn-default">Calculate</button>
                </div>
            </div>
        </form>
    </div>
    <div class="col-lg-4">
        <h3>Current Packages</h3>
        <ul>
            @foreach($current_packages as $package)
                <li>{{ $package['size'] }}</li>
            @endforeach
        </ul>
    </div>

    @if (isset($required))
        <div class="row">
            <div class="col-lg-10 col-lg-offset-1">
                <h3>Result</h3>
                <h4>Required - {{ $required }}</h4>
                <table class="table table-condensed">
                    <thead>
                    <tr>
                        <th>
                            Package Size
                        </th>
                        <th>
                            Qty
                        </th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($result as $package => $qty)
                        <tr>
                            <td>{{ $package }}</td>
                            <td>{{ $qty }}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    @endif
@stop
