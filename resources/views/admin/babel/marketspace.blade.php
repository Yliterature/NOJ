<div class="box">

    <style>
        .extension-action a{
            cursor: pointer;
            font-size: 0.8em;
        }
        .extension-action a::after{
            content:" | ";
            display: inline;
            color: #ddd;
        }
        .extension-action a:last-of-type:after{
            display:none;
        }
        .extension-title{
            font-weight: 900;
            margin-bottom: 0;
            font-size: 1.1em;
        }
        .extension-title i{
            font-size: 0.9em;
        }
        .extension-description{
            margin-bottom:0.5em;
        }
    </style>

    <!-- /.box-header -->
    <div class="box-body no-padding">
        <table class="table table-striped table-hover">
            <tbody>
                <tr>
                    <th>Extension</th>
                    <th>Description</th>
                </tr>
                @foreach($extensionList as $extension)
                    <tr>
                        <td>
                            <p class="extension-title">@if($extension["details"]["official"])<i class="MDI marker-check wemd-light-blue-text"></i>@endif {{$extension["details"]["name"]}}</p>
                            <p class="extension-action">
                                @if($extension["status"]==0)
                                    <a>Download Extension</a>
                                @elseif($extension["status"]==1)
                                        <a>Install</a>
                                    @if($extension["updatable"])
                                        <a>Update</a>
                                    @endif
                                        <a class="text-danger">Delete</a>
                                @else
                                    @if($extension["available"])
                                        <a>Disable</a>
                                    @else
                                        <a>Enable</a>
                                    @endif
                                    @if($extension["settings"])
                                        <a>Settings</a>
                                    @endif
                                    @if($extension["updatable"])
                                        <a>Update</a>
                                    @endif
                                        <a class="text-danger">Delete</a>
                                @endif
                            </p>
                        </td>
                        <td>
                            <p class="extension-description">{{$extension["details"]["description"]}}</p>
                            <p class="wemd-grey-text">Version {{$extension["version"]}} - {{$extension["details"]["typeParsed"]}}</p>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <!-- /.box-body -->
</div>