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

<!--begin::Root-->
<div class="d-flex flex-column flex-root" id='app'>
    <!--begin::Authentication - Multi-steps-->




                 </div>
<!--end::Root-->
<!--end::Main-->
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
                    
                          <script src="<?php echo e(asset('/js/app.js')); ?>?v=5"></script>
                    
                     
              
        
            </body>

</html><?php /**PATH C:\xampp\Workspace\cribnote_accounting\resources\views/accounts/signup.blade.php ENDPATH**/ ?>