<?php
/*
                            _
   ____                    | |
  / __ \__      _____  _ __| | __ ____
 / / _` \ \ /\ / / _ \| '__| |/ /|_  /
| | (_| |\ V  V / (_) | |  |   <  / /
 \ \__,_| \_/\_/ \___/|_|  |_|\_\/___|
  \____/

        http://www.atworkz.de
           info@atworkz.de
_______________________________________

       Screenly OSE Monitoring
             Menu Module
_______________________________________
*/

// TRANSLATION CLASS
require_once('translation.php');
use Translation\Translation;
Translation::setLocalesDir(__DIR__ . '/../locales');

$nav_active = ' active';


if($playerCount >= 2){
  $multiMenu = '
  <li class="nav-item'.(isset($_GET['site']) && $_GET['site'] == 'multiuploader' ? $nav_active : '').'">
    <a class="nav-link" href="index.php?site=multiuploader" >
      <span class="nav-link-icon d-md-none d-lg-inline-block">
        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-md" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z"></path><path d="M4 17v2a2 2 0 0 0 2 2h12a2 2 0 0 0 2 -2v-2"></path><polyline points="7 9 12 4 17 9"></polyline><line x1="12" y1="4" x2="12" y2="16"></line></svg>
      </span>
      <span class="nav-link-title">
        '.Translation::of('multi_uploader').'
      </span>
    </a>
  </li>
  ';
} else $multiMenu = '';

echo'
<!-- Navbar -->
<header class="navbar navbar-expand-md navbar-light">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-menu">
      <span class="navbar-toggler-icon"></span>
    </button>
    <a href="." class="navbar-brand navbar-brand-autodark d-none-navbar-horizontal pr-0 pr-md-3">
      '._SYSTEM_NAME.'
    </a>
    <div class="navbar-nav flex-row order-md-last">
      <div class="nav-item dropdown d-none d-md-flex mr-3">
        <a href="'.$_SERVER['REQUEST_URI'].'" class="nav-link px-0" tabindex="-1">
          <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-md" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z"></path><path d="M4.05 11a8 8 0 1 1 .5 4m-.5 5v-5h5"></path></svg>
        </a>
      </div>
      <div class="nav-item'.(isset($_GET['site']) && $_GET['site'] == 'settings' ? $nav_active : '').' dropdown d-none d-md-flex mr-3">
        <a href="index.php?site=settings" class="nav-link px-0" tabindex="-1">
          <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-md" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z"></path><path d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 0 0 2.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 0 0 1.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 0 0 -1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 0 0 -2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 0 0 -2.573 -1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 0 0 -1.065 -2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 0 0 1.066 -2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path><circle cx="12" cy="12" r="3"></circle></svg>
          '.$update_badge.'
        </a>
      </div>
      <div class="nav-item dropdown">
        <a href="#" class="nav-link d-flex lh-1 text-reset p-0" data-toggle="dropdown">
          <span class="avatar"><svg xmlns="http://www.w3.org/2000/svg" class="icon icon-md" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z"></path><circle cx="12" cy="7" r="4"></circle><path d="M5.5 21v-2a4 4 0 0 1 4 -4h5a4 4 0 0 1 4 4v2"></path></svg></span>
          <div class="d-none d-xl-block pl-2">
            <div>'.$loginUsername.'</div>
          </div>
        </a>
        <div class="dropdown-menu dropdown-menu-right">
          <a class="dropdown-item" href="#">
            <svg xmlns="http://www.w3.org/2000/svg" class="icon dropdown-item-icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z"></path><path d="M14 8v-2a2 2 0 0 0 -2 -2h-7a2 2 0 0 0 -2 2v12a2 2 0 0 0 2 2h7a2 2 0 0 0 2 -2v-2"></path><path d="M7 12h14l-3 -3m0 6l3 -3"></path></svg>
            Logout
          </a>
        </div>
      </div>
    </div>
    <div class="collapse navbar-collapse" id="navbar-menu">
      <div class="d-flex flex-column flex-md-row flex-fill align-items-stretch align-items-md-center">
        <ul class="navbar-nav">
          <li class="nav-item'.(isset($_GET['site']) && $_GET['site'] == 'dashboard' ? $nav_active : '').'">
            <a class="nav-link" href="index.php?site=dashboard" >
              <span class="nav-link-icon d-md-none d-lg-inline-block"><svg xmlns="http://www.w3.org/2000/svg" class="icon icon-md" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z"></path><rect x="4" y="4" width="16" height="16" rx="1"></rect><line x1="4" y1="8" x2="20" y2="8"></line><line x1="8" y1="4" x2="8" y2="8"></line></svg>
              </span>
              <span class="nav-link-title">
                '.Translation::of('dashboard').'
              </span>
            </a>
          </li>
          <li class="nav-item'.(isset($_GET['site']) && $_GET['site'] == 'players' ? $nav_active : '').'">
            <a class="nav-link" href="index.php?site=players" >
              <span class="nav-link-icon d-md-none d-lg-inline-block">
                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-md" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z"></path><rect x="4" y="4" width="6" height="6" rx="1"></rect><rect x="4" y="14" width="6" height="6" rx="1"></rect><rect x="14" y="14" width="6" height="6" rx="1"></rect><line x1="14" y1="7" x2="20" y2="7"></line><line x1="17" y1="4" x2="17" y2="10"></line></svg>
              </span>
              <span class="nav-link-title">
                '.Translation::of('player').'
              </span>
            </a>
          </li>
          '.$multiMenu.'
          <li class="nav-item">
            <a class="nav-link" href="#" data-toggle="modal" data-target="#addon" >
              <span class="nav-link-icon d-md-none d-lg-inline-block">
                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-md" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z"></path><rect x="4" y="4" width="16" height="4" rx="1"></rect><rect x="4" y="12" width="6" height="8" rx="1"></rect><line x1="14" y1="12" x2="20" y2="12"></line><line x1="14" y1="16" x2="20" y2="16"></line><line x1="14" y1="20" x2="20" y2="20"></line></svg>
              </span>
              <span class="nav-link-title">
                '.Translation::of('addon').'
              </span>
            </a>
          </li>
        </ul>
        ';
        if(isset($_GET['site']) && $_GET['site'] == 'players'){
          echo'
        <div class="ml-md-auto pl-md-4 py-2 py-md-0 mr-md-4 order-first order-md-last flex-grow-1 flex-md-grow-0">
            <div class="input-icon">
              <span class="input-icon-addon">
                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                  <path stroke="none" d="M0 0h24v24H0z"/>
                  <circle cx="10" cy="10" r="7" />
                  <line x1="21" y1="21" x2="15" y2="15" />
                </svg>
              </span>
              <input type="text" id="inlineFormInputGroup" class="form-control" placeholder="'.Translation::of('search_player').'">
            </div>
        </div>';
      }
      echo'
      </div>
    </div>
  </div>
</header>
<!-- End Navbar -->




';
