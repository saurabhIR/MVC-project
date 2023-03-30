<?php
namespace App\Controllers;

use \Core\View;
use App\Models\User;
use App\Mail;

/**
 * Summary of Password
 */
class Password extends \Core\Controller
{


  /**
   * Summary of forgetAction
   * view the forgot password form.
   * @return void
   */
  public function forgetAction() {
    View::render('Password/forget.php');
  }


  /**
   * Summary of requestResetAction
   * Sends the password reset email.
   * @return void
   */
  public function requestResetAction() {
    if (isset($_POST['email'])) {
      $this->sendPasswordReset($_POST['email']);
      View::render('Password/enterotp.php');
    }
  }
  /**
   * Sends the password reset email.
   *
   * @param string $email
   *   The user's email.
   */
  public static function sendPasswordReset($email) {
    $user = User::Emailfinder($email);
    if ($user) {
      $_SESSION['email'] = $email;
      $otp = rand(10000, 999999);
      $_SESSION['otp'] = $otp;
      $subject = "One Time Password generated";
      $string = "Your password OTP is $otp";
      $html = "<h1>OTP is $otp</h1>";
      Mail::send($email, $subject, $string, $html);
    }
    else {
      header('Location: /Signup/new.php');
    }
  }

  /**
   * Checks the OTP and redirects to the password reset form.
   */
  public function checkOtpAction() {
    if ($_SESSION['otp'] == $_POST['otp']) {
      header('Location: /Password/resetPassword');
      exit;
    }
    else {
      echo "wrong OTP";
      header('Location: /Login/new');
    }
  }

  /**
   * view the password reset view.
   */
  public function resetPasswordAction() {
    if (isset($_SESSION['email'])) {
      View::render('Password/resetpassword.php');
    }
    else {
      header('Location: /Home/index');
    }
  }
  

  /**
   * Summary of resetAction
   * updates password in the database
   * @return never
   */
  public function resetAction() {
    $user = User::updatePassword($_POST['password']);
    $logout= new User;
    $logout->Logout();
    if ($user) {
      echo('Password updated');
      header('Location: /Login/new');
      exit;
    }
    else {
      echo('Password not updated');
      header('Location: /Login/new');
      exit;
    }
  }
}