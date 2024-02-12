<!DOCTYPE html>

<html lang="en" >
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
        <title>Cribnote Accounting | Login</title>
        <meta charset="utf-8"/>
        <meta name="description" content="
           
        "/>
        <meta name="keywords" content="
           
        "/>
        <meta name="viewport" content="width=device-width, initial-scale=1"/>      
        <meta property="og:locale" content="en_US" />
        <meta property="og:type" content="article" />
        <meta property="og:title" content="
        " />
        <meta property="og:url" content="https://keenthemes.com/metronic"/>
        <meta property="og:site_name" content="Keenthemes | Metronic" />
        <link rel="canonical" href="https://preview.keenthemes.com/metronic8"/>
       

        <!--begin::Fonts(mandatory for all pages)-->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700"/>        <!--end::Fonts-->

        
        
                    <!--begin::Global Stylesheets Bundle(mandatory for all pages)-->
                    <link href="<?php echo e(asset('assets/plugins/global/plugins.bundle.css')); ?>" rel="stylesheet" type="text/css" />
                    <link href="<?php echo e(asset('assets/css/style.bundle.css')); ?>" rel="stylesheet" type="text/css" />
                
                        <!--end::Global Stylesheets Bundle-->
        
        <script>
            // Frame-busting to prevent site from being loaded within a frame without permission (click-jacking)
            if (window.top != window.self) {
                window.top.location.replace(window.self.location.href);
            }
        </script>
    </head>
    <!--end::Head-->

    <!--begin::Body-->
    <body  id="kt_body"  class="auth-bg" >
        <!--begin::Theme mode setup on page load-->
<script>
	var defaultThemeMode = "light";
	var themeMode;

	if ( document.documentElement ) {
		if ( document.documentElement.hasAttribute("data-bs-theme-mode")) {
			themeMode = document.documentElement.getAttribute("data-bs-theme-mode");
		} else {
			if ( localStorage.getItem("data-bs-theme") !== null ) {
				themeMode = localStorage.getItem("data-bs-theme");
			} else {
				themeMode = defaultThemeMode;
			}			
		}

		if (themeMode === "system") {
			themeMode = window.matchMedia("(prefers-color-scheme: dark)").matches ? "dark" : "light";
		}

		document.documentElement.setAttribute("data-bs-theme", themeMode);
	}            
</script>

	<div class="d-flex flex-column flex-root">
		
<!--begin::Authentication - Sign-in -->
<div class="d-flex flex-column flex-lg-row flex-column-fluid">
    <!--begin::Logo-->
    <a href="#" class="d-block d-lg-none mx-auto py-20">
        <img alt="Logo" src="<?php echo e(asset('assets/media/logos/default.svg')); ?>" class="theme-light-show h-25px"/>
        <img alt="Logo" src="<?php echo e(asset('assets/media/logos/default-dark.svg')); ?>" class="theme-dark-show h-25px"/>
    </a>    
    <!--end::Logo-->

    <!--begin::Aside-->
    <div class="d-flex flex-column flex-column-fluid flex-center w-lg-50 p-10">         
        <!--begin::Wrapper-->
        <div class="d-flex justify-content-between flex-column-fluid flex-column w-100 mw-450px">
            <!--begin::Header-->
            <div class="d-flex flex-stack py-2">
                <!--begin::Back link-->
                <div class="me-2">
                                 
                </div>                 
                <!--end::Back link-->   

                                    <!--begin::Sign Up link-->
                    <div class="m-0">
                        <span class="text-gray-400 fw-bold fs-5 me-2" data-kt-translate="sign-in-head-desc">
                            Not a Member yet?
                        </span>

                        <a href="/account/signup" class="link-primary fw-bold fs-5" data-kt-translate="sign-in-head-link">
                            Sign Up
                        </a>       
                    </div>
                    <!--end::Sign Up link--->      
                                
                
                
                                
                        
            </div>
            <!--end::Header-->
            
            <!--begin::Body-->           
            <div class="py-20" id="app">
               

            </div>         
            <!--end::Body-->
                
            <!--begin::Footer-->
            <div class="m-0">             
                    
            </div>
            <!--end::Footer--> 
        </div>
        <!--end::Wrapper-->    
    </div>
    <!--end::Aside-->       

    <!--begin::Body-->
    <div class="d-none d-lg-flex flex-lg-row-fluid w-50 bgi-size-cover bgi-position-y-center bgi-position-x-start bgi-no-repeat" 
        style="background-image: url(<?php echo e(asset('assets/media/auth/bg11.png')); ?>)">  
    </div>
    <!--begin::Body-->
</div>
<!--end::Authentication - Sign-in-->	</div>
	<!--end::Root-->
<!--end::Main-->

        
        <!--begin::Javascript-->
        <script>
            var hostUrl = "<?php echo e(asset('')); ?>";        </script>

                    <!--begin::Global Javascript Bundle(mandatory for all pages)-->
                    <script src="<?php echo e(asset('assets/plugins/global/plugins.bundle.js')); ?>"></script>
                    <script src="<?php echo e(asset('assets/js/scripts.bundle.js')); ?>"></script>
                        <!--end::Global Javascript Bundle-->
        
                        <script>
                            $.ajaxSetup({
                            headers: {
                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                            }
                        });
                      </script>
                    
                          <script src="<?php echo e(asset('/js/app.js')); ?>?v=10"></script>
                    
                     
              
        
            </body>

</html><?php /**PATH C:\xampp\Workspace\cribnote_accounting\resources\views/accounts/login.blade.php ENDPATH**/ ?>