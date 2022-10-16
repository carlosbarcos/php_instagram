<?php
  $router = new \Bramus\Router\Router();

  session_start();

  $router->get('/',function() {
    print "inicio";
  });

  $router->get('/login',function() {
    print "Login page";
  });

  $router->post('/auth',function() {
    print "Auth page";
  });

  $router->get('/signup',function() {
    print "New account page";
  });

  $router->post('/register',function() {
    print "create user in system";
  });

  $router->get('/home',function() {
    print "Home page";
  });

  $router->post('/publish',function() {
    print "create a post page";
  });

  $router->get('/profile',function() {
    print "Profile page";
  });

  $router->post('/addLike',function() {
    print "create like page";
  });

  $router->get('/signout',function() {
    print "logout page";
  });

  $router->get('/profile/{username}',function($username) {
    print "Home page";
  });

  $router->run();