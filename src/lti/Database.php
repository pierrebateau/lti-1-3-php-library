<?php
namespace IMSGlobal\LTI;

interface Database {
    public function find_registration_by_issuer_and_client_id($iss, $client_id);
    public function find_deployment($iss, $client_id, $deployment_id);
}

