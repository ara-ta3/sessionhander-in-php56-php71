<?php

class DummySession implements \SessionHandlerInterface {

    public function close()
    {
        return true;
    }

    public function destroy($session_id)
    {
        return true;
    }

    public function gc($maxlifetime)
    {
        return true;
    }

    public function open($save_path, $name)
    {
        return true;
    }

    public function read($session_id)
    {
        return null;
    }

    public function write($session_id, $session_data)
    {
        return true;
    }
}


function main() {
    session_set_save_handler(new DummySession());
    session_start();
    echo "OK";
}


main();


