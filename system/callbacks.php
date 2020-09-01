<?php

    // CSRF ACCESS
    if( !isset( $_COOKIE['csrf_cookie_name'] ) or $_COOKIE['csrf_cookie_name'] !== $this->security->get_csrf_hash() )
    {
        // Намеренно вводим в заблуждение, сообщая что заявка отправленна ;)
        $RETURN = false;
    }
