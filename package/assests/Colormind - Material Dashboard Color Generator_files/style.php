@charset "UTF-8";
/*!
 =========================================================
 * Material Dashboard - v1.1.1
 =========================================================
 * Product Page: http://www.creative-tim.com/product/material-dashboard
 * Copyright 2017 Creative Tim (http://www.creative-tim.com)
 * Licensed under MIT (https://github.com/creativetimofficial/material-dashboard/blob/master/LICENSE.md)
 =========================================================
 * The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
 */
/* ANIMATION */
/* SHADOWS */
/* Shadows (from mdl http://www.getmdl.io/) */

.noUi-target, .noUi-target * {
  -webkit-touch-callout: none;
  -ms-touch-action: none;
  user-select: none;
  box-sizing: border-box; }

.noUi-base {
  width: 100%;
  height: 100%;
  position: relative; }

.noUi-origin {
  position: absolute;
  right: 0;
  top: 0;
  left: 0;
  bottom: 0; }

.noUi-handle {
  position: relative;
  z-index: 1;
  box-sizing: border-box; }

.noUi-stacking .noUi-handle {
  z-index: 10; }

.noUi-state-tap .noUi-origin {
  transition: left 0.3s, top 0.3s; }

.noUi-state-drag * {
  cursor: inherit !important; }

.noUi-horizontal {
  height: 10px; }

.noUi-handle {
  box-sizing: border-box;
  width: 14px;
  height: 14px;
  left: -10px;
  top: -6px;
  cursor: pointer;
  border-radius: 100%;
  transition: all 0.2s ease-out;
  border: 1px solid;
  background: #fff;
  box-shadow: 0 2px 2px 0 rgba(0, 0, 0, 0.14), 0 3px 1px -2px rgba(0, 0, 0, 0.2), 0 1px 5px 0 rgba(0, 0, 0, 0.12); }

.noUi-vertical .noUi-handle {
  margin-left: 5px;
  cursor: ns-resize; }

.noUi-horizontal.noUi-extended {
  padding: 0 15px; }

.noUi-horizontal.noUi-extended .noUi-origin {
  right: -15px; }

.noUi-background {
  height: 2px;
  margin: 20px 0; }

.noUi-origin {
  margin: 0;
  border-radius: 0;
  height: 2px;
  background: #c8c8c8; }
  .noUi-origin[style^="left: 0"] .noUi-handle {
    background-color: #fff;
    border: 2px solid #c8c8c8; }
    .noUi-origin[style^="left: 0"] .noUi-handle.noUi-active {
      border-width: 1px; }

.noUi-target {
  border-radius: 3px; }

.noUi-horizontal {
  height: 2px;
  margin: 15px 0; }

.noUi-vertical {
  height: 100%;
  width: 2px;
  margin: 0 15px;
  display: inline-block; }

.noUi-handle.noUi-active {
  transform: scale3d(2, 2, 1); }

[disabled].noUi-slider {
  opacity: 0.5; }

[disabled] .noUi-handle {
  cursor: not-allowed; }

.slider {
  background: #c8c8c8; }

.slider.noUi-connect {
  background-color: #90b6d6; }
  .slider .noUi-handle {
    border-color: #90b6d6; }
  .slider.slider-info .noUi-connect, .slider.slider-info.noUi-connect {
    background-color: #c5a2b3; }
    .slider.slider-info .noUi-handle {
      border-color: #c5a2b3; }
  .slider.slider-success .noUi-connect, .slider.slider-success.noUi-connect {
    background-color: #60b178; }
    .slider.slider-success .noUi-handle {
      border-color: #60b178; }
  .slider.slider-warning .noUi-connect, .slider.slider-warning.noUi-connect {
    background-color: #dea140; }
    .slider.slider-warning .noUi-handle {
      border-color: #dea140; }
  .slider.slider-danger .noUi-connect, .slider.slider-danger.noUi-connect {
    background-color: #f44336; }
    .slider.slider-danger .noUi-handle {
      border-color: #f44336; }
/*!
 Animate.css - http://daneden.me/animate
 Licensed under the MIT license - http://opensource.org/licenses/MIT
 Copyright (c) 2015 Daniel Eden
 */
.animated {
  -webkit-animation-duration: 1s;
  animation-duration: 1s;
  -webkit-animation-fill-mode: both;
  animation-fill-mode: both; }

.animated.infinite {
  -webkit-animation-iteration-count: infinite;
  animation-iteration-count: infinite; }

.animated.hinge {
  -webkit-animation-duration: 2s;
  animation-duration: 2s; }

.animated.bounceIn, .animated.bounceOut {
  -webkit-animation-duration: 0.75s;
  animation-duration: 0.75s; }

.animated.flipOutX, .animated.flipOutY {
  -webkit-animation-duration: 0.75s;
  animation-duration: 0.75s; }

@-webkit-keyframes shake {
  from, to {
    -webkit-transform: translate3d(0, 0, 0);
    transform: translate3d(0, 0, 0); }

  10%, 30%, 50%, 70%, 90% {
    -webkit-transform: translate3d(-10px, 0, 0);
    transform: translate3d(-10px, 0, 0); }

  20%, 40%, 60%, 80% {
    -webkit-transform: translate3d(10px, 0, 0);
    transform: translate3d(10px, 0, 0); } }

@keyframes shake {
  from, to {
    -webkit-transform: translate3d(0, 0, 0);
    transform: translate3d(0, 0, 0); }

  10%, 30%, 50%, 70%, 90% {
    -webkit-transform: translate3d(-10px, 0, 0);
    transform: translate3d(-10px, 0, 0); }

  20%, 40%, 60%, 80% {
    -webkit-transform: translate3d(10px, 0, 0);
    transform: translate3d(10px, 0, 0); } }

.shake {
  -webkit-animation-name: shake;
  animation-name: shake; }

@-webkit-keyframes fadeInDown {
  from {
    opacity: 0;
    -webkit-transform: translate3d(0, -100%, 0);
    transform: translate3d(0, -100%, 0); }

  to {
    opacity: 1;
    -webkit-transform: none;
    transform: none; } }

@keyframes fadeInDown {
  from {
    opacity: 0;
    -webkit-transform: translate3d(0, -100%, 0);
    transform: translate3d(0, -100%, 0); }

  to {
    opacity: 1;
    -webkit-transform: none;
    transform: none; } }

.fadeInDown {
  -webkit-animation-name: fadeInDown;
  animation-name: fadeInDown; }

@-webkit-keyframes fadeOut {
  from {
    opacity: 1; }

  to {
    opacity: 0; } }

@keyframes fadeOut {
  from {
    opacity: 1; }

  to {
    opacity: 0; } }

.fadeOut {
  -webkit-animation-name: fadeOut;
  animation-name: fadeOut; }

@-webkit-keyframes fadeOutDown {
  from {
    opacity: 1; }

  to {
    opacity: 0;
    -webkit-transform: translate3d(0, 100%, 0);
    transform: translate3d(0, 100%, 0); } }

@keyframes fadeOutDown {
  from {
    opacity: 1; }

  to {
    opacity: 0;
    -webkit-transform: translate3d(0, 100%, 0);
    transform: translate3d(0, 100%, 0); } }

.fadeOutDown {
  -webkit-animation-name: fadeOutDown;
  animation-name: fadeOutDown; }

@-webkit-keyframes fadeOutUp {
  from {
    opacity: 1; }

  to {
    opacity: 0;
    -webkit-transform: translate3d(0, -100%, 0);
    transform: translate3d(0, -100%, 0); } }

@keyframes fadeOutUp {
  from {
    opacity: 1; }

  to {
    opacity: 0;
    -webkit-transform: translate3d(0, -100%, 0);
    transform: translate3d(0, -100%, 0); } }

.fadeOutUp {
  -webkit-animation-name: fadeOutUp;
  animation-name: fadeOutUp; }

h1, .h1 {
  font-size: 3.8em;
  line-height: 1.15em; }

h2, .h2 {
  font-size: 2.6em; }

h3, .h3 {
  font-size: 1.825em;
  line-height: 1.4em;
  margin: 20px 0 10px; }

h4, .h4 {
  font-size: 1.3em;
  line-height: 1.4em; }

h5, .h5 {
  font-size: 1.25em;
  line-height: 1.4em;
  margin-bottom: 15px; }

h6, .h6 {
  font-size: 1em;
  text-transform: uppercase;
  font-weight: 500; }
/*.title,
 .card-title,
 .info-title,
 .footer-brand,
 .footer-big h5,
 .footer-big h4,
 .media .media-heading{
 font-weight: $font-weight-extra-bold;
 font-family: $font-family-serif;
 &,
 a{
 color: $black-color;
 text-decoration: none;
 }
 }*/
h2.title {
  margin-bottom: 30px; }

.description, .card-description, .footer-big p {
  color: #a79e99; }

.text-warning {
  color: #dea140; }

.text-primary {
  color: #90b6d6; }

.text-danger {
  color: #f44336; }

.text-success {
  color: #60b178; }

.text-info {
  color: #c5a2b3; }

.text-rose {
  color: #e91e63; }

.text-gray {
  color: #999; }

.wrapper {
  position: relative;
  top: 0;
  height: 100vh; }

.sidebar, .off-canvas-sidebar {
  position: absolute;
  top: 0;
  bottom: 0;
  left: 0;
  z-index: 1;
  box-shadow: 0 10px 30px -12px rgba(0, 0, 0, 0.42), 0 4px 25px 0px rgba(0, 0, 0, 0.12), 0 8px 10px -5px rgba(0, 0, 0, 0.2); }
  .sidebar .sidebar-wrapper, .off-canvas-sidebar .sidebar-wrapper {
    position: relative;
    height: calc(100vh - 75px);
    overflow: auto;
    width: 260px;
    z-index: 4; }
  .sidebar .logo-tim, .off-canvas-sidebar .logo-tim {
    border-radius: 50%;
    border: 1px solid #333;
    display: block;
    height: 61px;
    width: 61px;
    float: left;
    overflow: hidden; }
    .sidebar .logo-tim img, .off-canvas-sidebar .logo-tim img {
      width: 60px;
      height: 60px; }
  .sidebar .nav, .off-canvas-sidebar .nav {
    margin-top: 20px; }
    .sidebar .nav li > a, .off-canvas-sidebar .nav li > a {
      margin: 10px 15px;
      border-radius: 3px;
      color: #203465; }
      .sidebar .nav li:hover > a, .off-canvas-sidebar .nav li:hover > a {
        background: rgba(200, 200, 200, 0.2);
        color: #203465; }
      .sidebar .nav li.active > a, .off-canvas-sidebar .nav li.active > a {
        color: #fff; }
        .sidebar .nav li.active > a i, .off-canvas-sidebar .nav li.active > a i {
          color: #fff; }
    .sidebar .nav p, .off-canvas-sidebar .nav p {
      margin: 0;
      line-height: 30px;
      font-size: 14px; }
    .sidebar .nav i, .off-canvas-sidebar .nav i {
      font-size: 24px;
      float: left;
      margin-right: 15px;
      line-height: 30px;
      width: 30px;
      text-align: center;
      color: #a9afbb; }
  .sidebar .sidebar-background, .off-canvas-sidebar .sidebar-background {
    position: absolute;
    z-index: 1;
    height: 100%;
    width: 100%;
    display: block;
    top: 0;
    left: 0;
    background-size: cover;
    background-position: center center; }
    .sidebar .sidebar-background:after, .off-canvas-sidebar .sidebar-background:after {
      position: absolute;
      z-index: 3;
      width: 100%;
      height: 100%;
      content: "";
      display: block;
      background: #fff;
      opacity: 0.93; }
  .sidebar .logo, .off-canvas-sidebar .logo {
    position: relative;
    padding: 15px 15px;
    z-index: 4; }
    .sidebar .logo:after, .off-canvas-sidebar .logo:after {
      content: '';
      position: absolute;
      bottom: 0;
      right: 10%;
      height: 1px;
      width: 80%;
      background-color: rgba(180, 180, 180, .3); }
    .sidebar .logo p, .off-canvas-sidebar .logo p {
      float: left;
      font-size: 20px;
      margin: 10px 10px;
      color: #fff;
      line-height: 20px;
      font-family: "Helvetica Neue", Helvetica, Arial, sans-serif; }
    .sidebar .logo .simple-text, .off-canvas-sidebar .logo .simple-text {
      text-transform: uppercase;
      padding: 5px 0px;
      display: block;
      font-size: 18px;
      color: #203465;
      text-align: center;
      font-weight: 400;
      line-height: 30px; }
  .sidebar .logo-tim, .off-canvas-sidebar .logo-tim {
    border-radius: 50%;
    border: 1px solid #333;
    display: block;
    height: 61px;
    width: 61px;
    float: left;
    overflow: hidden; }
    .sidebar .logo-tim img, .off-canvas-sidebar .logo-tim img {
      width: 60px;
      height: 60px; }
  .sidebar:after, .off-canvas-sidebar:after, .sidebar:before, .off-canvas-sidebar:before {
    display: block;
    content: "";
    position: absolute;
    width: 100%;
    height: 100%;
    top: 0;
    left: 0;
    z-index: 2; }
  .sidebar:before, .off-canvas-sidebar:before {
    opacity: 0.33; }
  .sidebar:after, .off-canvas-sidebar:after {
    z-index: 3;
    opacity: 1; }
  .sidebar[data-image]:after, .off-canvas-sidebar[data-image]:after, .sidebar.has-image:after, .off-canvas-sidebar.has-image:after {
    opacity: 0.77; }
  .sidebar[data-color="blue"] .nav li.active a, .off-canvas-sidebar[data-color="blue"] .nav li.active a {
    background-color: #c5a2b3;
    box-shadow: 0 12px 20px -10px rgba(197, 162, 179, 0.28), 0 4px 20px 0px rgba(0, 0, 0, 0.12), 0 7px 8px -5px rgba(197, 162, 179, 0.2); }
  .sidebar[data-color="green"] .nav li.active a, .off-canvas-sidebar[data-color="green"] .nav li.active a {
    background-color: #60b178;
    box-shadow: 0 12px 20px -10px rgba(96, 177, 120, 0.28), 0 4px 20px 0px rgba(0, 0, 0, 0.12), 0 7px 8px -5px rgba(96, 177, 120, 0.2); }
  .sidebar[data-color="orange"] .nav li.active a, .off-canvas-sidebar[data-color="orange"] .nav li.active a {
    background-color: #dea140;
    box-shadow: 0 12px 20px -10px rgba(222, 161, 64, 0.28), 0 4px 20px 0px rgba(0, 0, 0, 0.12), 0 7px 8px -5px rgba(222, 161, 64, 0.2); }
  .sidebar[data-color="red"] .nav li.active a, .off-canvas-sidebar[data-color="red"] .nav li.active a {
    background-color: #f44336;
    box-shadow: 0 12px 20px -10px rgba(244, 67, 54, 0.28), 0 4px 20px 0px rgba(0, 0, 0, 0.12), 0 7px 8px -5px rgba(244, 67, 54, 0.2); }
  .sidebar[data-color="purple"] .nav li.active a, .off-canvas-sidebar[data-color="purple"] .nav li.active a {
    background-color: #90b6d6;
    box-shadow: 0 12px 20px -10px rgba(144, 182, 214, 0.28), 0 4px 20px 0px rgba(0, 0, 0, 0.12), 0 7px 8px -5px rgba(144, 182, 214, 0.2); }

.off-canvas-sidebar .nav > li > a, .off-canvas-sidebar .nav > li > a:hover {
  color: #fff; }
  .off-canvas-sidebar .nav > li > a:focus {
    background: rgba(200, 200, 200, 0.2); }

.main-panel {
  position: relative;
  z-index: 2;
  float: right;
  overflow: auto;
  width: calc(100% - 260px);
  min-height: 100%;
  -webkit-transform: translate3d(0px, 0, 0);
  -moz-transform: translate3d(0px, 0, 0);
  -o-transform: translate3d(0px, 0, 0);
  -ms-transform: translate3d(0px, 0, 0);
  transform: translate3d(0px, 0, 0);
  -webkit-transition: all 0.33s cubic-bezier(0.685, 0.0473, 0.346, 1);
  -moz-transition: all 0.33s cubic-bezier(0.685, 0.0473, 0.346, 1);
  -o-transition: all 0.33s cubic-bezier(0.685, 0.0473, 0.346, 1);
  -ms-transition: all 0.33s cubic-bezier(0.685, 0.0473, 0.346, 1);
  transition: all 0.33s cubic-bezier(0.685, 0.0473, 0.346, 1); }
  .main-panel > .content {
    margin-top: 70px;
    padding: 30px 15px;
    min-height: calc(100% - 123px); }
  .main-panel > .footer {
    border-top: 1px solid #e7e7e7; }
  .main-panel > .navbar {
    margin-bottom: 0; }

.main-panel {
  max-height: 100%;
  height: 100%; }

.sidebar, .main-panel {
  -webkit-transition-property: top, bottom;
  transition-property: top, bottom;
  -webkit-transition-duration: 0.2s, 0.2s;
  transition-duration: 0.2s, 0.2s;
  -webkit-transition-timing-function: linear, linear;
  transition-timing-function: linear, linear;
  -webkit-overflow-scrolling: touch; }

.btn, .navbar .navbar-nav > li > a.btn {
  border: none;
  border-radius: 3px;
  position: relative;
  padding: 12px 30px;
  margin: 10px 1px;
  font-size: 12px;
  font-weight: 400;
  text-transform: uppercase;
  letter-spacing: 0;
  will-change: box-shadow, transform;
  transition: box-shadow 0.2s cubic-bezier(0.4, 0, 1, 1), background-color 0.2s cubic-bezier(0.4, 0, 0.2, 1); }
  .btn::-moz-focus-inner, .navbar .navbar-nav > li > a.btn::-moz-focus-inner {
    border: 0; }
  .btn, .navbar .navbar-nav > li > a.btn, .btn.btn-default, .navbar .navbar-nav > li > a.btn.btn-default {
    box-shadow: 0 2px 2px 0 rgba(167, 158, 153, 0.14), 0 3px 1px -2px rgba(167, 158, 153, 0.2), 0 1px 5px 0 rgba(167, 158, 153, 0.12); }
  .btn, .navbar .navbar-nav > li > a.btn, .btn.btn-default, .navbar .navbar-nav > li > a.btn.btn-default, .btn:hover, .navbar .navbar-nav > li > a.btn:hover, .btn.btn-default:hover, .navbar .navbar-nav > li > a.btn.btn-default:hover, .btn:focus, .navbar .navbar-nav > li > a.btn:focus, .btn.btn-default:focus, .navbar .navbar-nav > li > a.btn.btn-default:focus, .btn:active, .navbar .navbar-nav > li > a.btn:active, .btn.btn-default:active, .navbar .navbar-nav > li > a.btn.btn-default:active, .btn.active, .navbar .navbar-nav > li > a.btn.active, .btn.btn-default.active, .navbar .navbar-nav > li > a.btn.btn-default.active, .btn:active:focus, .navbar .navbar-nav > li > a.btn:active:focus, .btn.btn-default:active:focus, .navbar .navbar-nav > li > a.btn.btn-default:active:focus, .btn:active:hover, .navbar .navbar-nav > li > a.btn:active:hover, .btn.btn-default:active:hover, .navbar .navbar-nav > li > a.btn.btn-default:active:hover, .btn.active:focus, .navbar .navbar-nav > li > a.btn.active:focus, .btn.btn-default.active:focus, .navbar .navbar-nav > li > a.btn.btn-default.active:focus, .btn.active:hover, .navbar .navbar-nav > li > a.btn.active:hover, .btn.btn-default.active:hover, .navbar .navbar-nav > li > a.btn.btn-default.active:hover, .open > .btn.dropdown-toggle, .open > .navbar .navbar-nav > li > a.btn.dropdown-toggle, .open > .btn.btn-default.dropdown-toggle, .open > .navbar .navbar-nav > li > a.btn.btn-default.dropdown-toggle, .open > .btn.dropdown-toggle:focus, .open > .navbar .navbar-nav > li > a.btn.dropdown-toggle:focus, .open > .btn.btn-default.dropdown-toggle:focus, .open > .navbar .navbar-nav > li > a.btn.btn-default.dropdown-toggle:focus, .open > .btn.dropdown-toggle:hover, .open > .navbar .navbar-nav > li > a.btn.dropdown-toggle:hover, .open > .btn.btn-default.dropdown-toggle:hover, .open > .navbar .navbar-nav > li > a.btn.btn-default.dropdown-toggle:hover {
    background-color: #a79e99;
    color: #fff; }
  .btn:focus, .navbar .navbar-nav > li > a.btn:focus, .btn.btn-default:focus, .navbar .navbar-nav > li > a.btn.btn-default:focus, .btn:active, .navbar .navbar-nav > li > a.btn:active, .btn.btn-default:active, .navbar .navbar-nav > li > a.btn.btn-default:active, .btn:hover, .navbar .navbar-nav > li > a.btn:hover, .btn.btn-default:hover, .navbar .navbar-nav > li > a.btn.btn-default:hover {
    box-shadow: 0 14px 26px -12px rgba(167, 158, 153, 0.42), 0 4px 23px 0px rgba(0, 0, 0, 0.12), 0 8px 10px -5px rgba(167, 158, 153, 0.2); }
  .btn.disabled, .navbar .navbar-nav > li > a.btn.disabled, .btn.btn-default.disabled, .navbar .navbar-nav > li > a.btn.btn-default.disabled, .btn:disabled, .navbar .navbar-nav > li > a.btn:disabled, .btn.btn-default:disabled, .navbar .navbar-nav > li > a.btn.btn-default:disabled, .btn[disabled], .navbar .navbar-nav > li > a.btn[disabled], .btn.btn-default[disabled], .navbar .navbar-nav > li > a.btn.btn-default[disabled], fieldset[disabled] .btn, fieldset[disabled] .navbar .navbar-nav > li > a.btn, fieldset[disabled] .btn.btn-default, fieldset[disabled] .navbar .navbar-nav > li > a.btn.btn-default, .btn.disabled:hover, .navbar .navbar-nav > li > a.btn.disabled:hover, .btn.btn-default.disabled:hover, .navbar .navbar-nav > li > a.btn.btn-default.disabled:hover, .btn:disabled:hover, .navbar .navbar-nav > li > a.btn:disabled:hover, .btn.btn-default:disabled:hover, .navbar .navbar-nav > li > a.btn.btn-default:disabled:hover, .btn[disabled]:hover, .navbar .navbar-nav > li > a.btn[disabled]:hover, .btn.btn-default[disabled]:hover, .navbar .navbar-nav > li > a.btn.btn-default[disabled]:hover, fieldset[disabled] .btn:hover, fieldset[disabled] .navbar .navbar-nav > li > a.btn:hover, fieldset[disabled] .btn.btn-default:hover, fieldset[disabled] .navbar .navbar-nav > li > a.btn.btn-default:hover, .btn.disabled:focus, .navbar .navbar-nav > li > a.btn.disabled:focus, .btn.btn-default.disabled:focus, .navbar .navbar-nav > li > a.btn.btn-default.disabled:focus, .btn:disabled:focus, .navbar .navbar-nav > li > a.btn:disabled:focus, .btn.btn-default:disabled:focus, .navbar .navbar-nav > li > a.btn.btn-default:disabled:focus, .btn[disabled]:focus, .navbar .navbar-nav > li > a.btn[disabled]:focus, .btn.btn-default[disabled]:focus, .navbar .navbar-nav > li > a.btn.btn-default[disabled]:focus, fieldset[disabled] .btn:focus, fieldset[disabled] .navbar .navbar-nav > li > a.btn:focus, fieldset[disabled] .btn.btn-default:focus, fieldset[disabled] .navbar .navbar-nav > li > a.btn.btn-default:focus, .btn.disabled.focus, .navbar .navbar-nav > li > a.btn.disabled.focus, .btn.btn-default.disabled.focus, .navbar .navbar-nav > li > a.btn.btn-default.disabled.focus, .btn:disabled.focus, .navbar .navbar-nav > li > a.btn:disabled.focus, .btn.btn-default:disabled.focus, .navbar .navbar-nav > li > a.btn.btn-default:disabled.focus, .btn[disabled].focus, .navbar .navbar-nav > li > a.btn[disabled].focus, .btn.btn-default[disabled].focus, .navbar .navbar-nav > li > a.btn.btn-default[disabled].focus, fieldset[disabled] .btn.focus, fieldset[disabled] .navbar .navbar-nav > li > a.btn.focus, fieldset[disabled] .btn.btn-default.focus, fieldset[disabled] .navbar .navbar-nav > li > a.btn.btn-default.focus, .btn.disabled:active, .navbar .navbar-nav > li > a.btn.disabled:active, .btn.btn-default.disabled:active, .navbar .navbar-nav > li > a.btn.btn-default.disabled:active, .btn:disabled:active, .navbar .navbar-nav > li > a.btn:disabled:active, .btn.btn-default:disabled:active, .navbar .navbar-nav > li > a.btn.btn-default:disabled:active, .btn[disabled]:active, .navbar .navbar-nav > li > a.btn[disabled]:active, .btn.btn-default[disabled]:active, .navbar .navbar-nav > li > a.btn.btn-default[disabled]:active, fieldset[disabled] .btn:active, fieldset[disabled] .navbar .navbar-nav > li > a.btn:active, fieldset[disabled] .btn.btn-default:active, fieldset[disabled] .navbar .navbar-nav > li > a.btn.btn-default:active, .btn.disabled.active, .navbar .navbar-nav > li > a.btn.disabled.active, .btn.btn-default.disabled.active, .navbar .navbar-nav > li > a.btn.btn-default.disabled.active, .btn:disabled.active, .navbar .navbar-nav > li > a.btn:disabled.active, .btn.btn-default:disabled.active, .navbar .navbar-nav > li > a.btn.btn-default:disabled.active, .btn[disabled].active, .navbar .navbar-nav > li > a.btn[disabled].active, .btn.btn-default[disabled].active, .navbar .navbar-nav > li > a.btn.btn-default[disabled].active, fieldset[disabled] .btn.active, fieldset[disabled] .navbar .navbar-nav > li > a.btn.active, fieldset[disabled] .btn.btn-default.active, fieldset[disabled] .navbar .navbar-nav > li > a.btn.btn-default.active {
    box-shadow: none; }
  .btn.btn-simple, .navbar .navbar-nav > li > a.btn.btn-simple, .btn.btn-default.btn-simple, .navbar .navbar-nav > li > a.btn.btn-default.btn-simple {
    background-color: transparent;
    color: #a79e99;
    box-shadow: none; }
    .btn.btn-simple:hover, .navbar .navbar-nav > li > a.btn.btn-simple:hover, .btn.btn-default.btn-simple:hover, .navbar .navbar-nav > li > a.btn.btn-default.btn-simple:hover, .btn.btn-simple:focus, .navbar .navbar-nav > li > a.btn.btn-simple:focus, .btn.btn-default.btn-simple:focus, .navbar .navbar-nav > li > a.btn.btn-default.btn-simple:focus, .btn.btn-simple:active, .navbar .navbar-nav > li > a.btn.btn-simple:active, .btn.btn-default.btn-simple:active, .navbar .navbar-nav > li > a.btn.btn-default.btn-simple:active {
      background-color: transparent;
      color: #a79e99; }
  .btn.btn-primary, .navbar .navbar-nav > li > a.btn.btn-primary {
    box-shadow: 0 2px 2px 0 rgba(144, 182, 214, 0.14), 0 3px 1px -2px rgba(144, 182, 214, 0.2), 0 1px 5px 0 rgba(144, 182, 214, 0.12); }
  .btn.btn-primary, .navbar .navbar-nav > li > a.btn.btn-primary, .btn.btn-primary:hover, .navbar .navbar-nav > li > a.btn.btn-primary:hover, .btn.btn-primary:focus, .navbar .navbar-nav > li > a.btn.btn-primary:focus, .btn.btn-primary:active, .navbar .navbar-nav > li > a.btn.btn-primary:active, .btn.btn-primary.active, .navbar .navbar-nav > li > a.btn.btn-primary.active, .btn.btn-primary:active:focus, .navbar .navbar-nav > li > a.btn.btn-primary:active:focus, .btn.btn-primary:active:hover, .navbar .navbar-nav > li > a.btn.btn-primary:active:hover, .btn.btn-primary.active:focus, .navbar .navbar-nav > li > a.btn.btn-primary.active:focus, .btn.btn-primary.active:hover, .navbar .navbar-nav > li > a.btn.btn-primary.active:hover, .open > .btn.btn-primary.dropdown-toggle, .open > .navbar .navbar-nav > li > a.btn.btn-primary.dropdown-toggle, .open > .btn.btn-primary.dropdown-toggle:focus, .open > .navbar .navbar-nav > li > a.btn.btn-primary.dropdown-toggle:focus, .open > .btn.btn-primary.dropdown-toggle:hover, .open > .navbar .navbar-nav > li > a.btn.btn-primary.dropdown-toggle:hover {
    background-color: #90b6d6;
    color: #fff; }
  .btn.btn-primary:focus, .navbar .navbar-nav > li > a.btn.btn-primary:focus, .btn.btn-primary:active, .navbar .navbar-nav > li > a.btn.btn-primary:active, .btn.btn-primary:hover, .navbar .navbar-nav > li > a.btn.btn-primary:hover {
    box-shadow: 0 14px 26px -12px rgba(144, 182, 214, 0.42), 0 4px 23px 0px rgba(0, 0, 0, 0.12), 0 8px 10px -5px rgba(144, 182, 214, 0.2); }
  .btn.btn-primary.disabled, .navbar .navbar-nav > li > a.btn.btn-primary.disabled, .btn.btn-primary:disabled, .navbar .navbar-nav > li > a.btn.btn-primary:disabled, .btn.btn-primary[disabled], .navbar .navbar-nav > li > a.btn.btn-primary[disabled], fieldset[disabled] .btn.btn-primary, fieldset[disabled] .navbar .navbar-nav > li > a.btn.btn-primary, .btn.btn-primary.disabled:hover, .navbar .navbar-nav > li > a.btn.btn-primary.disabled:hover, .btn.btn-primary:disabled:hover, .navbar .navbar-nav > li > a.btn.btn-primary:disabled:hover, .btn.btn-primary[disabled]:hover, .navbar .navbar-nav > li > a.btn.btn-primary[disabled]:hover, fieldset[disabled] .btn.btn-primary:hover, fieldset[disabled] .navbar .navbar-nav > li > a.btn.btn-primary:hover, .btn.btn-primary.disabled:focus, .navbar .navbar-nav > li > a.btn.btn-primary.disabled:focus, .btn.btn-primary:disabled:focus, .navbar .navbar-nav > li > a.btn.btn-primary:disabled:focus, .btn.btn-primary[disabled]:focus, .navbar .navbar-nav > li > a.btn.btn-primary[disabled]:focus, fieldset[disabled] .btn.btn-primary:focus, fieldset[disabled] .navbar .navbar-nav > li > a.btn.btn-primary:focus, .btn.btn-primary.disabled.focus, .navbar .navbar-nav > li > a.btn.btn-primary.disabled.focus, .btn.btn-primary:disabled.focus, .navbar .navbar-nav > li > a.btn.btn-primary:disabled.focus, .btn.btn-primary[disabled].focus, .navbar .navbar-nav > li > a.btn.btn-primary[disabled].focus, fieldset[disabled] .btn.btn-primary.focus, fieldset[disabled] .navbar .navbar-nav > li > a.btn.btn-primary.focus, .btn.btn-primary.disabled:active, .navbar .navbar-nav > li > a.btn.btn-primary.disabled:active, .btn.btn-primary:disabled:active, .navbar .navbar-nav > li > a.btn.btn-primary:disabled:active, .btn.btn-primary[disabled]:active, .navbar .navbar-nav > li > a.btn.btn-primary[disabled]:active, fieldset[disabled] .btn.btn-primary:active, fieldset[disabled] .navbar .navbar-nav > li > a.btn.btn-primary:active, .btn.btn-primary.disabled.active, .navbar .navbar-nav > li > a.btn.btn-primary.disabled.active, .btn.btn-primary:disabled.active, .navbar .navbar-nav > li > a.btn.btn-primary:disabled.active, .btn.btn-primary[disabled].active, .navbar .navbar-nav > li > a.btn.btn-primary[disabled].active, fieldset[disabled] .btn.btn-primary.active, fieldset[disabled] .navbar .navbar-nav > li > a.btn.btn-primary.active {
    box-shadow: none; }
  .btn.btn-primary.btn-simple, .navbar .navbar-nav > li > a.btn.btn-primary.btn-simple {
    background-color: transparent;
    color: #90b6d6;
    box-shadow: none; }
    .btn.btn-primary.btn-simple:hover, .navbar .navbar-nav > li > a.btn.btn-primary.btn-simple:hover, .btn.btn-primary.btn-simple:focus, .navbar .navbar-nav > li > a.btn.btn-primary.btn-simple:focus, .btn.btn-primary.btn-simple:active, .navbar .navbar-nav > li > a.btn.btn-primary.btn-simple:active {
      background-color: transparent;
      color: #90b6d6; }
  .btn.btn-info, .navbar .navbar-nav > li > a.btn.btn-info {
    box-shadow: 0 2px 2px 0 rgba(197, 162, 179, 0.14), 0 3px 1px -2px rgba(197, 162, 179, 0.2), 0 1px 5px 0 rgba(197, 162, 179, 0.12); }
  .btn.btn-info, .navbar .navbar-nav > li > a.btn.btn-info, .btn.btn-info:hover, .navbar .navbar-nav > li > a.btn.btn-info:hover, .btn.btn-info:focus, .navbar .navbar-nav > li > a.btn.btn-info:focus, .btn.btn-info:active, .navbar .navbar-nav > li > a.btn.btn-info:active, .btn.btn-info.active, .navbar .navbar-nav > li > a.btn.btn-info.active, .btn.btn-info:active:focus, .navbar .navbar-nav > li > a.btn.btn-info:active:focus, .btn.btn-info:active:hover, .navbar .navbar-nav > li > a.btn.btn-info:active:hover, .btn.btn-info.active:focus, .navbar .navbar-nav > li > a.btn.btn-info.active:focus, .btn.btn-info.active:hover, .navbar .navbar-nav > li > a.btn.btn-info.active:hover, .open > .btn.btn-info.dropdown-toggle, .open > .navbar .navbar-nav > li > a.btn.btn-info.dropdown-toggle, .open > .btn.btn-info.dropdown-toggle:focus, .open > .navbar .navbar-nav > li > a.btn.btn-info.dropdown-toggle:focus, .open > .btn.btn-info.dropdown-toggle:hover, .open > .navbar .navbar-nav > li > a.btn.btn-info.dropdown-toggle:hover {
    background-color: #c5a2b3;
    color: #fff; }
  .btn.btn-info:focus, .navbar .navbar-nav > li > a.btn.btn-info:focus, .btn.btn-info:active, .navbar .navbar-nav > li > a.btn.btn-info:active, .btn.btn-info:hover, .navbar .navbar-nav > li > a.btn.btn-info:hover {
    box-shadow: 0 14px 26px -12px rgba(197, 162, 179, 0.42), 0 4px 23px 0px rgba(0, 0, 0, 0.12), 0 8px 10px -5px rgba(197, 162, 179, 0.2); }
  .btn.btn-info.disabled, .navbar .navbar-nav > li > a.btn.btn-info.disabled, .btn.btn-info:disabled, .navbar .navbar-nav > li > a.btn.btn-info:disabled, .btn.btn-info[disabled], .navbar .navbar-nav > li > a.btn.btn-info[disabled], fieldset[disabled] .btn.btn-info, fieldset[disabled] .navbar .navbar-nav > li > a.btn.btn-info, .btn.btn-info.disabled:hover, .navbar .navbar-nav > li > a.btn.btn-info.disabled:hover, .btn.btn-info:disabled:hover, .navbar .navbar-nav > li > a.btn.btn-info:disabled:hover, .btn.btn-info[disabled]:hover, .navbar .navbar-nav > li > a.btn.btn-info[disabled]:hover, fieldset[disabled] .btn.btn-info:hover, fieldset[disabled] .navbar .navbar-nav > li > a.btn.btn-info:hover, .btn.btn-info.disabled:focus, .navbar .navbar-nav > li > a.btn.btn-info.disabled:focus, .btn.btn-info:disabled:focus, .navbar .navbar-nav > li > a.btn.btn-info:disabled:focus, .btn.btn-info[disabled]:focus, .navbar .navbar-nav > li > a.btn.btn-info[disabled]:focus, fieldset[disabled] .btn.btn-info:focus, fieldset[disabled] .navbar .navbar-nav > li > a.btn.btn-info:focus, .btn.btn-info.disabled.focus, .navbar .navbar-nav > li > a.btn.btn-info.disabled.focus, .btn.btn-info:disabled.focus, .navbar .navbar-nav > li > a.btn.btn-info:disabled.focus, .btn.btn-info[disabled].focus, .navbar .navbar-nav > li > a.btn.btn-info[disabled].focus, fieldset[disabled] .btn.btn-info.focus, fieldset[disabled] .navbar .navbar-nav > li > a.btn.btn-info.focus, .btn.btn-info.disabled:active, .navbar .navbar-nav > li > a.btn.btn-info.disabled:active, .btn.btn-info:disabled:active, .navbar .navbar-nav > li > a.btn.btn-info:disabled:active, .btn.btn-info[disabled]:active, .navbar .navbar-nav > li > a.btn.btn-info[disabled]:active, fieldset[disabled] .btn.btn-info:active, fieldset[disabled] .navbar .navbar-nav > li > a.btn.btn-info:active, .btn.btn-info.disabled.active, .navbar .navbar-nav > li > a.btn.btn-info.disabled.active, .btn.btn-info:disabled.active, .navbar .navbar-nav > li > a.btn.btn-info:disabled.active, .btn.btn-info[disabled].active, .navbar .navbar-nav > li > a.btn.btn-info[disabled].active, fieldset[disabled] .btn.btn-info.active, fieldset[disabled] .navbar .navbar-nav > li > a.btn.btn-info.active {
    box-shadow: none; }
  .btn.btn-info.btn-simple, .navbar .navbar-nav > li > a.btn.btn-info.btn-simple {
    background-color: transparent;
    color: #c5a2b3;
    box-shadow: none; }
    .btn.btn-info.btn-simple:hover, .navbar .navbar-nav > li > a.btn.btn-info.btn-simple:hover, .btn.btn-info.btn-simple:focus, .navbar .navbar-nav > li > a.btn.btn-info.btn-simple:focus, .btn.btn-info.btn-simple:active, .navbar .navbar-nav > li > a.btn.btn-info.btn-simple:active {
      background-color: transparent;
      color: #c5a2b3; }
  .btn.btn-success, .navbar .navbar-nav > li > a.btn.btn-success {
    box-shadow: 0 2px 2px 0 rgba(96, 177, 120, 0.14), 0 3px 1px -2px rgba(96, 177, 120, 0.2), 0 1px 5px 0 rgba(96, 177, 120, 0.12); }
  .btn.btn-success, .navbar .navbar-nav > li > a.btn.btn-success, .btn.btn-success:hover, .navbar .navbar-nav > li > a.btn.btn-success:hover, .btn.btn-success:focus, .navbar .navbar-nav > li > a.btn.btn-success:focus, .btn.btn-success:active, .navbar .navbar-nav > li > a.btn.btn-success:active, .btn.btn-success.active, .navbar .navbar-nav > li > a.btn.btn-success.active, .btn.btn-success:active:focus, .navbar .navbar-nav > li > a.btn.btn-success:active:focus, .btn.btn-success:active:hover, .navbar .navbar-nav > li > a.btn.btn-success:active:hover, .btn.btn-success.active:focus, .navbar .navbar-nav > li > a.btn.btn-success.active:focus, .btn.btn-success.active:hover, .navbar .navbar-nav > li > a.btn.btn-success.active:hover, .open > .btn.btn-success.dropdown-toggle, .open > .navbar .navbar-nav > li > a.btn.btn-success.dropdown-toggle, .open > .btn.btn-success.dropdown-toggle:focus, .open > .navbar .navbar-nav > li > a.btn.btn-success.dropdown-toggle:focus, .open > .btn.btn-success.dropdown-toggle:hover, .open > .navbar .navbar-nav > li > a.btn.btn-success.dropdown-toggle:hover {
    background-color: #60b178;
    color: #fff; }
  .btn.btn-success:focus, .navbar .navbar-nav > li > a.btn.btn-success:focus, .btn.btn-success:active, .navbar .navbar-nav > li > a.btn.btn-success:active, .btn.btn-success:hover, .navbar .navbar-nav > li > a.btn.btn-success:hover {
    box-shadow: 0 14px 26px -12px rgba(96, 177, 120, 0.42), 0 4px 23px 0px rgba(0, 0, 0, 0.12), 0 8px 10px -5px rgba(96, 177, 120, 0.2); }
  .btn.btn-success.disabled, .navbar .navbar-nav > li > a.btn.btn-success.disabled, .btn.btn-success:disabled, .navbar .navbar-nav > li > a.btn.btn-success:disabled, .btn.btn-success[disabled], .navbar .navbar-nav > li > a.btn.btn-success[disabled], fieldset[disabled] .btn.btn-success, fieldset[disabled] .navbar .navbar-nav > li > a.btn.btn-success, .btn.btn-success.disabled:hover, .navbar .navbar-nav > li > a.btn.btn-success.disabled:hover, .btn.btn-success:disabled:hover, .navbar .navbar-nav > li > a.btn.btn-success:disabled:hover, .btn.btn-success[disabled]:hover, .navbar .navbar-nav > li > a.btn.btn-success[disabled]:hover, fieldset[disabled] .btn.btn-success:hover, fieldset[disabled] .navbar .navbar-nav > li > a.btn.btn-success:hover, .btn.btn-success.disabled:focus, .navbar .navbar-nav > li > a.btn.btn-success.disabled:focus, .btn.btn-success:disabled:focus, .navbar .navbar-nav > li > a.btn.btn-success:disabled:focus, .btn.btn-success[disabled]:focus, .navbar .navbar-nav > li > a.btn.btn-success[disabled]:focus, fieldset[disabled] .btn.btn-success:focus, fieldset[disabled] .navbar .navbar-nav > li > a.btn.btn-success:focus, .btn.btn-success.disabled.focus, .navbar .navbar-nav > li > a.btn.btn-success.disabled.focus, .btn.btn-success:disabled.focus, .navbar .navbar-nav > li > a.btn.btn-success:disabled.focus, .btn.btn-success[disabled].focus, .navbar .navbar-nav > li > a.btn.btn-success[disabled].focus, fieldset[disabled] .btn.btn-success.focus, fieldset[disabled] .navbar .navbar-nav > li > a.btn.btn-success.focus, .btn.btn-success.disabled:active, .navbar .navbar-nav > li > a.btn.btn-success.disabled:active, .btn.btn-success:disabled:active, .navbar .navbar-nav > li > a.btn.btn-success:disabled:active, .btn.btn-success[disabled]:active, .navbar .navbar-nav > li > a.btn.btn-success[disabled]:active, fieldset[disabled] .btn.btn-success:active, fieldset[disabled] .navbar .navbar-nav > li > a.btn.btn-success:active, .btn.btn-success.disabled.active, .navbar .navbar-nav > li > a.btn.btn-success.disabled.active, .btn.btn-success:disabled.active, .navbar .navbar-nav > li > a.btn.btn-success:disabled.active, .btn.btn-success[disabled].active, .navbar .navbar-nav > li > a.btn.btn-success[disabled].active, fieldset[disabled] .btn.btn-success.active, fieldset[disabled] .navbar .navbar-nav > li > a.btn.btn-success.active {
    box-shadow: none; }
  .btn.btn-success.btn-simple, .navbar .navbar-nav > li > a.btn.btn-success.btn-simple {
    background-color: transparent;
    color: #60b178;
    box-shadow: none; }
    .btn.btn-success.btn-simple:hover, .navbar .navbar-nav > li > a.btn.btn-success.btn-simple:hover, .btn.btn-success.btn-simple:focus, .navbar .navbar-nav > li > a.btn.btn-success.btn-simple:focus, .btn.btn-success.btn-simple:active, .navbar .navbar-nav > li > a.btn.btn-success.btn-simple:active {
      background-color: transparent;
      color: #60b178; }
  .btn.btn-warning, .navbar .navbar-nav > li > a.btn.btn-warning {
    box-shadow: 0 2px 2px 0 rgba(222, 161, 64, 0.14), 0 3px 1px -2px rgba(222, 161, 64, 0.2), 0 1px 5px 0 rgba(222, 161, 64, 0.12); }
  .btn.btn-warning, .navbar .navbar-nav > li > a.btn.btn-warning, .btn.btn-warning:hover, .navbar .navbar-nav > li > a.btn.btn-warning:hover, .btn.btn-warning:focus, .navbar .navbar-nav > li > a.btn.btn-warning:focus, .btn.btn-warning:active, .navbar .navbar-nav > li > a.btn.btn-warning:active, .btn.btn-warning.active, .navbar .navbar-nav > li > a.btn.btn-warning.active, .btn.btn-warning:active:focus, .navbar .navbar-nav > li > a.btn.btn-warning:active:focus, .btn.btn-warning:active:hover, .navbar .navbar-nav > li > a.btn.btn-warning:active:hover, .btn.btn-warning.active:focus, .navbar .navbar-nav > li > a.btn.btn-warning.active:focus, .btn.btn-warning.active:hover, .navbar .navbar-nav > li > a.btn.btn-warning.active:hover, .open > .btn.btn-warning.dropdown-toggle, .open > .navbar .navbar-nav > li > a.btn.btn-warning.dropdown-toggle, .open > .btn.btn-warning.dropdown-toggle:focus, .open > .navbar .navbar-nav > li > a.btn.btn-warning.dropdown-toggle:focus, .open > .btn.btn-warning.dropdown-toggle:hover, .open > .navbar .navbar-nav > li > a.btn.btn-warning.dropdown-toggle:hover {
    background-color: #dea140;
    color: #fff; }
  .btn.btn-warning:focus, .navbar .navbar-nav > li > a.btn.btn-warning:focus, .btn.btn-warning:active, .navbar .navbar-nav > li > a.btn.btn-warning:active, .btn.btn-warning:hover, .navbar .navbar-nav > li > a.btn.btn-warning:hover {
    box-shadow: 0 14px 26px -12px rgba(222, 161, 64, 0.42), 0 4px 23px 0px rgba(0, 0, 0, 0.12), 0 8px 10px -5px rgba(222, 161, 64, 0.2); }
  .btn.btn-warning.disabled, .navbar .navbar-nav > li > a.btn.btn-warning.disabled, .btn.btn-warning:disabled, .navbar .navbar-nav > li > a.btn.btn-warning:disabled, .btn.btn-warning[disabled], .navbar .navbar-nav > li > a.btn.btn-warning[disabled], fieldset[disabled] .btn.btn-warning, fieldset[disabled] .navbar .navbar-nav > li > a.btn.btn-warning, .btn.btn-warning.disabled:hover, .navbar .navbar-nav > li > a.btn.btn-warning.disabled:hover, .btn.btn-warning:disabled:hover, .navbar .navbar-nav > li > a.btn.btn-warning:disabled:hover, .btn.btn-warning[disabled]:hover, .navbar .navbar-nav > li > a.btn.btn-warning[disabled]:hover, fieldset[disabled] .btn.btn-warning:hover, fieldset[disabled] .navbar .navbar-nav > li > a.btn.btn-warning:hover, .btn.btn-warning.disabled:focus, .navbar .navbar-nav > li > a.btn.btn-warning.disabled:focus, .btn.btn-warning:disabled:focus, .navbar .navbar-nav > li > a.btn.btn-warning:disabled:focus, .btn.btn-warning[disabled]:focus, .navbar .navbar-nav > li > a.btn.btn-warning[disabled]:focus, fieldset[disabled] .btn.btn-warning:focus, fieldset[disabled] .navbar .navbar-nav > li > a.btn.btn-warning:focus, .btn.btn-warning.disabled.focus, .navbar .navbar-nav > li > a.btn.btn-warning.disabled.focus, .btn.btn-warning:disabled.focus, .navbar .navbar-nav > li > a.btn.btn-warning:disabled.focus, .btn.btn-warning[disabled].focus, .navbar .navbar-nav > li > a.btn.btn-warning[disabled].focus, fieldset[disabled] .btn.btn-warning.focus, fieldset[disabled] .navbar .navbar-nav > li > a.btn.btn-warning.focus, .btn.btn-warning.disabled:active, .navbar .navbar-nav > li > a.btn.btn-warning.disabled:active, .btn.btn-warning:disabled:active, .navbar .navbar-nav > li > a.btn.btn-warning:disabled:active, .btn.btn-warning[disabled]:active, .navbar .navbar-nav > li > a.btn.btn-warning[disabled]:active, fieldset[disabled] .btn.btn-warning:active, fieldset[disabled] .navbar .navbar-nav > li > a.btn.btn-warning:active, .btn.btn-warning.disabled.active, .navbar .navbar-nav > li > a.btn.btn-warning.disabled.active, .btn.btn-warning:disabled.active, .navbar .navbar-nav > li > a.btn.btn-warning:disabled.active, .btn.btn-warning[disabled].active, .navbar .navbar-nav > li > a.btn.btn-warning[disabled].active, fieldset[disabled] .btn.btn-warning.active, fieldset[disabled] .navbar .navbar-nav > li > a.btn.btn-warning.active {
    box-shadow: none; }
  .btn.btn-warning.btn-simple, .navbar .navbar-nav > li > a.btn.btn-warning.btn-simple {
    background-color: transparent;
    color: #dea140;
    box-shadow: none; }
    .btn.btn-warning.btn-simple:hover, .navbar .navbar-nav > li > a.btn.btn-warning.btn-simple:hover, .btn.btn-warning.btn-simple:focus, .navbar .navbar-nav > li > a.btn.btn-warning.btn-simple:focus, .btn.btn-warning.btn-simple:active, .navbar .navbar-nav > li > a.btn.btn-warning.btn-simple:active {
      background-color: transparent;
      color: #dea140; }
  .btn.btn-danger, .navbar .navbar-nav > li > a.btn.btn-danger {
    box-shadow: 0 2px 2px 0 rgba(244, 67, 54, 0.14), 0 3px 1px -2px rgba(244, 67, 54, 0.2), 0 1px 5px 0 rgba(244, 67, 54, 0.12); }
  .btn.btn-danger, .navbar .navbar-nav > li > a.btn.btn-danger, .btn.btn-danger:hover, .navbar .navbar-nav > li > a.btn.btn-danger:hover, .btn.btn-danger:focus, .navbar .navbar-nav > li > a.btn.btn-danger:focus, .btn.btn-danger:active, .navbar .navbar-nav > li > a.btn.btn-danger:active, .btn.btn-danger.active, .navbar .navbar-nav > li > a.btn.btn-danger.active, .btn.btn-danger:active:focus, .navbar .navbar-nav > li > a.btn.btn-danger:active:focus, .btn.btn-danger:active:hover, .navbar .navbar-nav > li > a.btn.btn-danger:active:hover, .btn.btn-danger.active:focus, .navbar .navbar-nav > li > a.btn.btn-danger.active:focus, .btn.btn-danger.active:hover, .navbar .navbar-nav > li > a.btn.btn-danger.active:hover, .open > .btn.btn-danger.dropdown-toggle, .open > .navbar .navbar-nav > li > a.btn.btn-danger.dropdown-toggle, .open > .btn.btn-danger.dropdown-toggle:focus, .open > .navbar .navbar-nav > li > a.btn.btn-danger.dropdown-toggle:focus, .open > .btn.btn-danger.dropdown-toggle:hover, .open > .navbar .navbar-nav > li > a.btn.btn-danger.dropdown-toggle:hover {
    background-color: #f44336;
    color: #fff; }
  .btn.btn-danger:focus, .navbar .navbar-nav > li > a.btn.btn-danger:focus, .btn.btn-danger:active, .navbar .navbar-nav > li > a.btn.btn-danger:active, .btn.btn-danger:hover, .navbar .navbar-nav > li > a.btn.btn-danger:hover {
    box-shadow: 0 14px 26px -12px rgba(244, 67, 54, 0.42), 0 4px 23px 0px rgba(0, 0, 0, 0.12), 0 8px 10px -5px rgba(244, 67, 54, 0.2); }
  .btn.btn-danger.disabled, .navbar .navbar-nav > li > a.btn.btn-danger.disabled, .btn.btn-danger:disabled, .navbar .navbar-nav > li > a.btn.btn-danger:disabled, .btn.btn-danger[disabled], .navbar .navbar-nav > li > a.btn.btn-danger[disabled], fieldset[disabled] .btn.btn-danger, fieldset[disabled] .navbar .navbar-nav > li > a.btn.btn-danger, .btn.btn-danger.disabled:hover, .navbar .navbar-nav > li > a.btn.btn-danger.disabled:hover, .btn.btn-danger:disabled:hover, .navbar .navbar-nav > li > a.btn.btn-danger:disabled:hover, .btn.btn-danger[disabled]:hover, .navbar .navbar-nav > li > a.btn.btn-danger[disabled]:hover, fieldset[disabled] .btn.btn-danger:hover, fieldset[disabled] .navbar .navbar-nav > li > a.btn.btn-danger:hover, .btn.btn-danger.disabled:focus, .navbar .navbar-nav > li > a.btn.btn-danger.disabled:focus, .btn.btn-danger:disabled:focus, .navbar .navbar-nav > li > a.btn.btn-danger:disabled:focus, .btn.btn-danger[disabled]:focus, .navbar .navbar-nav > li > a.btn.btn-danger[disabled]:focus, fieldset[disabled] .btn.btn-danger:focus, fieldset[disabled] .navbar .navbar-nav > li > a.btn.btn-danger:focus, .btn.btn-danger.disabled.focus, .navbar .navbar-nav > li > a.btn.btn-danger.disabled.focus, .btn.btn-danger:disabled.focus, .navbar .navbar-nav > li > a.btn.btn-danger:disabled.focus, .btn.btn-danger[disabled].focus, .navbar .navbar-nav > li > a.btn.btn-danger[disabled].focus, fieldset[disabled] .btn.btn-danger.focus, fieldset[disabled] .navbar .navbar-nav > li > a.btn.btn-danger.focus, .btn.btn-danger.disabled:active, .navbar .navbar-nav > li > a.btn.btn-danger.disabled:active, .btn.btn-danger:disabled:active, .navbar .navbar-nav > li > a.btn.btn-danger:disabled:active, .btn.btn-danger[disabled]:active, .navbar .navbar-nav > li > a.btn.btn-danger[disabled]:active, fieldset[disabled] .btn.btn-danger:active, fieldset[disabled] .navbar .navbar-nav > li > a.btn.btn-danger:active, .btn.btn-danger.disabled.active, .navbar .navbar-nav > li > a.btn.btn-danger.disabled.active, .btn.btn-danger:disabled.active, .navbar .navbar-nav > li > a.btn.btn-danger:disabled.active, .btn.btn-danger[disabled].active, .navbar .navbar-nav > li > a.btn.btn-danger[disabled].active, fieldset[disabled] .btn.btn-danger.active, fieldset[disabled] .navbar .navbar-nav > li > a.btn.btn-danger.active {
    box-shadow: none; }
  .btn.btn-danger.btn-simple, .navbar .navbar-nav > li > a.btn.btn-danger.btn-simple {
    background-color: transparent;
    color: #f44336;
    box-shadow: none; }
    .btn.btn-danger.btn-simple:hover, .navbar .navbar-nav > li > a.btn.btn-danger.btn-simple:hover, .btn.btn-danger.btn-simple:focus, .navbar .navbar-nav > li > a.btn.btn-danger.btn-simple:focus, .btn.btn-danger.btn-simple:active, .navbar .navbar-nav > li > a.btn.btn-danger.btn-simple:active {
      background-color: transparent;
      color: #f44336; }
  .btn.btn-white, .navbar .navbar-nav > li > a.btn.btn-white, .btn.btn-white:focus, .navbar .navbar-nav > li > a.btn.btn-white:focus, .btn.btn-white:hover, .navbar .navbar-nav > li > a.btn.btn-white:hover {
    background-color: #fff;
    color: #a79e99; }
  .btn.btn-white.btn-simple, .navbar .navbar-nav > li > a.btn.btn-white.btn-simple {
    color: #fff;
    background: transparent;
    box-shadow: none; }
  .btn.btn-facebook, .navbar .navbar-nav > li > a.btn.btn-facebook {
    background-color: #3b5998;
    color: #fff;
    box-shadow: 0 2px 2px 0 rgba(59, 89, 152, 0.14), 0 3px 1px -2px rgba(59, 89, 152, 0.2), 0 1px 5px 0 rgba(59, 89, 152, 0.12); }
  .btn.btn-facebook:focus, .navbar .navbar-nav > li > a.btn.btn-facebook:focus, .btn.btn-facebook:active, .navbar .navbar-nav > li > a.btn.btn-facebook:active, .btn.btn-facebook:hover, .navbar .navbar-nav > li > a.btn.btn-facebook:hover {
    background-color: #3b5998;
    color: #fff;
    box-shadow: 0 14px 26px -12px rgba(59, 89, 152, 0.42), 0 4px 23px 0px rgba(0, 0, 0, 0.12), 0 8px 10px -5px rgba(59, 89, 152, 0.2); }
  .btn.btn-facebook.btn-simple, .navbar .navbar-nav > li > a.btn.btn-facebook.btn-simple {
    color: #3b5998;
    background-color: transparent;
    box-shadow: none; }
  .btn.btn-twitter, .navbar .navbar-nav > li > a.btn.btn-twitter {
    background-color: #55acee;
    color: #fff;
    box-shadow: 0 2px 2px 0 rgba(85, 172, 238, 0.14), 0 3px 1px -2px rgba(85, 172, 238, 0.2), 0 1px 5px 0 rgba(85, 172, 238, 0.12); }
  .btn.btn-twitter:focus, .navbar .navbar-nav > li > a.btn.btn-twitter:focus, .btn.btn-twitter:active, .navbar .navbar-nav > li > a.btn.btn-twitter:active, .btn.btn-twitter:hover, .navbar .navbar-nav > li > a.btn.btn-twitter:hover {
    background-color: #55acee;
    color: #fff;
    box-shadow: 0 14px 26px -12px rgba(85, 172, 238, 0.42), 0 4px 23px 0px rgba(0, 0, 0, 0.12), 0 8px 10px -5px rgba(85, 172, 238, 0.2); }
  .btn.btn-twitter.btn-simple, .navbar .navbar-nav > li > a.btn.btn-twitter.btn-simple {
    color: #55acee;
    background-color: transparent;
    box-shadow: none; }
  .btn.btn-pinterest, .navbar .navbar-nav > li > a.btn.btn-pinterest {
    background-color: #cc2127;
    color: #fff;
    box-shadow: 0 2px 2px 0 rgba(204, 33, 39, 0.14), 0 3px 1px -2px rgba(204, 33, 39, 0.2), 0 1px 5px 0 rgba(204, 33, 39, 0.12); }
  .btn.btn-pinterest:focus, .navbar .navbar-nav > li > a.btn.btn-pinterest:focus, .btn.btn-pinterest:active, .navbar .navbar-nav > li > a.btn.btn-pinterest:active, .btn.btn-pinterest:hover, .navbar .navbar-nav > li > a.btn.btn-pinterest:hover {
    background-color: #cc2127;
    color: #fff;
    box-shadow: 0 14px 26px -12px rgba(204, 33, 39, 0.42), 0 4px 23px 0px rgba(0, 0, 0, 0.12), 0 8px 10px -5px rgba(204, 33, 39, 0.2); }
  .btn.btn-pinterest.btn-simple, .navbar .navbar-nav > li > a.btn.btn-pinterest.btn-simple {
    color: #cc2127;
    background-color: transparent;
    box-shadow: none; }
  .btn.btn-google, .navbar .navbar-nav > li > a.btn.btn-google {
    background-color: #dd4b39;
    color: #fff;
    box-shadow: 0 2px 2px 0 rgba(221, 75, 57, 0.14), 0 3px 1px -2px rgba(221, 75, 57, 0.2), 0 1px 5px 0 rgba(221, 75, 57, 0.12); }
  .btn.btn-google:focus, .navbar .navbar-nav > li > a.btn.btn-google:focus, .btn.btn-google:active, .navbar .navbar-nav > li > a.btn.btn-google:active, .btn.btn-google:hover, .navbar .navbar-nav > li > a.btn.btn-google:hover {
    background-color: #dd4b39;
    color: #fff;
    box-shadow: 0 14px 26px -12px rgba(221, 75, 57, 0.42), 0 4px 23px 0px rgba(0, 0, 0, 0.12), 0 8px 10px -5px rgba(221, 75, 57, 0.2); }
  .btn.btn-google.btn-simple, .navbar .navbar-nav > li > a.btn.btn-google.btn-simple {
    color: #dd4b39;
    background-color: transparent;
    box-shadow: none; }
  .btn.btn-instagram, .navbar .navbar-nav > li > a.btn.btn-instagram {
    background-color: #125688;
    color: #fff;
    box-shadow: 0 2px 2px 0 rgba(18, 86, 136, 0.14), 0 3px 1px -2px rgba(18, 86, 136, 0.2), 0 1px 5px 0 rgba(18, 86, 136, 0.12); }
  .btn.btn-instagram:focus, .navbar .navbar-nav > li > a.btn.btn-instagram:focus, .btn.btn-instagram:active, .navbar .navbar-nav > li > a.btn.btn-instagram:active, .btn.btn-instagram:hover, .navbar .navbar-nav > li > a.btn.btn-instagram:hover {
    background-color: #125688;
    color: #fff;
    box-shadow: 0 14px 26px -12px rgba(18, 86, 136, 0.42), 0 4px 23px 0px rgba(0, 0, 0, 0.12), 0 8px 10px -5px rgba(18, 86, 136, 0.2); }
  .btn.btn-instagram.btn-simple, .navbar .navbar-nav > li > a.btn.btn-instagram.btn-simple {
    color: #125688;
    background-color: transparent;
    box-shadow: none; }
  .btn:focus, .navbar .navbar-nav > li > a.btn:focus, .btn:active, .navbar .navbar-nav > li > a.btn:active, .btn:active:focus, .navbar .navbar-nav > li > a.btn:active:focus {
    outline: 0; }
  .btn.btn-round, .navbar .navbar-nav > li > a.btn.btn-round {
    border-radius: 30px; }
  .btn:not(.btn-just-icon):not(.btn-fab) .fa, .navbar .navbar-nav > li > a.btn:not(.btn-just-icon):not(.btn-fab) .fa {
    font-size: 18px;
    margin-top: -2px;
    position: relative;
    top: 2px; }
  .btn.btn-fab, .navbar .navbar-nav > li > a.btn.btn-fab {
    border-radius: 50%;
    font-size: 24px;
    height: 56px;
    margin: auto;
    min-width: 56px;
    width: 56px;
    padding: 0;
    overflow: hidden;
    position: relative;
    line-height: normal; }
  .btn.btn-fab .ripple-container, .navbar .navbar-nav > li > a.btn.btn-fab .ripple-container {
    border-radius: 50%; }
  .btn.btn-fab.btn-fab-mini, .navbar .navbar-nav > li > a.btn.btn-fab.btn-fab-mini, .btn-group-sm .btn.btn-fab, .btn-group-sm .navbar .navbar-nav > li > a.btn.btn-fab {
    height: 40px;
    min-width: 40px;
    width: 40px; }
    .btn.btn-fab.btn-fab-mini.material-icons, .navbar .navbar-nav > li > a.btn.btn-fab.btn-fab-mini.material-icons, .btn-group-sm .btn.btn-fab.material-icons, .btn-group-sm .navbar .navbar-nav > li > a.btn.btn-fab.material-icons {
      top: -3.5px;
      left: -3.5px; }
    .btn.btn-fab.btn-fab-mini .material-icons, .navbar .navbar-nav > li > a.btn.btn-fab.btn-fab-mini .material-icons, .btn-group-sm .btn.btn-fab .material-icons, .btn-group-sm .navbar .navbar-nav > li > a.btn.btn-fab .material-icons {
      font-size: 17px; }
  .btn.btn-fab i.material-icons, .navbar .navbar-nav > li > a.btn.btn-fab i.material-icons {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-12px, -12px);
    line-height: 24px;
    width: 24px;
    font-size: 24px; }
  .btn.btn-lg, .navbar .navbar-nav > li > a.btn.btn-lg, .btn-group-lg .btn, .btn-group-lg .navbar .navbar-nav > li > a.btn {
    font-size: 14px;
    padding: 18px 36px; }
  .btn.btn-sm, .navbar .navbar-nav > li > a.btn.btn-sm, .btn-group-sm .btn, .btn-group-sm .navbar .navbar-nav > li > a.btn {
    padding: 5px 20px;
    font-size: 11px; }
  .btn.btn-xs, .navbar .navbar-nav > li > a.btn.btn-xs, .btn-group-xs .btn, .btn-group-xs .navbar .navbar-nav > li > a.btn {
    padding: 4px 15px;
    font-size: 10px; }
  .btn.btn-just-icon, .navbar .navbar-nav > li > a.btn.btn-just-icon {
    font-size: 20px;
    padding: 12px 12px;
    line-height: 1em; }
  .btn.btn-just-icon i, .navbar .navbar-nav > li > a.btn.btn-just-icon i {
    width: 20px; }
  .btn.btn-just-icon.btn-lg, .navbar .navbar-nav > li > a.btn.btn-just-icon.btn-lg {
    font-size: 22px;
    padding: 13px 18px; }

.btn .material-icons {
  vertical-align: middle;
  font-size: 17px;
  top: -1px;
  position: relative; }

.navbar .navbar-nav > li > a.btn {
  margin-top: 2px;
  margin-bottom: 2px; }
  .navbar .navbar-nav > li > a.btn.btn-fab {
    margin: 5px 2px; }
  .navbar .navbar-nav > li > a:not(.btn) .material-icons {
    margin-top: -3px;
    top: 0px;
    position: relative;
    margin-right: 3px; }
  .navbar .navbar-nav > li > .profile-photo {
    margin: 5px 2px; }

.navbar-default:not(.navbar-transparent) .navbar-nav > li > a.btn.btn-white.btn-simple {
  color: #6281cd; }

.btn-group, .btn-group-vertical {
  position: relative;
  margin: 10px 1px; }
  .btn-group.open > .dropdown-toggle.btn, .btn-group-vertical.open > .dropdown-toggle.btn, .btn-group.open > .dropdown-toggle.btn.btn-default, .btn-group-vertical.open > .dropdown-toggle.btn.btn-default {
    background-color: #fff; }
    .btn-group.open > .dropdown-toggle.btn.btn-inverse, .btn-group-vertical.open > .dropdown-toggle.btn.btn-inverse {
      background-color: #212121; }
    .btn-group.open > .dropdown-toggle.btn.btn-primary, .btn-group-vertical.open > .dropdown-toggle.btn.btn-primary {
      background-color: #90b6d6; }
    .btn-group.open > .dropdown-toggle.btn.btn-success, .btn-group-vertical.open > .dropdown-toggle.btn.btn-success {
      background-color: #60b178; }
    .btn-group.open > .dropdown-toggle.btn.btn-info, .btn-group-vertical.open > .dropdown-toggle.btn.btn-info {
      background-color: #c5a2b3; }
    .btn-group.open > .dropdown-toggle.btn.btn-warning, .btn-group-vertical.open > .dropdown-toggle.btn.btn-warning {
      background-color: #dea140; }
    .btn-group.open > .dropdown-toggle.btn.btn-danger, .btn-group-vertical.open > .dropdown-toggle.btn.btn-danger {
      background-color: #f44336; }
    .btn-group.open > .dropdown-toggle.btn.btn-rose, .btn-group-vertical.open > .dropdown-toggle.btn.btn-rose {
      background-color: #e91e63; }
  .btn-group .dropdown-menu, .btn-group-vertical .dropdown-menu {
    border-radius: 0 0 3px 3px; }
  .btn-group.btn-group-raised, .btn-group-vertical.btn-group-raised {
    box-shadow: 0 2px 2px 0 rgba(0, 0, 0, 0.14), 0 3px 1px -2px rgba(0, 0, 0, 0.2), 0 1px 5px 0 rgba(0, 0, 0, 0.12); }
  .btn-group .btn + .btn, .btn-group-vertical .btn + .btn, .btn-group .btn, .btn-group-vertical .btn, .btn-group .btn:active, .btn-group-vertical .btn:active, .btn-group .btn-group, .btn-group-vertical .btn-group {
    margin: 0; }

.close {
  font-size: inherit;
  color: #fff;
  opacity: 0.9;
  text-shadow: none; }
  .close:hover, .close:focus {
    opacity: 1;
    color: #fff; }
  .close i {
    font-size: 20px; }

body {
  background-color: #eee;
  color: #203465; }
  body.inverse {
    background: #333; }
  body.inverse, body.inverse .form-control {
    color: #fff; }
  body.inverse .modal, body.inverse .panel-default, body.inverse .card, body.inverse .modal .form-control, body.inverse .panel-default .form-control, body.inverse .card .form-control {
    background-color: initial;
    color: initial; }

.wrapper.wrapper-full-page {
  height: auto;
  min-height: 100vh; }

blockquote p {
  font-style: italic; }

.life-of-material-dashboard {
  background: #fff; }

body, h1, h2, h3, h4, h5, h6, .h1, .h2, .h3, .h4 {
  font-family: 'Roboto', 'Helvetica', 'Arial', sans-serif;
  font-weight: 300;
  line-height: 1.5em; }

.serif-font {
  font-family: 'Roboto Slab', 'Times New Roman', serif; }

.page-header {
  height: 60vh;
  background-position: center center;
  background-size: cover;
  margin: 0;
  padding: 0;
  border: 0;
  border-bottom-left-radius: 6px;
  border-bottom-right-radius: 6px; }

a {
  color: #90b6d6; }
  a:hover, a:focus {
    color: #7daacf;
    text-decoration: none; }
  a.text-info:hover, a.text-info:focus {
    color: #bb92a6; }
  a .material-icons {
    vertical-align: middle; }
/*           Animations              */
.animation-transition-general, .sidebar .nav li > a, .off-canvas-sidebar .nav li > a {
  -webkit-transition: all 300ms linear;
  -moz-transition: all 300ms linear;
  -o-transition: all 300ms linear;
  -ms-transition: all 300ms linear;
  transition: all 300ms linear; }

.animation-transition-slow {
  -webkit-transition: all 370ms linear;
  -moz-transition: all 370ms linear;
  -o-transition: all 370ms linear;
  -ms-transition: all 370ms linear;
  transition: all 370ms linear; }

.animation-transition-fast, .navbar {
  -webkit-transition: all 150ms ease 0s;
  -moz-transition: all 150ms ease 0s;
  -o-transition: all 150ms ease 0s;
  -ms-transition: all 150ms ease 0s;
  transition: all 150ms ease 0s; }

legend {
  border-bottom: 0; }

* {
  -webkit-tap-highlight-color: rgba(255, 255, 255, 0);
  -webkit-tap-highlight-color: transparent; }
  *:focus {
    outline: 0; }

a:focus, a:active, button:active, button:focus, button:hover, button::-moz-focus-inner, input[type="reset"]::-moz-focus-inner, input[type="button"]::-moz-focus-inner, input[type="submit"]::-moz-focus-inner, select::-moz-focus-inner, input[type="file"] > input[type="button"]::-moz-focus-inner {
  outline: 0 !important; }

legend {
  margin-bottom: 20px;
  font-size: 21px; }

output {
  padding-top: 8px;
  font-size: 14px;
  line-height: 1.42857; }

.form-control {
  height: 36px;
  padding: 7px 0;
  font-size: 14px;
  line-height: 1.42857; }

@media screen and (-webkit-min-device-pixel-ratio: 0) {
  input[type="date"].form-control, input[type="time"].form-control, input[type="datetime-local"].form-control, input[type="month"].form-control {
    line-height: 36px; }
    input[type="date"].input-sm, input[type="time"].input-sm, input[type="datetime-local"].input-sm, input[type="month"].input-sm, .input-group-sm input[type="date"], .input-group-sm input[type="time"], .input-group-sm input[type="datetime-local"], .input-group-sm input[type="month"] {
      line-height: 24px; }
    input[type="date"].input-lg, input[type="time"].input-lg, input[type="datetime-local"].input-lg, input[type="month"].input-lg, .input-group-lg input[type="date"], .input-group-lg input[type="time"], .input-group-lg input[type="datetime-local"], .input-group-lg input[type="month"] {
      line-height: 44px; } }

.radio label, .checkbox label {
  min-height: 20px; }

.form-control-static {
  padding-top: 8px;
  padding-bottom: 8px;
  min-height: 34px; }

.input-sm .input-sm {
  height: 24px;
  padding: 3px 0;
  font-size: 11px;
  line-height: 1.5;
  border-radius: 0; }
  .input-sm select.input-sm {
    height: 24px;
    line-height: 24px; }
  .input-sm textarea.input-sm, .input-sm select[multiple].input-sm {
    height: auto; }

.form-group-sm .form-control {
  height: 24px;
  padding: 3px 0;
  font-size: 11px;
  line-height: 1.5; }
  .form-group-sm select.form-control {
    height: 24px;
    line-height: 24px; }
  .form-group-sm textarea.form-control, .form-group-sm select[multiple].form-control {
    height: auto; }
  .form-group-sm .form-control-static {
    height: 24px;
    min-height: 31px;
    padding: 4px 0;
    font-size: 11px;
    line-height: 1.5; }

.input-lg .input-lg {
  height: 44px;
  padding: 9px 0;
  font-size: 18px;
  line-height: 1.33333;
  border-radius: 0; }
  .input-lg select.input-lg {
    height: 44px;
    line-height: 44px; }
  .input-lg textarea.input-lg, .input-lg select[multiple].input-lg {
    height: auto; }

.form-group-lg .form-control {
  height: 44px;
  padding: 9px 0;
  font-size: 18px;
  line-height: 1.33333; }
  .form-group-lg select.form-control {
    height: 44px;
    line-height: 44px; }
  .form-group-lg textarea.form-control, .form-group-lg select[multiple].form-control {
    height: auto; }
  .form-group-lg .form-control-static {
    height: 44px;
    min-height: 38px;
    padding: 10px 0;
    font-size: 18px;
    line-height: 1.33333; }

.form-horizontal .radio, .form-horizontal .checkbox, .form-horizontal .radio-inline, .form-horizontal .checkbox-inline {
  padding-top: 8px; }
  .form-horizontal .radio, .form-horizontal .checkbox {
    min-height: 28px; }
  @media (min-width: 768px) {
  .form-horizontal .control-label {
    padding-top: 8px; } }
  @media (min-width: 768px) {
    .form-horizontal .form-group-lg .control-label {
      padding-top: 13px;
      font-size: 18px; } }
  @media (min-width: 768px) {
    .form-horizontal .form-group-sm .control-label {
      padding-top: 4px;
      font-size: 11px; } }

.label {
  border-radius: 2px; }
  .label, .label.label-default {
    background-color: #fff; }
  .label.label-inverse {
    background-color: #212121; }
  .label.label-primary {
    background-color: #90b6d6; }
  .label.label-success {
    background-color: #60b178; }
  .label.label-info {
    background-color: #c5a2b3; }
  .label.label-warning {
    background-color: #dea140; }
  .label.label-danger {
    background-color: #f44336; }
  .label.label-rose {
    background-color: #e91e63; }

.form-control, .form-group .form-control {
  border: 0;
  background-image: linear-gradient(#90b6d6, #90b6d6), linear-gradient(#d2d2d2, #d2d2d2);
  background-size: 0 2px, 100% 1px;
  background-repeat: no-repeat;
  background-position: center bottom, center calc(100% - 1px);
  background-color: rgba(0, 0, 0, 0);
  transition: background 0s ease-out;
  float: none;
  box-shadow: none;
  border-radius: 0;
  font-weight: 400; }
  .form-control::-moz-placeholder, .form-group .form-control::-moz-placeholder {
    color: #aaa;
    font-weight: 400; }
  .form-control:-ms-input-placeholder, .form-group .form-control:-ms-input-placeholder {
    color: #aaa;
    font-weight: 400; }
  .form-control::-webkit-input-placeholder, .form-group .form-control::-webkit-input-placeholder {
    color: #aaa;
    font-weight: 400; }
  .form-control[readonly], .form-group .form-control[readonly], .form-control[disabled], .form-group .form-control[disabled], fieldset[disabled] .form-control, fieldset[disabled] .form-group .form-control {
    background-color: rgba(0, 0, 0, 0); }
  .form-control[disabled], .form-group .form-control[disabled], fieldset[disabled] .form-control, fieldset[disabled] .form-group .form-control {
    background-image: none;
    border-bottom: 1px dotted #d2d2d2; }

.form-group {
  position: relative; }
  .form-group.label-static label.control-label, .form-group.label-placeholder label.control-label, .form-group.label-floating label.control-label {
    position: absolute;
    pointer-events: none;
    transition: 0.3s ease all; }
  .form-group.label-floating label.control-label {
    will-change: left, top, contents; }
  .form-group.label-placeholder:not(.is-empty) label.control-label {
    display: none; }
  .form-group .help-block {
    position: absolute;
    display: none; }
  .form-group.is-focused .form-control {
    outline: none;
    background-image: linear-gradient(#90b6d6, #90b6d6), linear-gradient(#d2d2d2, #d2d2d2);
    background-size: 100% 2px, 100% 1px;
    box-shadow: none;
    transition-duration: 0.3s; }
    .form-group.is-focused .form-control .material-input:after {
      background-color: #90b6d6; }
  .form-group.is-focused.form-info .form-control {
    background-image: linear-gradient(#c5a2b3, #c5a2b3), linear-gradient(#d2d2d2, #d2d2d2); }
  .form-group.is-focused.form-success .form-control {
    background-image: linear-gradient(#60b178, #60b178), linear-gradient(#d2d2d2, #d2d2d2); }
  .form-group.is-focused.form-warning .form-control {
    background-image: linear-gradient(#dea140, #dea140), linear-gradient(#d2d2d2, #d2d2d2); }
  .form-group.is-focused.form-danger .form-control {
    background-image: linear-gradient(#f44336, #f44336), linear-gradient(#d2d2d2, #d2d2d2); }
  .form-group.is-focused.form-rose .form-control {
    background-image: linear-gradient(#e91e63, #e91e63), linear-gradient(#d2d2d2, #d2d2d2); }
  .form-group.is-focused.form-white .form-control {
    background-image: linear-gradient(#fff, #fff), linear-gradient(#d2d2d2, #d2d2d2); }
  .form-group.is-focused.label-placeholder label, .form-group.is-focused.label-placeholder label.control-label {
    color: #aaa; }
  .form-group.is-focused .help-block {
    display: block; }
  .form-group.has-warning .form-control {
    box-shadow: none; }
  .form-group.has-warning.is-focused .form-control {
    background-image: linear-gradient(#dea140, #dea140), linear-gradient(#d2d2d2, #d2d2d2); }
  .form-group.has-warning label.control-label, .form-group.has-warning .help-block {
    color: #dea140; }
  .form-group.has-error .form-control {
    box-shadow: none; }
  .form-group.has-error.is-focused .form-control {
    background-image: linear-gradient(#f44336, #f44336), linear-gradient(#d2d2d2, #d2d2d2); }
  .form-group.has-error label.control-label, .form-group.has-error .help-block {
    color: #f44336; }
  .form-group.has-success .form-control {
    box-shadow: none; }
  .form-group.has-success.is-focused .form-control {
    background-image: linear-gradient(#60b178, #60b178), linear-gradient(#d2d2d2, #d2d2d2); }
  .form-group.has-success label.control-label, .form-group.has-success .help-block {
    color: #60b178; }
  .form-group.has-info .form-control {
    box-shadow: none; }
  .form-group.has-info.is-focused .form-control {
    background-image: linear-gradient(#c5a2b3, #c5a2b3), linear-gradient(#d2d2d2, #d2d2d2); }
  .form-group.has-info label.control-label, .form-group.has-info .help-block {
    color: #c5a2b3; }
  .form-group textarea {
    resize: none; }
  .form-group textarea ~ .form-control-highlight {
    margin-top: -11px; }
  .form-group select {
    appearance: none; }
  .form-group select ~ .material-input:after {
    display: none; }

.form-control {
  margin-bottom: 7px; }
  .form-control::-moz-placeholder {
    font-size: 14px;
    line-height: 1.42857;
    color: #aaa;
    font-weight: 400; }
  .form-control:-ms-input-placeholder {
    font-size: 14px;
    line-height: 1.42857;
    color: #aaa;
    font-weight: 400; }
  .form-control::-webkit-input-placeholder {
    font-size: 14px;
    line-height: 1.42857;
    color: #aaa;
    font-weight: 400; }

.checkbox label, .radio label, label {
  font-size: 14px;
  line-height: 1.42857;
  color: #aaa;
  font-weight: 400; }

label.control-label {
  font-size: 11px;
  line-height: 1.07143;
  color: #aaa;
  font-weight: 400;
  margin: 16px 0 0 0; }

.help-block {
  margin-top: 0;
  font-size: 11px; }

.form-group {
  padding-bottom: 7px;
  margin: 27px 0 0 0; }
  .form-group .form-control {
    margin-bottom: 7px; }
  .form-group .form-control::-moz-placeholder {
    font-size: 14px;
    line-height: 1.42857;
    color: #aaa;
    font-weight: 400; }
  .form-group .form-control:-ms-input-placeholder {
    font-size: 14px;
    line-height: 1.42857;
    color: #aaa;
    font-weight: 400; }
  .form-group .form-control::-webkit-input-placeholder {
    font-size: 14px;
    line-height: 1.42857;
    color: #aaa;
    font-weight: 400; }
  .form-group .checkbox label, .form-group .radio label, .form-group label {
    font-size: 14px;
    line-height: 1.42857;
    color: #aaa;
    font-weight: 400; }
  .form-group label.control-label {
    font-size: 11px;
    line-height: 1.07143;
    color: #aaa;
    font-weight: 400;
    margin: 16px 0 0 0; }
  .form-group .help-block {
    margin-top: 0;
    font-size: 11px; }
  .form-group.label-floating label.control-label, .form-group.label-placeholder label.control-label {
    top: -7px;
    font-size: 14px;
    line-height: 1.42857; }
  .form-group.label-static label.control-label, .form-group.label-floating.is-focused label.control-label, .form-group.label-floating:not(.is-empty) label.control-label {
    top: -28px;
    left: 0;
    font-size: 11px;
    line-height: 1.07143; }
  .form-group.label-floating input.form-control:-webkit-autofill ~ label.control-label label.control-label {
    top: -28px;
    left: 0;
    font-size: 11px;
    line-height: 1.07143; }

.form-group.form-group-sm {
  padding-bottom: 3px;
  margin: 21px 0 0 0; }
  .form-group.form-group-sm .form-control {
    margin-bottom: 3px; }
  .form-group.form-group-sm .form-control::-moz-placeholder {
    font-size: 11px;
    line-height: 1.5;
    color: #aaa;
    font-weight: 400; }
  .form-group.form-group-sm .form-control:-ms-input-placeholder {
    font-size: 11px;
    line-height: 1.5;
    color: #aaa;
    font-weight: 400; }
  .form-group.form-group-sm .form-control::-webkit-input-placeholder {
    font-size: 11px;
    line-height: 1.5;
    color: #aaa;
    font-weight: 400; }
  .form-group.form-group-sm .checkbox label, .form-group.form-group-sm .radio label, .form-group.form-group-sm label {
    font-size: 11px;
    line-height: 1.5;
    color: #aaa;
    font-weight: 400; }
  .form-group.form-group-sm label.control-label {
    font-size: 9px;
    line-height: 1.125;
    color: #aaa;
    font-weight: 400;
    margin: 16px 0 0 0; }
  .form-group.form-group-sm .help-block {
    margin-top: 0;
    font-size: 9px; }
  .form-group.form-group-sm.label-floating label.control-label, .form-group.form-group-sm.label-placeholder label.control-label {
    top: -11px;
    font-size: 11px;
    line-height: 1.5; }
  .form-group.form-group-sm.label-static label.control-label, .form-group.form-group-sm.label-floating.is-focused label.control-label, .form-group.form-group-sm.label-floating:not(.is-empty) label.control-label {
    top: -25px;
    left: 0;
    font-size: 9px;
    line-height: 1.125; }
  .form-group.form-group-sm.label-floating input.form-control:-webkit-autofill ~ label.control-label label.control-label {
    top: -25px;
    left: 0;
    font-size: 9px;
    line-height: 1.125; }

.form-group.form-group-lg {
  padding-bottom: 9px;
  margin: 30px 0 0 0; }
  .form-group.form-group-lg .form-control {
    margin-bottom: 9px; }
  .form-group.form-group-lg .form-control::-moz-placeholder {
    font-size: 18px;
    line-height: 1.33333;
    color: #aaa;
    font-weight: 400; }
  .form-group.form-group-lg .form-control:-ms-input-placeholder {
    font-size: 18px;
    line-height: 1.33333;
    color: #aaa;
    font-weight: 400; }
  .form-group.form-group-lg .form-control::-webkit-input-placeholder {
    font-size: 18px;
    line-height: 1.33333;
    color: #aaa;
    font-weight: 400; }
  .form-group.form-group-lg .checkbox label, .form-group.form-group-lg .radio label, .form-group.form-group-lg label {
    font-size: 18px;
    line-height: 1.33333;
    color: #aaa;
    font-weight: 400; }
  .form-group.form-group-lg label.control-label {
    font-size: 14px;
    line-height: 1;
    color: #aaa;
    font-weight: 400;
    margin: 16px 0 0 0; }
  .form-group.form-group-lg .help-block {
    margin-top: 0;
    font-size: 14px; }
  .form-group.form-group-lg.label-floating label.control-label, .form-group.form-group-lg.label-placeholder label.control-label {
    top: -5px;
    font-size: 18px;
    line-height: 1.33333; }
  .form-group.form-group-lg.label-static label.control-label, .form-group.form-group-lg.label-floating.is-focused label.control-label, .form-group.form-group-lg.label-floating:not(.is-empty) label.control-label {
    top: -32px;
    left: 0;
    font-size: 14px;
    line-height: 1; }
  .form-group.form-group-lg.label-floating input.form-control:-webkit-autofill ~ label.control-label label.control-label {
    top: -32px;
    left: 0;
    font-size: 14px;
    line-height: 1; }

select.form-control {
  border: 0;
  box-shadow: none;
  border-radius: 0; }
  .form-group.is-focused select.form-control {
    box-shadow: none;
    border-color: #d2d2d2; }
  select.form-control[multiple], .form-group.is-focused select.form-control[multiple] {
    height: 85px; }

.input-group-btn .btn {
  margin: 0 0 7px 0; }

.form-group.form-group-sm .input-group-btn .btn {
  margin: 0 0 3px 0; }
  .form-group.form-group-lg .input-group-btn .btn {
    margin: 0 0 9px 0; }

.input-group .input-group-btn {
  padding: 0 12px; }
  .input-group .input-group-addon {
    border: 0;
    background: transparent;
    padding: 6px 15px 0px; }

.form-group input[type=file] {
  opacity: 0;
  position: absolute;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  width: 100%;
  height: 100%;
  z-index: 100; }

.form-control-feedback {
  opacity: 0; }
  .has-success .form-control-feedback {
    color: #4caf50;
    opacity: 1; }
  .has-error .form-control-feedback {
    color: #f44336;
    opacity: 1; }

.form-horizontal .radio, .form-horizontal .checkbox, .form-horizontal .radio-inline, .form-horizontal .checkbox-inline {
  padding-top: 0; }
  .form-horizontal .radio {
    margin-bottom: 10px; }
  .form-horizontal label {
    text-align: right; }
  .form-horizontal label.control-label {
    margin: 0; }

.form-newsletter .input-group, .form-newsletter .form-group {
  float: left;
  width: 78%;
  margin-right: 2%;
  margin-top: 9px; }
  .form-newsletter .btn {
    float: left;
    width: 20%;
    margin: 9px 0 0; }

.alert {
  border: 0;
  border-radius: 0;
  position: relative;
  padding: 20px 15px;
  line-height: 20px; }
  .alert b {
    font-weight: 500;
    text-transform: uppercase;
    font-size: 12px; }
  .alert, .alert.alert-default {
    background-color: #fff;
    color: #6281cd;
    border-radius: 3px;
    box-shadow: 0 12px 20px -10px rgba(255, 255, 255, 0.28), 0 4px 20px 0px rgba(0, 0, 0, 0.12), 0 7px 8px -5px rgba(255, 255, 255, 0.2); }
  .alert a, .alert.alert-default a, .alert .alert-link, .alert.alert-default .alert-link {
    color: #6281cd; }
  .alert.alert-inverse {
    background-color: #2e2e2e;
    color: #fff;
    border-radius: 3px;
    box-shadow: 0 12px 20px -10px rgba(33, 33, 33, 0.28), 0 4px 20px 0px rgba(0, 0, 0, 0.12), 0 7px 8px -5px rgba(33, 33, 33, 0.2); }
  .alert.alert-inverse a, .alert.alert-inverse .alert-link {
    color: #fff; }
  .alert.alert-primary {
    background-color: #a3c2dd;
    color: #fff;
    border-radius: 3px;
    box-shadow: 0 12px 20px -10px rgba(144, 182, 214, 0.28), 0 4px 20px 0px rgba(0, 0, 0, 0.12), 0 7px 8px -5px rgba(144, 182, 214, 0.2); }
  .alert.alert-primary a, .alert.alert-primary .alert-link {
    color: #fff; }
  .alert.alert-success {
    background-color: #71b987;
    color: #fff;
    border-radius: 3px;
    box-shadow: 0 12px 20px -10px rgba(96, 177, 120, 0.28), 0 4px 20px 0px rgba(0, 0, 0, 0.12), 0 7px 8px -5px rgba(96, 177, 120, 0.2); }
  .alert.alert-success a, .alert.alert-success .alert-link {
    color: #fff; }
  .alert.alert-info {
    background-color: #cfb2c0;
    color: #fff;
    border-radius: 3px;
    box-shadow: 0 12px 20px -10px rgba(197, 162, 179, 0.28), 0 4px 20px 0px rgba(0, 0, 0, 0.12), 0 7px 8px -5px rgba(197, 162, 179, 0.2); }
  .alert.alert-info a, .alert.alert-info .alert-link {
    color: #fff; }
  .alert.alert-warning {
    background-color: #e2ac56;
    color: #fff;
    border-radius: 3px;
    box-shadow: 0 12px 20px -10px rgba(222, 161, 64, 0.28), 0 4px 20px 0px rgba(0, 0, 0, 0.12), 0 7px 8px -5px rgba(222, 161, 64, 0.2); }
  .alert.alert-warning a, .alert.alert-warning .alert-link {
    color: #fff; }
  .alert.alert-danger {
    background-color: #f55a4e;
    color: #fff;
    border-radius: 3px;
    box-shadow: 0 12px 20px -10px rgba(244, 67, 54, 0.28), 0 4px 20px 0px rgba(0, 0, 0, 0.12), 0 7px 8px -5px rgba(244, 67, 54, 0.2); }
  .alert.alert-danger a, .alert.alert-danger .alert-link {
    color: #fff; }
  .alert.alert-rose {
    background-color: #eb3573;
    color: #fff;
    border-radius: 3px;
    box-shadow: 0 12px 20px -10px rgba(233, 30, 99, 0.28), 0 4px 20px 0px rgba(0, 0, 0, 0.12), 0 7px 8px -5px rgba(233, 30, 99, 0.2); }
  .alert.alert-rose a, .alert.alert-rose .alert-link {
    color: #fff; }
  .alert-info, .alert-danger, .alert-warning, .alert-success {
    color: #fff; }
  .alert-default a, .alert-default .alert-link {
    color: rgba(0,0,0, 0.87); }
  .alert i[data-notify="icon"] {
    font-size: 30px;
    display: block;
    left: 15px;
    position: absolute;
    top: 50%;
    margin-top: -15px; }
  .alert span {
    display: block;
    max-width: 89%; }
  .alert .alert-icon {
    display: block;
    float: left;
    margin-right: 15px; }
  .alert .alert-icon i {
    margin-top: -7px;
    top: 5px;
    position: relative; }

.alert.alert-with-icon {
  padding-left: 65px; }

.table > thead > tr > th {
  border-bottom-width: 1px;
  font-size: 1em;
  font-weight: 300; }
  .table .radio, .table .checkbox {
    margin-top: 0;
    margin-bottom: 0;
    margin-left: 10px;
    padding: 0;
    width: 15px; }
  .table .radio .icons, .table .checkbox .icons {
    position: relative; }
  .table > thead > tr > th, .table > tbody > tr > th, .table > tfoot > tr > th, .table > thead > tr > td, .table > tbody > tr > td, .table > tfoot > tr > td {
    padding: 12px 8px;
    vertical-align: middle; }
  .table > thead > tr > th {
    padding-bottom: 4px; }
  .table .td-actions {
    display: flex; }
  .table .td-actions .btn {
    margin: 0px;
    padding: 5px; }
  .table > tbody > tr {
    position: relative; }

.checkbox label {
  cursor: pointer;
  padding-left: 0;
  color: rgba(0,0,0, 0.26); }
  .form-group.is-focused .checkbox label {
    color: rgba(0,0,0, 0.26); }
    .form-group.is-focused .checkbox label:hover, .form-group.is-focused .checkbox label:focus {
      color: rgba(0,0,0, .54); }
    fieldset[disabled] .form-group.is-focused .checkbox label {
      color: rgba(0,0,0, 0.26); }
  .checkbox input[type=checkbox] {
    opacity: 0;
    position: absolute;
    margin: 0;
    z-index: -1;
    width: 0;
    height: 0;
    overflow: hidden;
    left: 0;
    pointer-events: none; }
  .checkbox .checkbox-material {
    vertical-align: middle;
    position: relative;
    top: 3px;
    padding-right: 5px; }
  .checkbox .checkbox-material:before {
    display: block;
    position: absolute;
    left: 0;
    content: "";
    background-color: rgba(0, 0, 0, .84);
    height: 20px;
    width: 20px;
    border-radius: 100%;
    z-index: 1;
    opacity: 0;
    margin: 0;
    transform: scale3d(2.3, 2.3, 1); }
  .checkbox .checkbox-material .check {
    position: relative;
    display: inline-block;
    width: 20px;
    height: 20px;
    border: 1px solid rgba(0,0,0, .54);
    overflow: hidden;
    z-index: 1;
    border-radius: 3px; }
  .checkbox .checkbox-material .check:before {
    position: absolute;
    content: "";
    transform: rotate(45deg);
    display: block;
    margin-top: -3px;
    margin-left: 7px;
    width: 0;
    height: 0;
    background: red;
    box-shadow: 0 0 0 0, 0 0 0 0, 0 0 0 0, 0 0 0 0, 0 0 0 0, 0 0 0 0, 0 0 0 0 inset;
    animation: checkbox-off 0.3s forwards; }
  .checkbox input[type=checkbox]:focus + .checkbox-material .check:after {
    opacity: 0.2; }
  .checkbox input[type=checkbox]:checked + .checkbox-material .check {
    background: #90b6d6; }
    .checkbox input[type=checkbox]:checked + .checkbox-material .check:before {
      color: #fff;
      box-shadow: 0 0 0 10px, 10px -10px 0 10px, 32px 0 0 20px, 0px 32px 0 20px, -5px 5px 0 10px, 20px -12px 0 11px;
      animation: checkbox-on 0.3s forwards; }
    .checkbox input[type=checkbox]:checked + .checkbox-material:before {
      animation: rippleOn 500ms; }
    .checkbox input[type=checkbox]:checked + .checkbox-material .check:after {
      animation: rippleOn 500ms forwards; }
  .checkbox input[type=checkbox]:not(:checked) + .checkbox-material:before {
    animation: rippleOff 500ms; }
    .checkbox input[type=checkbox]:not(:checked) + .checkbox-material .check:after {
      animation: rippleOff 500ms; }
  fieldset[disabled] .checkbox, fieldset[disabled] .checkbox input[type=checkbox], .checkbox input[type=checkbox][disabled] ~ .checkbox-material .check, .checkbox input[type=checkbox][disabled] + .circle {
    opacity: 0.5; }
  .checkbox input[type=checkbox][disabled] ~ .checkbox-material .check {
    border-color: #000;
    opacity: 0.26; }
  .checkbox input[type=checkbox][disabled] + .checkbox-material .check:after {
    background-color: rgba(0,0,0, 0.87);
    transform: rotate(-45deg); }

@keyframes checkbox-on {
  0% {
    box-shadow: 0 0 0 10px, 10px -10px 0 10px, 32px 0 0 20px, 0px 32px 0 20px, -5px 5px 0 10px, 15px 2px 0 11px; }

  50% {
    box-shadow: 0 0 0 10px, 10px -10px 0 10px, 32px 0 0 20px, 0px 32px 0 20px, -5px 5px 0 10px, 20px 2px 0 11px; }

  100% {
    box-shadow: 0 0 0 10px, 10px -10px 0 10px, 32px 0 0 20px, 0px 32px 0 20px, -5px 5px 0 10px, 20px -12px 0 11px; } }

@keyframes rippleOn {
  0% {
    opacity: 0; }

  50% {
    opacity: 0.2; }

  100% {
    opacity: 0; } }

@keyframes rippleOff {
  0% {
    opacity: 0; }

  50% {
    opacity: 0.2; }

  100% {
    opacity: 0; } }

.radio label {
  cursor: pointer;
  padding-left: 35px;
  position: relative;
  color: rgba(0,0,0, 0.26); }
  .form-group.is-focused .radio label {
    color: rgba(0,0,0, 0.26); }
    .form-group.is-focused .radio label:hover, .form-group.is-focused .radio label:focus {
      color: rgba(0,0,0, .54); }
    fieldset[disabled] .form-group.is-focused .radio label {
      color: rgba(0,0,0, 0.26); }
  .radio label span {
    display: block;
    position: absolute;
    left: 10px;
    top: 2px;
    transition-duration: 0.2s; }
  .radio label .circle {
    border: 1px solid rgba(0,0,0, .54);
    height: 15px;
    width: 15px;
    border-radius: 100%; }
  .radio label .check {
    height: 15px;
    width: 15px;
    border-radius: 100%;
    background-color: #90b6d6;
    transform: scale3d(0, 0, 0); }
  .radio label .check:after {
    display: block;
    position: absolute;
    content: "";
    background-color: rgba(0,0,0, 0.87);
    left: -18px;
    top: -18px;
    height: 50px;
    width: 50px;
    border-radius: 100%;
    z-index: 1;
    opacity: 0;
    margin: 0;
    transform: scale3d(1.5, 1.5, 1); }
  .radio label input[type=radio]:not(:checked) ~ .check:after {
    animation: rippleOff 500ms; }
  .radio label input[type=radio]:checked ~ .check:after {
    animation: rippleOn 500ms; }
  .radio input[type=radio] {
    opacity: 0;
    height: 0;
    width: 0;
    overflow: hidden; }
  .radio input[type=radio]:checked ~ .check, .radio input[type=radio]:checked ~ .circle {
    opacity: 1; }
    .radio input[type=radio]:checked ~ .check {
      background-color: #90b6d6; }
    .radio input[type=radio]:checked ~ .circle {
      border-color: #90b6d6; }
  .radio input[type=radio]:checked ~ .check {
    transform: scale3d(0.65, 0.65, 1); }
  .radio input[type=radio][disabled] ~ .check, .radio input[type=radio][disabled] ~ .circle {
    opacity: 0.26; }
  .radio input[type=radio][disabled] ~ .check {
    background-color: #000; }
  .radio input[type=radio][disabled] ~ .circle {
    border-color: #000; }

@keyframes rippleOn {
  0% {
    opacity: 0; }

  50% {
    opacity: 0.2; }

  100% {
    opacity: 0; } }

@keyframes rippleOff {
  0% {
    opacity: 0; }

  50% {
    opacity: 0.2; }

  100% {
    opacity: 0; } }

.togglebutton {
  vertical-align: middle; }
  .togglebutton, .togglebutton label, .togglebutton input, .togglebutton .toggle {
    user-select: none; }
  .togglebutton label {
    cursor: pointer;
    color: rgba(0,0,0, 0.26); }
  .form-group.is-focused .togglebutton label {
    color: rgba(0,0,0, 0.26); }
    .form-group.is-focused .togglebutton label:hover, .form-group.is-focused .togglebutton label:focus {
      color: rgba(0,0,0, .54); }
    fieldset[disabled] .form-group.is-focused .togglebutton label {
      color: rgba(0,0,0, 0.26); }
  .togglebutton label input[type=checkbox] {
    opacity: 0;
    width: 0;
    height: 0; }
  .togglebutton label .toggle {
    text-align: left;
    margin-left: 5px; }
  .togglebutton label .toggle, .togglebutton label input[type=checkbox][disabled] + .toggle {
    content: "";
    display: inline-block;
    width: 30px;
    height: 15px;
    background-color: rgba(80, 80, 80, 0.7);
    border-radius: 15px;
    margin-right: 15px;
    transition: background 0.3s ease;
    vertical-align: middle; }
  .togglebutton label .toggle:after {
    content: "";
    display: inline-block;
    width: 20px;
    height: 20px;
    background-color: #fff;
    border-radius: 20px;
    position: relative;
    box-shadow: 0 1px 3px 1px rgba(0, 0, 0, 0.4);
    left: -5px;
    top: -3px;
    border: 1px solid rgba(0,0,0, .54);
    transition: left 0.3s ease, background 0.3s ease, box-shadow 0.1s ease; }
  .togglebutton label input[type=checkbox][disabled] + .toggle:after, .togglebutton label input[type=checkbox][disabled]:checked + .toggle:after {
    background-color: #bdbdbd; }
    .togglebutton label input[type=checkbox] + .toggle:active:after, .togglebutton label input[type=checkbox][disabled] + .toggle:active:after {
      box-shadow: 0 1px 3px 1px rgba(0, 0, 0, 0.4), 0 0 0 15px rgba(0, 0, 0, 0.1); }
    .togglebutton label input[type=checkbox]:checked + .toggle:after {
      left: 15px; }
  .togglebutton label input[type=checkbox]:checked + .toggle {
    background-color: rgba(144, 182, 214, 0.7); }
    .togglebutton label input[type=checkbox]:checked + .toggle:after {
      border-color: #90b6d6; }
    .togglebutton label input[type=checkbox]:checked + .toggle:active:after {
      box-shadow: 0 1px 3px 1px rgba(0, 0, 0, 0.4), 0 0 0 15px rgba(144, 182, 214, 0.1); }

.withripple {
  position: relative; }

.ripple-container {
  position: absolute;
  top: 0;
  left: 0;
  z-index: 1;
  width: 100%;
  height: 100%;
  overflow: hidden;
  border-radius: inherit;
  pointer-events: none; }
  .disabled .ripple-container {
    display: none; }

.ripple {
  position: absolute;
  width: 20px;
  height: 20px;
  margin-left: -10px;
  margin-top: -10px;
  border-radius: 100%;
  background-color: #000;
  background-color: rgba(0, 0, 0, 0.05);
  transform: scale(1);
  transform-origin: 50%;
  opacity: 0;
  pointer-events: none; }

.ripple.ripple-on {
  transition: opacity 0.15s ease-in 0s, transform 0.5s cubic-bezier(0.4, 0, 0.2, 1) 0.1s;
  opacity: 0.1; }

.ripple.ripple-out {
  transition: opacity 0.1s linear 0s !important;
  opacity: 0; }

.section-dark .nav-pills > li > a, .section-image .nav-pills > li > a {
  color: #999; }
  .section-dark .nav-pills > li > a:hover, .section-image .nav-pills > li > a:hover, .section-dark .nav-pills > li > a:focus, .section-image .nav-pills > li > a:focus {
    background-color: #eee; }
  .nav-pills > li > a {
    line-height: 24px;
    text-transform: uppercase;
    font-size: 12px;
    font-weight: 500;
    min-width: 100px;
    text-align: center;
    color: #6281cd;
    transition: all 0.3s; }
    .nav-pills > li > a:hover {
      background-color: rgba(200, 200, 200, 0.2); }
  .nav-pills > li i {
    display: block;
    font-size: 30px;
    padding: 15px 0; }
  .nav-pills > li.active > a, .nav-pills > li.active > a:focus, .nav-pills > li.active > a:hover {
    background-color: #90b6d6;
    color: #fff;
    box-shadow: 0 12px 20px -10px rgba(144, 182, 214, 0.28), 0 4px 20px 0px rgba(0, 0, 0, 0.12), 0 7px 8px -5px rgba(144, 182, 214, 0.2); }
  .nav-pills:not(.nav-pills-icons) > li > a {
    border-radius: 30px; }
  .nav-pills.nav-stacked > li + li {
    margin-top: 5px; }
  .nav-pills.nav-pills-info > li.active > a, .nav-pills.nav-pills-info > li.active > a:focus, .nav-pills.nav-pills-info > li.active > a:hover {
    background-color: #c5a2b3;
    box-shadow: 0 12px 20px -10px rgba(197, 162, 179, 0.28), 0 4px 20px 0px rgba(0, 0, 0, 0.12), 0 7px 8px -5px rgba(197, 162, 179, 0.2); }
  .nav-pills.nav-pills-success > li.active > a, .nav-pills.nav-pills-success > li.active > a:focus, .nav-pills.nav-pills-success > li.active > a:hover {
    background-color: #60b178;
    box-shadow: 0 12px 20px -10px rgba(96, 177, 120, 0.28), 0 4px 20px 0px rgba(0, 0, 0, 0.12), 0 7px 8px -5px rgba(96, 177, 120, 0.2); }
  .nav-pills.nav-pills-warning > li.active > a, .nav-pills.nav-pills-warning > li.active > a:focus, .nav-pills.nav-pills-warning > li.active > a:hover {
    background-color: #dea140;
    box-shadow: 0 12px 20px -10px rgba(222, 161, 64, 0.28), 0 4px 20px 0px rgba(0, 0, 0, 0.12), 0 7px 8px -5px rgba(222, 161, 64, 0.2); }
  .nav-pills.nav-pills-danger > li.active > a, .nav-pills.nav-pills-danger > li.active > a:focus, .nav-pills.nav-pills-danger > li.active > a:hover {
    background-color: #f44336;
    box-shadow: 0 12px 20px -10px rgba(222, 161, 64, 0.28), 0 4px 20px 0px rgba(0, 0, 0, 0.12), 0 7px 8px -5px rgba(222, 161, 64, 0.2); }

.tab-space {
  padding: 20px 0 50px 0px; }

.modal-content {
  box-shadow: 0 27px 24px 0 rgba(0, 0, 0, 0.2), 0 40px 77px 0 rgba(0, 0, 0, 0.22);
  border-radius: 6px;
  border: none; }
  .modal-content .modal-header {
    border-bottom: none;
    padding-top: 24px;
    padding-right: 24px;
    padding-bottom: 0;
    padding-left: 24px; }
  .modal-content .modal-body {
    padding-top: 24px;
    padding-right: 24px;
    padding-bottom: 16px;
    padding-left: 24px; }
  .modal-content .modal-footer {
    border-top: none;
    padding: 7px; }
  .modal-content .modal-footer.text-center {
    text-align: center; }
  .modal-content .modal-footer button {
    margin: 0;
    padding-left: 16px;
    padding-right: 16px;
    width: auto; }
    .modal-content .modal-footer button.pull-left {
      padding-left: 5px;
      padding-right: 5px;
      position: relative;
      left: -5px; }
  .modal-content .modal-footer button + button {
    margin-bottom: 16px; }
  .modal-content .modal-body + .modal-footer {
    padding-top: 0; }

.modal-backdrop {
  background: rgba(0, 0, 0, 0.3); }

.modal .modal-dialog {
  margin-top: 100px; }
  .modal .modal-header .close {
    color: #a79e99; }
  .modal .modal-header .close:hover, .modal .modal-header .close:focus {
    opacity: 1; }
  .modal .modal-header .close i {
    font-size: 16px; }

.modal-notice .instruction {
  margin-bottom: 25px; }
  .modal-notice .picture {
    max-width: 150px; }
  .modal-notice .modal-content .btn-raised {
    margin-bottom: 15px; }

.modal-small {
  width: 300px; }
  .modal-small .modal-body {
    margin-top: 20px; }

.navbar {
  border: 0;
  border-radius: 3px;
  border-bottom: 1px solid #ededf3;
  padding: 10px 0; }
  .navbar .navbar-brand {
    position: relative;
    height: 50px;
    line-height: 30px;
    color: inherit;
    padding: 10px 15px; }
  .navbar .navbar-brand:hover, .navbar .navbar-brand:focus {
    color: inherit;
    background-color: transparent; }
  .navbar .notification {
    position: absolute;
    top: 5px;
    border: 1px solid #fff;
    right: 10px;
    font-size: 9px;
    background: #f44336;
    color: #fff;
    min-width: 20px;
    padding: 0px 5px;
    height: 20px;
    border-radius: 10px;
    text-align: center;
    line-height: 19px;
    vertical-align: middle;
    display: block; }
  .navbar .navbar-text {
    color: inherit;
    margin-top: 15px;
    margin-bottom: 15px; }
  .navbar .navbar-nav > li > a {
    color: inherit;
    padding-top: 15px;
    padding-bottom: 15px;
    font-weight: 400;
    font-size: 12px;
    text-transform: uppercase;
    border-radius: 3px; }
    .navbar .navbar-nav > li > a:hover, .navbar .navbar-nav > li > a:focus {
      color: inherit;
      background-color: transparent; }
    .navbar .navbar-nav > li > a .material-icons, .navbar .navbar-nav > li > a .fa {
      font-size: 20px; }
    .navbar .navbar-nav > li > a.btn:not(.btn-just-icon) .fa {
      position: relative;
      top: 2px;
      margin-top: -4px;
      margin-right: 4px; }
  .navbar .navbar-nav > li > .dropdown-menu {
    margin-top: -20px; }
  .navbar .navbar-nav > li.open > .dropdown-menu {
    margin-top: 0; }
  .navbar .navbar-nav > .active > a, .navbar .navbar-nav > .active > a:hover, .navbar .navbar-nav > .active > a:focus {
    color: inherit;
    background-color: rgba(255, 255, 255, 0.1); }
  .navbar .navbar-nav > .disabled > a, .navbar .navbar-nav > .disabled > a:hover, .navbar .navbar-nav > .disabled > a:focus {
    color: inherit;
    background-color: transparent;
    opacity: 0.9; }
  .navbar .navbar-nav .profile-photo {
    padding: 0 5px 0; }
    .navbar .navbar-nav .profile-photo .profile-photo-small {
      height: 40px;
      width: 40px; }
  .navbar .navbar-toggle {
    border: 0; }
  .navbar .navbar-toggle:hover, .navbar .navbar-toggle:focus {
    background-color: transparent; }
  .navbar .navbar-toggle .icon-bar {
    background-color: inherit;
    border: 1px solid; }
  .navbar .navbar-default .navbar-toggle, .navbar .navbar-inverse .navbar-toggle {
    border-color: transparent; }
  .navbar .navbar-collapse, .navbar .navbar-form {
    border-top: none;
    box-shadow: none; }
  .navbar .navbar-nav > .open > a, .navbar .navbar-nav > .open > a:hover, .navbar .navbar-nav > .open > a:focus {
    background-color: transparent;
    color: inherit; }
  @media (max-width: 767px) {
    .navbar .navbar-nav .navbar-text {
      color: inherit;
      margin-top: 15px;
      margin-bottom: 15px; }

    .navbar .navbar-nav .open .dropdown-menu > .dropdown-header {
      border: 0;
      color: inherit; }
      .navbar .navbar-nav .open .dropdown-menu .divider {
        border-bottom: 1px solid;
        opacity: 0.08; }
      .navbar .navbar-nav .open .dropdown-menu > li > a {
        color: inherit; }
        .navbar .navbar-nav .open .dropdown-menu > li > a:hover, .navbar .navbar-nav .open .dropdown-menu > li > a:focus {
          color: inherit;
          background-color: transparent; }
      .navbar .navbar-nav .open .dropdown-menu > .active > a, .navbar .navbar-nav .open .dropdown-menu > .active > a:hover, .navbar .navbar-nav .open .dropdown-menu > .active > a:focus {
        color: inherit;
        background-color: transparent; }
      .navbar .navbar-nav .open .dropdown-menu > .disabled > a, .navbar .navbar-nav .open .dropdown-menu > .disabled > a:hover, .navbar .navbar-nav .open .dropdown-menu > .disabled > a:focus {
        color: inherit;
        background-color: transparent; } }
  .navbar.navbar-default .logo-container .brand {
    color: #6281cd; }
  .navbar .navbar-link {
    color: inherit; }
  .navbar .navbar-link:hover {
    color: inherit; }
  .navbar .btn {
    margin-top: 0;
    margin-bottom: 0; }
  .navbar .btn-link {
    color: inherit; }
  .navbar .btn-link:hover, .navbar .btn-link:focus {
    color: inherit; }
  .navbar .btn-link[disabled]:hover, fieldset[disabled] .navbar .btn-link:hover, .navbar .btn-link[disabled]:focus, fieldset[disabled] .navbar .btn-link:focus {
    color: inherit; }
  .navbar .navbar-form {
    margin: 4px 0 0; }
  .navbar .navbar-form .form-group {
    margin: 0;
    padding: 0; }
    .navbar .navbar-form .form-group .material-input:before, .navbar .navbar-form .form-group.is-focused .material-input:after {
      background-color: inherit; }
  .navbar .navbar-form .form-group .form-control, .navbar .navbar-form .form-control {
    border-color: inherit;
    color: inherit;
    padding: 0;
    margin: 0;
    height: 28px;
    font-size: 14px;
    line-height: 1.42857; }
  .navbar, .navbar.navbar-default {
    background-color: #fff;
    color: #6281cd; }
  .navbar .navbar-form .form-group input.form-control::-moz-placeholder, .navbar.navbar-default .navbar-form .form-group input.form-control::-moz-placeholder, .navbar .navbar-form input.form-control::-moz-placeholder, .navbar.navbar-default .navbar-form input.form-control::-moz-placeholder {
    color: #6281cd; }
    .navbar .navbar-form .form-group input.form-control:-ms-input-placeholder, .navbar.navbar-default .navbar-form .form-group input.form-control:-ms-input-placeholder, .navbar .navbar-form input.form-control:-ms-input-placeholder, .navbar.navbar-default .navbar-form input.form-control:-ms-input-placeholder {
      color: #6281cd; }
    .navbar .navbar-form .form-group input.form-control::-webkit-input-placeholder, .navbar.navbar-default .navbar-form .form-group input.form-control::-webkit-input-placeholder, .navbar .navbar-form input.form-control::-webkit-input-placeholder, .navbar.navbar-default .navbar-form input.form-control::-webkit-input-placeholder {
      color: #6281cd; }
  .navbar .dropdown-menu, .navbar.navbar-default .dropdown-menu {
    border-radius: 3px !important; }
    .navbar .dropdown-menu li > a:hover, .navbar.navbar-default .dropdown-menu li > a:hover, .navbar .dropdown-menu li > a:focus, .navbar.navbar-default .dropdown-menu li > a:focus {
      color: #fff;
      background-color: #fff;
      box-shadow: 0 12px 20px -10px rgba(255, 255, 255, 0.28), 0 4px 20px 0px rgba(0, 0, 0, 0.12), 0 7px 8px -5px rgba(255, 255, 255, 0.2); }
    .navbar .dropdown-menu .active > a, .navbar.navbar-default .dropdown-menu .active > a {
      background-color: #fff;
      color: #6281cd;
      box-shadow: 0 12px 20px -10px rgba(255, 255, 255, 0.28), 0 4px 20px 0px rgba(0, 0, 0, 0.12), 0 7px 8px -5px rgba(255, 255, 255, 0.2); }
      .navbar .dropdown-menu .active > a:hover, .navbar.navbar-default .dropdown-menu .active > a:hover, .navbar .dropdown-menu .active > a:focus, .navbar.navbar-default .dropdown-menu .active > a:focus {
        color: #6281cd; }
  .navbar.navbar-inverse {
    background-color: #212121;
    color: #fff; }
  .navbar.navbar-inverse .navbar-form .form-group input.form-control::-moz-placeholder, .navbar.navbar-inverse .navbar-form input.form-control::-moz-placeholder {
    color: #fff; }
    .navbar.navbar-inverse .navbar-form .form-group input.form-control:-ms-input-placeholder, .navbar.navbar-inverse .navbar-form input.form-control:-ms-input-placeholder {
      color: #fff; }
    .navbar.navbar-inverse .navbar-form .form-group input.form-control::-webkit-input-placeholder, .navbar.navbar-inverse .navbar-form input.form-control::-webkit-input-placeholder {
      color: #fff; }
  .navbar.navbar-inverse .dropdown-menu {
    border-radius: 3px !important; }
    .navbar.navbar-inverse .dropdown-menu li > a:hover, .navbar.navbar-inverse .dropdown-menu li > a:focus {
      color: #fff;
      background-color: #212121;
      box-shadow: 0 12px 20px -10px rgba(33, 33, 33, 0.28), 0 4px 20px 0px rgba(0, 0, 0, 0.12), 0 7px 8px -5px rgba(33, 33, 33, 0.2); }
    .navbar.navbar-inverse .dropdown-menu .active > a {
      background-color: #212121;
      color: #fff;
      box-shadow: 0 12px 20px -10px rgba(33, 33, 33, 0.28), 0 4px 20px 0px rgba(0, 0, 0, 0.12), 0 7px 8px -5px rgba(33, 33, 33, 0.2); }
      .navbar.navbar-inverse .dropdown-menu .active > a:hover, .navbar.navbar-inverse .dropdown-menu .active > a:focus {
        color: #fff; }
  .navbar.navbar-primary {
    background-color: #90b6d6;
    color: #fff; }
  .navbar.navbar-primary .navbar-form .form-group input.form-control::-moz-placeholder, .navbar.navbar-primary .navbar-form input.form-control::-moz-placeholder {
    color: #fff; }
    .navbar.navbar-primary .navbar-form .form-group input.form-control:-ms-input-placeholder, .navbar.navbar-primary .navbar-form input.form-control:-ms-input-placeholder {
      color: #fff; }
    .navbar.navbar-primary .navbar-form .form-group input.form-control::-webkit-input-placeholder, .navbar.navbar-primary .navbar-form input.form-control::-webkit-input-placeholder {
      color: #fff; }
  .navbar.navbar-primary .dropdown-menu {
    border-radius: 3px !important; }
    .navbar.navbar-primary .dropdown-menu li > a:hover, .navbar.navbar-primary .dropdown-menu li > a:focus {
      color: #fff;
      background-color: #90b6d6;
      box-shadow: 0 12px 20px -10px rgba(144, 182, 214, 0.28), 0 4px 20px 0px rgba(0, 0, 0, 0.12), 0 7px 8px -5px rgba(144, 182, 214, 0.2); }
    .navbar.navbar-primary .dropdown-menu .active > a {
      background-color: #90b6d6;
      color: #fff;
      box-shadow: 0 12px 20px -10px rgba(144, 182, 214, 0.28), 0 4px 20px 0px rgba(0, 0, 0, 0.12), 0 7px 8px -5px rgba(144, 182, 214, 0.2); }
      .navbar.navbar-primary .dropdown-menu .active > a:hover, .navbar.navbar-primary .dropdown-menu .active > a:focus {
        color: #fff; }
  .navbar.navbar-success {
    background-color: #60b178;
    color: #fff; }
  .navbar.navbar-success .navbar-form .form-group input.form-control::-moz-placeholder, .navbar.navbar-success .navbar-form input.form-control::-moz-placeholder {
    color: #fff; }
    .navbar.navbar-success .navbar-form .form-group input.form-control:-ms-input-placeholder, .navbar.navbar-success .navbar-form input.form-control:-ms-input-placeholder {
      color: #fff; }
    .navbar.navbar-success .navbar-form .form-group input.form-control::-webkit-input-placeholder, .navbar.navbar-success .navbar-form input.form-control::-webkit-input-placeholder {
      color: #fff; }
  .navbar.navbar-success .dropdown-menu {
    border-radius: 3px !important; }
    .navbar.navbar-success .dropdown-menu li > a:hover, .navbar.navbar-success .dropdown-menu li > a:focus {
      color: #fff;
      background-color: #60b178;
      box-shadow: 0 12px 20px -10px rgba(96, 177, 120, 0.28), 0 4px 20px 0px rgba(0, 0, 0, 0.12), 0 7px 8px -5px rgba(96, 177, 120, 0.2); }
    .navbar.navbar-success .dropdown-menu .active > a {
      background-color: #60b178;
      color: #fff;
      box-shadow: 0 12px 20px -10px rgba(96, 177, 120, 0.28), 0 4px 20px 0px rgba(0, 0, 0, 0.12), 0 7px 8px -5px rgba(96, 177, 120, 0.2); }
      .navbar.navbar-success .dropdown-menu .active > a:hover, .navbar.navbar-success .dropdown-menu .active > a:focus {
        color: #fff; }
  .navbar.navbar-info {
    background-color: #c5a2b3;
    color: #fff; }
  .navbar.navbar-info .navbar-form .form-group input.form-control::-moz-placeholder, .navbar.navbar-info .navbar-form input.form-control::-moz-placeholder {
    color: #fff; }
    .navbar.navbar-info .navbar-form .form-group input.form-control:-ms-input-placeholder, .navbar.navbar-info .navbar-form input.form-control:-ms-input-placeholder {
      color: #fff; }
    .navbar.navbar-info .navbar-form .form-group input.form-control::-webkit-input-placeholder, .navbar.navbar-info .navbar-form input.form-control::-webkit-input-placeholder {
      color: #fff; }
  .navbar.navbar-info .dropdown-menu {
    border-radius: 3px !important; }
    .navbar.navbar-info .dropdown-menu li > a:hover, .navbar.navbar-info .dropdown-menu li > a:focus {
      color: #fff;
      background-color: #c5a2b3;
      box-shadow: 0 12px 20px -10px rgba(197, 162, 179, 0.28), 0 4px 20px 0px rgba(0, 0, 0, 0.12), 0 7px 8px -5px rgba(197, 162, 179, 0.2); }
    .navbar.navbar-info .dropdown-menu .active > a {
      background-color: #c5a2b3;
      color: #fff;
      box-shadow: 0 12px 20px -10px rgba(197, 162, 179, 0.28), 0 4px 20px 0px rgba(0, 0, 0, 0.12), 0 7px 8px -5px rgba(197, 162, 179, 0.2); }
      .navbar.navbar-info .dropdown-menu .active > a:hover, .navbar.navbar-info .dropdown-menu .active > a:focus {
        color: #fff; }
  .navbar.navbar-warning {
    background-color: #dea140;
    color: #fff; }
  .navbar.navbar-warning .navbar-form .form-group input.form-control::-moz-placeholder, .navbar.navbar-warning .navbar-form input.form-control::-moz-placeholder {
    color: #fff; }
    .navbar.navbar-warning .navbar-form .form-group input.form-control:-ms-input-placeholder, .navbar.navbar-warning .navbar-form input.form-control:-ms-input-placeholder {
      color: #fff; }
    .navbar.navbar-warning .navbar-form .form-group input.form-control::-webkit-input-placeholder, .navbar.navbar-warning .navbar-form input.form-control::-webkit-input-placeholder {
      color: #fff; }
  .navbar.navbar-warning .dropdown-menu {
    border-radius: 3px !important; }
    .navbar.navbar-warning .dropdown-menu li > a:hover, .navbar.navbar-warning .dropdown-menu li > a:focus {
      color: #fff;
      background-color: #dea140;
      box-shadow: 0 12px 20px -10px rgba(222, 161, 64, 0.28), 0 4px 20px 0px rgba(0, 0, 0, 0.12), 0 7px 8px -5px rgba(222, 161, 64, 0.2); }
    .navbar.navbar-warning .dropdown-menu .active > a {
      background-color: #dea140;
      color: #fff;
      box-shadow: 0 12px 20px -10px rgba(222, 161, 64, 0.28), 0 4px 20px 0px rgba(0, 0, 0, 0.12), 0 7px 8px -5px rgba(222, 161, 64, 0.2); }
      .navbar.navbar-warning .dropdown-menu .active > a:hover, .navbar.navbar-warning .dropdown-menu .active > a:focus {
        color: #fff; }
  .navbar.navbar-danger {
    background-color: #f44336;
    color: #fff; }
  .navbar.navbar-danger .navbar-form .form-group input.form-control::-moz-placeholder, .navbar.navbar-danger .navbar-form input.form-control::-moz-placeholder {
    color: #fff; }
    .navbar.navbar-danger .navbar-form .form-group input.form-control:-ms-input-placeholder, .navbar.navbar-danger .navbar-form input.form-control:-ms-input-placeholder {
      color: #fff; }
    .navbar.navbar-danger .navbar-form .form-group input.form-control::-webkit-input-placeholder, .navbar.navbar-danger .navbar-form input.form-control::-webkit-input-placeholder {
      color: #fff; }
  .navbar.navbar-danger .dropdown-menu {
    border-radius: 3px !important; }
    .navbar.navbar-danger .dropdown-menu li > a:hover, .navbar.navbar-danger .dropdown-menu li > a:focus {
      color: #fff;
      background-color: #f44336;
      box-shadow: 0 12px 20px -10px rgba(244, 67, 54, 0.28), 0 4px 20px 0px rgba(0, 0, 0, 0.12), 0 7px 8px -5px rgba(244, 67, 54, 0.2); }
    .navbar.navbar-danger .dropdown-menu .active > a {
      background-color: #f44336;
      color: #fff;
      box-shadow: 0 12px 20px -10px rgba(244, 67, 54, 0.28), 0 4px 20px 0px rgba(0, 0, 0, 0.12), 0 7px 8px -5px rgba(244, 67, 54, 0.2); }
      .navbar.navbar-danger .dropdown-menu .active > a:hover, .navbar.navbar-danger .dropdown-menu .active > a:focus {
        color: #fff; }
  .navbar.navbar-rose {
    background-color: #e91e63;
    color: #fff; }
  .navbar.navbar-rose .navbar-form .form-group input.form-control::-moz-placeholder, .navbar.navbar-rose .navbar-form input.form-control::-moz-placeholder {
    color: #fff; }
    .navbar.navbar-rose .navbar-form .form-group input.form-control:-ms-input-placeholder, .navbar.navbar-rose .navbar-form input.form-control:-ms-input-placeholder {
      color: #fff; }
    .navbar.navbar-rose .navbar-form .form-group input.form-control::-webkit-input-placeholder, .navbar.navbar-rose .navbar-form input.form-control::-webkit-input-placeholder {
      color: #fff; }
  .navbar.navbar-rose .dropdown-menu {
    border-radius: 3px !important; }
    .navbar.navbar-rose .dropdown-menu li > a:hover, .navbar.navbar-rose .dropdown-menu li > a:focus {
      color: #fff;
      background-color: #e91e63;
      box-shadow: 0 12px 20px -10px rgba(233, 30, 99, 0.28), 0 4px 20px 0px rgba(0, 0, 0, 0.12), 0 7px 8px -5px rgba(233, 30, 99, 0.2); }
    .navbar.navbar-rose .dropdown-menu .active > a {
      background-color: #e91e63;
      color: #fff;
      box-shadow: 0 12px 20px -10px rgba(233, 30, 99, 0.28), 0 4px 20px 0px rgba(0, 0, 0, 0.12), 0 7px 8px -5px rgba(233, 30, 99, 0.2); }
      .navbar.navbar-rose .dropdown-menu .active > a:hover, .navbar.navbar-rose .dropdown-menu .active > a:focus {
        color: #fff; }
  .navbar-inverse {
    background-color: #3f51b5; }
  .navbar.navbar-transparent {
    background-color: transparent;
    box-shadow: none;
    border-bottom: 0; }
  .navbar.navbar-transparent .logo-container .brand {
    color: #fff; }
  .navbar-fixed-top {
    border-radius: 0; }
  @media (max-width: 1199px) {
  .navbar {
    /*
     .navbar-form {
     margin-top: 10px;
     }
     */ }
    .navbar .navbar-brand {
      height: 50px;
      padding: 10px 15px; }

    .navbar .navbar-nav > li > a {
      padding-top: 15px;
      padding-bottom: 15px; } }
  .navbar .alert {
    border-radius: 0;
    left: 0;
    position: absolute;
    right: 0;
    top: 85px;
    width: 100%;
    z-index: 3;
    transition: all 0.3s; }

.nav-align-center {
  text-align: center; }
  .nav-align-center .nav-pills {
    display: inline-block; }

.navbar-absolute {
  position: absolute;
  width: 100%;
  padding-top: 10px;
  z-index: 1029; }

.popover, .tooltip-inner {
  color: #6281cd;
  line-height: 1.5em;
  background: #fff;
  border: none;
  border-radius: 3px;
  box-shadow: 0 8px 10px 1px rgba(0, 0, 0, 0.14), 0 3px 14px 2px rgba(0, 0, 0, 0.12), 0 5px 5px -3px rgba(0, 0, 0, 0.2); }

.popover {
  padding: 0;
  box-shadow: 0 16px 24px 2px rgba(0, 0, 0, 0.14), 0 6px 30px 5px rgba(0, 0, 0, 0.12), 0 8px 10px -5px rgba(0, 0, 0, 0.2); }
  .popover.left > .arrow, .popover.right > .arrow, .popover.top > .arrow, .popover.bottom > .arrow {
    border: none; }

.popover-title {
  background-color: #fff;
  border: none;
  padding: 15px 15px 5px;
  font-size: 1.3em; }

.popover-content {
  padding: 10px 15px 15px;
  line-height: 1.4; }

.tooltip.in {
  opacity: 1;
  -webkit-transform: translate3d(0, 0px, 0);
  -moz-transform: translate3d(0, 0px, 0);
  -o-transform: translate3d(0, 0px, 0);
  -ms-transform: translate3d(0, 0px, 0);
  transform: translate3d(0, 0px, 0); }

.tooltip {
  opacity: 0;
  transition: opacity, transform 0.2s ease;
  -webkit-transform: translate3d(0, 5px, 0);
  -moz-transform: translate3d(0, 5px, 0);
  -o-transform: translate3d(0, 5px, 0);
  -ms-transform: translate3d(0, 5px, 0);
  transform: translate3d(0, 5px, 0); }
  .tooltip.left .tooltip-arrow {
    border-left-color: #fff; }
  .tooltip.right .tooltip-arrow {
    border-right-color: #fff; }
  .tooltip.top .tooltip-arrow {
    border-top-color: #fff; }
  .tooltip.bottom .tooltip-arrow {
    border-bottom-color: #fff; }

.tooltip-inner {
  padding: 10px 15px;
  min-width: 130px; }

footer {
  padding: 15px 0; }
  footer ul {
    margin-bottom: 0;
    padding: 0;
    list-style: none; }
  footer ul li {
    display: inline-block; }
    footer ul li a {
      color: inherit;
      padding: 15px;
      font-weight: 500;
      font-size: 12px;
      text-transform: uppercase;
      border-radius: 3px;
      text-decoration: none;
      position: relative;
      display: block; }
      footer ul li a:hover {
        text-decoration: none; }
  footer .copyright {
    padding: 15px 0;
    margin: 0; }
  footer .copyright .material-icons {
    font-size: 18px;
    position: relative;
    top: 3px; }
  footer .btn {
    margin-top: 0;
    margin-bottom: 0; }

.dropdown-menu {
  border: 0;
  box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.26); }
  .dropdown-menu .divider {
    background-color: rgba(0, 0, 0, .12); }
  .dropdown-menu li > a {
    font-size: 13px;
    padding: 10px 20px;
    margin: 0 5px;
    border-radius: 2px;
    -webkit-transition: all 150ms linear;
    -moz-transition: all 150ms linear;
    -o-transition: all 150ms linear;
    -ms-transition: all 150ms linear;
    transition: all 150ms linear; }
  .dropdown-menu li > a:hover, .dropdown-menu li > a:focus {
    box-shadow: 0 8px 10px 1px rgba(0, 0, 0, 0.14), 0 3px 14px 2px rgba(0, 0, 0, 0.12), 0 5px 5px -3px rgba(0, 0, 0, 0.2); }
  .dropdown-menu.dropdown-with-icons li > a {
    padding: 12px 20px 12px 12px; }
    .dropdown-menu.dropdown-with-icons li > a .material-icons {
      vertical-align: middle;
      font-size: 24px;
      position: relative;
      margin-top: -4px;
      top: 1px;
      margin-right: 12px;
      opacity: 0.5; }
  .dropdown-menu li {
    position: relative; }
  .dropdown-menu li a:hover, .dropdown-menu li a:focus, .dropdown-menu li a:active {
    background-color: #90b6d6;
    color: #fff; }
  .dropdown-menu .divider {
    margin: 5px 0; }
  .navbar .dropdown-menu li a:hover, .navbar.navbar-default .dropdown-menu li a:hover, .navbar .dropdown-menu li a:focus, .navbar.navbar-default .dropdown-menu li a:focus, .navbar .dropdown-menu li a:active, .navbar.navbar-default .dropdown-menu li a:active {
    background-color: #90b6d6;
    color: #fff;
    box-shadow: 0 12px 20px -10px rgba(144, 182, 214, 0.28), 0 4px 20px 0px rgba(0, 0, 0, 0.12), 0 7px 8px -5px rgba(144, 182, 214, 0.2); }

.card {
  display: inline-block;
  position: relative;
  width: 100%;
  margin: 25px 0;
  box-shadow: 0 1px 4px 0 rgba(0, 0, 0, 0.14);
  border-radius: 3px;
  color: rgba(0,0,0, 0.87);
  background: #fff; }
  .card .card-height-indicator {
    margin-top: 100%; }
  .card .title {
    margin-top: 0;
    margin-bottom: 5px; }
  .card .card-image {
    height: 60%;
    position: relative;
    overflow: hidden;
    margin-left: 15px;
    margin-right: 15px;
    margin-top: -30px;
    border-radius: 6px; }
  .card .card-image img {
    width: 100%;
    height: 100%;
    border-radius: 6px;
    pointer-events: none; }
  .card .card-image .card-title {
    position: absolute;
    bottom: 15px;
    left: 15px;
    color: #fff;
    font-size: 1.3em;
    text-shadow: 0 2px 5px rgba(33, 33, 33, 0.5); }
  .card .category:not([class*="text-"]) {
    color: #999; }
  .card .card-content {
    padding: 15px 20px; }
  .card .card-content .category {
    margin-bottom: 0; }
  .card .card-header {
    box-shadow: 0 10px 30px -12px rgba(0, 0, 0, 0.42), 0 4px 25px 0px rgba(0, 0, 0, 0.12), 0 8px 10px -5px rgba(0, 0, 0, 0.2);
    margin: -20px 15px 0;
    border-radius: 3px;
    padding: 15px;
    background-color: #999; }
  .card .card-header .title {
    color: #fff; }
  .card .card-header .category {
    margin-bottom: 0;
    color: rgba(255, 255, 255, .62); }
  .card .card-header.card-chart {
    padding: 0;
    min-height: 160px; }
    .card .card-header.card-chart + .content h4 {
      margin-top: 0; }
  .card .card-header .ct-label {
    color: rgba(255, 255, 255, .7); }
  .card .card-header .ct-grid {
    stroke: rgba(255, 255, 255, 0.2); }
  .card .card-header .ct-series-a .ct-point, .card .card-header .ct-series-a .ct-line, .card .card-header .ct-series-a .ct-bar, .card .card-header .ct-series-a .ct-slice-donut {
    stroke: rgba(255, 255, 255, .8); }
  .card .card-header .ct-series-a .ct-slice-pie, .card .card-header .ct-series-a .ct-area {
    fill: rgba(255, 255, 255, .4); }
  .card .chart-title {
    position: absolute;
    top: 25px;
    width: 100%;
    text-align: center; }
  .card .chart-title h3 {
    margin: 0;
    color: #fff; }
  .card .chart-title h6 {
    margin: 0;
    color: rgba(255, 255, 255, .4); }
  .card .card-footer {
    margin: 0 20px 10px;
    padding-top: 10px;
    border-top: 1px solid #eee; }
  .card .card-footer .content {
    display: block; }
  .card .card-footer div {
    display: inline-block; }
  .card .card-footer .author {
    color: #999; }
  .card .card-footer .stats {
    line-height: 22px;
    color: #999;
    font-size: 12px; }
    .card .card-footer .stats .material-icons {
      position: relative;
      top: 4px;
      font-size: 16px; }
  .card .card-footer h6 {
    color: #999; }
  .card img {
    width: 100%;
    height: auto; }
  .card .category .material-icons {
    position: relative;
    top: 6px;
    line-height: 0; }
  .card .category-social .fa {
    font-size: 24px;
    position: relative;
    margin-top: -4px;
    top: 2px;
    margin-right: 5px; }
  .card .author .avatar {
    width: 30px;
    height: 30px;
    overflow: hidden;
    border-radius: 50%;
    margin-right: 5px; }
  .card .author a {
    color: #203465;
    text-decoration: none; }
    .card .author a .ripple-container {
      display: none; }
  .card .table {
    margin-bottom: 0; }
  .card .table tr:first-child td {
    border-top: none; }
  .card [data-background-color="purple"] {
    background: linear-gradient(60deg, #ab47bc, #8e24aa);
    box-shadow: 0 12px 20px -10px rgba(144, 182, 214, 0.28), 0 4px 20px 0px rgba(0, 0, 0, 0.12), 0 7px 8px -5px rgba(144, 182, 214, 0.2); }
  .card [data-background-color="blue"] {
    background: linear-gradient(60deg, #26c6da, #00acc1);
    box-shadow: 0 12px 20px -10px rgba(197, 162, 179, 0.28), 0 4px 20px 0px rgba(0, 0, 0, 0.12), 0 7px 8px -5px rgba(197, 162, 179, 0.2); }
  .card [data-background-color="green"] {
    background: linear-gradient(60deg, #66bb6a, #43a047);
    box-shadow: 0 12px 20px -10px rgba(96, 177, 120, 0.28), 0 4px 20px 0px rgba(0, 0, 0, 0.12), 0 7px 8px -5px rgba(96, 177, 120, 0.2); }
  .card [data-background-color="orange"] {
    background: linear-gradient(60deg, #ffa726, #fb8c00);
    box-shadow: 0 12px 20px -10px rgba(222, 161, 64, 0.28), 0 4px 20px 0px rgba(0, 0, 0, 0.12), 0 7px 8px -5px rgba(222, 161, 64, 0.2); }
  .card [data-background-color="red"] {
    background: linear-gradient(60deg, #ef5350, #e53935);
    box-shadow: 0 12px 20px -10px rgba(244, 67, 54, 0.28), 0 4px 20px 0px rgba(0, 0, 0, 0.12), 0 7px 8px -5px rgba(244, 67, 54, 0.2); }
  .card [data-background-color] {
    color: #fff; }
  .card [data-background-color] a {
    color: #fff; }

.card-stats .title {
  margin: 0; }
  .card-stats .card-header {
    float: left;
    text-align: center; }
  .card-stats .card-header i {
    font-size: 36px;
    line-height: 56px;
    width: 56px;
    height: 56px; }
  .card-stats .card-content {
    text-align: right;
    padding-top: 10px; }

.card-nav-tabs .header-raised {
  margin-top: -30px; }
  .card-nav-tabs .nav-tabs {
    background: transparent;
    padding: 0; }
  .card-nav-tabs .nav-tabs-title {
    float: left;
    padding: 10px 10px 10px 0;
    line-height: 24px; }

.card-plain {
  background: transparent;
  box-shadow: none; }
  .card-plain .card-header {
    margin-left: 0;
    margin-right: 0; }
  .card-plain .content {
    padding-left: 5px;
    padding-right: 5px; }
  .card-plain .card-image {
    margin: 0;
    border-radius: 3px; }
  .card-plain .card-image img {
    border-radius: 3px; }

.iframe-container {
  margin: 0 -20px 0; }
  .iframe-container iframe {
    width: 100%;
    height: 500px;
    border: 0;
    box-shadow: 0 10px 30px -12px rgba(0, 0, 0, 0.42), 0 4px 25px 0px rgba(0, 0, 0, 0.12), 0 8px 10px -5px rgba(0, 0, 0, 0.2); }

.card-profile, .card-testimonial {
  margin-top: 30px;
  text-align: center; }
  .card-profile .btn-just-icon.btn-raised, .card-testimonial .btn-just-icon.btn-raised {
    margin-left: 6px;
    margin-right: 6px; }
  .card-profile .card-avatar, .card-testimonial .card-avatar {
    max-width: 130px;
    max-height: 130px;
    margin: -50px auto 0;
    border-radius: 50%;
    overflow: hidden;
    box-shadow: 0 10px 30px -12px rgba(0, 0, 0, 0.42), 0 4px 25px 0px rgba(0, 0, 0, 0.12), 0 8px 10px -5px rgba(0, 0, 0, 0.2); }
  .card-profile .card-avatar + .content, .card-testimonial .card-avatar + .content {
    margin-top: 15px; }
  .card-profile.card-plain .card-avatar, .card-testimonial.card-plain .card-avatar {
    margin-top: 0; }

.nav-tabs {
  background: #90b6d6;
  border: 0;
  border-radius: 3px;
  padding: 0 15px; }
  .nav-tabs > li > a {
    color: #fff;
    border: 0;
    margin: 0;
    border-radius: 3px;
    line-height: 24px;
    text-transform: uppercase;
    font-size: 12px; }
    .nav-tabs > li > a:hover {
      background-color: transparent;
      border: 0; }
  .nav-tabs > li > a, .nav-tabs > li > a:hover, .nav-tabs > li > a:focus {
    background-color: transparent;
    border: 0 !important;
    color: #fff !important;
    font-weight: 500; }
  .nav-tabs > li.disabled > a, .nav-tabs > li.disabled > a:hover {
    color: rgba(255, 255, 255, 0.5); }
  .nav-tabs > li .material-icons {
    margin: -1px 5px 0 0; }
  .nav-tabs > li.active > a, .nav-tabs > li.active > a:hover, .nav-tabs > li.active > a:focus {
    background-color: rgba(255, 255, 255, .2);
    transition: background-color 0.1s 0.2s; }

.ct-label {
  fill: rgba(0, 0, 0, 0.4);
  color: rgba(0, 0, 0, 0.4);
  font-size: 1.3rem;
  line-height: 1; }

.ct-chart-line .ct-label, .ct-chart-bar .ct-label {
  display: block;
  display: -webkit-box;
  display: -moz-box;
  display: -ms-flexbox;
  display: -webkit-flex;
  display: flex; }

.ct-label.ct-horizontal.ct-start {
  -webkit-box-align: flex-end;
  -webkit-align-items: flex-end;
  -ms-flex-align: flex-end;
  align-items: flex-end;
  -webkit-box-pack: flex-start;
  -webkit-justify-content: flex-start;
  -ms-flex-pack: flex-start;
  justify-content: flex-start;
  text-align: left;
  text-anchor: start; }

.ct-label.ct-horizontal.ct-end {
  -webkit-box-align: flex-start;
  -webkit-align-items: flex-start;
  -ms-flex-align: flex-start;
  align-items: flex-start;
  -webkit-box-pack: flex-start;
  -webkit-justify-content: flex-start;
  -ms-flex-pack: flex-start;
  justify-content: flex-start;
  text-align: left;
  text-anchor: start; }

.ct-label.ct-vertical.ct-start {
  -webkit-box-align: flex-end;
  -webkit-align-items: flex-end;
  -ms-flex-align: flex-end;
  align-items: flex-end;
  -webkit-box-pack: flex-end;
  -webkit-justify-content: flex-end;
  -ms-flex-pack: flex-end;
  justify-content: flex-end;
  text-align: right;
  text-anchor: end; }

.ct-label.ct-vertical.ct-end {
  -webkit-box-align: flex-end;
  -webkit-align-items: flex-end;
  -ms-flex-align: flex-end;
  align-items: flex-end;
  -webkit-box-pack: flex-start;
  -webkit-justify-content: flex-start;
  -ms-flex-pack: flex-start;
  justify-content: flex-start;
  text-align: left;
  text-anchor: start; }

.ct-chart-bar .ct-label.ct-horizontal.ct-start {
  -webkit-box-align: flex-end;
  -webkit-align-items: flex-end;
  -ms-flex-align: flex-end;
  align-items: flex-end;
  -webkit-box-pack: center;
  -webkit-justify-content: center;
  -ms-flex-pack: center;
  justify-content: center;
  text-align: center;
  text-anchor: start; }

.ct-chart-bar .ct-label.ct-horizontal.ct-end {
  -webkit-box-align: flex-start;
  -webkit-align-items: flex-start;
  -ms-flex-align: flex-start;
  align-items: flex-start;
  -webkit-box-pack: center;
  -webkit-justify-content: center;
  -ms-flex-pack: center;
  justify-content: center;
  text-align: center;
  text-anchor: start; }

.ct-chart-bar.ct-horizontal-bars .ct-label.ct-horizontal.ct-start {
  -webkit-box-align: flex-end;
  -webkit-align-items: flex-end;
  -ms-flex-align: flex-end;
  align-items: flex-end;
  -webkit-box-pack: flex-start;
  -webkit-justify-content: flex-start;
  -ms-flex-pack: flex-start;
  justify-content: flex-start;
  text-align: left;
  text-anchor: start; }

.ct-chart-bar.ct-horizontal-bars .ct-label.ct-horizontal.ct-end {
  -webkit-box-align: flex-start;
  -webkit-align-items: flex-start;
  -ms-flex-align: flex-start;
  align-items: flex-start;
  -webkit-box-pack: flex-start;
  -webkit-justify-content: flex-start;
  -ms-flex-pack: flex-start;
  justify-content: flex-start;
  text-align: left;
  text-anchor: start; }

.ct-chart-bar.ct-horizontal-bars .ct-label.ct-vertical.ct-start {
  -webkit-box-align: center;
  -webkit-align-items: center;
  -ms-flex-align: center;
  align-items: center;
  -webkit-box-pack: flex-end;
  -webkit-justify-content: flex-end;
  -ms-flex-pack: flex-end;
  justify-content: flex-end;
  text-align: right;
  text-anchor: end; }

.ct-chart-bar.ct-horizontal-bars .ct-label.ct-vertical.ct-end {
  -webkit-box-align: center;
  -webkit-align-items: center;
  -ms-flex-align: center;
  align-items: center;
  -webkit-box-pack: flex-start;
  -webkit-justify-content: flex-start;
  -ms-flex-pack: flex-start;
  justify-content: flex-start;
  text-align: left;
  text-anchor: end; }

.ct-grid {
  stroke: rgba(0, 0, 0, 0.2);
  stroke-width: 1px;
  stroke-dasharray: 2px; }

.ct-point {
  stroke-width: 8px;
  stroke-linecap: round; }

.ct-line {
  fill: none;
  stroke-width: 3px; }

.ct-area {
  stroke: none;
  fill-opacity: 0.8; }

.ct-bar {
  fill: none;
  stroke-width: 10px; }

.ct-slice-donut {
  fill: none;
  stroke-width: 60px; }

.ct-series-a .ct-point, .ct-series-a .ct-line, .ct-series-a .ct-bar, .ct-series-a .ct-slice-donut {
  stroke: #c5a2b3; }
  .ct-series-a .ct-slice-pie, .ct-series-a .ct-area {
    fill: #c5a2b3; }

.ct-series-b .ct-point, .ct-series-b .ct-line, .ct-series-b .ct-bar, .ct-series-b .ct-slice-donut {
  stroke: #f44336; }
  .ct-series-b .ct-slice-pie, .ct-series-b .ct-area {
    fill: #f44336; }

.ct-series-c .ct-point, .ct-series-c .ct-line, .ct-series-c .ct-bar, .ct-series-c .ct-slice-donut {
  stroke: #dea140; }
  .ct-series-c .ct-slice-pie, .ct-series-c .ct-area {
    fill: #dea140; }

.ct-series-d .ct-point, .ct-series-d .ct-line, .ct-series-d .ct-bar, .ct-series-d .ct-slice-donut {
  stroke: #90b6d6; }
  .ct-series-d .ct-slice-pie, .ct-series-d .ct-area {
    fill: #90b6d6; }

.ct-series-e .ct-point, .ct-series-e .ct-line, .ct-series-e .ct-bar, .ct-series-e .ct-slice-donut {
  stroke: #60b178; }
  .ct-series-e .ct-slice-pie, .ct-series-e .ct-area {
    fill: #60b178; }

.ct-series-f .ct-point, .ct-series-f .ct-line, .ct-series-f .ct-bar, .ct-series-f .ct-slice-donut {
  stroke: #9c9b99; }
  .ct-series-f .ct-slice-pie, .ct-series-f .ct-area {
    fill: #9c9b99; }

.ct-series-g .ct-point, .ct-series-g .ct-line, .ct-series-g .ct-bar, .ct-series-g .ct-slice-donut {
  stroke: #999; }
  .ct-series-g .ct-slice-pie, .ct-series-g .ct-area {
    fill: #999; }

.ct-series-h .ct-point, .ct-series-h .ct-line, .ct-series-h .ct-bar, .ct-series-h .ct-slice-donut {
  stroke: #dd4b39; }
  .ct-series-h .ct-slice-pie, .ct-series-h .ct-area {
    fill: #dd4b39; }

.ct-series-i .ct-point, .ct-series-i .ct-line, .ct-series-i .ct-bar, .ct-series-i .ct-slice-donut {
  stroke: #35465c; }
  .ct-series-i .ct-slice-pie, .ct-series-i .ct-area {
    fill: #35465c; }

.ct-series-j .ct-point, .ct-series-j .ct-line, .ct-series-j .ct-bar, .ct-series-j .ct-slice-donut {
  stroke: #e52d27; }
  .ct-series-j .ct-slice-pie, .ct-series-j .ct-area {
    fill: #e52d27; }

.ct-series-k .ct-point, .ct-series-k .ct-line, .ct-series-k .ct-bar, .ct-series-k .ct-slice-donut {
  stroke: #55acee; }
  .ct-series-k .ct-slice-pie, .ct-series-k .ct-area {
    fill: #55acee; }

.ct-series-l .ct-point, .ct-series-l .ct-line, .ct-series-l .ct-bar, .ct-series-l .ct-slice-donut {
  stroke: #cc2127; }
  .ct-series-l .ct-slice-pie, .ct-series-l .ct-area {
    fill: #cc2127; }

.ct-series-m .ct-point, .ct-series-m .ct-line, .ct-series-m .ct-bar, .ct-series-m .ct-slice-donut {
  stroke: #1769ff; }
  .ct-series-m .ct-slice-pie, .ct-series-m .ct-area {
    fill: #1769ff; }

.ct-series-n .ct-point, .ct-series-n .ct-line, .ct-series-n .ct-bar, .ct-series-n .ct-slice-donut {
  stroke: #6188e2; }
  .ct-series-n .ct-slice-pie, .ct-series-n .ct-area {
    fill: #6188e2; }

.ct-series-o .ct-point, .ct-series-o .ct-line, .ct-series-o .ct-bar, .ct-series-o .ct-slice-donut {
  stroke: #a748ca; }
  .ct-series-o .ct-slice-pie, .ct-series-o .ct-area {
    fill: #a748ca; }

.ct-square {
  display: block;
  position: relative;
  width: 100%; }
  .ct-square:before {
    display: block;
    float: left;
    content: "";
    width: 0;
    height: 0;
    padding-bottom: 100%; }
  .ct-square:after {
    content: "";
    display: table;
    clear: both; }
  .ct-square > svg {
    display: block;
    position: absolute;
    top: 0;
    left: 0; }

.ct-minor-second {
  display: block;
  position: relative;
  width: 100%; }
  .ct-minor-second:before {
    display: block;
    float: left;
    content: "";
    width: 0;
    height: 0;
    padding-bottom: 93.75%; }
  .ct-minor-second:after {
    content: "";
    display: table;
    clear: both; }
  .ct-minor-second > svg {
    display: block;
    position: absolute;
    top: 0;
    left: 0; }

.ct-major-second {
  display: block;
  position: relative;
  width: 100%; }
  .ct-major-second:before {
    display: block;
    float: left;
    content: "";
    width: 0;
    height: 0;
    padding-bottom: 88.88889%; }
  .ct-major-second:after {
    content: "";
    display: table;
    clear: both; }
  .ct-major-second > svg {
    display: block;
    position: absolute;
    top: 0;
    left: 0; }

.ct-minor-third {
  display: block;
  position: relative;
  width: 100%; }
  .ct-minor-third:before {
    display: block;
    float: left;
    content: "";
    width: 0;
    height: 0;
    padding-bottom: 83.33333%; }
  .ct-minor-third:after {
    content: "";
    display: table;
    clear: both; }
  .ct-minor-third > svg {
    display: block;
    position: absolute;
    top: 0;
    left: 0; }

.ct-major-third {
  display: block;
  position: relative;
  width: 100%; }
  .ct-major-third:before {
    display: block;
    float: left;
    content: "";
    width: 0;
    height: 0;
    padding-bottom: 80%; }
  .ct-major-third:after {
    content: "";
    display: table;
    clear: both; }
  .ct-major-third > svg {
    display: block;
    position: absolute;
    top: 0;
    left: 0; }

.ct-perfect-fourth {
  display: block;
  position: relative;
  width: 100%; }
  .ct-perfect-fourth:before {
    display: block;
    float: left;
    content: "";
    width: 0;
    height: 0;
    padding-bottom: 75%; }
  .ct-perfect-fourth:after {
    content: "";
    display: table;
    clear: both; }
  .ct-perfect-fourth > svg {
    display: block;
    position: absolute;
    top: 0;
    left: 0; }

.ct-perfect-fifth {
  display: block;
  position: relative;
  width: 100%; }
  .ct-perfect-fifth:before {
    display: block;
    float: left;
    content: "";
    width: 0;
    height: 0;
    padding-bottom: 66.66667%; }
  .ct-perfect-fifth:after {
    content: "";
    display: table;
    clear: both; }
  .ct-perfect-fifth > svg {
    display: block;
    position: absolute;
    top: 0;
    left: 0; }

.ct-minor-sixth {
  display: block;
  position: relative;
  width: 100%; }
  .ct-minor-sixth:before {
    display: block;
    float: left;
    content: "";
    width: 0;
    height: 0;
    padding-bottom: 62.5%; }
  .ct-minor-sixth:after {
    content: "";
    display: table;
    clear: both; }
  .ct-minor-sixth > svg {
    display: block;
    position: absolute;
    top: 0;
    left: 0; }

.ct-golden-section {
  display: block;
  position: relative;
  width: 100%; }
  .ct-golden-section:before {
    display: block;
    float: left;
    content: "";
    width: 0;
    height: 0;
    padding-bottom: 61.8047%; }
  .ct-golden-section:after {
    content: "";
    display: table;
    clear: both; }
  .ct-golden-section > svg {
    display: block;
    position: absolute;
    top: 0;
    left: 0; }

.ct-major-sixth {
  display: block;
  position: relative;
  width: 100%; }
  .ct-major-sixth:before {
    display: block;
    float: left;
    content: "";
    width: 0;
    height: 0;
    padding-bottom: 60%; }
  .ct-major-sixth:after {
    content: "";
    display: table;
    clear: both; }
  .ct-major-sixth > svg {
    display: block;
    position: absolute;
    top: 0;
    left: 0; }

.ct-minor-seventh {
  display: block;
  position: relative;
  width: 100%; }
  .ct-minor-seventh:before {
    display: block;
    float: left;
    content: "";
    width: 0;
    height: 0;
    padding-bottom: 56.25%; }
  .ct-minor-seventh:after {
    content: "";
    display: table;
    clear: both; }
  .ct-minor-seventh > svg {
    display: block;
    position: absolute;
    top: 0;
    left: 0; }

.ct-major-seventh {
  display: block;
  position: relative;
  width: 100%; }
  .ct-major-seventh:before {
    display: block;
    float: left;
    content: "";
    width: 0;
    height: 0;
    padding-bottom: 53.33333%; }
  .ct-major-seventh:after {
    content: "";
    display: table;
    clear: both; }
  .ct-major-seventh > svg {
    display: block;
    position: absolute;
    top: 0;
    left: 0; }

.ct-octave {
  display: block;
  position: relative;
  width: 100%; }
  .ct-octave:before {
    display: block;
    float: left;
    content: "";
    width: 0;
    height: 0;
    padding-bottom: 50%; }
  .ct-octave:after {
    content: "";
    display: table;
    clear: both; }
  .ct-octave > svg {
    display: block;
    position: absolute;
    top: 0;
    left: 0; }

.ct-major-tenth {
  display: block;
  position: relative;
  width: 100%; }
  .ct-major-tenth:before {
    display: block;
    float: left;
    content: "";
    width: 0;
    height: 0;
    padding-bottom: 40%; }
  .ct-major-tenth:after {
    content: "";
    display: table;
    clear: both; }
  .ct-major-tenth > svg {
    display: block;
    position: absolute;
    top: 0;
    left: 0; }

.ct-major-eleventh {
  display: block;
  position: relative;
  width: 100%; }
  .ct-major-eleventh:before {
    display: block;
    float: left;
    content: "";
    width: 0;
    height: 0;
    padding-bottom: 37.5%; }
  .ct-major-eleventh:after {
    content: "";
    display: table;
    clear: both; }
  .ct-major-eleventh > svg {
    display: block;
    position: absolute;
    top: 0;
    left: 0; }

.ct-major-twelfth {
  display: block;
  position: relative;
  width: 100%; }
  .ct-major-twelfth:before {
    display: block;
    float: left;
    content: "";
    width: 0;
    height: 0;
    padding-bottom: 33.33333%; }
  .ct-major-twelfth:after {
    content: "";
    display: table;
    clear: both; }
  .ct-major-twelfth > svg {
    display: block;
    position: absolute;
    top: 0;
    left: 0; }

.ct-double-octave {
  display: block;
  position: relative;
  width: 100%; }
  .ct-double-octave:before {
    display: block;
    float: left;
    content: "";
    width: 0;
    height: 0;
    padding-bottom: 25%; }
  .ct-double-octave:after {
    content: "";
    display: table;
    clear: both; }
  .ct-double-octave > svg {
    display: block;
    position: absolute;
    top: 0;
    left: 0; }

.ct-blue {
  stroke: #90b6d6 !important; }

.ct-azure {
  stroke: #c5a2b3 !important; }

.ct-green {
  stroke: #60b178 !important; }

.ct-orange {
  stroke: #dea140 !important; }

.ct-red {
  stroke: #f44336 !important; }

.ct-white {
  stroke: #fff !important; }

.ct-rose {
  stroke: #e91e63 !important; }

@media (min-width: 992px) {
  /*.navbar-nav > li > .dropdown-menu:before{
   border-bottom: 11px solid rgba(0, 0, 0, 0.2);
   border-left: 11px solid rgba(0, 0, 0, 0);
   border-right: 11px solid rgba(0, 0, 0, 0);
   content: "";
   display: inline-block;
   position: absolute;
   left: 12px;
   top: -11px;
   }
   .navbar-nav > li > .dropdown-menu:after {
   border-bottom: 11px solid #FFFFFF;
   border-left: 11px solid rgba(0, 0, 0, 0);
   border-right: 11px solid rgba(0, 0, 0, 0);
   content: "";
   display: inline-block;
   position: absolute;
   left: 12px;
   top: -10px;
   }*/
    .navbar-form {
      margin-top: 21px;
      margin-bottom: 21px;
      padding-left: 5px;
      padding-right: 5px; }
    .navbar-nav > li > .dropdown-menu, .dropdown .dropdown-menu, .dropdown-menu.bootstrap-datetimepicker-widget {
      -webkit-transition: all 150ms linear;
      -moz-transition: all 150ms linear;
      -o-transition: all 150ms linear;
      -ms-transition: all 150ms linear;
      transition: all 150ms linear;
      margin-top: -20px;
      visibility: hidden;
      display: block;
      opacity: 0;
      filter: alpha(opacity=0); }
    .navbar-nav > li.open > .dropdown-menu, .dropdown.open .dropdown-menu, .dropdown-menu.bootstrap-datetimepicker-widget.open {
      opacity: 1;
      filter: alpha(opacity=100);
      visibility: visible;
      margin-top: 0px; }
    .navbar-nav.navbar-right > li > .dropdown-menu:before {
      left: auto;
      right: 12px; }
    .navbar-nav.navbar-right > li > .dropdown-menu:after {
      left: auto;
      right: 12px; }
    .footer:not(.footer-big) nav > ul li:first-child {
      margin-left: 0; }
    body > .navbar-collapse.collapse {
      display: none !important; }
    .card form [class*="col-"] {
      padding: 6px; }
      .card form [class*="col-"]:first-child {
        padding-left: 15px; }
      .card form [class*="col-"]:last-child {
        padding-right: 15px; }
    .sidebar .navbar-form {
      display: none !important; }
      .sidebar .nav-mobile-menu {
        display: none; } }
/*          Changes for small display      */
@media (max-width: 991px) {
  .sidebar {
    display: none;
    box-shadow: none; }
    .sidebar .sidebar-wrapper {
      padding-bottom: 60px; }
    .sidebar .nav-mobile-menu {
      margin-top: 0; }
      .sidebar .nav-mobile-menu .notification {
        float: left;
        line-height: 30px;
        margin-right: 8px; }
      .sidebar .nav-mobile-menu .open .dropdown-menu {
        position: static;
        float: none;
        width: auto;
        margin-top: 0;
        background-color: transparent;
        border: 0;
        -webkit-box-shadow: none;
        box-shadow: none; }

  .main-panel {
    width: 100%; }

  .navbar-transparent {
    padding-top: 15px;
    background-color: rgba(0, 0, 0, 0.45); }

  body {
    position: relative; }

  .main-panel {
    -webkit-transform: translate3d(0px, 0, 0);
    -moz-transform: translate3d(0px, 0, 0);
    -o-transform: translate3d(0px, 0, 0);
    -ms-transform: translate3d(0px, 0, 0);
    transform: translate3d(0px, 0, 0);
    -webkit-transition: all 0.33s cubic-bezier(0.685, 0.0473, 0.346, 1);
    -moz-transition: all 0.33s cubic-bezier(0.685, 0.0473, 0.346, 1);
    -o-transition: all 0.33s cubic-bezier(0.685, 0.0473, 0.346, 1);
    -ms-transition: all 0.33s cubic-bezier(0.685, 0.0473, 0.346, 1);
    transition: all 0.33s cubic-bezier(0.685, 0.0473, 0.346, 1);
    left: 0; }

  .navbar .container {
    left: 0;
    width: 100%;
    -webkit-transition: all 0.33s cubic-bezier(0.685, 0.0473, 0.346, 1);
    -moz-transition: all 0.33s cubic-bezier(0.685, 0.0473, 0.346, 1);
    -o-transition: all 0.33s cubic-bezier(0.685, 0.0473, 0.346, 1);
    -ms-transition: all 0.33s cubic-bezier(0.685, 0.0473, 0.346, 1);
    transition: all 0.33s cubic-bezier(0.685, 0.0473, 0.346, 1);
    position: relative; }

  .navbar .navbar-collapse.collapse, .navbar .navbar-collapse.collapse.in, .navbar .navbar-collapse.collapsing {
    display: none !important; }

  .navbar-nav > li {
    float: none;
    position: relative;
    display: block; }

  .sidebar, .off-canvas-sidebar {
    position: fixed;
    display: block;
    top: 0;
    height: 100vh;
    width: 260px;
    right: 0;
    left: auto;
    z-index: 1032;
    visibility: visible;
    background-color: #9a9a9a;
    overflow-y: visible;
    border-top: none;
    text-align: left;
    padding-right: 0px;
    padding-left: 0;
    -webkit-transform: translate3d(260px, 0, 0);
    -moz-transform: translate3d(260px, 0, 0);
    -o-transform: translate3d(260px, 0, 0);
    -ms-transform: translate3d(260px, 0, 0);
    transform: translate3d(260px, 0, 0);
    -webkit-transition: all 0.33s cubic-bezier(0.685, 0.0473, 0.346, 1);
    -moz-transition: all 0.33s cubic-bezier(0.685, 0.0473, 0.346, 1);
    -o-transition: all 0.33s cubic-bezier(0.685, 0.0473, 0.346, 1);
    -ms-transition: all 0.33s cubic-bezier(0.685, 0.0473, 0.346, 1);
    transition: all 0.33s cubic-bezier(0.685, 0.0473, 0.346, 1); }
    .sidebar > ul, .off-canvas-sidebar > ul {
      position: relative;
      z-index: 4;
      overflow-y: scroll;
      height: calc(100vh - 61px);
      width: 100%; }
    .sidebar::before, .off-canvas-sidebar::before {
      top: 0;
      left: 0;
      height: 100%;
      width: 100%;
      position: absolute;
      background-color: #282828;
      display: block;
      content: "";
      z-index: 1; }
    .sidebar .logo, .off-canvas-sidebar .logo {
      position: relative;
      z-index: 4; }
    .sidebar .navbar-form, .off-canvas-sidebar .navbar-form {
      margin: 10px 15px;
      float: none !important; }
      .sidebar .navbar-form .btn, .off-canvas-sidebar .navbar-form .btn {
        position: absolute;
        top: 25px;
        right: 15px; }
    .sidebar .table-responsive, .off-canvas-sidebar .table-responsive {
      width: 100%;
      margin-bottom: 15px;
      overflow-x: scroll;
      overflow-y: hidden;
      -ms-overflow-style: -ms-autohiding-scrollbar;
      -webkit-overflow-scrolling: touch; }

  .nav-open .navbar-collapse {
    -webkit-transform: translate3d(0px, 0, 0);
    -moz-transform: translate3d(0px, 0, 0);
    -o-transform: translate3d(0px, 0, 0);
    -ms-transform: translate3d(0px, 0, 0);
    transform: translate3d(0px, 0, 0); }

  .nav-open .navbar .container {
    left: -250px; }

  .nav-open .main-panel {
    left: 0;
    -webkit-transform: translate3d(-260px, 0, 0);
    -moz-transform: translate3d(-260px, 0, 0);
    -o-transform: translate3d(-260px, 0, 0);
    -ms-transform: translate3d(-260px, 0, 0);
    transform: translate3d(-260px, 0, 0); }

  .nav-open .sidebar {
    box-shadow: 0 10px 30px -12px rgba(0, 0, 0, 0.42), 0 4px 25px 0px rgba(0, 0, 0, 0.12), 0 8px 10px -5px rgba(0, 0, 0, 0.2); }

  .nav-open .off-canvas-sidebar, .nav-open .sidebar {
    -webkit-transform: translate3d(0, 0, 0);
    -moz-transform: translate3d(0, 0, 0);
    -o-transform: translate3d(0, 0, 0);
    -ms-transform: translate3d(0, 0, 0);
    transform: translate3d(0, 0, 0); }

  .close-layer {
    height: 100%;
    width: 100%;
    position: absolute;
    opacity: 0;
    top: 0;
    left: auto;
    content: "";
    z-index: 9999;
    overflow-x: hidden;
    -webkit-transition: all 370ms ease-in;
    -moz-transition: all 370ms ease-in;
    -o-transition: all 370ms ease-in;
    -ms-transition: all 370ms ease-in;
    transition: all 370ms ease-in; }
    .close-layer.visible {
      opacity: 1; }

  .navbar-toggle .icon-bar {
    display: block;
    position: relative;
    background: #fff;
    width: 24px;
    height: 2px;
    border-radius: 1px;
    margin: 0 auto; }

  .navbar-header .navbar-toggle {
    margin: 10px 15px 10px 0;
    width: 40px;
    height: 40px; }

  .bar1, .bar2, .bar3 {
    outline: 1px solid transparent; }
@-webkit-keyframes fadeIn {
      0% {
        opacity: 0; }
      100% {
        opacity: 1; } }
@-moz-keyframes fadeIn {
      0% {
        opacity: 0; }
      100% {
        opacity: 1; } }
@keyframes fadeIn {
      0% {
        opacity: 0; }
      100% {
        opacity: 1; } }
  .dropdown-menu .divider {
    background-color: rgba(229, 229, 229, 0.15); }

  .navbar-nav {
    margin: 1px 0; }
    .navbar-nav .open .dropdown-menu > li > a {
      padding: 15px 15px 5px 50px; }
      .navbar-nav .open .dropdown-menu > li:first-child > a {
        padding: 5px 15px 5px 50px; }
      .navbar-nav .open .dropdown-menu > li:last-child > a {
        padding: 15px 15px 25px 50px; }

  [class*="navbar-"] .navbar-nav > li > a, [class*="navbar-"] .navbar-nav > li > a:hover, [class*="navbar-"] .navbar-nav > li > a:focus, [class*="navbar-"] .navbar-nav .active > a, [class*="navbar-"] .navbar-nav .active > a:hover, [class*="navbar-"] .navbar-nav .active > a:focus, [class*="navbar-"] .navbar-nav .open .dropdown-menu > li > a, [class*="navbar-"] .navbar-nav .open .dropdown-menu > li > a:hover, [class*="navbar-"] .navbar-nav .open .dropdown-menu > li > a:focus, [class*="navbar-"] .navbar-nav .navbar-nav .open .dropdown-menu > li > a:active {
    color: white; }
    [class*="navbar-"] .navbar-nav > li > a, [class*="navbar-"] .navbar-nav > li > a:hover, [class*="navbar-"] .navbar-nav > li > a:focus, [class*="navbar-"] .navbar-nav .open .dropdown-menu > li > a, [class*="navbar-"] .navbar-nav .open .dropdown-menu > li > a:hover, [class*="navbar-"] .navbar-nav .open .dropdown-menu > li > a:focus {
      opacity: 0.7;
      background: transparent; }
    [class*="navbar-"] .navbar-nav.navbar-nav .open .dropdown-menu > li > a:active {
      opacity: 1; }
    [class*="navbar-"] .navbar-nav .dropdown > a:hover .caret {
      border-bottom-color: #777;
      border-top-color: #777; }
      [class*="navbar-"] .navbar-nav .dropdown > a:active .caret {
        border-bottom-color: white;
        border-top-color: white; }

  .dropdown-menu {
    display: none; }

  .navbar-fixed-top {
    -webkit-backface-visibility: hidden; }

  #bodyClick {
    height: 100%;
    width: 100%;
    position: fixed;
    opacity: 0;
    top: 0;
    left: auto;
    right: 250px;
    content: "";
    z-index: 9999;
    overflow-x: hidden; }

  .social-line .btn {
    margin: 0 0 10px 0; }

  .subscribe-line .form-control {
    margin: 0 0 10px 0; }

  .social-line.pull-right {
    float: none; }

  .footer:not(.footer-big) nav > ul li {
    float: none; }

  .social-area.pull-right {
    float: none !important; }

  .form-control + .form-control-feedback {
    margin-top: -8px; }

  .navbar-toggle:hover, .navbar-toggle:focus {
    background-color: transparent !important; }

  .btn.dropdown-toggle {
    margin-bottom: 0; }

  .media-post .author {
    width: 20%;
    float: none !important;
    display: block;
    margin: 0 auto 10px; }

  .media-post .media-body {
    width: 100%; }

  .navbar-collapse.collapse {
    height: 100% !important; }

  .navbar-collapse.collapse.in {
    display: block; }

  .navbar-header .collapse, .navbar-toggle {
    display: block !important; }

  .navbar-header {
    float: none; }

  .navbar-collapse .nav p {
    font-size: 14px;
    margin: 0; }
    .navbar-collapse [class^="pe-7s-"] {
      float: left;
      font-size: 20px;
      margin-right: 10px; } }

@media (min-width: 768px) {
  .navbar > .container-fluid .navbar-brand {
    margin-left: 0; } }

@media (min-width: 992px) {
  .table-full-width {
    margin-left: -20px;
    margin-right: -20px; } }

body {
  background-color: #e5dedb; }

.card {
  background-color: #fbf9f8; }

.card [data-background-color="purple"] {
  background: linear-gradient(60deg, #a3c2dd, #7daacf); }

.card [data-background-color="red"] {
  background: linear-gradient(60deg, #f55a4e, #f32c1e); }

.card [data-background-color="green"] {
  background: linear-gradient(60deg, #71b987, #51a66b); }

.card [data-background-color="blue"] {
  background: linear-gradient(60deg, #cfb2c0, #bb92a6); }

.card [data-background-color="orange"] {
  background: linear-gradient(60deg, #e2ac56, #da962a); }

.card .category:not([class*="text-"]), .card .card-footer .stats {
  color: #a79e99; }

.card .card-header .category {
  color: #fff; }

.card .card-footer {
  border-top: 1px solid #e5dedb; }

table {
  border-color: #e5dedb; }

.navbar-transparent {
  color: #a79e99; }
