<!DOCTYPE html>
<html lang="en" data-bs-theme="light">
  <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
  <!-- /Added by HTTrack -->
  <head>
    <title></title>
    <meta charset="utf-8" />
    <!--begin::Fonts(mandatory for all pages)-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" />
    <!--end::Fonts-->
    <!--begin::Vendor Stylesheets(used for this page only)-->
        <!--end::Vendor Stylesheets-->
    <!--begin::Global Stylesheets Bundle(mandatory for all pages)-->
  
    <link href="<?php echo e(asset('assets/css/style.bundle.css')); ?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo e(asset('assets/plugins/global/plugins.bundle.css')); ?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo e(asset('assets/plugins/custom/fullcalendar/fullcalendar.bundle.css')); ?>" rel="stylesheet" type="text/css" />
  


      <!-- DataTables -->
      <link href="<?php echo e(asset('vendor/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css')); ?>" rel="stylesheet" type="text/css" />
      <link href="<?php echo e(asset('vendor/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css')); ?>" rel="stylesheet" type="text/css" />



    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <style>
div.dataTables_wrapper div.dataTables_filter input {
  display: inline-block !important;
  width: auto !important;
  padding: .775rem .55rem !important;
  font-weight: 500 !important;
  color: var(--bs-gray-700) !important;
  background-color: var(--bs-body-bg) !important;
  background-clip: padding-box !important;
  border: 1px solid var(--bs-gray-300) !important;
  appearance: none !important;
  border-radius: .475rem !important;
  box-shadow: false !important;
  transition: border-color .15s ease-in-out, box-shadow .15s ease-in-out !important;
}
div.dataTables_wrapper div.dataTables_filter {
  padding: 0 !important;
}

.widget-timeline .timeline-badge.primary::after {
  background-color: #fff !important;
}
.reportrange-text {
  background: inherit !important;
  cursor: pointer;
  padding: .775rem 1rem !important;
  border: 1px solid var(--bs-gray-300) !important;
  width: 100%;
  overflow: hidden;
}

@media  screen and (min-width: 768px) {
  .daterangepicker.show-ranges.show-weeknumbers, .daterangepicker.show-ranges {
    min-width: 686px !important;
  }
}



.timel-pane{
  display: flex;
  align-items: center;
}

.accordion-bordered .accordion__header.collapsed {
  border-radius: 1.25rem;
}
.accordion-header-bg .accordion__header {
  background-color: #B8B9C1;
}
.accordion-header-bg .accordion__header {
  background-color: #F4F5F9;
}
.accordion-bordered .accordion__header {
}
.accordion__header {
  padding: .6rem 1.75rem;
  border: 1px solid #f0f1f5;
  cursor: pointer;
  position: relative;
  color: #333;
  font-weight: 500;
  border-radius: 1.25rem;
  -webkit-transition: all 0.5s;
  -ms-transition: all 0.5s;
  transition: all 0.5s;
}

.accordion__header {
  cursor: pointer;
  color: #333;
  font-weight: 500;
}
      .dataTables_filter{
        float: right;
      }
.swal2-container.swal2-center.swal2-backdrop-show {
  z-index: 99999999999999 !important;
}
    .modal .modal-dialog-aside{
      width: 840px;
      max-width:80%; height: 100%; margin:0;
      transform: translate(0); transition: transform .2s;
  }
  
  
  .modal .modal-dialog-aside .modal-content{  height: inherit; border:0; border-radius: 0;}
  .modal .modal-dialog-aside .modal-content .modal-body{ overflow-y: auto }
  .modal.fixed-left .modal-dialog-aside{ margin-left:auto;  transform: translateX(100%); }
  .modal.fixed-right .modal-dialog-aside{ margin-right:auto; transform: translateX(-100%); }
  
  .modal.show .modal-dialog-aside{ transform: translateX(0);  }

</style>


	<style>

    .pagination_centered{
      width: 100%;
    }

.pagination{
  width: 100%;
overflow: auto  !important;
padding-bottom: 0px !important;
}

.files_datatable > thead{
  background-color: #363d5f !important;
  color: white !important;
}
.nk-file-title {
  display: inline-flex;
  align-items: center;
}
.nk-file-icon {
  margin-right: 8px;
  flex-shrink: 0;
}
.nk-file-name {
  font-weight: 500;
  color: #364a63;
  position: relative;
  line-height: 1.4;
}
.nk-file-name-text {
  padding-right: 1.5rem;

}
.nk-files-view-list .nk-file-icon + .nk-file-name a.title {
  padding-left: 40px;
  margin-left: -40px;
}
.nk-files-view-list .nk-file-name-text a.title {
  padding: 1rem 0 .875rem;
    padding-left: 0px;
}
.nk-file-name-text a.title {
  color: #364a63;
}
.nk-file-name-text .title {
  transition: color .3s;
  display: inline-block;
  text-decoration: none;
  word-break: break-word;
}
.nk-file-name .asterisk {
  position: absolute;
  display: inline-flex;
  margin-left: .5rem;
  transition: .3s opacity;
  margin-top: -1px;
  top: 50%;
  transform: translateY(-50%);
}







.user-avatar-group {
  display: flex;
}
.user-avatar-group .user-avatar {
  border: 2px solid #fff;
}
.user-avatar-xs, .user-avatar.xs {
  height: 26px;
  width: 26px;
  font-size: 9px;
  font-weight: 700;
}
.user-avatar, [class^="user-avatar"]:not([class*="-group"]) {
  border-radius: 50%;
  height: 40px;
  width: 40px;
  display: flex;
  justify-content: center;
  align-items: center;
  color: #fff;
  background: #798bff;
  font-size: 14px;
  font-weight: 500;
  letter-spacing: .06em;
  flex-shrink: 0;
  position: relative;
}
.user-avatar img, [class^="user-avatar"]:not([class*="-group"]) img {
  border-radius: 50%;
}

.user-avatar-group .user-avatar.xs:not(:first-child) {
  margin-left: -0.5rem;
}
.user-avatar-group .user-avatar:not(:first-child) {
  margin-left: -20%;
}
.user-avatar-group .user-avatar {
  border: 2px solid #fff;
}
.user-avatar-xs, .user-avatar.xs {
  height: 26px;
  width: 26px;
  font-size: 9px;
  font-weight: 700;
}
.user-avatar, [class^="user-avatar"]:not([class*="-group"]) {
  border-radius: 50%;
  height: 33px;
  width: 33px;
  display: flex;
  justify-content: center;
  align-items: center;
  color: #fff;
  background: #798bff;
    background-color: rgb(121, 139, 255);
  font-size: 14px;
  font-weight: 500;
  letter-spacing: .06em;
  flex-shrink: 0;
  position: relative;
}
.accordion-primary .accordion-header {
  background: #0c1832;
  border-color: #0c1832;
  color: #fff;
  box-shadow: 0 15px 20px 0 rgba(11, 42, 151, 0.15); }
  .accordion-primary .accordion-header.collapsed {
    background: #d8e0fc;
    border-color: #d8e0fc;
    color: #211c37;
    box-shadow: none; }
    [data-theme-version="dark"] .accordion-primary .accordion-header.collapsed {
      background: rgba(11, 42, 151, 0.2);
      border-color: rgba(11, 42, 151, 0.2);
      color: #7e7e7e; }
.accordion-primary-solid .accordion-header {
  background: #0c1832;
  border-color: #0c1832;
  color: #fff;
  box-shadow: 0 -10px 20px 0 rgba(11, 42, 151, 0.15);
  border-bottom-left-radius: 0;
  border-bottom-right-radius: 0; }
  .accordion-primary-solid .accordion-header.collapsed {
    background: #d8e0fc;
    border-color: #d8e0fc;
    color: #211c37;
    box-shadow: none;
    border-bottom-left-radius: 1.25rem;
    border-bottom-right-radius: 1.25rem; }
    [data-theme-version="dark"] .accordion-primary-solid .accordion-header.collapsed {
      background: rgba(11, 42, 151, 0.2);
      border-color: rgba(11, 42, 151, 0.2);
      color: #7e7e7e; }
.accordion-primary-solid .accordion__body {
  border: 2px solid #0c1832;
  border-top: none;
  box-shadow: 0 15px 20px 0 rgba(11, 42, 151, 0.15);
  border-bottom-left-radius: 1.25rem;
  border-bottom-right-radius: 1.25rem; }
.accordion-danger .accordion-header {
  background: #F94687;
  border-color: #F94687;
  color: #fff;
  box-shadow: 0 15px 20px 0 rgba(249, 70, 135, 0.15); }
  .accordion-danger .accordion-header.collapsed {
    background: #fff3f7;
    border-color: #fff3f7;
    color: #211c37;
    box-shadow: none; }
.accordion-danger-solid .accordion-header {
  background: #F94687;
  border-color: #F94687;
  color: #fff;
  box-shadow: 0 -10px 20px 0 rgba(249, 70, 135, 0.15);
  border-bottom-left-radius: 0;
  border-bottom-right-radius: 0; }
  .accordion-danger-solid .accordion-header.collapsed {
    background: #fff3f7;
    border-color: #fff3f7;
    color: #211c37;
    box-shadow: none;
    border-bottom-left-radius: 1.25rem;
    border-bottom-right-radius: 1.25rem; }
    [data-theme-version="dark"] .accordion-danger-solid .accordion-header.collapsed {
      background: rgba(249, 70, 135, 0.15);
      border-color: rgba(249, 70, 135, 0.15);
      color: #7e7e7e; }
.accordion-danger-solid .accordion__body {
  border: 2px solid #F94687;
  border-top: none;
  box-shadow: 0 15px 20px 0 rgba(249, 70, 135, 0.15);
  border-bottom-left-radius: 1.25rem;
  border-bottom-right-radius: 1.25rem; }
.accordion-item {
  margin-bottom: 1.25rem; }
.accordion-header {
  padding: .6rem 1.75rem;
  border: 1px solid #f0f1f5;
  cursor: pointer;
  position: relative;
  color: #333;
  font-weight: 500;
  border-radius: 1.25rem;
  -webkit-transition: all 0.5s;
  -ms-transition: all 0.5s;
  transition: all 0.5s; }
  [data-theme-version="dark"] .accordion-header {
    color: #fff;
    border-color: #333a54; }
  .accordion-header--indicator {
    font-family: 'themify';
    position: absolute;
    right: 1.5625rem;
    top: 50%;
    transform: translateY(-50%); }
    [direction="rtl"] .accordion-header--indicator {
      right: auto;
      left: 1.5625rem; }
    .accordion-header--indicator.indicator_bordered {
      display: inline-block;
      width: 25px;
      text-align: center;
      height: 25px;
      border: 1px solid #f0f1f5;
      border-radius: 50%;
      line-height: 25px; }
  .accordion-header:not(.collapsed) .accordion-header--indicator::before {
    content: "\e622"; }
  .accordion-header:not(.collapsed) .accordion-header--indicator.style_two::before {
    content: "\e648"; }
  .accordion-header.collapsed .accordion-header--indicator::before {
    content: "\e61a"; }
  .accordion-header.collapsed .accordion-header--indicator.style_two::before {
    content: "\e64b"; }
.accordion__body--text {
  padding: 0.875rem 1.25rem; }
.accordion-bordered .accordion__body {
  border: 1px solid #f0f1f5;
  border-top: none;
  border-bottom-left-radius: 1.25rem;
  border-bottom-right-radius: 1.25rem; }
  [data-theme-version="dark"] .accordion-bordered .accordion__body {
    border-color: #333a54; }
.accordion-bordered .accordion-header.collapsed {
  border-radius: 1.25rem; }
.accordion-bordered .accordion-header {
  }
.accordion-no-gutter .accordion-item {
  margin-bottom: 0; }
  .accordion-no-gutter .accordion-item .accordion-header.collapsed {
    border-bottom: none; }
  .accordion-no-gutter .accordion-item:last-child .accordion-header {
    border-bottom: 1px solid #f0f1f5; }
    [data-theme-version="dark"] .accordion-no-gutter .accordion-item:last-child .accordion-header {
      border-color: #333a54; }
.accordion-no-gutter.accordion__bordered .accordion-item:not(:last-child) .accordion__body {
  border-bottom: none; }
.accordion-left-indicator .accordion-header--text {
  padding-left: 2.5rem; }
.accordion-left-indicator .accordion-header--indicator {
  right: auto;
  left: 1.5625rem; }
.accordion-with-icon .accordion-header--text {
  padding-left: 2.5rem; }
  [direction="rtl"] .accordion-with-icon .accordion-header--text {
    padding-left: 0;
    padding-right: 2.5rem; }
.accordion-with-icon .accordion-header--icon {
  position: absolute;
  right: auto;
  left: 1.5625rem;
  font-family: 'themify'; }
  [direction="rtl"] .accordion-with-icon .accordion-header--icon {
    left: auto;
    right: 1.5625rem; }
  .accordion-with-icon .accordion-header--icon::before {
    content: "\e645"; }


.accordion-header-bg.accordion-no-gutter .accordion-header {
  border-color: transparent;
  border-radius: 0; }
.accordion-header-bg.accordion-no-gutter .accordion-item:first-child .accordion-header {
  border-top-left-radius: 1.25rem;
  border-top-right-radius: 1.25rem; }
.accordion-header-bg.accordion-no-gutter .accordion-item:last-child .accordion-header {
  border-bottom-left-radius: 1.25rem;
  border-bottom-right-radius: 1.25rem; }
.accordion.accordion-no-gutter .accordion-header {
  border-radius: 0; }
.accordion.accordion-no-gutter .accordion-header.collapsed {
  border-radius: 0; }
.accordion.accordion-no-gutter .accordion__body {
  border-radius: 0; }
.accordion.accordion-no-gutter .accordion-item:first-child .accordion-header {
  border-top-left-radius: 1.25rem;
  border-top-right-radius: 1.25rem; }
.accordion.accordion-no-gutter .accordion-item:last-child .accordion-header.collapsed {
  border-bottom-left-radius: 1.25rem;
  border-bottom-right-radius: 1.25rem; }
.accordion.accordion-no-gutter .accordion-item:last-child .accordion__body {
  border-bottom-left-radius: 1.25rem;
  border-bottom-right-radius: 1.25rem; }
.accordion-solid-bg .accordion-header {
  border-color: transparent;
  background-color: #d8e0fc;
  border-bottom-left-radius: 0;
  border-bottom-right-radius: 0; }
  [data-theme-version="dark"] .accordion-solid-bg .accordion-header {
    background-color: #181f39; }
  .accordion-solid-bg .accordion-header.collapsed {
    border-radius: 1.25rem; }
.accordion-solid-bg .accordion__body {
  border-color: transparent;
  background-color: #d8e0fc;
  border-bottom-left-radius: 1.25rem;
  border-bottom-right-radius: 1.25rem; }
  [data-theme-version="dark"] .accordion-solid-bg .accordion__body {
    background-color: #181f39; }
.accordion-active-header .accordion-header:not(.collapsed) {
  background-color: #1EA7C5;
  border-color: #1EA7C5;
  color: #fff; }
.accordion-header-shadow .accordion-header {
  border: none;
  box-shadow: 0 0 0.9375rem -3px rgba(0, 0, 0, 0.3); }
.accordion-rounded-stylish .accordion-header {
  border-top-left-radius: 0.375rem;
  border-top-right-radius: 0.375rem; }
.accordion-rounded-stylish .accordion__body {
  border-bottom-left-radius: 0.375rem;
  border-bottom-right-radius: 0.375rem; }
.accordion-rounded .accordion-header {
  border-radius: 0.3125rem; }
.accordion-gradient .accordion-header {
  color: #fff;
  background-image: linear-gradient(to right, rgba(186, 1, 181, 0.85) 0%, rgba(103, 25, 255, 0.85) 100%);
  border-color: transparent;
  border-bottom-left-radius: 0;
  border-bottom-right-radius: 0; }
  .accordion-gradient .accordion-header.collapsed {
    border-bottom-left-radius: 1.25rem;
    border-bottom-right-radius: 1.25rem; }
.accordion-gradient .accordion__body {
  color: #fff;
  background-image: linear-gradient(to right, rgba(186, 1, 181, 0.85) 0%, rgba(103, 25, 255, 0.85) 100%);
  border-color: transparent; }
	</style>

    <!--end::Global Stylesheets Bundle-->
    <!--Begin::Google Tag Manager -->
    <style>

  
      table.dataTable thead th, table.dataTable thead td {
        padding: 10px 15px;
          padding-left: 15px;
        border-bottom: 1px solid #f0f1f5;
      }
      
      .wrapperr{
        width: 100%;
      background: #fff;
      border-radius: 5px;
      padding: 4px;
      box-shadow: 7px 7px 12px rgba(0,0,0,0.05);
      }
      .wrapperr header{
        color: #6990F2;
        font-size: 27px;
        font-weight: 600;
        text-align: center;
      }
      .wrapperr form{
        height: 155px;
      display: flex;
      cursor: pointer;
      margin: 0px 0;
      align-items: center;
      justify-content: center;
      flex-direction: column;
      border-radius: 5px;
      border: 2px dashed #6990F2;
      }
      form :where(i, p){
        color: #6990F2;
      }
      form i{
        font-size: 50px;
      }
      form p{
        margin-top: 15px;
        font-size: 16px;
      }
      section .roww{
        margin-bottom: 10px;
        background: #E9F0FF;
        list-style: none;
        padding: 15px 20px;
        border-radius: 5px;
        display: flex;
        align-items: center;
        justify-content: space-between;
      }
      section .roww i{
        color: #6990F2;
        font-size: 30px;
      }
      section .details span{
        font-size: 14px;
      }
      .progress-area .roww .content{
        width: 100%;
        margin-left: 15px;
      }
      .progress-area .details{
        display: flex;
        align-items: center;
        margin-bottom: 7px;
        justify-content: space-between;
      }
      .progress-area .content .progress-bar{
        height: 6px;
        width: 100%;
        margin-bottom: 4px;
        background: #fff;
        border-radius: 30px;
      }
      .content .progress-bar .progress{
        height: 100%;
        width: 0%;
        background: #6990F2;
        border-radius: inherit;
      }
      .uploaded-area{
        max-height: 232px;
        overflow-y: scroll;
      }
      .uploaded-area.onprogress{
        max-height: 150px;
      }
      .uploaded-area::-webkit-scrollbar{
        width: 0px;
      }
      .uploaded-area .roww .content{
        display: flex;
        align-items: center;
      }
      .uploaded-area .roww .details{
        display: flex;
        margin-left: 15px;
        flex-direction: column;
      }
      .uploaded-area .roww .details .size{
        color: #404040;
        font-size: 11px;
      }
      .uploaded-area i.fa-check{
        font-size: 16px;
      }
      
      .nk-block-between {
        margin-left: 10px;
        display: flex;
        justify-content: space-between;
        align-items: center;
      }
      
        
      .modal .modal-dialog-aside{
              width: 840px;
              max-width:80%; height: 100%; margin:0;
              transform: translate(0); transition: transform .2s;
          }
          
          
          .modal .modal-dialog-aside .modal-content{  height: inherit; border:0; border-radius: 0;}
          .modal .modal-dialog-aside .modal-content .modal-body{ overflow-y: auto }
          .modal.fixed-left .modal-dialog-aside{ margin-left:auto;  transform: translateX(100%); }
          .modal.fixed-right .modal-dialog-aside{ margin-right:auto; transform: translateX(-100%); }
          
          .modal.show .modal-dialog-aside{ transform: translateX(0);  }
      
      
        .folder {
        display: inline-block;
        position: relative;
        height: 10em;
        margin: 0 3em 0em 0;
        width: 7.5em;
        text-align: center;
      }
      .folder::before,
      .folder::after {
        border-radius: 0 2px 2px 0;
        content: "";
        display: block;
        height: 100%;
        padding-top: 2em;
        position: absolute;
        width: 100%;
      }
      .folder::before {
        background: #e6e9f4;
        content: attr(title);
        left: -1.2em;
        top: 1.85em;
        transform: matrix(0.7, 0.5, 0, 1, 0, 0);
        z-index: 5;
        vertical-align: middle;
      }
      .folder::after {
        background: #e6e9f4;
        z-index: 10;
      }
      .folder img {
        position: absolute;
      }
      .folder img:first-child {
        left: 0.9em;
        top: 2.1em;
        transform: matrix(0.8, 0.35, 0, 1.1, 0, 0);
        z-index: 30;
      }
      .folder img:last-child {
        left: 2em;
        top: 1.5em;
        transform: matrix(1, 0.2, 0, 1.1, 0, 0);
        z-index: 20;
      }
      
      
      .gallery {
        display: flex;
      flex-flow: row wrap;
      height: 100%;
      margin: 0 auto;
      align-items: flex-start;
      justify-content: space-between;
      
      }
      .thumbnail {
        display: flex;
      height: 12vh;
      cursor: pointer;
      flex-basis: 18%;
      align-content: center;
      flex-flow: column nowrap;
      
      font-weight: 300;
      font-size: 1em;
      transition: background 500ms linear;
      }
      .thumbnail .title {
       
        padding: 5px 0 0px 0;
      }
      .folder {
        position: relative;
      height: 100%;
      width: 55%;
      margin-top: auto;
      background: #d4daf2;
      border-radius: 0 4px 0 0;
      }
      .folder,
      .folder:before {
        transition: background 150ms cubic-bezier(0.445, 0.05, 0.55, 0.95) 150ms;
      }
      .folder:after,
      .folder:before {
        content: '';
        display: block;
        width: 100%;
        height: 100%;
      }
      .folder:after {
        transform: scaleY(1) skewX(-2deg);
        border-radius: 4px 4px 0 0;
        transform-origin: bottom left;
        background: #d4daf2;
        transition: all 150ms cubic-bezier(0.445, 0.05, 0.55, 0.95) 150ms;
      }
      .folder:before {
        position: absolute;
        top: 0;
        left: 0;
        transform: translateY(-50%);
        height: 10px;
        width: 30%;
        background: #d4daf2;
        border-radius: 2px 6px 0 0;
      }
      .folder .file {
        transform: scale(0.93, 0.94) skewX(-2deg) translate(-2px, 0);
      }
      .folder .file,
      .folder .file:after,
      .folder .file:before {
        position: absolute;
        bottom: 0;
        left: 0;
        display: block;
        width: 100%;
        height: 100%;
        background: #fff;
        box-shadow: -1px -1px 1px rgba(255,58,22,0.3);
      }
      .folder .file:before {
        content: '';
        transform: scale(1, 0.95) skewX(-3deg) translate(1px, 0);
        transition: all 250ms cubic-bezier(0.77, 0, 0.175, 1) 250ms;
      }
      .folder .file:after {
        content: '';
        transform: scale(1, 0.88) skewX(-4deg) translate(3px, 0);
      }
      .thumbnail:hover {
      
      }
      .thumbnail:hover .folder,
      .thumbnail:hover .folder:before {
        background: #d4daf2;
      }
      .thumbnail:hover .folder:after {
        transform: scaleY(0.9) skewX(-6deg);
        background: #d4daf2;
      }
      .thumbnail:hover .folder .file:before {
        transform: scale(1, 0.95) skewX(-4deg) translate(15px, -30%) rotate(25deg);
        box-shadow: -1px 1px 1px #d4daf2;
      }
      
      
      .user-image{
        background: #a4e3f1;
      color: #1EA7C5;
      
      width: 30px;
      height: 30px;
      background: #eee;
      border-radius: 1.25rem;
      overflow: hidden;
      font-size: 20px;
      text-align: center;
      display: flex;
      align-items: center;
      justify-content: center;
      font-weight: 700;
      align-self: start;
      }
      
   
      
      
      .hide{
          display: none !important;
      }
      .dropzone {
        width: 50%;
        margin: 1%;
        border: 2px dashed #3498db !important;
        border-radius: 5px;
      }
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      .nk-file-title {
        display: flex;
        align-items: center;
      }
      .nk-file-icon {
        margin-right: 8px;
        flex-shrink: 0;
      }
      .nk-file-icon-type {
        width: 32px;
        display: inline-block;
        text-decoration: none;
        color: inherit;
        margin: auto;
      }
      .nk-file-name {
        font-weight: 500;
        color: #364a63;
        position: relative;
        line-height: 1.4;
      }
      .nk-file-name-text {
      
        display: block ruby;
        text-overflow: ellipsis;
      white-space: initial;
      overflow: hidden;
      width: 207px;
      }
      .nk-file-name-text .title {
        transition: color .3s;
        display: inline-block;
        text-decoration: none;
        word-break: break-word;
      }
      .nk-file-name-sub {
        font-size: 12px;
        color: #8094ae;
      }
      
      
      @media (min-width: 420px)
      {
        .nk-file-details-row {
        flex-wrap: nowrap;
        padding: .375rem 0;
      }
      }
      
      @media (min-width: 420px){
        .nk-file-details-col:first-child {
        width: 100px;
        flex-shrink: 0;
      }
      }
      
      .nk-file-details-col:first-child {
        color: #8094ae;
        width: 100%;
      }
      .nk-file-details-col {
        font-size: 13px;
      }
      .nk-file-details-col:last-child {
        color: #526484;
      }
      .nk-file-details-col {
        font-size: 13px;
      }
      
      
      
      
      
      
      .nk-file-share-header {
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding: 0 1.25rem;
        border-bottom: 1px solid #e5e9f2;
      }
      
      .nk-file-share-group {
        position: relative;
        padding: 1rem 0;
        flex-grow: 1;
        display: flex;
        align-items: center;
      }
      .nk-file-share-input-group {
        width: 100%;
      }
      .nk-file-share-input {
        display: flex;
      }
      .nk-file-share-input .label {
        margin: .3rem .5rem .3rem 0;
        width: 1.25rem;
        color: #8094ae;
      }
      
      
      .input-mail {
        width: 100%;
        border: none !important;
      }
      .tagify {
        display: flex;
        align-items: flex-start;
        flex-wrap: wrap;
        border: 1px solid #e5e9f2;
        padding: 3px;
        line-height: 1.1;
        cursor: text;
        outline: none;
        position: relative;
        transition: .1s;
        font-size: 14px;
      }
      
      
      @media (min-width: 992px)
      {
        .nk-fmg-body-content {
        padding: 1.75rem;
      }
      }
        @media (min-width: 576px)
      {
        .nk-fmg-body-content {
        padding-top: 1.25rem;
        padding-bottom: 1.25rem;
      }
      }
      
      .fmg-body-content {
        padding: 1.125rem 1.25rem;
        height: 100%;
        max-height: 100%;
        overflow: auto;
      }
      
      .nk-block-head-sm {
        padding-bottom: 1rem;
      }
      .nk-block-head {
        position: relative;
        padding-bottom: 1.25rem;
      }
      
      .toggle-expand-content.expanded {
        display: block;
      }
      
      .nk-files-list {
        display: flex;
        flex-wrap: wrap;
        margin: -8px;
      }
      
      .nk-files-view-grid .nk-file > div {
        display: block;
        padding: 0;
        width: 100%;
      }
      
      .nk-files-view-grid .nk-file-info > .nk-file-link {
        padding: .5rem 0;
      }
      .nk-file-info > .nk-file-link {
        padding: .75rem 0;
      }
      .nk-file-link {
        text-decoration: none;
        color: inherit;
        display: block;
      }
      
      .nk-files-view-grid .nk-file-title {
        display: flex;
        flex-direction: column;
      }
      .nk-file-title {
        display: flex;
        align-items: center;
      }
      
      .nk-files-view-grid .nk-file-icon {
        display: block;
        margin: 0;
        width: 100%;
      }
      .nk-file-icon {
        margin-right: 8px;
        flex-shrink: 0;
      }
      
      .nk-files-view-grid .nk-file-icon-type {
        width: 72px;
        padding: .5rem 0;
      }
      .nk-file-icon-type {
        width: 32px;
        display: inline-block;
        text-decoration: none;
        color: inherit;
        margin: auto;
      }
      .nk-file-name {
        font-weight: 500;
        color: #364a63;
        position: relative;
        line-height: 1.4;
      }
      
      .nk-file {
        display: flex;
        position: relative;
        margin: 8px;
        background: #fff;
        border: 1px solid #dbdfea;
        border-radius: 4px;
      }
      
      .nk-file {
        text-align: center;
      
        width: 100%;
      }
      
      
      .nk-files-view-grid .nk-file {
        text-align: center;
      }
      .nk-file-name {
        font-weight: 500;
        color: #364a63;
        line-height: 1.4;
      }
      
      .title {
        padding: .5rem .125rem .5rem;
      }
      .title {
        transition: color .3s;
        display: inline-block;
        text-decoration: none;
        word-break: break-word;
      }
      
      
      
  td{
    white-space: nowrap; /* Prevent text from wrapping */
  overflow: hidden;
  text-overflow: ellipsis;
  }

  th{
    white-space: nowrap; /* Prevent text from wrapping */
  overflow: hidden;
  text-overflow: ellipsis;
  }
      .hidden{
        display: none;
      }

      .file-view{
        width: 100%;
      }
      .sub_content{
        padding: 0px 0 0px 0;
      }

      .no-ssort{
        width: 20px !important;
      }
      .no-sort{
        width: 50px !important;
      }

      .stepper.stepper-links .stepper-nav {
            display: flex;
            margin: 0 auto;
            justify-content: center;
            align-items: center;
            flex-wrap: wrap;
     }

     .stepper.stepper-links .stepper-nav .stepper-item::after {
  content: " ";
  position: absolute;
  top: 2.3rem;
  left: 0;
  height: 2px;
  width: 100%;
  background-color: transparent;
  transition: color .2s ease;
}
      </style>
  
  </head>
  <!--end::Head-->
  <!--begin::Body-->
  <body id="kt_body" class="aside-enabled" style="height: 100vh;
  background: #12c2e9;
  background: -webkit-linear-gradient(to right, #654ff6, #71a0ed, #12c2e9);
  background: linear-gradient(to right, #744ff6, #715df2, #123ee9);">
     

    <div style="width: 80%;
   
  
     background: #fff;
     margin:0 auto;
 
     margin-top: 60px;
     margin-bottom: 60px;
     border-radius: 5px;
     box-shadow: 0px 1px 10px rgba(0, 0, 0, 0.25);"
     
     >

     <div id="app"></div>
     

  </div>



    
      <script>
        var hostUrl = "https://app.cribnote.co";
      </script>
      <!--begin::Global Javascript Bundle(mandatory for all pages)-->
      <script src="<?php echo e(asset('assets/plugins/global/plugins.bundle.js')); ?>"></script>
      <script src="<?php echo e(asset('assets/js/scripts.bundle.js')); ?>"></script>
      <!--end::Global Javascript Bundle-->
      <!--begin::Vendors Javascript(used for this page only)-->
      <script src="<?php echo e(asset('assets/plugins/custom/fullcalendar/fullcalendar.bundle.js')); ?>"></script>
      <script src="<?php echo e(asset('lib/5/index.js')); ?>"></script>
      <script src="<?php echo e(asset('lib/5/xy.js')); ?>"></script>
      <script src="<?php echo e(asset('lib/5/percent.js')); ?>"></script>
      <script src="<?php echo e(asset('lib/5/radar.js')); ?>"></script>
      <script src="<?php echo e(asset('lib/5/themes/Animated.js')); ?>"></script>
      <script src="<?php echo e(asset('lib/5/map.js')); ?>"></script>
      <script src="<?php echo e(asset('lib/5/geodata/worldLow.js')); ?>"></script>
      <script src="<?php echo e(asset('lib/5/geodata/continentsLow.js')); ?>"></script>
      <script src="<?php echo e(asset('lib/5/geodata/usaLow.js')); ?>"></script>
      <script src="<?php echo e(asset('lib/5/geodata/worldTimeZonesLow.js')); ?>"></script>
      <script src="<?php echo e(asset('lib/5/geodata/worldTimeZoneAreasLow.js')); ?>"></script>

  
      <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
      <script src="<?php echo e(asset('vendor/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js')); ?>"></script>

      <script src="<?php echo e(asset('vendor/libs/datatables.net-buttons/js/dataTables.buttons.min.js')); ?>"></script>
      <script src="<?php echo e(asset('vendor/libs/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js')); ?>"></script>
      <script src="<?php echo e(asset('vendor/libs/jszip/jszip.min.js')); ?>"></script>
      <script src="<?php echo e(asset('vendor/libs/pdfmake/build/pdfmake.min.js')); ?>"></script>
      <script src="<?php echo e(asset('vendor/libs/pdfmake/build/vfs_fonts.js')); ?>"></script>
      <script src="<?php echo e(asset('vendor/libs/datatables.net-buttons/js/buttons.html5.min.js')); ?>"></script>
      <script src="<?php echo e(asset('vendor/libs/datatables.net-buttons/js/buttons.print.min.js')); ?>"></script>
      <script src="<?php echo e(asset('vendor/libs/datatables.net-buttons/js/buttons.colVis.min.js')); ?>"></script>

      <!-- Responsive examples -->
      <script src="<?php echo e(asset('vendor/libs/datatables.net-responsive/js/dataTables.responsive.min.js')); ?>"></script>
      <script src="<?php echo e(asset('vendor/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js')); ?>"></script>

      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js" ></script>

      <script src="https://cdn.datatables.net/fixedcolumns/4.2.1/js/dataTables.fixedColumns.min.js" ></script>





      <!--end::Vendors Javascript-->
      <!--begin::Custom Javascript(used for this page only)-->
      <script src="<?php echo e(asset('assets/js/widgets.bundle.js')); ?>"></script>
      <script src="<?php echo e(asset('assets/js/custom/widgets.js')); ?>"></script>
      <script src="<?php echo e(asset('assets/js/custom/apps/chat/chat.js')); ?>"></script>
      <script src="<?php echo e(asset('assets/js/custom/utilities/modals/users-search.js')); ?>"></script>
      <!--end::Custom Javascript-->
      <!--end::Javascript--> 
      <script src="<?php echo e(asset('js/bs4-toast.js')); ?>"></script>

      <script>

</script>    
	<script>
		$.ajaxSetup({
		headers: {
			'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
		}
	});
  </script>

	  <script src="<?php echo e(asset('/js/app.js')); ?>?v=21"></script>

 
  
	
	
	</body>
  <!--end::Body-->
</html><?php /**PATH C:\xampp\Workspace\cribnote_accounting\resources\views/forms/suppliers.blade.php ENDPATH**/ ?>