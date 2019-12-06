<?php
  
namespace App\Http\Controllers;
  
use BotMan\BotMan\BotMan;
use Illuminate\Http\Request;
use BotMan\BotMan\Messages\Incoming\Answer;
  
class BotManController extends Controller
{
    /**
     * Place your BotMan logic here.
     */
    public function handle()
    {
        $botman = app('botman');
  
        $botman->hears('{message}', function($botman, $message) {
  
            if ($message == 'hi') {
                $this->askName($botman);
            }
            if ($message == 'About' || $message == 'About us' || $message == 'About the website' || $message == 'about') {
                $botman->typesAndWaits(1);
                $botman->reply('You can get details of what we work on in the "About" tab!');
            }

            if ($message == 'posts' || $message == 'Posts' || $message == 'what are posts' || $message == 'what is post' || $message == 'what is posts') {
                $botman->typesAndWaits(1);
                $botman->reply('You can check the CSR activities of various Organizations Here!!');
            }
            
            if ($message == 'csr' || $message == 'CSR' || $message == 'what is csr' || $message == 'what is CSR' || $message == 'what is csr?') {
                $botman->typesAndWaits(1);
                $botman->reply('Corporate Social Responsibility is a management concept whereby  companies integrate social and environmental concerns in their business  operations and interactions with their stakeholders. CSR is generally  understood as being the way through which a company achieves a balance  of economic, environmental and social imperatives, while at the same time addressing the expectations of  shareholders and stakeholders.');
            }

            if ($message == 'login' || $message == 'Login' || $message == 'why login' || $message == 'signin' || $message == 'why is login needed' || $message == 'why to login') {
                $botman->typesAndWaits(1);
                $botman->reply('You can post your organizations CSR activities through this login and collaborate with others as well. Dont forget to register yourself first!');
            }
             
            if ($message == 'register' || $message == 'Register' || $message == 'registration' || $message == 'why to register' || $message == 'where to register' || $message == 'how to register' || $message == 'why registration' || $message == 'why is registration needed' || $message == 'why is registration required') {
                $botman->typesAndWaits(1);
                $botman->reply('You can post your organizations CSR activities after you register and collaborate with others as well. You can Register by clicking the Register button at the top of the page. Just some of your details are required and you can register.');
            }
        });
  
        $botman->listen();
    }
  
    /**
     * Place your BotMan logic here.
     */
    public function askName($botman)
    {
        $botman->ask('Hello! What is your Name?', function(Answer $answer) {
  
            $name = $answer->getText();
  
            $this->say('Nice to meet you '.$name);
        });
    }
}