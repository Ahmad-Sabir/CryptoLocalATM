    <div class="sidebar">
        <div class="sidebar-wrapper">

    {{-- @if(\Illuminate\Support\Facades\Auth::user()->type=='Admin') --}}
            <div class="logo">
                <a href="#" class="simple-text logo-mini">{{ __('') }}</a>
                <a href="#" class="simple-text logo-normal">{{ __('CryptoATM') }}</a>
            </div>
            <ul class="nav">
                 <li @if (isset($pageSlug) && $pageSlug == 'dashboard') class="active " @endif>
                    <a href="/admin">
                        <i class="tim-icons icon-chart-pie-36"></i>
                        <p>{{ __('Dashboard') }}</p>
                    </a>
                </li> 

                        <li @if (isset($pageSlug) && $pageSlug == 'profile') class="active " @endif>
                            <a href="showclient">
                                <i class="tim-icons icon-bullet-list-67"></i>
                                <p>{{ __('User Management') }}</p>
                            </a>
                        </li>
                        <li @if (isset($pageSlug) && $pageSlug == 'wallet.index') class="active " @endif>
                            <a href="wallet.index">
                                <i class="tim-icons icon-bullet-list-67"></i>
                                <p>{{ __('Add Wallet') }}</p>
                            </a>
                        </li>
                        <li @if (isset($pageSlug) && $pageSlug == 'wallet') class="active " @endif>
                            <a href="wallet">
                                <i class="tim-icons icon-bullet-list-67"></i>
                                <p>{{ __('My Wallet') }}</p>
                            </a>
                        </li>
                <li @if (isset($pageSlug) && $pageSlug == 'code.index') class="active " @endif>
                    <a href="{{ route('code.index')  }}">
                        <i class="tim-icons icon-molecule-40"></i>
                        <p>{{ __('Codes Management') }}</p>
                    </a>
                </li>
                <li @if (isset($pageSlug) && $pageSlug == 'chat.index') class="active " @endif>
                    <a href="{{ route('chat.index') }}">
                        <i class="tim-icons icon-paper"></i>
                        <p>{{ __('Support Tickets') }}</p>
                    </a>
                </li>
                <li @if (isset($pageSlug) && $pageSlug == 'order.index') class="active " @endif>
                    <a href="{{ route('order.index') }}">
                        <i class="tim-icons icon-chart-bar-32"></i>
                        <p>{{ __('Orders') }}</p>
                    </a>
                    </li>
                    <li @if (isset($pageSlug) && $pageSlug == 'vocherhome') class="active " @endif>
                        <a href="{{ route('vocherhome') }}">
                        <i class="tim-icons icon-molecule-40"></i>
                        <p>{{ __('Vocher Management') }}</p>
                        </a>
                        </li>
                <li @if (isset($pageSlug) && $pageSlug == 'editFee') class="active " @endif>
                    <a href="{{ route('editFee') }}">
                        <i class="tim-icons icon-money-coins"></i>
                        <p>{{ __('Fees Management') }}</p>
                    </a>
                </li>
                <li @if (isset($pageSlug) && $pageSlug == 'Login.Index') class="active " @endif>
                    <a href="{{ route('login.index') }}">
                        <i class="tim-icons icon-time-alarm"></i>
                        <p>{{ __('Login History') }}</p>
                    </a>
                </li>



        </ul>
        {{-- @endif --}}

        </div>
    </div>
