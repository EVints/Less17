<?php

namespace App\Models;


class Title
{

    private $links = [];

    private $pageName;


    public function __construct(string $pageName)
    {
        $this->pageName = $pageName;

        $this->links['about'] = 'About page | Initio - Free, multipurpose html5 template by GetTemplate';
        $this->links['blog'] = 'Blog | Initio - Free, multipurpose html5 template by GetTemplate';
        $this->links['index'] = 'Initio - Free, multipurpose html5 template by GetTemplate';
        $this->links['sidebar-left'] = 'Left Sidebar | Initio - Free, multipurpose html5 template by GetTemplate';
        $this->links['sidebar-right'] = 'Right Sidebar | Initio - Free, multipurpose html5 template by GetTemplate';
        $this->links['single'] = 'log post | Initio - Free, multipurpose html5 template by GetTemplate';
    }



    public function getPageName(): string
    {
        return $this->pageName;
    }

    public function getPageTitle(): string
    {
        return $this->links[$this->pageName];
    }
}
