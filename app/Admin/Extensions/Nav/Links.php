<?php

namespace App\Admin\Extensions\Nav;

class Links
{
    public function __toString()
    {
        return <<<HTML
        <ul class="my-ul">
            <div class="nav-container">

<li>
    <a href="/admin/projects">
      <button class="my-button label label-success">See Projects</button>
    </a>
</li>

<li>
    <a href="/admin/project-images">
      <button class="my-button label label-warning">See Project Images</button>
    </a>
</li>

<li>
    <a href="/admin/team">
      <button class="my-button label label-danger">See Team</button>
    </a>
</li>

<li>
    <a href="/admin/blog">
      <button class="my-button label label-primary">See Blog</button>
    </a>
</li>
<li>
    <a href="/admin/contact">
      <button class="my-button label label-warning">See Contacts</button>
    </a>
</li>
<li>
    <a href="admin/auth/users">
      <button class="my-button label label-success">See Users</button>
    </a>
</li>
    </ul>
    <div>
<style>
    .nav-container {
        width: 100%;
        display: flex;
        align-items: space-between;
    }
    .my-button {
        padding: 20px;
        margin: 15px;
        font-size: 20px;
        outline: none;
        border: 0;
    }
    .my-ul {
        list-style-type: none;
    }
</style>
HTML;
    }
}