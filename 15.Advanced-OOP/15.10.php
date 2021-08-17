<?php

/*
D => Dependency Inversion Principle
(যখন একটা ক্লাস লেখা হবে তখন এর ফাংশনালিটিগুলো abstruction এর উপর নির্ভর করা উচিত। এর application Dependency Injection.
)
 */

class Authenticator {
    function authenticator( $username, $password, $external = false, $externalService = false ) {
        if ( $external == true && "google" == $externalService ) {
            $ga = new GoogleAuthentictor();
            $ga->authenticator();
        } elseif ( $external == true && "github" == $externalService ) {
            $ga = new GithubAuthentictor();
            $ga->authenticator();
        } else {
            $la = new LocalAuthentictor();
            $la->authenticator();
        }
    }
}

/* Good Code */

interface AuthServiceProviderInterface {
    function authenticate();
}

class GithubAuthentictor implements AuthServiceProviderInterface {
    function authenticate() {}
}

class Authenticator {
    private $authServiceProvider;
    function __construct( AuthServiceProviderInterface $asp ) {
        $this->authServiceProvider = $asp;
    }

    function authenticator() {
        $this->$asp->authenticate();
    }
}

$ga   = new GithubAuthentictor();
$auth = new Authenticator( $ga );
$auth->authenticate();

$la   = new LocalAuthentictor( $username, $password );
$auth = new Authenticator( $la );
$auth->authenticate();
