<div class="page-header navbar navbar-fixed-top">
    <div class="page-header-inner">
        <div class="page-header-inner">
            <div class="navbar-header">
                <a href="{{ url(config('quickadmin.homeRoute')) }}" class="navbar-brand">
                    {{ trans('quickadmin::admin.partials-topbar-title') }}
                </a>
            </div>
            <a href="javascript:;"
               class="menu-toggler responsive-toggler"
               data-toggle="collapse"
               data-target=".navbar-collapse">
            </a>

            <div class="top-menu">
                <ul class="nav navbar-nav pull-right">
                
                    {!! Form::open(['url' => 'logout']) !!}
                        <button type="submit" class="logout">                            
                            <i class="fa fa-sign-out fa-fw"></i>
                            <span class="title">{{ trans('quickadmin::admin.partials-sidebar-logout') }}</span>
                        </button>
                    {!! Form::close() !!}
                
                </ul>
            </div>
        </div>
    </div>
</div>