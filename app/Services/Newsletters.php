<?php
namespace App\Services;

use MailchimpMarketing\ApiClient;


class Newsletters
{

public function __construct(protected ApiClient $client){
    

}


    public function subcribe(string $email, string $list = null)
    {
        $list ??= config('services.mailchimp.lists.subscribers');

      return $this->client->lists->addListMember($list, [
            "email_address" => $email,
            "status" => "subscribed"
        ]);
    }
}