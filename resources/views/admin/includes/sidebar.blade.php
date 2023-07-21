 <aside class="left-sidebar">
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar">
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
            <ul id="sidebarnav">

                <li>
                    <a class="waves-effect waves-dark" href="{{route('dashboard')}}" aria-expanded="false">
                        <i class="icon-speedometer"></i>
                        <span class="hide-menu">Dashboard
                        </span>
                    </a>

                </li>
                <li>
                    <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                        <i class="ti-layout-grid2"></i><span class="hide-menu">ReSeller Module</span>
                    </a>
                    <ul aria-expanded="false" class="collapse">
                        <li>
                            <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                                <span class="hide-menu">ReSeller List</span>
                            </a>
                            <ul aria-expanded="false" class="collapse">
                                @foreach ($reSellers as $reSeller)
                                    <li><a href="{{route('resellerWiseClient.list',['id'=>$reSeller->id])}}">{{$reSeller->owner_name}}</a></li>
                                @endforeach
                            </ul>
                        </li>
                        <li><a href="{{route('reselller.add')}}">Add ReSeller</a></li>
                        <li><a href="{{route('reselller.manage')}}">Manage ReSeller</a></li>
                    </ul>
                </li>
                <li>
                    <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                        <i class="ti-layout-grid2"></i><span class="hide-menu">Client Module</span>
                    </a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="{{route('client.manage')}}">Manage Client</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</aside>

