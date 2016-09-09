<?php

use Mirahost\NetworkTools\WebsiteHost;

class WebsiteHostTest extends PHPUnit_Framework_TestCase {

    public function testWebsiteHost()
    {
        $WebsiteHost = new WebsiteHost;
        $this->assertContains('IP Address', $WebsiteHost->getWebsiteHost('www.example.com'));
    }

}