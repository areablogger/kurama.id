<?php
  
$request_uri = $_SERVER['REQUEST_URI'];
$cleaned_uri = preg_replace('/[^a-zA-Z0-9\-\/]/', '-', $request_uri);
$url_components = parse_url($request_uri);
$path = $url_components['path'];
$path_segments = explode('/', trim($path, '/'));
$segment = $path_segments[0];
$pathurl = $path_segments[1];

# admin path
$admin_seg = ['admin'];
$admin_path = ['login', 'logout', 'register'];

# admin
if(!empty($segment) && in_array($segment, $admin_seg) && in_array($pathurl, $admin_path))
{

}

# non-admin
if(!empty($segment) && !in_array($segment, $admin_seg) && !in_array($pathurl, $admin_path))
{

}