<?php
class Session
{
    // Start the session
    public static function start()
    {
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }
    }

    // Set a session value
    public static function put($key, $value)
    {
        $_SESSION[$key] = $value;
    }

    // Get a session value
    public static function get($key, $default = null)
    {
        return $_SESSION[$key] ?? $default;
    }

    // Check if a session key exists
    public static function has($key)
    {
        return isset($_SESSION[$key]);
    }

    // Remove a session key
    public static function forget($key)
    {
        unset($_SESSION[$key]);
    }

    // Regenerate the session ID
    public static function regenerate()
    {
        session_regenerate_id(true);
    }

    // Destroy the session
    public static function destroy()
    {
        session_destroy();
    }

    /**
     * EXAMPLE -  session()->flash('register_success','you are registered');
     * DISPLAY IN VIEW - echo session()->flash('register_success');
     * @param String $key
     * @param String $message
     * @param String $class
    */
    public static function flash($key='',$message='',$class='text-danger')
    {
        if(!empty($key))
        {

            if(!empty($message) && empty($_SESSION[$key]))
                {

                    if(!empty($_SESSION[$key]))
                    {
                        unset($_SESSION[$key]);
                    }

                    if(!empty($_SESSION[$key. '_class']))
                    {
                        unset($_SESSION[$key. '_class']);
                    }

                    $_SESSION[$key] = $message;
                    $_SESSION[$key. '_class'] = $class;
                }
            elseif (empty($message) && !empty($_SESSION[$key]))
            {
                $class = !empty($_SESSION[$key. '_class']) ? $_SESSION[$key. '_class'] : '';
                echo '<div class="'.$class.'" id="msg-flash">'.$_SESSION[$key].'</div>';
                unset($_SESSION[$key]);
                unset($_SESSION[$key. '_class']);
            }
        }
    }
}
