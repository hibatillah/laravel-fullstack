<div class="aside-menu flex-column-fluid">
    <!--begin::Aside Menu-->
    <div class="hover-scroll-overlay-y my-5 my-lg-5" id="kt_aside_menu_wrapper" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-height="auto" data-kt-scroll-dependencies="#kt_aside_logo, #kt_aside_footer" data-kt-scroll-wrappers="#kt_aside_menu" data-kt-scroll-offset="0" style="height: 791px;">
        <!--begin::Menu-->
        <div class="menu menu-column menu-title-gray-800 menu-state-title-primary menu-state-icon-primary menu-state-bullet-primary menu-arrow-gray-500" id="#kt_aside_menu" data-kt-menu="true">
            <div class="menu-item">
                <div class="menu-content pb-2">
                    <span class="menu-section text-muted text-uppercase fs-8 ls-1">Dashboard</span>
                </div>
            </div>
            <div class="menu-item">
                <a class="menu-link" onClick="AJAXPost('{{ url('/artikel') }}','','kt_content_container');">
                    <span class="menu-icon">
                        <!--begin::Svg Icon | path: icons/duotune/general/gen025.svg-->
                        <span class="svg-icon svg-icon-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <rect x="2" y="2" width="9" height="9" rx="2" fill="black"></rect>
                                <rect opacity="0.3" x="13" y="2" width="9" height="9" rx="2" fill="black"></rect>
                                <rect opacity="0.3" x="13" y="13" width="9" height="9" rx="2" fill="black"></rect>
                                <rect opacity="0.3" x="2" y="13" width="9" height="9" rx="2" fill="black"></rect>
                            </svg>
                        </span>
                        <!--end::Svg Icon-->
                    </span>
                    <span class="menu-title">Artikel</span>
                </a>
            </div>
            <div class="menu-item">
                <a class="menu-link" onClick="AJAXPost('{{ url('/formulir') }}','','kt_content_container');">
                    <span class="menu-icon">
                        <!--begin::Svg Icon | path: icons/duotune/general/gen025.svg-->
                        <span class="svg-icon svg-icon-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <rect x="2" y="2" width="9" height="9" rx="2" fill="black"></rect>
                                <rect opacity="0.3" x="13" y="2" width="9" height="9" rx="2" fill="black"></rect>
                                <rect opacity="0.3" x="13" y="13" width="9" height="9" rx="2" fill="black"></rect>
                                <rect opacity="0.3" x="2" y="13" width="9" height="9" rx="2" fill="black"></rect>
                            </svg>
                        </span>
                        <!--end::Svg Icon-->
                    </span>
                    <span class="menu-title">Formulir</span>
                </a>
            </div>
            <div class="menu-item">
                <a class="menu-link" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                    <span class="menu-icon">
                        <!--begin::Svg Icon | path: icons/duotune/general/gen025.svg-->
                        <span class="svg-icon svg-icon-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <rect x="2" y="2" width="9" height="9" rx="2" fill="black"></rect>
                                <rect opacity="0.3" x="13" y="2" width="9" height="9" rx="2" fill="black"></rect>
                                <rect opacity="0.3" x="13" y="13" width="9" height="9" rx="2" fill="black"></rect>
                                <rect opacity="0.3" x="2" y="13" width="9" height="9" rx="2" fill="black"></rect>
                            </svg>
                        </span>
                        <!--end::Svg Icon-->
                    </span>
                    <span class="menu-title">{{ __('Logout') }}</span>
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </div>
        </div> 
        <!-- end::Menu -->
    </div>
    <!--end::Aside Menu-->
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
function AJAXPost(targetUrl,formId, placeholderId){
    var status=false;
    if (formId==='') formId='form_entry';
    $.ajax({
        url: targetUrl,
        type:'get',
        cache: false,
        aync: true,
        dataType:"html",
        data:$('#'+formId).serialize(),
        beforesend:function(){
            $('.animasi_loading').show()
        },
        complete:function(){
            $('.animasi_loading').hide()
        },
        success: function(data){
            $('#'+placeholderId).html(data)
            status=true;
        },
        error:function(data){
            console.log(ex.message);
            $('#'+placeholderId).html(
                "<h2>Memuat data tidak berhasil, tekan F5 untuk membuat ulang</h2>")
            }
        });
        return status;
    }
    $(document).ready(function(){
        $('a.menu-link').click(function(e){
            e.preventDefault();
            $('a.menu-link').removeClass("active");
            $(this).addClass("active");
        });
    });
    </script>