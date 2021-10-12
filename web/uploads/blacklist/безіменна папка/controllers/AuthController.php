<?php
class AuthController extends BaseRender
{
    public function actionSignup()
    {
        return $this->render('auth/signup');
    }
}

?>